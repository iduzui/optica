<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php if($this->_currentPage>1) echo '第'.$this->_currentPage.'页 | '; ?><?php $this->archiveTitle(array(
    'category'  =>  _t('分类 %s 下的文章'),
    'search'    =>  _t('包含关键字 %s 的文章'),
    'tag'       =>  _t('标签 %s 下的文章'),
    'author'    =>  _t('%s 发布的文章')
  ), '', ' | '); ?><?php $this->options->title(); ?></title>
<link rel="stylesheet" href="<?php $this->options->themeUrl('style.min.css'); ?>">
<?php $this->header("generator=&template=&pingback=&xmlrpc=&wlw="); ?>
</head>
<body class="regular index-page">
  <section id="page">
    <div class="nav-menu-wrapper">
      <nav class="nav-menu pop">
        <div class="navbar">
          <div class="selector">
            <div class="bar-icon-wrapper">
              <span class="bar-icon"></span>
              <span class="bar-icon"></span>
              <span class="bar-icon"></span>
            </div>
          </div>
          <div class="gotop"><i class="icon-arrow_carrot_right top"></i></div>
        </div>
        <div class="pop-menu west">
          <ul>
            <li class="no-hover search">
              <form class="form" id="search">
                <input type="text" name="s" id="s" required="true" placeholder="搜索...">
                <button type="submit" class="icon-search_16"></button>
              </form>
            </li>
			<div class="subtitle">&nbsp;&nbsp;INDEX</div>
            <li><a href="<?php $this->options->siteUrl(); ?>">首页<i class="icon-arrow_carrot_right"></i></a></li>
            <div class="subtitle">&nbsp;&nbsp;PAGES</div>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
             <?php while($pages->next()): ?>
              <li>
               <a href="<?php $pages->permalink(); ?>" class="archive"><?php $pages->title(); ?><i class="icon-arrow_carrot_right"></i></a>
              </li>
             <?php endwhile; ?>
            <div class="subtitle">&nbsp;&nbsp;CATEGORIES</div>
            <?php $this->widget('Widget_Metas_Category_List')->to($categories); ?>
             <?php while ($categories->next()): ?>
              <li>
               <a href="<?php $categories->permalink(); ?>" class="archive"><?php $categories->name(); ?><i class="icon-arrow_carrot_right"></i></a>
              </li>
             <?php endwhile; ?>
          </ul>
        </div> 
      </nav>
      <div class="glass"></div>
    </div>
    <div class="header-wrapper avatar-style-square">
      <header id="header">
        <div class="header-image-wrapper">
          <?php if ($this->is('post') || $this->is('page')): ?>
            <div class="header-image cover"<?php if (isset($this->fields->Cover)): ?> style="background-image:url('<?php $this->fields->Cover() ?>')"<?php elseif ($this->options->picUrl): ?> style="background-image:url('<?php $this->options->picUrl() ?>')"<?php endif; ?>></div>
          <?php else: ?>
            <div class="header-image cover"<?php if ($this->options->picUrl): ?> style="background-image:url('<?php $this->options->picUrl() ?>')"<?php endif; ?>></div>
          <?php endif; ?>
        </div>
        <div class="blog-title content">
          <figure class="avatar-wrapper animate">
            <a href="<?php $this->options->imageurl() ?>" style="background-image:url(<?php if ($this->options->avatarUrl): ?><?php $this->options->avatarUrl() ?><?php else: ?><?php $this->options->themeUrl('images/avatar.jpg'); ?><?php endif; ?>)" class="user-avatar"></a>
          </figure>
          <div class="title-group animate">
            <h1><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a></h1>
            <span class="description"><?php if ($this->options->Desc): ?><?php $this->options->Desc() ?><?php else: ?><?php $this->options->description(); ?><?php endif; ?></span>    
          </div>
        </div>   
      </header>
    </div>
  </section>