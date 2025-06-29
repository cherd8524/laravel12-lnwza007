<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg text-center my-5">
                <h1>เชิดศักดิ์ คำไล้ 67222420006</h1>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <a href="/gallery/ant" target="_blank">
                        <img src="{{ $ant }}" class="card-img-top" alt="Ant Image">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-center">Ant-Man</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="/gallery/bird" target="_blank">
                        <img src="{{ $bird }}" class="card-img-top" alt="Bird Image">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-center">The Falcon and the Winter Soldier</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="/gallery/cat" target="_blank">
                        <img src="{{ $cat }}" class="card-img-top" alt="Cat Image">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-center">Black Panther</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"></script>

</body>

</html>