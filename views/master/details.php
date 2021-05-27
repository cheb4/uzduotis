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
  <div id="main-container">
    <div id="header">
      <ul class="nav">
        <li><a href="/order-form">Užsakymo forma</a></li>
        <li><a href=/master/index.php?page=1>Užsakymų sąrašas</a> </li> </ul> </div> </div> </body> </html> <table>
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


              $sql = "DELETE FROM `customers` WHERE id = " . $data . ";";

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
</body>

</html>