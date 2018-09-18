
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-baqh{text-align:center;vertical-align:top}
.tg .tg-0lax{text-align:left;vertical-align:top}
</style>
<table class="tg">
  <tr>
    <!-- pries keliant i serveri reikia pakeisti is localhost i serverio absoliucias nuoruodas -->
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
// foreach ($itemList as $result) {
//     echo "opa "." ".$result['id']." " .$result['name']."<br>";
// }
?>
<?
// foreach ($pageNum as $value) {
//     echo "$value";
// }
for ($page=1;$page<=$pageNum;$page++) {
    echo '<a href="index.php?page=' . $page . '">' . $page . '</a> ';
}