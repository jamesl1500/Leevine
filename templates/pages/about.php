<div class="mainWebsite container">
    <div class="leftPageContainer col-lg-8">
        <div class="card innerContent">
            <div class="card-content">
                <span class="card-title"><?php the_title(); ?></span>
                <?php
                // TO SHOW THE PAGE CONTENTS
                while ( have_posts() ) : the_post(); ?>
                    <div class="pageContent">
                        <?php the_content(); ?>
                    </div>
                    <?php
                endwhile;
                wp_reset_query();
                ?>
            </div>
        </div>
    </div>
    <div class="rightSidebar col-lg-4">
        <?php require get_theme_root('template_url') . '/leevine/sidebar.php'; ?>
    </div>
</div>