<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>کتابخانه دانشگاه آزاد کرمانشاه</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="style/style_persian.css" rel="stylesheet">
</head>

<body>
<div id="container">
	<?php include_once("menu.php"); ?>
	<div id="main">	
		<?php include_once("slider.php"); ?>
		<div id="left">
            <?php
            if (isset($_SESSION['no-pass']))
            {
                echo $_SESSION['no-pass'];
                unset($_SESSION['no-pass']);
            }
            if (isset($_SESSION['repass'])) {
                echo $_SESSION['repass'];
                unset($_SESSION['repass']);
            }
            if (isset($_SESSION['register'])) {
                echo $_SESSION['register'];
                unset($_SESSION['register']);
            }
            ?>
			<?php include_once("login.php"); ?>
			<?php include_once("about_text.php"); ?>

        </div>
		<div id="right">
			 <?php
             include($page_content);?>
		</div>
		<div style="clear:both;"></div>
	</div>
</div>	
<?php include_once("footer.php"); ?>
	
</body>
</html>