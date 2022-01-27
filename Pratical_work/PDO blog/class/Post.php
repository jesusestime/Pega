<?php
class Post{
    public $id;
    public $name;
    public $content;
    public $date;

    public function getsmalltext():string{
        return substr($this->content,0,150);
    }
}