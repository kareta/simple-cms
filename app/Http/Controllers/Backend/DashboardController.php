<?php
/**
 * Created by PhpStorm.
 * User: vitya
 * Date: 5/2/16
 * Time: 8:49 PM
 */

namespace App\Http\Controllers\Backend;


class DashboardController extends Controller
{
    function index() {
        return view('backend.dashboard');
    }
}