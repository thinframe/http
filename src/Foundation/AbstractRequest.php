<?php

/**
 * @author    Sorin Badea <sorin.badea91@gmail.com>
 * @license   MIT license (see the license file in the root directory)
 */

namespace ThinFrame\Http\Foundation;

use PhpCollection\Map;
use ThinFrame\Http\Constant\Method;

/**
 * AbstractRequest
 *
 * @package ThinFrame\Http\Foundation
 * @since   0.2
 */
class AbstractRequest implements RequestInterface
{
    /**
     * @var Map
     */
    private $headers;
    /**
     * @var Map
     */
    private $files;

    /**
     * @var Map
     */
    private $bodyVariables;

    /**
     * @var Map
     */
    private $queryVariables;

    /**
     * @var Map
     */
    private $cookies;

    /**
     * @var Method
     */
    private $method;

    /**
     * @var string
     */
    private $httpVersion = '';

    /**
     * @var string
     */
    private $path = '';

    /**
     * @var string
     */
    private $remoteIp = '';

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->headers        = new Map();
        $this->files          = new Map();
        $this->bodyVariables  = new Map();
        $this->queryVariables = new Map();
        $this->cookies        = new Map();
        $this->method         = new Method(Method::GET);
    }

    /**
     * Get headers
     *
     * @return Map
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Set headers map
     *
     * @param Map $headers
     *
     * @return $this
     */
    public function setHeaders(Map $headers)
    {
        $this->headers = $headers;

        return $this;
    }

    /**
     * Get uploaded files
     *
     * @return Map
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * Set files map
     *
     * @param Map $files
     *
     * @return $this
     */
    public function setFiles(Map $files)
    {
        $this->files = $files;

        return $this;
    }

    /**
     * Get body variables
     *
     * @return Map
     */
    public function getBodyVariables()
    {
        return $this->bodyVariables;
    }

    /**
     * Set body variables
     *
     * @param Map $bodyVariables
     *
     * @return $this
     */
    public function setBodyVariables(Map $bodyVariables)
    {
        $this->bodyVariables = $bodyVariables;

        return $this;
    }

    /**
     * Get query variables
     *
     * @return Map
     */
    public function getQueryVariables()
    {
        return $this->queryVariables;
    }

    /**
     * Set query variables
     *
     * @param $queryVariables
     *
     * @return $this
     */
    public function setQueryVariables(Map $queryVariables)
    {
        $this->queryVariables = $queryVariables;

        return $this;
    }

    /**
     * Get cookies
     *
     * @return Map
     */
    public function getCookies()
    {
        return $this->cookies;
    }

    /**
     *
     * Set cookies map
     *
     * @param Map $cookies
     *
     * @return $this
     */
    public function setCookies(Map $cookies)
    {
        $this->cookies = $cookies;

        return $this;
    }

    /**
     * Get http method
     *
     * @return Method
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set method
     *
     * @param Method $method
     *
     * @return $this
     */
    public function setMethod(Method $method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Get http version
     *
     * @return string
     */
    public function getHttpVersion()
    {
        return $this->getHttpVersion();
    }

    /**
     * Set http version
     *
     * @param string $httpVersion
     *
     * @return $this
     */
    public function setHttpVersion($httpVersion)
    {
        $this->httpVersion = $httpVersion;

        return $this;
    }

    /**
     * Get request path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get remote ip address
     *
     * @return string
     */
    public function getRemoteIp()
    {
        return $this->remoteIp;
    }

    /**
     * Set remote ip address
     *
     * @param string $ipAddress
     *
     * @return $this
     */
    public function setRemoteIp($ipAddress)
    {
        $this->remoteIp = $ipAddress;

        return $this;
    }
}
