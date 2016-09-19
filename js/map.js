function initMap() {
       var myLatLng = {lat:40.7127840, lng:-74.0059410};
       var map = new google.maps.Map(document.getElementById('map'), {
         'zoom' : 15,
         'center' : myLatLng,
         'draggable' :false,
         'scrollwheel' : false
       });

       var marker = new google.maps.Marker({
         position: myLatLng,
         map: map,
         title: 'Visit us!'
       });
     }
