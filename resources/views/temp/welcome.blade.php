<!DOCTYPE html>
<html>
<head>
    <title>Карта пользователя</title>
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
    <div class="col-md-6">

        <div class="col-sm-2 col-md-3 col-lg-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="#">Analytics</a></li>
                <li><a href="#">Export</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="">Nav item</a></li>
                <li><a href="">Nav item again</a></li>
                <li><a href="">One more nav</a></li>
                <li><a href="">Another nav item</a></li>
                <li><a href="">More navigation</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="">Nav item again</a></li>
                <li><a href="">One more nav</a></li>
                <li><a href="">Another nav item</a></li>
            </ul>
        </div>
        <div class="col-sm-10 col-sm-offset-2 col-md-9 col-md-offset-3 col-lg-10 col-lg-offset-2 main">

        </div>
    </div>
    <div class="col-md-6" id="map"></div>
</div>


<script>
    var map, google;
    var markerImage = "images/loc_icons/svg/Arrow_6.svg";
    var popupContent = "<p>Здесь можно разместить сообщение окна</p>" +
        "<img src='https://www.flickr.com/photos/63335489@N02/37414815430/in/album-72157687826087984/' alt='' class='img-rounded img-responsive'>";
    var odessa = {
        lat: 46.466667,
        lng: 30.733333
    };


    function initMap() {

        var options = {
            center: odessa,
            zoom: 11,
            mapTypeId: 'roadmap', // roadmap (default), satellite, hybrid, terrain
            scrollwheel: false
        };

        map = new google.maps.Map(document.getElementById('map'), options);
        makeMarker();




    }



    function makeMarker() {
        var marker = new google.maps.Marker({
            map: map,
            position: odessa,
            title: 'Hello World!',
            icon: markerImage,
            animation: google.maps.Animation.DROP
        });
        var infoWindow = new google.maps.InfoWindow({
            content: popupContent
        });
//        marker.addListener('click', function () {
//            marker.setAnimation(null);
//        });
        marker.addListener('dblclick', function() {
            infoWindow.open(map, marker);
        });
        google.maps.event.addListener(infoWindow,'closeclick',function(){
            marker.setAnimation(google.maps.Animation.BOUNCE);
        });

    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxjGsIpuVTyH3sMSrldKLmsRXa1PtZUWc&callback=initMap&libraries=geometry" async defer></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>