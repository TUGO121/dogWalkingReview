<x-app-layout>
    <x-slot name="header">
        <h1>Let's Dogwalking!!</h1>
        <p>ユーザー名：{{ Auth::user()->name }}</p>
    </x-slot>
        
         <!--カテゴリー-->
        <a href="/">Home</a> 
        <div class='category'>
            @foreach ($categories as $category)
                     <a href="/categories/{{$category->id}}">{{ $category->name }}</a>
               
            @endforeach
            
        </div>
        <!--投稿一覧-->
        <div class='reviews'>
            @foreach ($reviews as $review)
                <div class='review'>
                     <p class='category'>{{ $review->category->name }}</p>
                    <p class='place'>{{ $review->place->name }}</p>
                    <a href="/reviews/{{ $review->id }}">{{ $review->text }}</a>
                    <p class='user'>{{ $review->user->name }}</p>
                    <p class='stars'>{{ $review->stars }}</p>
                </div>
            @endforeach
            </div>
        </div>
       
        <!--<h2 class='place'>-->
        <!--    <a href="/reviews/{{ $review->id }}">{{ $review->place }}</a>-->
        <!--</h2>-->
        
        <!--利用規約、お問い合わせフォームなど-->
    
    <script>
        function deletePost(id) {
            'use strict'
            
            if (confirm('削除すると復元できません。　\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
</x-app-layout>
