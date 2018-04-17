<?php

/**
 * `TRUNCATE` statement.
 */

namespace PhpMyAdmin\SqlParser\Statements;

<<<<<<< HEAD
use PhpMyAdmin\SqlParser\Components\Expression;
use PhpMyAdmin\SqlParser\Statement;
=======
use PhpMyAdmin\SqlParser\Statement;
use PhpMyAdmin\SqlParser\Components\Expression;
>>>>>>> 963d7f7adf76dfd7a7dbc54b828074e76cfb4d65

/**
 * `TRUNCATE` statement.
 *
 * @category   Statements
 *
 * @license    https://www.gnu.org/licenses/gpl-2.0.txt GPL-2.0+
 */
class TruncateStatement extends Statement
{
    /**
     * Options for `TRUNCATE` statements.
     *
     * @var array
     */
    public static $OPTIONS = array(
        'TABLE' => 1,
    );

    /**
     * The name of the truncated table.
     *
     * @var Expression
     */
    public $table;
}
