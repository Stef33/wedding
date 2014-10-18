var map;
var panel;
var initialize;
var calculate;
var direction;
 
initialize = function(){
  var latLng = new google.maps.LatLng(48.8567, 2.3508); // Correspond au coordonnées de Paris
  var myOptions = {
    zoom      : 14,
    center    : latLng,
    mapTypeId : google.maps.MapTypeId.TERRAIN, // Type de carte, différentes valeurs possible HYBRID, ROADMAP, SATELLITE, TERRAIN
    maxZoom   : 20
    
    
  };
 
  map      = new google.maps.Map(document.getElementById('map'), myOptions);
  
    var marker = new google.maps.Marker({
    position : latLng,
    map      : map,
    title    : "Paris"
    //icon     : "marker_lille.gif" // Chemin de l'image du marqueur pour surcharger celui par défaut
  });

  direction = new google.maps.DirectionsRenderer({
    map   : map,
    panel : panel
  });
};

calculate = function(){
    origin      = document.getElementById('origin').value; // Le point départ
    destination = document.getElementById('destination').value; // Le point d'arrivé
    if(origin && destination){
        var request = {
            origin      : origin,
            destination : destination,
            travelMode  : google.maps.DirectionsTravelMode.DRIVING // Type de transport
        }
        var directionsService = new google.maps.DirectionsService(); // Service de calcul d'itinéraire
        directionsService.route(request, function(response, status){ // Envoie de la requête pour calculer le parcours
            if(status == google.maps.DirectionsStatus.OK){
                direction.setDirections(response); // Trace l'itinéraire sur la carte et les différentes étapes du parcours
            }
        });
    } //http://code.google.com/intl/fr-FR/apis/maps/documentation/javascript/reference.html#DirectionsRequest
};

initialize();