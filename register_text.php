<?php
if (isset($_POST['register']))
{
    $link = mysqli_connect('localhost', 'root', '', 'university_library');
    mysqli_query($link, "SET NAMES UTF8");
    $user = $_POST['u_username'];
    $email = $_POST['u_email'];
    $pass = $_POST['u_password'];
    $repass = $_POST['u_password_repeat'];
    if ($pass == $repass)
    {
        $query = "INSERT INTO `users` (`u_id`, `u_username`, `u_email`, `u_password`, `u_usertype`, `u_activation`)
        value(null,'{$user}','{$email}','{$pass}','register','1')";
        mysqli_query($link, $query);
        $_SESSION['register'] = '<p style="color: green;font-weight: bold;text-align: center">عضویت شما با موفقیت انجام شد</p>';
        header('Location:register.php');
    }
    else
    {
        $_SESSION['repass'] = '<p style="color: red;font-weight: bold;text-align: center">کلمه عبور مطابقت ندارد</p>';
        header('Location:register.php');
    }
}
?>

<div class="form" id="register">

		<h2>ثبت نام کاربران</h2>
		<form method="post" action="">
			<dl>
				<dd>
					<label>کد دانشجویی :</label>
					<input type="text" name="u_username" size="25" maxlength="25" required pattern=".{3,25}" title="حداقل شامل 3 کاراکتر" autofocus/>
					<span class="star">*</span>
				</dd>
				<dd>
					<label>ایمیل :</label>
					<input type="email" name="u_email" size="25" maxlength="25"  required  />
					<span class="star">*</span>
				</dd>
				<dd>
					<label>کلمه عبور :</label>
					<input type="password" name="u_password" size="25" maxlength="25" required pattern=".{3,25}" title="حداقل شامل 3 کاراکتر"/>
					<span class="star">*</span>
				</dd>
				<dd>
					<label>تکرار کلمه عبور :</label>
					<input type="password" name="u_password_repeat" size="25" maxlength="25" required pattern=".{3,25}" title="حداقل شامل 3 کاراکتر"  />
					<span class="star">*</span>
				</dd>		
				<dd class="button">
					<input type="submit" name="register" value="ثبت اطلاعات" />
					<input type="reset" value="تصحيح" />
				</dd>			
			</dl>				
		</form>
	</div>
