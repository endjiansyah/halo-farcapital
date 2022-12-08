<section id="customer">
    <div class="container">
        <div class="col-8 title">
            <h2>Customers have consistently rated Around 4.7/5 stars</h2>
        </div>
    </div>
    <div class="container">
        <div class="card col-4">

            <div class="stars-container">
                @for($i = 0;$i < 5;$i++) <img src="{{asset('slicing/images/icons/bintang.png')}}" alt="bintang" class="img-star">
                    @endfor
            </div>
            <p>Maecenas convallis non sapien in commodo. Nulla semper pulvinar luctus. Proin luctus.</p>
            <img src="{{asset('slicing/images/icons/google.png')}}" alt="logo gugel">
        </div>
        <div class="card col-4">

            <div class="stars-container">
                @for($i = 0;$i < 5;$i++) <img src="{{asset('slicing/images/icons/bintang.png')}}" alt="bintang" class="img-star">
                    @endfor
            </div>
            <p>Maecenas convallis non sapien in commodo. Nulla semper pulvinar luctus. Proin luctus.</p>
            <img src="{{asset('slicing/images/icons/amazon.png')}}" alt="logo amazon">
        </div>
        <div class="card col-4">

            <div class="stars-container">
                @for($i = 0;$i < 5;$i++) <img src="{{asset('slicing/images/icons/bintang.png')}}" alt="bintang" class="img-star">
                    @endfor
            </div>
            <p>Maecenas convallis non sapien in commodo. Nulla semper pulvinar luctus. Proin luctus.</p>
            <img src="{{asset('slicing/images/icons/spotify.png')}}" alt="logo spotify">
        </div>
    </div>
</section>