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

    // - แสดงฟอร์มเพิ่มข่าว
    public function create()
    {
        return view('news.create');
    }

    // - แสดงฟอร์มแก้ไขข่าว
    public function edit($id)
    {
        $article = News::findOrFail($id);
        return view('news.edit', compact('article'));
    }

    // - บันทึกข่าวใหม่
    public function store(Request $request)
    {
        $request->validate([
            'news_type' => 'required|string',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'published_at' => 'required|date',
            'topic_image_url' => 'required|url',
            'content' => 'nullable|array',   // เก็บ JSON array
            'reference_url' => 'nullable|url',
        ]);

        News::create($request->all());

        return redirect()->route('news.index')->with('success', 'เพิ่มข่าวเรียบร้อยแล้ว');
    }

    // - อัปเดตข่าว
    public function update(Request $request, $id)
    {
        $request->validate([
            'news_type' => 'required|string',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'published_at' => 'required|date',
            'topic_image_url' => 'required|url',
            'content' => 'nullable|array',
            'reference_url' => 'nullable|url',
        ]);

        $article = News::findOrFail($id);
        $article->update($request->all());

        return redirect()->route('news.index')->with('success', 'แก้ไขข่าวเรียบร้อยแล้ว');
    }

    // - ลบข่าว
    public function destroy($id)
    {
        $article = News::findOrFail($id);
        $article->delete();

        return redirect()->route('news.index')->with('success', 'ลบข่าวเรียบร้อยแล้ว');
    }
}
