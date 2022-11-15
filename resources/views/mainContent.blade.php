@extends('mainTemplate')

@section('content')
    <div class="d-flex">
        <img src="{{ asset('img/PersonalLogo.png') }}" alt="Logo" width="35%" height="35%">
        <div class="cointainer-fluid text-center m-4 d-flex flex-column justify-content-center align-items-start " style="color: white; font-size:100px" >
            <p style="font-size:60px; color:#e687aa">WELCOME TO SUNIBNEWS</p>
            <p style="font-size:20px;text-align:left ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim est quo placeat, perferendis tempore officiis fuga maxime dolores maiores architecto?</p>
            <a href="/card"><button class="btn btn-primary rounded-pill" type="button" style="font-size: 1rem; font-weight:bold">READ NEWS</button></a>
        </div>
    </div>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('img/valorant.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>VALORANT</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, delectus.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/genshin.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>GENSHIN</h1>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam, amet?</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/bitcoin.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>BITCOIN</h1>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit, eos.</p>
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

@endsection
