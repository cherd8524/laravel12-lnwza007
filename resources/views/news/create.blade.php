@extends('layouts.app')

@section('title', 'Add - Sport News')

@section('content')

    <div class="container mt-2 mb-5 px-3 pt-3">
        <h1>เพิ่มข่าวใหม่</h1>

        <form action="{{ route('news.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>ประเภทข่าว</label>
                <input type="text" name="news_type" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>หัวข้อข่าว</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>คำอธิบาย</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
                <label>วันที่เผยแพร่</label>
                <input type="datetime-local" name="published_at" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>ลิงก์รูปภาพ</label>
                <input type="url" name="topic_image_url" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>เนื้อหาข่าว (HTML)</label>
                <textarea name="content" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label>ลิงก์อ้างอิง</label>
                <input type="url" name="reference_url" class="form-control" rows="6">
            </div>

            <button type="submit" class="btn btn-success">บันทึก</button>
            <a href="{{ route('news.index') }}" class="btn btn-secondary">ยกเลิก</a>
        </form>
    </div>

@endsection