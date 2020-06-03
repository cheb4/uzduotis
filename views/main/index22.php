<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Order Form</title>
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./main.css">
</head>

<body>

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

</html>