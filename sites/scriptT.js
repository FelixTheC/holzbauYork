var zahl=1;
var don ="";
function vor(){
    zahl++;
    if(zahl > 12){
        zahl=1;
    }
    document.getElementById("galeriePics").src= "../images/terassen/bild%20("+zahl+").jpg";
    document.getElementById("zaehler").innerHTML = "" +zahl;
}
function zurueck(){
    zahl--;
    if(zahl < 1){
        zahl=12;
    }
    document.getElementById("galeriePics").src= "../images/terassen/bild%20("+zahl+").jpg";
}