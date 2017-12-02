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

class SyntaxError extends \LogicException
{
<<<<<<< HEAD
    public function __construct($message, $cursor = 0, $expression = '')
    {
        $message = sprintf('%s around position %d', $message, $cursor);
        if ($expression) {
            $message = sprintf('%s for expression `%s`', $message, $expression);
        }
        $message .= '.';

        parent::__construct($message);
=======
    public function __construct($message, $cursor = 0)
    {
        parent::__construct(sprintf('%s around position %d.', $message, $cursor));
>>>>>>> 963d7f7adf76dfd7a7dbc54b828074e76cfb4d65
    }
}
