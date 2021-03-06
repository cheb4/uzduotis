<!doctype html>
<html>
<!-- nera php -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Registracija</title>
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
                    <li><a href="/order-form">Grįžti</a></li>
                    <li><a href="/admin/index.php?page=1">Dalyvių sąrašas</a></li>
                </ul>
                <!-- navigacija -->
            </div>
            <form id="order-form" action="/insert" method="POST">
                <div class="form-field">
                    <label>Vardas</label>
                    <input type="text" name="name" pattern="[A-Za-zĄąĘęĖėĮįŠšŪūČč]+" placeholder="Vardas" >
                </div>
                <div class="form-field">
                    <label>Pavarde</label>
                    <input type="text" name="surname" pattern="[A-Za-zĄąĘęĖėĮįŠšŪūČč]+" placeholder="Pavardė">
                </div>
                <div class="form-field">
                    <label>Miestas</label>
                    <input type="text" name="town" pattern="[A-Za-zĄąĘęĖėĮįŠšŪūČč]+" placeholder="Miestas">
                </div>
                <div class="form-field">
                    <label>Vieta</label>
                    <select name="orderSize">
                        <?php foreach ($freeSpace as $space) {
                            echo  "<option value=".$space["id"].">Nr".$space["id"]."</option>";
                        }?>
                    </select>
                </div>
                <div class="form-field">
                    <label>Telefonas</label>
                    <input type="text" name="phoneNumber" pattern="^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$"  placeholder="Telefono Nr" required/>
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

    var map = new google.maps.Map(document.getElementById('locationReg'), {
      zoom: 17.5,
      center: new google.maps.LatLng(56.24168095734993, 23.634612266633244),
      mapTypeId: 'satellite'
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;
    var content;
    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i]["latitude"], locations[i]["longitude"]),
        // melyna laisva
        icon :   locations[i]["location_status"] == '1' ?  red_icon  : purple_icon,
        label:{text:locations[i]["id"],
                 color: "white",
                 fontWeight: "bold",
                 fontSize:"15px"},
        map: map
      });

      
      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
        if(locations[i]["location_status"] != '1'){
            content = "Laisva vieta Nr " + locations[i]["id"]
        }else{
            content = "uzimta vieta Nr " + locations[i]["id"]
        }
          infowindow.setContent(content);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }


// pabaiga

    </script>

</html>