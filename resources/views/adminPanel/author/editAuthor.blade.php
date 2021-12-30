<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit-autor</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">

</head>

<body>

    <h2>Upraviť autora {{ $author->firstname }} {{ $author->lastname }}</h2>
    <hr>
    <div class="col-sm-11 maincontent">
        <form action="/adminPanel/author/edit" method="POST">

            @csrf
            <label for="ID">ID:</label>
            <input type="text" id="ID" name="ID" value="{{ $author->id}}" readonly><br>
            <label for="Firstname">Meno:</label>
            <input id="inputEditFirstName" type="text" id="Firstname" name="Firstname"
                value="{{ $author->firstname}}"><br>
            <label for="Lastname">Priezvisko:</label>
            <input id="inputEditLastName" type="text" id="Lastname" name="Lastname" value="{{ $author->lastname}}"><br>
            <button class="btn btn-primary" type="submit"> Editovat</button>
        </form>
    </div>

</body>

</html>