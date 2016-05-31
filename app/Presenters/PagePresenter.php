<?php

namespace App\Presenters;

use Lewis\Presenter\AbstractPresenter;

class PagePresenter extends AbstractPresenter
{
    protected $markdown;

    public function __construct($object, Converter $markdown)
    {
        $this->markdown = $markdown;
        parent::__construct($object);
    }

    public function contentHtml()
    {
        return $this->markdown->convertToHtml($this->content);
    }

    public function uriWildcard()
    {
        return $this->uri . '*';
    }

    public function prettyUri()
    {
        return '/' . ltrim($this->uri, '/');
    }

    public function linkToPaddedTitle($link)
    {
        $padding = str_repeat('&nbsp;', $this->depth * 4);

        return $padding . link_to($link, $this->title);
    }

    public function paddedTitle()
    {
        $padding = str_repeat('&nbsp;', $this->depth * 4);

        return $padding . $this->title;
    }
}