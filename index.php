<html>
<head>
<title>bd chack</title>
</head>
<body>
			<form action="index.php" method="post">
				<div class="row">
					<div class="col-sm-4 form-left">
						<input type="text" name="name" placeholder="Name" required="" />
					</div>
					<div class="col-sm-4 form-left">
						<input type="email" name="email" placeholder="Email" required="" />
					</div>
					<div class="col-sm-4 form-left">
						<input type="phone" name="phone" placeholder="Phone" required="" />
					</div>
				</div>
				<textarea name="message" placeholder="Message" required=""></textarea>
				<input name="sub" type="submit" value="submit" />
			</form>
</body>
</html>	

<?php
	if(isset($_POST["sub"]))
{
	$con=mysql_connect("localhost","root","");
	if(!$con)
		{
			$msg="Server is not connect";
		}
		else
		{
			$db=mysql_select_db("user");
		if(!$db)
				{
					$msg="Data is not Found";
				}
				else
				{
					$n=$_POST["name"];
					$e=$_POST["email"];
					$p=$_POST["phone"];
					$m=$_POST["message"];
					$q="insert into `data` (`Name`,`E-mail`,`Phone`,`Massege`) values('$n','$e','$p','$m')";
					$sq=mysql_query($q);
					if(mysql_affected_rows())
						{
							$msg="Data add Sucess";
						}
						else
						{
							$msg="Data can't added";
						}
				}
		}	
		echo $msg;
}

?>