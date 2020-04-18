<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/index.js')}}"></script>
    <title>AI</title>
</head>
<body>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="card text-center mt-5">
                    @foreach ($greet as $item)
                    <img src="{{asset('image/'.$item->image)}}" alt="">
                        <h1>{{$item->jpn}}</h1>
                        <p>{{$item->ind}}</p>
                        <audio controls autoplay hidden>
                            <source src="{{asset('voice/'.$item->voice)}}" type="audio/ogg">
                        </audio>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <script>
        $(function(){
            setInterval(function(){
        window.location.href = "{{url('main')}}";
    }, 5000);
        });

    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript"
</body>
</html>
