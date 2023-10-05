<?php

namespace Nicelizhi\Taobao;

use Nicelizhi\Admin\Extension;

class Taobao extends Extension
{
    public $name = 'taobao';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title' => 'Taobao',
        'path'  => 'taobao',
        'icon'  => 'fa-gears',
    ];
}