@extends('layouts.app')

@section('title', 'Sport News')

@section('content')

    <div class="container mt-2 mb-5 px-3 pt-3">
        <div class="row p-3">
            <h2 class="text-center fw-semibold">📢 ข่าวทั้งหมด</h2>
        </div>

        @php
            $firstNews = $news->first();
        @endphp

        <div class="row px-lg-5">
            @if($firstNews)
            <div class="col-lg-12 p-2">
                <div class="card ">
                    <div class="row p-2">
                        <div class="col-lg-8 pe-lg-0">
                            <a href="{{ route('news.show', $firstNews->id) }}">
                                <img src="{{ $firstNews->topic_image_url }}" class="img-fluid rounded" alt="image">
                            </a>
                        </div>
                        <div class="col-lg-4 d-flex flex-column justify-content-between">
                            <div class="card-body">
                                <a href="{{ route('news.show', $firstNews->id) }}" class="link-dark link-offset-2 link-underline-opacity-25 link-opacity-75-hover link-underline-opacity-100-hover">
                                    <h3 class="card-title fw-bold">{{ $firstNews->title }}</h3>
                                </a>
                                <p class="card-text">{{ $firstNews->description }}</p>
                            </div>
                            <div class="card-footer ">
                                <div class="row">
                                    <div class="col col-lg-10">
                                        <i class="bi bi-clock me-2"></i>
                                        {{ $firstNews->published_at->diffForHumans() }}
                                    </div>
                                    <div class="col col-lg-2 text-end">
                                        <a href="{{ $firstNews->reference_url }}" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ข่าวต้นฉบับ">
                                            <i class="bi bi-link-45deg fs-5"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @forelse($news->skip(1) as $item)
            <div class="col-lg-4 p-2 d-flex">
                <div class="card p-2 h-100 d-flex flex-column">
                    <a href="{{ route('news.show', $item->id) }}">
                        <img src="{{ $item->topic_image_url }}" class="card-img-top" alt="image">
                    </a>
                    <div class="card-body flex-grow-1">
                        <a href="{{ route('news.show', $item->id) }}" class="link-dark link-offset-2 link-underline-opacity-25 
                                      link-opacity-75-hover link-underline-opacity-100-hover">
                            <h5 class="card-title fw-bold">{{ $item->title }}</h5>
                        </a>
                        <p class="card-text"><small>{{ $item->description }}</small></p>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-10">
                                <i class="bi bi-clock me-2"></i>
                                {{ $item->published_at->diffForHumans() }}
                            </div>
                            <div class="col-lg-2 text-end">
                                <a href="{{ $item->reference_url }}" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ข่าวต้นฉบับ">
                                    <i class="bi bi-link-45deg fs-5"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-lg-12 border border-secondary-subtle rounded p-5">
                <p class="text-center" style="min-height: 45vh;">ไม่มีข่าว</p>
            </div>
            @endforelse

        </div>
    </div>

@endsection