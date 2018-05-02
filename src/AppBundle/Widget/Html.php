<?php

namespace AppBundle\Widget;

use Eight\PageBundle\Widget\AbstractWidget;
use Eight\PageBundle\Variable\Config\Config;

class Html extends AbstractWidget
{
    public function getVars()
    {
        return array(
            'html_classes',
            'html' => new Config(array(
                'type' => 'text',
                'raw' => true,
                )),
            );
    }

    public function getLayout()
    {
        return 'AppBundle:Widget:html.html.twig';
    }

    public function getName()
    {
        return 'raw_html';
    }
}