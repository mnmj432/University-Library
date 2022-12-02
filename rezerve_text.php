<?php
if (!isset($_SESSION['user'])) {
    $_SESSION['no-login'] = '<p style="text-align: center;color: red">برای دریافت کتاب در مرحله اول لاگین کنید</p>';
    header('Location:index.php');
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $link = mysqli_connect('localhost', 'root', '', 'university_library');
    mysqli_query($link, "SET NAMES UTF8");
    $query = "select `b_name` from `books` where `b_id`=$id";
    $result = mysqli_query($link, $query);
    while ($row = mysqli_fetch_array($result)) {
        $name = $row['b_name'];
    }
}
if (isset($_POST['submit']))
{
    $book = $_POST['book'];
    $fname = $_POST['r_name'];
    $family = $_POST['r_family'];
    $phone = $_POST['r_phone'];
    $link = mysqli_connect('localhost', 'root', '', 'university_library');
    mysqli_query($link, "SET NAMES UTF8");
    $query = "INSERT INTO `reserve` (`r_id`, `r_name`, `r_family`, `r_phone`, `book`) VALUES
    (null,'{$fname}','{$family}','{$phone}','{$book}')";
    $result = mysqli_query($link, $query);
}
?>
	<div class="form" id="rezerve">              
		<h2><?= 'درخواست دریافت کتاب'. ' ' . $name ?></h2>
		<form method="post" action="" >
            <input type="hidden" name="book" value="<?= $name ?>">
			<dl>
				<dd>
					<label>نام :</label>
					<input type="text" name="r_name" size="25" maxlength="25"  required />
					<span class="star">*</span>
				</dd>
				<dd>
					<label>نام خانوادگی :</label>
					<input type="text" name="r_family" size="25" maxlength="25" required />
					<span class="star">*</span>
				</dd>
				<dd>
					<label>شماره همراه :</label>
					<input type="text" name="r_phone" size="25" maxlength="25" required  />
					<span class="star">*</span>
				</dd>
				<dd class="button">
					<input type="submit" name="submit" value="ثبت اطلاعات" />
					<input type="reset" value="تصحيح" />
				</dd>			
			</dl>
		</form>
	</div>