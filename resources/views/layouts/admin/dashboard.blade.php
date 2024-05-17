
@include('layouts.admin.partials.header')

<div id="layoutSidenav">
    @include('layouts.admin.partials.sidebar')
            
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                @yield('dashboard.content')
            </div>
        </main>
@include('layouts.admin.partials.footer')