<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dpuProject - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
        <div class="container">
        <div class="row mt-5 " >
            <div class="col-12" style="background-color: tomato; text-align: center; border-radius: 20px" >
                <h3>MEMBER PORTAL </h3>
            </div>
        </div>
        <div class="row" >
            <div class="col-6 mt-5">
                <h5>@yield('content')</h5>
            </div>
            <div class="col-6 mt-5">
                <ul>
                    <li><a href="{{('register')}}">Kayit ol</a></li>
                    <li><a href="{{'login'}}">Uye giris </a></li>
                    <li><a href="{{('forgetPassword')}}"> sifre unuttum</a></li>
                </ul>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
