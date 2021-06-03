<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPSIXnA8K7gndiwijS1Iy8q9c3L3HLfHo&callback=initMap&libraries=&v=weekly"
          type="text/javascript"></script>
        <link rel="stylesheet" href="./reset.css">
        <link rel="stylesheet" href="./main.css">

    <body>
        <div class="pagrindinis">
            <div class="register">
                <h1 class="mainDesc">Užsakyti vietą</h1>


            </div>

            <div class="map">
                
            <div id="locationMain"></div>
            </div>

            <div class="list">
                <h1 class="mainDesc">Užsakytų vietų sąrašas</h1>
            </div>
        </div>
    </body>
    <script>
// prdzia
var location = <?php echo $stuff; ?>;
// console.log(trash)
// testing
// var locations = [
//       ['pirmas', 56.241929104940375, 23.634707957688992],
//       ['antras', 56.241718628143777, 23.634707957688992],
//       ['trecias', 56.2415081513472, 23.634707957688992],
//       ['ketvirtas',56.2412976745506, 23.634707957688992 ],
//       ['penktas', 56.241087197754, 23.634707957688992],
//       ['sestas',56.241929104940375, 23.635713017406772 ],
//       ['septintas',56.241718628143777, 23.635713017406772 ],
//       ['astuntas', 56.2415081513472, 23.635713017406772],
//       ['devintas',56.2412976745506, 23.635713017406772 ],
//       ['desimtas',56.241087197754, 23.635713017406772 ],
//     ];

    var map = new google.maps.Map(document.getElementById('locationMain'), {
      zoom: 17.5,
      center: new google.maps.LatLng(56.24168095734993, 23.634612266633244),
      mapTypeId: 'satellite'
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i]["latitude"], locations[i]["longitude"]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i]["id"]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }

// pabaiga

        document.querySelector(".list").addEventListener("click", function (e) {
            window.open("https://desolate-reaches-61237.herokuapp.com/admin/index.php?page=1", "_self");
        });
document.querySelector(".register").addEventListener("click", function (e) {
            window.open("https://desolate-reaches-61237.herokuapp.com/register", "_self");
        });
    </script>
    

</html>