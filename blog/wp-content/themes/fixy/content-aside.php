<?php
/* The Template for displaying aside post format.
 *
 * @package WordPress
 * @subpackage fixy
 * @since Fixy 0.1.0
 */
 ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-content">
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'fixy' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div>
	
	<footer class="post-meta">
		<?php if ( is_single() ) : ?>
				<?php edit_post_link( __( '<i class="icon-pencil">Edit</i>', 'fixy' ), '<span class="edit-link">', '</span>' ); ?>
				<?php get_template_part('lib/post','meta'); ?>
		<?php else : ?>
			<?php edit_post_link( __( '<i class="icon-pencil">Edit</i>', 'fixy' ), '<span class="edit-link">', '</span>' ); ?>
				<div class="post-meta">
					<ul class="post-meta-list">
					<li>
						<ul class="meta-list">
							<li><i class="icon-user"></i></li>
							<li class="meta-author">
								<?php the_author_posts_link(); ?>
							</li>
						</ul>
					</li>
					<li>
						<?php if ( comments_open() ) : ?>
							<ul class="meta-list">
								<li><i class="icon-comment"></i></li>
								<li class="meta-comment">
									<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'fixy' ) . '</span>', __( 'One comment so far', 'fixy' ), __( 'View all % comments', 'fixy' ) ); ?>
								</li>
							</ul>
						<?php endif; ?>
					</li>
				</ul>
			</div>
		<?php endif;  ?>
		
		
				
	</footer>
</article>
