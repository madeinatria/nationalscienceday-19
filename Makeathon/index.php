<!DOCTYPE html>
<html lang="en" class="no-js">

<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Makeathon</title>
	<meta name="description" content="A collection of decorative animated background shapes powered by WebGL and TweenMax." />
	<meta name="keywords" content="webgl, background, shape, web design, web development, tweenmax, gsap, animation" />
	<meta name="author" content="Louis Hoebregts for Codrops" />
	<!-- <link rel="shortcut icon" href="favicon.ico"> -->
	<link href="https://fonts.googleapis.com/css?family=Barlow:400,500,700|Vidaloka" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/base.css" />
	<link rel="stylesheet" type="text/css" href="css/demo6.css" />
	<link rel="stylesheet" type="text/css" href="css/base0.css" />
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/footer-distributed-with-address-and-phones.css" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<!-- <link rel="stylesheet" type="text/css" href="pater/pater.css" /> -->
	<script>
		document.documentElement.className = "js";
		var supportsCssVars = function() {
			var e, t = document.createElement("style");
			return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e
		};
		supportsCssVars() || alert("Please view this demo in a modern browser that supports CSS Variables.");
	</script>
</head>

<body>
	<nav style="  font-weight: 300; color:white!important; font-family: 'Raleway', sans-serif; min-height:55px !important; font-size: 13.5px;" class="navbar navbar-expand-lg navbar-dark bg-dark">
   <a class="navbar-brand" href="#">DEXTERIX'18</a>
   <button  class="navbar-toggler ml-auto custom-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
         <li class="nav-item px-2">
            <a style="color:white!important;" class="nav-link" href="http://www.dexterix.com">HOME</a>
         </li>
         <li class="nav-item px-2">
            <a style="color:white;" class="nav-link" href="http://www.dexterix.com/about.php">ABOUT</a>
         </li>
         <li class="nav-item px-2">
            <a style="color:white;"  class="nav-link" href="http://www.dexterix.com/comingsoon.php">MAKEATHON</a>
         </li>
         <li class="nav-item px-2">
            <a  style="color:white;" class="nav-link" href="http://www.dexterix.com/events.php">EVENTS</a>
         </li>
       
          <li class="nav-item dropdown px-2">
        <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SCHEDULE
        </a>
        <div class="dropdown-menu" style="background-color: black;"  aria-labelledby="navbarDropdown">
          <a style="color:white;  font-family: 'Raleway', sans-serif;" class="dropdown-item" href="http://www.dexterix.com/day1.php">DAY 1</a>
          <a style="color:white;  font-family: 'Raleway', sans-serif;" class="dropdown-item" href="http://www.dexterix.com/day2.php">DAY 2</a>
         
      </li>
         <li class="nav-item px-2">
            <a style="color:white;"  class="nav-link" href="http://www.dexterix.com/sponsors.php">SPONSORS</a>
         </li>
         <li class="nav-item px-2">
            <a style="color:white;"  class="nav-link" href="http://www.dexterix.com/dexterix2017.php">DEXTERIX 2017</a>
         </li>
         <li class="nav-item px-2">
            <a style="color:white;"  class="nav-link" href="http://www.dexterix.com/contact-us.php">CONTACT US</a>
         </li>
      </ul>
   </div>
</nav>
	<div class="demo-6">
		<div class="content_gl">
			<canvas class="scene scene--full" id="scene"></canvas>
			<div class="content__inner">
				<h2 class="content__title">MAKE-A-THON</h2>
				<h3 class="content__subtitle">24 hours of intense Hacking+Making</h2>
				<br><br>
				<h5 class="content__subtitle">NOVEMBER 2ND| NOVEMBER 3RD</h5>
				</div>
			</div>

		</div>


		<div>
		<svg class="hidden">
			<symbol id="icon-arrow" viewBox="0 0 24 24">
				<title>arrow</title>
				<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
			</symbol>
			<symbol id="icon-drop" viewBox="0 0 24 24">
				<title>drop</title>
				<path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
			</symbol>
			<svg id="icon-github" viewBox="0 0 33 33">
				<title>github</title>
				<path d="M16.608.455C7.614.455.32 7.748.32 16.745c0 7.197 4.667 13.302 11.14 15.456.815.15 1.112-.353 1.112-.785 0-.386-.014-1.411-.022-2.77-4.531.984-5.487-2.184-5.487-2.184-.741-1.882-1.809-2.383-1.809-2.383-1.479-1.01.112-.99.112-.99 1.635.115 2.495 1.679 2.495 1.679 1.453 2.489 3.813 1.77 4.741 1.353.148-1.052.569-1.77 1.034-2.177-3.617-.411-7.42-1.809-7.42-8.051 0-1.778.635-3.233 1.677-4.371-.168-.412-.727-2.069.16-4.311 0 0 1.367-.438 4.479 1.67a15.602 15.602 0 0 1 4.078-.549 15.62 15.62 0 0 1 4.078.549c3.11-2.108 4.475-1.67 4.475-1.67.889 2.242.33 3.899.163 4.311C26.37 12.66 27 14.115 27 15.893c0 6.258-3.809 7.635-7.437 8.038.584.503 1.105 1.497 1.105 3.017 0 2.177-.02 3.934-.02 4.468 0 .436.294.943 1.12.784 6.468-2.159 11.131-8.26 11.131-15.455 0-8.997-7.294-16.29-16.291-16.29"></path>
			</svg>
			<symbol id="icon-cross" viewBox="0 0 24 23">
				<title>cross</title>
				<path d="M23.865 3.677c.197-.383.164-.818-.008-1.18.048-.41-.06-.827-.448-1.147L22.323.457c-.636-.524-1.632-.689-2.25 0a155.348 155.348 0 0 1-8.797 9.001C9.011 7.342 6.72 5.255 4.443 3.165c-.8-.734-1.956-.503-2.458.37C1.253 3.9.659 4.374.168 5.182c-.233.386-.215.872 0 1.258 1.47 2.635 4.31 4.951 6.646 7.083-.313.28-.623.562-.942.836-3.146 2.702-5.268 4.416-1.331 7.187.053.037.107.029.161.05.076.036.148.06.232.074.026 0 .05.005.075.003.082.007.16.027.243.011 2.117-.415 4.085-2.074 5.872-3.9 1.74 1.715 3.592 3.353 5.63 4.325.485.232 1.063.097 1.436-.227.626.047 1.197-.342 1.484-.901.042-.026.07-.041.116-.07.91-.569.993-1.701.32-2.482-1.522-1.762-3.138-3.438-4.787-5.084 2.968-2.9 6.674-6.027 8.542-9.667z"/>
			</symbol>
		</svg>

			<!-- <div class="content">
				<header class="codrops-header">
					<div class="codrops-links">
						<a class="codrops-icon codrops-icon--prev" href="https://tympanus.net/Development/ProximityFeedback/" title="Previous Demo"><svg class="icon icon--arrow"><use xlink:href="#icon-arrow"></use></svg></a>
						<a class="codrops-icon codrops-icon--drop" href="https://tympanus.net/codrops/?p=34897" title="Back to the article"><svg class="icon icon--drop"><use xlink:href="#icon-drop"></use></svg></a>
					</div>
					<h1 class="codrops-header__title">Grid Layout with Motion Hover Effect and Content Preview</h1>
					<a class="github" href="https://github.com/codrops/GridLayoutMotion/" title="Find this project on GitHub"><svg class="icon icon--github"><use xlink:href="#icon-github"></use></svg></a>
				</header>
			</div> -->
			<div class="content">
				<div class="grid">
					<a class="grid__item" href="#preview-1">
						<div class="box">
							<div class="box__shadow"></div>
							<img class="box__img" src="img/insp.jpg" alt="Some image"/>
							<h3 class="box__title"><span class="box__title-inner" data-hover="WHY">WHY</span></h3>
				<h4 class="box__text"><span class="box__text-inner">Inspiration</span></h4>
				<div class="box__deco">&#10032;</div>
				<p class="box__content">"Modern challenges require young innovators"</p>
			</div>
			</a>
			<a class="grid__item" href="#preview-2">
				<div class="box">
					<div class="box__shadow"></div>
					<img class="box__img" src="img/theme1.jpg" alt="Some image" />
					<h3 class="box__title box__title--straight box__title--bottom"><span class="box__title-inner" data-hover="Solve">Solve</span></h3>
					<h4 class="box__text box__text--bottom"><span class="box__text-inner box__text-inner--rotated1">THEME</span></h4>
					<div class="box__deco box__deco--top">&#10115;</div>
				</div>
			</a>
			<a class="grid__item" href="#preview-3">
				<div class="box">
					<div class="box__shadow"></div>
					<img class="box__img" src="img/rule.jpg" alt="Some image" />
					<h3 class="box__title"><span class="box__title-inner" data-hover="Format">Format</span></h3>
					<h4 class="box__text box__text--topcloser"><span class="box__text-inner">Rules</span></h4>
					<div class="box__deco">&#10032;</div>
				</div>
			</a>

			<a class="grid__item" href="#preview-4">
				<div class="box">
					<div class="box__shadow"></div>
					<img class="box__img" src="img/one.jpg" alt="Some image" />
					<h3 class="box__title"><span class="box__title-inner" data-hover="Output">Output</span></h3>
					<h4 class="box__text box__text--bottom box__text--right"><span class="box__text-inner box__text-inner--rotated3">Result</span></h4>
				</div>
			</a>
			<a class="grid__item" href="#preview-5">
				<div class="box">
					<div class="box__shadow"></div>
					<img class="box__img" src="img/notepad.png" alt="Some image" />
					<h3 class="box__title"><span class="box__title-inner" data-hover="Eligibility">Eligibility</span></h3>
					<h4 class="box__text box__text--bottomcloser"><span class="box__text-inner">Me?</span></h4>
				</div>
			</a>
			<a class="grid__item" href="#preview-6">
				<div class="box">
					<div class="box__shadow"></div>
					<img class="box__img" src="img/checklist.png" alt="Some image" />
					<h3 class="box__title"><span class="box__title-inner" data-hover="Evaluation">Evaluation</span></h3>
					<h4 class="box__text"><span class="box__text-inner">Criteria</span></h4>
					<p class="box__content">"Innovation, Practicality, Sscalability"</p>
				</div>
			</a>
			<a class="grid__item" href="#preview-7">
				<div class="box">
					<div class="box__shadow"></div>
					<img class="box__img" src="img/amt2.jpg" alt="Some image" />
					<h3 class="box__title box__title--straight box__title--bottom"><span class="box__title-inner" data-hover="Fees">Fees</span></h3>
					<h4 class="box__text box__title--bottom"><span class="box__text-inner box__text-inner--rotated1">Cost</span></h4>
				</div>
			</a>
			<a class="grid__item" href="#preview-8">
				<div class="box">
					<div class="box__shadow"></div>
					<img class="box__img" src="img/prize1.jpg" alt="Some image" />
					<h3 class="box__title"><span class="box__title-inner" data-hover="Prizes">Prizes</span></h3>
					<h4 class="box__text box__text--bottom"><span class="box__text-inner">Rewards</span></h4>
					<div class="box__deco">&#10108;</div>
				</div>
			</a>

		</div>
	</div>
	<div class="overlay">
		<div class="overlay__reveal"></div>
		<div class="overlay__item" id="preview-1">
			<div class="box">
				<div class="box__shadow"></div>
				<img class="box__img box__img--original" src="img/insp.jpg" alt="Some image" />
				<h3 class="box__title"><span class="box__title-inner">WHY</span></h3>
				<h4 class="box__text"><span class="box__text-inner">INSPIRATION</span></h4>
				<div class="box__deco">&#10032;</div>
			</div>
			<p class="overlay__content">
				<ul class="overlay__content">
					<li><strong>Ignite: </strong>We believe makeathon@DexteriX will ignite a spark that would evolve into the solution the world needs.</li>
					<li><strong>Collaborate:</strong> makeathon@DexteriX introduces you to smart like-minded people across Bengaluru.</li>
					<li><strong>Share:</strong> We believe everyone will take back a smart solution that will bring change not only to their lives but also their friends and family. </li>
				</ul>

			</p>
		</div>
		<div class="overlay__item" id="preview-2">
			<div class="box">
				<div class="box__shadow"></div>
				<img class="box__img box__img--original" src="img/theme1.jpg" alt="Some image" />
				<h3 class="box__title box__title--straight box__title--bottom"><span class="box__title-inner">THEME</span></h3>
				<h4 class="box__text box__text--bottom"><span class="box__text-inner box__text-inner--rotated1">Problems</span></h4>
				<div class="box__deco box__deco--top">&#10115;</div>
			</div>
			<p class="overlay__content">

				<strong>Assistive Technology: </strong> Build practical and innovative prototypes that help the differently-abled in their day-to-day lives.<br />
				<strong>Campus Solutions :</strong> Build effective solutions to your college Campus <br />
				<strong> Solve for Bangalore :</strong> Traffic, parking, pollution, waste management or anything in general. <br />


			</p>
		</div>
		<div class="overlay__item" id="preview-3">
			<div class="box">
				<div class="box__shadow"></div>
				<img class="box__img box__img--original" src="img/rule.jpg" alt="Some image" />
				<h3 class="box__title"><span class="box__title-inner">Format</span></h3>
				<h4 class="box__text box__text--topcloser"><span class="box__text-inner">Rules</span></h4>
				<div class="box__deco">&#10032;</div>
			</div>
			<p class="overlay__content">MAKEATHON is a two day event that will stretch for a continuous 24 hours working period. The event begins on November 3rd, 2017, at 9:00 am and ends on November 4th, 2017 at 3:00 pm or at the conclusion of the judging period.</p>
		</div>
		<div class="overlay__item" id="preview-4">
			<div class="box">
				<div class="box__shadow"></div>
				<img class="box__img box__img--original" src="img/one.jpg" alt="Some image" />
				<h3 class="box__title"><span class="box__title-inner">Output</span></h3>
				<h4 class="box__text box__text--bottom box__text--right"><span class="box__text-inner box__text-inner--rotated3">Result</span></h4>
			</div>
			<p class="overlay__content">A model (prototype) and a Paper Presentation which supports sustainable living (eco-friendly) by providing solutions through technology.</p>
		</div>
		<div class="overlay__item" id="preview-5">
			<div class="box">
				<div class="box__shadow"></div>
				<img class="box__img box__img--original" src="img/original/6.jpg" alt="Some image" />
				<h3 class="box__title"><span class="box__title-inner">Who can</span></h3>
				<h4 class="box__text box__text--bottomcloser"><span class="box__text-inner">Eligibility</span></h4>
			</div>
			<p class="overlay__content">

				The event is open to all students across various branches of engineering and to PUC Students. The specifics will be mailed to the participants after registration.<br /> We encourage students of all domains and interest to collaborate on this platform,
				students from different colleges can also form teams.
			</p>
		</div>
		<div class="overlay__item" id="preview-6">
			<div class="box">
				<div class="box__shadow"></div>
				<img class="box__img box__img--original" src="img/original/7.jpg" alt="Some image" />
				<h3 class="box__title"><span class="box__title-inner">Evaluation</span></h3>
				<h4 class="box__text"><span class="box__text-inner">Criteria</span></h4>
			</div>
			<p class="overlay__content">Innovation <br /> Scalability <br /> Pitch/Presentation</p>
		</div>
		<div class="overlay__item" id="preview-7">
			<div class="box">
				<div class="box__shadow"></div>
				<img class="box__img box__img--original" src="img/amt2.jpg" alt="Some image" />
				<h3 class="box__title box__title--straight box__title--bottom"><span class="box__title-inner">Cost</span></h3>
				<h4 class="box__text box__title--bottom"><span class="box__text-inner box__text-inner--rotated1">Fees</span></h4>
			</div>
			<p class="overlay__content">Registration fees of 500rs per team</p>
		</div>
		<div class="overlay__item" id="preview-8">
			<div class="box">
				<div class="box__shadow"></div>
				<img class="box__img box__img--original" src="img/prize1.jpg" alt="Some image" />
				<h3 class="box__title"><span class="box__title-inner">Prizes</span></h3>
				<h4 class="box__text box__text--bottom"><span class="box__text-inner">Rewards</span></h4>
				<div class="box__deco">&#10108;</div>
			</div>
			<p class="overlay__content">1st Prize: 20,000 rs <br /> 2nd Prize: 10,000 rs <br /> 3rd Prize: 5,000 rs
			 </p>
		</div>
		<button class="overlay__close"><svg class="icon icon--cross"><use xlink:href="#icon-cross"></use></svg></button>
	</div>

	</div>

	<!-- footer -->
	<footer id="foot" class="footer-distributed" style="background-color: !important#000;">

		<div class="footer-left">

			<h3>Dexterix 2018</h3>

			<p class="footer-links">
				<a href="../index.html">Home</a> 路

				<a href="../about-us.html">About</a> 路

				<a href="../contact-us.html">Contact</a>
			</p>

			<p class="footer-company-name">Dexterix &copy; 2018</p>
		</div>

		<div class="footer-center">

			<div>
				<i class="fa fa-map-marker"></i>
				<p style="font-size:14px;"><span>ASKB Campus, 1st Main Road, AGS Colony </span> Anand Nagar, Bengaluru, Karnataka 560024</p>
			</div>

			<div>
				<i class="fa fa-phone"></i>
				<p>Akshay: +91 78294 72014</p>

			</div>
			<div>
				<i class="fa fa-phone"></i>
				<p>Vamshitha: +91 99867 96949</p>
			</div>
			<div>
				<i class="fa fa-phone"></i>
				<p>Sumith: +91 80507 10643</p>
			</div>


			<div>
				<i class="fa fa-envelope"></i>
				<p><a style="color:#424242;" href="mailto:support@dexterix.com">support@dexterix.com</a></p>
			</div>

		</div>

		<div class="footer-right">

			<p class="footer-company-about" style="color:#424242;">
				<span>Atria Institute of Technology</span> Vision: To be a Premier technical institution providing best in class learning solutions in developing competent professionals.
			</p>

			<div class="footer-icons">

				<a href="https://www.facebook.com/code.ait/"><i class="fa fa-facebook"></i></a>
				<a href="https://twitter.com/DexteriX2k17"><i class="fa fa-twitter"></i></a>
				<a href="https://www.instagram.com/dexterix2k17/"><i class="fa fa-instagram"></i></a>

			</div>

		</div>

	</footer>


	<!-- footer end-->
	<script src="js/basic_land.js"></script>
	<script src="js/three.min.js"></script>
	<script src="js/demo6.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/TweenMax.min.js"></script>
	<script src="js/demo.js"></script>

</body>

</html>
