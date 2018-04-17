<?php

/**
 * `DROP` statement.
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
 * `DROP` statement.
 *
 * @category   Statements
 *
 * @license    https://www.gnu.org/licenses/gpl-2.0.txt GPL-2.0+
 */
class DropStatement extends Statement
{
    /**
     * Options of this statement.
     *
     * @var array
     */
    public static $OPTIONS = array(
        'DATABASE' => 1,
        'EVENT' => 1,
        'FUNCTION' => 1,
        'INDEX' => 1,
        'LOGFILE' => 1,
        'PROCEDURE' => 1,
        'SCHEMA' => 1,
        'SERVER' => 1,
        'TABLE' => 1,
        'VIEW' => 1,
        'TABLESPACE' => 1,
        'TRIGGER' => 1,

        'TEMPORARY' => 2,
        'IF EXISTS' => 3,
    );

    /**
     * The clauses of this statement, in order.
     *
     * @see Statement::$CLAUSES
     *
     * @var array
     */
    public static $CLAUSES = array(
<<<<<<< HEAD
        'DROP' => array('DROP', 2),
        // Used for options.
        '_OPTIONS' => array('_OPTIONS', 1),
        // Used for select expressions.
        'DROP_' => array('DROP', 1),
        'ON' => array('ON', 3),
=======
        'DROP' => array('DROP',        2),
        // Used for options.
        '_OPTIONS' => array('_OPTIONS',    1),
        // Used for select expressions.
        'DROP_' => array('DROP',        1),
        'ON' => array('ON',          3),
>>>>>>> 963d7f7adf76dfd7a7dbc54b828074e76cfb4d65
    );

    /**
     * Dropped elements.
     *
     * @var Expression[]
     */
    public $fields;

    /**
     * Table of the dropped index.
     *
     * @var Expression
     */
    public $table;
}
