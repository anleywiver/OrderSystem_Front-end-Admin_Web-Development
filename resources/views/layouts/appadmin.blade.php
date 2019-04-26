<!doctype html>
<html lang="en">

@include('partials.htmlheader')

<body>

<div class="wrapper">
    @include('partials.sidebar')

    <div class="main-panel">
		@include('partials.mainheader')

        <div class="content">
            <div class="container-fluid">

                @yield('content')

            </div>
        </div>


        @include('partials.footer')

    </div>
</div>

@include('partials.pluggin')

</body>
@include('partials.script')
</html>
