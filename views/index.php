<!DOCTYPE html>
<html lang="<?php echo $this->localize('document-language'); ?>">
	<head>
		<title><?php echo $this->localize('document-title'); ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="description" content="<?php echo $this->localize('meta-description'); ?>">
		<meta name="keywords" content="<?php echo $this->localize('meta-keywords'); ?>">
		<meta name="robots" content="index, follow">
		<meta name="revisit-after" content="1 day">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<link href="<?php echo $this->localize('canonical-url'); ?>" rel="canonical">
		<link href="<?php echo $this->getConfiguration('basePath'); ?>css/simsab.css" rel="stylesheet" type="text/css">
		<link href="<?php echo $this->getConfiguration('basePath'); ?>img/simsab.ico" rel="shortcut icon" type="image/x-icon">
		<script src="<?php echo $this->getConfiguration('basePath'); ?>js/simsab.js" type="text/javascript"></script>
	</head>
	<body>
		<header id="header">
			<div class="box">
				<h1 id="logo">
					<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('document-language'); ?>" title="<?php echo $this->localize('document-title'); ?>"><?php echo $this->localize('logo-title'); ?></a>
				</h1>
				<nav class="navigation">
					<ul class="menu items">
						<li class="item">
							<a class="inactive" href="<?php echo $this->getConfiguration('basePath') . $this->localize('document-language') . $this->getConfiguration('pathSeparator') . $this->localize('about-me-path'); ?>" title="<?php echo $this->localize('about-me-menu-title'); ?>"><?php echo $this->localize('about-me-menu-title'); ?></a>
						</li>
						<li class="item">
							<a class="inactive" href="<?php echo $this->getConfiguration('basePath') . $this->localize('document-language') . $this->getConfiguration('pathSeparator') . $this->localize('qualities-path'); ?>" title="<?php echo $this->localize('qualities-menu-title'); ?>"><?php echo $this->localize('qualities-menu-title'); ?></a>
						</li>
						<li class="item">
							<a class="inactive" href="<?php echo $this->getConfiguration('basePath') . $this->localize('document-language') . $this->getConfiguration('pathSeparator') . $this->localize('career-path'); ?>" title="<?php echo $this->localize('career-menu-title'); ?>"><?php echo $this->localize('career-menu-title'); ?></a>
						</li>
						<li class="item">
							<a class="inactive" href="<?php echo $this->getConfiguration('basePath') . $this->localize('document-language') . $this->getConfiguration('pathSeparator') . $this->localize('projects-path'); ?>" title="<?php echo $this->localize('projects-menu-title'); ?>"><?php echo $this->localize('projects-menu-title'); ?></a>
						</li>
						<li class="item">
							<a class="inactive" href="<?php echo $this->getConfiguration('basePath') . $this->localize('document-language') . $this->getConfiguration('pathSeparator') . $this->localize('contact-me-path'); ?>" title="<?php echo $this->localize('contact-me-menu-title'); ?>"><?php echo $this->localize('contact-me-menu-title'); ?></a>
						</li>
					</ul>
				</nav>
			</div>
		</header>
		<div id="document">
			<article id="body">
				<section class="section about-me">
					<h2 id="<?php echo $this->localize('about-me-path'); ?>" class="title">
						<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('document-language') . $this->getConfiguration('pathSeparator') . $this->localize('about-me-path'); ?>" title="<?php echo $this->localize('about-me-title'); ?>"><?php echo $this->localize('about-me-title'); ?></a>
					</h2>
					<p class="paragraph">
						<?php echo $this->localize('about-me-paragraph1'); ?>

					</p>
					<p class="paragraph">
						<?php echo $this->localize('about-me-paragraph2'); ?>

					</p>
				</section>
				<section class="section qualities">
					<h2 id="<?php echo $this->localize('qualities-path'); ?>" class="title">
						<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('document-language') . $this->getConfiguration('pathSeparator') . $this->localize('qualities-path'); ?>" title="<?php echo $this->localize('qualities-title'); ?>"><?php echo $this->localize('qualities-title'); ?></a>
					</h2>
					<ul>
						<li class="bullet">
							<?php echo $this->localize('qualities-paragraph1'); ?>

						</li>
						<li class="bullet">
							<?php echo $this->localize('qualities-paragraph2'); ?>

						</li>
						<li class="bullet">
							<?php echo $this->localize('qualities-paragraph3'); ?>

						</li>
						<li class="bullet">
							<?php echo $this->localize('qualities-paragraph4'); ?>

						</li>
						<li class="bullet">
							<?php echo $this->localize('qualities-paragraph5'); ?>

						</li>
						<li class="bullet">
							<?php echo $this->localize('qualities-paragraph6'); ?>

						</li>
					</ul>
				</section>
				<section class="section career">
					<h2 id="<?php echo $this->localize('career-path'); ?>" class="title">
						<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('document-language') . $this->getConfiguration('pathSeparator') . $this->localize('career-path'); ?>" title="<?php echo $this->localize('career-title'); ?>"><?php echo $this->localize('career-title'); ?></a>
					</h2>
					<dl class="items">
						<dt class="item">
							<?php echo $this->localize('since', array('01/2014')); ?>

							<span class="sub-line"><?php echo ($m = date_diff(date_create('2014-01'), date_create())->m) > 1 ? $this->localize('several-months', $m) : $this->localize('one-month', $m); ?></span>
						</dt>
						<dd class="description">
							<p>
								<?php echo $this->localize('campanda-job-title'); ?>

								<a class="expand details separated" href="<?php echo $this->getConfiguration('basePath') . $this->localize('document-language') . $this->getConfiguration('pathSeparator') . $this->localize('career-path'); ?>" title="<?php echo $this->localize('details-title'); ?>"><?php echo $this->localize('details-title'); ?></a>
							</p>
							<p class="expandable">
								<?php echo $this->localize('campanda-job-details-paragraph1'); ?>

							</p>
							<p class="expandable">
								<?php echo $this->localize('campanda-job-details-paragraph2'); ?>

							</p>
							<p class="expandable">
								<?php echo $this->localize('campanda-job-details-paragraph3'); ?>

							</p>
						</dd>
						<dt class="item">
							<?php echo $this->localize('from-until', array('11/2012', '09/2013')); ?>

							<span class="sub-line"><?php echo $this->localize('several-months', 11); ?></span>
						</dt>
						<dd class="description">
							<p>
								<?php echo $this->localize('foodpanda-job-title'); ?>

								<a class="expand details separated" href="<?php echo $this->getConfiguration('basePath') . $this->localize('document-language') . $this->getConfiguration('pathSeparator') . $this->localize('career-path'); ?>" title="<?php echo $this->localize('details-title'); ?>"><?php echo $this->localize('details-title'); ?></a>
							</p>
							<p class="expandable">
								<?php echo $this->localize('foodpanda-job-details-paragraph1'); ?>

							</p>
							<p class="expandable">
								<?php echo $this->localize('foodpanda-job-details-paragraph2'); ?>

							</p>
							<p class="expandable">
								<?php echo $this->localize('foodpanda-job-details-paragraph3'); ?>

							</p>
						</dd>
						<dt class="item">
							<?php echo $this->localize('from-until', array('11/2011', '10/2012')); ?>

							<span class="sub-line"><?php echo $this->localize('one-year'); ?></span>
						</dt>
						<dd class="description">
							<p>
								<?php echo $this->localize('rocket-internet-job-title'); ?>

								<a class="expand details separated" href="<?php echo $this->getConfiguration('basePath') . $this->localize('document-language') . $this->getConfiguration('pathSeparator') . $this->localize('career-path'); ?>" title="<?php echo $this->localize('details-title'); ?>"><?php echo $this->localize('details-title'); ?></a>
							</p>
							<p class="expandable">
								<?php echo $this->localize('rocket-internet-job-details-paragraph1'); ?>

							</p>
							<p class="expandable">
								<?php echo $this->localize('rocket-internet-job-details-paragraph2'); ?>

							</p>
							<p class="expandable">
								<?php echo $this->localize('rocket-internet-job-details-paragraph3'); ?>

							</p>
						</dd>
						<dt class="item">
							<?php echo $this->localize('from-until', array('08/2009', '10/2011')); ?>

							<span class="sub-line"><?php echo sprintf('%s, %s', $this->localize('several-years', 2), $this->localize('several-months', 3)); ?></span>
						</dt>
						<dd class="description">
							<p>
								<?php echo $this->localize('motivado-job-title'); ?>

								<a class="expand details separated" href="<?php echo $this->getConfiguration('basePath') . $this->localize('document-language') . $this->getConfiguration('pathSeparator') . $this->localize('career-path'); ?>" title="<?php echo $this->localize('details-title'); ?>"><?php echo $this->localize('details-title'); ?></a>
							</p>
							<p class="expandable">
								<?php echo $this->localize('motivado-job-details-paragraph1'); ?>

							</p>
							<p class="expandable">
								<?php echo $this->localize('motivado-job-details-paragraph2'); ?>

							</p>
							<p class="expandable">
								<?php echo $this->localize('motivado-job-details-paragraph3'); ?>

							</p>
						</dd>
						<dt class="item">
							<?php echo $this->localize('from-until', array('08/2007', '01/2009')); ?>

							<span class="sub-line"><?php echo sprintf('%s, %s', $this->localize('one-year'), $this->localize('several-months', 6)); ?></span>
						</dt>
						<dd class="description">
							<p>
								<?php echo $this->localize('mytourclips-job-title'); ?>

								<a class="expand details separated" href="<?php echo $this->getConfiguration('basePath') . $this->localize('document-language') . $this->getConfiguration('pathSeparator') . $this->localize('career-path'); ?>" title="<?php echo $this->localize('details-title'); ?>"><?php echo $this->localize('details-title'); ?></a>
							</p>
							<p class="expandable">
								<?php echo $this->localize('mytourclips-job-details-paragraph1'); ?>

							</p>
							<p class="expandable">
								<?php echo $this->localize('mytourclips-job-details-paragraph2'); ?>

							</p>
						</dd>
						<dt class="item">
							<?php echo $this->localize('from-until', array('1999', '2009')); ?>

							<span class="sub-line"><?php echo $this->localize('several-years', 10); ?></span>
						</dt>
						<dd class="description">
							<p>
								<?php echo $this->localize('freelance-title'); ?>

								<a class="expand details separated" href="<?php echo $this->getConfiguration('basePath') . $this->localize('document-language') . $this->getConfiguration('pathSeparator') . $this->localize('career-path'); ?>" title="<?php echo $this->localize('details-title'); ?>"><?php echo $this->localize('details-title'); ?></a>
							</p>
							<p class="expandable">
								<?php echo $this->localize('freelance-description'); ?>

							</p>
						</dd>
					</dl>
					<div class="clear"><!--  --></div>
				</section>
				<section class="section projects">
					<h2 id="<?php echo $this->localize('projects-path'); ?>" class="title">
						<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('document-language') . $this->getConfiguration('pathSeparator') . $this->localize('projects-path'); ?>" title="<?php echo $this->localize('projects-title'); ?>"><?php echo $this->localize('projects-title'); ?></a>
					</h2>
					<ul class="tags">
						<li class="tag" data-tag="motivado">
							<a class="inactive" href="<?php echo $this->getConfiguration('basePath') . $this->localize('document-language') . $this->getConfiguration('pathSeparator') . $this->localize('projects-path'); ?>" title="<?php echo $this->localize('motivado-title'); ?>"><?php echo $this->localize('motivado-title'); ?></a>
						</li>
						<li class="tag" data-tag="personal">
							<a class="inactive" href="<?php echo $this->getConfiguration('basePath') . $this->localize('document-language') . $this->getConfiguration('pathSeparator') . $this->localize('projects-path'); ?>" title="<?php echo $this->localize('personal-title'); ?>"><?php echo $this->localize('personal-title'); ?></a>
						</li>
						<li class="tag" data-tag="frameworks">
							<a class="inactive" href="<?php echo $this->getConfiguration('basePath') . $this->localize('document-language') . $this->getConfiguration('pathSeparator') . $this->localize('projects-path'); ?>" title="<?php echo $this->localize('frameworks-title'); ?>"><?php echo $this->localize('frameworks-title'); ?></a>
						</li>
						<li class="tag" data-tag="interactive">
							<a class="inactive" href="<?php echo $this->getConfiguration('basePath') . $this->localize('document-language') . $this->getConfiguration('pathSeparator') . $this->localize('projects-path'); ?>" title="<?php echo $this->localize('interactive-title'); ?>"><?php echo $this->localize('interactive-title'); ?></a>
						</li>
						<li class="tag" data-tag="tools">
							<a class="inactive" href="<?php echo $this->getConfiguration('basePath') . $this->localize('document-language') . $this->getConfiguration('pathSeparator') . $this->localize('projects-path'); ?>" title="<?php echo $this->localize('tools-title'); ?>"><?php echo $this->localize('tools-title'); ?></a>
						</li>
						<li class="tag" data-tag="experimental">
							<a class="inactive" href="<?php echo $this->getConfiguration('basePath') . $this->localize('document-language') . $this->getConfiguration('pathSeparator') . $this->localize('projects-path'); ?>" title="<?php echo $this->localize('experimental-title'); ?>"><?php echo $this->localize('experimental-title'); ?></a>
						</li>
					</ul>
					<dl class="items">
						<dt class="item" data-tags="experimental tools">
							<a href="http://projects.simsab.net/names/" title="<?php echo $this->localize('names-title'); ?>"><?php echo $this->localize('names-title'); ?></a>
						</dt>
						<dd class="description">
							<p>
								<?php echo $this->localize('names-description'); ?>

							</p>
						</dd>
						<dt class="item" data-tags="interactive">
							<a href="http://projects.simsab.net/beatemup/" title="<?php echo $this->localize('beatemup-title'); ?>"><?php echo $this->localize('beatemup-title'); ?></a>
						</dt>
						<dd class="description">
							<p>
								<?php echo $this->localize('beatemup-description'); ?>

								<a class="source-code separated" href="https://github.com/simonsablowski/beatemup" title="<?php echo $this->localize('source-code-title'); ?>"><?php echo $this->localize('source-code-title'); ?></a>
							</p>
						</dd>
						<dt class="item" data-tags="personal">
							<a href="http://www.notmybiz.com" title="<?php echo $this->localize('notmybiz-title'); ?>"><?php echo $this->localize('notmybiz-title'); ?></a>
						</dt>
						<dd class="description">
							<p>
								<?php echo $this->localize('notmybiz-description'); ?>

								<a class="source-code separated" href="http://code.google.com/p/notmybiz/source/browse/trunk" title="<?php echo $this->localize('source-code-title'); ?>"><?php echo $this->localize('source-code-title'); ?></a>
							</p>
						</dd>
						<dt class="item" data-tags="interactive tools">
							<a href="http://projects.simsab.net/getitdone/" title="<?php echo $this->localize('getitdone-title'); ?>"><?php echo $this->localize('getitdone-title'); ?></a>
						</dt>
						<dd class="description">
							<p>
								<?php echo $this->localize('getitdone-description'); ?>

								<a class="source-code separated" href="http://code.google.com/p/task-planner/source/browse/trunk" title="<?php echo $this->localize('source-code-title'); ?>"><?php echo $this->localize('source-code-title'); ?></a>
							</p>
						</dd>
						<dt class="item" data-tags="personal tools">
							<a href="http://projects.simsab.net/readosaur/" title="<?php echo $this->localize('readosaur-title'); ?>"><?php echo $this->localize('readosaur-title'); ?></a>
						</dt>
						<dd class="description">
							<p>
								<?php echo $this->localize('readosaur-description'); ?>

								<a class="source-code separated" href="http://code.google.com/p/readosaur/source/browse/trunk" title="<?php echo $this->localize('source-code-title'); ?>"><?php echo $this->localize('source-code-title'); ?></a>
							</p>
						</dd>
						<dt class="item" data-tags="motivado tools">
							<a href="http://preview.motivado.de" title="<?php echo $this->localize('coaching-preview-title'); ?>"><?php echo $this->localize('coaching-preview-title'); ?></a>
						</dt>
						<dd class="description">
							<p>
								<?php echo $this->localize('coaching-preview-description'); ?>

								<a class="source-code separated" href="http://code.google.com/p/coaching-preview/source/browse/trunk" title="<?php echo $this->localize('source-code-title'); ?>"><?php echo $this->localize('source-code-title'); ?></a>
							</p>
						</dd>
						<dt class="item" data-tags="motivado tools">
							<a href="http://import.motivado.de" title="<?php echo $this->localize('coaching-import-title'); ?>"><?php echo $this->localize('coaching-import-title'); ?></a>
						</dt>
						<dd class="description">
							<p>
								<?php echo $this->localize('coaching-import-description'); ?>

								<a class="source-code separated" href="http://code.google.com/p/motivado-importer/source/browse/trunk" title="<?php echo $this->localize('source-code-title'); ?>"><?php echo $this->localize('source-code-title'); ?></a>
							</p>
						</dd>
						<dt class="item" data-tags="motivado tools">
							<a href="http://test.motivado.de" title="<?php echo $this->localize('coaching-test-title'); ?>"><?php echo $this->localize('coaching-test-title'); ?></a>
						</dt>
						<dd class="description">
							<p>
								<?php echo $this->localize('coaching-test-description'); ?>

								<a class="source-code separated" href="http://code.google.com/p/coaching-test/source/browse/trunk" title="<?php echo $this->localize('source-code-title'); ?>"><?php echo $this->localize('source-code-title'); ?></a>
							</p>
						</dd>
						<dt class="item" data-tags="motivado">
							<em><?php echo $this->localize('coaching-api-title'); ?></em>
						</dt>
						<dd class="description">
							<p>
								<?php echo $this->localize('coaching-api-description'); ?>

								<a class="source-code separated" href="http://code.google.com/p/motivado-api/source/browse" title="<?php echo $this->localize('source-code-title'); ?>"><?php echo $this->localize('source-code-title'); ?></a>
							</p>
						</dd>
						<dt class="item" data-tags="motivado">
							<em><?php echo $this->localize('coaching-ui-title'); ?></em>
						</dt>
						<dd class="description">
							<p>
								<?php echo $this->localize('coaching-ui-description'); ?>

								<a class="source-code separated" href="http://code.google.com/p/motivado-ui/source/browse/trunk" title="<?php echo $this->localize('source-code-title'); ?>"><?php echo $this->localize('source-code-title'); ?></a>
							</p>
						</dd>
						<dt class="item" data-tags="frameworks">
							<em><?php echo $this->localize('nacho-title'); ?></em>
						</dt>
						<dd class="description">
							<p>
								<?php echo $this->localize('nacho-description'); ?>

								<a class="source-code separated" href="http://code.google.com/p/nacho/source/browse/trunk" title="<?php echo $this->localize('source-code-title'); ?>"><?php echo $this->localize('source-code-title'); ?></a>
							</p>
						</dd>
						<dt class="item" data-tags="frameworks">
							<em><?php echo $this->localize('cheese-title'); ?></em>
						</dt>
						<dd class="description">
							<p>
								<?php echo $this->localize('cheese-description'); ?>

								<a class="source-code separated" href="http://code.google.com/p/cheese/source/browse/trunk" title="<?php echo $this->localize('source-code-title'); ?>"><?php echo $this->localize('source-code-title'); ?></a>
							</p>
						</dd>
						<dt class="item" data-tags="personal tools">
							<a href="http://backend.notmybiz.com" title="<?php echo $this->localize('notmybiz-backend-title'); ?>"><?php echo $this->localize('notmybiz-backend-title'); ?></a>
						</dt>
						<dd class="description">
							<p>
								<?php echo $this->localize('notmybiz-backend-description'); ?>

								<a class="source-code separated" href="http://code.google.com/p/notmybiz-backend/source/browse/trunk" title="<?php echo $this->localize('source-code-title'); ?>"><?php echo $this->localize('source-code-title'); ?></a>
							</p>
						</dd>
						<dt class="item" data-tags="experimental">
							<a href="http://projects.simsab.net/askme/" title="<?php echo $this->localize('askme-title'); ?>"><?php echo $this->localize('askme-title'); ?></a>
						</dt>
						<dd class="description">
							<p>
								<?php echo $this->localize('askme-description'); ?>

								<a class="source-code separated" href="http://code.google.com/p/askme/source/browse/trunk" title="<?php echo $this->localize('source-code-title'); ?>"><?php echo $this->localize('source-code-title'); ?></a>
							</p>
						</dd>
						<dt class="item" data-tags="experimental">
							<em><?php echo $this->localize('dialogues-title'); ?></em>
						</dt>
						<dd class="description">
							<p>
								<?php echo $this->localize('dialogues-description'); ?>

								<a class="source-code separated" href="http://code.google.com/p/dialogues/source/browse/trunk" title="<?php echo $this->localize('source-code-title'); ?>"><?php echo $this->localize('source-code-title'); ?></a>
							</p>
						</dd>
						<dt class="item" data-tags="tools">
							<em><?php echo $this->localize('scraper-title'); ?></em>
						</dt>
						<dd class="description">
							<p>
								<?php echo $this->localize('scraper-description'); ?>

								<a class="source-code separated" href="http://code.google.com/p/scraping/source/browse/trunk" title="<?php echo $this->localize('source-code-title'); ?>"><?php echo $this->localize('source-code-title'); ?></a>
							</p>
						</dd>
						<dt class="item" data-tags="experimental interactive">
							<a href="http://projects.simsab.net/trend/" title="<?php echo $this->localize('trend-title'); ?>"><?php echo $this->localize('trend-title'); ?></a>
						</dt>
						<dd class="description">
							<p>
								<?php echo $this->localize('trend-description'); ?>

							</p>
						</dd>
						<dt class="item" data-tags="experimental interactive">
							<a href="http://projects.simsab.net/beerball-simulator/" title="<?php echo $this->localize('beerball-simulator-title'); ?>"><?php echo $this->localize('beerball-simulator-title'); ?></a>
						</dt>
						<dd class="description">
							<p>
								<?php echo $this->localize('beerball-simulator-description'); ?>

								<a class="source-code separated" href="http://code.google.com/p/beerball-simulator/source/browse/trunk" title="<?php echo $this->localize('source-code-title'); ?>"><?php echo $this->localize('source-code-title'); ?></a>
							</p>
						</dd>
					</dl>
					<div class="clear"><!--  --></div>
				</section>
				<section class="section contact-me">
					<h2 id="<?php echo $this->localize('contact-me-path'); ?>" class="title">
						<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('document-language') . $this->getConfiguration('pathSeparator') . $this->localize('contact-me-path'); ?>" title="<?php echo $this->localize('contact-me-title'); ?>"><?php echo $this->localize('contact-me-title'); ?></a>
					</h2>
					<p>
						<?php echo $this->localize('contact-me-paragraph1'); ?>

					</p>
					<ul class="options">
						<li class="option">
							<a class="email icon" href="mailto:<?php echo $this->localize('e-mail-address'); ?>" title="<?php echo $this->localize('via-e-mail-title'); ?>"><?php echo $this->localize('e-mail-address'); ?></a>
						</li>
						<li class="option">
							<a class="skype icon" href="skype:simonsablowski" title="<?php echo $this->localize('via-skype-title'); ?>">simonsablowski</a>
						</li>
					</ul>
					<p>
						<?php echo $this->localize('contact-me-paragraph2'); ?>

					</p>
					<ul class="options">
						<li class="option">
							<a class="linkedin icon" href="http://www.linkedin.com/in/simonsablowski" title="LinkedIn">LinkedIn</a>
						</li>
						<li class="option">
							<a class="xing icon" href="https://www.xing.com/profile/Simon_Sablowski" title="XING">XING</a>
						</li>
						<li class="option">
							<a class="facebook icon" href="http://www.facebook.com/simon.sablowski" title="Facebook">Facebook</a>
						</li>
					</ul>
					<p>
						<?php echo $this->localize('contact-me-paragraph3'); ?>

					</p>
					<ul class="options">
						<li class="option">
							<a class="notmybiz icon" href="http://www.notmybiz.com" title="<?php echo $this->localize('notmybiz-title'); ?>"><?php echo $this->localize('notmybiz-title'); ?></a>
						</li>
					</ul>
				</section>
			</article>
		</div>
		<footer id="footer">
			<nav class="navigation">
				<ul class="menu items">
					<li class="item">
						<?php echo $this->localize('document-copyright', $this->getConfiguration('currentYear')); ?>

					</li>
					<li class="item">
						<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('disclaimer-path'); ?>" title="<?php echo $this->localize('disclaimer-menu-title'); ?>" rel="nofollow"><?php echo $this->localize('disclaimer-menu-title'); ?></a>
					</li>
					<li class="item">
						<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('translate-path'); ?>" title="<?php echo $this->localize('translate-menu-title'); ?>"><?php echo $this->localize('translate-menu-title'); ?></a>
					</li>
				</ul>
			</nav>
		</footer>
<?php echo $this->getConfiguration('trackingCode'); ?>

	</body>
</html>