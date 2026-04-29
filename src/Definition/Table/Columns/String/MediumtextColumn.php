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

/**
 * Class MediumtextColumn.
 *
 * @see https://mariadb.com/kb/en/mediumtext/
 *
 * @package database
 */
final class MediumtextColumn extends StringDataType
{
    protected string $type = 'mediumtext';
}
