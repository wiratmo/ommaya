    <div class="sidebar">

        <nav class="sidebar-nav">
            <ul class="nav">
                @if(Auth::user()->role_id === 1)
                    @include('layouts.navbar.pegawai_navbar')
                
                @elseif(Auth::user()->role_id === 2)
                    @include('layouts.navbar.pimpinan_navbar')
                
                @elseif(Auth::user()->role_id === 3)
                    @include('layouts.navbar.administrator_navbar')
                
                @endif
            </ul>
        </nav>
    </div>
    <main class="main">
            <div class="container-fluid">
                <div class="animated fadeIn">