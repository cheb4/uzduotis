<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <!-- <title>Details</title> -->
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPSIXnA8K7gndiwijS1Iy8q9c3L3HLfHo&callback=initMap&libraries=&v=weekly"
          type="text/javascript"></script>
  <link rel="stylesheet" href="https://desolate-reaches-61237.herokuapp.com/reset.css">
  <link rel="stylesheet" href="https://desolate-reaches-61237.herokuapp.com/main.css">
</head>


<body>
  <!--change when uploading to server  -->
  <div class="details-container">
    <div class="details">
      <div id="main-container">
        <div id="header">
          <ul class="nav">
            <li><a href="/order-form">Užsakymo forma</a></li>
            <li><a href=/master/index.php?page=1>Gryžti atgal</a> </li> </ul> </div> </div> </body> </html> <table>
                <tr>
                  <th>id</th>
                  <td><?php echo $oneItem['id']; ?></td>
                </tr>
                <tr>
                  <th>vardas</th>
                  <td><?php echo $oneItem['name']; ?></td>
                </tr>
                <tr>
                  <th>pavarde</th>
                  <td><?php echo $oneItem['surname']; ?></td>
                </tr>
                <tr>
                  <th>Miestas</th>
                  <td><?php echo $oneItem['city']; ?></td>
                </tr>
                <tr>
                  <th>uzsakymo vieta</th>
                  <td><?php echo $oneItem['orderNum']; ?></td>
                </tr>
                <tr>
                  <th>telefono numeris</th>
                  <td><?php echo $oneItem['phone']; ?></td>
                </tr>
                <tr>
                  <th>komentaras</th>
                  <td><?php echo $oneItem['comment']; ?></td>
                </tr>
                </tr>
                <tr>
              <th>trinti</th>
              <td>
                <form method="POST" action=''>
                  <input type="submit" name="button1" value="Istrinti">

                </form>
              </td>
            </tr>

                </table>
                <?php


            function getConnection()
            {
              $paramsPath = ROOT . '/config/db_params.php';
              $params = include($paramsPath);


              $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
              $db = new PDO($dsn, $params['user'], $params['password']);

              return $db;
            }

            function removeDataFromDb($data)
            {

              $base = getConnection();


              // $sql = "DELETE FROM `customers` WHERE id = " . $data . ";";

              $sql = "update customers set name='nera', surname='nera', orderNum='nera',phone='nera',comment='nera', location_status='0' where id = 3;";

              $result = $base->query($sql);
            }


            if (isset($_POST['button1'])) {
              echo "<br>  istrintas id " . $oneItem['id'];
              removeDataFromDb($oneItem['id']);
              // Main::removeDataFromDb($oneItem['id']);
              // echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
              header('location: https://desolate-reaches-61237.herokuapp.com/master/index.php?page=1');
            }


            ?>
        </div>
    <div class="details-map">
    <div id="locationReg" style="width: 700px; height: 700px;"></div>

    </div>

    </div>
</body>
<script>
// prdzia
var locations = [
      ['pirmas', 56.241929104940375, 23.634707957688992],
      ['antras', 56.241718628143777, 23.634707957688992],
      ['trecias', 56.2415081513472, 23.634707957688992],
      ['ketvirtas',56.2412976745506, 23.634707957688992 ],
      ['penktas', 56.241087197754, 23.634707957688992],
      ['sestas',56.241929104940375, 23.635713017406772 ],
      ['septintas',56.241718628143777, 23.635713017406772 ],
      ['astuntas', 56.2415081513472, 23.635713017406772],
      ['devintas',56.2412976745506, 23.635713017406772 ],
      ['desimtas',56.241087197754, 23.635713017406772 ],
    ];

    var map = new google.maps.Map(document.getElementById('locationReg'), {
      zoom: 17.5,
      center: new google.maps.LatLng(56.24168095734993, 23.634612266633244),
      mapTypeId: 'satellite'
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;
// random 


var randPin = Math.floor(Math.random() * (locations.length - 0 + 1)) + 0;


 
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[randPin][1], locations[randPin][2]),
        map: map
       });

      google.maps.event.addListener(marker, 'click', (function(marker, randPin) {
        return function() {
          infowindow.setContent(locations[randPin][0]);
          infowindow.open(map, marker);
        }
      })(marker, randPin));
  

// pabaiga

    </script>



</html>