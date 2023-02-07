<?php

namespace App\DesignPatterns\Structural\Bridge\Pages;

use App\DesignPatterns\Structural\Bridge\Page;

class textPage extends Page
{
    protected $title;
    protected $descr;

    public function __construct($renderer,$title,$descr)
    {
        $this->descr=$descr;
        $this->title=$title;
        parent::__construct($renderer);
    }

    public function renderWholePage()
    {
        $res= $this->renderer->renderTitle($this->title);
        $res.= $this->renderer->renderDescr($this->descr);
        return $res;
    }
}
