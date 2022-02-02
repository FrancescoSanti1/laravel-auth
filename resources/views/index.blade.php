<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>

    @auth
        <h2>Ciao {{Auth::user()->name}}! Hai effettuato l'accesso.</h2>
    @endauth

    <h3>Registrati</h3>
    <form action="{{route('register')}}" method="post">
        @method('post')
        @csrf

        <input type="text" name="name" placeholder="username"><br>
        <input type="email" name="email" placeholder="la tua email"><br>
        <input type="password" name="password" placeholder="la tua password"><br>
        <input type="password" name="password_confirmation" placeholder="ripeti la password"><br><br>
        <input type="submit" value="Registrati">
    </form>

    <h3>oppure accedi</h3>
    <form action="{{route('login')}}" method="post">
        @method('post')
        @csrf

        <input type="email" name="email" placeholder="la tua email"><br>
        <input type="password" name="password" placeholder="la tua password"><br><br>
        <input type="submit" value="Accedi">
    </form>
</body>
</html>