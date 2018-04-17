<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * set of common functions for sub tabs in server level `Users` page
 *
 * @package PhpMyAdmin
 */
use PMA\libraries\URL;

/**
 * Get HTML for secondary level menu tabs on 'Users' page
 *
 * @param string $selfUrl Url of the file
 *
 * @return string HTML for secondary level menu tabs on 'Users' page
 */
function PMA_getHtmlForSubMenusOnUsersPage($selfUrl)
{
<<<<<<< HEAD
=======
    $url_params = URL::getCommon();
>>>>>>> 963d7f7adf76dfd7a7dbc54b828074e76cfb4d65
    $items = array(
        array(
            'name' => __('User accounts overview'),
            'url' => 'server_privileges.php',
<<<<<<< HEAD
            'params' => URL::getCommon(array('viewing_mode' => 'server')),
=======
            'specific_params' => '&viewing_mode=server'
>>>>>>> 963d7f7adf76dfd7a7dbc54b828074e76cfb4d65
        )
    );

    if ($GLOBALS['is_superuser']) {
        $items[] = array(
            'name' => __('User groups'),
            'url' => 'server_user_groups.php',
<<<<<<< HEAD
            'params' => URL::getCommon(),
=======
            'specific_params' => ''
>>>>>>> 963d7f7adf76dfd7a7dbc54b828074e76cfb4d65
        );
    }

    $retval  = '<ul id="topmenu2">';
    foreach ($items as $item) {
        $class = '';
        if ($item['url'] === $selfUrl) {
            $class = ' class="tabactive"';
        }
        $retval .= '<li>';
        $retval .= '<a' . $class;
<<<<<<< HEAD
        $retval .= ' href="' . $item['url'] . $item['params'] . '">';
=======
        $retval .= ' href="' . $item['url']
            . $url_params . $item['specific_params'] . '">';
>>>>>>> 963d7f7adf76dfd7a7dbc54b828074e76cfb4d65
        $retval .= $item['name'];
        $retval .= '</a>';
        $retval .= '</li>';
    }
    $retval .= '</ul>';
    $retval .= '<div class="clearfloat"></div>';

    return $retval;
}
