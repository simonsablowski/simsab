<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->localize('en'); ?>">
	<head>
		<title><?php echo $this->localize('simsab'); ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="description" content="<?php echo $this->localize('Simon Sablowski is a developer and architect for web applications with more than ten years of experience. His main focus lies with core and backend development, software architecture, technical conception, prototyping, refactoring and database design.'); ?>"/>
		<meta name="keywords" content="<?php echo $this->localize('simon sablowski, sablowski, berlin, web development, software architecture, technical conception, prototyping, refactoring, database design, php, mysql, oop, mvc'); ?>"/>
		<meta name="revisit-after" content="1 day"/>
		<link rel="canonical" href="<?php echo $this->localize('http://www.simsab.net/en'); ?>"/>
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
				<ul id="menu" class="items">
					<li class="item">
						<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('about-me'); ?>" title="<?php echo $this->localize('About Me'); ?>"><?php echo $this->localize('About Me'); ?></a>
					</li>
					<li class="item">
						<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('qualities'); ?>" title="<?php echo $this->localize('Qualities'); ?>"><?php echo $this->localize('Qualities'); ?></a>
					</li>
					<li class="item">
						<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('projects'); ?>" title="<?php echo $this->localize('Projects'); ?>"><?php echo $this->localize('Projects'); ?></a>
					</li>
					<li class="item">
						<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('career'); ?>" title="<?php echo $this->localize('Career'); ?>"><?php echo $this->localize('Career'); ?></a>
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
				</div>
				<div id="body">
					<div class="section about-me">
						<h2>
							<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('about-me'); ?>" name="<?php echo $this->localize('about-me'); ?>" title="<?php echo $this->localize('About Me'); ?>"><?php echo $this->localize('About Me'); ?></a>
						</h2>
						<p>
							<?php echo $this->localize('I am a web professional with many years of experience in software engineering, project management and agile methodologies. Throughout my career I have gained experience working in both small agencies and established companies. Also I have founded a startup company and have run it profitably for several years together with other industry experts.'); ?>

						</p>
						<p>
							<?php echo $this->localize('During the last years I have successfully managed numerous web projects, many of which were able to reach market leadership. Currently I am working for <a href="http://foodpanda.com" title="Foodpanda">Foodpanda</a>, the fastest growing online food delivery service globally.'); ?>

						</p>
					</div>
					<div class="section qualities">
						<h2>
							<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('qualities'); ?>" name="<?php echo $this->localize('qualities'); ?>" title="<?php echo $this->localize('Qualities'); ?>"><?php echo $this->localize('Qualities'); ?></a>
						</h2>
						<p>
							<?php echo $this->localize('My qualities in summary:'); ?>

						</p>
						<ul>
							<li>
								<?php echo $this->localize('Skilled software engineer with %d years of experience of developing and maintaining small and large-scale web applications', date('Y') - 1999); ?>

							</li>
							<li>
								<?php echo $this->localize('Many years of experience interfacing with cross-disciplinary departments, communicating with and reporting to stakeholders and clients'); ?>

							</li>
							<li>
								<?php echo $this->localize('Strong entrepreneurial spirit and experience with founding and running startups and launching countless projects, many of which were able to reach market leadership'); ?>

							</li>
							<li>
								<?php echo $this->localize('Excellent people and communication skills, proven by successfully assembling and managing multinational and multicultural teams of up to 100 specialists'); ?>

							</li>
							<li>
								<?php echo $this->localize('Coach for agile and lean methodologies, increased many software engineering teams\' efficiency and output noticeably'); ?>

							</li>
						</ul>
					</div>
					<div class="section projects">
						<h2>
							<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('projects'); ?>" name="<?php echo $this->localize('projects'); ?>" title="<?php echo $this->localize('Projects'); ?>"><?php echo $this->localize('Projects'); ?></a>
						</h2>
						<ul class="tags">
							<li class="tag personal">
								<a class="inactive" href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('projects'); ?>" title="<?php echo $this->localize('Personal'); ?>"><?php echo $this->localize('Personal'); ?></a>
							</li>
							<li class="tag frameworks">
								<a class="inactive" href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('projects'); ?>" title="<?php echo $this->localize('Frameworks'); ?>"><?php echo $this->localize('Frameworks'); ?></a>
							</li>
							<li class="tag tools">
								<a class="inactive" href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('projects'); ?>" title="<?php echo $this->localize('Tools'); ?>"><?php echo $this->localize('Tools'); ?></a>
							</li>
							<li class="tag motivado">
								<a class="inactive" href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('projects'); ?>" title="<?php echo $this->localize('Motivado'); ?>"><?php echo $this->localize('Motivado'); ?></a>
							</li>
							<li class="tag interactive">
								<a class="inactive" href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('projects'); ?>" title="<?php echo $this->localize('Interactive'); ?>"><?php echo $this->localize('Interactive'); ?></a>
							</li>
							<li class="tag experimental">
								<a class="inactive" href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('projects'); ?>" title="<?php echo $this->localize('Experimental'); ?>"><?php echo $this->localize('Experimental'); ?></a>
							</li>
							<div class="clear"><!--  --></div>
						</ul>
						<dl class="items">
							<dt class="item tools">
								<a href="http://projects.simsab.net/shrtn/" title="<?php echo $this->localize('shrtn'); ?>"><?php echo $this->localize('shrtn'); ?></a>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('URL shortener based on PHP, MySQL and Memcache'); ?> &sdot;
									<a href="http://code.google.com/p/shorten-url/source/browse/trunk" title="<?php echo $this->localize('Source code'); ?>"><?php echo $this->localize('Source code'); ?></a>
								</p>
							</dd>
							<dt class="item interactive">
								<a href="http://projects.simsab.net/hitori/" title="<?php echo $this->localize('Hitori'); ?>"><?php echo $this->localize('Hitori'); ?></a>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Simple Hitori game based on PHP and JavaScript'); ?>
								</p>
							</dd>
							<dt class="item tools interactive">
								<a href="http://projects.simsab.net/getitdone/" title="<?php echo $this->localize('Get it done'); ?>"><?php echo $this->localize('Get it done'); ?></a>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Task planner with drag and drop functionality'); ?> &sdot;
									<a href="http://code.google.com/p/task-planner/source/browse/trunk" title="<?php echo $this->localize('Source code'); ?>"><?php echo $this->localize('Source code'); ?></a>
								</p>
							</dd>
							<dt class="item interactive">
								<a href="http://projects.simsab.net/beatemup/" title="<?php echo $this->localize('Beat \'em up'); ?>"><?php echo $this->localize('Beat \'em up'); ?></a>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('JavaScript-based Mortal Kombat tribute'); ?> &sdot;
									<a href="http://code.google.com/p/beatemup/source/browse/trunk" title="<?php echo $this->localize('Source code'); ?>"><?php echo $this->localize('Source code'); ?></a>
								</p>
							</dd>
							<dt class="item personal">
								<a href="http://projects.simsab.net/avatars/" title="<?php echo $this->localize('Avatar Rating'); ?>"><?php echo $this->localize('Avatar Rating'); ?></a>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Rate a selection of avatar images'); ?> &sdot;
									<a href="http://code.google.com/p/avatar-rating/source/browse/trunk" title="<?php echo $this->localize('Source code'); ?>"><?php echo $this->localize('Source code'); ?></a>
								</p>
							</dd>
							<dt class="item tools personal">
								<a href="http://projects.simsab.net/readosaur/" title="<?php echo $this->localize('readosaur'); ?>"><?php echo $this->localize('readosaur'); ?></a>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Manage and read your favourite RSS feeds'); ?> &sdot;
									<a href="http://code.google.com/p/readosaur/source/browse/trunk" title="<?php echo $this->localize('Source code'); ?>"><?php echo $this->localize('Source code'); ?></a>
								</p>
							</dd>
							<dt class="item motivado tools">
								<a href="http://preview.motivado.de" title="<?php echo $this->localize('Coaching Preview'); ?>"><?php echo $this->localize('Coaching Preview'); ?></a>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Configure and test Motivado\'s coaching elements'); ?> &sdot;
									<a href="http://code.google.com/p/coaching-preview/source/browse/trunk" title="<?php echo $this->localize('Source code'); ?>"><?php echo $this->localize('Source code'); ?></a>
								</p>
							</dd>
							<dt class="item motivado tools">
								<a href="http://import.motivado.de" title="<?php echo $this->localize('Coaching Import'); ?>"><?php echo $this->localize('Coaching Import'); ?></a>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Import Motivado\'s coaching models into database'); ?> &sdot;
									<a href="http://code.google.com/p/motivado-importer/source/browse/trunk" title="<?php echo $this->localize('Source code'); ?>"><?php echo $this->localize('Source code'); ?></a>
								</p>
							</dd>
							<dt class="item motivado tools">
								<a href="http://test.motivado.de" title="<?php echo $this->localize('Coaching Test'); ?>"><?php echo $this->localize('Coaching Test'); ?></a>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Test Motivado\'s coachings before deployment'); ?> &sdot;
									<a href="http://code.google.com/p/coaching-test/source/browse/trunk" title="<?php echo $this->localize('Source code'); ?>"><?php echo $this->localize('Source code'); ?></a>
								</p>
							</dd>
							<dt class="item motivado">
								<em><?php echo $this->localize('Coaching API'); ?></em>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('API for Motivado\'s coaching content'); ?> &sdot;
									<a href="http://code.google.com/p/motivado-api/source/browse" title="<?php echo $this->localize('Source code'); ?>"><?php echo $this->localize('Source code'); ?></a>
								</p>
							</dd>
							<dt class="item motivado">
								<em><?php echo $this->localize('Coaching UI'); ?></em>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Communication between Motivado\'s frontend and API'); ?> &sdot;
									<a href="http://code.google.com/p/motivado-ui/source/browse/trunk" title="<?php echo $this->localize('Source code'); ?>"><?php echo $this->localize('Source code'); ?></a>
								</p>
							</dd>
							<dt class="item frameworks">
								<em><?php echo $this->localize('nacho'); ?></em>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Web application framework'); ?> &sdot;
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
									<?php echo $this->localize('Furthermore, the software package provides extensive functionality in means of localization, session and exception handling, request rerouting, templating, output buffering, database abstraction and user input validation.'); ?>

								</p>
							</dd>
							<dt class="item frameworks">
								<em><?php echo $this->localize('cheese'); ?></em>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Content management system for nacho'); ?> &sdot;
									<a href="http://code.google.com/p/cheese/source/browse/trunk" title="<?php echo $this->localize('Source code'); ?>"><?php echo $this->localize('Source code'); ?></a> &sdot;
									<a class="expand" href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('projects'); ?>" title="<?php echo $this->localize('Details'); ?>"><?php echo $this->localize('Details'); ?></a>
								</p>
								<p class="expandable">
									<?php echo $this->localize('Apart from useful <em>events-based frontend functionality</em> that supports common user interaction patterns, cheese provides secure <em>authentication</em> mechanisms as well as highly flexible <em>CRUD interfaces</em> that can be configured in a clever MVC manner.'); ?>

								</p>
							</dd>
							<dt class="item personal">
								<a href="http://www.notmybiz.com" title="<?php echo $this->localize('notmybiz'); ?>"><?php echo $this->localize('notmybiz'); ?></a>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Personal online portfolio'); ?> &sdot;
									<a href="http://code.google.com/p/notmybiz/source/browse/trunk" title="<?php echo $this->localize('Source code'); ?>"><?php echo $this->localize('Source code'); ?></a>
								</p>
							</dd>
							<dt class="item personal tools">
								<a href="http://backend.notmybiz.com" title="<?php echo $this->localize('notmybiz Backend'); ?>"><?php echo $this->localize('notmybiz Backend'); ?></a>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Gallery administration backend'); ?> &sdot;
									<a href="http://code.google.com/p/notmybiz-backend/source/browse/trunk" title="<?php echo $this->localize('Source code'); ?>"><?php echo $this->localize('Source code'); ?></a>
								</p>
							</dd>
							<dt class="item experimental">
								<a href="http://projects.simsab.net/askme/" title="<?php echo $this->localize('ask.me'); ?>"><?php echo $this->localize('ask.me'); ?></a>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Ask and answer questions'); ?> &sdot;
									<a href="http://code.google.com/p/askme/source/browse/trunk" title="<?php echo $this->localize('Source code'); ?>"><?php echo $this->localize('Source code'); ?></a>
								</p>
							</dd>
							<dt class="item experimental">
								<em><?php echo $this->localize('Dialogues'); ?></em>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Multi-format instant messaging dialogues'); ?> &sdot;
									<a href="http://code.google.com/p/dialogues/source/browse/trunk" title="<?php echo $this->localize('Source code'); ?>"><?php echo $this->localize('Source code'); ?></a>
								</p>
							</dd>
							<dt class="item tools">
								<em><?php echo $this->localize('Scraper'); ?></em>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Library for scraping product catalogues'); ?> &sdot;
									<a href="http://code.google.com/p/scraping/source/browse/trunk" title="<?php echo $this->localize('Source code'); ?>"><?php echo $this->localize('Source code'); ?></a>
								</p>
							</dd>
							<dt class="item experimental tools">
								<a href="http://projects.simsab.net/names/" title="<?php echo $this->localize('Filtering names'); ?>"><?php echo $this->localize('Filtering names'); ?></a>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Filtering names by configurable patterns'); ?>
								</p>
							</dd>
							<dt class="item experimental interactive">
								<a href="http://projects.simsab.net/trend/" title="<?php echo $this->localize('Trend'); ?>"><?php echo $this->localize('Trend'); ?></a>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Der nächste musikalische Trend'); ?>
								</p>
							</dd>
							<dt class="item experimental interactive">
								<a href="http://projects.simsab.net/beerball-simulator/" title="<?php echo $this->localize('Beerball Simulator'); ?>"><?php echo $this->localize('Beerball Simulator'); ?></a>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Simulation of a Beerball match'); ?> &sdot;
									<a href="http://code.google.com/p/beerball-simulator/source/browse/trunk" title="<?php echo $this->localize('Source code'); ?>"><?php echo $this->localize('Source code'); ?></a>
								</p>
							</dd>
						</dl>
						<div class="clear"><!--  --></div>
					</div>
					<div class="section career">
						<h2>
							<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('career'); ?>" name="<?php echo $this->localize('career'); ?>" title="<?php echo $this->localize('Career'); ?>"><?php echo $this->localize('Career'); ?></a>
						</h2>
						<dl class="items">
							<dt class="item">
								<?php echo $this->localize('since %s', '11/2012'); ?>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('<em>CTO</em> at <a href="http://foodpanda.com" title="Foodpanda">Foodpanda</a>'); ?>
								</p>
								<p>
									<?php echo $this->localize('Foodpanda is the fastest growing online food delivery service globally. Accelerated by Rocket Internet, the company focuses especially on emerging markets, operates together with its affiliated brand Hellofood in Asia, Europe, Latin America, Africa and Middle-East and reaches three billion people worldwide.'); ?>

								</p>
							</dd>
							<dt class="item">
								<?php echo $this->localize('since %s', '1999'); ?>

								<span class="sub-line"><?php echo $this->localize('%d years', date('Y') - 1999); ?></span>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Web and software development'); ?> &sdot;
									<a class="expand" href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('career'); ?>" title="<?php echo $this->localize('Details'); ?>"><?php echo $this->localize('Details'); ?></a>
								</p>
								<p class="expandable">
									<?php echo $this->localize('My main focus lies with software architecture, core and backend development, technical conception, prototyping, refactoring and database design. In addition, I am well grounded in usability, search engine optimization and I have an eye for good design.'); ?>

								</p>
							</dd>
							<dt class="item">
								<?php echo $this->localize('%s - %s', array('12/2011', '02/2013')); ?>

								<span class="sub-line"><?php echo sprintf('%s, %s', $this->localize('1 year'), $this->localize('%d months', 3)); ?></span>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('<em>Director Software Engineering</em> at <a href="http://rocket-internet.com" title="Rocket Internet">Rocket Internet</a>'); ?> &sdot;
									<a class="expand" href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('career'); ?>" title="<?php echo $this->localize('Details'); ?>"><?php echo $this->localize('Details'); ?></a>
								</p>
								<p class="expandable">
									<?php echo $this->localize('At Rocket Internet, I am in charge of coordinating launches and maintenance of worldwide e-commerce projects and managing around 100 software engineers, project managers and test analysts.'); ?>

								</p>
							</dd>
							<dt class="item">
								<?php echo $this->localize('%s - %s', array('11/2011', '11/2011')); ?>

								<span class="sub-line"><?php echo $this->localize('1 month'); ?></span>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Senior developer and team leader at <a href="http://rocket-internet.com" title="Rocket Internet">Rocket Internet</a>'); ?> &sdot;
									<a class="expand" href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('career'); ?>" title="<?php echo $this->localize('Details'); ?>"><?php echo $this->localize('Details'); ?></a>
								</p>
								<p class="expandable">
									<?php echo $this->localize('Application architecture and development lead for Rocket\'s new e-commerce core component'); ?>

								</p>
							</dd>
							<dt class="item">
								<?php echo $this->localize('%s - %s', array('08/2009', '11/2011')); ?>

								<span class="sub-line"><?php echo sprintf('%s, %s', $this->localize('%d years', 2), $this->localize('%d months', 4)); ?></span>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Founder and <em>CTO</em> of <a href="http://motivado.de" title="Motivado">Motivado</a>'); ?> &sdot;
									<a class="expand" href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('career'); ?>" title="<?php echo $this->localize('Details'); ?>"><?php echo $this->localize('Details'); ?></a>
								</p>
								<p class="expandable">
									<?php echo $this->localize('Motivado is the first platform for interactive video-coaching and assists people in finding solutions for personal issues and achieving goals. We close the gap between cost-intensive personal coaching and the general guidebook market with our approach of mass customization for coaching content.'); ?>

								</p>
								<p class="expandable">
									<?php echo $this->localize('I developed Motivado\'s %scomplex software%s with the support of an agile team of three to seven members. Our innovative technologies have been awarded by Germany\'s Federal Ministry for Economy and Technology.', array('<a href="' . $this->getConfiguration('basePath') . $this->localize('en') . '#' . $this->localize('projects') . '">', '</a>')); ?>

								</p>
								<p class="expandable">
									<?php echo $this->localize('We have been live since November 2010 and deliver hundreds of premium quality products to our satisfied customers.'); ?>

								</p>
							</dd>
							<dt class="item">
								<?php echo $this->localize('%s - %s', array('01/2009', '08/2009')); ?>

								<span class="sub-line"><?php echo $this->localize('%d months', 8); ?></span>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Freelance work as a senior web developer'); ?> &sdot;
									<a class="expand" href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('career'); ?>" title="<?php echo $this->localize('Details'); ?>"><?php echo $this->localize('Details'); ?></a>
								</p>
								<p class="expandable">
									<?php echo $this->localize('for the online agencies'); ?>

								</p>
								<ul class="expandable">
									<li>
										<a href="http://compuccino.com" title="compuccino">compuccino</a>
									</li>
									<li>
										<a href="http://derleuschner.com" title="der Leuschner. Creativbüro">der Leuschner. Creativbüro</a>
									</li>
								</ul>
							</dd>
							<dt class="item">
								<?php echo $this->localize('%s - %s', array('08/2007', '01/2009')); ?>

								<span class="sub-line"><?php echo sprintf('%s, %s', $this->localize('1 year'), $this->localize('%d months', 6)); ?></span>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Core and feature development'); ?> &sdot;
									<a class="expand" href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('career'); ?>" title="<?php echo $this->localize('Details'); ?>"><?php echo $this->localize('Details'); ?></a>
								</p>
								<p class="expandable">
									<?php echo $this->localize('for the startup <em>mytourclips</em> which covered:'); ?>
								</p>
								<p class="expandable">
									<span><?php echo $this->localize('Multimedia, video streaming'); ?>,</span>
									<span><?php echo $this->localize('social network/community'); ?>,</span>
									<span><?php echo $this->localize('editiorially maintainable and user-generated content'); ?>,</span>
									<span><?php echo $this->localize('internationalization, scaling, high availability'); ?>,</span>
									<span><?php echo $this->localize('affiliating, booking engines and content aggregation'); ?>.</span>
								</p>
								<p class="expandable">
									<?php echo $this->localize('In June 2008 I managed an extensive refactoring of the existing web application on the basis of my web application framework nacho. The goal was to prepare the platform for high traffic and the international establishment of the product.'); ?>

								</p>
							</dd>
							<dt class="item">
								<?php echo $this->localize('%s - %s', array('07/2006', '10/2007')); ?>

								<span class="sub-line"><?php echo sprintf('%s, %s', $this->localize('1 year'), $this->localize('%d months', 4)); ?></span>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Animation, background/character clean up'); ?> &sdot;
									<a class="expand" href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('career'); ?>" title="<?php echo $this->localize('Details'); ?>"><?php echo $this->localize('Details'); ?></a>
								</p>
								<p class="expandable">
									<?php echo $this->localize('and compositing assistance for the cartoon <a href="http://judasandjesus.com" title="Judas &amp; Jesus">Judas &amp; Jesus</a> by <a href="http://inkarnatoons.com" title="Inkarnatoons">Inkarnatoons</a>'); ?>

								</p>
							</dd>
							<dt class="item">
								<?php echo $this->localize('%s - %s', array('06/2000', '12/2008')); ?>

								<span class="sub-line"><?php echo sprintf('%s, %s', $this->localize('%d years', 8), $this->localize('%d months', 7)); ?></span>
							</dt>
							<dd class="description">
								<p>
									<?php echo $this->localize('Software development'); ?> &sdot;
									<a class="expand" href="<?php echo $this->getConfiguration('basePath') . $this->localize('en'); ?>#<?php echo $this->localize('career'); ?>" title="<?php echo $this->localize('Details'); ?>"><?php echo $this->localize('Details'); ?></a>
								</p>
								<p class="expandable">
									<?php echo $this->localize('and website maintenance for the 111 Group and the subsidiary companies of the real estate and tourism branches'); ?>

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
							<a href="skype:simonsablowski" title="<?php echo $this->localize('Contact me via Skype'); ?>">simonsablowski</a> <?php echo $this->localize('(via Skype)'); ?>

						</p>
						<p>
							<?php echo $this->localize('You are welcome to visit my profile in the following social networks:'); ?>

						</p>
						<ul class="options">
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
							<div class="clear"><!--  --></div>
						</ul>
						<p>
							<?php echo $this->localize('Feel free to visit my online portfolio for life drawing, character design, portraits and caricatures:'); ?>

						</p>
						<p class="options">
							<a href="http://www.notmybiz.com" title="<?php echo $this->localize('notmybiz.com'); ?>"><?php echo $this->localize('notmybiz.com'); ?></a>
						</p>
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
