@extends('layouts.app')

@section('content')
    <div class="container junstify-content-center">
        <h1 class="display-4 border border-top-0 border-left-0 border-right-0">{{ $supe->nickname }}</h1>
        <div class="row mb-5">
            <div class="col-md-12 mt-3">
                <div class="card" style="width: 100%;">
                    <img class="card-img-top" src="{{ asset('img/hl.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">First Name: {{ $supe->firstname }}</li>
                        <li class="list-group-item">Last Name: {{ $supe->lastname }}</li>
                        <li class="list-group-item">Gender: {{ $supe->gender === 'M' ? 'Man' : 'Woman' }}</li>
                        <li class="list-group-item">Citizenship: {{ $supe->citizenship }}</li>
                        <li class="list-group-item">Birthday: {{ $supe->birthday }}</li>
                        <li class="list-group-item">Status: {{ $supe->status ? 'Alive' : 'Dead' }}</li>
                    </ul>
                </div>
            </div>
        </div>

        <hr>
        <h2>Last Sighting</h2>
        <div id="mapid">

        </div>
    
        <script>
            var mymap = L.map('mapid').setView([-17.7243754, -43.6017953], 4);
    
            L.tileLayer(
                'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoicGVkcm9wYXVsbyIsImEiOiJja2Y0MW5oMmkwOHM5MnBzNnc3MTltNWlxIn0.z1z2MgW77cuvRS8qEL0mDg', {
                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                    maxZoom: 18,
                    id: 'mapbox/streets-v11',
                    tileSize: 512,
                    zoomOffset: -1,
                    accessToken: 'pk.eyJ1IjoicGVkcm9wYXVsbyIsImEiOiJja2Y0MW5oMmkwOHM5MnBzNnc3MTltNWlxIn0.z1z2MgW77cuvRS8qEL0mDg'
                }).addTo(mymap);
    
            L.marker([-17.7243754, -43.6017953]).addTo(mymap);
    
        </script>
    
        <style>
            #mapid {
                height: 500px;
                width: 100%;
            }
    
        </style>
    </div>

@endsection
