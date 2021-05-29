<!DOCTYPE html>
<html lang="en">

<head>

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
                <div class="mapouter">
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
                </div>
            </div>

            <div class="list">
                <h1 class="mainDesc">Užsakytų vietų sąrašas</h1>
            </div>
        </div>
    </body>
    <script>
        document.querySelector(".list").addEventListener("click", function (e) {
            window.open("https://desolate-reaches-61237.herokuapp.com/admin/index.php?page=1", "_self");
        });
document.querySelector(".register").addEventListener("click", function (e) {
            window.open("https://desolate-reaches-61237.herokuapp.com/register", "_self");
        });
    </script>

</html>