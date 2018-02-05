<?php $this->need('header.php'); ?>
<?php if ($this->have()): ?>
<div class="obox center alert success"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 <b>%s</b> 下的文章'),
            'search'    =>  _t('包含关键字 <b>%s</b> 的文章'),
            'tag'       =>  _t('标签 <b>%s</b> 下的文章'),
            'author'    =>  _t('<b>%s</b> 发布的文章')
        ), '', ''); ?></div>
<section id="posts" class="content clearfix avatar-style-square">
<?php while($this->next()): ?>
 <article class="text">
  <div class="post-wrapper clearfix">
    <section class="post">
      <h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
      <div class="source"><?php $this->excerpt(); ?></div>
    </section>
    <section class="panel">
    <footer class="post-footer">
      <section class="meta"> 
        <ul class="date-notes">
          <li class="post-notes">
            <?php $this->date('Y-n-j H:i'); ?>
          </li>
        </ul>
      </section>
    <section class="post-controls">
      <ul>
        <li><a href="<?php $this->permalink() ?>#comments" title="<?php $this->commentsNum('快抢沙发', '沙发被抢', '%d 条评论'); ?>" class="share icon-export"></a></li>
      </ul>
    </section>
    </footer>
   </section>
  </div>
 </article>
<?php endwhile; ?>
</section>
<div class="obox page-nav center">
<?php $this->pageNav() ;?>
</div>
<?php else: ?>
<div class="obox center alert info"><h2>没有找到相关内容</h2><br>您可以尝试其它关键词<hr><a href="<?php $this->options->siteUrl(); ?>">返回首页</a></div>
<?php endif; ?>
<?php $this->need('footer.php'); ?>