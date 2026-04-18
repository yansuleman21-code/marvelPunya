<!DOCTYPE html>
<html>
<head><title>Aplikasi Parkir</title></head>
<body>
    @include('components.navbar')
    <div style="display: flex">
        <div style="width:200px; background: #eee; padding: 10px;">@include('components.sidebar')</div>
        <div style="flex:1; padding:20px;">@yield('content')</div>
    </div>
</body>
</html>