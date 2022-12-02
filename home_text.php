<?php
$link = mysqli_connect('localhost', 'root', '', 'university_library');
mysqli_query($link, "SET NAMES UTF8");
$query = "select * from `books`";
$result = mysqli_query($link, $query);
?>
<div class="form">
    <?php
    if (isset($_SESSION['no-login']))
    {
        echo $_SESSION['no-login'];
        unset($_SESSION['no-login']);
    }
    ?>
    <?php
    while ($row = mysqli_fetch_array($result))
    {


        ?>
        <h2><?= $row['b_name'] ?></h2>

        <img  src="admin/<?= $row['b_image']?>" align="middle" width="120" style="float:left; margin:10px"/>
        <p><?= $row['b_description'] ?></p>
        <ul type="circle">
            <li>شابک :<?= $row['b_shabak'] ?></li>
            <br>
            <li>سال انتشار :<?= $row['b_publish'] ?></li>
            <br>
            <li><a href="rezerve.php?id=<?= $row['b_id']  ?>"><button style="background-color: green;color: white;font-family: Tahoma">دریافت کتاب</button></a></li>

        </ul><br>
    <?php } ?>
</div>
