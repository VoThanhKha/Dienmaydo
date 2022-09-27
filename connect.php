<?php
	$Connect = mysqli_connect("localhost","root","","qlbh") or die("Lỗi".mysqli_error($Connect));
	mysqli_query($Connect,'SET NAMES "utf8"');
	//mysqli_close($Connect);
?>