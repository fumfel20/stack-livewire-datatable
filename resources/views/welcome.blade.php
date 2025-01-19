<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-grid.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-reboot.min.css') }}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script type="text/javascript" src="{{asset('assets/TableFilter/tablefilter_all.js')}}"></script>
        <script src="{{asset('assets/TableFilter/tfAdapter.sortabletable.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/TableFilter/sortabletable.js')}}" language="javascript" type="text/javascript"></script>
        @livewireStyles()
    </head>
    <body class="font-sans antialiased dark:bg-white dark:text-white/50">
        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
            <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="{{ url('/') }}">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" wire:navigate href="{{ url('/dashboard') }}">Report</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            {{ $slot ?? null }}
        </div>
    <link rel="stylesheet" href="{{asset('assets/web/assets/jquery/jquery-ui-themes-1.12.1/jquery-ui.css')}}">
    <script src="{{ asset('assets/web/assets/jquery/jquery1.12.1.min.js')  }}"></script>
    <script src="{{asset('assets/web/assets/jquery/jquery_ui.js')}}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ asset('assets/smoothscroll/smooth-scroll.js') }}"></script>
    <script src="{{ asset('assets/ytplayer/index.js') }}"></script>
    <script src="{{ asset('assets/dropdown/js/navbar-dropdown.js') }}"></script>
    <script src="{{ asset('assets/mbr-tabs/mbr-tabs.js') }}"></script>
    @livewireScripts()
    </body>
</html>
