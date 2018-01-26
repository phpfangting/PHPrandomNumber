<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\ExpressionLanguage;

/**
 * Represents a token stream.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TokenStream
{
    public $current;

    private $tokens;
    private $position = 0;
<<<<<<< HEAD
    private $expression;
=======
>>>>>>> 963d7f7adf76dfd7a7dbc54b828074e76cfb4d65

    /**
     * Constructor.
     *
<<<<<<< HEAD
     * @param array  $tokens     An array of tokens
     * @param string $expression
     */
    public function __construct(array $tokens, $expression = '')
    {
        $this->tokens = $tokens;
        $this->current = $tokens[0];
        $this->expression = $expression;
=======
     * @param array $tokens An array of tokens
     */
    public function __construct(array $tokens)
    {
        $this->tokens = $tokens;
        $this->current = $tokens[0];
>>>>>>> 963d7f7adf76dfd7a7dbc54b828074e76cfb4d65
    }

    /**
     * Returns a string representation of the token stream.
     *
     * @return string
     */
    public function __toString()
    {
        return implode("\n", $this->tokens);
    }

    /**
     * Sets the pointer to the next token and returns the old one.
     */
    public function next()
    {
        if (!isset($this->tokens[$this->position])) {
<<<<<<< HEAD
            throw new SyntaxError('Unexpected end of expression', $this->current->cursor, $this->expression);
=======
            throw new SyntaxError('Unexpected end of expression', $this->current->cursor);
>>>>>>> 963d7f7adf76dfd7a7dbc54b828074e76cfb4d65
        }

        ++$this->position;

        $this->current = $this->tokens[$this->position];
    }

    /**
     * Tests a token.
     *
     * @param array|int   $type    The type to test
     * @param string|null $value   The token value
     * @param string|null $message The syntax error message
     */
    public function expect($type, $value = null, $message = null)
    {
        $token = $this->current;
        if (!$token->test($type, $value)) {
<<<<<<< HEAD
            throw new SyntaxError(sprintf('%sUnexpected token "%s" of value "%s" ("%s" expected%s)', $message ? $message.'. ' : '', $token->type, $token->value, $type, $value ? sprintf(' with value "%s"', $value) : ''), $token->cursor, $this->expression);
=======
            throw new SyntaxError(sprintf('%sUnexpected token "%s" of value "%s" ("%s" expected%s)', $message ? $message.'. ' : '', $token->type, $token->value, $type, $value ? sprintf(' with value "%s"', $value) : ''), $token->cursor);
>>>>>>> 963d7f7adf76dfd7a7dbc54b828074e76cfb4d65
        }
        $this->next();
    }

    /**
     * Checks if end of stream was reached.
     *
     * @return bool
     */
    public function isEOF()
    {
        return $this->current->type === Token::EOF_TYPE;
    }
<<<<<<< HEAD

    /**
     * @internal
     *
     * @return string
     */
    public function getExpression()
    {
        return $this->expression;
    }
=======
>>>>>>> 963d7f7adf76dfd7a7dbc54b828074e76cfb4d65
}
