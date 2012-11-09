<?php include("../includes/head.php"); ?>
        <title>Rubicon Outdoor Centre - Rubicon Campus - Teachers</title>
    </head>
    <body id="top" class="page--teachers">
        <?php include("../includes/header.php"); ?>
        <div class="main-content  grid">
            <div class="page-links  grid__col--33">
                <ul class="page-links__list">
                    <li><a class="page-links__anchor" href="/teachers.php#forms_and_information">Forms and Information</a></li>
                    <li><a class="page-links__anchor" href="/teachers.php#programs">Programs</a></li>
                    <li><a class="page-links__anchor" href="/teachers.php#student_teacher_application">Student Teacher Application</a></li>
                </ul>
            </div>
            <div class="grid__col--66">
                <section id="student_room_allocations" class="section">
                    <h2 class="section__title">Visiting Teacher Details</h2>
                    <a class="section__back-to-top" href="#top"><i class="icon-font  icon-font--up-arrow"></i></a>
                    <form action="visiting_teacher_details_email.php?action=send" method="post">
                        <input type="hidden" name="mailto" value="rubicon.oc@edumail.vic.gov.au"/>
                        <input type="hidden" name="subject" value="VISITING TEACHERS"/>
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
                        <h3>Visiting Teacher 1</h3>
                        <label for="vt1">Name:</label>
                        <input id="vt1" class="input" name="vt1" type="text"/>
                        <p>Previous Rubicon Experience:</p>
                            <input id="experience1yes" type="radio" name="experience1" value="Yes"/><label for="experience1yes" class="radio">Yes</label><br>
                            <input id="experience1no" type="radio" name="experience1" value="No"/><label for="experience1no" class="radio">No</label><br>
                        <p>Experience in Outdoor Education or Qualifications:</p>
                            <input id="bushwalking1" class="checkbox" type="checkbox" name="bushwalking1" value="Yes"/><label for="bushwalking1" class="checkbox">Bushwalking</label><br>
                            <input id="canoeing1" class="checkbox" type="checkbox" name="canoeing1" value="Yes"/><label for="canoeing1" class="checkbox">Canoeing</label><br>
                            <input id="highropes1" class="checkbox" type="checkbox" name="highropes1" value="Yes"/><label for="highropes1" class="checkbox">High Ropes</label><br>
                            <input id="biking1" class="checkbox" type="checkbox" name="biking1" value="Yes"/><label for="biking1" class="checkbox">Mountain Biking</label><br>
                            <input id="climbing1" class="checkbox" type="checkbox" name="climbing1" value="Yes"/><label for="climbing1" class="checkbox">Rock Climbing</label><br>
                        <label for="vt1comment1">Please elaborate (including details such as location and age of participants):</label>
                        <textarea id="vt1comment1" class="input" name="vt1comment1" rows="5"></textarea>
                        <p>Qualified Teacher:</p>
                            <input id="qualified1yes" type="radio" name="qualified1" value="Yes"/><label for="qualified1yes" class="radio">Yes</label><br>
                            <input id="qualified1no" type="radio" name="qualified1" value="No"/><label for="qualified1no" class="radio">No</label><br>
                        <label for="areas1">Teaching Areas:</label>
                        <input id="areas1" class="input" name="areas1" type="text"/>
                        <p>Bronze Medallion:</p>
                            <input id="bronzemedallion1yes" type="radio" name="bronzemedallion1" value="Yes"/><label for="bronzemedallion1yes" class="radio">Yes</label><br>
                            <input id="bronzemedallion1no" type="radio" name="bronzemedallion1" value="No"/><label for="bronzemedallion1no" class="radio">No</label><br>
                        <p>Current First Aid:</p>
                            <input id="firstaid1yes" type="radio" name="firstaid1" value="Yes"/><label for="firstaid1yes" class="radio">Yes</label><br>
                            <input id="firstaid1no" type="radio" name="firstaid1" value="No"/><label for="firstaid1no" class="radio">No</label><br>
                        <label for="fadetails1">Please Detail:</label>
                        <input id="fadetails1" class="input" name="fadetails1" type="text"/>
                        <p>Bus License:</p>
                            <input id="endorsedlicence1yes" type="radio" name="endorsedlicence1" value="Yes"/><label for="endorsedlicence1yes" class="radio">Yes</label><br>
                            <input id="endorsedlicence1no" type="radio" name="endorsedlicence1" value="No"/><label for="endorsedlicence1no" class="radio">No</label><br>
                        <p>Taxi Directorate/Drivers Certificate:</p>
                            <input id="driverslicence1yes" type="radio" name="driverslicence1" value="Yes"/><label for="driverslicence1yes" class="radio">Yes</label><br>
                            <input id="driverslicence1no" type="radio" name="driverslicence1" value="No"/><label for="driverslicence1no" class="radio">No</label><br>
                        <p>Completed Rubicon Medical Form <a href="#" target="_blank">PDF</a>:</p>
                            <input id="medical1yes" type="radio" name="medical1" value="Yes"/><label for="medical1yes" class="radio">Yes</label><br>
                            <input id="medical1no" type="radio" name="medical1" value="No"/><label for="medical1no" class="radio">No</label>
                        <h3>Visiting Teacher 2</h3>
                        <label for="vt2">Name:</label>
                        <input id="vt2" class="input" name="vt2" type="text"/>
                        <p>Previous Rubicon Experience:</p>
                            <input id="experience2yes" type="radio" name="experience2" value="Yes"/><label for="experience2yes" class="radio">Yes</label><br>
                            <input id="experience2no" type="radio" name="experience2" value="No"/><label for="experience2no" class="radio">No</label><br>
                        <p>Experience in Outdoor Education or Qualifications:</p>
                            <input id="bushwalking2" class="checkbox" type="checkbox" name="bushwalking2" value="Yes"/><label for="bushwalking2" class="checkbox">Bushwalking</label><br>
                            <input id="canoeing2" class="checkbox" type="checkbox" name="canoeing2" value="Yes"/><label for="canoeing2" class="checkbox">Canoeing</label><br>
                            <input id="highropes2" class="checkbox" type="checkbox" name="highropes2" value="Yes"/><label for="highropes2" class="checkbox">High Ropes</label><br>
                            <input id="biking2" class="checkbox" type="checkbox" name="biking2" value="Yes"/><label for="biking2" class="checkbox">Mountain Biking</label><br>
                            <input id="climbing2" class="checkbox" type="checkbox" name="climbing2" value="Yes"/><label for="climbing2" class="checkbox">Rock Climbing</label><br>
                        <label for="vt2comment1">Please elaborate (including details such as location and age of participants):</label>
                        <textarea id="vt2comment1" class="input" name="vt2comment1" rows="5"></textarea>
                        <p>Qualified Teacher:</p>
                            <input id="qualified2yes" type="radio" name="qualified2" value="Yes"/><label for="qualified2yes" class="radio">Yes</label><br>
                            <input id="qualified2no" type="radio" name="qualified2" value="No"/><label for="qualified2no" class="radio">No</label><br>
                        <label for="areas2">Teaching Areas:</label>
                        <input id="areas2" class="input" name="areas2" type="text"/>
                        <p>Bronze Medallion:</p>
                            <input id="bronzemedallion2yes" type="radio" name="bronzemedallion2" value="Yes"/><label for="bronzemedallion2yes" class="radio">Yes</label><br>
                            <input id="bronzemedallion2no" type="radio" name="bronzemedallion2" value="No"/><label for="bronzemedallion2no" class="radio">No</label><br>
                        <p>Current First Aid:</p>
                            <input id="firstaid2yes" type="radio" name="firstaid2" value="Yes"/><label for="firstaid2yes" class="radio">Yes</label><br>
                            <input id="firstaid2no" type="radio" name="firstaid2" value="No"/><label for="firstaid2no" class="radio">No</label><br>
                        <label for="fadetails2">Please Detail:</label>
                        <input id="fadetails2" class="input" name="fadetails2" type="text"/>
                        <p>Bus License:</p>
                            <input id="endorsedlicence2yes" type="radio" name="endorsedlicence2" value="Yes"/><label for="endorsedlicence2yes" class="radio">Yes</label><br>
                            <input id="endorsedlicence2no" type="radio" name="endorsedlicence2" value="No"/><label for="endorsedlicence2no" class="radio">No</label><br>
                        <p>Taxi Directorate/Drivers Certificate:</p>
                            <input id="driverslicence2yes" type="radio" name="driverslicence2" value="Yes"/><label for="driverslicence2yes" class="radio">Yes</label><br>
                            <input id="driverslicence2no" type="radio" name="driverslicence2" value="No"/><label for="driverslicence2no" class="radio">No</label><br>
                        <p>Completed Rubicon Medical Form <a href="#" target="_blank">PDF</a>:</p>
                            <input id="medical2yes" type="radio" name="medical2" value="Yes"/><label for="medical2yes" class="radio">Yes</label><br>
                            <input id="medical2no" type="radio" name="medical2" value="No"/><label for="medical2no" class="radio">No</label>
                        <h3>Visiting Teacher 3</h3>
                        <label for="vt3">Name:</label>
                        <input id="vt3" class="input" name="vt3" type="text"/>
                        <p>Previous Rubicon Experience:</p>
                            <input id="experience3yes" type="radio" name="experience3" value="Yes"/><label for="experience3yes" class="radio">Yes</label><br>
                            <input id="experience3no" type="radio" name="experience3" value="No"/><label for="experience3no" class="radio">No</label><br>
                        <p>Experience in Outdoor Education or Qualifications:</p>
                            <input id="bushwalking3" class="checkbox" type="checkbox" name="bushwalking3" value="Yes"/><label for="bushwalking3" class="checkbox">Bushwalking</label><br>
                            <input id="canoeing3" class="checkbox" type="checkbox" name="canoeing3" value="Yes"/><label for="canoeing3" class="checkbox">Canoeing</label><br>
                            <input id="highropes3" class="checkbox" type="checkbox" name="highropes3" value="Yes"/><label for="highropes3" class="checkbox">High Ropes</label><br>
                            <input id="biking3" class="checkbox" type="checkbox" name="biking3" value="Yes"/><label for="biking3" class="checkbox">Mountain Biking</label><br>
                            <input id="climbing3" class="checkbox" type="checkbox" name="climbing3" value="Yes"/><label for="climbing3" class="checkbox">Rock Climbing</label><br>
                        <label for="vt3comment1">Please elaborate (including details such as location and age of participants):</label>
                        <textarea id="vt3comment1" class="input" name="vt3comment1" rows="5"></textarea>
                        <p>Qualified Teacher:</p>
                            <input id="qualified3yes" type="radio" name="qualified3" value="Yes"/><label for="qualified3yes" class="radio">Yes</label><br>
                            <input id="qualified3no" type="radio" name="qualified3" value="No"/><label for="qualified3no" class="radio">No</label><br>
                        <label for="areas3">Teaching Areas:</label>
                        <input id="areas3" class="input" name="areas3" type="text"/>
                        <p>Bronze Medallion:</p>
                            <input id="bronzemedallion3yes" type="radio" name="bronzemedallion3" value="Yes"/><label for="bronzemedallion3yes" class="radio">Yes</label><br>
                            <input id="bronzemedallion3no" type="radio" name="bronzemedallion3" value="No"/><label for="bronzemedallion3no" class="radio">No</label><br>
                        <p>Current First Aid:</p>
                            <input id="firstaid3yes" type="radio" name="firstaid3" value="Yes"/><label for="firstaid3yes" class="radio">Yes</label><br>
                            <input id="firstaid3no" type="radio" name="firstaid3" value="No"/><label for="firstaid3no" class="radio">No</label><br>
                        <label for="fadetails3">Please Detail:</label>
                        <input id="fadetails3" class="input" name="fadetails3" type="text"/>
                        <p>Bus License:</p>
                            <input id="endorsedlicence3yes" type="radio" name="endorsedlicence3" value="Yes"/><label for="endorsedlicence3yes" class="radio">Yes</label><br>
                            <input id="endorsedlicence3no" type="radio" name="endorsedlicence3" value="No"/><label for="endorsedlicence3no" class="radio">No</label><br>
                        <p>Taxi Directorate/Drivers Certificate:</p>
                            <input id="driverslicence3yes" type="radio" name="driverslicence3" value="Yes"/><label for="driverslicence3yes" class="radio">Yes</label><br>
                            <input id="driverslicence3no" type="radio" name="driverslicence3" value="No"/><label for="driverslicence3no" class="radio">No</label><br>
                        <p>Completed Rubicon Medical Form <a href="#" target="_blank">PDF</a>:</p>
                            <input id="medical3yes" type="radio" name="medical3" value="Yes"/><label for="medical3yes" class="radio">Yes</label><br>
                            <input id="medical3no" type="radio" name="medical3" value="No"/><label for="medical3no" class="radio">No</label>
                        <h3>Visiting Teacher 4</h3>
                        <label for="vt4">Name:</label>
                        <input id="vt4" class="input" name="vt4" type="text"/>
                        <p>Previous Rubicon Experience:</p>
                            <input id="experience4yes" type="radio" name="experience4" value="Yes"/><label for="experience4yes" class="radio">Yes</label><br>
                            <input id="experience4no" type="radio" name="experience4" value="No"/><label for="experience4no" class="radio">No</label><br>
                        <p>Experience in Outdoor Education or Qualifications:</p>
                            <input id="bushwalking4" class="checkbox" type="checkbox" name="bushwalking4" value="Yes"/><label for="bushwalking4" class="checkbox">Bushwalking</label><br>
                            <input id="canoeing4" class="checkbox" type="checkbox" name="canoeing4" value="Yes"/><label for="canoeing4" class="checkbox">Canoeing</label><br>
                            <input id="highropes4" class="checkbox" type="checkbox" name="highropes4" value="Yes"/><label for="highropes4" class="checkbox">High Ropes</label><br>
                            <input id="biking4" class="checkbox" type="checkbox" name="biking4" value="Yes"/><label for="biking4" class="checkbox">Mountain Biking</label><br>
                            <input id="climbing4" class="checkbox" type="checkbox" name="climbing4" value="Yes"/><label for="climbing4" class="checkbox">Rock Climbing</label><br>
                        <label for="vt4comment1">Please elaborate (including details such as location and age of participants):</label>
                        <textarea id="vt4comment1" class="input" name="vt4comment1" rows="5"></textarea>
                        <p>Qualified Teacher:</p>
                            <input id="qualified4yes" type="radio" name="qualified4" value="Yes"/><label for="qualified4yes" class="radio">Yes</label><br>
                            <input id="qualified4no" type="radio" name="qualified4" value="No"/><label for="qualified4no" class="radio">No</label><br>
                        <label for="areas4">Teaching Areas:</label>
                        <input id="areas4" class="input" name="areas4" type="text"/>
                        <p>Bronze Medallion:</p>
                            <input id="bronzemedallion4yes" type="radio" name="bronzemedallion4" value="Yes"/><label for="bronzemedallion4yes" class="radio">Yes</label><br>
                            <input id="bronzemedallion4no" type="radio" name="bronzemedallion4" value="No"/><label for="bronzemedallion4no" class="radio">No</label><br>
                        <p>Current First Aid:</p>
                            <input id="firstaid4yes" type="radio" name="firstaid4" value="Yes"/><label for="firstaid4yes" class="radio">Yes</label><br>
                            <input id="firstaid4no" type="radio" name="firstaid4" value="No"/><label for="firstaid4no" class="radio">No</label><br>
                        <label for="fadetails4">Please Detail:</label>
                        <input id="fadetails4" class="input" name="fadetails4" type="text"/>
                        <p>Bus License:</p>
                            <input id="endorsedlicence4yes" type="radio" name="endorsedlicence4" value="Yes"/><label for="endorsedlicence4yes" class="radio">Yes</label><br>
                            <input id="endorsedlicence4no" type="radio" name="endorsedlicence4" value="No"/><label for="endorsedlicence4no" class="radio">No</label><br>
                        <p>Taxi Directorate/Drivers Certificate:</p>
                            <input id="driverslicence4yes" type="radio" name="driverslicence4" value="Yes"/><label for="driverslicence4yes" class="radio">Yes</label><br>
                            <input id="driverslicence4no" type="radio" name="driverslicence4" value="No"/><label for="driverslicence4no" class="radio">No</label><br>
                        <p>Completed Rubicon Medical Form <a href="#" target="_blank">PDF</a>:</p>
                            <input id="medical4yes" type="radio" name="medical4" value="Yes"/><label for="medical4yes" class="radio">Yes</label><br>
                            <input id="medical4no" type="radio" name="medical4" value="No"/><label for="medical4no" class="radio">No</label><br>
                        <input class="submit" type="submit" value="Submit"/>
                    </form>
                </section>
            </div>
        </div>
<?php include("../includes/footer.php"); ?>
