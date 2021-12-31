<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uprava-{{ $book->title }}</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="/css/editPage.css">
</head>

<body>
    <div class="container login-container ">
        <div class="row justify-content-center">
            <div class="col-md-6 login-form">
                <h3>Upraviť knihu: {{ $book->title }}</h3>
                <hr>
                <form method="POST" action="/login">
                    @csrf

                    <div class="form-group">
                        <label for="id">ID:</label>
                        <input type="text" name='id' class="form-control" value="{{ $book->id}}" readonly required />
                    </div>
                    <div class="form-group">
                        <label for="title">Názov:</label>
                        <input type="text" name='title' class="form-control" value="{{ $book->title}}" required />
                    </div>
                    <div class="form-group">
                        <label for="autor">Autor:</label>
                        <input type="text" name='autor' class="form-control" value="{{ $book->authorID}}" required />
                    </div>
                    <div class="form-group">
                        <label for="Rating">Rating:</label>
                        <input type="text" name='Rating' class="form-control" value="{{ $book->rating}}" required />
                    </div>
                    <div class="form-group">
                        <label for="ISBN">ISBN:</label>
                        <input type="text" name='ISBN' class="form-control" value="{{ $book->ISBN}}" readonly
                            required />
                    </div>
                    <div class="form-group">
                        <label for="rok_vydania">Rok vydania:</label>
                        <input type="text" name='rok_vydania' class="form-control" value="{{ $book->publication_year}}"
                            required />
                    </div>
                    <div class="form-group">
                        <label for="popis">Popis:</label>
                        <textarea rows="5" cols="60">
                        {{ $book->description}}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btnSubmit">Upraviť</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>