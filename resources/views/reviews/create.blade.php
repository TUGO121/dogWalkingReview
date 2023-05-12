
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>dogWalkingReviewレビュー作成ページ</title>
    </head>
    <body>
    
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
              <input type="checbox" name="review[stars]" placeholder="評価"/>
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
        
    </body>
</html>
