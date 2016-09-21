<?php
$fname = $_POST['fname']; 
$lname = $_POST['lname']; 
$email[usr] = $_POST['email']; 
$email[me] = 'rolina79@qq.com';

echo 'Awesomesauce. Thanks for signing up, $fname $lname. Stay tuned!'; 

$sendmail = '0';
//This script will send mail to the user that signed up. Set to 1 to enable 
if($sendmail == '1') { 
	$message[usr] = 'Thank you for signing up, $fname $lname'; 
	$subject[usr] = 'Welcome to Learn Citrus!';
	$message[usr] = 'Hi $fname $lname, 
	Thanks for your interest! Stay tuned for our next newsletter.

	When life gives you lemons, squeeze the lemons in life\'s eyes and demand oranges.'; 
	mail($email[usr],$subject[usr],$message[usr]); 
} 
else{} 

// This sends a message alerting you that someone signed up. 
$subject[me] = 'Another Citrus fruit!'; 
$message[me] = 'New signup for mailing list. Info below:
First Name: $fname
Last Name: $lname 
Email Address: $email[usr]'; 
mail($email[me],$subject[me],$message[me]); 
?>