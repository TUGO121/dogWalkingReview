<x-app-layout>
    <x-slot name="header">
        <h1>Let's Dogwalking!!</h1>
        <p>ユーザー名：{{ Auth::user()->name }}</p>
    </x-slot>
        
         <!--カテゴリー-->
        <div class='categories'>
            @foreach ($categories as $category)
                     <a href="/categories/{{$category->id}}">{{ $category->name }}</a>
               
            @endforeach
            
        </div>
        <!--投稿一覧-->
        <div class='reviews'>
            <div class="review-list">
            @foreach ($reviews as $review)
                <div class='review'>
                     <p class='category'>{{ $review->category->name }}</p>
                    <a href="/reviews/{{ $review->id }}">{{ $review->place->name }}</a>
                    <p class="/reviews/{{ $review->id }}">{{ $review->text }}</p>
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
                </div>
            @endforeach
            </div>
            <div class="img-container">
                <img src="{{ asset('img/IMG_3607.jpg') }}" alt="">
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
