<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<section class="section">
  <div class="container">
    <nav class="level is-mobile">
      <div class="level-left">
        <div class="level-item">
          
        </div>
      </div>
      <div class="level-right is-marginless">
        <div class="level-item">
          
        </div>
      </div>
    </nav>
	
  </div>
</section>

<section class="section">
  <div class="container has-text-centered">
    <p>&copy; <?php echo date('Y'); ?> | powered by <a >Wordpress</a> | <a href="https://github.com/luckyscript" target="_blank">theme slim</a> ♥</p>
  </div>
</section>
<script type="text/javascript" src="<?php $this->options->themeUrl(); ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl(); ?>js/top.js"></script>
<script>
	$(function () {
		$.scrollUp();
	});
</script>
<?php $this->footer(); ?>
</body>
</html>