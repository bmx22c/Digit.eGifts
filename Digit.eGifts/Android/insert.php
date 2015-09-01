<?php
	$host='sql112.byethost7.com';
	$uname='b7_16066782';
	$pwd='#SECRET';
	$db="b7_16066782_id_user_bdd";
	$DB_TABLE = "Trackmania2_Stadium_04_04_2015";

	$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
	mysql_select_db($db,$con) or die("db selection failed");
	
	//========== TEST IF USER ALREADY EXIST ==========//
	$query = mysql_query("SELECT * FROM $DB_TABLE WHERE Username='$name'");
	 
	$name=$_POST['name'];

	$flag['code']=0;
	
	if(mysql_num_rows($query) != 0){
		
		$flag['code']=0;

		}
	}
		
	if($flag == 0){
		if(mysql_query("insert into $DB_TABLE(Username) values('$name') ",$con)){
			$flag['code']=1;
		}
	}else{
		$flag['code']=0;
	}

	print(json_encode($flag));
	mysql_close($con);
?>