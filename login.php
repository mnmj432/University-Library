<?php
if (isset($_POST['login']))
{
    $user = $_POST['u_username'];
    $pass = $_POST['u_password'];
    $link = mysqli_connect('localhost', 'root', '', 'university_library');
    mysqli_query($link, "SET NAMES UTF8");
    $query = "select * from users where u_username='{$user}' and u_password='{$pass}'";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    if ($user == $row['u_username'] && $pass == $row['u_password'] && $row['u_usertype'] == 'register'){
        $_SESSION['user'] = "<p style='text-align: center;color: green'>  $user خوش آمدید</p>";
        header('Location:index.php');
    }
    else
    {
        $_SESSION['no-pass']= '<p style="color: red;text-align: center;font-weight: bold">کد دانشجویی یا کلمه عبور اشتباه است</p>';
        header('Location:index.php');
    }
}
?>
	<div class="form" id="login">
        <?php
        if (isset($_SESSION['user']))
        {
            echo $_SESSION['user'];

        }
        ?>
		<h2>ورود دانشجویان</h2>
		<form method="post" action="">
			<dl>
				<dd>
					<label style="min-width: 70px;">شناسه :</label>
					<input type="text" name="u_username" size="18" maxlength="25" required />
				</dd>
				<dd>
					<label style="min-width: 70px;">کلمه عبور :</label>
					<input type="password" name="u_password" size="18" maxlength="25"  required />
				</dd>
				<dd class="button">
					<input name="login" type="submit" value="ورود" />
				</dd>
				<dd style="margin:0 10px 10px;">
                    <?php
                    if (isset($_SESSION['user']))
                    {
                        echo '<a href="admin/logout.php">خروج</a>';
                    }
                    else{
                        echo '<a href="register.php">ایجاد حساب کاربری</a>';
                    }
                    ?>

				</dd>
			</dl>
		</form>
	</div>	

