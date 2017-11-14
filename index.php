<?php
/**
 * type slim
 * 
 * @package 
 * @author luckyscript
 * @version 0.0.1
 * @link https://www.luckyscript
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

 
<section> 
<div class="container">
  
  <div class="content">
    <form method="post">
        <h2>Search</h2>
        <p><input type="text" name="s" class="text" autofocus autocomplete="off"/></p>
        <p><button type="submit" class="submit"><?php _e('搜索'); ?></button></p>
    </form>
  </div>
</div>
</section>

<section class="section">
  <div class="container">
<?php while($this->next()): ?> 
<article>
      <h1 class="title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
      <h2 class="subtitle is-5"><?php $this->date('F j, Y'); ?></h2>
      
      <div class="content">
<?php $this->excerpt(280, '[...]'); ?>
<a class="button is-link" href="<?php $this->permalink() ?>" style="height:28px">
          Read more
          <span class="icon is-small">
            <i class="fa fa-angle-double-right"></i>
          </span>
</a>
        
      </div>
</article>
<?php endwhile; ?>
  </div>
  
<?php $this->pageNav('&laquo;', '&raquo;'); ?>
</section>

<?php $this->need('footer.php'); ?>