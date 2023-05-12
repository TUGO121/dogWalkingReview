<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>dogWalkingReviewレビュー詳細ページ</title>
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