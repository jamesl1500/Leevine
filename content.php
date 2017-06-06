<div class="blogPost <?php if(get_post_format() == "quote"){ ?>quote<?php } ?>">
    <?php if(get_post_format() == "quote"){ ?>
        <div class="itsAQuote">
            <h3>Quotes and Poetry</h3>
        </div>
    <?php } ?>
    <?php if(has_post_thumbnail()){ ?>
        <div class="topBlogBanner" data-postid="<?php the_ID(); ?>">
            <div class="thumbnailView" style="background: url(<?php echo the_post_thumbnail_url('large'); ?>);"></div>
        </div>
    <?php } ?>
    <div class="innerBlogContent card">
        <div class="postTitle">
            <h3 class="card-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>
        <div class="topAuthorInfo">
            <h3><span class="author"><?php the_author(); ?></span> on <?php the_date(); ?></h3>
        </div>
        <div class="sneakPeak">
            <?php if(get_post_format() == "quote"){ ?>
                <div class="quoteCont">
                    <p>
                        <?php echo wp_strip_all_tags(get_the_content()); ?>
                    </p>
                    <h4><span class="authorName"><?php echo get_post_meta(get_the_ID(), 'quote-author', true); ?></span> - <a href="<?php echo get_post_meta(get_the_ID(), 'quote-author-book-link', true); ?>"><?php echo get_post_meta(get_the_ID(), 'quote-author-book', true); ?></a></h4>
                </div>
            <?php } else { ?>
                <?php echo wp_strip_all_tags(get_the_content()); ?>
            <?php } ?>
            <?php

            $tags = get_the_tags();

            if(count($tags) > 1)
            {
                ?>
                <div class="tags">
                 <?php
                    foreach ($tags as $tag)
                    {
                        ?>
                        <a href="<?php echo get_tag_link($tag->term_id); ?>">
                        <div class="tag chip">
                            <?php echo $tag->name; ?>
                        </div>
                        </a>
                        <?php
                    }
                 ?>
                 </div>
                 <?php
            }
            ?>
        </div>
    </div>
</div>