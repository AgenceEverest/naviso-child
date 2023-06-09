<?php $blog_precedent = get_field('blog_precedent', 'option'); ?>
<?php $blog_suivant = get_field('blog_suivant', 'option'); ?>
<?php $blog_retour = get_field('blog_retour', 'option'); ?>
<!-- Single post -->
<?php
if (is_singular('post')) : ?>
	<div class="nav_blog_wrapper">
		<nav id="nav_blog" class="content_width">
			<div id="nav_blog_left" class="nav_blog_item">
				<?php $prev_post = get_next_post(); ?>
				<?php if (!empty($prev_post)) : ?>
					<a href="<?php the_permalink($prev_post->ID); ?>" class="nav_blog_link_item">
						<p class="nav_blog_prevnext legende"><?= apply_filters('add_svg', 'arrow-left-nav'); ?> <span><?php if ($blog_precedent) : ?><?php echo $blog_precedent; ?><?php endif; ?></span></p>
						<p class="nav_blog_title"><?php echo $prev_post->post_title; ?></p>
					</a>
				<?php endif; ?>
			</div>
			<div id="nav_blog_center" class="nav_blog_item">
				<?php $page_for_posts = get_field('page_for_posts',  'option');
				if (isset($page_for_posts)) {
					$page_for_posts_permalink = get_permalink($page_for_posts->ID);
				}
				$texte_bouton_de_retour_blog = get_field('texte_bouton_de_retour_blog', 'option'); ?>
				<a href="<?= $page_for_posts_permalink ?>" class="nav_blog_link_item">
					<span><?php if ($blog_retour) : ?><?php echo $blog_retour; ?><?php endif; ?> <br><?php echo $texte_bouton_de_retour_blog; ?></span>
				</a>
			</div>
			<div id="nav_blog_right" class="nav_blog_item">
				<?php $next_post = get_previous_post(); ?>
				<?php if (!empty($next_post)) : ?>
					<a href="<?php the_permalink($next_post->ID); ?>" class="nav_blog_link_item">
						<p class="nav_blog_prevnext legende"><span><?php if ($blog_suivant) : ?><?php echo $blog_suivant; ?><?php endif; ?></span> <?= apply_filters('add_svg', 'arrow-right-nav'); ?></p>
						<p class="nav_blog_title"><?php echo $next_post->post_title; ?></p>
					</a>
				<?php endif; ?>
			</div>
		</nav>
	</div>
<?php endif; ?>

<!-- Single offres -->
<?php
if (is_singular('offres')) : ?>
	<div class="nav_blog_wrapper">
		<nav id="nav_blog" class="content_width">
			<div id="nav_blog_left" class="nav_blog_item">
				<?php $prev_post = get_next_post(); ?>
				<?php if (!empty($prev_post)) : ?>
					<a href="<?php the_permalink($prev_post->ID); ?>" class="nav_blog_link_item">
						<p class="nav_blog_prevnext legende"><?= apply_filters('add_svg', 'arrow-left-nav'); ?> <span><?php if ($blog_precedent) : ?><?php echo $blog_precedent; ?><?php endif; ?></span></p>
						<p class="nav_blog_title"><?php echo $prev_post->post_title; ?></p>
					</a>
				<?php endif; ?>
			</div>
			<div id="nav_blog_center" class="nav_blog_item">
				<?php $texte_bouton_de_retour_offres = get_field('texte_bouton_de_retour_offres', 'option');
				$page_qui_liste_les_offres = get_field('page_qui_liste_les_offres', 'option');
				$page_qui_liste_les_offres_id = $page_qui_liste_les_offres->ID;
				$page_qui_liste_les_offres_permalink = get_permalink($page_qui_liste_les_offres_id); ?>
				<a href="<?php echo $page_qui_liste_les_offres_permalink; ?>" class="nav_blog_link_item">
					<span><?php if ($blog_retour) : ?><?php echo $blog_retour; ?><?php endif; ?><br><?php echo $texte_bouton_de_retour_offres; ?></span>
				</a>
			</div>
			<div id="nav_blog_right" class="nav_blog_item">
				<?php $next_post = get_previous_post(); ?>
				<?php if (!empty($next_post)) : ?>
					<a href="<?php the_permalink($next_post->ID); ?>" class="nav_blog_link_item">
						<p class="nav_blog_prevnext legende"><span><?php if ($blog_suivant) : ?><?php echo $blog_suivant; ?><?php endif; ?></span> <?= apply_filters('add_svg', 'arrow-right-nav'); ?></p>
						<p class="nav_blog_title"><?php echo $next_post->post_title; ?></p>
					</a>
				<?php endif; ?>
			</div>
		</nav>
	</div>
<?php endif; ?>

<!-- Single clients -->
<?php
if (is_singular('client')) : ?>
	<div class="nav_blog_wrapper">
		<nav id="nav_blog" class="content_width">
			<div id="nav_blog_left" class="nav_blog_item">
				<?php $prev_post = get_next_post(); ?>
				<?php if (!empty($prev_post)) : ?>
					<a href="<?php the_permalink($prev_post->ID); ?>" class="nav_blog_link_item">
						<p class="nav_blog_prevnext legende"><?= apply_filters('add_svg', 'arrow-left-nav'); ?> <span><?php if ($blog_precedent) : ?><?php echo $blog_precedent; ?><?php endif; ?></span></p>
						<p class="nav_blog_title"><?php echo $prev_post->post_title; ?></p>
					</a>
				<?php endif; ?>
			</div>
			<div id="nav_blog_center" class="nav_blog_item">
				<?php $texte_bouton_de_retour_aux_clients = get_field('texte_bouton_de_retour_clients', 'option');
				$page_qui_liste_les_clients = get_field('page_qui_liste_les_clients', 'option');
				$page_qui_liste_les_clients_id = $page_qui_liste_les_clients ? $page_qui_liste_les_clients->ID : '';
				$page_qui_liste_les_clients_permalink = $page_qui_liste_les_clients_id ? get_permalink($page_qui_liste_les_clients_id) : ''; ?>
				<a href="<?php echo $page_qui_liste_les_clients_permalink; ?>" class="nav_blog_link_item">
					<span><?php if ($blog_retour) : ?><?php echo $blog_retour; ?><?php endif; ?><br><?php echo $texte_bouton_de_retour_aux_clients; ?></span>
				</a>
			</div>
			<div id="nav_blog_right" class="nav_blog_item">
				<?php $next_post = get_previous_post(); ?>
				<?php if (!empty($next_post)) : ?>
					<a href="<?php the_permalink($next_post->ID); ?>" class="nav_blog_link_item">
						<p class="nav_blog_prevnext legende"><span><?php if ($blog_suivant) : ?><?php echo $blog_suivant; ?><?php endif; ?></span> <?= apply_filters('add_svg', 'arrow-right-nav'); ?></p>
						<p class="nav_blog_title"><?php echo $next_post->post_title; ?></p>
					</a>
				<?php endif; ?>
			</div>
		</nav>
	</div>
<?php endif; ?>

<!-- Single formations -->
<?php
if (is_singular('formation')) : ?>
	<div class="nav_blog_wrapper">
		<nav id="nav_blog" class="content_width">
			<div id="nav_blog_left" class="nav_blog_item">
				<?php $prev_post = get_next_post(); ?>
				<?php if (!empty($prev_post)) : ?>
					<a href="<?php the_permalink($prev_post->ID); ?>" class="nav_blog_link_item">
						<p class="nav_blog_prevnext legende"><?= apply_filters('add_svg', 'arrow-left-nav'); ?> <span><?php if ($blog_precedent) : ?><?php echo $blog_precedent; ?><?php endif; ?></span></p>
						<p class="nav_blog_title"><?php echo $prev_post->post_title; ?></p>
					</a>
				<?php endif; ?>
			</div>
			<div id="nav_blog_center" class="nav_blog_item">
				<?php $texte_bouton_de_retour_aux_formations = get_field('texte_bouton_de_retour_formations', 'option');
				$page_qui_liste_les_formations = get_field('page_qui_liste_les_formations', 'option');
				$page_qui_liste_les_formations_id = $page_qui_liste_les_formations->ID;
				$page_qui_liste_les_formations_permalink = get_permalink($page_qui_liste_les_formations_id); ?>
				<a href="<?php echo $page_qui_liste_les_formations_permalink; ?>" class="nav_blog_link_item">
					<span><?php if ($blog_retour) : ?><?php echo $blog_retour; ?><?php endif; ?><br><?php echo $texte_bouton_de_retour_aux_formations; ?></span>
				</a>
			</div>
			<div id="nav_blog_right" class="nav_blog_item">
				<?php $next_post = get_previous_post(); ?>
				<?php if (!empty($next_post)) : ?>
					<a href="<?php the_permalink($next_post->ID); ?>" class="nav_blog_link_item">
						<p class="nav_blog_prevnext legende"><span><?php if ($blog_suivant) : ?><?php echo $blog_suivant; ?><?php endif; ?></span> <?= apply_filters('add_svg', 'arrow-right-nav'); ?></p>
						<p class="nav_blog_title"><?php echo $next_post->post_title; ?></p>
					</a>
				<?php endif; ?>
			</div>
		</nav>
	</div>
<?php endif; ?>

<!-- Single logiciels -->
<?php
if (is_singular('logiciel')) : ?>
	<div class="nav_blog_wrapper nav-blog-logiciel">
		<nav id="nav_blog" class="content_width">
			<div id="nav_blog_left" class="nav_blog_item">
				<?php $prev_post = get_next_post(); ?>
				<?php if (!empty($prev_post)) : ?>
					<a href="<?php the_permalink($prev_post->ID); ?>" class="nav_blog_link_item">
						<p class="nav_blog_prevnext legende"><?= apply_filters('add_svg', 'arrow-left-nav'); ?> <span><?php if ($blog_precedent) : ?><?php echo $blog_precedent; ?><?php endif; ?></span></p>
						<p class="nav_blog_title"><?php echo $prev_post->post_title; ?></p>
					</a>
				<?php endif; ?>
			</div>
			<div id="nav_blog_center" class="nav_blog_item">
				<?php $texte_bouton_de_retour_aux_logiciels = get_field('texte_bouton_de_retour_logiciels', 'option');
				$page_qui_liste_les_logiciels = get_field('page_qui_liste_les_logiciels', 'option');
				$page_qui_liste_les_logiciels_id = $page_qui_liste_les_logiciels->ID;
				$page_qui_liste_les_logiciels_permalink = get_permalink($page_qui_liste_les_logiciels_id); ?>
				<a href="<?php echo $page_qui_liste_les_logiciels_permalink; ?>" class="nav_blog_link_item">
					<span><?php if ($blog_retour) : ?><?php echo $blog_retour; ?><?php endif; ?><br><?php echo $texte_bouton_de_retour_aux_logiciels; ?></span>
				</a>
			</div>
			<div id="nav_blog_right" class="nav_blog_item">
				<?php $next_post = get_previous_post(); ?>
				<?php if (!empty($next_post)) : ?>
					<a href="<?php the_permalink($next_post->ID); ?>" class="nav_blog_link_item">
						<p class="nav_blog_prevnext legende"><span><?php if ($blog_suivant) : ?><?php echo $blog_suivant; ?><?php endif; ?></span> <?= apply_filters('add_svg', 'arrow-right-nav'); ?></p>
						<p class="nav_blog_title"><?php echo $next_post->post_title; ?></p>
					</a>
				<?php endif; ?>
			</div>
		</nav>
	</div>
<?php endif; ?>

<!-- Single metiers -->
<?php
if (is_singular('metier')) : ?>
	<div class="nav_blog_wrapper">
		<nav id="nav_blog" class="content_width">
			<div id="nav_blog_left" class="nav_blog_item">
				<?php $prev_post = get_next_post(); ?>
				<?php if (!empty($prev_post)) : ?>
					<a href="<?php the_permalink($prev_post->ID); ?>" class="nav_blog_link_item">
						<p class="nav_blog_prevnext legende"><?= apply_filters('add_svg', 'arrow-left-nav'); ?> <span><?php if ($blog_precedent) : ?><?php echo $blog_precedent; ?><?php endif; ?></span></p>
						<p class="nav_blog_title"><?php echo $prev_post->post_title; ?></p>
					</a>
				<?php endif; ?>
			</div>
			<div id="nav_blog_center" class="nav_blog_item">
				<?php $texte_bouton_de_retour_aux_metiers = get_field('texte_bouton_de_retour_logiciels', 'option');
				$page_qui_liste_les_metiers = get_field('page_qui_liste_les_logiciels', 'option');
				$page_qui_liste_les_metiers_id = $page_qui_liste_les_metiers->ID;
				$page_qui_liste_les_metiers_permalink = get_permalink($page_qui_liste_les_metiers_id); ?>
				<a href="<?php echo $page_qui_liste_les_metiers_permalink; ?>" class="nav_blog_link_item">
					<span><?php if ($blog_retour) : ?><?php echo $blog_retour; ?><?php endif; ?><br><?php echo $texte_bouton_de_retour_aux_metiers; ?></span>
				</a>
			</div>
			<div id="nav_blog_right" class="nav_blog_item">
				<?php $next_post = get_previous_post(); ?>
				<?php if (!empty($next_post)) : ?>
					<a href="<?php the_permalink($next_post->ID); ?>" class="nav_blog_link_item">
						<p class="nav_blog_prevnext legende"><span><?php if ($blog_suivant) : ?><?php echo $blog_suivant; ?><?php endif; ?></span> <?= apply_filters('add_svg', 'arrow-right-nav'); ?></p>
						<p class="nav_blog_title"><?php echo $next_post->post_title; ?></p>
					</a>
				<?php endif; ?>
			</div>
		</nav>
	</div>
<?php endif; ?>