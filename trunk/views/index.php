<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->localize('en'); ?>">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="Content-Language" content="<?php echo $this->localize('en'); ?>"/>
		<title><?php echo $this->localize('simsab'); ?></title>
		<link rel="canonical" href="<?php echo $this->localize('http://www.simsab.net/en'); ?>"/>
		<meta name="dc.title" content="<?php echo $this->localize('simsab'); ?>"/>
		<meta name="description" content="<?php echo $this->localize('Simon Sablowski is a developer and architect for web applications with more than ten years of experience. His main focus lies with core and backend development, software architecture, technical conception, prototyping, refactoring and database design.'); ?>"/>
		<meta name="keywords" content="<?php echo $this->localize('simon sablowski, sablowski, berlin, web development, software architecture, technical conception, prototyping, refactoring, database design, php, mysql, oop, mvc'); ?>"/>
		<meta name="revisit-after" content="1 day"/>
		<!-- Mobile device detection by Bushido Designs: BushidoDesigns.net -->
		<link href="<?php echo $this->getConfiguration('basePath'); ?>css/handheld.css" rel="stylesheet" type="text/css"/>
		<style type="text/css" media="screen and (min-width: 860px)">
		<!--
		@import url("<?php echo $this->getConfiguration('basePath'); ?>css/screen.css");
		-->
		</style>
		<!--[if IE]>
		<link href="<?php echo $this->getConfiguration('basePath'); ?>css/screen.css" rel="stylesheet" type="text/css" media="screen"/>
		<link href="<?php echo $this->getConfiguration('basePath'); ?>css/ie.css" rel="stylesheet" type="text/css" media="screen"/>
		<![endif]-->
		<link href="<?php echo $this->getConfiguration('basePath'); ?>css/handheld.css" rel="stylesheet" type="text/css" media="handheld, only screen and (max-device-width: 859px)"/>
		<link href="<?php echo $this->getConfiguration('basePath'); ?>css/print.css" rel="stylesheet" type="text/css" media="print"/>
		<link type="image/x-icon" href="<?php echo $this->getConfiguration('basePath'); ?>img/favicon.ico" rel="shortcut icon"/>
		<script type="text/javascript" src="<?php echo $this->getConfiguration('basePath'); ?>js/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="<?php echo $this->getConfiguration('basePath'); ?>js/simsab.js"></script>
	</head>
	<body>
		<div id="document">
			<div id="sidebar">
				<ul id="menu">
					<li class="item">
						<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('about-me'); ?>" title="<?php echo $this->localize('About Me'); ?>"><?php echo $this->localize('About Me'); ?></a>
					</li>
					<li class="item">
						<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('professional-skills'); ?>" title="<?php echo $this->localize('Professional Skills'); ?>"><?php echo $this->localize('Professional Skills'); ?></a>
					</li>
					<li class="item">
						<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('programming'); ?>" title="<?php echo $this->localize('Programming'); ?>"><?php echo $this->localize('Programming'); ?></a>
					</li>
					<li class="item">
						<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('projects'); ?>" title="<?php echo $this->localize('Projects'); ?>"><?php echo $this->localize('Projects'); ?></a>
					</li>
					<li class="item">
						<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('work-experience'); ?>" title="<?php echo $this->localize('Work Experience'); ?>"><?php echo $this->localize('Work Experience'); ?></a>
					</li>
					<li class="item">
						<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('contact-me'); ?>" title="<?php echo $this->localize('Contact Me'); ?>"><?php echo $this->localize('Contact Me'); ?></a>
					</li>
					<li class="language item">
						<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('de'); ?>" title="<?php echo $this->localize('Deutsche Version'); ?>"><?php echo $this->localize('Deutsche Version'); ?></a>
					</li>
				</ul>
			</div>
			<div id="content">
				<div id="head">
					<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>" title="<?php echo $this->localize('simsab'); ?>"><img id="logo" src="<?php echo $this->getConfiguration('basePath'); ?>img/logo.gif" alt="<?php echo $this->localize('simsab'); ?>" title="<?php echo $this->localize('simsab'); ?>"/></a>
					<img id="photo" src="<?php echo $this->getConfiguration('basePath'); ?>img/simon-sablowski.jpg" alt="<?php echo $this->localize('Simon Sablowski'); ?>" title="<?php echo $this->localize('Simon Sablowski'); ?>"/>
					<img id="large-photo" src="<?php echo $this->getConfiguration('basePath'); ?>img/simon-sablowski-large.jpg" alt="<?php echo $this->localize('Simon Sablowski'); ?>" title="<?php echo $this->localize('Simon Sablowski'); ?>"/>
					<div id="magnifier"><!--  --></div>
				</div>
				<div id="body">
					<div class="section about-me">
						<h2>
							<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('about-me'); ?>" name="<?php echo $this->localize('about-me'); ?>" title="<?php echo $this->localize('About Me'); ?>"><?php echo $this->localize('About Me'); ?></a>
						</h2>
						<p>
							<?php echo $this->localize('I am a passionate developer and architect for web applications with more than ten years of experience and have contributed my expertise and creativity to more than 100 exciting projects.'); ?>

						</p>
						<p>
							<?php echo $this->localize('While specializing in the use of <em>PHP</em>, I strive to maintain the highest standards in terms of efficiency, manageability and reusability of my software. My work follows design patterns, is redundancy-free, modular and performance-optimized.'); ?>

						</p>
						<p>
							<?php echo $this->localize('Throughout my career I have gained experience working on short-term projects with different agencies as well as on long-term projects in startups and established companies. I am an experienced and talented team leader and have a strong entrepreneurial spirit.'); ?>

						</p>
						<p>
							<?php echo $this->localize('In my spare time I enjoy different kinds of art and culture. I particularly like life drawing, drawing portraits and comics, playing the guitar and experimenting with digital production of acoustic and visual material. <a href="http://fbrccn.com" title="Filippo Baraccani">Filippo Baraccani</a> and I present our work at <a href="http://notmybiz.com" title="notmybiz.com">notmybiz.com</a>.'); ?>

						</p>
					</div>
					<div class="section professional-skills">
						<h2>
							<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('professional-skills'); ?>" name="<?php echo $this->localize('professional-skills'); ?>" title="<?php echo $this->localize('Professional Skills'); ?>"><?php echo $this->localize('Professional Skills'); ?></a>
						</h2>
						<p>
							<span><strong><?php echo $this->localize('Web Development'); ?></strong>,</span>
							<span><?php echo $this->localize('Backend Development'); ?>,</span>
							<span><?php echo $this->localize('Webserver Configuration'); ?>,</span>
							<span><?php echo $this->localize('Accessibility'); ?>,</span>
							<span><strong><?php echo $this->localize('Rapid Prototyping'); ?></strong>,</span>
							<span><?php echo $this->localize('Usability'); ?>,</span>
							
							<span><?php echo $this->localize('Code Generation'); ?>,</span>
							<span><?php echo $this->localize('Standards Compliance'); ?>,</span>
							<span><strong><?php echo $this->localize('Technical Conception'); ?></strong>,</span>
							<span><?php echo $this->localize('Data Modeling'); ?>,</span>
							<span><?php echo $this->localize('Internationalization'); ?>,</span>
							
							<span><?php echo $this->localize('Continuous Integration'); ?>,</span>
							<span><?php echo $this->localize('Unit Testing'); ?>,</span>
							<span><?php echo $this->localize('Social Networks'); ?>,</span>
							<span><?php echo $this->localize('Affiliate Systems'); ?>,</span>
							<span><?php echo $this->localize('Scrum'); ?>,</span>
							<span><?php echo $this->localize('Application Monitoring'); ?>,</span>
							
							<span><?php echo $this->localize('Outsourcing'); ?>,</span>
							<span><strong><?php echo $this->localize('Object-Oriented Programming'); ?></strong>,</span>
							<span><?php echo $this->localize('Relational Database Management Systems'); ?>,</span>
							<span><?php echo $this->localize('Scalability'); ?>,</span>
							
							<span><?php echo $this->localize('Entity Relationship Models'); ?>,</span>
							<span><?php echo $this->localize('Communication Gateways'); ?>,</span>
							<span><?php echo $this->localize('Object-Relational Mapping'); ?>,</span>
							<span><strong><?php echo $this->localize('Regular Expressions'); ?></strong>,</span>
							
							<span><?php echo $this->localize('Scaffolding'); ?>,</span>
							<span><?php echo $this->localize('Quality Control'); ?>,</span>
							<span><strong><?php echo $this->localize('Framework Development'); ?></strong>,</span>
							<span><?php echo $this->localize('User-Generated Content'); ?>,</span>
							<span><?php echo $this->localize('Web-Crawling'); ?>,</span>
							<span><?php echo $this->localize('Refactoring'); ?>,</span>
							
							<span><?php echo $this->localize('Web Services'); ?>,</span>
							<span><?php echo $this->localize('Booking Engines'); ?>,</span>
							<span><?php echo $this->localize('E-Learning'); ?>,</span>
							<span><?php echo $this->localize('Pair Programming'); ?>,</span>
							<span><strong><?php echo $this->localize('Entrepreneurship'); ?></strong>,</span>
							<span><?php echo $this->localize('Programming Paradigms'); ?>,</span>
							
							<span><?php echo $this->localize('Frontend Development'); ?>,</span>
							<span><strong><?php echo $this->localize('Agile Development'); ?></strong>,</span>
							<span><?php echo $this->localize('Kanban'); ?>,</span>
							<span><?php echo $this->localize('Content Management Systems'); ?>,</span>
							<span><?php echo $this->localize('User Experience Design'); ?>,</span>
							
							<span><?php echo $this->localize('Artificial Intelligence'); ?>,</span>
							<span><?php echo $this->localize('Data Migration'); ?>,</span>
							<span><?php echo $this->localize('Offshoring'); ?>,</span>
							<span><?php echo $this->localize('APIs'); ?>,</span>
							<span><strong><?php echo $this->localize('Search Engine Optimization'); ?></strong>,</span>
							<span><?php echo $this->localize('Web-Based Training'); ?>,</span>
							
							<span><strong><?php echo $this->localize('Web Application Architecture'); ?></strong>,</span>
							<span><?php echo $this->localize('Model-View-Controller Design Pattern'); ?>,</span>
							<span><?php echo $this->localize('Test-Driven Software Development'); ?>,</span>
							
							<span><?php echo $this->localize('Database Design'); ?>,</span>
							<span><?php echo $this->localize('Content Syndication'); ?>,</span>
							<span><strong><?php echo $this->localize('Performance Optimization'); ?></strong>,</span>
							<span><?php echo $this->localize('Load Balancing'); ?>,</span>
							<span><?php echo $this->localize('Database Conversion'); ?>,</span>
							
							<span><?php echo $this->localize('Caching'); ?>,</span>
							<span><?php echo $this->localize('Scraping'); ?>,</span>
							<span><?php echo $this->localize('Web 2.0'); ?>,</span>
							<span><?php echo $this->localize('Version Control'); ?>,</span>
							<span><?php echo $this->localize('Cross-Browser Compatibility'); ?>,</span>
							<span><?php echo $this->localize('Semantic Web'); ?>,</span>
							<span><?php echo $this->localize('E-Commerce'); ?>,</span>
							
							<span><?php echo $this->localize('Open Source Software'); ?>,</span>
							<span><?php echo $this->localize('Deployment Strategies'); ?>,</span>
							<span><?php echo $this->localize('Product Development'); ?>,</span>
							<span><?php echo $this->localize('Design-Lead Planning'); ?>,</span>
							<span><strong><?php echo $this->localize('Leadership'); ?></strong></span>
						</p>
					</div>
					<div class="section programming">
						<div class="sub-section programming-languages">
							<h2>
								<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('programming'); ?>" name="<?php echo $this->localize('programming'); ?>" title="<?php echo $this->localize('Programming Languages and Technologies'); ?>"><?php echo $this->localize('Programming Languages and Technologies'); ?></a>
							</h2>
							<ul>
								<li>PHP</li>
								<li>MySQL</li>
								<li>PCRE</li>
								<li>Python</li>
								<li>JavaScript</li>
								<li>ActionScript</li>
								<li>XHTML</li>
								<li>CSS</li>
								<li>XML</li>
								<li>XSLT</li>
								<li>AJAX</li>
								<li>MXML</li>
							</ul>
						</div>
						<div class="sub-section frameworks">
							<h2>
								<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('frameworks'); ?>" name="<?php echo $this->localize('frameworks'); ?>" title="<?php echo $this->localize('Frameworks and Auxiliary Tools'); ?>"><?php echo $this->localize('Frameworks and Auxiliary Tools'); ?></a>
							</h2>
							<ul>
								<li>Magento</li>
								<li>Zend</li>
								<li>Drupal</li>
								<li>WordPress</li>
								<li>CakePHP</li>
								<li>CodeIgniter</li>
								<li>Apache</li>
								<li>nginx</li>
								<li>lighttp</li>
								<li>varnish</li>
								<li>pound</li>
								<li>munin</li>
								<li>Memcache</li>
								<li>eAccelerator</li>
								<li>APC</li>
								<li>XCache</li>
								<li>XDebug</li>
								<li>Phing</li>
								<li>Subversion</li>
								<li>PHPUnit</li>
								<li>Selenium</li>
								<li>Bamboo</li>
								<li>JIRA</li>
								<li>trac</li>
								<li>jQuery</li>
								<li>mootools</li>
								<li>Firebug</li>
								<li>Google Analytics</li>
								<li class="wide">Google Website Optimizer</li>
							</ul>
						</div>
						<div class="clear"><!--  --></div>
					</div>
					<div class="section projects">
						<div class="sub-section long-term-projects">
							<h2>
								<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('projects'); ?>" name="<?php echo $this->localize('projects'); ?>" title="<?php echo $this->localize('Long-Term Projects'); ?>"><?php echo $this->localize('Long-Term Projects'); ?></a>
							</h2>
							<dl>
								<dt class="item">
									<em><?php echo $this->localize('nacho'); ?></em>
								</dt>
								<dd class="description">
									<p>
										<?php echo $this->localize('Web application framework (2011)'); ?> &sdot;
										<a href="http://code.google.com/p/nacho/source/browse/trunk" title="<?php echo $this->localize('Source code'); ?>"><?php echo $this->localize('Source code'); ?></a> &sdot;
										<a class="expand" href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('projects'); ?>" title="<?php echo $this->localize('Details'); ?>"><?php echo $this->localize('Details'); ?></a>
									</p>
									<p class="expandable">
										<?php echo $this->localize('Combining the principles of <em>rapid development</em> and <em>convention over configuration</em>, the MVC-based web application framework nacho is both lightweight and extremely powerful. Many <em>PHP 5.3</em> features have been utilized in the development of nacho, among others:'); ?>
										<span><?php echo $this->localize('Reflection'); ?>,</span>
										<span><?php echo $this->localize('magic methods'); ?>,</span>
										<span><?php echo $this->localize('error backtracking'); ?>,</span>
										<span><?php echo $this->localize('class abstraction'); ?>,</span>
										<span><?php echo $this->localize('namespaces'); ?>,</span>
										<span><?php echo $this->localize('type hinting'); ?></span> <?php echo $this->localize('and'); ?>

										<span><?php echo $this->localize('autoloading'); ?>.</span>
									</p>
									<p class="expandable">
										<?php echo $this->localize('Furthermore, the software package provides extensive functionality in means of localization, session and exception handling, request rerouting, templating, output buffering and user input validation. The implemented <em>database abstraction layer</em> is outstanding, supporting database systems from SQL to MS Office.'); ?>

									</p>
								</dd>
								<dt class="item">
									<em><?php echo $this->localize('cheese'); ?></em>
								</dt>
								<dd class="description">
									<p>
										<?php echo $this->localize('Content management system for nacho'); ?> (2011) &sdot;
										<a href="http://code.google.com/p/cheese/source/browse/trunk" title="<?php echo $this->localize('Source code'); ?>"><?php echo $this->localize('Source code'); ?></a> &sdot;
										<a class="expand" href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('projects'); ?>" title="<?php echo $this->localize('Details'); ?>"><?php echo $this->localize('Details'); ?></a>
									</p>
									<p class="expandable">
										<?php echo $this->localize('Apart from useful <em>events-based frontend functionality</em> that supports common user interaction patterns, cheese provides secure <em>authentication</em> mechanisms as well as highly flexible <em>CRUD interfaces</em> that can be configured in a clever MVC manner.'); ?>
									</p>
								</dd>
							</dl>
						</div>
						<div class="sub-section motivado-projects">
							<h2>
								<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('motivado-projects'); ?>" name="<?php echo $this->localize('motivado-projects'); ?>" title="<?php echo $this->localize('Motivado Projects'); ?>"><?php echo $this->localize('Motivado Projects'); ?></a>
							</h2>
							<dl>
								<dt class="item">
									<a href="http://projects.simsab.net/motivado/coaching-preview/" title="<?php echo $this->localize('Coaching Preview'); ?>"><?php echo $this->localize('Coaching Preview'); ?></a>
								</dt>
								<dd class="description">
									<p>
										<?php echo $this->localize('Configure and test coaching elements (2011)'); ?> &sdot;
										<a href="http://code.google.com/p/coaching-preview/source/browse/trunk" title="<?php echo $this->localize('Source code'); ?>"><?php echo $this->localize('Source code'); ?></a>
									</p>
								</dd>
								<dt class="item">
									<a href="http://projects.simsab.net/motivado/coaching-import/index" title="<?php echo $this->localize('Coaching Import'); ?>"><?php echo $this->localize('Coaching Import'); ?></a>
								</dt>
								<dd class="description">
									<p>
										<?php echo $this->localize('Import coaching models into database (2011)'); ?> &sdot;
										<a href="http://code.google.com/p/motivado-importer/source/browse/trunk" title="<?php echo $this->localize('Source code'); ?>"><?php echo $this->localize('Source code'); ?></a>
									</p>
								</dd>
								<dt class="item">
									<a href="http://projects.simsab.net/motivado/coaching-test" title="<?php echo $this->localize('Coaching Test'); ?>"><?php echo $this->localize('Coaching Test'); ?></a>
								</dt>
								<dd class="description">
									<p>
										<?php echo $this->localize('Test coachings before deployment (2011)'); ?> &sdot;
										<a href="http://code.google.com/p/coaching-test/source/browse/trunk" title="<?php echo $this->localize('Source code'); ?>"><?php echo $this->localize('Source code'); ?></a>
									</p>
								</dd>
								<dt class="item">
									<em><?php echo $this->localize('Coaching API'); ?></em>
								</dt>
								<dd class="description">
									<p>
										<?php echo $this->localize('API for Motivado\'s coaching content (2011)'); ?> &sdot;
										<a href="http://code.google.com/p/motivado-api/source/browse" title="<?php echo $this->localize('Source code'); ?>"><?php echo $this->localize('Source code'); ?></a>
									</p>
								</dd>
								<dt class="item">
									<em><?php echo $this->localize('Coaching UI'); ?></em>
								</dt>
								<dd class="description">
									<p>
										<?php echo $this->localize('Communication between frontend and API (2011)'); ?> &sdot;
										<a href="http://code.google.com/p/motivado-ui/source/browse/trunk" title="<?php echo $this->localize('Source code'); ?>"><?php echo $this->localize('Source code'); ?></a>
									</p>
								</dd>
							</dl>
						</div>
						<div class="sub-section one-day-projects">
							<h2>
								<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('one-day-projects'); ?>" name="<?php echo $this->localize('one-day-projects'); ?>" title="<?php echo $this->localize('One-Day Projects'); ?>"><?php echo $this->localize('One-Day Projects'); ?></a>
							</h2>
							<dl>
								<dt class="item">
									<a href="http://projects.simsab.net/askme/" title="<?php echo $this->localize('AskMe'); ?>"><?php echo $this->localize('AskMe'); ?></a>
								</dt>
								<dd class="description">
									<p>
										<?php echo $this->localize('Ask and answer questions'); ?> (2011) &sdot;
										<a href="http://code.google.com/p/askme/source/browse/trunk" title="<?php echo $this->localize('Source code'); ?>"><?php echo $this->localize('Source code'); ?></a>
									</p>
								</dd>
								<dt class="item">
									<em><?php echo $this->localize('Dialogues'); ?></em>
								</dt>
								<dd class="description">
									<p>
										<?php echo $this->localize('Multi-format instant messaging dialogues'); ?> (2011) &sdot;
										<a href="http://code.google.com/p/dialogues/source/browse/trunk" title="<?php echo $this->localize('Source code'); ?>"><?php echo $this->localize('Source code'); ?></a>
									</p>
								</dd>
								<dt class="item">
									<em><?php echo $this->localize('Scraper'); ?></em>
								</dt>
								<dd class="description">
									<p>
										<?php echo $this->localize('Library for scraping product catalogues'); ?> (2010) &sdot;
										<a href="http://code.google.com/p/scraping/source/browse/trunk" title="<?php echo $this->localize('Source code'); ?>"><?php echo $this->localize('Source code'); ?></a>
									</p>
								</dd>
								<dt class="item">
									<a href="http://projects.simsab.net/names/" title="<?php echo $this->localize('Filtering names'); ?>"><?php echo $this->localize('Filtering names'); ?></a>
								</dt>
								<dd class="description">
									<p>
										<?php echo $this->localize('Filtering names by configurable patterns'); ?> (2010)
									</p>
								</dd>
								<dt class="item">
									<a href="http://projects.simsab.net/trend/" title="<?php echo $this->localize('Trend'); ?>"><?php echo $this->localize('Trend'); ?></a>
								</dt>
								<dd class="description">
									<p>
										<?php echo $this->localize('Der nächste musikalische Trend'); ?> (2009)
									</p>
								</dd>
								<dt class="item">
									<a href="http://projects.simsab.net/beerball-simulator/" title="<?php echo $this->localize('Beerball Simulator'); ?>"><?php echo $this->localize('Beerball Simulator'); ?></a>
								</dt>
								<dd class="description">
									<p>
										<?php echo $this->localize('Simulation of a Beerball match'); ?> (2009) &sdot;
										<a href="http://code.google.com/p/beerball-simulator/source/browse/trunk" title="<?php echo $this->localize('Source code'); ?>"><?php echo $this->localize('Source code'); ?></a>
									</p>
								</dd>
							</dl>
						</div>
						<div class="clear"><!--  --></div>
					</div>
					<div class="section work-experience">
						<h2>
							<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('work-experience'); ?>" name="<?php echo $this->localize('work-experience'); ?>" title="<?php echo $this->localize('Work Experience'); ?>"><?php echo $this->localize('Work Experience'); ?></a>
						</h2>
						<dl>
							<dt class="item">
								<?php echo $this->localize('since 08/2009'); ?>

							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('I am a founder and <em>CTO</em> of <a href="http://motivado.de" title="Motivado">Motivado GmbH</a>. Motivado is the first platform for interactive video-coaching and assists people in finding solutions for personal issues and achieving goals. We close the gap between cost-intensive personal coaching and the general guidebook market with our approach of mass customization for coaching content.'); ?>

								</p>
								<p>
									<?php echo $this->localize('I developed Motivado\'s %scomplex software%s with the support of an agile team of three to seven members. Our innovative technologies have been awarded by Germany\'s Federal Ministry for Economy and Technology.', array('<a href="' . $this->getConfiguration('basePath') . $this->localize('en') . '#' . $this->localize('motivado-projects') . '">', '</a>')); ?>

								</p>
								<p>
									<?php echo $this->localize('We have been live since November 2010 and deliver hundreds of premium quality products to our satisfied customers.'); ?>

								</p>
							</dd>
							<dt class="item">
								<?php echo $this->localize('since 1999'); ?>

							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Web and software development'); ?> &sdot;
									<a class="expand" href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('work-experience'); ?>" title="<?php echo $this->localize('Details'); ?>"><?php echo $this->localize('Details'); ?></a>
								</p>
								<p class="expandable">
									<?php echo $this->localize('My main focus lies with software architecture, core and backend development, technical conception, prototyping, refactoring and database design. In addition, I am well grounded in usability, search engine optimization and I have an eye for good design.'); ?>

								</p>
							</dd>
							<dt class="item">
								<?php echo $this->localize('01/2009 - 08/2009'); ?>

								<span class="sub-line"><?php echo $this->localize('8 months'); ?></span>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Freelance work as a senior web developer for the online agencies'); ?>

								</p>
								<ul>
									<li>
										<a href="http://compuccino.com" title="compuccino">compuccino</a>
									</li>
									<li>
										<a href="http://derleuschner.com" title="der Leuschner. Creativbüro">der Leuschner. Creativbüro</a>
									</li>
								</ul>
							</dd>
							<dt class="item">
								<?php echo $this->localize('08/2007 - 01/2009'); ?>

								<span class="sub-line"><?php echo $this->localize('1 year, 6 months'); ?></span>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Core and feature development for the startup <em>mytourclips AG</em>'); ?> &sdot;
									<a class="expand" href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('work-experience'); ?>" title="<?php echo $this->localize('Details'); ?>"><?php echo $this->localize('Details'); ?></a>
								</p>
								<p class="expandable">
									<span><?php echo $this->localize('Multimedia, video streaming'); ?>,</span>
									<span><?php echo $this->localize('social network/community'); ?>,</span>
									<span><?php echo $this->localize('editiorially maintainable and user-generated content'); ?>,</span>
									<span><?php echo $this->localize('internationalization, scaling, high availability'); ?>,</span>
									<span><?php echo $this->localize('affiliating, booking engines and content aggregation'); ?></span>
								</p>
								<p class="expandable">
									<?php echo $this->localize('In June 2008 I managed an extensive refactoring of the existing web application on the basis of my web application framework nacho. The goal was to prepare the platform for high traffic and the international establishment of the product.'); ?>

								</p>
							</dd>
							<dt class="item">
								<?php echo $this->localize('07/2006 - 10/2007'); ?>

								<span class="sub-line"><?php echo $this->localize('1 year, 4 months'); ?></span>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Animation, background/character clean up and compositing assistance for the cartoon <a href="http://judasandjesus.com" title="Judas &amp; Jesus">Judas &amp; Jesus</a> by <a href="http://inkarnatoons.com" title="Inkarnatoons">Inkarnatoons</a>'); ?>

								</p>
							</dd>
							<dt class="item">
								<?php echo $this->localize('06/2000 - 12/2008'); ?>

								<span class="sub-line"><?php echo $this->localize('8 years, 7 months'); ?></span>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Software development and website maintenance for the 111 Group and the subsidiary companies of the real estate and tourism branches'); ?>

								</p>
							</dd>
						</dl>
						<div class="clear"><!--  --></div>
					</div>
					<div class="section contact-me">
						<h2>
							<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('contact-me'); ?>" name="<?php echo $this->localize('contact-me'); ?>" title="<?php echo $this->localize('Contact Me'); ?>"><?php echo $this->localize('Contact Me'); ?></a>
						</h2>
						<p>
							<?php echo $this->localize('I am always looking for exciting new challenges and the opportunity to enhance my skills. If you are interested in a collaboration, please send me an email. I will also gladly provide you with sample work or more detailed project descriptions. You can contact me at:'); ?>

						</p>
						<p class="options">
							<a href="mailto:<?php echo $this->localize('contact@simsab.net'); ?>" title="<?php echo $this->localize('Contact me via e-mail'); ?>"><?php echo $this->localize('contact@simsab.net'); ?></a> <?php echo $this->localize('(via e-mail)'); ?><br/>
							<a href="skype:simonsablowski?call" title="<?php echo $this->localize('Contact me via Skype'); ?>">simonsablowski</a> <?php echo $this->localize('(via Skype)'); ?>
						</p>
						<p>
							<?php echo $this->localize('You are welcome to visit my profile in the following social networks:'); ?>

						</p>
						<ul>
							<li>
								<a href="http://www.linkedin.com/in/simonsablowski" title="<?php echo $this->localize('Simon Sablowski at %s', 'LinkedIn'); ?>">LinkedIn</a>
							</li>
							<li>
								<a href="https://www.xing.com/profile/Simon_Sablowski" title="<?php echo $this->localize('Simon Sablowski at %s', 'XING'); ?>">XING</a>
							</li>
							<li>
								<a href="http://www.facebook.com/simon.sablowski" title="<?php echo $this->localize('Simon Sablowski at %s', 'Facebook'); ?>">Facebook</a>
							</li>
							<li>
								<a href="https://plus.google.com/106803691412367539900" title="<?php echo $this->localize('Simon Sablowski at %s', 'Google+'); ?>">Google+</a>
							</li>
							<li>
								<a href="http://www.last.fm/user/gluehbirne" title="<?php echo $this->localize('Simon Sablowski at %s', 'Last.fm'); ?>">Last.fm</a>
							</li>
							<li>
								<a href="http://www.youtube.com/user/simbobwe" title="<?php echo $this->localize('Simon Sablowski at %s', 'YouTube'); ?>">YouTube</a>
							</li>
							<?/*li>
								<a href="http://www.imdb.com/mymovies/list?l=47109736" title="<?php echo $this->localize('Simon Sablowski at %s', 'IMDb'); ?>">IMDb</a>
							</li*/?>
						</ul>
					</div>
				</div>
				<div id="foot">
					<p id="copyright">
						<?php date_default_timezone_set('Europe/Berlin'); echo $this->localize('&copy; 1999-%d Simon Sablowski', date('Y')); ?>

						<a class="external" href="<?php echo $this->getConfiguration('basePath') . $this->localize('legal-notice'); ?>" title="<?php echo $this->localize('Legal notice'); ?>" rel="nofollow"><?php echo $this->localize('Legal notice'); ?></a>
					</p>
				</div>
			</div>
		</div>
		<script type="text/javascript">
		<!--
		var gaJsHost = 'https:' == document.location.protocol ? 'https://ssl.' : 'http://www.';
		document.write(unescape('%3Cscript src="' + gaJsHost + 'google-analytics.com/ga.js" type="text/javascript"%3E%3C/script%3E'));
		//-->
		</script>
		<script type="text/javascript">
		<!--
		try {
			var pageTracker = _gat._getTracker('UA-9712670-1');
			pageTracker._initData();
			pageTracker._trackPageview();
		} catch (error) {
			
		}
		//-->
		</script>
	</body>
</html>