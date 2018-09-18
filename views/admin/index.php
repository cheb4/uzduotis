<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Order Form</title>
    <link rel="stylesheet"  href="./reset.css">
    <link rel="stylesheet"  href="./main.css">
    <style>
html, body {
    margin: 0;
    color: #222222;
    font-family: arial, helvetica, "sans-serif";
}

#main-container {
    padding: 0 20px;
}

#header {
  padding: 20px 0;
}

#order-form {

}

#order-form button {
    width: 400px;
    background-color: #6b66f7;
    color: #FFFFFF;
    line-height: 40px;
    border: none;
    font-size: 16px;
}

#products-list {
}

#products-list td,
#products-list th {
    padding: 10px;
    border: 1px solid #cccccc;
    text-align: left;
}

#products-list th {
    white-space: nowrap;
    background-color: #333333;
    color: #ffffff;
}

#products-list th a {
    color: #FFFFFF;
    text-decoration: none;
}

.form-field {
    padding: 0 0 10px 0;
}

.form-field label {
    display: block;
}

.form-field input,
.form-field textarea {
    width: 400px;
}

.nav {
    list-style: none;
    margin: 0;
    padding: 0;
}

.nav li {
    display: inline-block;
    padding-right: 10px;
}

.nav li a {
    text-decoration: none;
    color: #6b66f7;
}

.nav li a:hover {
    color: #4879af;
}
      </style>
</head>
<body>
    <div id="main-container">
        <div id="header">
            <ul class="nav">
                <li><a href="/order-form">Order form</a></li>
                <li><a href="/product-list">Products list</a></li>
            </ul>
        </div>


<table class="tg">
  <tr>
    <th class="tg-0lax">id <a href="https://desolate-reaches-61237.herokuapp.com/admin/id_asc/index.php?page=1">↑</a> <a href="https://desolate-reaches-61237.herokuapp.com/admin/id_desc/index.php?page=1">↓</a> </th>
    <th class="tg-0lax">vardas <a href="https://desolate-reaches-61237.herokuapp.com/admin/name_asc/index.php?page=1">↑</a> <a href="https://desolate-reaches-61237.herokuapp.com/admin/name_desc/index.php?page=1">↓</a>  </th>
    <th class="tg-0lax">pavarde <a href="https://desolate-reaches-61237.herokuapp.com/admin/surname_asc/index.php?page=1">↑</a> <a href="https://desolate-reaches-61237.herokuapp.com/admin/surname_desc/index.php?page=1">↓</a>  </th>
    <th class="tg-0lax">miestas <a href="https://desolate-reaches-61237.herokuapp.com/admin/city_asc/index.php?page=1">↑</a> <a href="https://desolate-reaches-61237.herokuapp.com/admin/city_desc/index.php?page=1">↓</a>  </th>
    <th class="tg-0lax">užsakymo dydis <a href="https://desolate-reaches-61237.herokuapp.com/admin/orderNum_asc/index.php?page=1">↑</a> <a href="https://desolate-reaches-61237.herokuapp.com/admin/orderNum_desc/index.php?page=1">↓</a>  </th>
    <th class="tg-0lax">telefono numeris</th>
    <th class="tg-baqh">komentaras</th>
  </tr>
  <?php foreach ($itemList as $item){

echo "<tr>";
    echo "<td class='tg-0lax'>".'<a href="https://desolate-reaches-61237.herokuapp.com/admin-' .$item['id'].'">'.$item['id'] ." </td>";
    echo "<td class='tg-0lax'>". $item['name']." </td>";
    echo "<td class='tg-0lax'>". $item['surname']." </td>";
    echo "<td class='tg-0lax'>". $item['city']." </td>";
    echo "<td class='tg-0lax'>". $item['orderNum']." </td>";
    echo "<td class='tg-0lax'>". $item['phone']." </td>";
    echo "<td class='tg-0lax'>". $item['comment']." </td>";
  echo "</tr>";
}
?>
</table>

<?

for ($page=1;$page<=$pageNum;$page++) {
    echo '<a href="index.php?page=' . $page . '">' . $page . '</a> ';
}
?>


</div>
</body>
</html>
