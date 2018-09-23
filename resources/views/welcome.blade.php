<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('setting.name') }}</title>
         <!-- Styles -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/font.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}" >



        <!-- Styles -->
        <style>

            html ,body{
                background-color: #fff;
                color: #636b6f;
                font-family: 'Abel', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;


            }



            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                color:  #fff;
                font-size: 84px;

            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>

    <body class="bg-info" >

        <div class=" flex-center position-ref full-height" >
            @if (Route::has('login'))
                <div class="top-right links">
                        <a class="text-white movT" hidden target="_blank" href="http://onedd.org">ONEDD</a>
                        <a class="text-white movT" hidden target="_blank" href="http://www.meer.gov.dz">Ministre</a>
                    @auth
                        <a class="text-white movT" hidden href="{{ url('/home') }}">Accueil</a>
                    @else
                        <a  class="text-white movT" hidden href="{{ route('login') }}">Connecter</a>
                        @if (config('setting.register')==TRUE)
                          <a class="text-white movT" hidden href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth

                </div>
            @endif

            <div class="content">

                <div class="m-b-md">
                    <img class="mb-2 movLogo" hidden src="img/onedd_logo.png" alt="logo" style="width: 100px;">

                    <p class="m-0 text-light movH" hidden >Ministre de l'Environnement et des Energies Renouvelables</p>
                    <p class="m-0 mb-3 text-light movH" hidden>Observatoire National de l'Environnement et du Développement Durable</p>
                    <div class="title movH" hidden>
                            {{ config('setting.name') }}
                    </div>
                        @auth
                            <a  class="mov mt-3 mb-5 btn btn-outline-light btn-block btn-lg" hidden href="{{ url('/home') }}">Accueil <i class="fas fa-home"></i></a><br>
                        @else
                            <a  class="mov mt-3 mb-5 btn btn-outline-light btn-block btn-lg" hidden href="{{ route('login') }}">Connecter <i class="fas fa-sign-in-alt"></i></a><br>
                        @endauth
                </div>


            </div>
        </div>

        

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/wizard.js') }}"></script>
    
        
    </body>
</html>
