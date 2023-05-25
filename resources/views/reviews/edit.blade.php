<x-app-layout>
    <x-slot name="header">
        <h1>Let's Dogwalking!!</h1>
        <p>ユーザー名：{{ Auth::user()->name }}</p>
    </x-slot>
       <form action="/reviews/{{ $review->id }}"method="POST">
           @csrf
           @method('PUT')
           
           <div class='content__place'>
               <h1>場所名</h1>
               <h2 class="place">
            {{ $review->place->name }}
        </h2>
           </div>
           
           <div class='content__review'>
               <h1>レビュー</h1>
               <input type='text' name='review[text]' value="{{ $review->text}}">
           </div>
           
           <h1>評価</h1>
                  <div class="rating">
                    <input type="radio" id="star5" name="review[stars]" value="5" class="hidden" />
                    <label for="star5" class="text-2xl cursor-pointer edit-rating">&#x2606;</label>
                    <input type="radio" id="star4" name="review[stars]" value="4" class="hidden" />
                    <label for="star4" class="text-2xl cursor-pointer edit-rating">&#x2606;</label>
                    <input type="radio" id="star3" name="review[stars]" value="3" class="hidden" />
                    <label for="star3" class="text-2xl cursor-pointer edit-rating">&#x2606;</label>
                    <input type="radio" id="star2" name="review[stars]" value="2" class="hidden" />
                    <label for="star2" class="text-2xl cursor-pointer edit-rating">&#x2606;</label>
                    <input type="radio" id="star1" name="review[stars]" value="1" class="hidden" />
                    <label for="star1" class="text-2xl cursor-pointer edit-rating">&#x2606;</label>
                　</div>
            
           <input type="submit" value="保存" />
       </form>
   </x-app-layout>