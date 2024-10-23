
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
{{--  --}}

    @extends('layouts.app')

@section('content')
    <h1>Bienvenue sur mon site !</h1>
    <p>Ceci est la page d'accueil.</p>
@endsection
{{--  --}}

    <form method="POST" action="">
    @csrf
    <div>
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea name="message" id="message"></textarea>
    </div>
    <button type="submit">Envoyer</button>
</form>
</body>
</html>