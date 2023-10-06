<?php

namespace Nicelizhi\Taobao;

use Nicelizhi\Admin\Extension;

class Taobao extends Extension
{
    
    /**
     * The version.
     *
     * @var string
     */
    const VERSION = '1.0.0';

    public $name = 'taobao';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title' => 'Taobao',
        'path'  => 'taobao',
        'icon'  => 'fa-gears',
    ];
}