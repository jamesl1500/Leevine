<?php
/*
 * Sidebar File
 * ----
 * This file will hold the sidebar content for most of the pages!
 */

$user_info = get_user_by("email", "james@sitelyftstudios.com");
?>
<div class="inner_sidebar">
    <div class="card authorHold" id="authorHold">
        <div class="card-image">
            <img src="http://jameslatten.me/assets/images/james.jpg">
            <span class="card-title"><?php echo $user_info->first_name . ' ' . $user_info->last_name; ?></span>
        </div>
        <div class="card-tabs">
            <ul class="tabs main_tab tabs-fixed-width">
                <li class="tab"><a class="active" href="#tab1">About Me</a></li>
                <li class="tab"><a href="#tab2">Contact</a></li>
                <li class="tab"><a href="#tab3">Hire Me</a></li>
            </ul>
        </div>
        <div class="card-content grey lighten-4">
            <div id="tab1">
                <p><?php echo get_the_author_meta('description', $user_info->ID); ?></p>
            </div>
            <div id="tab2">
                <ul>
                    <li><a href="http://jameslatten.me"><span><i class="fa fa-fw fa-window-maximize" aria-hidden="true"></i></span> Jameslatten.me</a></li>
                    <li><a href="https://twitter.com/jameslatten_dev"><span><i class="fa fa-fw fa-twitter" aria-hidden="true"></i></span> Twitter</a></li>
                    <li><a href="mailto:james@sitelyftstudios.com"><span><i class="fa fa-fw fa-envelope" aria-hidden="true"></i></span> Email</a></li>
                </ul>
            </div>
            <div id="tab3">
                <a class="upwork waves-effect waves-light btn" href="https://www.upwork.com/fl/jameslattenjr2?viewMode=1">UpWork</a>
                <a class="freelancer waves-effect waves-light btn" href="https://www.freelancer.com/u/sitelyft.html">Freelancer</a>
                <a class="remote waves-effect waves-light btn" href="https://remote.com/jameslatten">Remote</a>
            </div>
        </div>
    </div>
    <div class="card latestPosts blue-grey darken-1" id="latestPosts">
        <div class="card-content white-text">
            <span class="card-title">Poetry Of The Day</span>
            <p>
                <?php
                // Lets get the latest post with a quote
                $args = array(
                    'post_count' => 1,
                    'meta_query' => array(
                        array(
                            'key' => 'is-quote-of-the-day',
                            'value' => 'true',
                            'compare' => '=',
                        )
                    )
                );
                $query = new WP_Query($args);

                if($query->have_posts())
                {
                    while($query->have_posts())
                    {
                        $query->the_post();

                        the_content();
                        ?>
                            <h4 class="ather"><span class="authorName"><?php echo get_post_meta(get_the_ID(), 'quote-author', true); ?></span> - <a href="<?php echo get_post_meta(get_the_ID(), 'quote-author-book-link', true); ?>"><?php echo get_post_meta(get_the_ID(), 'quote-author-book', true); ?></a></h4>
                        <?php
                    }
                }
                ?>
            </p>
        </div>
    </div>
</div>
