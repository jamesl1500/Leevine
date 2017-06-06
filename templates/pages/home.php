<div class="mainWebsite container">
    <div class="leftBlogPosts col-lg-8">
        <div class="innerBlogPosts">
            <?php 
                if(have_posts())
                {
                    while(have_posts())
                    {
                        the_post();
                        get_template_part('content', get_post_format());
                    }
                } else { ?>
                <div class="card noPosts">
                    <h3>Sorry! We couldn't find any posts :(</h3>
                </div>
            <?php 
                } 
            ?>
        </div>
    </div>
    <div class="rightSidebar col-lg-4">
        <?php require get_theme_root('template_url') . '/leevine/sidebar.php'; ?>
    </div>
</div>