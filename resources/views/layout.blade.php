<!DOCTYPE html>
<html lang="en">


<body>
    @include('header')

    <!-- Main Content -->
    <div class="container">
        @yield('content')
    </div>

    <hr>

    <!-- Footer -->
   @include('footer')
</body>

</html>
