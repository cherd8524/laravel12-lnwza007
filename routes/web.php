<?php

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Controllers\NewsController;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

// ---------------------------------------------------------------------------------------------------------------------------------------------------->>
// - Week 2
// ---------------------------------------------------------------------------------------------------------------------------------------------------->>

Route::get( "/gallery" , function(){
	$ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
    $bird = "https://images.indianexpress.com/2021/03/falcon-anthony-mackie-1200.jpg"; 
    $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
    return view("test/index", compact("ant","bird","cat"));
})->name('gallery');

Route::get("/gallery/ant", function () {
    $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
    return view("test/ant", compact("ant"));
});

Route::get("/gallery/bird", function () {
    $bird = "https://images.indianexpress.com/2021/03/falcon-anthony-mackie-1200.jpg";
    return view("test/bird", compact("bird"));
});

Route::get("/gallery/cat", function () {
    $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
    return view("test/cat", compact("cat"));
});

// ---------------------------------------------------------------------------------------------------------------------------------------------------->>
// - Week 3
// ---------------------------------------------------------------------------------------------------------------------------------------------------->>

Route::get('/index', function () {
    return view('active/index');
})->name('index');

Route::get('/about', function () {
    return view('active/about');
})->name('about');

Route::get('/services', function () {
    return view('active/services');
})->name('services');

Route::get('/portfolio', function () {
    return view('active/portfolio');
})->name('portfolio');

Route::get('/team', function () {
    return view('active/team');
})->name('team');

Route::get('/blog', function () {
    return view('active/blog');
})->name('blog');

Route::get('/contact', function () {
    return view('active/contact');
})->name('contact');

// ---------------------------------------------------------------------------------------------------------------------------------------------------->>
// - Week 6
// ---------------------------------------------------------------------------------------------------------------------------------------------------->>

Route::get('query/sql', function () {
    $products = DB::select("SELECT * FROM products");
    // $products = DB::select("SELECT * FROM products WHERE price > 100");
    return view('query-test', compact('products'));
});

Route::get('query/builder', function () {
    $products = DB::table('products')->get();
    // $products = DB::table('products')->where('price', '>', 100)->get();
    return view('query-test', compact('products'));
});

Route::get('query/orm', function () {
    $products = Product::get();
    // $products = Product::where('price', '>', 100)->get();
    return view('query-test', compact('products'));
});

Route::get('product/form', function () {
    //
})->name("product.form");

Route::get('barchart', function () {    
    return view('barchart');
})->name('barchart');

// ---------------------------------------------------------------------------------------------------------------------------------------------------->>
// - Project 24/08/2025
// ---------------------------------------------------------------------------------------------------------------------------------------------------->>

// Create
Route::get('/news/sport/create', [NewsController::class, 'create'])->name('news.create');
Route::post('/news/sport', [NewsController::class, 'store'])->name('news.store');

// Read
Route::get('/news/sport', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/sport/{id}', [NewsController::class, 'show'])->name('news.show');

// Update
Route::get('/news/sport/edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
Route::put('/news/sport/{id}', [NewsController::class, 'update'])->name('news.update');

// Delete
Route::delete('/news/sport/{id}', [NewsController::class, 'destroy'])->name('news.destroy');

// ---------------------------------------------------------------------------------------------------------------------------------------------------->>
// - FORM
// ---------------------------------------------------------------------------------------------------------------------------------------------------->>

Route::get('product-index', function () {
    $products = Product::get();
    return view('query-test', compact('products'));
})->name("product.index");


Route::get('product-form', function () {    
    return view('product-form');
})->name("product.form");

Route::post('/product-submit', function (Request $request) {
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric|min:0',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ], 
    [
        'name.required' => 'กรุณากรอกชื่อสินค้า',
        'description.required' => 'กรุณากรอกรายละเอียดสินค้า',
        'price.required' => 'กรุณากรอกราคา',
        'price.numeric' => 'ราคาต้องเป็นตัวเลข',
        'image.image' => 'ไฟล์ต้องเป็นรูปภาพ',
    ]);

    // ตรวจสอบว่ามีการอัปโหลดรูปภาพ
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('uploads', 'public');
        $url = Storage::url($imagePath);
        $data["image"] =$url;
    }

    // บันทึกข้อมูลในฐานข้อมูล
    Product::create($data);

    return redirect()->route('product.index')->with('success', 'เพิ่มสินค้าแล้ว!');
})->name('product.submit');

// ---------------------------------------------------------------------------------------------------------------------------------------------------->>

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
