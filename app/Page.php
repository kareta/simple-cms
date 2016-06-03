<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Baum\Node;

class Page extends Node
{
    protected $fillable = ['title', 'name', 'uri', 'content', 'template', 'hidden'];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value ?: null;
    }

    public function setHiddenAttribute($value)
    {
        if ($value == null) {
            $this->attributes['hidden'] = 0;
        } else {
            $this->attributes['hidden'] = $value;
        }

    }

    public function setTemplateAttribute($value)
    {
        $this->attributes['template'] = $value ?: null;
    }

    public function updateOrder($order, $orderPage)
    {
        $orderPage = $this->findOrFail($orderPage);

        if ($order == 'before') {
            $this->moveToLeftOf($orderPage);
        } elseif ($order == 'after') {
            $this->moveToRightOf($orderPage);
        } elseif ($order == 'childOf') {
            $this->makeChildOf($orderPage);
        }
    }
}
