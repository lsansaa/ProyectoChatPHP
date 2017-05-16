<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Chat</title>

        {!! MaterializeCSS::include_full() !!}
    </head>
    <body>

                <h1 class="center">Bienvenido, {{$user or 'Default'}}</h1>

                <div id="contents">
                    <div id="wrapper">
                        <div class="bubble-container">
                            <!--ChatLog-->

                        </div>
                    </div>
                </div>
                    <div id="form" class="center">
                        <form action="/chat" class="form" method="post">
                            <input id="user" name="user" style="width:100px" placeholder="Usuario" type="text"/>
                            <input id="msgText" name="msgText" style="width:393px" placeholder="Mensaje" type="text"/>
                            <input type="submit" class="button" value="submit"/>
                        </form>
                    </div>
        </div>
    </body>
</html>
