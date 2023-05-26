<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="/randomArticle" class="text-white bg-dark">
                <img src="{{ asset('img/slide1.jpg') }}" class="d-block w-100" alt="retire and relax">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Why not retire early?</h3>
                    <h5>We can help you reach your retirement goals early.</h5>
            </a>
        </div>
    </div>
    <div class="carousel-item">
        <a href="/randomArticle" class="text-white bg-dark">
            <img src="{{ asset('img/slide2.jpg') }}" href="/randomArticle" class="d-block w-100"
                alt="save more money">
            <div class="carousel-caption d-none d-md-block">
                <h3>Saving is not just a verb</h3>
                <h5>It's a way of life. The Milton Financial way.</h5>
        </a>
    </div>
</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button>
</div>
<div class="container">
    @include('posts.homeArticles')

</div>
