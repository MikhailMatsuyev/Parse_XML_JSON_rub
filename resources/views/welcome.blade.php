<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Rate
                </div>
                <div class="rate" style="height: 20px; width: 50px; color: red; display:inline-block;">rate  </div>
				<span>
                    RUB за 1 USD
                </span>
            </div>
        </div>
        <!-- Scripts -->
        <script src="/js/app.js"></script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="/assets/js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/jasny-bootstrap.min.js"></script>
        <script src="/assets/jqueryui/jquery-ui.min.js"></script>
        <script>
            $("document").ready(function(){
                
                setInterval(function(){//Функция каждую 3 сек вызывает функцию getNews()
                    setInterval(function(){
                        getNews();
                    }, 3000);
                })

                function getNews(){
                    $.ajax({
                        url: '{{ url('welcome')  }}',
                        type: 'GET',
                        
                        success: function(data){
                            var data = jQuery.parseJSON(data);
                            $(".rate").text(data);

                        }
                    });
                }

            })
        </script>

    </body>
</html>


