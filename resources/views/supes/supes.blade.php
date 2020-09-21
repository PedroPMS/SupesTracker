@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="display-4 border border-top-0 border-left-0 border-right-0">Our Heroes</h1>
        <div class="row">
            @foreach ($supes as $supe)
                <div class="col-md-4 mt-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('img/hl.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $supe->nickname }}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the
                                card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">First Name: {{ $supe->firstname }}</li>
                            <li class="list-group-item">Citizenship: {{ $supe->citizenship }}</li>
                            <li class="list-group-item">Birthday: {{ $supe->birthday }}</li>
                        </ul>
                        <div class="card-body d-flex justify-content-between">
                            <a href="{{ route("supes.show", ['id_supe' => $supe->id_supe, 'supe' => Str::slug($supe->nickname)]) }}" class="card-link">Full Profile</a>
                            <a href="{{ route("posts.show", ['id_supe' => $supe->id_supe, 'supe' => Str::slug($supe->nickname)]) }}" class="card-link">See Posts</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
