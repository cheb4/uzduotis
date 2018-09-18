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


<table class="tg">
  <tr>
    <th >id <a href="https://desolate-reaches-61237.herokuapp.com/admin/id_asc/index.php?page=1">↑</a> <a href="https://desolate-reaches-61237.herokuapp.com/admin/id_desc/index.php?page=1">↓</a> </th>
    <th >vardas <a href="https://desolate-reaches-61237.herokuapp.com/admin/name_asc/index.php?page=1">↑</a> <a href="https://desolate-reaches-61237.herokuapp.com/admin/name_desc/index.php?page=1">↓</a>  </th>
    <th >pavarde <a href="https://desolate-reaches-61237.herokuapp.com/admin/surname_asc/index.php?page=1">↑</a> <a href="https://desolate-reaches-61237.herokuapp.com/admin/surname_desc/index.php?page=1">↓</a>  </th>
    <th >miestas <a href="https://desolate-reaches-61237.herokuapp.com/admin/city_asc/index.php?page=1">↑</a> <a href="https://desolate-reaches-61237.herokuapp.com/admin/city_desc/index.php?page=1">↓</a>  </th>
    <th >užsakymo dydis <a href="https://desolate-reaches-61237.herokuapp.com/admin/orderNum_asc/index.php?page=1">↑</a> <a href="https://desolate-reaches-61237.herokuapp.com/admin/orderNum_desc/index.php?page=1">↓</a>  </th>
    <th >telefono numeris</th>
    <th >komentaras</th>
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
