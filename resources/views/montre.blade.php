<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon espace de test avec blade</title>
</head>
<body>
    <h1>

        <!-- Condition if -->
        @if($hour < 12)
            Bonjour
        @elseif($hour < 18)
            Bon après-midi !
        @else
            Bonsoir !
        @endif
        {{$name}} !

    </h1>

    <!-- Condition unless -->
    @unless ($isadmin)
        <p>Vous n'avez pas accès à cette section administrative</p>
    @endunless


    <!--condition isset  -->
    @isset($user['email'])
        <h2>Email : {{ $user['email'] }}</h2>
    @endisset




    <!-- les boucles -->

<!--for -->
    <ul>
        @for ($i = 1; $i <=10; $i++)

            <li>5 x {{ $i}} = {{5 * $i}}  </li>

        @endfor
    </ul>



<!-- forelse -->

<h3> liste des produits </h3>

<ul>
    @forelse ($produits as $produit )
        <li> {{produit}} </li>

    @empty
        <p>Aucun produit disponible.</p>

    @endforelse
</ul>






</body>
</html>
