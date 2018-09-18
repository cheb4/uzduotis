
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Order Form</title>
    <link rel="stylesheet"  href="https://desolate-reaches-61237.herokuapp.com/reset.css">
    <link rel="stylesheet"  href="https://desolate-reaches-61237.herokuapp.com/main.css">
</head>
<body>
<!--change when uploading to server  -->
    <div id="main-container">
        <div id="header">
            <ul class="nav">
                <li><a href="/order-form">Order form</a></li>
                <li><a href=/admin/index.php?page=1>Products list</a></li>
            </ul>
        </div>


    </div>
</body>
</html>

<table>
  <tr>
    <th>a</th>
    <th>aaa</th>
  </tr>
  <tr>
    <td>aa</td>
    <td>bb</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
  </tr>
</table>


<?php



echo "id ".$oneItem['id']."<br>";
echo "vardas ".$oneItem['name']."<br>";
echo "pavarde ".$oneItem['surname']."<br>";
echo "Miestas ".$oneItem['city']."<br>";
echo "uzsakymo skaicius".$oneItem['orderNum']."<br>";
echo "telefono numeris".$oneItem['phone']."<br>";
echo "<br> komentaras".$oneItem['comment']."<br>";

?>
</div>
</body>
</html>