<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="content">
	<div class="container">
		<hr class="space" />
		<div class="span-20 prepend-1">
			<div id="content">
				<!-- article body start -->
				<div class="span-18 prepend-2">
					<div class="entry">
						<a href="<?php $this->permalink() ?>"></a><h2 class="title"><?php $this->title() ?></h2></div>
						<div class="byline"><?php $this->date('F j, Y'); ?> by <?php $this->author(); ?></div>
						<div class="body">
							 <?php $this->content(); ?>
						</div>
						<!-- article body end -->
						<div id="disqus_thread"></div><script type="text/javascript" src="http://disqus.com/forums/codeography/embed.js"></script><noscript><a href="http://codeography.disqus.com/?url=ref">View the discussion thread.</a></noscript><a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a>
    <div class='footer'>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->need('footer.php'); ?>
