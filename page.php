<?php $this->need('header.php'); ?>
<section id="posts" class="content clearfix  avatar-style-square">
 <article class="text">
  <div class="post-wrapper clearfix">
    <section class="post">
      <h2><?php $this->title() ?></h2>
      <div class="body-text"><?php $this->content(); ?></div>
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
    </footer>
   </section>
  </div>
 </article>
</section>
<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>