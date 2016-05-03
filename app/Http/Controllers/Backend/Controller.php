<?php
namespace App\Http\Controllers\Backend;

use Illuminate\Routing\Controller as BaseController;

abstract class Controller extends BaseContoller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}