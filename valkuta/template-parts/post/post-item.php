<?php
if(is_archive()){
	$post_item_layout = valkuta_option('archive_layout', 'right-sidebar');
}else if(is_search()){
	$post_item_layout = valkuta_option('search_layout', 'right-sidebar');
}else{
	$post_item_layout = valkuta_option('blog_layout', 'right-sidebar');
}

if($post_item_layout == 'grid-ls' || $post_item_layout == 'grid-rs' || $post_item_layout == 'grid'){
	$word_count = 20;
}else{
	$word_count = 50;
}

$show_author_name = valkuta_option('post_author', true);
$show_post_date = valkuta_option('post_date', true);
$show_comment_number = valkuta_option('cmnt_number', false);
$show_category = valkuta_option('show_category', true);
$show_read_more = valkuta_option('read_more_button', true);
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="single-post-wrapper">
		<?php
            if(get_post_format() === 'gallery'){
	            get_template_part( 'template-parts/post/post-format-gallery');
            }else if(get_post_format() === 'video'){
	            get_template_part( 'template-parts/post/post-format-video');
            }else if(get_post_format() === 'audio'){
	            get_template_part( 'template-parts/post/post-format-audio');
            }else{
	            get_template_part( 'template-parts/post/post-format-others');
            }
        ?>

		<div class="post-content-wrapper">

			<?php if ( 'post' === get_post_type() ) : ?>
				<div class="post-meta td-ul-style">
					<ul>
                        <?php if($show_author_name == true):?>
						<li><?php valkuta_posted_by(); ?></li>
                        <?php endif; ?>

						<?php if($show_post_date == true):?>
						<li><?php valkuta_posted_on(); ?></li>
						<?php endif; ?>

						<?php if($post_item_layout == 'left-sidebar' || $post_item_layout == 'right-sidebar' ) : ?>
                            <?php if ( get_comments_number() != 0 && $show_comment_number == true ) : ?>
                                <li class="comment-number"><?php valkuta_comment_count(); ?></li>
                            <?php endif; ?>

						    <?php if($show_category == true):?>
                            <li><?php valkuta_post_first_category(); ?></li>
                            <?php endif;?>
                        <?php endif;?>
					</ul>
				</div>
			<?php endif; ?>

			<?php
			// ptt ( Post Title Tag);
			$ptt = valkuta_option('post_title_tag', 'h3');

            the_title( '<'.$ptt.' class="post-title"><a href="' . esc_url( get_the_permalink() ) . '" rel="bookmark">', '</a></'.$ptt.'>' );
            ?>

			<div class="post-excerpt">
				<p><?php echo valkuta_words_limit( get_the_excerpt(), $word_count ); ?><?php if ( ! empty( get_the_content() ) ) {
						echo ' [...]';
					} ?></p>
			</div>

			<?php if($show_read_more == true):?>
			<div class="post-read-more">
                <?php if($post_item_layout == 'left-sidebar' || $post_item_layout == 'right-sidebar') : ?>
                    <a class="td_button" href="<?php echo esc_url( get_the_permalink() ) ?>">
		                <?php echo esc_html__( 'Read More', 'valkuta' ); ?>
                    </a>
                <?php else : ?>
                    <a class="td_text_button" href="<?php echo esc_url( get_the_permalink() ) ?>">
		                <?php echo esc_html__( 'Read More', 'valkuta' ); ?>
                        <i class=" fas fa-angle-double-right"></i>
                    </a>
                <?php endif; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</article>