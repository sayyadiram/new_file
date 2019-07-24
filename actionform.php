<?php  
if(isset($_POST['submit'])){
	$full_name = $_POST['full_name'];
	$mailFrom  = $_POST['mymail'];
	$subject   = $_POST['subject'];
	$message   = $_POST['message'];

	$mailTo	 = "sydirm94@gmail.com";
	$headers = "Form :".$mailFrom;

	$txt="you have recived an emil from ".$full_name.".\n\n".$message;

	mail($mailTo , $subject, $txt, $headers);

	header("Location :index.php?mailsend");
	echo "This email is sent using PHP Mail";
}



?>



