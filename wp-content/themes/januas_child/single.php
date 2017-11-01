<?php get_header(); ?>

<div id="content">

    <div id="inner-content" class="wrap clearfix">

        <div id="main" class="eightcol first clearfix" role="main">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

                        <header class="article-header">
                            
                            <h1 class="page-title"><?php the_title(); ?></h1>

                            <p class="byline vcard"><?php _e("Posted", "januas"); ?> <time class="updated" datetime="<?php echo the_time('c'); ?>"><?php the_time(get_option('date_format')); ?></time> <?php _e("by", "januas"); ?> <span class="author"><?php the_author_posts_link(); ?></span>.</p>

                        </header> <!-- end article header -->

                        <section class="entry-content clearfix">
                            <?php the_content(); ?>
                        </section> <!-- end article section -->

                        <footer class="article-footer">

                            <?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>

                        </footer> <!-- end article footer -->

                        <?php comments_template(); ?>

                    </article> <!-- end article -->

                    <?php
                endwhile;
            else :
                ?>

                <article id="post-not-found" class="hentry clearfix">
                    <header class="article-header">
                        <h1><?php _e("Post Not Found!", "januas"); ?></h1>
                    </header>
                    <section class="entry-content">
                        <p><?php _e("Something is missing. Try double checking things.", "januas"); ?></p>
                    </section>
                    <footer class="article-footer">
                        <p><?php _e("This is the error message in the page.php template.", "januas"); ?></p>
                    </footer>
                </article>

            <?php endif; ?>

        </div> <!-- end #main -->

        <?php get_sidebar(); ?>

    </div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>