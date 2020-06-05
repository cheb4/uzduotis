<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Order Form</title>
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./main.css">
</head>
<style>
    body {
        font-family: Arial;
        color: white;
    }

    .split {
        height: 100%;
        width: 50%;
        position: fixed;
        z-index: 1;
        top: 0;
        overflow-x: hidden;
        padding-top: 20px;
    }

    .left {
        left: 0;
        background-color: #111;
    }

    .right {
        right: 0;
        background-color: red;
    }

    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .centered img {
        width: 150px;
        border-radius: 50%;
    }
</style>

<body>
    <div id="start">


        <div class="split left">
            <div class="centered">
                <img src="img_avatar2.png" alt="Avatar woman">
                <h2>Jane Flex</h2>
                <p>Some text.</p>
            </div>
        </div>

        <div class="split right">
            <div class="centered">
                <img src="img_avatar.png" alt="Avatar man">
                <h2>John Doe</h2>
                <p>Some text here too.</p>
            </div>
        </div>
    </div>




    <div id="main-container">
        <div id="header">
            <ul class="nav">
                <!-- navigacija -->
                <li><a href="/order-form">Order form</a></li>
                <li><a href="/admin/index.php?page=1">Products list</a></li>
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
                <label>Kiekis</label>
                <input type="text" name="orderSize">
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
    <h1>test</h1>
    <h2>test2</h2>
</body>
<script>
    document.querySelector("#start > div.split.left").addEventListener("click", function(e) {

        document.getElementById("start").remove()
    });
    document.querySelector("#start > div.split.right").addEventListener("click", function(e) {
        console.log("ne opa");
        window.open("https://www.youraddress.com", "_self");
        // document.getElementById("start").remove()
    });
</script>

</html>