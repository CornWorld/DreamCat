<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="mdui-container-fluid" >
	<div class="mdui-row DreamCat-content-header" >
		<div class="mdui-container" >
			<h1 class="dreamcat-title title" >
                <?php
                $this->archiveTitle([
                    'category' => _t('分类：%s'),
                    'search' => _t('搜索结果：%s'),
                    'tag' => _t('标签：%s'),
                    'author' => _t('作者：%s'),
                    'date' => _t('归档：%s')
                ], '', '');
                ?>

			</h1 >
		</div >
	</div >
</div >

<div class="mdui-hidden-sm-down dreamcat-img-header-wrapper" >
	<div class='dreamcat-img-header dreamcat-img-header-index dreamcat-img-header-md' ></div >
</div >
<div class="mdui-hidden-md-up dreamcat-img-header-wrapper" >
	<div class='dreamcat-img-header dreamcat-img-header-index dreamcat-img-header-sm' ></div >
</div >

<?php $this->need("component/toolbar.php") ?>

<?php $this->need('component/sidebar.php'); ?>

<?php $this->need('footer.php'); ?>
