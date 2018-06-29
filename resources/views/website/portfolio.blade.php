@extends('layouts.website')
@section('content')
<section class="page-title bg-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h1>Some of our latest projects.</h1>
          <p>Don’t just take our word for it. Check out some of our latest work.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Portfolio Start -->
<section class="portfolio-work">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <div class="portfolio-menu">
            <ul>
              <li class="filter" data-filter="all">All</li>
              <li class="filter" data-filter=".Branding">Branding</li>
              <li class="filter" data-filter=".Websites">Websites</li>
              <li class="filter" data-filter=".Graphic">Graphic</li>
              <li class="filter" data-filter=".design">Design</li>
              <li class="filter" data-filter=".Video">Video</li>
            </ul>
          </div>
          <div class="portfolio-contant">
            <ul class="portfolio-contant-active text-center portfolio-popup">
              <li class="mix Branding">
                <a class="portfolio-popup" href="{{asset('public/contents/website')}}/images/portfolio/work1.jpg">
                  <img src="{{asset('public/contents/website')}}/images/portfolio/work1.jpg" alt="">
                  <div class="item-overly">
                    <div class="position-center">
                      <h4>Rio Furniture</h4>
                      <p>Labore et dolore magna aliqua. Ut enim ad </p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="mix Websites">
                <a  href="{{asset('public/contents/website')}}/images/portfolio/work2.jpg">
                  <img src="{{asset('public/contents/website')}}/images/portfolio/work2.jpg" alt="">
                  <div class="item-overly">
                    <div class="position-center">
                      <h4>Behance Design</h4>
                      <p>Labore et dolore magna aliqua. Ut enim ad </p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="mix Graphic">
                <a href="{{asset('public/contents/website')}}/images/portfolio/work3.jpg">
                  <img src="{{asset('public/contents/website')}}/images/portfolio/work3.jpg" alt="">
                  <div class="item-overly">
                    <div class="position-center">
                      <h4>Brothers Furniture</h4>
                      <p>Labore et dolore magna aliqua. Ut enim ad </p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="mix design">
                <a href="{{asset('public/contents/website')}}/images/portfolio/work4.jpg">
                  <img src="{{asset('public/contents/website')}}/images/portfolio/work4.jpg" alt="">
                  <div class="item-overly">
                    <div class="position-center">
                      <h4>Adestra Cookup</h4>
                      <p>Labore et dolore magna aliqua. Ut enim ad </p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="mix Video">
                <a href="{{asset('public/contents/website')}}/images/portfolio/work5.jpg">
                  <img src="{{asset('public/contents/website')}}/images/portfolio/work5.jpg" alt="">
                  <div class="item-overly">
                    <div class="position-center">
                      <h4>Texas Boxing</h4>
                      <p>Labore et dolore magna aliqua. Ut enim ad </p>

                    </div>
                  </div>
                </a>
              </li>
              <li class="mix Graphic">
                <a href="{{asset('public/contents/website')}}/images/portfolio/work6.jpg">
                  <img src="{{asset('public/contents/website')}}/images/portfolio/work6.jpg" alt="">
                  <div class="item-overly">
                    <div class="position-center">
                      <h4>Apple Mockup</h4>
                      <p>Labore et dolore magna aliqua. Ut enim ad </p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
