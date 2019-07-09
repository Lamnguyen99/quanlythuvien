<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HocmaiController extends Controller
{
    public function view($title, $id)
    {
        echo 'Bạn đang xem bài viết '.$title.' có ID là :'.$id;
    }
}