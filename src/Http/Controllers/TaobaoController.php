<?php

namespace Niceliizhi\Taobao\Http\Controllers;

use Nicelizhi\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class TaobaoController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Title')
            ->description('Description')
            ->body(view('taobao::index'));
    }
}