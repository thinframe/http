<?php

/**
 * /src/Constants/Method.php
 *
 * @author    Sorin Badea <sorin.badea91@gmail.com>
 * @license   MIT license (see the license file in the root directory)
 */

namespace ThinFrame\Http\Constants;

use ThinFrame\Foundation\DataTypes\AbstractEnum;

/**
 * Class Method
 *
 * @package ThinFrame\Http\Constants
 * @since   0.2
 */
final class Method extends AbstractEnum
{
    const GET     = 'GET';
    const HEAD    = 'HEAD';
    const OPTIONS = 'OPTIONS';
    const TRACE   = 'TRACE';
    const POST    = 'POST';
    const PUT     = 'PUT';
    const DELETE  = 'DELETE';
    const PATCH   = 'PATCH';
}
