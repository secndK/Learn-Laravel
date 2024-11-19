<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
</head>
<body>

    @if(session('success'))
    <div style="color: green;">
        {{ session('success') }}
    </div>
@endif


<h1>Formulaire d'inscription</h1>
<form action="{{ route('register') }}" method="POST">
    @csrf <!-- Protection contre les attaques CSRF -->

    <label for="name">Nom :</label>
    <input type="text" name="name" id="name" value="{{ old('name') }}">
    @error('name')
        <div style="color: red;">{{ $message }}</div>
    @enderror

    <label for="email">Email :</label>
    <input type="email" name="email" id="email" value="{{ old('email') }}">
    @error('email')
        <div style="color: red;">{{ $message }}</div>
    @enderror

    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password">
    @error('password')
        <div style="color: red;">{{ $message }}</div>
    @enderror

    <button type="submit">S'inscrire</button>
</form>




</body>
</html>
