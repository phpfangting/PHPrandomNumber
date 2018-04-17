<?php

/**
 * `UNION` keyword builder.
 */

namespace PhpMyAdmin\SqlParser\Components;

use PhpMyAdmin\SqlParser\Component;
<<<<<<< HEAD
=======
use PhpMyAdmin\SqlParser\Statements\SelectStatement;
>>>>>>> 963d7f7adf76dfd7a7dbc54b828074e76cfb4d65

/**
 * `UNION` keyword builder.
 *
 * @category   Keywords
 *
 * @license    https://www.gnu.org/licenses/gpl-2.0.txt GPL-2.0+
 */
class UnionKeyword extends Component
{
    /**
<<<<<<< HEAD
     * @param UnionKeyword[] $component the component to be built
     * @param array          $options   parameters for building
=======
     * @param SelectStatement[] $component the component to be built
     * @param array             $options   parameters for building
>>>>>>> 963d7f7adf76dfd7a7dbc54b828074e76cfb4d65
     *
     * @return string
     */
    public static function build($component, array $options = array())
    {
        $tmp = array();
        foreach ($component as $component) {
            $tmp[] = $component[0] . ' ' . $component[1];
        }

        return implode(' ', $tmp);
    }
}
