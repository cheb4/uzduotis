<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Order Form</title>
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
            <li><a href=/admin/index.php?page=1>Užsakymų sąrašas</a> </li> </ul> </div> </div> </body> </html> <table>
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


              $sql = "DELETE FROM `customers` WHERE id = " . $data . ";";

              $result = $base->query($sql);
            }


            if (isset($_POST['button1'])) {
              echo "<br>  istrintas id " . $oneItem['id'];
              removeDataFromDb($oneItem['id']);
              // Main::removeDataFromDb($oneItem['id']);
              // echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
              header('location: https://desolate-reaches-61237.herokuapp.com/admin/index.php?page=1');
            }


            ?>
        </div>
    <div class="details-map">
        <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Joni%C5%A1kis,%20%C5%BEemes%20ukio%20mokykla&t=k&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-a.com"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:500px;}</style><a href="https://www.embedgooglemap.net">custom google map for website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:500px;}</style></div></div>
    </div>

    </div>
</body>


</html>