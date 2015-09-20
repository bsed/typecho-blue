<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="content">
	<div class="container">
		<hr class="space" />
		<div class="span-20 prepend-1">
			<div id="content">
				<div class="archives">
					<?php $this->content(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->need('footer.php'); ?>
