<?php

/**
 * /src/ThinFrame/Http/Foundation/RequestInterface.php
 *
 * @copyright 2013 Sorin Badea <sorin.badea91@gmail.com>
 * @license   MIT license (see the license file in the root directory)
 */

namespace ThinFrame\Http\Foundation;

use PhpCollection\Map;
use ThinFrame\Http\Constants\Method;

/**
 * Class RequestInterface
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
     * Get uploaded files
     *
     * @return Map
     */
    public function getFiles();

    /**
     * Get body variables
     *
     * @return Map
     */
    public function getBodyVariables();

    /**
     * Get query variables
     *
     * @return Map
     */
    public function getQueryVariables();

    /**
     * Get cookies
     *
     * @return Map
     */
    public function getCookies();

    /**
     * Get http method
     *
     * @return Method
     */
    public function getMethod();

    /**
     * Get http version
     *
     * @return string
     */
    public function getHttpVersion();

    /**
     * Get request path
     *
     * @return string
     */
    public function getPath();

    /**
     * Get remote ip address
     *
     * @return string
     */
    public function getRemoteIp();
}
