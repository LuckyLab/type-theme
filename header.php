<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <?php $this->header(); ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl(); ?>style.css">
<link rel="stylesheet" href="<?php $this->options->themeUrl(); ?>css/font-awesome.min.css">
</head>
<body>
<section class="section">
  <div class="container">
    <nav class="nav">
      <div class="" style="flex-direction: row;">
      <h1><a href="<?php $this->options->siteUrl(); ?>index.php"><?php substr($this->options->title(), 2) ?></a> </h1>
        <nav id="nav-menu" class="clearfix" role="navigation" style="text-align: left;">
          <a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>index.php"><?php _e('index'); ?></a>
          <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
          <?php while($pages->next()): ?>
          <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
          <?php endwhile; ?>
        </nav>
      </div>
      <div class="nav-right">
        <nav class="nav-item level is-mobile">
          
          <a class="level-item" href="<?php $this->options->weiboUrl() ?>" target="_blank">
            <span class="icon">
              <i class="fa fa-weibo"></i>
            </span>
          </a>
          
          <a class="level-item" href="<?php $this->options->githubUrl() ?>" target="_blank">
            <span class="icon">
              <i class="fa fa-github"></i>
            </span>
          </a>
          
          <a class="level-item" href="<?php $this->options->rssUrl() ?>" target="_blank">
            <span class="icon">
              <i class="fa fa-rss"></i>
            </span>
          </a>
          
        </nav>
        
      </div>
    </nav>
  </div>
</section>
