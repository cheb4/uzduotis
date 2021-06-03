<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Order List</title>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPSIXnA8K7gndiwijS1Iy8q9c3L3HLfHo&callback=initMap&libraries=&v=weekly"
          type="text/javascript"></script>
  <link rel="stylesheet" href="https://desolate-reaches-61237.herokuapp.com/reset.css">
  <link rel="stylesheet" href="https://desolate-reaches-61237.herokuapp.com/main.css">

</head>

<body>
  <div id="main-container">
    <div class="admin-container">
      <div class="table-container">

        <div id="header">
          <ul class="nav">
            <li><a href="/order-form">Užsakymo forma</a></li>
            <!-- <li><a href="/product-list">Užsakymų sąrašas</a></li> -->
          </ul>
        </div>


        <table class="tg">
          <tr>
            <th class="tg-0lax">Vietos Nr <a
                href="https://desolate-reaches-61237.herokuapp.com/admin/id_asc/index.php?page=1">↑</a> <a
                href="https://desolate-reaches-61237.herokuapp.com/admin/id_desc/index.php?page=1">↓</a> </th>
            <th class="tg-0lax">vardas <a
                href="https://desolate-reaches-61237.herokuapp.com/admin/name_asc/index.php?page=1">↑</a> <a
                href="https://desolate-reaches-61237.herokuapp.com/admin/name_desc/index.php?page=1">↓</a> </th>
            <!-- <th class="tg-0lax">pavarde <a href="https://desolate-reaches-61237.herokuapp.com/admin/surname_asc/index.php?page=1">↑</a> <a href="https://desolate-reaches-61237.herokuapp.com/admin/surname_desc/index.php?page=1">↓</a> </th> -->
            <!-- <th class="tg-0lax">miestas <a href="https://desolate-reaches-61237.herokuapp.com/admin/city_asc/index.php?page=1">↑</a> <a href="https://desolate-reaches-61237.herokuapp.com/admin/city_desc/index.php?page=1">↓</a> </th> -->
            <!-- <th class="tg-0lax">užsakyta vieta <a
                href="https://desolate-reaches-61237.herokuapp.com/admin/orderNum_asc/index.php?page=1">↑</a> <a
                href="https://desolate-reaches-61237.herokuapp.com/admin/orderNum_desc/index.php?page=1">↓</a> </th> -->
        <th class="tg-0lax">miestas <a href="https://desolate-reaches-61237.herokuapp.com/admin/city_asc/index.php?page=1">↑</a> <a href="https://desolate-reaches-61237.herokuapp.com/admin/city_desc/index.php?page=1">↓</a> </th>
            <!-- <th class="tg-0lax">telefono numeris</th> -->
            <!-- <th class="tg-baqh">komentaras</th> -->
          </tr>
          <?php foreach ($itemList as $item) {

        echo "<tr>";
        echo "<td class='tg-0lax'>" . '<a href="https://desolate-reaches-61237.herokuapp.com/admin-' . $item['id'] . '">' . $item['id'] . " </td>";
        echo "<td class='tg-0lax'>" . $item['name'] . " </td>";
        // echo "<td class='tg-0lax'>" . $item['surname'] . " </td>";
        echo "<td class='tg-0lax'>" . $item['city'] . " </td>";
        // echo "<td class='tg-0lax'>" . $item['orderNum'] . " </td>";
        // echo "<td class='tg-0lax'>" . $item['phone'] . " </td>";
        // echo "<td class='tg-0lax'>" . $item['comment'] . " </td>";
        echo "</tr>";
      }
      ?>
        </table>

        <?

for ($page=1;$page<=$pageNum;$page++) {
    echo '<a href="index.php?page=' . $page . '">' . $page . '</a> ';
}
?>


      </div>
      <div class="map-table">
        <div id="locationReg" style="width: 700px; height: 700px;"></div>
 
      </div>
    </div>
  </div>
</body>
 <script>
// prdzia
      var locations = <?php echo $mapStuff; ?>;
      console.log(locations)

      var red_icon =  'https://maps.google.com/mapfiles/ms/icons/red-dot.png' ;
      var purple_icon =  'https://maps.google.com/mapfiles/ms/icons/purple-dot.png' ;


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