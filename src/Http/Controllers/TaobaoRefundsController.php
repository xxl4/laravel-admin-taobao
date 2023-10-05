<?php

namespace Nicelizhi\Taobao\Http\Controllers;

use Nicelizhi\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class TaobaoRefundsController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Title')
            ->description('Description')
            ->body(view('taobao::index'));
    }
}