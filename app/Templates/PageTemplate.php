<?php
namespace App\Templates;

use Carbon\Carbon;
use App\Models\Page;
use Illuminate\View\View;

class PageTemplate extends AbstractTemplate
{
    protected $view = 'page';
    protected $pages;

    public function __construct(Page $pages)
    {
        $this->pages = $pages;
    }

    public function prepare(View $view, array $parameters)
    {
        $page = $this->pages->where('id', 1);

        $view->with('page', $page);
    }
}
