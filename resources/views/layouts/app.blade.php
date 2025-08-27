<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'News')</title>

    <!-- - web icon -->
    <link href="https://cdn.freebiesupply.com/logos/large/2x/sports-news-logo-svg-vector.svg" rel="icon">

    <!-- - bootstrap 5.3.7 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- - bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- - font k2d -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- - main css customs -->
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">

</head>
<body class="min-vh-100 position-relative">

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('news.index') }}">
                <img src="https://cdn.freebiesupply.com/logos/large/2x/sports-news-logo-svg-vector.svg" alt="logo" width="45">
                <span class="ms-2">Sport News</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item text-center">
                        <a class="nav-link {{ request()->routeIs('news.index') ? 'active' : '' }}" aria-current="page" href="{{ route('news.index') }}">หน้าหลัก</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">menu 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">menu 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">menu 4</a>
                    </li> -->
                    
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="content">
        @yield('content')
    </div>
    
    <footer class="py-3 shadow-lg container-fluid">
        <ul class="nav justify-content-center pb-3">
            <li class="nav-item"><a href="{{ route('news.index') }}" class="nav-link px-2 text-dark link-opacity-50-hover">หน้าหลัก</a></li>
            <!-- <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">menu 2</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">menu 3</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">menu 4</a></li> -->
        </ul>
        <div class="row border-bottom pb-3 mb-3">
            <div class="col-lg-12 text-center">
                เว็บไซต์นี้จัดทำขึ้นเพื่อใช้ในการศึกษาเท่านั้น เนื้อหาโดย : 
                <a href="https://www.sanook.com/sport/" target="_blank">
                    <img src="https://s.isanook.com/sr/0/images/logo-sanook-n.svg" alt="sanook-logo" width="100">
                </a>
            </div>
        </div>
        <div class="row px-lg-5">
            <div class="col-lg-6 col-12 mx-auto">
                <div class="row m-0 p-0">
                    <div class="col-lg-4 text-center"><i class="bi bi-person-fill"></i> เชิดศักดิ์ คำไล้ (67222420006)</div>
                    <div class="col-lg-4 text-center"><i class="bi bi-person-fill"></i> เชิดศักดิ์ คำไล้ (67222420006)</div>
                    <div class="col-lg-4 text-center"><i class="bi bi-person-fill"></i> เชิดศักดิ์ คำไล้ (67222420006)</div>
                </div>
            </div>
        </div>
    </footer>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
    
</body>
</html>
