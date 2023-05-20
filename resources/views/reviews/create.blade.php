
<x-app-layout>
    <x-slot name="header">
        <h1>Let's Dogwalking!!</h1>
    </x-slot>
    
     <h1>Dogwalking!!</h1>
     
       <!--投稿フォーム -->
       
        <form action="/reviews" method="POST">
            @csrf
            
            <div class="review">
              <h2>レビュー</h2>
              <input type="textarea" name="review[text]" placeholder="レビュー"/>
            </div>
            
            <div class="stars">
              <h2>評価</h2>
                  <div class="rating">
                    <input type="radio" id="star5" name="review[stars]" value="5" class="hidden" />
                    <label for="star5" class="text-2xl cursor-pointer">&#x2606;</label>
                    <input type="radio" id="star4" name="review[stars]" value="4" class="hidden" />
                    <label for="star4" class="text-2xl cursor-pointer">&#x2606;</label>
                    <input type="radio" id="star3" name="review[stars]" value="3" class="hidden" />
                    <label for="star3" class="text-2xl cursor-pointer">&#x2606;</label>
                    <input type="radio" id="star2" name="review[stars]" value="2" class="hidden" />
                    <label for="star2" class="text-2xl cursor-pointer">&#x2606;</label>
                    <input type="radio" id="star1" name="review[stars]" value="1" class="hidden" />
                    <label for="star1" class="text-2xl cursor-pointer">&#x2606;</label>
                　</div>
            </div>
            
             <div class="place">
              <h2>場所</h2>
              <input type="checbox" name="review[place_id]" placeholder="場所"/>
            </div>
            
            <div class="category">
              <h2>カテゴリー</h2>
              <input type="checbox" name="review[category_id]" placeholder="場所"/>
            </div>
            
            <input type="submit" value="保存" />
        </form>
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </x-app-layout>