<x-app-layout>
    <x-slot name="header">
        <h1>Let's Dogwalking!!</h1>
    </x-slot>
        <h1 class="place">
            {{ $review->place->name }}
        </h1>
        <div class="content">
            <div class="content__review">
                <h3>レビュー</h3>
                <p>{{ $review->text }}</p>    
            </div>
            <div class="content__stars">
                <h3>評価</h3>
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
        </div>
        <div class="edit"><a href="/reviews/{{ $review->id }}/edit">edit</a></div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
</x-app-layout>