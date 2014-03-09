<?php

/**
 * @author    Sorin Badea <sorin.badea91@gmail.com>
 * @license   MIT license (see the license file in the root directory)
 */

namespace ThinFrame\Http\Foundation;

use PhpCollection\Map;
use ThinFrame\Http\Constant\Method;

/**
 * RequestInterface
 *
 * @package ThinFrame\Http\Foundation
 * @since   0.2
 */
interface RequestInterface
{
    /**
     * Get headers
     *
     * @return Map
     */
    public function getHeaders();

    /**
     * Set headers map
     *
     * @param Map $headers
     *
     * @return $this
     */
    public function setHeaders(Map $headers);

    /**
     * Get uploaded files
     *
     * @return Map
     */
    public function getFiles();

    /**
     * Set files map
     *
     * @param Map $files
     *
     * @return $this
     */
    public function setFiles(Map $files);

    /**
     * Get body variables
     *
     * @return Map
     */
    public function getBodyVariables();

    /**
     * Set body variables
     *
     * @param Map $bodyVariables
     *
     * @return $this
     */
    public function setBodyVariables(Map $bodyVariables);

    /**
     * Get query variables
     *
     * @return Map
     */
    public function getQueryVariables();

    /**
     * Set query variables
     *
     * @param $queryVariables
     *
     * @return $this
     */
    public function setQueryVariables(Map $queryVariables);

    /**
     * Get cookies
     *
     * @return Map
     */
    public function getCookies();

    /**
     *
     * Set cookies map
     *
     * @param Map $cookies
     *
     * @return $this
     */
    public function setCookies(Map $cookies);

    /**
     * Get http method
     *
     * @return Method
     */
    public function getMethod();

    /**
     * Set method
     *
     * @param Method $method
     *
     * @return $this
     */
    public function setMethod(Method $method);

    /**
     * Get http version
     *
     * @return string
     */
    public function getHttpVersion();

    /**
     * Set http version
     *
     * @param string $httpVersion
     *
     * @return $this
     */
    public function setHttpVersion($httpVersion);

    /**
     * Get request path
     *
     * @return string
     */
    public function getPath();

    /**
     * Set path
     *
     * @param string $path
     *
     * @return $this
     */
    public function setPath($path);

    /**
     * Get remote ip address
     *
     * @return string
     */
    public function getRemoteIp();

    /**
     * Set remote ip address
     *
     * @param string $ipAddress
     *
     * @return $this
     */
    public function setRemoteIp($ipAddress);
}
