<?php
/**
 * 这是 Typecho 0.9 系统的一套默认皮肤
 * 
 * @package Blue Theme 
 * @author Blue
 * @version 1.2
 * @link http://typecho.org
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

	<div class="content">
		<div class="container">
			<hr class="space" />
			<div class="span-20">
				<div class="content">
						<!-- article end -->
						<div class="span-18">
						<?php while($this->next()): ?>
							<div class="entry">
								<h2 class="title">
											<a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
								</h2>
								<div class='byline'>
									<?php $this->date('F j, Y'); ?> by
										<?php $this->author(); ?>
								</div>
								<!-- article body start -->
								<div class="article">
									<?php $this->content('- 阅读剩余部分 -'); ?>
								</div>
								<!-- article body end -->
								<div class="comment">
									<span>
										<a href="<?php $this->permalink() ?>">Permalink</a> | <a href="<?php $this->permalink() ?>"><?php $this->commentsNum('Comment', '1 条评论', '%d 条评论'); ?></a>
									</span>
								</div>
								<div class="footer"></div>
								<br />
								<br />
							</div>
							<?php endwhile; ?>
								<!-- article end -->
						</div>
						<div class="span-18">
							<ul id="pagination">
								<?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
						</ul>
							
				</div>
			</div>
		</div>
	</div>


	<?php $this->need('footer.php'); ?>