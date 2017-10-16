
function initMap() {
    var directionsDisplay = new google.maps.DirectionsRenderer;
    var directionsService = new google.maps.DirectionsService;
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 13,
        center: {lat: 33.943992, lng: -118.408037}
    });
    directionsDisplay.setMap(map);

    var coordinates = {
        terminalExit:{
            lat : 33.943949,
            lng : -118.408465
        },
        lax: {
            lat : 33.944117,
            lng : -118.408146
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
    document.getElementById('floating-panel').addEventListener('click', function(e) {
        e = e || event

        fp = document.getElementById('floating-panel');
        arrId = fp.getElementsByTagName('a');
        for(var i = 0; i < arrId.length;i++){
            if(e.target.id == arrId[i].id){
                arrId[i].className = 'activeRoute';
            }else{
                arrId[i].className = '';
            }
        }



        if(e.target.id === 'lax'){
            calculateAndDisplayRoute(directionsService, directionsDisplay, 'WALKING', coordinates.terminalExit, coordinates.lax);
        }else if(e.target.id === 'shuttle'){
            calculateAndDisplayRoute(directionsService, directionsDisplay, 'DRIVING', coordinates.lax, coordinates.alamo);
        }else if(e.target.id === 'alamotocar'){
            calculateAndDisplayRoute(directionsService, directionsDisplay, 'WALKING', coordinates.alamo, coordinates.car);
        }else{
            //todo проверка на ошибку
        }


    });
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