<!doctype html>
<html>
<!-- nera php -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Order Form</title>
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./main.css">
</head>

<body>
    <!-- <div id="start">


        <div class="split left">
            <div class="centered">


                <h1 class="mainDesc">Užsakyti vietą</h1>


            </div>

        </div>
        <div class="split mid">
            <div class="centered">

            </div>
        </div>

        <div class="split right">
            <div class="centered">

                <h1 class="mainDesc">Užsakytų vietų sąrašas</h1>

            </div>
        </div>
    </div> -->



    <div id="main-container-order">
        <div class="forma">
            <div id="header">
                <ul class="nav">
                    <!-- navigacija -->
                    <li><a href="/order-form">Užsakymo forma</a></li>
                    <li><a href="/admin/index.php?page=1">Užsakymų sąrašas</a></li>
                </ul>
                <!-- navigacija -->
            </div>
            <form id="order-form" action="/insert" method="POST">
                <div class="form-field">
                    <label>Vardas</label>
                    <input type="text" name="name">
                </div>
                <div class="form-field">
                    <label>Pavarde</label>
                    <input type="text" name="surname">
                </div>
                <div class="form-field">
                    <label>Miestas</label>
                    <input type="text" name="town">
                </div>
                <div class="form-field">
                    <label>Vieta</label>
                    <select name="orderSize">
                        <option value="1">Nr 1</option>
                        <option value="2">Nr 2</option>
                        <option value="3">Nr 3</option>
                        <option value="4">Nr 4</option>
                        <option value="5">Nr 5</option>
                        <option value="6">Nr 6</option>
                    </select>
                </div>
                <div class="form-field">
                    <label>Telefonas</label>
                    <input type="text" name="phoneNumber">
                </div>
                <div class="form-field">
                    <label>Komentaras</label>
                    <textarea name="comment"></textarea>
                </div>
                <button type="submit">Pateikti</button>
            </form>
        </div>
        <div class="map">
        <div class="mapouter"><div class="gmap_canvas"><iframe width="500" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Joni%C5%A1kis,%20%C5%BEemes%20ukio%20mokykla&t=k&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-a.com"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:500px;}</style><a href="https://www.embedgooglemap.net">custom google map for website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:500px;}</style></div></div>
    </div>
    </div>

</body>


</html>