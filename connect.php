<?php
	/*$Connect = mysqli_connect("localhost","root","","qlbh") or die("Lỗi".mysqli_error($Connect));
	
	mysqli_query($Connect,'SET NAMES "utf8"');
	//mysqli_close($Connect);*/
	$Connect = pg_connect("postgres://rknoukaqbgpncz:495c83ab079d60767c7f6fd6c8f12e3e156ab2babf7fd691a4244a3d4bbfb480@ec2-3-93-206-109.compute-1.amazonaws.com:5432/da834ac2fu9rio");
    //$Connect = pg_connect("host=localhost port=5432 dbname=postgres");
	//$Connect = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=123456");
	
    if (!$Connect) {
        die("Connection failed");
    }
?>