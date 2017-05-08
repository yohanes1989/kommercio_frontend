<?php

namespace Project\Project;

use Illuminate\Contracts\Foundation\Application;
use Maiorano\Shortcodes\Library\SimpleShortcode;
use Project\Project\Shortcodes\AccordionShortcode;
use Project\Project\Shortcodes\AddressShortcode;
use Project\Project\Shortcodes\TabShortcode;

class ServiceProviderBridge
{
    public static function onBoot(Application $app)
    {
        //Register shortcode
        //$app['shortcode_manager']->register(new SampleShortcode());
    }

    public static function onRegister(Application $app)
    {

    }
}