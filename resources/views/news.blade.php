<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>OperettaHarmony - Főoldal</title>


    <link rel="stylesheet" href="{{ asset('/css/news.css') }}">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    @include('menu')
    <div class="content-container">
        <h2>Hírek</h2>
        <form method="POST" action="/news">
            <div class="form-group">
                <label for="exampleInputEmail1">Oszd meg a legújabb híreket a többiekkel!</label>
                <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <button class="btn btn-sm btn-primary btn-block w-25 p-3 mx-auto mt-3" type="submit">Megosztom!</button>
            </div>
        </form>
        <h3>Többiek hírei</h2>
            @isset($news)
            @foreach ($news as $new)
            <div class="card">
                <div class="card-header">
                    #{{ $new->id }} | Időpont: {{ $new->created_at }} | Posztolta: {{ $new->user->userName }}
                </div>
                <div class="card-body">
                    <blockquote class="blockquote">
                        <p>{{ $new->content }}</p>
                        <div class="comment card w-75 mb-1 ml-5">
                            <div class="card-body py-1">
                                <form method="POST" action="/comment">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Kommenteld te is ezt a nagyszerű hírt!</label>
                                        <div class="d-flex justify-content-between"><textarea name="content"
                                                class="form-control" id="exampleFormControlTextarea1"
                                                rows="2"></textarea>
                                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="newsId" id="newsId" value="{{ $new->id }}">
                                            <input class="btn btn-primary mx-3" type="submit" value="Kommentelek!">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @isset($new->comments)
                        @foreach ($new->comments as $comment)
                        <div class="comment card w-75 mb-1 ml-5">
                            <div class="card-body py-1">
                                {{ $comment->content }}
                                <footer class="blockquote-footer">{{ $comment->user->userName }} | {{
                                    $comment->created_at }}</footer>
                            </div>
                        </div>
                        @endforeach
                        @endisset
                    </blockquote>
                </div>
            </div>
            @endforeach
            @endisset
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>