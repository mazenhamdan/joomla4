<article class="uk-article" <?php if ($permalink) echo 'data-permalink="'.$permalink.'"'; ?>>
	
	<?php if ($image && $image_alignment == 'none') : ?>
		<?php if ($url) : ?>
			<a class="tm-featured-image" href="<?php echo $url; ?>" title="<?php echo $image_caption; ?>"><img src="<?php echo $image; ?>" alt="<?php echo $image_alt; ?>"></a>
		<?php else : ?>
			<span class="tm-featured-image"><img src="<?php echo $image; ?>" alt="<?php echo $image_alt; ?>"></span>
		<?php endif; ?>
	<?php endif; ?>
	
	<?php if ($title) : ?>
	<h1 class="uk-article-title">
		<?php if ($url && $title_link) : ?>
			<a href="<?php echo $url; ?>" title="<?php echo $title; ?>"><?php echo $title; ?></a>
		<?php else : ?>
			<?php echo $title; ?>
		<?php endif; ?>
	</h1>
	<?php endif; ?>

	<?php echo $hook_aftertitle; ?>

	<?php if ($author || $date || $category) : ?>
	<p class="uk-article-meta">

		<?php

			$author   = ($author && $author_url) ? '<span class="tm-article-author uk-visible-large"><a href="'.$author_url.'">'.$author.'</a></span>' : '<span class="tm-article-author uk-visible-large">'.$author.'</span>';
			$date     = ($date && $datetime) ? '<span class="tm-article-date"><time datetime="'.$datetime.'" pubdate>'.JHtml::_('date', $date, JText::_('DATE_FORMAT_LC3')).'</time></span>' : JHtml::_('date', $date, JText::_('DATE_FORMAT_LC3'));
			$category = ($category && $category_url) ? '<span class="tm-article-category uk-visible-large"><a href="'.$category_url.'">'.$category.'</a></span>' : $category;

			if($author && $date) {
				echo $author, $date;
			} elseif ($author) {
				echo $author;
			} elseif ($date) {
				echo $date;
			}

			if ($category) {
				echo $category;
			}

		?>

	</p>
	<?php endif; ?>

	<?php if ($image && $image_alignment != 'none') : ?>
		<?php if ($url) : ?>
			<a class="uk-align-<?php echo $image_alignment; ?>" href="<?php echo $url; ?>" title="<?php echo $image_caption; ?>"><img src="<?php echo $image; ?>" alt="<?php echo $image_alt; ?>"></a>
		<?php else : ?>
			<img class="uk-align-<?php echo $image_alignment; ?>" src="<?php echo $image; ?>" alt="<?php echo $image_alt; ?>">
		<?php endif; ?>
	<?php endif; ?>

	<?php echo $hook_beforearticle; ?>

	<div>
		<?php echo $article; ?>
	</div>

	<?php if ($more) : ?>
	<p>
		<a class="uk-button uk-button-primary" href="<?php echo $url; ?>" title="<?php echo $title; ?>"><?php echo $more; ?></a>
	</p>
	<?php endif; ?>

	<?php if ($tags) : ?>
	<p><?php echo JText::_('TPL_WARP_TAGS').': '.$tags; ?></p>
	<?php endif; ?>
		
	<?php if ($edit) : ?>
	<p><?php echo $edit; ?></p>
	<?php endif; ?>

	<?php if ($previous || $next) : ?>
	<ul class="uk-pagination">
		<?php if ($previous) : ?>
		<li class="uk-pagination-previous">
			<?php echo $previous; ?>
			<i class="uk-icon-double-angle-left"></i>
		</li>
		<?php endif; ?>

		<?php if ($next) : ?>
		<li class="uk-pagination-next">
			<?php echo $next; ?>
			<i class="uk-icon-double-angle-right"></i>
		</li>
		<?php endif; ?>
	</ul>
	<?php endif; ?>

	<?php echo $hook_afterarticle; ?>

</article>