<!DOCTYPE html>
<html lang="en">

<head>
<?php

include ROOT . '/db/Db.php';

// $db = getConnection();


// function get_all_locations(){
//     $con=mysqli_connect ("localhost", 'root', '','demo');
//     if (!$con) {
//         die('Not connected : ' . mysqli_connect_error());
//     }
//     // update location with location_status if admin location_status.
//     $sqldata = mysqli_query($con,"
// select id ,lat,lng,description,location_status as isconfirmed
// from locations
//   ");

//     $rows = array();
//     while($r = mysqli_fetch_assoc($sqldata)) {
//         $rows[] = $r;

//     }
//   $indexed = array_map('array_values', $rows);
//   //  $array = array_filter($indexed);

//     echo json_encode($indexed);
//     if (!$rows) {
//         return null;
//     }
// }

?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Order Form</title>
        <link rel="stylesheet" href="./reset.css">
        <link rel="stylesheet" href="./main.css">

    <body>
        <div class="pagrindinis">
            <div class="register">
                <h1 class="mainDesc">Užsakyti vietą</h1>


            </div>

            <div class="map">
                <!-- <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="500" height="500" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=Joni%C5%A1kis,%20%C5%BEemes%20ukio%20mokykla&t=k&z=17&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                            href="https://123movies-a.com"></a><br>
                        <style>
                            .mapouter {
                                /* position: relative; */
                                /* text-align: right; */
                                height: 900px;
                                width: 600px;
                            }
                        </style><a href="https://www.embedgooglemap.net">custom google map for website</a>
                        <style>
                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 900px;
                                width: 600px;
                            }
                        </style>
                    </div>
                </div> -->
            </div>

            <div class="list">
                <h1 class="mainDesc">Užsakytų vietų sąrašas</h1>
            </div>
        </div>
    </body>
    <script>
// pradzia
function initMap() {
        const myLatLng = { lat: -25.363, lng: 131.044 };
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 4,
          center: myLatLng,
        });
        new google.maps.Marker({
          position: myLatLng,
          map,
          title: "Hello World!",
        });
      }


// pabaiga

        document.querySelector(".list").addEventListener("click", function (e) {
            window.open("https://desolate-reaches-61237.herokuapp.com/admin/index.php?page=1", "_self");
        });
document.querySelector(".register").addEventListener("click", function (e) {
            window.open("https://desolate-reaches-61237.herokuapp.com/register", "_self");
        });
    </script>
    <scrip
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPSIXnA8K7gndiwijS1Iy8q9c3L3HLfHo&callback=initMap&libraries=&v=weekly"
      async
    ></scrip>

</html>