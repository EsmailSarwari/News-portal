<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ders portali - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12" align="center" style="background-color: tomato; border-radius: 20px; padding: 10px">
                <h4>DPU Ders Portal</h4>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-6">
                @yield('content')
            </div>
            <div class="col-6">
                <ul >
                    <li ><a href="/db/select" style="text-decoration: none;">dersleri listele</a></li>
                    <li><a href="/db/add" style="text-decoration: none;">ders ekle</a></li>
                </ul>
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
