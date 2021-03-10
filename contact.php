<?php
if (isset($_POST['submit'])) {
    
    
    
	$to = 'ab.rehman3677@gmail.com';
	$contact=$_POST['contact'];
	$message = $_POST['message'];
	$subject=$_POST['subject'];
	$from = $_POST['email'];
	
	$body ="";
	$body .="From :".$from."\r\n";
	$body .="Message :".$message."\r\n";

    if(empty($contact) || empty($subject) || empty($message))
    {
	echo "please fill in all fields";	
    }else
    {
    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
    {
        mail($to,$subject,$body);
	    echo "<script type='text/javascript'> alert('Thanks we will be get in touch soon');
 	    window.history.log(-1) </script>";
        
    }
    else
    {
         echo "<script type='text/javascript'> alert('Enter valid email address');
 	    window.history.log(-1) </script>";
        
    }

}

}

?>