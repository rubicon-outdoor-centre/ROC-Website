<?php
/**
 * Template Name: Single Page Application
 * Description: A full-width template with no sidebar
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header();

?>

<div class="banner">
    <img src="/wp-content/themes/toolbox%20v2/img/banners/forms-blurred.jpg" alt="Banner Image">
    <div class="container">
        <h2><span>Application</span></h2>
    </div>
</div>

<div class="container">
    <div class="grid">
        <div class="grid__col--100">
            <div class="content-section">
                <h2>Apply For a 2017 Booking</h2>
                <div class="grid">
                    <div class="grid__col--66">
                        <p>Welcome to the Rubicon Outdoor Centre 2017 Application page.</p>
                        <p>As a school, Rubicon values its relationships with visiting students &amp; staff and is committed to working with visiting schools to deliver quality educational programs.</p>
                        <p>We recognize the considerable time and effort that schools put into organizing a visit to Rubicon and we will work closely with your school to ensure that a curriculum is designed to best meet the learning outcomes of the program.</p>
                        <p>To enhance the students learning experience at Rubicon, schools will need to commit to scheduling a pre and post program visit within 8 weeks of their visit to Rubicon. This meeting will be conducted by a Rubicon teacher via a school visit or video conference. These visits are an integral part of the curriculum delivery process and are required to receive a booking.</p>
                        <p>As a Government school, Rubicon is committed to ensuring that outdoor learning programs can be delivered at a reasonable cost. The charge of $30 per student per day includes all food, accommodation and outdoor activities. Visiting schools are expected to arrange all transport to and from our campuses.</p>
                        <p>If you require any support with the application process please call us during school hours on 5773 2285 or email us via <a href="mailto:rubicon.oc@edumail.vic.gov.au">rubicon.oc@edumail.vic.gov.au</a>.</p>
                    </div><div class="grid__col--33">
                    </div>
                </div>
                <form class="application-form" id="applicationForm" name="application-form" method="post" action="http://203.113.215.85/RESTfm/Summit/layout/WebApp">
                    <!-- RESTfm tags -->
                    <input type="hidden" name="RFMkey" value="Tx0axpIPAi5H">
                    <input type="hidden" name="RFMsuppressData" value="1">
                    <input type="hidden" name="RFMurlencoded" value="1">
                    <input type="hidden" name="RFMscript" value="ManageOnlineApplications">
                    <input type="hidden" name="RFMscriptParam" value="ConvertToApplication">
                    <!-- end RESTfm tags -->
                    <div class="grid">
                        <div class="grid__col--50">
                            <label for="firstName">What is your first name?<span class="required">*</span></label>
                            <input id="firstName" name="firstName" type="text" data-validation="required" data-validation-error-msg="You did not enter a first name">
                        </div><div class="grid__col--50">
                        </div><div class="grid__col--50">
                            <label for="lastName">What is your last name?<span class="required">*</span></label>
                            <input id="lastName" name="lastName" type="text" data-validation="required" data-validation-error-msg="You did not enter a last name">
                        </div><div class="grid__col--50">
                        </div><div class="grid__col--50">
                            <label for="email">What is your work email?<span class="required">*</span></label>
                            <input id="email" name="email" type="email" data-validation="email" data-validation-error-msg="You did not enter a valid email">
                        </div><div class="grid__col--50">
                        </div><div class="grid__col--50">
                            <label for="school">What school are you applying for?<span class="required">*</span></label>
                            <input id="school" name="school" type="text" data-validation="required" data-validation-error-msg="You did not enter a school">
                        </div><div class="grid__col--50">
                        </div><div class="grid__col--50">
                            <label for="phone">What is the school’s phone number?<span class="required">*</span></label>
                            <input id="phone" name="phone" type="text" data-validation="number" data-validation-error-msg="You did not enter a valid phone number">
                        </div><div class="grid__col--50">
                        </div><div class="grid__col--50">
                            <label>Has your school been to Rubicon before?<span class="required">*</span></label>
                            <div class="form-radio-input"><input id="attendedBeforeYes" name="attendedBefore" type="radio" value="yes" data-validation="required" data-validation-optional-if-answered="attendedBefore" data-validation-error-msg="You did not state your school's previous attendance"> <label for="attendedBeforeYes" >Yes</label></div>
                            <div class="form-radio-input"><input id="attendedBeforeNo" name="attendedBefore" type="radio" value="no" data-validation="required" data-validation-optional-if-answered="attendedBefore" data-validation-error-msg="You did not state your school's previous attendance"> <label for="attendedBeforeNo">No</label></div>
                        </div><div class="grid__col--50">
                        </div><div class="grid__col--50">
                            <label for="attendedBeforeComments">Comments?</label>
                            <textarea id="attendedBeforeComments" name="attendedBeforeComments"></textarea>
                        </div><div class="grid__col--50">
                            <div class="form-extra-info">
                                <h6>For example:</h6>
                                <p>We had a booking but were unable to attend due to student numbers.</p>
                            </div>
                        </div><div class="grid__col--50">
                            <label for="whyInformation">Why does your school want to come to Rubicon?<span class="required">*</span></label>
                            <textarea id="whyInformation" name="whyInformation" data-validation="required" data-validation-error-msg="You did not enter a reason for coming"></textarea>
                        </div><div class="grid__col--50">
                            <div class="form-extra-info">
                                <h6>For example:</h6>
                                <p>Our school is currently undertaking a focus on Positive Behaviour Support and our students would benefit from developing their understanding of what respect and integrity look like as a community.</p>
                            </div>
                        </div><div class="grid__col--50">
                            <label for="focus">What would you see as the curriculum focus?<span class="required">*</span></label>
                            <textarea id="focus" name="focus" data-validation="required" data-validation-error-msg="You did not enter a curriculum focus"></textarea>
                        </div><div class="grid__col--50">
                            <div class="form-extra-info">
                                <h6>For example:</h6>
                                <p>We would like a focus on the benefits of relationships and the impact this has on a student's own, and other's, wellbeing.</p>
                                <p>Note: This should be based on the Victorian Curriculum.</p>
                            </div>
                        </div><div class="grid__col--50">
                            <label for="integration">How is your time at Rubicon currently integrated into your existing curriculum? If it isn't, how are you planning on doing this?<span class="required">*</span></label>
                            <textarea id="integration" name="integration" data-validation="required" data-validation-error-msg="You did not enter curriculum integration information"></textarea>
                        </div><div class="grid__col--50">
                            <div class="form-extra-info">
                                <h6>For example:</h6>
                                <p>As noted previously, this curriculum will foster emphasis on Positive Behaviour Support being introduced at our school and is a part of that narrative.</p>
                            </div>
                        </div><div class="grid__col--50">
                            <label for="estimatedNumbers">How many students would you plan on bringing?<span class="required">*</span></label>
                            <input id="estimatedNumbers" name="estimatedNumbers" type="number" data-validation="number" data-validation-error-msg="You did not enter a valid number of students">
                        </div><div class="grid__col--50">
                        </div><div class="grid__col--50">
                            <label class="yearLevelLabel">What year level students would be attending?<span class="required">*</span></label>
                            <div class="form-radio-input yearLevelInput"><input id="yearLevelPrimary" name="yearLevelPrimary" type="checkbox" value="primary" data-validation="required" data-validation-optional-if-answered="yearLevelPrimary, yearLevel7, yearLevel8, yearLevel9, yearLevel10, yearLevel11, yearLevel12" data-validation-error-msg="You did not select a student year level"> <label for="yearLevelPrimary">Primary</label></div>
                            <div class="form-radio-input yearLevelInput"><input id="yearLevel7" name="yearLevel7" type="checkbox" value="7" data-validation="required" data-validation-optional-if-answered="yearLevelPrimary, yearLevel7, yearLevel8, yearLevel9, yearLevel10, yearLevel11, yearLevel12"  data-validation-error-msg="You did not select a student year level"> <label for="yearLevel7">7</label></div>
                            <div class="form-radio-input yearLevelInput"><input id="yearLevel8" name="yearLevel8" type="checkbox" value="8" data-validation="required" data-validation-optional-if-answered="yearLevelPrimary, yearLevel7, yearLevel8, yearLevel9, yearLevel10, yearLevel11, yearLevel12"  data-validation-error-msg="You did not select a student year level"> <label for="yearLevel8">8</label></div>
                            <div class="form-radio-input yearLevelInput"><input id="yearLevel9" name="yearLevel9" type="checkbox" value="9" data-validation="required" data-validation-optional-if-answered="yearLevelPrimary, yearLevel7, yearLevel8, yearLevel9, yearLevel10, yearLevel11, yearLevel12"  data-validation-error-msg="You did not select a student year level"> <label for="yearLevel9">9</label></div>
                            <div class="form-radio-input yearLevelInput"><input id="yearLevel10" name="yearLevel10" type="checkbox" value="10" data-validation="required" data-validation-optional-if-answered="yearLevelPrimary, yearLevel7, yearLevel8, yearLevel9, yearLevel10, yearLevel11, yearLevel12"  data-validation-error-msg="You did not select a student year level"> <label for="yearLevel10">10</label></div>
                            <div class="form-radio-input yearLevelInput"><input id="yearLevel11" name="yearLevel11" type="checkbox" value="11" data-validation="required" data-validation-optional-if-answered="yearLevelPrimary, yearLevel7, yearLevel8, yearLevel9, yearLevel10, yearLevel11, yearLevel12"  data-validation-error-msg="You did not select a student year level"> <label for="yearLevel11">11</label></div>
                            <div class="form-radio-input yearLevelInput"><input id="yearLevel12" name="yearLevel12" type="checkbox" value="12" data-validation="required" data-validation-optional-if-answered="yearLevelPrimary, yearLevel7, yearLevel8, yearLevel9, yearLevel10, yearLevel11, yearLevel12"  data-validation-error-msg="You did not select a student year level"> <label for="yearLevel12">12</label></div>
                        </div><div class="grid__col--50">
                        </div><div class="grid__col--50">
                            <label>How are students selected from your school?<span class="required">*</span></label>
                            <div class="form-radio-input"><input id="studentSelectionSelected" name="studentSelection" type="radio" value="selected" data-validation="required" data-validation-optional-if-answered="studentSelection" data-validation-error-msg="You did not state how students are selected"> <label for="studentSelectionSelected">They are selected</label></div>
                            <div class="form-radio-input"><input id="studentSelectionElect" name="studentSelection" type="radio" value="elect" data-validation="required" data-validation-optional-if-answered="studentSelection" data-validation-error-msg="You did not state how students are selected"> <label for="studentSelectionElect">They elect to come</label></div>
                            <div class="form-radio-input"><input id="studentSelectionSubject" name="studentSelection" type="radio" value="subject" data-validation="required" data-validation-optional-if-answered="studentSelection" data-validation-error-msg="You did not state how students are selected"> <label for="studentSelectionSubject">It’s subject specific</label></div>
                            <div class="form-radio-input form-other"><input id="studentSelectionOther" name="studentSelection" type="radio" value="other" data-validation="required" data-validation-optional-if-answered="studentSelection" data-validation-error-msg="You did not state how students are selected"> <label for="studentSelectionOther">Other:</label><input name="studentSelectionOtherText" type="text" data-validation="required" data-validation-depends-on="studentSelection" data-validation-depends-on-value="other" data-validation-error-msg="You did not give additional information on how students are selected"></div>
                        </div><div class="grid__col--50">
                        </div><div class="grid__col--50">
                            <label>How long would you like your program to be?<span class="required">*</span></label>
                            <div class="form-radio-input"><input id="lengthOfProgram1" name="lengthOfProgram" type="radio" value="1" data-validation="required" data-validation-optional-if-answered="lengthOfProgram" data-validation-error-msg="You did not state how long you want your program to be"> <label for="lengthOfProgram1">1 Day</label></div>
                            <div class="form-radio-input"><input id="lengthOfProgram2" name="lengthOfProgram" type="radio" value="2" data-validation="required" data-validation-optional-if-answered="lengthOfProgram" data-validation-error-msg="You did not state how long you want your program to be"> <label for="lengthOfProgram2">2 Days</label></div>
                            <div class="form-radio-input"><input id="lengthOfProgram3" name="lengthOfProgram" type="radio" value="3" data-validation="required" data-validation-optional-if-answered="lengthOfProgram" data-validation-error-msg="You did not state how long you want your program to be"> <label for="lengthOfProgram3">3 Days</label></div>
                            <div class="form-radio-input"><input id="lengthOfProgram4" name="lengthOfProgram" type="radio" value="4" data-validation="required" data-validation-optional-if-answered="lengthOfProgram" data-validation-error-msg="You did not state how long you want your program to be"> <label for="lengthOfProgram4">4 Days</label></div>
                            <div class="form-radio-input"><input id="lengthOfProgram5" name="lengthOfProgram" type="radio" value="5" data-validation="required" data-validation-optional-if-answered="lengthOfProgram" data-validation-error-msg="You did not state how long you want your program to be"> <label for="lengthOfProgram5">5 Days</label></div>
                            <div class="form-radio-input form-other"><input id="lengthOfProgramOther" name="lengthOfProgram" type="radio" value="other" data-validation="required" data-validation-optional-if-answered="lengthOfProgram" data-validation-error-msg="You did not state how long you want your program to be"> <label for="lengthOfProgramOther">Other:</label><input name="lengthOfProgramOtherText" type="text" data-validation="required" data-validation-depends-on="lengthOfProgram" data-validation-depends-on-value="other" data-validation-error-msg="You did not give additional information on how long you want your program to be"></div>
                        </div><div class="grid__col--50">
                        </div><div class="grid__col--50">
                            <label for="date1">What date would you like to attend?<span class="required">*</span></label>
                            <div class="form-date-input"><input id="date1" name="date1" type="text" data-validation="date" data-validation-format="dd/mm/yyyy" data-validation-require-leading-zero="false" data-validation-error-msg="You did not enter a valid first date preference"> <label for="date1">1st preference</label></div>
                            <div class="form-date-input"><input id="date2" name="date2" type="text"> <label for="date2">2nd preference</label></div>
                            <div class="form-date-input"><input id="date3" name="date3" type="text"> <label for="date3">3rd preference</label></div>
                            <div class="form-date-input"><input id="date4" name="date4" type="text"> <label for="date4">4th preference</label></div>
                            <div class="form-date-input"><input id="date5" name="date5" type="text"> <label for="date5">5th preference</label></div>
                        </div><div class="grid__col--50">
                            <div class="form-extra-info form-extra-info--accommodation">
                                <p><strong>Note:</strong> Please use the <code>dd/mm/yyyy</code> format.</p>
                            </div>
                        </div><div class="grid__col--50">
                            <label>What accommodation style would be preferred?<span class="required">*</span></label>
                            <div class="form-radio-input"><input id="accommodationStyleResidential" name="accommodationStyle" type="radio" value="residential" data-validation="required" data-validation-optional-if-answered="accommodationStyle" data-validation-error-msg="You did not state what accommodation style is preferred"> <label for="accommodationStyleResidential">Residential</label></div>
                            <div class="form-radio-input"><input id="accommodationStyleBaseCamp" name="accommodationStyle" type="radio" value="basecamp" data-validation="required" data-validation-optional-if-answered="accommodationStyle" data-validation-error-msg="You did not state what accommodation style is preferred"> <label for="accommodationStyleBaseCamp">Base Camp</label></div>
                            <div class="form-radio-input"><input id="accommodationStyleJourney" name="accommodationStyle" type="radio" value="journey" data-validation="required" data-validation-optional-if-answered="accommodationStyle" data-validation-error-msg="You did not state what accommodation style is preferred"> <label for="accommodationStyleJourney">Journey Based</label></div>
                        </div><div class="grid__col--50">
                            <div class="form-extra-info form-extra-info--accommodation">
                                <p><strong>Residential:</strong> Dormitory based accommodation.</p>
                                <p><strong>Base Camp:</strong> Tent based accommodation at a fixed location.</p>
                                <p><strong>Journey Based:</strong> Tent based accommodation at varying locations.</p>
                            </div>
                        </div><div class="grid__col--50">
                         <label for="accommodationWhy">Why would this accommodation style best meet your requirements?<span class="required">*</span></label>
                            <textarea id="accommodationWhy" name="accommodationWhy" data-validation="required" data-validation-error-msg="You did not enter accommodation requirements"></textarea>
                        </div><div class="grid__col--50">
                            <div class="form-extra-info">
                                <h6>For example:</h6>
                                <p>Choosing base camp will focus on community living which will link back to fostering a respectful community.</p>
                            </div>
                        </div><div class="grid__col--50">
                            <label for="additionalInfo">Do you have any additional information that is relevant to your application?</label>
                            <textarea id="additionalInfo" name="additionalInfo"></textarea>
                        </div><div class="grid__col--50">
                        </div><div class="grid__col--50">
                            <p><span class="required">* Indicates a required field</span></p>
                            <input type="submit" value="Submit Application for 2017">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="/wp-content/themes/toolbox%20v2/js/jquery-ui/jquery-ui.min.js"></script>
<script>
$(function() {
    $("#date1").datepicker({
        showOn: "button",
        buttonText: "",
        dateFormat: "dd/mm/yy"
    });
    $("#date2").datepicker({
        showOn: "button",
        buttonText: "",
        dateFormat: "dd/mm/yy"
    });
    $("#date3").datepicker({
        showOn: "button",
        buttonText: "",
        dateFormat: "dd/mm/yy"
    });
    $("#date4").datepicker({
        showOn: "button",
        buttonText: "",
        dateFormat: "dd/mm/yy"
    });
    $("#date5").datepicker({
        showOn: "button",
        buttonText: "",
        dateFormat: "dd/mm/yy"
    });
});
</script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
$(function() {

    var $yearLevelLabel = $(".yearLevelLabel"),
        $yearLevelInput = $(".yearLevelInput input");

    $.validate({
        modules: 'logic',
        form: "#applicationForm",
        dateFormat: 'dd/mm/yyyy',
        scrollToTopOnError: true,
        errorMessagePosition: 'top',
        onError: function() {

            $(".form-error.alert-danger strong").text("To submit your application you need to fix the following issues:");
        }
    });

    $yearLevelInput.on("click", function() {

        $yearLevelLabel.removeClass("label-error");

        if ( $(".yearLevelInput.has-error .help-block.form-error").length ) {

            $yearLevelLabel.addClass("label-error");
        }
    })
});
</script>

<?php get_footer(); ?>
