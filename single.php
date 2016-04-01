<?php
get_header();
if (have_posts()) {
    while (have_posts()) {
        the_post();
        /**
         * menggunakan featured image
         */
        if (has_post_thumbnail()) {
            $thumbnail = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
        } else {
            $thumbnail = get_template_directory_uri() . '/img/post-bg.jpg';
        }
        ?>


    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo $thumbnail;?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1><?php the_title();?></h1>
                        <span class="meta"Posted by 
                          <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a>
                          on <?php the_time();?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="entry"><?php the_content();?></div>
                    <div class="tags">
                        <?php the_tags();?>
                    </div>
                    <div class="row posts-navigations">
                        <div class="col-md-6">
                           <?php previous_post_link();?>
                        </div>
                        <div class="col-md-6 text-right">
                          <?php next_post_link();?>
                        </div>
                    </div>

                    <div class="row comments-template">
                        <div class="the-comments col-md-12">
                            <?php comments_template();?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </article>

    <hr>

        <?php
    }
}
?>
<?php
get_footer();?>