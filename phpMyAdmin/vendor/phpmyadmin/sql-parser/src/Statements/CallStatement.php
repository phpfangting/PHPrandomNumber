<?php

/**
 * `CALL` statement.
 */

namespace PhpMyAdmin\SqlParser\Statements;

<<<<<<< HEAD
use PhpMyAdmin\SqlParser\Components\FunctionCall;
use PhpMyAdmin\SqlParser\Statement;
=======
use PhpMyAdmin\SqlParser\Statement;
use PhpMyAdmin\SqlParser\Components\FunctionCall;
>>>>>>> 963d7f7adf76dfd7a7dbc54b828074e76cfb4d65

/**
 * `CALL` statement.
 *
 * CALL sp_name([parameter[,...]])
 *
 * or
 *
 * CALL sp_name[()]
 *
 * @category   Statements
 *
 * @license    https://www.gnu.org/licenses/gpl-2.0.txt GPL-2.0+
 */
class CallStatement extends Statement
{
    /**
     * The name of the function and its parameters.
     *
     * @var FunctionCall
     */
    public $call;
}
