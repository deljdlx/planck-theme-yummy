<?php

namespace Planck\Theme\Yummy\Component;


class Follow extends \Planck\View\Component
{


    public function __construct($template = null)
    {
        if($template == null) {
            $this->template = __DIR__.'/template-default.php';
        }
        else {
            $this->template = __DIR__.'/'.$template;
        }
    }

    public function render()
    {

        return parent::render(); // TODO: Change the autogenerated stub
    }
}