<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		if(isset($_POST['login'])&&isset($_POST['password'])){
			include 'db.php';
			for($i=0;$i<sizeof($users);$i++){
				if($users[$i]['login']==$_POST['login'] && $users[$i]['password']==$_POST['password']){
					session_start();
					$_SESSION['USER_DATA'] = $users[$i];
				}
			}
		}
	}
	header("Location:index.php");
?>