<?php include("../includes/head.php"); ?>
        <title>Rubicon Outdoor Centre - Teachers</title>
    </head>
    <body id="top" class="page--teachers">
        <header>
            <nav class="campus-select">
                <ul class="campus-select__list">
                    <li class="campus-select__list-item"><a class="campus-select__anchor" href="/nayook/index.php">Nayook Campus</a></li>
                    <li class="campus-select__list-item"><a class="campus-select__anchor  campus-select__anchor--current" href="/index.php">Rubicon Campus</a></li>
                </ul>
            </nav>
            <hgroup class="site-title">
                <h1 class="site-title__main"><a class="site-title__anchor" href="/index.php">Rubicon Outdoor Centre</a></h1>
                <h2 class="site-title__sub">Rubicon Campus</h2>
            </hgroup>
            <nav class="main-nav">
                <ul class="main-nav__list">
                    <li class="main-nav__list-item"><a class="main-nav__anchor" href="/index.php">Home</a></li>
                    <li class="main-nav__list-item"><a class="main-nav__anchor  main-nav__anchor--current" href="/teachers.php">Teachers</a></li>
                    <li class="main-nav__list-item"><a class="main-nav__anchor" href="/students.php">Students</a></li>
                    <li class="main-nav__list-item"><a class="main-nav__anchor" href="/media.php">Media</a></li>
                    <li class="main-nav__list-item"><a class="main-nav__anchor" href="/venue_hire.php">Venue Hire</a></li>
                    <li class="main-nav__list-item"><a class="main-nav__anchor" href="/activities.php">Activities</a></li>
                    <li class="main-nav__list-item"><a class="main-nav__anchor" href="/about.php">About</a></li>
                    <li class="main-nav__list-item"><a class="main-nav__anchor" href="/contact.php">Contact</a></li>
                </ul>
            </nav>
            <img class="main-banner" src="http://www.intangibility.com/Photography/Collections/GP/GP_126-Wyoming-5/GP_126_11-13-%5Bweb%5D.jpg" alt="Banner Image">
        </header>
        <div class="main-content  grid">
            <div class="page-links  grid__col--33">
                <h3 class="page-links__title">Page Sections</h3>
                <ul class="page-links__list">
                    <li><a class="page-links__anchor" href="/teachers.php#forms_and_information">Forms and Information</a></li>
                    <li><a class="page-links__anchor" href="/teachers.php#programs">Programs</a></li>
                    <li><a class="page-links__anchor" href="/teachers.php#student_teacher_application">Student Teacher Application</a></li>
                </ul>
            </div>
            <div class="grid__col--66">
                <section id="student_room_allocations" class="section">
                    <h2 class="section__title">Student Room Allocations</h2>
                    <a class="section__back-to-top" href="#top"><i class="icon-font  icon-font--up-arrow"></i></a>
                    <form action="student_room_allocations_email.php?action=send" method="post">
                        <input type="hidden" name="mailto" value="rubicon.oc@edumail.vic.gov.au"/>
                        <input type="hidden" name="subject" value="ROOM PAIRS FORM"/>
                        <label for="schoolname">School Name (required):</label>
                        <input id="schoolname" class="input details" name="schoolname" type="text" required/>
                        <label for="fullname">Contact Name (required):</label>
                        <input id="fullname" class="input details" name="fullname" type="text" required/>
                        <label for="from">Contact Email (required):</label>
                        <input id="from" class="input details" name="from" type="email" required/>            
                        <label for="phone">Contact Phone Number:</label>
                        <input id="phone" class="input details" name="phone" type="text"/>
                        <label for="startdate">Camp Start Date:</label>
                        <input id="startdate" class="input details" name="startdate" type="date"/>
                        <label for="finishdate">Camp Finish Date:</label>
                        <input id="finishdate" class="input details" name="finishdate" type="date"/>
                        <p>Please complete lists for male and female students in &ldquo;room pairs&rdquo; (two students per room). It helps us if you can show year levels and where students may have a physical, emotional or intellectual disability. Please note down any custody issues you are aware of. If it is desirable to separate particular students on activities or duties, please indicate this at the bottom of the form.</p>
                        <p><em>If there is not enough room on this form to enter all attending students please submit multiple forms.</em></p>
                        <h3>Female Room Pairs</h3>
                        <table class="form">
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <p>Name:</p>
                                </td>
                                <td>
                                    <p>Year Level:</p>
                                </td>
                                <td>
                                    <p>Other Details:</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="f1a" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="f1ayear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="f1adetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="f1b" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="f1byear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="f1bdetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>2</p>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="f2a" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="f2ayear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="f2adetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="f2b" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="f2byear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="f2bdetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>3</p>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="f3a" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="f3ayear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="f3adetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="f3b" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="f3byear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="f3bdetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>4</p>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="f4a" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="f4ayear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="f4adetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="f4b" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="f4byear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="f4bdetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>5</p>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="f5a" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="f5ayear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="f5adetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="f5b" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="f5byear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="f5bdetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>6</p>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="f6a" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="f6ayear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="f6adetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="f6b" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="f6byear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="f6bdetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>7</p>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="f7a" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="f7ayear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="f7adetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="f7b" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="f7byear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="f7bdetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>8</p>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="f8a" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="f8ayear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="f8adetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="f8b" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="f8byear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="f8bdetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>9</p>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="f9a" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="f9ayear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="f9adetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="f9b" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="f9byear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="f9bdetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>10</p>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="f10a" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="f10ayear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="f10adetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="f10b" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="f10byear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="f10bdetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>11</p>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="f11a" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="f11ayear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="f11adetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="f11b" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="f11byear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="f11bdetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>12</p>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="f12a" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="f12ayear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="f12adetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="f12b" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="f12byear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="f12bdetails" type="text"/>
                                </td>
                            </tr>
                        </table>
                        <h3>Male Room Pairs</h3>
                        <table class="form">
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <p>Name:</p>
                                </td>
                                <td>
                                    <p>Year Level:</p>
                                </td>
                                <td>
                                    <p>Other Details:</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="m1a" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="m1ayear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="m1adetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="m1b" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="m1byear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="m1bdetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>2</p>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="m2a" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="m2ayear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="m2adetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="m2b" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="m2byear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="m2bdetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>3</p>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="m3a" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="m3ayear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="m3adetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="m3b" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="m3byear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="m3bdetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>4</p>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="m4a" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="m4ayear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="m4adetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="m4b" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="m4byear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="m4bdetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>5</p>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="m5a" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="m5ayear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="m5adetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="m5b" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="m5byear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="m5bdetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>6</p>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="m6a" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="m6ayear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="m6adetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="m6b" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="m6byear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="m6bdetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>7</p>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="m7a" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="m7ayear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="m7adetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="m7b" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="m7byear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="m7bdetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>8</p>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="m8a" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="m8ayear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="m8adetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="m8b" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="m8byear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="m8bdetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>9</p>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="m9a" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="m9ayear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="m9adetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="m9b" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="m9byear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="m9bdetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>10</p>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="m10a" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="m10ayear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="m10adetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="m10b" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="m10byear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="m10bdetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>11</p>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="m11a" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="m11ayear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="m11adetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="m11b" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="m11byear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="m11bdetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>12</p>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="m12a" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="m12ayear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="m12adetails" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <input class="input room_pairs_name" name="m12b" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_year" name="m12byear" type="text"/>
                                </td>
                                <td>
                                    <input class="input room_pairs_details" name="m12bdetails" type="text"/>
                                </td>
                            </tr>
                        </table>
                        <label for="separation">Details of students who should be seperated:</label>
                        <textarea id="separation" class="input" name="separation" rows="5"></textarea>
                        <input class="submit" type="submit" value="Submit"/>
                    </form>
                </section>
            </div>
        </div>
<?php include("../includes/footer.php"); ?>