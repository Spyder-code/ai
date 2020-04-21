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
    <div class="alert alert-danger text-center" role="alert">
        <a href="{{url('permission')}}"> Click here if the sound is not detected</a>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="card text-center mt-5 salam">
                    @foreach ($greet as $item)
                    <img src="{{asset('image/'.$item->image)}}" alt="">
                        <h1>{{$item->jpn}}</h1>
                        <p>{{$item->ind}}</p>
                        <audio id="player" controls hidden autoplay>
                            <source src="{{asset('voice/'.$item->voice)}}" type="audio/ogg">
                        </audio>
                    @endforeach
                </div>
                <div class="formNama">
                    <div class="card text-center mt-5 perkenalan">
                        @foreach ($perkenalan as $item)
                        <img src="{{asset('image/'.$item->image)}}" alt="">
                            <h1>{{$item->jpn}}</h1>
                            <p>{{$item->ind}}</p>
                            @endforeach
                            <div id="aud" data-src="{{asset('voice/ohayo.ogg')}}"></div>
                                <audio controls hidden id="myAudio" preload="none">
                                    <source src="{{asset('voice/perkenalan.ogg')}}" type="audio/ogg">
                                </audio>
                    </div>
                    <div class="section2">
                        <div class="card text-center mt-5">
                            <h1 id="japan">お名前は？</h1>
                            <p id="indonesia">Siapa namamu ?</p>
                        </div>
                        <form id="form">
                            <input type="text" name="nama" id="nama" autofocus class="form-control text-center mt-5">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
