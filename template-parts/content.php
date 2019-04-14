<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package dineshghimire
 * @subpackage Blank Theme
 * @since ColorMag 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <?php if ( has_post_thumbnail() ) { ?>
      <div class="featured-image">
         <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail( 'full' ); ?></a>
      </div>
   <?php } ?>
   <div class="article-content clearfix">
      <?php 
      $categories = get_the_category();
      $output     = '';
      if ( $categories ) {
         $output .= '<div class="above-entry-meta"><span class="cat-links">';
         foreach ( $categories as $category ) {
            $output .= '<a href="' . get_category_link( $category->term_id ) . '"  rel="category tag">' . $category->cat_name . '</a>';
         }
         $output .= '</span></div>';
         //echo trim( $output, $separator );
      }
      echo $output;
      ?>
      <header class="entry-header">
         <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><?php the_title(); ?></a>
         </h2>
      </header>
      <?php
      echo '<div class="below-entry-meta">';
      $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
      if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
         $time_string .= '<time class="updated" datetime="%3$s">%4$s</time>';
      }
      $time_string = sprintf( $time_string,
         esc_attr( get_the_date( 'c' ) ),
         esc_html( get_the_date() ),
         esc_attr( get_the_modified_date( 'c' ) ),
         esc_html( get_the_modified_date() )
      );
      printf( __( '<span class="posted-on"><a href="%1$s" title="%2$s" rel="bookmark"><i class="fa fa-calendar-o"></i> %3$s</a></span>', '__Text_Domain__' ),
         esc_url( get_permalink() ),
         esc_attr( get_the_time() ),
         $time_string
      ); ?>
      <span class="byline">
         <span class="author vcard">
            <i class="fa fa-user"></i>
            <a class="url fn n"
            href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"
            title="<?php echo get_the_author(); ?>"><?php echo esc_html( get_the_author() ); ?>
         </a>
      </span>
   </span>
   <?php
   if ( ! post_password_required() && comments_open() ) { ?>
      <span class="comments"><?php comments_popup_link( __( '<i class="fa fa-comment"></i> 0 Comments', '__Text_Domain__' ), __( '<i class="fa fa-comment"></i> 1 Comment', '__Text_Domain__' ), __( '<i class="fa fa-comments"></i> % Comments', '__Text_Domain__' ) ); ?></span>
   <?php }
   $tags_list = get_the_tag_list( '<span class="tag-links"><i class="fa fa-tags"></i>', __( ', ', '__Text_Domain__' ), '</span>' );
   if ( $tags_list ) {
      echo $tags_list;
   }
   edit_post_link( __( 'Edit', '__Text_Domain__' ), '<span class="edit-link"><i class="fa fa-edit"></i>', '</span>' );
   echo '</div>';
   ?>
   <div class="entry-content clearfix">
      <?php
      the_excerpt();
      ?>
      <a class="more-link" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><span><?php esc_html_e( 'Read more', '__Text_Domain__' ); ?></span></a>
   </div>
</div>
</article>