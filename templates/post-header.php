<?php
$post_info = get_post(get_the_ID());
$user_info = get_user_by("id", $post_info->post_author);
?>
<div class="topHeadBanner">
    <div class="inner_cover">
        <div class="topProfile">
            <div class="middleIcon"></div>
        </div>
        <div class="bottomTitle">
            <h5 class="tinyWebsite">Jays World</h5>
            <h3 class="name"><?php the_title(); ?></h3>
            <h4 class="tagline"><span class="author">Posted By <?php echo $user_info->first_name; ?> <?php echo $user_info->last_name; ?></span> on <?php echo mysql2date('l jS \of F Y', $post_info->post_date); ?></h4>
        </div>
    </div>
</div>
<div class="mainNavigation">
    <nav class="innerNav nav-extended">
        <div class="nav-content">
            <ul class="tabs toptab tabs-transparent container">
                <li class="tab" onClick="window.location.assign('<?php bloginfo('url'); ?>');"><a href="<?php bloginfo('url'); ?>">Home</a></li>
                <li class="tab" onClick="window.location.assign('<?php bloginfo('url'); ?>/about');"><a href="<?php bloginfo('url'); ?>/about">About</a></li>
                <li class="tab" onClick="window.location.assign('http://jameslatten.me');" ><a href="http://jameslatten.me">James Latten</a></li>
                <li class="tab" onClick="window.location.assign('http://jameslatten.me/contact_me');"><a href="http://jameslatten.me/contact_me">Contact Me</a></li>
            </ul>
        </div>
    </nav>
</div>