@extends('mainTemplate')

@section('content')
    <div class="cointainer text-center m-5 p-5 d-flex flex-column justify-content-center align-items-center" style="color: white; font-size:100px" >
        <p>WELCOME TO SUNIBNEWS</p>
        <img src="{{ asset('img/PersonalLogo.png') }}" alt="Logo" width="25%" height="25%">
            <a href="/card"><button class="btn btn-primary" type="button" style="font-size: 2rem; font-weight:bold">READ NEWS</button></a>
    </div>


@endsection
