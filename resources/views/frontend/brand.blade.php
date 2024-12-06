@extends('layouts.master')

@section('title')

@endsection

@section('style-online')

@endsection

@section('style')
<style>
  /* Add this to your existing CSS or within <style> tags */
  .hero-video {
    width: 100%;
    height: calc(100vh - var(--header-height));
    /* Adjust for header height */
    object-fit: cover;
    position: relative;
    z-index: -1;
  }

  .hero-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: white;
  }

  .video-section {
    position: relative;
    overflow: hidden;
  }
</style>
@endsection

@section('content')
<!--==================== MAIN ====================-->
<main class="main">
  <section class="video-section">
    <video class="hero-video" autoplay muted loop>
      <source src="{{asset('assets/img/Rolex/videoplayback.mp4')}}" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="hero-content">

    </div>
  </section>

  <!--==================== FEATURED ====================-->
  <section class="featured section container" id="featured">
    <h2 class="section__title">The Clients Favourite</h2>

    <div class="featured__container grid">
      @foreach($products as $product)
      <article class="featured__card">
        <span class="featured__tag">{{ $product['tag'] }}</span>

        <img src="{{ asset($product['image']) }}" alt="{{ $product['alt'] }}" class="featured__img">

        <div class="featured__data">
          <h3 class="featured__title">{{ $product['title'] }}</h3>
          <span class="featured__price">{{ $product['price'] }}</span>
        </div>

        <a href="{{ asset($product['link']) }}" class="button featured__button">
          Buy Now
        </a>
      </article>
      @endforeach

    </div>
  </section>

</main>
@endsection

@section("js-online")

@endsection

@section("js")

@endsection