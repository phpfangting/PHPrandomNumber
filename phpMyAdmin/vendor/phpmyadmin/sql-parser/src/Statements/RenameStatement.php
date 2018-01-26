<?php

/**
 * `RENAME` statement.
 */

namespace PhpMyAdmin\SqlParser\Statements;

<<<<<<< HEAD
use PhpMyAdmin\SqlParser\Components\RenameOperation;
=======
>>>>>>> 963d7f7adf76dfd7a7dbc54b828074e76cfb4d65
use PhpMyAdmin\SqlParser\Parser;
use PhpMyAdmin\SqlParser\Statement;
use PhpMyAdmin\SqlParser\Token;
use PhpMyAdmin\SqlParser\TokensList;
<<<<<<< HEAD
=======
use PhpMyAdmin\SqlParser\Components\RenameOperation;
>>>>>>> 963d7f7adf76dfd7a7dbc54b828074e76cfb4d65

/**
 * `RENAME` statement.
 *
 * RENAME TABLE tbl_name TO new_tbl_name
 *  [, tbl_name2 TO new_tbl_name2] ...
 *
 * @category   Statements
 *
 * @license    https://www.gnu.org/licenses/gpl-2.0.txt GPL-2.0+
 */
class RenameStatement extends Statement
{
    /**
     * The old and new names of the tables.
     *
     * @var RenameOperation[]
     */
    public $renames;

    /**
     * Function called before the token is processed.
     *
     * Skips the `TABLE` keyword after `RENAME`.
     *
     * @param Parser     $parser the instance that requests parsing
     * @param TokensList $list   the list of tokens to be parsed
     * @param Token      $token  the token that is being parsed
     */
    public function before(Parser $parser, TokensList $list, Token $token)
    {
<<<<<<< HEAD
        if (($token->type === Token::TYPE_KEYWORD) && ($token->keyword === 'RENAME')) {
=======
        if (($token->type === Token::TYPE_KEYWORD) && ($token->value === 'RENAME')) {
>>>>>>> 963d7f7adf76dfd7a7dbc54b828074e76cfb4d65
            // Checking if it is the beginning of the query.
            $list->getNextOfTypeAndValue(Token::TYPE_KEYWORD, 'TABLE');
        }
    }
}
