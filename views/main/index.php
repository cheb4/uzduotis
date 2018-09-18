<?php

echo "cia bus main.php index  puslapis";

echo "<hr>didelis puslapis<hr>";

// $_POST["name"]="";
// $_POST["surname"]="";
// $_POST["town"]="";
// $_POST["orderSize"]="";
// $_POST["phoneNumber"]="";
// $_POST["comment"]="";

?>
<!DOCTYPE html>
<html>
<head>
    <title>ssss</title>
</head>
<body>
    <!--change when uploading to server  -->
<form action = "/insert" method = "POST">
 Vardas
 <br><input  type="text" name="name" ><br>
 Pavarde
 <br><input  type="text" name="surname" ><br>
 Miestas
 <br><input  type="text" name="town" ><br>
 uzsakymo skaicius
 <br><input type="number" name="orderSize" ><br>
 telefonas
 <br><input  type="number" min="1" name="phoneNumber" ><br>
 Komentaras
 <br><input  type="text" name="comment" ><br>
 <input class="button" type="submit" value="Pateikti">
 </form> 

</body>
</html>

<?php

if( isset($_POST["name"]) || isset($_POST["surname"]) ) {
    echo "labas".$_POST["name"]." ".$_POST["surname"];

}
  ?>