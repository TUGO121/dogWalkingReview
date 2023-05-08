<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        
        <h1 class="place">
            {{ $review->place_id }}
        </h1>
        <div class="content">
            <div class="content__review">
                <h3>レビュー</h3>
                <p>{{ $review->text }}</p>    
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        
    </body>
</html>