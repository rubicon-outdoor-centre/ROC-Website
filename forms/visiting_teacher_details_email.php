<?php

extract($HTTP_GET_VARS);
extract($HTTP_POST_VARS);

if ($action == "send")
{
include("visiting_teacher_details_config.php");
$to = $ademail;
$from = $_POST['from'];
$fullname = $_POST['fullname'];
$subject = $_POST['subject'];
$startdate = $_POST['startdate'];
$finishdate = $_POST['finishdate'];
$schoolname = $_POST['schoolname'];
$phone = $_POST['phone'];

$to = trim($to);
$from = trim($from);
$fullname = trim($fullname);
$subject = trim($subject);

if (empty($to))
{
$ermessage = "Error: Email address to can not be blank, Please enter your email address in the config file!";
include("visiting_teacher_details_error.html"); exit();
}
if (empty($from))
{
$ermessage = "Error: Email address can not be blank, Please enter your email address!";
include("visiting_teacher_details_error.html"); exit();
}
if (empty($schoolname))
{
$ermessage = "Error: school name is a required field";
include("visiting_teacher_details_error.html"); exit();
}
if (!ereg('^[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+'.
'@'.
'[-!#$%&\'*+\\/0-9=?A-Z^_`a-z{|}~]+\.'.
'[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+$', $from))
{
$ermessage = "Error: Invalid Email address, Please re-enter your email address!";
include ("visiting_teacher_details_error.html"); exit;
}
if (empty($fullname))
{
$ermessage = "Error: Please enter your name!";
include("visiting_teacher_details_error.html"); exit();
}

$footer = "www.rubicon.vic.edu.au";

$message ="
School Name: $schoolname
Start Date: $startdate 
Finish Date: $finishdate

Camp Contact Name: $fullname
Camp Contact Email: $from
Camp Contact Phone: $phone 


__ Visiting Teacher 1 __________________________________

Name: $vt1

Qualified teacher: $qualified1

Areas of qualification: $areas1

Previous Rubicon Experience: $experience1

Experience in Outdoor Education or Qualifications:
Bushwalking: $bushwalking1
Canoeing: $canoeing1
High Ropes: $highropes1
Mountain Biking: $biking1
Rock Climbing: $climbing1

Further Details:
$vt1comment1

Current First Aid: $firstaid1

First Aid details: $fadetails1

Bronze medallion: $bronzemedallion1

Bus Licence: $endorsedlicence1

Taxi Directorate Certificate: $driverslicence1

Medical Form Completed: $medical1


__ Visiting Teacher 2 __________________________________

Name: $vt2

Qualified teacher: $qualified2

Areas of qualification: $areas2

Previous Rubicon Experience: $experience2

Experience in Outdoor Education or Qualifications:
Bushwalking: $bushwalking2
Canoeing: $canoeing2
High Ropes: $highropes2
Mountain Biking: $biking2
Rock Climbing: $climbing2

Further Details:
$vt2comment1

Current First Aid: $firstaid2

First Aid details: $fadetails2

Bronze medallion: $bronzemedallion2

Bus Licence: $endorsedlicence2

Taxi Directorate Certificate: $driverslicence2

Medical Form Completed: $medical2


__ Visiting Teacher 3 __________________________________

Name: $vt3

Qualified teacher: $qualified3

Areas of qualification: $areas3

Previous Rubicon Experience: $experience3

Experience in Outdoor Education or Qualifications:
Bushwalking: $bushwalking3
Canoeing: $canoeing3
High Ropes: $highropes3
Mountain Biking: $biking3
Rock Climbing: $climbing3

Further Details:
$vt3comment1

Current First Aid: $firstaid3

First Aid details: $fadetails3

Bronze medallion: $bronzemedallion3

Bus Licence: $endorsedlicence3

Taxi Directorate Certificate: $driverslicence3

Medical Form Completed: $medical3


__ Visiting Teacher 4 __________________________________

Name: $vt4

Qualified teacher: $qualified4

Areas of qualification: $areas4

Previous Rubicon Experience: $experience4

Experience in Outdoor Education or Qualifications:
Bushwalking: $bushwalking4
Canoeing: $canoeing4
High Ropes: $highropes4
Mountain Biking: $biking4
Rock Climbing: $climbing4

Further Details:
$vt4comment1

Current First Aid: $firstaid4

First Aid details: $fadetails4

Bronze medallion: $bronzemedallion4

Bus Licence: $endorsedlicence4

Taxi Directorate Certificate: $driverslicence4

Medical Form Completed: $medical4

______________________________________________

$footer";

$send = mail($to, $subject, $message, "From: {$from}");
if ($send)
{
include("visiting_teacher_details_success.html"); exit();
}
else 
{ 
$ermessage = "Error: You message has not been sent, please try again";
include("visiting_teacher_details_error.html"); exit();
}
}
else
{
include("visiting_teacher_details.html");
}

?>
