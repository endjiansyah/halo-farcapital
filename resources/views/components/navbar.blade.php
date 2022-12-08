<section id="navbar">
    <div class="container">

        <!-- logo box (navbar) -->
        <div class="logo">
            <img src="{{asset('slicing/images/NftiseLogo.png')}}" alt="Nftise">
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{route('home')}}" class="{{request()->is('nftx')? 'active' : ''}}">Home</a></li>
                <li><a href="{{route('feature')}}" class="{{request()->is('nftx/feature')? 'active' : ''}}">Feature</a></li>
                <li><a href="{{route('whotowork')}}" class="{{request()->is('nftx/whotowork')? 'active' : ''}}">Who to Work</a></li>
                <li><a href="{{route('pricing')}}" class="{{request()->is('nftx/pricing')? 'active' : ''}}">Pricing</a></li>
                <li><a href="{{route('reviews')}}" class="{{request()->is('nftx/reviews')? 'active' : ''}}">Reviews</a></li>
            </ul>
        </div>
        <div class="button">
            <a href="#">
                Start free 14 trial
                <img src="{{asset('slicing/images/icons/right arrow.svg')}}" alt="right arrow">
            </a>
        </div>
    </div>
</section>