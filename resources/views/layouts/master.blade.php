<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.main-links')
</head>

<body>

    @include('layouts.main-navbar')

    @yield('content')

    @include('layouts.footer')

    @include('layouts.footer-scripts')

</body>

</html>