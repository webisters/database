<?php declare(strict_types=1);
/*
 * This file is part of Webisters Database Library.
 *
 * (c) Hafiz Muhammad Moaz <thewebisters@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Framework\Database\Definition\Table\Columns\Numeric;

/**
 * Class TinyintColumn.
 *
 * @package database
 */
final class TinyintColumn extends NumericDataType
{
    protected string $type = 'tinyint';
    protected int $maxLength = 127;
}
