var zahl=1;
var don ="";
function vor(){
    zahl++;
    if(zahl > 6){
        zahl=1;
    }
    document.getElementById("galeriePics").src= "../images/carport_gartenhaus/bild%20("+zahl+").jpg";
    document.getElementById("zaehler").innerHTML = "" +zahl;
}
function zurueck(){
    zahl--;
    if(zahl < 1){
        zahl=6;
    }
    document.getElementById("galeriePics").src= "../images/carport_gartenhaus/bild%20("+zahl+").jpg";
}