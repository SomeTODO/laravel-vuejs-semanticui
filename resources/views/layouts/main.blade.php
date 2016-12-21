<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8" />
        
        <title>@yield('title', 'Just awesome.') - {{ config('app.name') }}</title>
        
        <!--[if lt IE 9]>
            <script src="{{ asset('vendor/bower/html5shiv/dist/html5shiv.min.js') }}"></script>
        <![endif]-->
        
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
        
        <link rel="stylesheet" href="{{ asset('vendor/bower/semantic/dist/semantic.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        
        @stack('styles')
    </head>
    <body>
        <header>
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            &nbsp;
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                                <li><a href="{{ url('/login') }}">登录</a></li>
                                <li><a href="{{ url('/register') }}">注册</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="{{ url('/logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                退出
                                            </a>

                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        
        <main>
            @yield('content')
        </main>
        
        <footer>
            <div class="ui container">
                Copyright &copy; {{ date('Y') }} {{ config('app.name') }}
            </div>
        </footer>
        
        <script src="{{ asset('vendor/bower/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bower/semantic/dist/semantic.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        
        @stack('scripts')
    </body>
</html>
