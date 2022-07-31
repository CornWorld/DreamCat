<?php
/**
 * DreamCat   是一个极简自适应博客主题,年轻人追梦的必备良品!
 *
 * @package DreamCat
 * @author LychApe
 * @version X3.0.220706(InsiderPreview)
 * @link https://github.com/LychApe/DreamCat
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="mdui-container-fluid Dreamcat-appimgbar">
<div class="mdui-appbar mdui-shadow-0">
<div class="mdui-toolbar">
        <span class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white " mdui-drawer="{target: '#main-drawer', swipe: true}">
            <i class="mdui-icon material-icons" style="color: #f1f3f4;">menu</i>
        </span>
    <div class="mdui-toolbar-spacer"></div>
        <button mdui-dialog="{target: '#search-1'}" class="mdui-btn mdui-btn-icon mdui-hidden-md-up">
          <i class="mdui-icon material-icons" style="color: #f1f3f4;">search</i>
        </button>
        <a href="javascript:location.reload();" class="mdui-btn mdui-btn-icon">
          <i class="mdui-icon material-icons" style="color: #f1f3f4;">refresh</i>
        </a>
</div>
<br/>
<br/>
        <div class="mdui-row DreamCat-content-header">
        <div class="mdui-container">
    		<h1 class="title" style="color: #ffffffe3;"><?php $this->options->DC_WebName(); ?></h1>
    		<h5 class="subtitle" style="color: #ffffffe3;"><?php $this->options->DC_WebSlogan(); ?></h5>
        </div>
        </div>
</div>
</div>

<div class="mdui-container mdui-hidden-sm-down" style="transform: translateY(-50%);">
    <div class="mdui-card DreamCat-card-1">
        <div class="mdui-card-content">

        <div class="mdui-row">
          <div class="mdui-col-xs-6 mdui-col-sm-3">
                <form method="post" action="" class="Dreamcat-search-bar mdui-hidden-sm-down mdui-float-left">
                    <button type="submit" class="submit mdui-btn mdui-btn-icon">
                        <i class="mdui-icon material-icons mdui-text-color-theme-icon">search</i>
                    </button><input type="text" class="Dreamcat-search-input" name="s" placeholder="输入关键词进行搜索">
                </form>
          </div>
          <div class="mdui-col-xs-6 mdui-col-sm-6">
        
                <form method="get" class="Dreamcat-search-bar mdui-hidden-sm-down"  style="max-width: 100%;">
                    <div class="Dreamcat-search-input">
                    <div class="mdui-card-primary-subtitle mdui-valign"><p id="hitokoto" class="mdui-center"><a href="#" id="hitokoto_text">:D 获取中...</a></p></div>
                    </div>
                </form>
        
          </div>
          <div class="mdui-col-xs-6 mdui-col-sm-3">
                <form method="get" class="Dreamcat-search-bar mdui-hidden-sm-down mdui-float-right">
                    <button type="submit" class="submit mdui-btn mdui-btn-icon">
                        <i class="mdui-icon material-icons mdui-text-color-theme-icon">access_time</i>
                    </button>
                    <div class="Dreamcat-search-input" style="height: 50%;">
                    <div class="mdui-card-primary-subtitle"><div class="showTime"></div></div>
                    </div>
                </form>
          </div>
        </div>
        </div>
    </div>
</div>

<br/>
<div class="mdui-container">
<div class="mdui-container">

    <div class="mdui-row">
        <div class="mdui-col-xs-6 mdui-col-sm-3 mdui-hidden-sm-down">
            <div class="mdui-card DreamCat-card-1" style="margin-right: 30px;">
                <img src="<?php $this->options->DC_HeadImageUrl(); ?>" class="card-img-top" style="width: 100%;"alt="...">
                <div class="mdui-card-primary">
                    <div class="mdui-card-primary-title">Cosanoxj</div>
                    <div class="mdui-card-primary-subtitle">雾幻 执行董事</div>
                </div>
                <div style="border-top: 1px dashed #e0e0e0; font-size: 14px;"></div>
                <div class="mdui-card-content">
                    <span class="icon iconfont icon-zhifubao"></span>
                    <span class="icon iconfont icon-github"></span>
                    <span class="icon iconfont icon-icon_bilibili-circle"></span>
                    <span class="icon iconfont icon-linkedin0"></span>
                    <span class="icon iconfont icon-logo-wechat"></span>
                    <span class="icon iconfont icon-weibo"></span>
                    <span class="icon iconfont icon-telegram"></span>
                    <span class="icon iconfont icon-QQ-circle-fill"></span>
                </div>
              
            </div>
        </div>
        <div class="mdui-col-xs-12 mdui-col-sm-9">

        <?php while ($this->next()): ?>
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
            <a itemprop="url" href="<?php $this->permalink() ?>">
            <div class="mdui-card DreamCat-card-1 DreamCat-card-ts-1">
            <div class="mdui-card-media">
                <div>
                <img class="DreamCat-card-post-wzimg DreamCat-card-post-wzimg-ts" src="https://api.ixiaowai.cn/api/api.php?lx=dongman?<?php $this->title() ?>" alt="">
                </div>
            	<div class="mdui-card-media-covered">
            	<div class="mdui-card-primary">
            	<div class="mdui-card-primary-title"><?php $this->title() ?>
            	<br>
            	<small>发表时间:<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></small>
            	</div>
            	</div>
            	</div>
            </div>
            </div>
            </a>
            <br/>
        </article>
        <?php endwhile; ?>
        

        </div>
    </div>
    
	<div class="DreamCat-margin-card-top"></div>
	<div class="DreamCat-page-div DreamCat-card-a">
		<?php $this->pageLink(
				'<button class="mdui-btn mdui-btn-icon mdui-ripple mdui-color-theme-accent mdui-shadow-5 DreamCat-prev"><i class="mdui-icon material-icons">navigate_before</i></button>',
				'prev'
		); ?>
		<button class="mdui-btn DreamCat-number" disabled="">
			<span class="">
				<?php if ($this->_currentPage > 1) echo $this->_currentPage; else echo 1; ?>/
				<?php echo ceil($this->getTotal() / $this->parameter->pageSize); ?>
			</span>
		</button>
		<?php $this->pageLink(
				'<button class="mdui-btn mdui-btn-icon mdui-ripple mdui-color-theme-accent mdui-shadow-5 DreamCat-next"><i class="mdui-icon material-icons">navigate_next</i></button>',
				'next'
		); ?>
	</div>
    
</div>
</div>

<?php $this->need('footer.php'); ?>
