<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="action">

    // ici on va passer à l'utilisation d'une boucle pour essayer notre projet

    @foreach($users as $user)

    <div>
        <h4>{{$user->name}}</h4>
        <h4>{{$user->email}}</h4>
        <h4>{{$user->email_verified_at}}</h4>
    </div>


    @endforeach 


    </div>
</body>
</html>