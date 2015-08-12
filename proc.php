<?php

$conn = mysqli_connect('localhost', 'root', 'abacusdb', 'cld_pan');



$_SESSION['Level2_Form_ID'] = '1';

$sql = 'CALL compare("'.$_SESSION['Level2_Form_ID'].'");';

if($result = mysqli_query($conn, $sql))
{
	echo 'ok';
}
else
{	
	echo mysqli_error($conn);
}

?>