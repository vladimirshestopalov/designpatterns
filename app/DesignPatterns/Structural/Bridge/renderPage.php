<?php

namespace App\DesignPatterns\Structural\Bridge;

use App\DesignPatterns\Structural\Bridge\Pages\ProductPage;
use App\DesignPatterns\Structural\Bridge\Pages\textPage;
use App\DesignPatterns\Structural\Bridge\Renderers\HTMLrenderer;
use App\DesignPatterns\Structural\Bridge\Renderers\simpleRenderer;

class renderPage
{
    public function run()
    {
        $html_renderer=new HTMLrenderer();
        $simple_renderer=new simpleRenderer();

        $product_page=new ProductPage($html_renderer,"Заголовок","Описание");
        $text_page=new textPage($simple_renderer,"Заголовок","Описание");

        $res['product']=$product_page->renderWholePage();
        $res['text']=$text_page->renderWholePage();

        print $res['product'];
        print $res['text'];
    }
}
