<x-app-layout>
    <x-slot name="header">
        <h1>Let's Dogwalking!!</h1>
        <p>ユーザー名：{{ Auth::user()->name }}</p>
    </x-slot>
        
         <!--カテゴリー-->
        <div class='category'>
            @foreach ($categories as $category)
                <a href="/categories/{{$category->id}}">{{ $category->name }}</a>
            @endforeach
        </div>
        <!--投稿ページ-->
        <a href='/reviews/create'>create</a>
        
        <!--写真-->
        
        <!--投稿一覧-->
        <div class='reviews'>
            @foreach ($reviews as $review)
                <div class='review'>
                     <p class='category'>{{ $review->category->name }}</p>
                    <p class='place'>{{ $review->place->name }}</p>
                    <a href="/reviews/{{ $review->id }}">{{ $review->text }}</a>
                    <p class='user'>{{ $review->user->name }}</p>
                    
                    <div class="rating">
                    <input type="radio" id="star5" class="hidden" disabled {{ $review->stars===5? "checked" : ""}}/>
                    <label for="star5" class="text-2xl cursor-pointer">&#x2606;</label>
                    <input type="radio" id="star4" class="hidden" disabled {{ $review->stars===4? "checked" : ""}}/>
                    <label for="star4" class="text-2xl cursor-pointer">&#x2606;</label>
                    <input type="radio" id="star3" class="hidden" disabled {{ $review->stars===3? "checked" : ""}} />
                    <label for="star3" class="text-2xl cursor-pointer">&#x2606;</label>
                    <input type="radio" id="star2" class="hidden" disabled {{ $review->stars===2? "checked" : ""}}/>
                    <label for="star2" class="text-2xl cursor-pointer">&#x2606;</label>
                    <input type="radio" id="star1" class="hidden" disabled {{ $review->stars===1? "checked" : ""}}/>
                    <label for="star1" class="text-2xl cursor-pointer">&#x2606;</label>
                </div>
                    
                    <form action="/reviews/{{ $review->id }}" id="form_{{ $review->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $review->id }})">delete</button>
                    </form>
                </div> 
            @endforeach
            </div>
        </div>
        
        <!--あいさつ文-->
        <p>皆さんはじめまして！！サイト作成者の○○です＾＾<br>
        私は愛犬とのお出かけが大好きです。<br>
        そんな大好きな犬とのお出かけを通してたくさんの人たちとつながることができたらうれしいと思い、このサイトを作りました！！<br>
        たくさんの愛犬家とおすすめの場所を共有していきましょう！！</p>
        
    <script>
        function deletePost(id) {
            'use strict'
            
            if (confirm('削除すると復元できません。　\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
</x-app-layout>
