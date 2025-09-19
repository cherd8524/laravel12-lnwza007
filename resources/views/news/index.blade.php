@extends('layouts.app')

@section('title', 'Sport News')

@section('content')

    <div class="container mt-2 mb-5 px-3 pt-3">
        <div class="row p-3">
            <h2 class="text-center fw-semibold">📢 ข่าวทั้งหมด</h2>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @php
            $firstNews = $news->first();
        @endphp

        <div class="row px-lg-5">
            @if($firstNews)
            <div class="col-lg-12 p-2">
                <div class="card ">
                    <div class="row p-2 position-relative">
                        <div class="col-lg-8 pe-lg-0">
                            <a href="{{ route('news.show', $firstNews->id) }}">
                                <img src="{{ $firstNews->topic_image_url }}" class="img-fluid rounded" alt="image">
                            </a>
                        </div>
                        <div class="col-lg-4 d-flex flex-column justify-content-between">
                            <div class="card-body">
                                <a href="{{ route('news.show', $firstNews->id) }}" class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover text-body-emphasis">
                                    <h3 class="card-title">{{ $firstNews->title }}</h3>
                                </a>
                                <p class="card-text">{{ $firstNews->description }}</p>
                            </div>
                            <div class="card-footer ">
                                <div class="row">
                                    <div class="col col-lg-10">
                                        <i class="bi bi-clock me-2"></i>
                                        @if ($firstNews->published_at->diffInHours(now()) < 24)
                                            {{ $firstNews->published_at->diffForHumans() }}
                                        @else
                                            {{ $firstNews->published_at->translatedFormat('j M') }}
                                            {{ substr(($firstNews->published_at->year + 543), -2) }}
                                        @endif
                                    </div>
                                    <div class="col col-lg-2 text-end">
                                        <form action="{{ route('news.destroy', $firstNews->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-link link-danger p-0"
                                                onclick="return confirm('คุณแน่ใจว่าต้องการลบข่าวนี้?')">
                                                <i class="bi bi-trash3"></i>
                                            </button>
                                        </form>
                                        <!-- <a href="{{ $firstNews->reference_url }}" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ข่าวต้นฉบับ">
                                            <i class="bi bi-link-45deg fs-5"></i>
                                        </a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex w-100 justify-content-end position-absolute top-0 end-0 text-end">
                            <div class="edit-box me-2">
                                <a href="{{ route('news.edit', $firstNews->id) }}" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                                    <i class="bi bi-pencil-square fs-4"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @forelse($news->skip(1) as $item)
            <div class="col-lg-4 p-2 d-flex">
                <div class="card p-2 h-100 d-flex flex-column position-relative">
                    <a href="{{ route('news.show', $item->id) }}">
                        <img src="{{ $item->topic_image_url }}" class="card-img-top" alt="image">
                    </a>
                    <div class="card-body flex-grow-1">
                        <a href="{{ route('news.show', $item->id) }}" class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover text-body-emphasis">
                            <h5 class="card-title fw-bold">{{ $item->title }}</h5>
                        </a>
                        <p class="card-text"><small>{{ $item->description }}</small></p>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col col-lg-10">
                                <i class="bi bi-clock me-2"></i>
                                @if ($item->published_at->diffInHours(now()) < 24)
                                    {{ $item->published_at->diffForHumans() }}
                                @else
                                    {{ $item->published_at->translatedFormat('j M') }}
                                    {{ substr(($item->published_at->year + 543), -2) }}
                                @endif
                            </div>
                            <div class="col col-lg-2 text-end">
                                <form action="{{ route('news.destroy', $item->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link link-danger p-0"
                                        onclick="return confirm('คุณแน่ใจว่าต้องการลบข่าวนี้?')">
                                        <i class="bi bi-trash3"></i>
                                    </button>
                                </form>
                                <!-- <a href="{{ $item->reference_url }}" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ข่าวต้นฉบับ">
                                    <i class="bi bi-link-45deg fs-5"></i>
                                </a> -->
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute top-0 end-0 mt-2 me-2">
                        <a href="{{ route('news.edit', $item->id) }}" class="me-2 link-underline-opacity-0 link-opacity-75-hover link-light">
                            <i class="bi bi-pencil-square fs-4"></i>
                        </a>
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