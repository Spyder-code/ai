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
    <script src="{{asset('js/main.js')}}"></script>
    <title>Change Permission</title>
</head>
<body class="bg-primary">
    <div class="container text-center">
        <div class="row bg-light">
            <div class="col">
                <h1 class="text-center">Change Permission</h1>
                <hr>
                <ul class="list-group">
                    <ol class="list-group-item">
                        <h4>1) Click on view site information</h4>
                        <img src="{{asset('image/permission/1.jpg')}}" class="img-thumbnail">
                    </ol>
                    <ol class="list-group-item">
                        <h4>2) Click site settings</h4>
                        <img src="{{asset('image/permission/2.jpg')}}" class="img-thumbnail">
                    </ol>
                    <ol class="list-group-item">
                        <h4>3) Change sound, choose allow </h4>
                        <img src="{{asset('image/permission/3.jpg')}}" class="img-thumbnail">
                    </ol>
                </ul>
                <div class="card-footer">
                    <a href="{{url('/')}}" class="btn btn-primary mt-2">Back</a>
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
