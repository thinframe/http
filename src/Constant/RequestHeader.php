<?php

/**
 * @author    Sorin Badea <sorin.badea91@gmail.com>
 * @license   MIT license (see the license file in the root directory)
 */

namespace ThinFrame\Http\Constant;

/**
 * RequestHeader
 *
 * @package ThinFrame\Http\Constants
 * @since   0.2
 * @link    http://en.wikipedia.org/wiki/List_of_HTTP_header_fields
 */
final class RequestHeader
{
    const ACCEPT              = 'Accept';
    const ACCEPT_CHARSET      = 'Accept-Charset';
    const ACCEPT_ENCODING     = 'Accept-Encoding';
    const ACCEPT_LANGUAGE     = 'Accept-Language';
    const ACCEPT_DATETIME     = 'Accept-Datetime';
    const AUTHORIZATION       = 'Authorization';
    const CACHE_CONTROL       = 'Cache-Control';
    const CONNECTION          = 'Connection';
    const COOKIE              = 'Cookie';
    const CONTENT_LENGTH      = 'Content-Length';
    const CONTENT_MD5         = 'Content-MD5';
    const CONTENT_TYPE        = 'Content-Type';
    const DATE                = 'Date';
    const EXPECT              = 'Expect';
    const FROM                = 'From';
    const HOST                = 'Host';
    const IF_MATCH            = 'If-Match';
    const IF_MODIFIED_SINCE   = 'If-Modified-Since';
    const IF_NONE_MATCH       = 'If-None-Match';
    const IF_RANGE            = 'If-Range';
    const IF_UNMODIFIED_SINCE = 'If-Unmodified-Since';
    const MAX_FORWARDS        = 'Max-Forwards';
    const ORIGIN              = 'Origin';
    const PRAGMA              = 'Pragma';
    const PROXY_AUTHORIZATION = 'Proxy-Authorization';
    const RANGE               = 'Range';
    const REFERER             = 'Referer';
    const TE                  = 'TE';
    const UPGRADE             = 'Upgrade';
    const USER_AGENT          = 'User-Agent';
    const VIA                 = 'Via';
    const WARNING             = 'Warning';
    const X_REQUESTED_WITH    = 'X-Requested-With';
    const DNT                 = 'DNT';
    const X_FORWARDED_FOR     = 'X-Forwarded-For';
    const X_FORWARDED_PROTO   = 'X-Forwarded-Proto';
}
