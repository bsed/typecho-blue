<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
	<!DOCTYPE HTML>
	<html class="no-js">

	<head>
		<meta charset="<?php $this->options->charset(); ?>">
		<meta name="renderer" content="webkit">
		<meta name="viewport" content="width=device-width" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>
			<?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?>
				<?php $this->options->title(); ?>
		</title>

		<!-- 使用url函数转换相关路径 -->
		<link rel="stylesheet" href="<?php $this->options->themeUrl('css/mobile.css'); ?>"  media="screen, projection" type="text/css" />
		<link rel="stylesheet" href="<?php $this->options->themeUrl('css/print.css'); ?>" media="print" type="text/css">
		
		<link rel="stylesheet" href="<?php $this->options->themeUrl('css/screen.css'); ?>"  media="only screen and (min-width: 600px)" />

		<link rel="stylesheet" href="<?php $this->options->themeUrl('css/base.css'); ?>">
		<link rel="stylesheet" href="<?php $this->options->themeUrl('css/github.css'); ?>">
		<link rel="stylesheet" href="<?php $this->options->themeUrl('js/fancybox/jquery.fancybox-1.3.1.css'); ?>">
		<script src="<?php $this->options->themeUrl('js/jquery/1.3.2/jquery.min.js'); ?>"></script>
		<script src="<?php $this->options->themeUrl('js/fancybox/jquery.fancybox-1.3.1.pack.js'); ?>"></script>



		<!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

		<!-- 通过自有函数输出HTML头部信息 -->
		<?php $this->header(); ?>
	</head>

	<body>
		<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
		<!-- header start -->
		<div id="header_row">
			<div id="header">
				<div class="nav">
					<a href="#footer">最新</a>
					<a <?php if($this->is('index')): ?> <?php endif; ?>  href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
					 <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
      <?php while($pages->next()): ?>
					<a <?php if($this->is('page', $pages->slug)): ?> <?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>">
						<?php $pages->title(); ?>
					</a>
					<?php endwhile; ?>
				</div>
				<a class="logo" href="<?php $this->options->siteUrl(); ?>">
					
				</a>

			</div>
		</div>
		<!--header end -->