<?php

namespace Cms\Presenters;

use Lewis\Presenter\AbstractPresenter;
use League\CommonMark\CommonMarkConverter;

class PagePresenter extends AbstractPresenter
{
    protected $markdown;

    public function __construct($object, CommonMarkConverter $markdown)
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
        return $this->uri.'*';
    }

    public function prettyUri()
    {
        return '/'.ltrim($this->uri, '/');
    }

    public function linkToPaddedTitle($link)
    {
        $padding = str_repeat('&mdash; &ensp;', $this->depth * 1);

        return $padding.link_to($link, $this->title);
    }

    public function paddedTitle()
    {
        return str_repeat('&mdash; &ensp;', $this->depth * 1).$this->title;
    }
}
