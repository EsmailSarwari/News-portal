<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>news portali - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12" align="center" style="background-color: tomato; border-radius: 20px; padding: 10px">
                <h4>DPU news Portal</h4>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-6">
                @yield('content')
            </div>
            <div class="col-6">
                <div class="list-group">
                    <a class="list-group-item" href="/db/select" style="text-decoration: none;">haberleri listele</a>

                        @foreach(App\Models\Category::orderBy('order')->get() as $category)
                            <a class="list-group-item" @if(isset($category_id) && $category->id == $category_id) active @endif
                               href="/db/category/{{ $category->id }}"
                               style=" text-decoration: none; border: none"
                            >
                                {{ $category->name }}
                            </a>
                        @endforeach

                   <a class="list-group-item" href="/db/add" style="text-decoration: none;">haber ekle</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-5 mt-5" align="center" style="background-color: tomato; border-radius: 20px; padding: 5px">
                <h5>copyRight & copy 2023</h5>
            </div>
        </div>


    </div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
