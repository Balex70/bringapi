<?php

/*
 * This file is part of the BringApi package.
 *
 * (c) Martin Madsen <crakter@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crakter\BringApi\DefaultData;

/**
 * BringApi HttpMethods
 *
 * Specify which Http Methods are available by Bring Api
 *
 * Quick example: <code>HttpMethods::GET</code>
 *
 * @author Martin Madsen <crakter@gmail.com>
 */
abstract class HttpMethods
{
    const GET = 'GET';
    const POST = 'POST';
    const DELETE = 'DELETE';
}
