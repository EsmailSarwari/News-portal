<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dpuProject - @yield('title')</title>
</head>
<body>

<table border="1px" width="80%" align="center">
    <tr >
        <td align="center" colspan="2">DPU</td>
    </tr>
    <tr>
        <td width="864"> @yield('content') </td>
        <td>
            <ul>
                <li><a href="{{('register')}}">Kayit ol</a></li>
                <li><a href="{{'login'}}">Uye giris </a></li>
                <li><a href="{{('forgetPassword')}}"> sifre unuttum</a></li>
            </ul>
        </td>
    </tr>
    <tr>
        <td align="center" colspan="2" >CopyRight 2023</td>
    </tr>
</table>

</body>
</html>
