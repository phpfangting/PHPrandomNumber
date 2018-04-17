<?php

/**
 * `RENAME TABLE` keyword parser.
 */

namespace PhpMyAdmin\SqlParser\Components;

use PhpMyAdmin\SqlParser\Component;
use PhpMyAdmin\SqlParser\Parser;
use PhpMyAdmin\SqlParser\Token;
use PhpMyAdmin\SqlParser\TokensList;

/**
 * `RENAME TABLE` keyword parser.
 *
 * @category   Keywords
 *
 * @license    https://www.gnu.org/licenses/gpl-2.0.txt GPL-2.0+
 */
class RenameOperation extends Component
{
    /**
     * The old table name.
     *
     * @var Expression
     */
    public $old;

    /**
     * The new table name.
     *
     * @var Expression
     */
    public $new;

    /**
<<<<<<< HEAD
     * Constructor.
     *
     * @param Expression $old Old expression.
     * @param Expression $new New expression containing new name.
     */
    public function __construct($old = null, $new = null)
    {
        $this->old = $old;
        $this->new = $new;
    }

    /**
=======
>>>>>>> 963d7f7adf76dfd7a7dbc54b828074e76cfb4d65
     * @param Parser     $parser  the parser that serves as context
     * @param TokensList $list    the list of tokens that are being parsed
     * @param array      $options parameters for parsing
     *
     * @return RenameOperation[]
     */
    public static function parse(Parser $parser, TokensList $list, array $options = array())
    {
        $ret = array();

        $expr = new self();

        /**
         * The state of the parser.
         *
         * Below are the states of the parser.
         *
         *      0 ---------------------[ old name ]--------------------> 1
         *
         *      1 ------------------------[ TO ]-----------------------> 2
         *
         *      2 ---------------------[ old name ]--------------------> 3
         *
         *      3 ------------------------[ , ]------------------------> 0
         *      3 -----------------------[ else ]----------------------> (END)
         *
         * @var int
         */
        $state = 0;

        for (; $list->idx < $list->count; ++$list->idx) {
            /**
             * Token parsed at this moment.
             *
             * @var Token
             */
            $token = $list->tokens[$list->idx];

            // End of statement.
            if ($token->type === Token::TYPE_DELIMITER) {
                break;
            }

            // Skipping whitespaces and comments.
            if (($token->type === Token::TYPE_WHITESPACE) || ($token->type === Token::TYPE_COMMENT)) {
                continue;
            }

            if ($state === 0) {
                $expr->old = Expression::parse(
                    $parser,
                    $list,
                    array(
                        'breakOnAlias' => true,
                        'parseField' => 'table',
                    )
                );
                if (empty($expr->old)) {
                    $parser->error(
                        'The old name of the table was expected.',
                        $token
                    );
                }
                $state = 1;
            } elseif ($state === 1) {
<<<<<<< HEAD
                if ($token->type === Token::TYPE_KEYWORD && $token->keyword === 'TO') {
=======
                if (($token->type === Token::TYPE_KEYWORD) && ($token->value === 'TO')) {
>>>>>>> 963d7f7adf76dfd7a7dbc54b828074e76cfb4d65
                    $state = 2;
                } else {
                    $parser->error(
                        'Keyword "TO" was expected.',
                        $token
                    );
                    break;
                }
            } elseif ($state === 2) {
                $expr->new = Expression::parse(
                    $parser,
                    $list,
                    array(
                        'breakOnAlias' => true,
                        'parseField' => 'table',
                    )
                );
                if (empty($expr->new)) {
                    $parser->error(
                        'The new name of the table was expected.',
                        $token
                    );
                }
                $state = 3;
            } elseif ($state === 3) {
                if (($token->type === Token::TYPE_OPERATOR) && ($token->value === ',')) {
                    $ret[] = $expr;
                    $expr = new self();
                    $state = 0;
                } else {
                    break;
                }
            }
        }

        if ($state !== 3) {
            $parser->error(
                'A rename operation was expected.',
                $list->tokens[$list->idx - 1]
            );
        }

        // Last iteration was not saved.
        if (!empty($expr->old)) {
            $ret[] = $expr;
        }

        --$list->idx;

        return $ret;
    }

    /**
     * @param RenameOperation $component the component to be built
     * @param array           $options   parameters for building
     *
     * @return string
     */
    public static function build($component, array $options = array())
    {
        if (is_array($component)) {
            return implode(', ', $component);
<<<<<<< HEAD
        }

        return $component->old . ' TO ' . $component->new;
=======
        } else {
            return $component->old . ' TO ' . $component->new;
        }
>>>>>>> 963d7f7adf76dfd7a7dbc54b828074e76cfb4d65
    }
}
