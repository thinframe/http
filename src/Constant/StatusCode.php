<?php

/**
 * /src/Constants/StatusCode.php
 *
 * @author Sorin Badea <sorin.badea91@gmail.com>
 * @license   MIT license (see the license file in the root directory)
 */

namespace ThinFrame\Http\Constant;

use ThinFrame\Foundation\DataType\AbstractEnum;
use ThinFrame\Foundation\Exception\InvalidArgumentException;

/**
 * Class StatusCode
 *
 * @package ThinFrame\Http\Constants
 * @since   0.2
 */
final class StatusCode extends AbstractEnum
{
    const CONTINUE_TRANSACTION            = 100;
    const SWITCHING_PROTOCOLS             = 101;
    const OK                              = 200;
    const CREATED                         = 201;
    const ACCEPTED                        = 202;
    const NON_AUTHORITATIVE_INFORMATION   = 203;
    const NO_CONTENT                      = 204;
    const RESET_CONTENT                   = 205;
    const PARTIAL_CONTENT                 = 206;
    const MULTIPLE_CHOICES                = 300;
    const MOVED_PERMANENTLY               = 301;
    const FOUND                           = 302;
    const SEE_OTHER                       = 303;
    const NOT_MODIFIED                    = 304;
    const USE_PROXY                       = 305;
    const TEMPORARY_REDIRECT              = 307;
    const BAD_REQUEST                     = 400;
    const UNAUTHORIZED                    = 401;
    const PAYMENT_REQUIRED                = 402;
    const FORBIDDEN                       = 403;
    const NOT_FOUND                       = 404;
    const METHOD_NOT_ALLOWED              = 405;
    const NOT_ACCEPTABLE                  = 406;
    const PROXY_AUTHENTICATION_REQUIRED   = 407;
    const REQUEST_TIME_OUT                = 408;
    const CONFLICT                        = 409;
    const GONE                            = 410;
    const LENGTH_REQUIRED                 = 411;
    const PRECONDITION_FAILED             = 412;
    const REQUEST_ENTITY_TOO_LARGE        = 413;
    const REQUEST_URI_TOO_LARGE           = 414;
    const UNSUPPORTED_MEDIA_TYPE          = 415;
    const REQUESTED_RANGE_NOT_SATISFIABLE = 416;
    const EXPECTATION_FAILED              = 417;
    const INTERNAL_SERVER_ERROR           = 500;
    const NOT_IMPLEMENTED                 = 501;
    const BAD_GATEWAY                     = 502;
    const SERVICE_UNAVAILABLE             = 503;
    const GATEWAY_TIME_OUT                = 504;
    const HTTP_VERSION_NOT_SUPPORTED      = 505;
    /**
     * Http Code Messages
     *
     * @var array
     */
    private static $messages = [
        100 => '100 Continue',
        101 => '101 Switching Protocols',
        200 => '200 OK',
        201 => '201 Created',
        202 => '202 Accepted',
        203 => '203 Non-Authoritative Information',
        204 => '204 No Content',
        205 => '205 Reset Content',
        206 => '206 Partial Content',
        300 => '300 Multiple Choices',
        301 => '301 Moved Permanently',
        302 => '302 Found',
        303 => '303 See Other',
        304 => '304 Not Modified',
        305 => '305 Use Proxy',
        307 => '307 Temporary Redirect',
        400 => '400 Bad Request',
        401 => '401 Unauthorized',
        402 => '402 Payment Required',
        403 => '403 Forbidden',
        404 => '404 Not Found',
        405 => '405 Method Not Allowed',
        406 => '406 Not Acceptable',
        407 => '407 Proxy Authentication Required',
        408 => '408 Request Time-out',
        409 => '409 Conflict',
        410 => '410 Gone',
        411 => '411 Length Required',
        412 => '412 Precondition Failed',
        413 => '413 Request Entity Too Large',
        414 => '414 Request-URI Too Large',
        415 => '415 Unsupported Media Type',
        416 => '416 Requested Range Not Satisfiable',
        417 => '417 Expectation Failed',
        500 => '500 Internal Server Error',
        501 => '501 Not Implemented',
        502 => '502 Bad Gateway',
        503 => '503 Service Unavailable',
        504 => '504 Gateway Time-out',
        505 => '505 HTTP Version Not Supported',
    ];

    /**
     * @param string $protocol
     *
     * @return string
     */
    public function getMessage($protocol = "HTTP/1.1")
    {
        return self::getMessageFor((string)$this, $protocol);
    }

    /**
     * @param int    $statusCode
     * @param string $protocol
     *
     * @return string
     * @throws \ThinFrame\Foundation\Exception\InvalidArgumentException
     */
    public static function getMessageFor($statusCode, $protocol = "HTTP/1.1")
    {
        if (self::isValid($statusCode)) {
            return $protocol . " " . self::$messages[$statusCode];
        }
        throw new InvalidArgumentException('Invalid status code provided');
    }

    /**
     * Check if status code is informational
     *
     * @return bool
     */
    public function isInformational()
    {
        return !!((string)$this >= 100 & (string)$this < 200);
    }

    /**
     * Check if status code is successful
     *
     * @return bool
     */
    public function isSuccessful()
    {
        return !!((string)$this >= 200 & (string)$this < 300);
    }

    /**
     * Check if status code represents a redirection
     *
     * @return bool
     */
    public function isRedirection()
    {
        return !!((string)$this >= 300 & (string)$this < 400);
    }

    /**
     * Check if status code represents a client error
     *
     * @return bool
     */
    public function isClientError()
    {
        return !!((string)$this >= 400 & (string)$this < 500);
    }

    /**
     * Check if status code represents a server error
     *
     * @return bool
     */
    public function isServerError()
    {
        return !!((string)$this >= 500 & (string)$this < 600);
    }
}
