<?php

/**
 * /src/ThinFrame/Http/Foundation/CookieInterface.php
 *
 * @copyright 2013 Sorin Badea <sorin.badea91@gmail.com>
 * @license   MIT license (see the license file in the root directory)
 */

namespace ThinFrame\Http\Foundation;

/**
 * Class CookieInterface
 *
 * @package ThinFrame\Http\Foundation
 * @since   0.2
 */
interface CookieInterface
{
    /**
     * CookieInterface constructor
     *
     * @param string $name
     * @param mixed  $value
     */
    public function __construct($name, $value);

    /**
     * @return string
     */
    public function __toString();

    /**
     * Set cookie name
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name);

    /**
     * Get cookie name
     *
     * @return string
     */
    public function getName();

    /**
     * Set cookie value
     *
     * @param mixed $value
     *
     * @return $this
     */
    public function setValue($value);

    /**
     * Get cookie value
     *
     * @return mixed
     */
    public function getValue();

    /**
     * Get cookie expiration date
     *
     * @return \DateTime
     */
    public function getExpires();

    /**
     * Set cookie expiration date
     *
     * @param \DateTime $expires
     *
     * @return $this
     */
    public function setExpires(\DateTime $expires);

    /**
     * Get cookie path
     *
     * @return string
     */
    public function getPath();

    /**
     * Set cookie path
     *
     * @param string $path
     *
     * @return $this
     */
    public function setPath($path);

    /**
     * Set cookie domain
     *
     * @param $domain
     *
     * @return $this
     */
    public function setDomain($domain);

    /**
     * Get cookie domain
     *
     * @return string
     */
    public function getDomain();

    /**
     * Set cookie secure flag
     *
     * @param $secured
     *
     * @return $this
     */
    public function setSecure($secured);

    /**
     * Check if cookie have secure flag
     *
     * @return boolean
     */
    public function isSecure();

    /**
     * Check if cookie is available only via http
     *
     * @return boolean
     */
    public function isHttpOnly();

    /**
     * Set http only flag
     *
     * @param $httpOnly
     *
     * @return $this
     */
    public function setHttpOnly($httpOnly);
}
