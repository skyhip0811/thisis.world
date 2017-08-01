<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Thisis.World') }}</title>
    
            <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!--Styles-->
        
        <link href ="https://unpkg.com/buefy/lib/buefy.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.2/vue.min.js" ></script>-->
        <script src="https://unpkg.com/buefy" ></script>
         <script src="{{asset('js/vue.js')}}"></script>
        
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        @yield('header-script')
        
    </head>
    <body>
        <div id="app">
            <div class='container'>
                
            
            <b-nav class="navbar " >
              <div class="navbar-brand">
                <a class="navbar-item" href="/">
                  <img src="{{url('images/thisisworld.png')}}" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
                </a>

                <div class="navbar-burger burger" @click="toggle_navbar" v-bind:class="{'is-active': navbarActive}">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
               <div class="navbar-menu" v-bind:class="{'is-active': navbarActive}">
                <!-- navbar start, navbar end -->
                <div class="navbar-start">
                    <!-- navbar items -->
                     
                  </div>

                  <div class="navbar-end">
                       @if (Auth::guest())
                       <a class='nav-item' href='aboutus'>關於我們</a>
                            <a class ="nav-item" href="{{ route('login') }}">登入</a>
                            <a class ="nav-item" href="{{ route('register') }}">註冊</a>
                        @else
                    <!-- navbar items -->
                        <a class ="nav-item" href="/">新的故事</a>
                        <a class ="nav-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            登出
                                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                    @endif
                    <a class="nav-item" href='../static/world'>
                        聯絡我們
                    </a>
                  </div>
              </div>
            </b-nav>
                @yield('content')
            </div>
        </div>
    </body>
    @yield('footer-script')
    <!-- Scripts -->
    <script src="{{ asset('js/main.js') }}"></script>
</html>