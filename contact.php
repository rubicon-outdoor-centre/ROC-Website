<?php include("/includes/head.php"); ?>
        <title>Rubicon Outdoor Centre - Rubicon Campus - Media</title>
    </head>
    <body id="top" class="page--contact">
        <?php include("/includes/header.php"); ?>
        <div class="main-content  grid">
            <div class="page-links  grid__col--33">
                <ul class="page-links__list">
                    <li><a class="page-links__anchor" href="#got_a_question">Got a Question?</a></li>
                    <li><a class="page-links__anchor" href="#nayook_campus">Nayook Campus</a></li>
                    <li><a class="page-links__anchor" href="#rubicon_campus">Rubicon Campus</a></li>
                </ul>
            </div>
            <div class="grid__col--66">
                <section id="got_a_question" class="section">
                    <h2 class="section__title">Got a Question?</h2>
                    <a class="section__back-to-top" href="#top"><i class="icon-font  icon-font--up-arrow"></i></a>
                    <form method="post" action="contact_us_email.php?action=send">
                        <label for="name">Name (required):</label>
                        <input id="name" class="input" name="name" type="text" required/>
                        <label for="email">E-mail (required):</label>
                        <input id="email" class="input" name="email" type="email" required/>
                        <label for="message">Message (required):</label>
                        <textarea id="message" class="input" name="message" rows="5" required></textarea>
                        <input id="submit" class="submit" type="submit" value="Submit"/>
                    </form>
                </section>

                <section id="nayook_campus" class="section">
                    <h2 class="section__title">Nayook Campus</h2>
                    <a class="section__back-to-top" href="#top"><i class="icon-font  icon-font--up-arrow"></i></a>
                    <dl class="campus-info">
                        <dt>Phone</dt>
                        <dd>(03) 5628 4210</dd>
                        <dt>Mail</dt>
                        <dd>Rubicon Outdoor Centre - Nayook Campus<br>610 Nayook-Pwelltown Road<br>C/O Post Office<br>Neerim Junction, VIC, 3832</dd>
                        <dt>Email</dt>
                        <dd><a href="mailto:rubicon.oc.nayook@edumail.vic.gov.au">rubicon.oc.nayook@edumail.vic.gov.au</a></dd>
                    </dl>
                </section>

                <section id="rubicon_campus" class="section">
                    <h2 class="section__title">Rubicon Campus</h2>
                    <a class="section__back-to-top" href="#top"><i class="icon-font  icon-font--up-arrow"></i></a>
                    <dl class="campus-info">
                        <dt>Phone</dt>
                        <dd>(03) 5773 2285</dd>
                        <dt>Fax</dt>
                        <dd>(03) 5773 2441</dd>
                        <dt>Mail</dt>
                        <dd>Rubicon Outdoor Centre - Rubicon Campus<br>264 Rubicon Road<br>Thornton, VIC, 3712</dd>
                        <dt>Email</dt>
                        <dd><a href="mailto:rubicon.oc@edumail.vic.gov.au">rubicon.oc@edumail.vic.gov.au</a></dd>
                    </dl>
                </section>
            </div>
        </div>
<?php include("/includes/footer.php"); ?>
