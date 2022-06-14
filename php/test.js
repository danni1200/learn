// change text with innerHTML
function changeText() {
    document.getElementById("demoButton").innerHTML = "Paragraph changed.";
  }

// get location of browser
var x = document.getElementById("demoLocation");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}

