<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InformationController extends Controller
{
    //瑜伽知识
    public function knowledge()
    {
        return view('home.knowledge');
    }

    //知识详情
    public function knowledgeDetail()
    {
        return view('home.knowledgeDetail');
    }

    //瑜伽新闻
    public function yogaNews()
    {
        return view('home.yogaNews');
    }

    // 新闻详情
    public function newsDetail()
    {
        return view('home/newsDetail');
    }
}
