<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aplikasi Parkir</title>
</head>
<body>
    
    {{--Navbar--}}
    @include('components.navbar')

    <div style="display:flex">

        {{--$idebar--}}
        <div style="width:200px; background:#eee; padding:10px;">
            @include('components.sidebar')
        </div>

    </div>
</body>
</html>