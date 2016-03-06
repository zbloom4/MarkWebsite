<!DOCTYPE html>
<html lang="en">
<head>
	<title>Community Integration Network</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content=""/>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- bootstrap.min -->
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <!-- bootstrap.min -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- bootstrap.min -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- bootstrap.min -->
    <link rel="stylesheet" href="css/slit-slider.css">
    <!-- bootstrap.min -->
    <link rel="stylesheet" href="css/animate.css">
</head>
<body>

	<header class="trasparent_nav">
		<div class="wrapper">
			<div class="logo">
				<a href="#"><img src="img/logo.png" alt="Fertile" style="margin-left: 50px"></a>
                <br>
                Community Integration Network
			</div>

			<nav>
				<ul>
					<li><a href="#aboutUs">About Us</a></li>
					<li><a href="#ourWork">Our Work</a></li>
					{{--<li><a href="#testimonials">Testimonials</a></li>--}}
					<li><a href="#employment">Employment</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header><!-- End trasparent_nav -->

	<header class="fixed_nav">
		<div class="wrapper">
			<div class="logo">
				<a href="#"><img src="img/logo.png" alt="Fertile" style="margin-left: 50px"></a>
			</div>

			<nav>
				<ul>
					<li><a href="#aboutUs">About Us</a></li>
					<li><a href="#ourWork">Our Work</a></li>
					{{--<li><a href="#">Testimonials</a></li>--}}
					<li><a href="#employment">Employment</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header><!-- End fixed_nav -->

	<section class="billboard">
		<img src="img/billboard.jpg" alt="" title=""/>
	</section><!-- End billboard -->

	<section class="cta cta_top">
		<p>Want to work for us?  Submit your resume!</p>
		<a href="#employment">Employment</a>
	</section><!-- End cta_top -->


	<section id="aboutUs" class="services wrapper">
			<h2>Supported Living Services</h2>
			<div class="separator">
				<img src="img/separator.png" alt=""/>
			</div>
			<ul>
				<li>
					<img class="s_icons" src="{{secure_asset('/img/home.png')}}" height="100px" width="100px"/>
					<h3>Assistance Services</h3>
					<p>Supported Living Services (SLS) consist of a broad range of services to adults with developmental disabilities who, through the Individual Program Plan (IPP) process, choose to live in homes they themselves own or lease in the community.</p>
				</li>

				<li>
					<img class="s_icons" src="{{secure_asset('/img/plan.png')}}" height="100px" width="100px"/>
					<h3>Future Planning</h3>
					<p>A personal support planning and assessment may be arranged to plan what types of support a person needs and/or desires to lead a self-determined life style while maintaining themselves safely and happily</p>
				</li>

				<li>
					<img class="s_icons" src="{{secure_asset('/img/community.png')}}" height="100px" width="100px"/>
					<h3>Community Support</h3>
					<p>Community support services occur primarily outside the consumer’s home. The focus is on facilitation, support and assistance to access the larger community, generic agencies, and local business resources</p>
				</li>
			</ul>
	</section><!-- End services -->

	    <!-- Contact section -->
    <section id="contact" style="margin-bottom: 40px">
        <div class="container">
            <div class="row">

                <div class="sec-title text-center wow animated fadeInDown" style="margin-top: 80px">
                    <h2>Contact</h2>
                    <p>Leave a Message</p>
                </div>


                <div class="col-md-12 contact-form wow animated fadeInLeft">
                    <form action="{{secure_url('/email')}}" method="post">
                        <div class="input-field">
                            <input type="text" name="name" class="form-control" placeholder="Your Name...">
                        </div>
                        <div class="input-field">
                            <input type="email" name="email" class="form-control" placeholder="Your Email...">
                        </div>
                        <div class="input-field">
                            <input type="text" name="subject" class="form-control" placeholder="Subject...">
                        </div>
                        <div class="input-field">
                            <textarea name="message" class="form-control" placeholder="Messages..."></textarea>
                        </div>
						<div class="input-field">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
						</div>
                        <button type="submit" id="submit" class="btn btn-blue btn-effect">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<!-- End services -->



    {{--<section class="ourWork">--}}
		{{--<div class="work">--}}
			{{--<a href=""><img src="img/w1.jpg" alt=""></a>--}}
		{{--</div>--}}
		{{--<div class="work">--}}
			{{--<a href=""><img src="img/w2.jpg" alt=""></a>--}}
		{{--</div>--}}
		{{--<div class="work">--}}
			{{--<a href=""><img src="img/w3.jpg" alt=""></a>--}}
		{{--</div>--}}
		{{--<div class="work">--}}
			{{--<a href=""><img src="img/w4.jpg" alt=""></a>--}}
		{{--</div>--}}
		{{--<div class="work">--}}
			{{--<a href=""><img src="img/w5.jpg" alt=""></a>--}}
		{{--</div>--}}
	{{--</section><!-- End recent_work -->--}}


	{{--<section class="testimonials wrapper">--}}
		{{--<h3>Testimonials</h3>--}}
		{{--<ul class="testi_boxs">--}}
			{{--<li>--}}
				{{--<img class="avatar" src="img/client1.jpg" alt=""/>--}}
				{{--<h2>David Doe <span class="client_job">/ Manager</span></h2>--}}
				{{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur sint occaecat cupidatat.</p>--}}
			{{--</li>--}}
			{{--<li>--}}
				{{--<img class="avatar" src="img/client2.jpg" alt=""/>--}}
				{{--<h2>David Doe <span class="client_job">/ UI Designer</span></h2>--}}
				{{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur sint occaecat cupidatat.</p>--}}
			{{--</li>--}}
			{{--<li>--}}
				{{--<img class="avatar" src="img/client3.jpg" alt=""/>--}}
				{{--<h2>David Doe <span class="client_job">/ SEO Expert</span></h2>--}}
				{{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur sint occaecat cupidatat.</p>--}}
			{{--</li>--}}
		{{--</ul>--}}
	{{--</section><!-- End testimonials -->--}}

    <!-- Contact section -->

	<section id="ourWork" class="services wrapper">
        <h2>Our Work</h2>
        <div class="separator">
            <img src="img/separator.png" alt=""/>
        </div>
        <ul>
            <li>
                <img class="s_icons" src="{{secure_asset('/img/user-male-icon.png')}}" height="100px" width="100px"/>

                <h3>Training and Habilitation Services</h3>
                <p>Services are typically furnished in the consumer’s home, focused on support in tasks vital to living in the community, but which the consumer cannot perform independently</p>
            </li>

            <li>
                <img class="s_icons" src="{{secure_asset('/img/emergencyicon.png')}}" height="100px" width="100px"/>
                <h3>24 Hour Emergency Assistance Service</h3>
            <p>On an individual basis, CIN will assist in designing a 24-hour emergency response system in a consumer’s residence. 24-hour emergency services are individually tailored to the strengths and capabilities of the consumer and responsive to both Urgent Assistance and Crisis Assistance needs</p>
            </li>

            <li>
                <img class="s_icons" src="{{secure_asset('/img/wheelchair.png')}}" height="100px" width="100px"/>
                <h3>Adaptive Equipment</h3>
                <p>Adaptive equipment services enable the individual to live in a supported living arrangement; to gain physical access to community services; to be mobile and have greater independence in the home of their choice and their community; and to have access to devices, controls and appliances that increase their productivity, independence and community integration</p>
            </li>
        </ul>
    </section>

    <section id="employment" style="margin-bottom: 40px">
        <div class="container">
            <div class="row">

                <div class="sec-title text-center wow animated fadeInDown" style="margin-top: 80px">
                    <h2>Employment</h2>
                    <p>Submit your resume</p>
                </div>


                <div class="col-md-12 contact-form wow animated fadeInLeft">
                    <form action="{{secure_url('/email')}}" method="post" files="true">
                        <div class="input-field">
                            <input type="text" name="name" class="form-control" placeholder="Your Name...">
                        </div>
                        <div class="input-field">
                            <input type="email" name="email" class="form-control" placeholder="Your Email...">
                        </div>
                        <div class="input-field">
                            <textarea name="message" class="form-control" placeholder="A little about yourself..."></textarea>
                        </div>
                        <div class="input-field">
                            <input type="file" name="resume" class="form-control">
                        </div>
                        <button type="submit" id="submit" class="btn btn-blue btn-effect">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

	<footer>
		<div class="wrapper">
			{{--<section class="cta cta_footer">--}}
				{{--<p>Want to work for us?  Submit your resume!</p>--}}
				{{--<a href="#employment">Submit Resume</a>--}}
			{{--</section>--}}

			<div class="footer_widget">
					<div class="f_cols">
						<h3>Location</h3>
						<p>1461 E. Cooley Drive, Ste. 260 Colton, CA<span class="phone">(909)825-7132</span></p>
					</div>	

					<div class="f_cols">
						<h3>Company</h3>
						<ul>
							<li><a href="#aboutUs">About Us</a></li>
							<li><a href="#ourWork">Our Work</a></li>
							<li><a href="#employment">Employment</a></li>
						</ul>
					</div>	

					<div class="f_cols">
						<h3>Support</h3>
						<ul>
							<li><a href="#contact">Contact Us</a></li>
						</ul>
					</div>	

					<div class="f_cols">
						<h3>Community Integration Network</h3>
						<p>Be Independent</p>
					</div>
			</div>

			<p class="rights">© 2014 Fertile  -  All Rights Reserved  -  Find more free Templates at <a href="http://pixelhint.com">Pixelhint.com</a></p>	

		</div>
	</footer><!-- End Footer -->

	        <script src='../ga.js'></script>
	</body>
</html>