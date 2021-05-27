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
    <div class="admin-container">
    <div class="table-container">

      <div id="header">
        <ul class="nav">
          <li><a href="/order-form">Užsakymo forma</a></li>
          <!-- <li><a href="/product-list">Užsakymų sąrašas</a></li> -->
        </ul>
      </div>


      <table class="tg">
        <tr>
          <th class="tg-0lax">id <a
              href="https://desolate-reaches-61237.herokuapp.com/admin/id_asc/index.php?page=1">↑</a> <a
              href="https://desolate-reaches-61237.herokuapp.com/admin/id_desc/index.php?page=1">↓</a> </th>
          <th class="tg-0lax">vardas <a
              href="https://desolate-reaches-61237.herokuapp.com/admin/name_asc/index.php?page=1">↑</a> <a
              href="https://desolate-reaches-61237.herokuapp.com/admin/name_desc/index.php?page=1">↓</a> </th>
          <!-- <th class="tg-0lax">pavarde <a href="https://desolate-reaches-61237.herokuapp.com/admin/surname_asc/index.php?page=1">↑</a> <a href="https://desolate-reaches-61237.herokuapp.com/admin/surname_desc/index.php?page=1">↓</a> </th> -->
          <!-- <th class="tg-0lax">miestas <a href="https://desolate-reaches-61237.herokuapp.com/admin/city_asc/index.php?page=1">↑</a> <a href="https://desolate-reaches-61237.herokuapp.com/admin/city_desc/index.php?page=1">↓</a> </th> -->
          <th class="tg-0lax">užsakyta vieta <a
              href="https://desolate-reaches-61237.herokuapp.com/admin/orderNum_asc/index.php?page=1">↑</a> <a
              href="https://desolate-reaches-61237.herokuapp.com/admin/orderNum_desc/index.php?page=1">↓</a> </th>
          <!-- <th class="tg-0lax">telefono numeris</th> -->
          <!-- <th class="tg-baqh">komentaras</th> -->
        </tr>
        <?php foreach ($itemList as $item) {

        echo "<tr>";
        echo "<td class='tg-0lax'>" . '<a href="https://desolate-reaches-61237.herokuapp.com/admin-' . $item['id'] . '">' . $item['id'] . " </td>";
        echo "<td class='tg-0lax'>" . $item['name'] . " </td>";
        // echo "<td class='tg-0lax'>" . $item['surname'] . " </td>";
        // echo "<td class='tg-0lax'>" . $item['city'] . " </td>";
        echo "<td class='tg-0lax'>" . $item['orderNum'] . " </td>";
        // echo "<td class='tg-0lax'>" . $item['phone'] . " </td>";
        // echo "<td class='tg-0lax'>" . $item['comment'] . " </td>";
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
    <div class="map-table">
        <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Joni%C5%A1kis,%20%C5%BEemes%20ukio%20mokykla&t=k&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-a.com"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:500px;}</style><a href="https://www.embedgooglemap.net">custom google map for website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:500px;}</style></div></div>
</div>
</div>
  </div>
</body>

</html>