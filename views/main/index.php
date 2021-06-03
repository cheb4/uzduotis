<!doctype html>
<html>
<!-- nera php -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Form</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPSIXnA8K7gndiwijS1Iy8q9c3L3HLfHo&callback=initMap&libraries=&v=weekly"
          type="text/javascript"></script>
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./main.css">
</head>

<body>
    <div id="main-container-order">
        <div class="forma">
            <div id="header">
                <ul class="nav">
                    <!-- navigacija -->
                    <li><a href="/order-form">Užsakymo forma</a></li>
                    <li><a href="/admin/index.php?page=1">Užsakymų sąrašas</a></li>
                </ul>
                <!-- navigacija -->
            </div>
            <form id="order-form" action="/insert" method="POST">
                <div class="form-field">
                    <label>Vardas</label>
                    <input type="text" name="name">
                </div>
                <div class="form-field">
                    <label>Pavarde</label>
                    <input type="text" name="surname">
                </div>
                <div class="form-field">
                    <label>Miestas</label>
                    <input type="text" name="town">
                </div>
                <div class="form-field">
                    <label>Vieta</label>
                    <select name="orderSize">
                        <?php foreach ($freeSpace as $space) {
                            echo  "<option value=".$space["id"].">Nr".$space["id"]."</option>";
                            # code...
                        }?>
                    </select>
                </div>
                <div class="form-field">
                    <label>Telefonas</label>
                    <input type="text" name="phoneNumber">
                </div>
                <div class="form-field">
                    <label>Komentaras</label>
                    <textarea name="comment"></textarea>
                </div>
                <button type="submit">Pateikti</button>
            </form>
        </div>
        <div class="map">
            <div id="locationReg" style="width: 700px; height: 700px;"></div>
        </div>
    </div>

</body>
    <script>
// prdzia
var locations = <?php echo $mainMapData; ?>;
console.log(locations)

      var red_icon =  'https://maps.google.com/mapfiles/ms/icons/red-dot.png' ;
      var purple_icon =  'https://maps.google.com/mapfiles/ms/icons/purple-dot.png' ;

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

    var map = new google.maps.Map(document.getElementById('locationReg'), {
      zoom: 17.5,
      center: new google.maps.LatLng(56.24168095734993, 23.634612266633244),
      mapTypeId: 'satellite'
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i]["latitude"], locations[i]["longitude"]),
        // melyna laisva
        icon :   locations[i]["location_status"] == '1' ?  red_icon  : purple_icon,

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

    </script>

</html>