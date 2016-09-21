$usrnme = "$_POST['usrnme']"; 
$pw = "$_POST['pw']"; 
$pwc = "$_POST['pwc']"; 
$email[usr] = "$_POST['email']"; 
$email[you] = "bob@domain.com"; /* Change that email to yours */ 

if($pwc != $pw) { 
echo "Sorry, your passwords do not match. Please go back and fix it."; 
} 
else { 
echo "Thank you for signing up." 

$sendmail = "1" 
//This script will send mail to the user that signed up. Set to 1 to enable 
if($sendmail == "1") { 
$message[usr] = " 
Thank you for signing up, $usrname"; 
$subject[usr] = "Thank you for signing up, $usrnme. Your password is $pw."; 
mail($email[usr],$subject[usr],$message[usr]); 
} 
else{} 

// This sends a message alerting you that someone signed up. 
$subject[you] = "Someone signed up!"; 
$message[you] = " 
Someone signed up at your site. Here is his details: 
Username: $usrnme 
Password: $pw 
Emaill Address: $email"; 
mail($email[you],$subject[you],$message); 
} 