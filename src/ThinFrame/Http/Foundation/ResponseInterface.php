<?php

/**
 * /src/ThinFrame/Http/Foundation/ResponseInterface.php
 *
 * @copyright 2013 Sorin Badea <sorin.badea91@gmail.com>
 * @license   MIT license (see the license file in the root directory)
 */

namespace ThinFrame\Http\Foundation;

use PhpCollection\Map;
use ThinFrame\Http\Constants\StatusCode;

/**
 * Class ResponseInterface
 *
 * @package ThinFrame\Http\Foundation
 * @since   0.2
 */
interface ResponseInterface
{
    /**
     * Add response content
     *
     * @param mixed $content
     *
     * @return $this
     */
    public function addContent($content);

    /**
     * Set status code
     *
     * @param StatusCode $statusCode
     *
     * @return $this
     */
    public function setStatusCode(StatusCode $statusCode);

    /**
     * Get response status code
     *
     * @return StatusCode
     */
    public function getStatusCode();

    /**
     * Set headers
     *
     * @param Map $headers
     *
     * @return $this
     */
    public function setHeaders(Map $headers);

    /**
     * Get response headers
     *
     * @return Map
     */
    public function getHeaders();

    /**
     * Sets a new cookie
     *
     * @param CookieInterface $cookie
     *
     * @return $this
     */
    public function addCookie(CookieInterface $cookie);
}
