<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

include '_includes/config.php';
include_once("classes/user.class.php");
include_once("classes/registered.class.php");
include_once("classes/admin.class.php");


$registered = new Registered('Regular User','rykoontz');
$admin = new Admin('Administrator', 'dykoontz');


$registered->user_type = 1;
$registered->first_name = 'Ryan';
$registered->last_name = 'Koontz';
$registered->email_address = 'rykoontz@umail.iu.edu';

$admin->user_type = 2;
$admin->first_name = 'Dyan';
$admin->last_name = 'Koontz';
$admin->email_address = 'dykoontz@umail.iu.edu';

echo "User Level: ".$registered->user_level." <br/>";
echo "Registered User ID: ".$registered->user_id." <br/>";
echo "Registered User Type: ".$registered->user_type." <br/>";
echo "Registered First Name: ".$registered->first_name." <br/>";
echo "Registered Last Name: ".$registered->last_name." <br/>";
echo "Registered Email Address: ".$registered->email_address." <br/>";
echo "<br/>";
echo "User Level: ".$admin->user_level." <br/>";
echo "Admin User ID: ".$admin->user_id." <br/>";
echo "Admin User Type: ".$admin->user_type." <br/>";
echo "Admin First Name: ".$admin->first_name." <br/>";
echo "Admin Last Name: ".$admin->last_name." <br/>";
echo "Admin Email Address: ".$admin->email_address." <br/>";

 ?>


<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php





?>
</body>
</html>
