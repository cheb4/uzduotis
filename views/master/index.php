<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Order List</title>
  <link rel="stylesheet" href="https://desolate-reaches-61237.herokuapp.com/reset.css">
  <link rel="stylesheet" href="https://desolate-reaches-61237.herokuapp.com/main.css">

</head>

<body>
  <div id="main-container">
    <div id="header">
      <ul class="nav">
        <li><a href="/order-form">Užsakymo forma</a></li>
        <li>Admin panele</li>
      </ul>
    </div>


    <table class="tg">
      <tr>
        <th class="tg-0lax">id <a href="https://desolate-reaches-61237.herokuapp.com/master/id_asc/index.php?page=1">↑</a> <a href="https://desolate-reaches-61237.herokuapp.com/master/id_desc/index.php?page=1">↓</a> </th>
        <th class="tg-0lax">vardas <a href="https://desolate-reaches-61237.herokuapp.com/master/name_asc/index.php?page=1">↑</a> <a href="https://desolate-reaches-61237.herokuapp.com/master/name_desc/index.php?page=1">↓</a> </th>
        <th class="tg-0lax">pavarde <a href="https://desolate-reaches-61237.herokuapp.com/master/surname_asc/index.php?page=1">↑</a> <a href="https://desolate-reaches-61237.herokuapp.com/master/surname_desc/index.php?page=1">↓</a> </th>
        <th class="tg-0lax">miestas <a href="https://desolate-reaches-61237.herokuapp.com/master/city_asc/index.php?page=1">↑</a> <a href="https://desolate-reaches-61237.herokuapp.com/master/city_desc/index.php?page=1">↓</a> </th>
        <th class="tg-0lax">užsakyta vieta <a href="https://desolate-reaches-61237.herokuapp.com/master/orderNum_asc/index.php?page=1">↑</a> <a href="https://desolate-reaches-61237.herokuapp.com/master/orderNum_desc/index.php?page=1">↓</a> </th>
        <th class="tg-0lax">telefono numeris</th>
        <th class="tg-0lax">komentaras</th>
        <th class="tg-0lax">patvirtinti</th>
      </tr>
      <?php foreach ($itemList as $item) {

        echo "<tr>";
        echo "<td class='tg-0lax'>" . '<a href="https://desolate-reaches-61237.herokuapp.com/master-' . $item['id'] . '">' . $item['id'] . " </td>";
        echo "<td class='tg-0lax'>" . $item['name'] . " </td>";
        echo "<td class='tg-0lax'>" . $item['surname'] . " </td>";
        echo "<td class='tg-0lax'>" . $item['city'] . " </td>";
        echo "<td class='tg-0lax'>" . $item['orderNum'] . " </td>";
        echo "<td class='tg-0lax'>" . $item['phone'] . " </td>";
        echo "<td class='tg-0lax'>" . $item['comment'] . " </td>";
        echo "<td class='tg-0lax'> <button type='button'>patvirtinti</button> </td>";
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