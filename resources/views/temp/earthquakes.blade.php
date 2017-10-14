<!DOCTYPE html>
<html>
<head>
    <title>Сведения о землетрясениях</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 100%;
            margin: 0;
        }

        /* Optional: Makes the sample page fill the window. */
        html, body, .container-fluid {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">LocPointer</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Help</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
            </form>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="col-md-12" id="map"></div>
</div>


<script>
    var map, google;
    var odessa = {
        lat: 46.466667,
        lng: 30.733333
    };

    function initMap() {

        var options = {
            center: new google.maps.LatLng(2.8,-187.3),
            zoom: 3,
            mapTypeId: 'terrain', // roadmap (default), satellite, hybrid, terrain
            scrollwheel: false
        };

        map = new google.maps.Map(document.getElementById('map'), options);

    }

    var script = document.createElement('script');

    script.src = 'http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_week.geojsonp';
    document.getElementsByTagName('head')[0].appendChild(script);

    window.eqfeed_callback = function(results) {
        for (var i = 0; i < results.features.length; i++) {
            var coords = results.features[i].geometry.coordinates;
            var latLng = new google.maps.LatLng(coords[1],coords[0]);
            var marker = new google.maps.Marker({
                position: latLng,
                map: map
            });
        }
    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxjGsIpuVTyH3sMSrldKLmsRXa1PtZUWc&callback=initMap&libraries=geometry" async defer></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>