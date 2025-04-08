<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloController extends Controller
{
  public function index(){
    $name = '侍 太郎';
    $languages = ['HTML','CSS','JavaScriot','PHP'];
    //変数$nameをinde.blade.phpファイルに渡す
    return view('index', compact('name', 'languages'));
  }
}
