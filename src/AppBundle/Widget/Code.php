<?php

namespace AppBundle\Widget;

use Eight\PageBundle\Widget\AbstractWidget;
use Eight\PageBundle\Variable\Config\Config;

class Code extends AbstractWidget
{
    public function getVars()
    {
        return array(
            'html_classes',
            'code_class',
            'code' => new Config(array(
                'type' => 'text',
                'raw' => true,
                )),
            );
    }

    public function getLayout()
    {
        return 'AppBundle:Widget:code.html.twig';
    }

    public function getName()
    {
        return 'code';
    }

    public function js()
    {
        return array(
            '/bundles/app/lib/highlight/highlight.pack.js',
            '/bundles/app/js/code.js',
            );
    }

    public function css()
    {
        return array(
            '/bundles/app/lib/highlight/styles/github.css',
            );
    }
}