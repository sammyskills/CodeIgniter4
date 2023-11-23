<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace CodeIgniter\Database\DataConverter\Cast;

/**
 * Class FloatCast
 *
 * (PHP) [float --> float       ] --> (DB driver) --> (DB column) float
 *       [      <-- float|string] <-- (DB driver) <-- (DB column) float
 *
 * @extends BaseCast<float, float, mixed>
 */
class FloatCast extends BaseCast
{
    /**
     * {@inheritDoc}
     */
    public static function fromDatabase(mixed $value, array $params = []): float
    {
        if (! is_float($value) && ! is_string($value)) {
            self::invalidTypeValueError($value);
        }

        return (float) $value;
    }
}
