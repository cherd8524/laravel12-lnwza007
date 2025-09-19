@extends('layouts.app')

@section('title', $article->title)

@section('content')

    <div class="container px-lg-5 mb-5">
        
        <div class="container rounded mt-4">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('news.index') }}">หน้าหลัก</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $article->title }}</li>
                </ol>
            </nav>
        </div>

        <div class="container shadow rounded">
            <div class="row mb-4">
                <div class="col-lg-12 text-end pe-2 pt-2">
                    <a class="link-opacity-50-hover" href="{{ $article->reference_url }}" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ข่าวต้นฉบับ">
                        <i class="bi bi-box-arrow-up-right fs-4"></i>
                    </a>
                </div>
            </div>

            <div class="row px-lg-5">
                <div class="col-12 col-lg-9 mx-auto">
                    <div class="row mx-auto px-lg-5">
                        <div class="col-lg-12">
                            <h1 class="fw-bold">{{ $article->title }}</h1>
                        </div>
                        <div class="col-lg-12 text-secondary">
                            <i class="bi bi-clock me-2"></i>
                            @php
                                $dt = $article->published_at;
                                $day = $dt->format('j');                            // วัน
                                $month = $dt->locale('th')->translatedFormat('M');  // เดือนย่อ
                                $year = $dt->format('y') + 43;                      // ปี 2 หลัก + 43 = 68 (ค.ศ. 25 + 43 = พ.ศ.68)
                            @endphp
            
                            {{ $day }} {{ $month }} {{ $year }} ({{ $dt->format('H:i') }} น.)
                        </div>
                        <div class="col-lg-12 mt-3">
                            <img src="{{ $article->topic_image_url }}" alt="topic-image" class="rounded mt-3 img-fluid">
                        </div>
                        <div class="col-lg-12 mt-3 mt-lg-5">
                            <h5>{{ $article->description }}</h5>
                        </div>
                    </div>
                    
                    <div class="row mx-auto px-lg-5 pb-5">
                        <div class="col-lg-12 my-2 mt-lg-4">
                            {!! $article->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
