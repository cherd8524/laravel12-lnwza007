<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCS219 - การพัฒนาโปรแกรมประยุกต์บนเว็บสำหรับองค์กร</title>

    <!-- - web icon -->
    <link href="https://cdn-icons-png.flaticon.com/512/276/276020.png" rel="icon">

    <!-- - bootstrap 5.3.7 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- - bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- - font k2d -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- - main css customs -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

</head>
<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12 text-center">
                <h1>SCS219</h1>
                <h1>การพัฒนาโปรแกรมประยุกต์บนเว็บสำหรับองค์กร</h1>
            </div>
            <hr class="border border-secondary border-1 opacity-50 mt-3">
            <div class="col-lg-12 text-center">
                <div class="row px-lg-5">
                    <div class="col-lg-6 text-lg-end mb-2">ชื่อ-สกุล : เชิดศักดิ์  คำไล้</div>
                    <div class="col-lg-6 text-lg-start mb-2">รหัสนักศึกษา : 67222420006</div>
                    <div class="col-lg-6 text-lg-end mb-2">สาขาวิชา : วิทยาการคอมพิวเตอร์</div>
                    <div class="col-lg-6 text-lg-start mb-2">คณะ : วิทยาศาสตร์และเทคโนโลยี</div>
                    <div class="col-lg-12 mb-2">มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์</div>
                </div>
            </div>
            <hr class="border border-secondary border-1 opacity-50 mt-3">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Quiz and Project</h3>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-3 px-lg-5">
                <div class="col-lg-3">
                    <div class="card h-100">
                        <img src="https://image.thum.io/get/width/600/{{ route('home') }}" class="card-img-top" alt="web-preview">
                        <div class="card-body">
                            <h5 class="card-title mb-2">Index of Laravel</h5>
                            <a href="{{ route('home') }}" class="btn btn-outline-primary">เยี่ยมชม</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card h-100">
                        <img src="https://image.thum.io/get/width/600/{{ route('gallery') }}" class="card-img-top" alt="web-preview">
                        <div class="card-body">
                            <h5 class="card-title mb-2">Gallery</h5>
                            <a href="{{ route('gallery') }}" class="btn btn-outline-primary">เยี่ยมชม</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card h-100">
                        <img src="https://image.thum.io/get/width/600/{{ route('index') }}" class="card-img-top" alt="web-preview">
                        <div class="card-body">
                            <h5 class="card-title mb-2">Active</h5>
                            <a href="{{ route('index') }}" class="btn btn-outline-primary">เยี่ยมชม</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3">
                    <div class="card h-100">
                        <img src="https://image.thum.io/get/width/600/{{ route('query.sql') }}" class="card-img-top" alt="web-preview">
                        <div class="card-body">
                            <h5 class="card-title mb-2">Query SQL</h5>
                            <a href="{{ route('query.sql') }}" class="btn btn-outline-primary">เยี่ยมชม</a>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-lg-3">
                    <div class="card h-100">
                        <img src="https://image.thum.io/get/width/600/{{ route('query.builder') }}" class="card-img-top" alt="web-preview">
                        <div class="card-body">
                            <h5 class="card-title mb-2">Query Builder</h5>
                            <a href="{{ route('query.builder') }}" class="btn btn-outline-primary">เยี่ยมชม</a>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-lg-3">
                    <div class="card h-100">
                        <img src="https://image.thum.io/get/width/600/{{ route('query.orm') }}" class="card-img-top" alt="web-preview">
                        <div class="card-body">
                            <h5 class="card-title mb-2">Query ORM</h5>
                            <a href="{{ route('query.orm') }}" class="btn btn-outline-primary">เยี่ยมชม</a>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-3">
                    <div class="card h-100">
                        <img src="https://image.thum.io/get/width/600/{{ route('product.index') }}" class="card-img-top" alt="web-preview">
                        <div class="card-body">
                            <h5 class="card-title mb-2">Product</h5>
                            <a href="{{ route('product.index') }}" class="btn btn-outline-primary">เยี่ยมชม</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card h-100">
                        <img src="https://image.thum.io/get/width/600/{{ route('barchart') }}" class="card-img-top" alt="web-preview">
                        <div class="card-body">
                            <h5 class="card-title mb-2">Barchart</h5>
                            <a href="{{ route('barchart') }}" class="btn btn-outline-primary">เยี่ยมชม</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card h-100">
                        <img src="https://image.thum.io/get/width/600/{{ route('news.index') }}" class="card-img-top" alt="web-preview">
                        <div class="card-body">
                            <h5 class="card-title mb-2">News Sport</h5>
                            <a href="{{ route('news.index') }}" class="btn btn-outline-primary">เยี่ยมชม</a>
                        </div>
                    </div>
                </div>
    
            </div>
            
        </div>
    </div>

</body>
</html>