<p class="rs_link">
    <?php $page_facebook = get_field('page_facebook', 'option'); ?>
    <?php $page_twitter = get_field('page_twitter', 'option'); ?>
    <?php $page_linkedin = get_field('page_linkedin', 'option'); ?>
    <?php $page_instagram = get_field('page_instagram', 'option'); ?>
    <?php $reseaux_sociaux_suivez_nous_sur = get_field('reseaux_sociaux_suivez-nous_sur', 'option'); ?>

    <?php if ($page_facebook) : ?><a target="_blank" href="<?php echo $page_facebook; ?>" class="rs_link_item" title="<?php if ($reseaux_sociaux_suivez_nous_sur) : ?><?php echo $reseaux_sociaux_suivez_nous_sur; ?><?php endif; ?> Facebook">
            <?= apply_filters('add_svg', 'facebook'); ?>
        </a>
    <?php endif; ?>
    <?php if ($page_twitter) : ?><a target="_blank" href="<?php echo $page_twitter; ?>" class="rs_link_item" title="<?php if ($reseaux_sociaux_suivez_nous_sur) : ?><?php echo $reseaux_sociaux_suivez_nous_sur; ?><?php endif; ?> Twitter">
            <?= apply_filters('add_svg', 'twitter'); ?>
        </a>
    <?php endif; ?>
    <?php if ($page_linkedin) : ?><a target="_blank" href="<?php echo $page_linkedin; ?>" class="rs_link_item" title="<?php if ($reseaux_sociaux_suivez_nous_sur) : ?><?php echo $reseaux_sociaux_suivez_nous_sur; ?><?php endif; ?> Linkedin">
            <?= apply_filters('add_svg', 'linkedin'); ?>
        </a>
    <?php endif; ?>
    <?php if ($page_instagram) : ?><a target="_blank" href="<?php echo $page_instagram; ?>" class="rs_link_item" title="<?php if ($reseaux_sociaux_suivez_nous_sur) : ?><?php echo $reseaux_sociaux_suivez_nous_sur; ?><?php endif; ?> Instagram">
            <?= apply_filters('add_svg', 'instagram'); ?>
        </a>
    <?php endif; ?>
</p>