<?php
/**
 * Template part for displaying About page content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wheelbarrow
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php

  $fields = get_field_objects();
  
  if( $fields ) : ?>
      <header class="entry-header">
        <h1 class="about-artist"><?php the_field('about_name'); ?></h1>
        <p class="about-born"><?php the_field('about_born'); ?></p>
      </header><!-- .entry-header -->
    
<div class="about-entry-content">

  <div class="about-artist-info">
    <?php			
    $imageArray = get_field('about_image'); // Array returned by Advanced Custom Fields
    $imageAlt = esc_attr($imageArray['alt']); // Grab, from the array, the 'alt'
    $imageLargeURL = esc_url($imageArray['sizes']['large']); //grab from the array, the 'sizes', and from it, the 'large'
    ?>
    
    <div class="about-image">
      <img src="<?php echo $imageLargeURL;?>" alt="<?php echo $imageAlt; ?>">
    </div><!-- .about-image - main portrait image -->
    
    <div class="about-email">
      <?php if( get_field('about_email') ): ?>
      <p>Email: </p>
      <a href="mailto:<?php the_field('about_email'); ?>"><?php the_field('about_email'); ?></a>
    </div><!-- .about-artist-email section --> 
    <?php endif; ?>

  </div><!-- .about-artist-info container -->

  <div class="about-artist-accomplishments">
    <?php if( get_field('about_exhibitions') ): ?>
    <div class="about-exhibitions">
      <h3>Exhibitions</h3>
      <?php the_field('about_exhibitions'); ?>
    </div><!-- .about-exhibitions section -->
    <?php endif; ?>

    <?php if( get_field('about_awards') ): ?>
    <div class="about-awards">
      <h3>Awards</h3>
      <?php the_field('about_awards'); ?>
    </div><!-- .about-awards section -->
    <?php endif; ?>

    <?php if( get_field('about_residencies') ): ?>
    <div class="about-residencies">
      <h3>Residencies</h3>
      <?php the_field('about_residencies'); ?>
    </div><!-- .about-residencies section -->
    <?php endif; ?>

    <?php if( get_field('about_bibliography') ): ?>
    <div class="about-bibliography">
      <h3>Bibliography</h3>
      <?php the_field('about_bibliography'); ?>
    </div><!-- .about-bibliography section -->
    <?php endif; ?>

    <?php if( get_field('about_teaching') ): ?>
    <div class="about-teaching">
      <h3>Teaching</h3>
      <?php the_field('about_teaching'); ?>
    </div><!-- .about-teaching section -->
    <?php endif; ?>

    <?php if( get_field('about_education') ): ?>
    <div class="about-education">
      <h3>Education</h3>
      <?php the_field('about_education'); ?>
    </div><!-- .about-education section -->
    <?php endif; ?>

  </div><!-- .about-artist-accomplishments container -->

<!-- code above is far too verbose and WET - should use a foreach loop to cycle through each field that exists and display them in the same format https://www.advancedcustomfields.com/resources/hiding-empty-fields/. But how to only cycle through certain fields (not image name and born as they are different types)> Do i need to have two different ACF groups assigned to this page? If so I can't have the user-friendly tabbed field sections I created in admin. Also, how to make each line of the field values inputted their own <li> item? ie a bullet point list item after each <br> tag. Or do I need WYSIWYG editor on each field in admin so the user creates their own lists? Would this be better anyway as they can add hyperlinks on everything? 
Also should I use add-on plugin Repeater Fields (£25 or is included in ACF Pro which is £100) for each of these 'accomplishments' fields?-->

  <?php endif; ?>


  <?php
    the_content(); ?>

  <?php
    wp_link_pages( array(
      'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wheelbarrow' ),
      'after'  => '</div>',
    ) );
  ?>
</div><!-- .entry-content -->

<?php if ( get_edit_post_link() ) : ?>
  <footer class="entry-footer">
    <?php
      edit_post_link(
        sprintf(
          wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
            __( 'Edit <span class="screen-reader-text">%s</span>', 'wheelbarrow' ),
            array(
              'span' => array(
                'class' => array(),
              ),
            )
          ),
          get_the_title()
        ),
        '<span class="edit-link">',
        '</span>'
      );
    ?>
  </footer><!-- .entry-footer -->
<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->