<?php
/**
 * Created by PhpStorm.
 * User: vitya
 * Date: 5/2/16
 * Time: 8:49 PM
 */

namespace App\Http\Controllers\Backend;
use App\Post;
use App\User;


class DashboardController extends Controller
{
    public function index(Post $posts, User $users)
    {
        $posts = $posts->orderBy('updated_at', 'desc')->take(5)->get();
        return view('backend.dashboard', compact('posts'));
    }
}