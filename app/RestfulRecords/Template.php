<?php

namespace App\RestfulRecords;

use ixavier\Libraries\Server\RestfulRecords\Media\Image;

class Template
{
    public $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getTemplatePath(): string
    {
        return '/templates/'.$this->name;
    }

    public function getTemplateCss()
    {
        return $this->getTemplatePath().'/style.css';
    }

    public function getBackgroundImage(string $backgroundType = 'web'): Image
    {
        $i = new Image();
        $i->src = $this->getTemplatePath().'/background-'.$backgroundType.'.jpg';

        return $i;
    }
}
