<?php 
/**
 * 链接
 * 
 * @package custom 
 * 
 */
 $this->need('header.php'); ?>
<section id="posts" class="content clearfix  avatar-style-square">
 <article class="text">
  <div class="post-wrapper clearfix">
    <section class="post">
      <div class="links"><?php $this->content(); ?></div>
    </section>
    <section class="panel">
    <footer class="post-footer">
      <section class="meta"> 
        <ul class="date-notes">
          <li class="post-notes">
            
          </li>
        </ul>
      </section>
    <section class="meta">
      <ul class="date-notes">
        <li class="post-notes">
        </li>
      </ul>
    </section>
    </footer>
   </section>
  </div>
 </article>
</section>
<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>