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
    const GET     = 'get';
    const HEAD    = 'head';
    const OPTIONS = 'options';
    const TRACE   = 'trace';
    const POST    = 'post';
    const PUT     = 'put';
    const DELETE  = 'delete';
    const PATCH   = 'patch';
}
