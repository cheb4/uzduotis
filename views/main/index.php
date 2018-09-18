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
    
    <div id="main-container">
        <div id="header">
            <ul class="nav">
                <li><a href="/order-form">Order form</a></li>
                <li><a href="/product-list">Products list</a></li>
            </ul>
        </div>
        <form id="order-form" action="/insert" method="POST">
            <div class="form-field">
                <label>Vardas</label>
                <input  type="text" name="name" >
            </div>
            <div class="form-field">
                <label>Pavarde</label>
                <input  type="text" name="surname" >
            </div>
            <div class="form-field">
                <label>Miestas</label>
                <input  type="text" name="town" >
            </div>
            <div class="form-field">
                <label>Kiekis</label>
                <input  type="text" name="orderSize" >
            </div>
            <div class="form-field">
                <label>Telefonas</label>
                <input  type="text" name="phoneNumber" >
            </div>
            <div class="form-field">
                <label>Komentaras</label>
                <textarea name="comment"></textarea>
            </div>
            <button type="submit">Pateikti</button>
        </form>
    </div>
</body>
</html>



<?php

if( isset($_POST["name"]) || isset($_POST["surname"]) ) {
    echo "labas".$_POST["name"]." ".$_POST["surname"];

}
  ?>