<?php declare(strict_types=1);
/*
 * This file is part of Webisters Database Library.
 *
 * (c) Hafiz Muhammad Moaz <thewebisters@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Framework\Database\Debug;

use Framework\Debug\Collection;

/**
 * Class DatabaseCollection.
 *
 * @package database
 */
class DatabaseCollection extends Collection
{
    protected string $iconPath = __DIR__ . '/icons/database.svg';
}
