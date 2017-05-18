<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Chat</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        {!! MaterializeCSS::include_full() !!}
    </head>
    <body>

                <h1 class="center">Bienvenido {{$user or ''}}</h1>

                <div id="contents">
                    <div id="wrapper">
                        <ul class="collection">
                            @foreach($messages as $message)
                                <li class="collection-item avatar">
                                    <i class="material-icons circle red">icon</i>
                                    <span class="title">{{$message->usuario}}</span>
                                    <p>{{$message->texto}} - {{$message->fecha}}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                    <div id="form" class="row center">
                        <form action="{{url('chat')}}" class="col s12" method="post">
                            <div class="row">
                                <div class="input-field col s2">
                                    {{csrf_field()}}
                                    <input class="validate" placeholder="Usuario" value="{{$user or ''}}"  name= "user" id="user"/>
                                </div>
                                <div class="input-field col s8">
                                    {{csrf_field()}}
                                    <input name ="msgText">
                                </div>
                                <div class="input-field col s2">
                                    <button class="btn waves-effect waves-light" type="submit">Enviar
                                        <i class="material-icons right">send</i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
        </div>
    </body>
</html>
