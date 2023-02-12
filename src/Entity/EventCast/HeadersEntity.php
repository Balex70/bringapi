<?php

/*
 * This file is part of the BringApi package.
 *
 * (c) Alex Bachynskyi <bachynskyialex@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crakter\BringApi\Entity\EventCast;

use Crakter\BringApi\Entity\ApiEntityBase;
use Crakter\BringApi\Entity\ApiEntityInterface;

/**
 * BringApi HeaderEntity
 *
 * An class to supply correct information to Bring Api servers
 *
 * @property string $key
 * @property string $value
 * @method ApiEntityInterface setKey(string $string)
 * @method string getKey()
 * @method ApiEntityInterface setValue(string $string)
 * @method string getValue()
 * @author Alex Bachynskyi <bachynskyialex@gmail.com>
 */
class HeadersEntity extends ApiEntityBase implements ApiEntityInterface
{
    /**
     * @var string $key
     */
    public $key;

    /**
     * @var string
     */
    public $value;
}
