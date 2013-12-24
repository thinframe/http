<?php
namespace ThinFrame\Http\Foundation;

use PhpCollection\Map;
use ThinFrame\Http\Constants\StatusCode;

/**
 * Class AbstractResponse
 *
 * @package ThinFrame\Http\Foundation
 * @since   0.2
 */
class AbstractResponse implements ResponseInterface
{
    /**
     * @var
     */
    private $content = '';
    /**
     * @var StatusCode
     */
    private $statusCode;

    /**
     * @var Map
     */
    private $headers;

    /**
     * @var Map
     */
    private $cookies = [];

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->statusCode = new StatusCode(StatusCode::OK);
        $this->headers    = new Map();
        $this->cookies    = new Map();
    }

    /**
     * Add response content
     *
     * @param mixed $content
     *
     * @return $this
     */
    public function addContent($content)
    {
        $this->content .= (string)$content;
        return $this;
    }

    /**
     * Set response content
     *
     * @param mixed $content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Get response content
     *
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }


    /**
     * Set status code
     *
     * @param StatusCode $statusCode
     *
     * @return $this
     */
    public function setStatusCode(StatusCode $statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * Get response status code
     *
     * @return StatusCode
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Set headers
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
     * Get response headers
     *
     * @return Map
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Sets a new cookie
     *
     * @param CookieInterface $cookie
     *
     * @return $this
     */
    public function addCookie(CookieInterface $cookie)
    {
        $this->cookies->set($cookie->getName(), $cookie);
    }

    /**
     * Get response cookies
     *
     * @return Map
     */
    public function getCookies()
    {
        return $this->cookies;
    }

    /**
     * End response
     *
     * @return mixed
     */
    public function end()
    {
        //noop
    }
}
