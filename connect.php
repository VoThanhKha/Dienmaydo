<?php
	/*$Connect = mysqli_connect("localhost","root","","qlbh") or die("Lỗi".mysqli_error($Connect));
	
	mysqli_query($Connect,'SET NAMES "utf8"');
	//mysqli_close($Connect);*/
	$Connect = pg_connect("postgres://kaegnhcwgdgvmv:4f89745c761cb47a13797ba368aea3c7fad5e152062edb0cbb2767a88ade947b@ec2-35-170-146-54.compute-1.amazonaws.com:5432/dap017ltck1sc4");
    //$Connect = pg_connect("host=localhost port=5432 dbname=postgres");
	//$Connect = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=123456");
	
    if (!$Connect) {
        die("Connection failed");
    }
?>