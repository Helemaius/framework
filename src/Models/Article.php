<?php

namespace App\Models;

class Article
{
public $id;
public $title;
public $content;

    public function capitalizedTitle()
    {
        return strtoupper($this->title);
}
}