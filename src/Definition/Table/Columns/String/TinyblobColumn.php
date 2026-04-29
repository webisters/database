<?php declare(strict_types=1);
/*
 * This file is part of Webisters Database Library.
 *
 * (c) Hafiz Muhammad Moaz <thewebisters@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Framework\Database\Definition\Table\Columns\String;

use Framework\Database\Definition\Table\Columns\Column;

/**
 * Class TinyblobColumn.
 *
 * @see https://mariadb.com/kb/en/tinyblob/
 *
 * @package database
 */
final class TinyblobColumn extends Column
{
    protected string $type = 'tinyblob';
}
