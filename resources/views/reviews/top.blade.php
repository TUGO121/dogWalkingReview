<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dogwalkingreviewサイトtopページ</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
    </head>
    <body>
        <!--タイトル-->
        <h1>Let's Dogwalking!!</h1>
        
        <a href='/reviews/create'>create</a>
        
         <!--カテゴリー-->
        < <a href="/">Home</a> 
         <div class='category'>
            @foreach ($categories as $category)
                     <a href="/categories/{{$category->id}}">{{ $category->name }}</a>
                </div>
            @endforeach
            </div>
        </div>
        
        <!--写真-->
        
        <!--投稿一覧-->
        <div class='reviews'>
            @foreach ($reviews as $review)
                <div class='review'>
                     <p class='category'>{{ $review->category_id }}</p>
                    <p class='place'>{{ $review->place_id }}</p>
                    <p class='text'>{{ $review->text }}</p>
                    <p class='user'>{{ $review->user_id }}</p>
                    <p class='stars'>{{ $review->stars }}</p>
                </div>
            @endforeach
            </div>
        </div>
       
        <h2 class='place'>
            <a href="/reviews/{{ $review->id }}">{{ $review->place_id }}</a>
        </h2>
        
        <!--あいさつ文-->
        <p>皆さんはじめまして！！サイト作成者の○○です＾＾<br>
        私は愛犬とのお出かけが大好きです。<br>
        そんな大好きな犬とのお出かけを通してたくさんの人たちとつながることができたらうれしいと思い、このサイトを作りました！！<br>
        たくさんの愛犬家とおすすめの場所を共有していきましょう！！</p>
        
        <!--利用規約、お問い合わせフォームなど-->
    
    </body>
</html>
