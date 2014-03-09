<?php

/**
 * @author    Sorin Badea <sorin.badea91@gmail.com>
 * @license   MIT license (see the license file in the root directory)
 */

namespace ThinFrame\Http\Util;

/**
 * BodyParser - parse a raw http body
 *
 * @package ThinFrame\Http\Utils
 * @since   0.2
 */
class BodyParser
{
    const BOUNDARY_IDENTIFIER = 'boundary=';
    /**
     * @var string
     */
    private $tmpDir = 'tmp/';
    /**
     * @var array
     */
    private $headers = [];
    /**
     * @var string
     */
    private $body = "";
    /**
     * @var array
     */
    private $variables = [];
    /**
     * @var array
     */
    private $files = [];
    /**
     * @var array
     */
    private $tmpFiles = [];

    /**
     * @param       $body
     * @param array $headers
     */
    public function __construct($body, array $headers)
    {
        $this->body    = $body;
        $this->headers = $headers;
        $this->parse();
    }

    /**
     * parse http body
     */
    private function parse()
    {
        if (trim($this->body) == "" || !isset($this->headers['Content-Type'])) {
            return;
        }
        if (strstr($this->headers['Content-Type'], self::BOUNDARY_IDENTIFIER)) {
            $this->parseBounderedBody();
        } else {
            switch ($this->headers['Content-Type']) {
                case 'application/x-www-form-urlencoded':
                    parse_str($this->body, $this->variables);
                    break;
                case 'application/json':
                    $this->variables = (array)json_decode($this->body, true);
                    break;
                default:
                    break;
            }
        }

    }

    /**
     * parse boundred body
     */
    private function parseBounderedBody()
    {
        $elements = explode('--' . $this->getBoundaryIdentifier(), $this->body);
        foreach ($elements as $element) {
            $element = trim($element);
            $rows    = explode("\n", $element, 3);
            if (count($rows) != 3) {
                continue;
            }
            $rows[0] = str_replace("; ", "\n", $rows[0]);
            $rows[0] = str_replace(": ", "=", $rows[0]);

            $rows[1] = str_replace("; ", "\n", $rows[1]);
            $rows[1] = str_replace(": ", "=", $rows[1]);

            $rows[2] = trim($rows[2]);

            $details           = @parse_ini_string($rows[0]);
            $additionalDetails = @parse_ini_string($rows[1]);

            if (!isset($details['Content-Disposition']) || $details['Content-Disposition'] != 'form-data') {
                continue;
            }


            if (isset($details['filename'])) {
                $filePath = $this->tmpDir . uniqid('file_') . '-' . $details['filename'];
                if (!is_dir($this->tmpDir)) {
                    mkdir($this->tmpDir, 0777, true);
                }
                file_put_contents($filePath, $rows[2]);
                $this->files[urldecode($details['name'])] = [
                    'tmpFilePath' => $filePath,
                    'fileName'    => $details['filename'],
                    'contentType' => $additionalDetails['Content-Type']
                ];
                $this->tmpFiles[]                         = $filePath;
            } else {
                $this->variables[urldecode($details['name'])] = urldecode($rows[2]);
            }
        }
        parse_str(http_build_query($this->variables), $variables);
        parse_str(http_build_query($this->files), $files);
        $this->variables = $variables;
        $this->files     = $files;
    }

    /**
     * Get boundary identifier
     *
     * @return string
     */
    private function getBoundaryIdentifier()
    {
        $startPosition = strpos($this->headers['Content-Type'], self::BOUNDARY_IDENTIFIER)
            + strlen(self::BOUNDARY_IDENTIFIER);

        return substr($this->headers['Content-Type'], $startPosition);
    }

    /**
     * @return array
     */
    public function getVariables()
    {
        return $this->variables;
    }

    /**
     * Get uploaded files
     *
     * @return array
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * delete tmp uploaded files
     */
    public function deleteTmpFiles()
    {
        foreach ($this->tmpFiles as $filePath) {
            @unlink($filePath);
        }
    }
}
