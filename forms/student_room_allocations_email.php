<?php

extract($HTTP_GET_VARS);
extract($HTTP_POST_VARS);

if ($action == "send")
{
include("student_room_allocations_config.php");
$to = $ademail;
$from = $_POST['from'];
$fullname = $_POST['fullname'];
$subject = $_POST['subject'];
$startdate = $_POST['startdate'];
$finishdate = $_POST['finishdate'];
$schoolname = $_POST['schoolname'];
$phone = $_POST['phone'];

$f1a = $_POST['f1a'];
$fyear1a = $_POST['f1ayear'];
$fdetails1a= $_POST['f1adetails'];
$f1b = $_POST['f1b'];
$fyear1b = $_POST['f1byear'];
$fdetails1b= $_POST['f1bdetails'];

$to = trim($to);
$from = trim($from);
$fullname = trim($fullname);
$subject = trim($subject);

if (empty($to))
{
$ermessage = "Error: Email address to can not be blank, Please enter your email address in the config file!";
include("student_room_allocations_error.html"); exit();
}
if (empty($from))
{
$ermessage = "Error: Email address can not be blank, Please enter your email address!";
include("student_room_allocations_error.html"); exit();
}
if (empty($schoolname))
{
$ermessage = "Error: School name is a required field";
include("student_room_allocations_error.html"); exit();
}
if (!ereg('^[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+'.
'@'.
'[-!#$%&\'*+\\/0-9=?A-Z^_`a-z{|}~]+\.'.
'[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+$', $from))
{
$ermessage = "Error: Invalid Email address, Please re-enter your email address!";
include ("student_room_allocations_error.html"); exit;
}
if (empty($fullname))
{
$ermessage = "Error: Please enter your name!";
include("student_room_allocations_error.html"); exit();
}

$footer = "www.rubicon.vic.edu.au";

$message ="
School Name: $schoolname
Start Date: $startdate
Finish Date: $finishdate

Camp Contact Name: $fullname
Camp Contact Email: $from
Camp Contact Phone: $phone

__ Female pairs: _____________________

1a name: $f1a
1a year level: $fyear1a
1a other details: $fdetails1a

1b name: $f1b
1b year level: $fyear1b
1b other details: $fdetails1b

2a name: $f2a
2a year level: $fyear2a
2a other details: $fdetails2a

2b name: $f2b
2b year level: $fyear2b
2b other details: $fdetails2b

3a name: $f3a
3a year level: $fyear3a
3a other details: $fdetails3a

3b name: $f3b
3b year level: $fyear3b
3b other details: $fdetails3b

4a name: $f4a
4a year level: $fyear4a
4a other details: $fdetails4a

4b name: $f4b
4b year level: $fyear4b
4b other details: $fdetails4b

5a name: $f5a
5a year level: $fyear5a
5a other details: $fdetails5a

5b name: $f5b
5b year level: $fyear5b
5b other details: $fdetails5b

6a name: $f6a
6a year level: $fyear6a
6a other details: $fdetails6a

6b name: $f6b
6b year level: $fyear6b
6b other details: $fdetails6b

7a name: $f7a
7a year level: $fyear7a
7a other details: $fdetails7a

7b name: $f7b
7b year level: $fyear7b
7b other details: $fdetails7b

8a name: $f8a
8a year level: $fyear8a
8a other details: $fdetails8a

8b name: $f8b
8b year level: $fyear8b
8b other details: $fdetails8b

9a name: $f9a
9a year level: $fyear9a
9a other details: $fdetails9a

9b name: $f9b
9b year level: $fyear9b
9b other details: $fdetails9b

10a name: $f10a
10a year level: $fyear10a
10a other details: $fdetails10a

10b name: $f10b
10b year level: $fyear10b
10b other details: $fdetails10b

11a name: $f11a
11a year level: $fyear11a
11a other details: $fdetails11a

11b name: $f11b
11b year level: $fyear11b
11b other details: $fdetails11b

12a name: $f12a
12a year level: $fyear12a
12a other details: $fdetails12a

12b name: $f12b
12b year level: $fyear12b
12b other details: $fdetails12b

__ Male pairs: _____________________

1a name: $m1a
1a year level: $myear1a
1a other details: $mdetails1a

1b name: $m1b
1b year level: $myear1b
1b other details: $mdetails1b

2a name: $m2a
2a year level: $myear2a
2a other details: $mdetails2a

2b name: $m2b
2b year level: $myear2b
2b other details: $mdetails2b

3a name: $m3a
3a year level: $myear3a
3a other details: $mdetails3a

3b name: $m3b
3b year level: $myear3b
3b other details: $mdetails3b

4a name: $m4a
4a year level: $myear4a
4a other details: $mdetails4a

4b name: $m4b
4b year level: $myear4b
4b other details: $mdetails4b

5a name: $m5a
5a year level: $myear5a
5a other details: $mdetails5a

5b name: $m5b
5b year level: $myear5b
5b other details: $mdetails5b

6a name: $m6a
6a year level: $myear6a
6a other details: $mdetails6a

6b name: $m6b
6b year level: $myear6b
6b other details: $mdetails6b

7a name: $m7a
7a year level: $myear7a
7a other details: $mdetails7a

7b name: $m7b
7b year level: $myear7b
7b other details: $mdetails7b

8a name: $m8a
8a year level: $myear8a
8a other details: $mdetails8a

8b name: $m8b
8b year level: $myear8b
8b other details: $mdetails8b

9a name: $m9a
9a year level: $myear9a
9a other details: $mdetails9a

9b name: $m9b
9b year level: $myear9b
9b other details: $mdetails9b

10a name: $m10a
10a year level: $myear10a
10a other details: $mdetails10a

10b name: $m10b
10b year level: $myear10b
10b other details: $mdetails10b

11a name: $m11a
11a year level: $myear11a
11a other details: $mdetails11a

11b name: $m11b
11b year level: $myear11b
11b other details: $mdetails11b

12a name: $m12a
12a year level: $myear12a
12a other details: $mdetails12a

12b name: $m12b
12b year level: $myear12b
12b other details: $mdetails12b
______________________________________

Separation Details: $separation

$footer";

$send = mail($to, $subject, $message, "From: {$from}");
if ($send)
{
include("student_room_allocations_success.html"); exit();
}
else
{
$ermessage = "Error: You message has not been sent, please try again";
include("student_room_allocations_error.html"); exit();
}
}
else
{
include("student_room_allocations.html");
}

?>
