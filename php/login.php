<?php
session_start(1);
$username=$_POST['uname'];
$passwd=$_POST['passwd'];
$_SESSION["username"] = $username;

$conn=mysql_connect('localhost','root');

if(!$conn){
	die('Cannot connect'.mysql_error());
}
else
{
mysql_select_db("mca_project_1317",$conn);
$str="select * from reg_dtls";
$result=mysql_query($str);
$flag=0;
while($row=mysql_fetch_array($result))
{
	
	

	if(($username==$row[0]) && ($passwd==$row[3]))
	{
		
		$flag=1;
		header("Location:FootballWeb.php");
		break;		
	}
	else{
		
		$flag=0;
	}
}
if($flag==0)
{
	echo "invalid username and password";
}
}
?>