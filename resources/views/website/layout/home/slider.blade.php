<div class="home-v10-slider home-slider">
    @foreach($slider as $sliders)
        <div class="lazy slider-1" id="slider-1" data-src="{{asset("images/website/sliders/".$sliders['bg-img'])}}">
        </div>
    @endforeach
</div>