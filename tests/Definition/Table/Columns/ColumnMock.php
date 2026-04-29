<?php
/*
 * This file is part of Webisters Database Library.
 *
 * (c) Hafiz Muhammad Moaz <thewebisters@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\Database\Definition\Table\Columns;

use Framework\Database\Definition\Table\Columns\Column;

class ColumnMock extends Column
{
    public string $type = 'mock';
}
