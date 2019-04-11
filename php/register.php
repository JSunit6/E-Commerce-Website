<?php
$emailid=htmlentities($_POST['emailid']);
$address=htmlentities($_POST['address']);
$conno=htmlentities($_POST['conno']);
$passwd=htmlentities($_POST['passwd']);
$conpasswd=htmlentities($_POST['conpasswd']);
$conn=mysql_connect('localhost','root');
if(!$conn){
	die('Cannot connect'.mysql_error());
}
else
{
mysql_select_db("mca_project_1317",$conn);
$str="insert into reg_dtls values ('$emailid','$address',$conno,'$passwd')";
if($passwd===$conpasswd )
{
	mysql_query($str);
	echo '<script>
		alert("Successfull!")
	   </script>';
       
    header("Location: FootballWeb.php");
    die();
	  

	  
}
else{
	echo '<script>
		alert("Passwords dont match!")
	</script>';
}
}

?>