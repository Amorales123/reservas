<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="../../../../favicon.ico">-->

    <title>Bienvenido</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset("css/bootstrap.min.css")}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset("css/signin.css")}}" rel="stylesheet">
</head>

<body class="text-center">
<form class="form-signin" method="POST" action="{{url('/login')}}">
    {{csrf_field()}}
    @if(session()->has('flash'))
        <div class="alert-info">{{session('flash')}}</div>
    @endif
    <h1 class="h3 mb-3 font-weight-normal">Accede al Sistema</h1>

    <div class="form-group {{$errors->has('email')?'has-error':''}}" >
        <input type="mail" name="email" class="form-control" value="{{old('email')}}" placeholder="correo Electrónico" required autofocus>
        {!! $errors->first('email','<span class="help-block">:message </span>') !!}
    </div>

    <div class="form-group{{$errors->has('password')?'has-error':''}}" >
        <input type="password" name="password" class="form-control" placeholder="EJ: 12345" required>
        {!! $errors->first('password','<span class="help-block">:message </span>') !!}
    </div>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Inicio</button>

    <p class="mt-5 mb-3 text-muted"> EuroHosstal 2018-2019</p>
</form>
</body>
</html>
