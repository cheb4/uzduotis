
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Order Form</title>
    <link rel="stylesheet"  href="./reset.css">
    <link rel="stylesheet"  href="./main.css">
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