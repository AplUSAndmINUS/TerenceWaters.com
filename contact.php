<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="keywords" content="terrokkinit, terrokkinit.com, AplUSAndmINUS, terencewaters.com, home page, graphic design,website, portfolio, web design, jQuery, JavaScript, HTML5, CSS3, W3, blog, personal blog, Twitter, social media, student, Terence,Waters, Terence Waters, coding, programming, programmer" />
        <meta name="description" content="Home page of Terence Waters, freelance graphic designer web site designer, programmer, and tech guru geek. Come check out his new blog, portfolio pages and design work, and get an insight into this person at terencewaters.com" />
        <title>Contact Me | TerenceWaters.com</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
            rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css" />
        <link href="_css/base.css" rel="stylesheet" type="text/css" />
        <link href="_css/effects.css" rel="stylesheet" type="text/css" />
        <link href="_css/layout.css" rel="stylesheet" media="screen and (min-width: 601px)" type="text/css" />
        <link href="_css/layout-mobile.css" rel="stylesheet" media="screen and (max-width: 600px)" type="text/css" />
        <script src="_js/jquery-1.11.1.js" type="text/javascript"></script>
        <script src="_js/jquery.js" type="text/javascript"></script>
		<script src="_js/gen_validatorv31.js" type="text/javascript"></script>
        <script src="https://use.fontawesome.com/b8fd316b98.js"></script>
        <!--[if lt IE 8]>
            <script src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.8.3.js" type="text/javascript"></script>
        <![endif]-->
    </head>
<body>
    <header>
        <nav>
            <ul id="mainNav">
                <li><a href="index.html"><i class="fa fa-home fa-2x"></i><b>HOME</b></a></li>
				<li><a href="resume.html"><i class="fa fa-user-o fa-2x"></i><b>RESUME</b></a></li>
                <li><a href="portfolio.html"><i class="fa fa-folder-open-o fa-2x"></i><b>PORTFOLIO</b></a></li>
                <li><a href="http://www.aplusandminus.com/" target="new"><i class="fa fa-pencil fa-2x"></i><b>BLOG</b></a></li>
                <li><a href="contact.php"><i class="fa fa-envelope-o fa-2x"></i><b>CONTACT</b></a></li>
            </ul>
        </nav>
        <ul id="socialMedia">
            <li><a href="http://www.facebook.com/AplUSAndmINUS" target="new"><i class="fa fa-facebook fa-2x"></i><b>FACEBOOK</b></a></li>
            <li><a href="http://www.twitter.com/AplUSAndmINUS" target="new"><i class="fa fa-twitter fa-2x"></i><b>TWITTER</b></a></li>
            <li><a href="http://www.instagram.com/AplUSAndmINUS" target="new"><i class="fa fa-instagram fa-2x"></i><b>INSTAGRAM</b></a></li>
            <li><a href="http://www.behance.net/AplUSAndmINUS" target="new"><i class="fa fa-behance fa-2x"></i><b>BEHANCE</b></a></li>
			<li><a href="http://www.linkedin.com/in/terencewaters" target="new"><i class="fa fa-linkedin fa-2x"></i><b>LINKEDIN</b></a></li>
        </ul>
        <div id="logo">
            <p id="logoImage">
                <a href="about.html"><img src="_images/ETASlogo.png" class="logoImageGlow" alt="EnTerActive Studios - About (Easter Egg)" /></a>
            </p>
        </div>
    </header>
    <section id="contactBackground">
        <div id="twitterFeed">
            <div id="twitterFeedImage">
                <p><img id="twitterImage" src="_images/myTwitterFeed.png" alt="See my 
                live Twitter feed @AplUSAndmINUS" /></p>
            </div>
            <div id="twitterContent">
                <!-- code goes here for Twitter feed -->
                <a class="twitter-timeline" data-lang="en" data-width="600" data-height="400" data-theme="dark" 
                data-link-color="2B7BB9" href="https://twitter.com/AplUSAndmINUS">Tweets by @AplUSAndmINUS</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
    </section>
    <section id="backgroundSlide">
        <div id="mainHeading">
            <h1 class="greenH1" id="oneH1">say hello! :)</h1>
            <h5 id="oneH5" class="formH5"><span class="whiteH5">Now that you know me, let me know you!</h5>
			<h5 id="twoH5" class="formH5"><span class="whiteH5">I'm available via social media through the navigation bar, but you're also welcome to drop me a line below.</span></h5>
			<h5 id="threeH5" class="formH5"><span class="whiteH5">Fill out the form below, and I'll respond as soon as possible. Your info will not be shared with 
				anyone, nor will I send you spam email ever. Thanks!</span></h5>
		
			<hr class="resumeHR" />
			<h1 class="greenH1" id="twoH1">contact form</h1>
			<p>&nbsp;</p>
			<form method="post" id="contact_form" name="contact_form" action="contact-form-handler.php">
				<fieldset>
					<legend>
						<h5 id="fourH5" class="form2H5">
							<label for="fname"><span class="whiteH5"><h5>First name </h5></span></label> 
							<input id="fname" type="text" name="fname" minlength="2" required />
						</h5>
						<h5 id="fiveH5" class="form2H5">
							<label for="lname"><span class="whiteH5"><h5>Last name </h5></span></label>
							<input id="lname" type="text" name="lname" minlength="2" required />
						</h5>
						<h5 id="sixH5" class="form2H5">
							<label for="email"><span class="whiteH5"><h5>E-mail </h5></span></label> 
							<input id="email" type="email" name="email" required />
						</h5>
						<h5 id="sevenH5" class="form2H5">
							<label for="comments"><span class="whiteH5"><h5>Enter your comments here </h5></span></label> 
							<textarea id="comments" name="comments" minlength="10" maxlength="1000" required></textarea>
						</h5>
						<div id="formButtons">
							<h5 id="eightH5" class="form2H5">
								<input type="submit" class="submit" value="Submit" /> <input type="reset" class="reset" value="Clear Form" />
							</h5>
						</div>
					</legend>
				</fieldset>
			</form>
        </div>
			
		<hr class="resumeHR" />
		<div id="contactInfo">
        	  <h1 class="greenH1" id="fiveH1">contact info</h1>
                <h5 class="whiteH5 moveH5" id="elevenH5"><strong>terence waters</strong><br />
                <span id="reverse">moc.sretawecneret@ecneret<br />
                7222-132 (108)</h5><br />
		</div>
	
        <div id="footerTxt">
            <h5 id="threeH5">
                <span class="greenH5">#</span><span class="whiteH5">AwesomeDesigner</span><span class="pinkH5"> | </span> 
                <span class="greenH5">#</span><span class="whiteH5">&lt;coder&gt;</span><span class="pinkH5"> | </span> 
                <span class="greenH5">#</span><span class="whiteH5">aUSAinUS</span><br />
                <span class="whiteH5">(</span><span class="greenH5">c</span><span class="whiteH5">) 
                    <span id="footerDate" class="whiteH5"></span> terencewaters.com</span>
            </h5>
        </div>
    </section>
    <div id="backdrop"></div>
</body>
</html>