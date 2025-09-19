@extends('layouts.app')

@section('title', 'Edit - Sport News')

@section('content')

    <div class="container mt-2 mb-5 px-3 pt-3">
        <h1>แก้ไขข่าว: {{ $article->title }}</h1>

        <form action="{{ route('news.update', $article->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>ประเภทข่าว</label>
                <input type="text" name="news_type" class="form-control" value="{{ $article->news_type }}" required>
            </div>

            <div class="mb-3">
                <label>หัวข้อข่าว</label>
                <input type="text" name="title" class="form-control" value="{{ $article->title }}" required>
            </div>

            <div class="mb-3">
                <label>คำอธิบาย</label>
                <textarea name="description" class="form-control" required>{{ $article->description }}</textarea>
            </div>

            <div class="mb-3">
                <label>วันที่เผยแพร่</label>
                <input type="datetime-local" name="published_at" class="form-control"
                    value="{{ $article->published_at->format('Y-m-d\TH:i') }}" required>
            </div>

            <div class="mb-3">
                <label>ลิงก์รูปภาพ</label>
                <input type="url" name="topic_image_url" class="form-control" value="{{ $article->topic_image_url }}"
                    required>
            </div>

            <div class="mb-3">
                <label>เนื้อหาข่าว (HTML)</label>
                <textarea name="content" class="form-control" rows="6">{{ $article->content }}</textarea>
            </div>

            <div class="mb-3">
                <label>ลิงก์อ้างอิง</label>
                <input type="url" name="reference_url" class="form-control" value="{{ $article->reference_url }}">
            </div>

            <button type="submit" class="btn btn-success">อัปเดต</button>
            <a href="{{ route('news.index') }}" class="btn btn-secondary">ยกเลิก</a>
        </form>
    </div>

@endsection