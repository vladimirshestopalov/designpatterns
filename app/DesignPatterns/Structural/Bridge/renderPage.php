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

        $product_page=new ProductPage($html_renderer,"Заголовок продукта","Описание продукта");
        $text_page=new textPage($simple_renderer,"Заголовок текста","Описание теста");

        $product_page->renderWholePage();
        print "<hr>";
        $text_page->renderWholePage();


    }
}
