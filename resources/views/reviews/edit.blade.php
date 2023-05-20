<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>dogWalkingReviewレビュー編集ページ</title>
    </head>
    <body>
       <form action="/reviews/{{ $review->id }}"method="POST">
           @csrf
           @method('PUT')
           <div class='content__title'>
               <h2>場所名</h2>
               <input type='text' 'name='review[place_id] value="{{ $review->place_id}}">
           </div>
           <div class='content__review'>
               <h2>レビュー</h2>
               <input type='text' name='review[text]' value="{{ $review->text}}">
           </div>
           <input type="submit" value="保存" />
       </form>
    </body>
</html>