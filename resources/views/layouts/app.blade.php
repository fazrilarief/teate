<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body id="page-top">
    <div id="wrapper">
        @include('includes.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('includes.navbar')
                @yield('content')
                @include('includes.modals')
            </div>
            @include('includes.footer')
        </div>
    </div>
</body>
@include('includes.script')

</html>
