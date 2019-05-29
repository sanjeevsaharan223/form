<?php

include 'connection.php';
$email = $_POST['email'];


echo $email;
$msg ="";
$query = $conn->prepare( "SELECT `email` FROM `signup` WHERE `email` = ?" );

$query->bindValue( 1, $email );
$query->execute();

if($query->rowCount() > 0 )
		{	
			echo "email already registered";
		}
else{	



}		



?>
