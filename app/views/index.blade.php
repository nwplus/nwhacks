<!DOCTYPE html>
<html>
<head>
	<title>nwHacks 2015</title>
	<link rel="icon" href="favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css">
	<meta
		name="viewport"
		content="
      width=device-width,
      initial-scale=1,
      minimum-scale=1,
      maximum-scale=1
    "
		/>
</head>

<body>
<header>
	<div class="grid-container">
		<div class="prefix-30 grid-40 suffix-30 tablet-prefix-20 tablet-grid-60 tablet-suffix-20" id="hero">
			<div class="text">
				<h2>Build</h2><h3>Community</h3>
				<h2>Build</h2><h3>Hacks</h3>
			</div>
			<img src="img/logo_notxt.png" alt="logo">

			<div class="clear"></div>
			<button>Pre-Register Now</button>
			<form style="display:none;">
				<div class="grid-container">
					<input class="grid-50 tablet-grid-50 mobile-grid-100" type="text" name="first_name" placeholder="First Name" required />
					<input class="grid-50 tablet-grid-50 mobile-grid-100" type="text" name="last_name" placeholder="Last Name" required />
				</div>
				<div class="grid-container">
					<input class="grid-100 tablet-grid-100 mobile-grid-100" type="text" name="school" placeholder="School or Institution" required pattern=".{4,}" />
				</div>
				<div class="grid-container">
					<input class="grid-100 tablet-grid-100 mobile-grid-100" type="email" name="email" placeholder="Email" required/>
				</div>
				<div class="grid-container">
					<input type="submit" value="Submit!" />
				</div>
			</form>
			<a id="sponsor-btn" href="sponsor.html">Sponsor Us</a>
		</div>

		<div class="triangle"><img class="small" src="img/darkgreentriangle.png" alt=""><img class="big"
		                                                                                     src="img/lightgreentriangle.png"
		                                                                                     alt=""></div>
	</div>
</header>

<section id="intro">

	<div class="date">
		<time datetime="2015-01-09">
			<span class="month">January</span>
			<span class="day">9-11<sup>th</sup></span>
			<br>
			<span class="year">2015</span>
		</time>
	</div>
	<article class="grid-container">
		<h2 class="grid-100">THIS IS nwHACKS.</h2>

		<p class="grid-70 suffix-30 tablet-grid-70 tablet-suffix-30 mobile-grid-90 mobile-suffix-10">
			nwHacks is the more than just coding. Our event is about growing and connecting the community of awesome developers in the Pacific Northwest, to ship cool hacks long after January 11th!
			<br>
			<br> 
			Anyone and everyone is welcome at nwHacks, from hackathon veterans to first-timers!
		</p>
	</article>
	<div class="triangle"><img class="small" src="img/darkgreentriangleR.png" alt=""><img class="big"
	                                                                                      src="img/lightgreentriangleR.png"
	                                                                                      alt=""></div>
</section>

<section id="stats" class="grid-container">
	<ul class="grid-container">
		<li class="grid-33 tablet-grid-33">
			<dt>300+</dt>
			<dd>Hackers</dd>
		</li>
		<li class="grid-33 tablet-grid-33">
			<dt>48</dt>
			<dd>Hours</dd>
		</li>

		<li class="grid-33 tablet-grid-33">
			<dt>$2,500</dt>
			<dd>In Prizes</dd>
		</li>
	</ul>
</section>

<section id="sponsors">
	<article class="grid-container">
		<h2 class="">Sponsors</h2>

		<div class="sponsor prefix-20 grid-60 suffix-20 tablet-prefix-20 tablet-grid-60 tablet-suffix-20 gold"><h3>Your
				Company Here</h3></div>
		<div class="sponsor grid-50 tablet-grid-50 silver"><h3>Your Company Here</h3></div>
		<div class="sponsor grid-50 tablet-grid-50 silver"><h3>Your Company Here</h3></div>
		<div class="sponsor grid-25 tablet-grid-25 mobile-grid-50 bronze"><h3>Your Company Here</h3></div>
		<div class="sponsor grid-25 tablet-grid-25 mobile-grid-50 bronze"><h3>Your Company Here</h3></div>
		<div class="sponsor grid-25 tablet-grid-25 mobile-grid-50 bronze"><h3>Your Company Here</h3></div>
		<div class="sponsor grid-25 tablet-grid-25 mobile-grid-50 bronze"><h3>Your Company Here</h3></div>
		<div class="sponsor grid-25 tablet-grid-25 mobile-grid-50 bronze"><h3>Your Company Here</h3></div>
		<div class="sponsor grid-25 tablet-grid-25 mobile-grid-50 bronze"><h3>Your Company Here</h3></div>
		<div class="sponsor grid-25 tablet-grid-25 mobile-grid-50 bronze"><h3>Your Company Here</h3></div>
		<div class="sponsor grid-25 tablet-grid-25 mobile-grid-50 bronze"><h3>Your Company Here</h3></div>
	</article>
</section>

<section id="faq">
	<div class="grid-container">
		<h2>Frequently Asked Questions</h2>
	</div>
	<nav class="grid-container tabs">
		<a href="#faq-general" class="activetab">General</a>
		<a href="#faq-students">Participation</a>
		<a href="#faq-sponsors">Sponsorship</a>
	</nav>

	<article id="faq-general" class="grid-container grid-parent active">
		<div class="question grid-50 tablet-grid-50">
			<h3>Why <em>nw</em>Hacks?</h3>

			<p>British Columbia, Washington State, Oregon, and Alberta are currently seen as transit stations for tech companies. Designers, engineers, and business minds all flow down to California and shortly after university graduation. We want to change that.
			<br>
			<br>
			nwHacks is dedicated to creating a thriving community of technology lovers in the Pacific Northwest region by bringing together the brightest minds for an epic two day event.</p>
		</div>
		<div class="question grid-50 tablet-grid-50">
			<h3>What is a "hackathon"?</h3>

			<p>A hackathon is an event where teams of 2-5 people collaborate on an application within the specified time
				limit (nwHacks is 48 hours long). Prizes are awarded to the most creative, polished and theme-specific
				projects or "hacks". The winners will be chosen by a panel of judges comprised of top industry
				professionals.</p>
		</div>
		<div class="question grid-50 tablet-grid-50">
			<h3>How can I officially sign up?</h3>

			<p>Official registration for nwHacks 2015 isn't open yet, but you can submit your email <a href="#hero">here</a>
				to get updates as soon as they arrive.</p>
		</div>

	</article>

	<article id="faq-students" class="grid-container grid-parent">
		<div class="question grid-50 tablet-grid-50">
			<h3>What should I bring?</h3>

			<p>nwHacks is a 48hour event, which means that hackers should be prepared to sleep overnight at the venue.
				Be sure to bring everything you need to stay the night, including a sleeping bag! All food will be
				provided at event so don't worry about that!</p>
		</div>
		<div class="question grid-50 tablet-grid-50">
			<h3>How much does it cost?</h3>

			<p>nwHacks is 100% free for all participants. However registration is strictly limited to <b>highschool and
					college students only</b>. We will also reimburse your travel expensives as long as they are not
				flights and are within a 200km radius of the event. We are also setting up buses from Seattle, Portland,
				and Victoria ( maybe Calgary) so definitely check that out as we get closer to the start date!</p>
		</div>
		<div class="question grid-50 tablet-grid-50">
			<h3>Can I work on my previous projects?</h3>

			<p>No, all "hacks" must be built from scratch, although it is ok if you came up with the idea before hand.
				This rule is strictly adhered to at nwHacks and any team found working on a project that they already
				started will be automatically disqualified in the event. However this does not apply to any libraries or
				tools that you have made, so feel free to use libraries and anyother code!</p>
		</div>
		<div class="question grid-50 tablet-grid-50">
			<h3>How big can my team be?</h3>

			<p>Teams are usually 2-5 people in size. Teams bigger than 5 people are usually split up into smaller ones,
				as we've found large teams aren't the best solution for a 48h event. Don't worry if you can't find your
				team beforehand, staff at the event will help you find other team mates and provide you with many
				opportunities to find others to help!</p>
		</div>
        <div class="question grid-50 tablet-grid-50">
            <h3>What happens if I don't have a team?</h3>

            <p>Don't worry! A lot of hackers just like you are in the same position. On January 9th, the first day of the event, we will make sure to pair everyone up with a team of hackers so no one gets left out! There will also be an opportunity to connect with people and form teams before the event (after you have been chosen to attend)</p>
        </div>

	</article>

	<article id="faq-sponsors" class="grid-container grid-parent">
		<div class="question grid-50 tablet-grid-50">
			<h3>Where is the sponsorship package?</h3>

			<p>It can be found right <a href="sponsor.html">here</a>.</p>
		</div>
		<div class="question grid-50 tablet-grid-50">
			<h3>How do I get in touch for sponsorship opportunities?</h3>

			<p>The best way to get in touch is email us at sponsors@nwhacks.com. We're pretty busy but you can expect a
				response in about 48 hours.</p>
		</div>
		<div class="question grid-50 tablet-grid-50">
			<h3>Does my company have to be based in the Pacific NorthWest to become a sponsor?</h3>

			<p>Definitely not! We welcome sponsors from across the world to help with our event, although it generally
				helps if you have an office or presence in the region.</p>
		</div>
	</article>

</section>

<footer class="grid-parent">
	<nav class="grid-container">
		<!--<a href="#">Register</a>--> <a href="mailto:david@nwhacks.com">Become a Sponsor</a> <a href="mailto:david@nwhacks.com">Email us</a>
	</nav>
	<p class="grid-container">nwhacks 2015 - Organised and held by <a href="https://www.startupstorm.org/" target="_blank">StartupStorm</a>
	</p>

	<div class="imgcont"><img class src="img/logotxt.png" alt=""></div>

</footer>

<script src="js/min/scripts.min.js"></script>


</body>
</html>
