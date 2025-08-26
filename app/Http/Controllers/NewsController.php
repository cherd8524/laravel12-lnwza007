<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // - แสดงข่าวทั้งหมด
    public function index()
    {
        // $news = News::all();
        // $news = News::orderBy('created_at', 'desc')->get();
        $news = News::where('news_type', 'sport')       // เลือกเฉพาะข่าว sport
                ->orderBy('published_at', 'desc')                         // เรียงจากใหม่ → เก่า
                ->get();
        return view('news.index', compact('news'));
    }

    // - แสดงข่าวเดี่ยว
    public function show($id)
    {
        $article = News::findOrFail($id);
        return view('news.show', compact('article'));
    }
}
