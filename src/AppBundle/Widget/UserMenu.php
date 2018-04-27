<?php

namespace AppBundle\Widget;

use Eight\PageBundle\Widget\AbstractWidget;

class UserMenu extends AbstractWidget
{
    public function getVars()
    {
        return array(
            'html_classes',
            );
    }

    public function getLayout()
    {
        return 'AppBundle:Widget:user_menu.html.twig';
    }

    public function getName()
    {
        return 'user_menu';
    }
}