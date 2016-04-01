<?php
get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" 
            style="background-image: url('<?php echo get_template_directory_uri() . '/img/about-bg.jpg';?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1><?php the_title();?></h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php the_content();?>
            </div>
        </div>
    </div>

    <hr>
<?php
  } // end while
} // end if

get_footer();?>