<!DOCTYPE html>
<html lang="<?php echo $this->localize('document-language'); ?>">
	<head>
		<title><?php echo $this->localize('document-title'); ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="robots" content="noindex, nofollow">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<link href="<?php echo $this->localize('canonical-url'); ?>" rel="canonical">
		<link href="<?php echo $this->getConfiguration('basePath'); ?>css/simsab.css" rel="stylesheet" type="text/css">
		<link href="<?php echo $this->getConfiguration('basePath'); ?>img/simsab.ico" rel="shortcut icon" type="image/x-icon">
	</head>
	<body>
		<header id="header">
			<div id="logo-container">
				<h1 id="logo">
					<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('document-language'); ?>" title="<?php echo $this->localize('document-title'); ?>"><?php echo $this->localize('document-title'); ?></a>
				</h1>
				<nav class="menu-container">
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
				<section class="section legal-notice">
					<h2 id="<?php echo $this->localize('legal-notice-path'); ?>" class="title">
						<a href="<?php echo $this->getConfiguration('basePath') . $this->localize('legal-notice-path'); ?>" title="<?php echo $this->localize('legal-notice-title'); ?>" rel="nofollow"><?php echo $this->localize('legal-notice-title'); ?></a>
					</h2>
					<h3 class="title">
						<?php echo $this->localize('legal-notice-block1-title'); ?>

					</h3>
					<p class="paragraph">
						<?php echo $this->localize('legal-notice-block1-paragraph1'); ?>

					</p>
					<h3 class="title">
						<?php echo $this->localize('legal-notice-block2-title'); ?>

					</h3>
					<p class="paragraph">
						<?php echo $this->localize('legal-notice-block2-paragraph1'); ?>

					</p>
					<h3 class="title">
						<?php echo $this->localize('legal-notice-block3-title'); ?>

					</h3>
					<p class="paragraph">
						<?php echo $this->localize('legal-notice-block3-paragraph1'); ?>

					</p>
					<h3 class="title">
						<?php echo $this->localize('legal-notice-block4-title'); ?>

					</h3>
					<p class="paragraph">
						<?php echo $this->localize('legal-notice-block4-paragraph1'); ?>

					</p>
					<h3 class="title">
						<?php echo $this->localize('legal-notice-block5-title'); ?>

					</h3>
					<p class="paragraph">
						<?php echo $this->localize('legal-notice-block5-paragraph1'); ?>

					</p>
					<h3 class="title">
						<?php echo $this->localize('legal-notice-block6-title'); ?>

					</h3>
					<p class="paragraph">
						<?php echo $this->localize('legal-notice-block6-paragraph1'); ?>

					</p>
					<p class="paragraph">
						<?php echo $this->localize('legal-notice-block6-paragraph2'); ?>

					</p>
					<p class="paragraph">
						<?php echo $this->localize('legal-notice-block6-paragraph3'); ?>

					</p>
					<h3 class="title">
						<?php echo $this->localize('legal-notice-block7-title'); ?>

					</h3>
					<p class="paragraph">
						<?php echo $this->localize('legal-notice-block7-paragraph1'); ?>

					</p>
					<p class="paragraph">
						<?php echo $this->localize('legal-notice-block7-paragraph2'); ?>

					</p>
					<p class="paragraph">
						<?php echo $this->localize('legal-notice-block7-paragraph3'); ?>

					</p>
					<h3 class="title">
						<?php echo $this->localize('legal-notice-block8-title'); ?>

					</h3>
					<ul>
						<li class="bullet">
							<?php echo $this->localize('legal-notice-block8-paragraph1'); ?>

						</li>
						<li class="bullet">
							<?php echo $this->localize('legal-notice-block8-paragraph2'); ?>

						</li>
						<li class="bullet">
							<?php echo $this->localize('legal-notice-block8-paragraph3'); ?>

						</li>
						<li class="bullet">
							<?php echo $this->localize('legal-notice-block8-paragraph4'); ?>

						</li>
						<li class="bullet">
							<?php echo $this->localize('legal-notice-block8-paragraph5'); ?>

						</li>
					</ul>
				</section>
			</article>
		</div>
	</body>
</html>