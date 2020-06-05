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
        <li><a href="/order-form">Order form</a></li>
        <li><a href=/admin/index.php?page=1>Products list</a> </li> </ul> </div> </div> </body> </html> <table>
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
              <th>uzsakymo dydis</th>
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
                  <input type="submit" name="button1" value="My Button">
                </form>
              </td>
            </tr>

            </table>
            <?php

            // include ROOT . '/models/Main.php';

            // if (isset($_POST['button1'])) {
            //   echo "sda opa" . $oneItem['id'];
            //   // Main::removeDataFromDb($oneItem['id']);
            // }
            // 
            ?>
    </div>
</body>

</html>