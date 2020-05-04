<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"
      rel="stylesheet">
        <title>Masuk</title>
    </head>
    <body>
        <div class="container">
            {{ flash.output() }}
            <div class="page-header">
                <h1>Pendaftaran</h1>
                <form method="post">
                    <label for="title">Username</label>
                    <input type="text" id="username" name="username" placeholder="username">
                    <label for="title">Password</label>
                    <input type="password" id="password" name="password" placeholder="password">
                    <button type="submit" id="send" name="send" value="send">
                        Daftar
                    </button>
                </form>
            </div>
            {{ flashSession.output() }}
        </div>
    </body>
</html>