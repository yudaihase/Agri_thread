<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>top</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito';
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
                font-size: 84px;
            }

            .top {
                font-size: 60px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 40px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                margin:30px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .hover1 {
                border-bottom: 0.1875em solid #1B5E20;
                background-color: #fff;
                color: #fff;
                display: inline-block;
                padding: 0.6em 2em;
                margin: 0 0 1em;
                cursor: pointer;
                transition: all 0.3s ease 0s;
            }

            .hover1:hover {
                border-bottom-color: transparent;
                transform: translateY(0.1875em);
            }

            .hover2 {
                border-bottom: 0.1875em solid #1B5E20;
                background-color: #fff;
                color: #fff;
                display: inline-block;
                padding: 0.6em 2em;
                margin: 0 0 1em;
                cursor: pointer;
                transition: all 0.3s ease 0s;
            }
            .hover2:hover {
                border-bottom-color: transparent;
                transform: translateY(0.1875em);
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">

            <div class="title m-b-md">
                    AGRI THREAD
                </div>

                <div class="links">
                    <a href="{{ url('/questions/index') }}" class="hover1">Q&A はこちら</a>   
                    <a href="{{ url('/plans/index') }}" class="hover2">AGRI PLANS はこちら</a>
                    
                </div>
            </div>
        </div>
    </body>
</html>
