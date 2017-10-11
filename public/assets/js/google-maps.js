
function initMap() {
    var directionsDisplay = new google.maps.DirectionsRenderer;
    var directionsService = new google.maps.DirectionsService;
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 13,
        center: {lat: 33.943992, lng: -118.408037}
    });
    directionsDisplay.setMap(map);

    var coordinates = {
        lax: {
            lat : 33.943992,
            lng : -118.408037
        },
        alamo: {
            lat : 33.954928,
            lng : -118.377036
        },
        car: {
            lat : 33.952496,
            lng : -118.375240
        }
    };
    //route form Alamo to Sandie-Go's car:
    calculateAndDisplayRoute(directionsService, directionsDisplay, 'WALKING', coordinates.alamo, coordinates.car);
}

function calculateAndDisplayRoute(directionsService, directionsDisplay, selectedMode, originCrd, destinationCrd) {
    directionsService.route({
        origin: {lat: originCrd.lat, lng: originCrd.lng},
        destination: {lat: destinationCrd.lat, lng: destinationCrd.lng},
        // Note that Javascript allows us to access the constant
        // using square brackets and a string value as its
        // "property."
        travelMode: google.maps.TravelMode[selectedMode]
    }, function(response, status) {
        if (status == 'OK') {
            directionsDisplay.setDirections(response);
        } else {
            window.alert('Directions request failed due to ' + status);
        }
    });
}

/*
*  <select id="mode">
      <option value="DRIVING">Driving</option>
      <option value="WALKING">Walking</option>
      <option value="BICYCLING">Bicycling</option>
      <option value="TRANSIT">Transit</option>
    </select>*
* */
/*
function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 20.291, lng: 153.027},
        zoom: 6,
        mapTypeId: 'terrain'
    });

    // Define the symbol, using one of the predefined paths ('CIRCLE')
    // supplied by the Google Maps JavaScript API.
    var lineSymbol = {
        path: google.maps.SymbolPath.CIRCLE,
        scale: 8,
        strokeColor: '#393'
    };

    // Create the polyline and add the symbol to it via the 'icons' property.
    var line = new google.maps.Polyline({
        path: [{lat: 33.943992, lng: -118.408037}, {lat: 33.954928, lng: -118.377036}, {lat: 33.952496, lng: -118.375240}],
        icons: [{
            icon: lineSymbol,
            offset: '100%'
        }],
        map: map
    });

    animateCircle(line);
}

// Use the DOM setInterval() function to change the offset of the symbol
// at fixed intervals.
function animateCircle(line) {
    var count = 0;
    window.setInterval(function() {
        count = (count + 1) % 200;

        var icons = line.get('icons');
        icons[0].offset = (count / 2) + '%';
        line.set('icons', icons);
    }, 20);
}
*/