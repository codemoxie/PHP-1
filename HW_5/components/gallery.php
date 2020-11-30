<h1>Галлерея</h1>

<?php
include "config.php";

$sql = "select * from images";
$result = mysqli_query($connect, $sql);


echo '<div  style="display:flex; flex-wrap: wrap; justify-content:space-around;">';
while($data = mysqli_fetch_assoc($result)) {
    ?>
<a href="<?= $data["path"].$data["name"]?>" target="_blank">
    <img style="display:block; margin:5; width:250" src="<?= $data["path"].$data["name"]?>">
    <span>Открыто <?= $data["count"]?> раз</span>
</a>
<?php
} echo "</div>";
?>
