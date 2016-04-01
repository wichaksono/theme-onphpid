<?php
get_header();?>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('<?php echo get_template_directory_uri() .'/img/home-bg.jpg';?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1><?php bloginfo('name');?></h1>
                    <hr class="small">
                    <span class="subheading"><?php bloginfo('description');?></span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <?php
        /**
         * Check Apakah Ada Postingan
         */
        if (have_posts()) {
            /**
             * menampilkan posting
             */
            while (have_posts()) {
                the_post(); ?>

                <div class="post-preview">
                    <a href="<?php the_permalink();?>">
                        <h2 class="post-title">
                           <?php the_title();?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?php 
                            /**
                             * Menampilkan Posting sebagian
                             */
                            the_excerpt();?>
                        </h3>
                    </a>
                    <p class="post-meta">Posted by 
                      <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a>
                      on <?php the_time();?>
                    </p>
                </div>
                <hr>
                <?php
            }
            ?>
            <!-- Pager -->
            <ul class="pager">
                <li class="previous">
                    <?php previous_posts_link('&larr; Newer posts'); ?>
                </li>
                <li class="next">
                    <?php next_posts_link('Older posts &rarr;'); ?>
                </li>
            </ul>
            <?php

        } else {
            // not found article ?>
            <div class="post-preview">
                <h2 class="post-title">Article Not Found!!!</h2>
            </div>
            <hr>
            <?php
        }
        ?>
            
        </div>
    </div>
</div>

<hr>

<?php
get_footer();?>