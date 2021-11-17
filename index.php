
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Sales-Hub</title>
	<meta name="description" content="The new sales platform to turbocharge your business." />
	<link rel="icon" type="image/x-icon" href="./img/favicon.ico" />
	<link rel="stylesheet" href="./fonts.css" />
	<link rel="stylesheet" href="./styles.css" />
	<script>
		/**
		 * Recaptcha
		 */
		var renderRecaptcha = function () {
			grecaptcha.render("recaptcha-container", {
				sitekey: "6Lf8HRIdAAAAAJ_kQNu6Qulu7e6hWHdzBQBoYBF7"
			});
		};
	</script>
</head>

<body>
	<div>
		<a href="#" class="sh-telephone-message-button sh-show-contact-form">
			<img src="icons/telephone-message.svg" alt="" />
		</a>

		<nav class="sh-top-navbar">
			<a href="#" class="sh-nav-logo">
				<img class="sh-sales-hub-logo" src="icons/enterprise-logo.svg" alt="Sales-Hub Logo" />
			</a>
			<span class="sh-nav-links">
				<a href="#contact" class="sh-nav-link">Contact</a>
				<a href="#pricing" class="sh-nav-link">Pricing</a>
				<a href="#" class="sh-nav-link sh-button sh-show-contact-form">Login</a>
			</span>
		</nav>

		<section id="brand" class="sh-section-1">
			<!-- <img class="sh-section-background" src="img/blue-half-trapezoid.png" alt="Background" /> -->
			<div class="sh-section-background"></div>
			<div class="sh-group-1">
				<div class="sh-icon-group-container">
					<figure class="sh-main-icon-group">
						<img class="news-paper-icon" src="icons/news-paper.svg" alt="news paper Icon" />
						<img class="sh-icon" src="icons/sh-icon.svg" alt="SH Icon" />
						<img class="sh-paper" src="icons/sh-paper.svg" alt="SH Paper Icon" />
						<img class="sh-white-circle" src="icons/sh-circle.svg" alt="SH White Circle Icon" />
						<img class="sh-blue-paper" src="icons/blue-paper.svg" alt="Blue Paper" />
						<img class="sh-white-paper" src="icons/white-paper.svg" alt="White Paper" />
						<img class="sh-dashboard-icon" src="icons/yellow-shadow.svg" alt="Dashboard Screen" />
						<img class="sh-search-bar" src="icons/search-bar.svg" alt="Dashboard Screen" />
						<img class="sh-chart-icon" src="icons/chart-icon.svg" alt="Dashboard Screen" />
						<img class="chat-icon" src="icons/chat-icon.svg" alt="Dashboard Screen" />
						<img class="women-icon" src="icons/women.svg" alt="Dashboard Screen" />
						<div class="sh-circle sh-light-red-circle sh-hide-on-mobile"></div>
					</figure>
				</div>

				<div class="sh-section-title-group">
					<h1 class="sh-page-title">
						<!-- <img class="main-logo" src="icons/enterprise-logo-big.svg" alt="Enterprise logo"> -->
						<img class="main-logo" src="icons/sh-logo.svg" alt="enterprise logo">
					</h1>

					
				</div>
			</div>

			<figure class="sh-side-decoration">
				<div class="sh-circle sh-orange-circle sh-hide-on-desktop"></div>
				<img class="sh-checkbox-icon" src="icons/checked-box-icon.svg" alt="Checkbox Icon" />
			</figure>
		</section>

		<section id="accelerate" class="sh-section-2">
			<h2 class="sh-section-title">Accelerate your business with Sales-Hub.</h2>
		</section>

		<section id="simplify" class="sh-section-3">
			<div class="sh-sub-section sh-simplify-operations-section">
				<div class="sh-information-panel">
					<h2 class="sh-sub-section-title">Innovative features that maximize your links and business.</h2>
					<div class="buttons_3">
						<li class="show-room-selector active">
							<button data-index="0" class="sh-button singleBtn show-room-link">Multiple Domains</button>
						</li>
						<li class="show-room-selector">
							<button data-index="1" class="sh-button singleBtn show-room-link">Real-Time Tracking</button>
						</li>
						<li class="show-room-selector">
							<button data-index="2" class="sh-button singleBtn show-room-link">Workspaces</button>
						</li>
					</div>
				</div>
			</div>
			<div id="show-room" class="sh-section">
				<div class="show-room-body">
					<div class="show-room-section active" data-index="0">
						<div class="show-room-section-image-container">
							<img class="show-room-image" src="icons/computer-domains.svg" alt="Dashboard" />
						</div>
						<div class="show-room-section-text-container">
							<h5 class="show-room-section-title" style="color: #D62D39; font-size: 42px;">Multiple Custom Domains</h5>
							<p class="show-room-section-description">
								Create, shorten and manage your own branded domains easily in one place.
							</p>
							<a href="#" class="sh-button sh-login-button sh-show-contact-form">
								Schedule Your Demo
							</a>
						</div>
						
					</div>
					<div class="show-room-section" data-index="1">
						<div class="show-room-section-image-container">
							<img class="show-room-image" src="icons/empty-pc.svg" alt="Dashboard" />
							<img class="white-frames" src="icons/Frame.svg" alt="Dashboard" />
							<img class="click-here" src="icons/click-here.svg" alt="Dashboard" />
							<img class="cursor-pointer" src="icons/cursor.svg" alt="Dashboard" />
						</div>
						<div class="show-room-section-text-container" style="margin-top: 19%;">
							<h3 class="show-room-section-title" style="color: #D62D39; font-size: 42px;">Real-Time Click Tracking</h3>
							<p class="show-room-section-description">
								Track and analyze your link clicks. Identify and understand your audience with detailed insights.
							</p>
							<a href="#" class="sh-button sh-login-button sh-show-contact-form">
								Schedule Your Demo
							</a>
						</div>
					</div>
					<div class="show-room-section" data-index="2">
						<div class="show-room-section-image-container">
							<img class="show-room-image" src="icons/man-on-pc.svg" alt="Dashboard" />
						</div>
						<div class="show-room-section-text-container" style="margin-top: 19%;">
							<h3 class="show-room-section-title" style="color: #D62D39; font-size: 42px;">Workspaces for Teams</h3>
							<p class="show-room-section-description">
								Invite your team members into the workspace and manage your links in a more efficient way.
							</p>
							<a href="#" class="sh-button sh-login-button sh-show-contact-form">
								Schedule Your Demo
							</a>
						</div>
					</div>
				</div>
			</div>
			
		</section>

		<section id="accelerate" class="sh-section-2-1">
			<h2 class="sh-section-title">Connect and simplify your day-to-day operations</h2>
			<h2 class="sh-section-subtitle">Our link management solution integrates with the tools you love, so you can automate your work and focus on what matters</h2>
			<div class="circles">
				<img src="icons/orange-circle.svg" alt="">
				<img src="icons/pink-circle.svg" alt="">
				<img src="icons/blue-circle.svg" alt="">
				<img src="icons/orange-circle.svg" alt="">
				<img src="icons/pink-circle.svg" alt="">
				<img src="icons/blue-circle.svg" alt="">
			</div>
		</section>	

		<section id="accelerate" class="sh-section-2-2">
			<h2 class="sh-section-title">Take your links to a whole new level</h2>
		</section>

		<section id="pricing" class="sh-section-4">
			<div class="sh-sub-section sh-plans-that-scale-section">
				<div class="sh-price-box-desktop-container">
					<figure class="sh-price-card base-price">
						<div class="sh-price-card-head"></div>
						<div class="sh-price-card-body">
							<h5 class="sh-price-card-name">Base</h5>
							<div class="sh-price-card-price">
								<!-- PRICE VALUES -->
								<span class="dollars">$24</span>
								<span class="cents">.99</span>
								<span class="append">month</span>
							</div>

							<div class="sh-price-card-billing">
								<!-- TOTAL PRICE VALUE AND BILLING -->
								<h5 class="sh-price-value">Total $23.99/month</h5>
								<h5 class="sh-billing">Billed anually</h5>
							</div>

							<!-- LOGIN BUTTON -->
							<a href="#" class="sh-button sh-login-button sh-show-contact-form">
								Schedule a Demo
							</a>

							<!-- INCLUDES -->
							<div class="sh-price-card-includes">
								<h5 class="sh-price-card-includes-title">Base includes:</h5>
								<ul>
									<li>Agent Level Account</li>
									<li>Payroll</li>
									<li>Individual Reports</li>
									<li>Scanner</li>
								</ul>
							</div>
						</div>
					</figure>

					<figure class="sh-price-card manager-price">
						<div class="sh-price-card-head"></div>
						<div class="sh-price-card-body">
							<h5 class="sh-price-card-name">Manager</h5>
							<div class="sh-price-card-price">
								<!-- PRICE VALUES -->
								<span class="dollars">$44</span>
								<span class="cents">.99</span>
								<span class="append">month</span>
							</div>

							<div class="sh-price-card-billing">
								<!-- TOTAL PRICE VALUE AND BILLING -->
								<h5 class="sh-price-value">Total $42.99/month</h5>
								<h5 class="sh-billing">Billed anually</h5>
							</div>

							<!-- LOGIN BUTTON -->
							<a href="#" class="sh-button sh-login-button sh-show-contact-form">
								Schedule a Demo
							</a>

							<!-- INCLUDES -->
							<div class="sh-price-card-includes">
								<h5 class="sh-price-card-includes-title">Manager includes:</h5>
								<ul>
									<li>Manager Level Account</li>
									<li>Payroll</li>
									<li>Team Reports</li>
									<li>Scanner</li>
									<li>1 Team</li>
									<li>1 Campaign</li>
								</ul>
							</div>
						</div>
					</figure>

					<figure class="sh-price-card enterprise-price">
						<div class="sh-price-card-head"></div>
						<div class="sh-price-card-body">
							<h5 class="sh-price-card-name">Enterprise</h5>
							<div class="sh-price-card-price">
								<!-- PRICE VALUES -->
								<span class="dollars">$79</span>
								<span class="cents">.99</span>
								<span class="append">month</span>
							</div>

							<div class="sh-price-card-billing">
								<!-- TOTAL PRICE VALUE AND BILLING -->
								<h5 class="sh-price-value">Total $76.99/month</h5>
								<h5 class="sh-billing">Billed anually</h5>
							</div>

							<!-- LOGIN BUTTON -->
							<a href="#" class="sh-button sh-login-button sh-show-contact-form">
								Schedule a Demo
							</a>

							<!-- INCLUDES -->
							<div class="sh-price-card-includes">
								<h5 class="sh-price-card-includes-title">Base includes:</h5>
								<ul>
									<li>Enterprise Level Account</li>
									<li>Payroll</li>
									<li>Team Reports</li>
									<li>Scanner</li>
									<li>10 Team</li>
									<li>10 Campaign</li>
								</ul>
							</div>
						</div>
					</figure>
				</div>
				<div class="sh-price-box-mobile-container sh-carousel-wrapper">
					<div class="sh-carousel-selector-container">
						<a href="#" class="sh-carousel-selector sh-button active" data-slide="0">Basic</a>
						<a href="#" class="sh-carousel-selector sh-button" data-slide="1">Manager</a>
						<a href="#" class="sh-carousel-selector sh-button" data-slide="2">Enterprise</a>
					</div>
					<div class="sh-carousel">
						<figure class="sh-price-card sh-carousel__photo initial">
							<div class="sh-price-card-head base-price"></div>
							<div class="sh-price-card-body base-price">
								<h5 class="sh-price-card-name">Base</h5>
								<div class="sh-price-card-price">
									<!-- PRICE VALUES -->
									<span class="dollars">$24</span>
									<span class="cents">.99</span>
									<span class="append">month</span>
								</div>

								<div class="sh-price-card-billing">
									<!-- TOTAL PRICE VALUE AND BILLING -->
									<h5 class="sh-price-value">Total $23.99/month</h5>
									<h5 class="sh-billing">Billed anually</h5>
								</div>

								<!-- LOGIN BUTTON -->
								<a href="#" class="sh-button sh-login-button sh-show-contact-form">
									Schedule a Demo
								</a>

								<!-- INCLUDES -->
								<div class="sh-price-card-includes">
									<h5 class="sh-price-card-includes-title">Base includes:</h5>
									<ul>
										<li>Agent Level Account</li>
										<li>Payroll</li>
										<li>Individual Reports</li>
										<li>Scanner</li>
									</ul>
								</div>
							</div>
						</figure>

						<figure class="sh-price-card sh-carousel__photo">
							<div class="sh-price-card-head manager-price"></div>
							<div class="sh-price-card-body manager-price">
								<h5 class="sh-price-card-name">Manager</h5>
								<div class="sh-price-card-price">
									<!-- PRICE VALUES -->
									<span class="dollars">$44</span>
									<span class="cents">.99</span>
									<span class="append">month</span>
								</div>

								<div class="sh-price-card-billing">
									<!-- TOTAL PRICE VALUE AND BILLING -->
									<h5 class="sh-price-value">Total $42.99/month</h5>
									<h5 class="sh-billing">Billed anually</h5>
								</div>

								<!-- LOGIN BUTTON -->
								<a href="#" class="sh-button sh-login-button sh-show-contact-form">
									Schedule a Demo
								</a>

								<!-- INCLUDES -->
								<div class="sh-price-card-includes">
									<h5 class="sh-price-card-includes-title">Manager includes:</h5>
									<ul>
										<li>Manager Level Account</li>
										<li>Payroll</li>
										<li>Team Reports</li>
										<li>Scanner</li>
										<li>1 Team</li>
										<li>1 Campaign</li>
									</ul>
								</div>
							</div>
						</figure>

						<figure class="sh-price-card sh-carousel__photo">
							<div class="sh-price-card-head enterprise-price"></div>
							<div class="sh-price-card-body enterprise-price">
								<h5 class="sh-price-card-name">Enterprise</h5>
								<div class="sh-price-card-price">
									<!-- PRICE VALUES -->
									<span class="dollars">$79</span>
									<span class="cents">.99</span>
									<span class="append">month</span>
								</div>

								<div class="sh-price-card-billing">
									<!-- TOTAL PRICE VALUE AND BILLING -->
									<h5 class="sh-price-value">Total $76.99/month</h5>
									<h5 class="sh-billing">Billed anually</h5>
								</div>

								<!-- LOGIN BUTTON -->
								<a href="#" class="sh-button sh-login-button sh-show-contact-form">
									Schedule a Demo
								</a>

								<!-- INCLUDES -->
								<div class="sh-price-card-includes">
									<h5 class="sh-price-card-includes-title">Base includes:</h5>
									<ul>
										<li>Enterprise Level Account</li>
										<li>Payroll</li>
										<li>Team Reports</li>
										<li>Scanner</li>
										<li>10 Team</li>
										<li>10 Campaign</li>
									</ul>
								</div>
							</div>
						</figure>
					</div>
					<div class="sh-carousel-indicator-container">
						<span class="sh-carousel-indicator sh-light-red-circle active" data-slide="0"></span>
						<span class="sh-carousel-indicator sh-light-red-circle" data-slide="1"></span>
						<span class="sh-carousel-indicator sh-light-red-circle" data-slide="2"></span>
					</div>
				</div>
			</div>

			<div class="sh-circle sh-orange-circle"></div>
			<div class="sh-circle sh-blue-circle"></div>
		</section>

		<section id="get-started" class="sh-section-4-1">
			<img class="chartIcon" src="icons/chart-icon.svg" alt="Chart Icon">
			<h2 class="sh-section-title">Take your links to a whole new level</h2>
			<button class="getStartedBtn">Get Started</button>
			<img class="sh-icon" src="icons/sh-icon.svg" alt="SH Icon">
			<img class="sh-paper" src="icons/sh-paper.svg" alt="White Paper Icon">
			<img class="sh-white-circle" src="icons/sh-circle.svg" alt="White Circle Icon">
		</section>

		<!-- <section id="contact" class="sh-section-5">
			<h2 class="sh-section-title">Start boosting your business.</h2>
			<p class="sh-section-description">
				Join the pros using <br class="sh-hide-on-desktop" />
				<a href="#" class="sh-light-red">sales-hub.com</a>
			</p>

			<div class="sh-contact-us-button-container">
				<a href="#" class="sh-contact-us-button sh-button sh-show-contact-form">Contact Us Now</a>
			</div>
			<div class="sh-client-logos-container">
				<img class="sh-excess-telecom-logo" src="icons/excess-telecom.svg" alt="Excess Telecom" />
				<img class="sh-solar-energy-solutions-logo" src="img/solar-energy-solutions.png"
					alt="Solar Energy Solutions" />
				<img class="sh-we-propel-logo" src="img/we-propel-logo.svg" alt="We Propel" />
			</div>
		</section>

		<section id="step-forward" class="sh-section-6">
			<h2 class="sh-section-title">Take a step forward.</h2>
			<h3 class="sh-section-subtitle">Try Sales-Hub today.</h3>
			<a href="#" class="sh-button sh-watch-demo">Watch demo</a>
		</section> -->

		<section id="watch-demo" class="sh-bottom-navbar">
			<div class="sh-bottom-navbar-icon-links">
				<div class="sh-image-container">
					<a href="#">
						<img class="sh-sales-hub-logo" src="icons/sales-hub-logo.svg" alt="Sales-Hub Logo" />
					</a>
				</div>
			</div>

			<div class="sh-bottom-navbar-links">
				<div class="sh-bottom-navbar-link">
					<a href="#" class="sh-show-contact-form">Schedule a Demo</a>
				</div>
				<div class="sh-bottom-navbar-link">
					<a href="#">About us</a>
				</div>
				<div class="sh-bottom-navbar-link">
					<a href="#contact">Contact Us</a>
				</div>
				<div class="sh-bottom-navbar-link">
					<a href="#pricing">Pricing</a>
				</div>
				<div class="sh-bottom-navbar-link">
					<a href="#">What's new?</a>
				</div>
			</div>
		</section>

		<footer class="sh-footer">
			<div class="sh-footer-links">
				<a href="https://www.facebook.com/saleshuberp" class="sh-footer-link" target="_blank">
					<img src="icons/facebook-icon.svg" alt="Facebook" />
				</a>
				<a href="https://www.instagram.com/saleshuberp/" class="sh-footer-link" target="_blank">
					<img src="icons/instagram-icon.svg" alt="Instagram" />
				</a>
				<a href="https://twitter.com/saleshuberp/" class="sh-footer-link" target="_blank">
					<img src="icons/twitter-icon.svg" alt="Twitter" />
				</a>
				<a href="https://www.linkedin.com/company/saleshuberp" class="sh-footer-link" target="_blank">
					<img src="icons/linkedin-icon.svg" alt="LinkedIn" />
				</a>
			</div>
			<h3 class="sh-copyright">© COPYRIGHT 2021 • SALES-HUB</h3>
		</footer>

		<div id="video-modal" class="sh-demo-video-container">
			<div class="sh-demo-video">
				<a class="close">
					<img src="img/close-button.png" alt="Close" />
				</a>
				<video src="video/video.mp4" controls="play"></video>
			</div>
		</div>

		<div id="contact-modal">
			<div class="sh-contact-container">
				<a class="close"> &times; </a>
				<h5 class="sh-contact-title">Contact Us</h5>
				<form id="contact-form" class="sh-contact-form">
					<div class="sh-form-group">
						<label for="contact-name">Name</label>
						<input id="contact-name" type="text" name="name" required />
					</div>
					<div class="sh-form-group">
						<label for="contact-email">Email</label>
						<input id="contact-email" type="email" name="email"
							oninvalid="this.setCustomValidity('The email you entered is invalid')"
							oninput="this.setCustomValidity('')" required />
					</div>
					<div class="sh-form-group">
						<label for="contact-phone-number">Phone Number</label>
						<input id="contact-phone-number" type="tel" name="phone_number" placeholder="(___) ___-____"
							pattern="\([\d]{3}\)\s[\d]{3}-[\d]{4}"
							oninvalid="this.setCustomValidity('The phone number you entered is invalid')"
							oninput="this.setCustomValidity('')" required />
					</div>
					<div id="recaptcha-container"></div>
					<button type="submit" class="sh-button sh-submit">Submit</button>
				</form>
				<div class="sh-contact-response">
					<h4 class="sh-contact-response-title">
						We have received your information!<br />We will be in touch with you soon!
					</h4>
				</div>
			</div>
		</div>
	</div>

	<script src="app.js"></script>
	<script src="https://www.google.com/recaptcha/api.js?onload=renderRecaptcha&render=explicit" async defer></script>
</body>

</html>