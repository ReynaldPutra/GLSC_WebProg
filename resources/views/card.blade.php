@extends('mainTemplate')

@section('content')

<div class="m-5" style="color: white">
    <p style="font-size: 60px; color:#e687aa">TRENDING NEWS</p>
</div>

<section class="d-flex flex-wrap justify-content-center">
    @foreach(array_combine($img,$title) as $im => $t)
        @if($loop->even)
        <div class="card m-3 shadow p-3 mb-5 bg-white rounded" style="width: 20rem;">
            <img class="card-img-top" src="{{ asset($im) }}" alt="Card image cap">
            <div class="card-body">
                <h1 class="">{{ $t }}</h1>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, accusamus!</p>
            </div>
          </div>
        @else
        <div class="card m-3 shadow mb-5 bg-white rounded" style="width: 20rem;">
            <img class="card-img-top" src="{{ asset($im) }}" alt="Card image cap">
            <div class="card-body">
                <h1 class="">{{ $t }}</h1>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, accusamus!</p>
            </div>
          </div>
        @endif
    @endforeach
</section>

@endsection
