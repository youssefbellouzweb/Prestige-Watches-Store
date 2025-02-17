<!DOCTYPE html>
<html lang="en">

<head>
    @include('Users.layouts.main-links')
</head>

<body>

    @include('Users.layouts.main-navbar')

    @yield('content')

    @include('Users.layouts.footer')

    @include('Users.layouts.footer-scripts')

</body>

</html>
