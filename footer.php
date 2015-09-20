<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
	<!-- footer start -->
	<div id="footer">
		<a name="footer"></a>
		<div class="container">
			<div class="span-5">
				<h5>Projects</h5>
				<ul>
					<li><a href="#">Captured</a></li>
					<li><a href="#">Task Me</a></li>
					<li><a href="#">Dotfiles</a></li>
					<li><a href="#">Jekyll.vim</a></li>
					<li><a href="#">Trailer Trash</a></li>
				</ul>
				<h5>Around the Web</h5>
				<ul>
					<li><a href="#">Github</a></li>
					<li><a href="#">Twitter</a></li>
					<li><a href="#">Linked In</a></li>
					<li><a href="#">Family Blog</a></li>
				</ul>
			</div>
			<?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
			<div class="span-10 prepend-1">
				<h5>Recent Entries</h5>
				<ul>
					<?php $this->widget('Widget_Contents_Post_Recent')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
				</ul>
			</div>
			 <?php endif; ?>
			<div class="span prepend-0 last">
				<h5>About</h5>
				<p>
					Technical ramblings and notes to my future self and occationally something useful and run on sentences. This is the haphazard codeography of Christopher Sexton.
				</p>
				<h5>Creative Commons</h5>
				<p>
					Except where otherwise <a href="http://creativecommons.org/policies#license">noted</a>, content on this site is licensed under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 License</a>
				</p>
			<!--	<h5>Blog</h5>
				<ul>
					<li><a href="http://feeds.feedburner.com/codeography">Subscribe via RSS</a></li>
					<li><a href="/archives.html">Archives</a></li>
				</ul>-->
			</div>
		</div>

	<div id="preload-01">
	</div>
	<!-- footer end -->
	<?php $this->footer(); ?>
		</body>

		</html>