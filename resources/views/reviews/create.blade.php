
<x-app-layout>
    <x-slot name="header">
        <h1>Let's Dogwalking!!</h1>
        <p>ユーザー名：{{ Auth::user()->name }}</p>
    </x-slot>
    
     <h1>Dogwalking!!</h1>
     
       <!--投稿フォーム -->
        <div class="review-list">
            <form action="/reviews" method="POST">
                @csrf
                
                <div class="category">
                  <h2>カテゴリー</h2>
                    <select name="review[category_id]" placeholder="カテゴリー">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                    </select>
                </div>
                
                 <div class="place">
                  <h2>場所</h2>
                    <select name="review[place_id]" placeholder="場所">
                    @foreach ($places as $place)
                        <option value="{{ $place->id }}">{{ $place->name }}</option>
                    @endforeach
                    </select>
                </div>
                
                 <div class="review">
                  <h2>レビュー</h2>
                 <textarea name="review[text]" placeholder="レビュー"></textarea>
                </div>
                
                <div class="stars">
                  <h2>評価</h2>
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
                </div>
                
                <input type="submit" value="保存" />
            </form>
            
            <div class="img-container">
                    <img src="{{ asset('img/IMG_3607.jpg') }}" alt="">
            </div>
        </div>
        
</x-app-layout>