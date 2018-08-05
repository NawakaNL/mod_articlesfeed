<?php
/**
 * @package     SIJ.ArticlesFeed
 * @subpackage  mod_articlesfeed
 *
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.md
 */

defined('_JEXEC') or die;
?>
<div class="articlesfeed <?php echo $moduleclass_sfx; ?>">
	<div class="custom-row">
		<?PHP if (!empty($title) && strlen($title) > 1) { ?>
			<a href="<?PHP echo $titleUrl;?>">
				<div class="articlesfeed titlebar" style="background-color: <?PHP echo $color; ?>">
					<?PHP echo $title; ?>
					<span class="icon icon-chevron-right" style="float: right"></span>
				</div>
			</a>
		<?PHP } ?>
		<a href="<?PHP echo $list[0]->link; ?>" class="<?PHP echo strlen($title) > 1 ? "light" : "dark"; ?>">
		<div class="custom-col-5-sm custom-col-7 articlesfeed-image" style="background-image: url('<?PHP print(!empty(json_decode($list[0]->images)->image_intro) ? json_decode($list[0]->images)->image_intro : JUri::base().'modules/mod_articlesfeed/tmpl/placeholder.png'); ?>');">
		</div>
		<div class="custom-col-7-sm custom-col-5 articlesfeed-title" style="background-color: <?PHP echo strlen($title) > 1 ? $lightercolor : $color; ?>">
			<div class="head-title">
				<?php print($list[0]->title) ?>
				<div class="icons">
					<?php foreach($list[0]->tags->itemTags as $tag) {
						echo '<i class="icon icon-'.$tag->path.'"></i>';
					}?>
				</div>
			</div>
			<div class="sub-title">
				<?php print($list[0]->introtext) ?>
			</div>
		</div>
		</a>
	</div>
	<div class="clear"></div>
	<div class="articleslist custom-row">
		<ul class="list">
		<?php foreach (array_slice($list, 1) as $item) : ?>
			<li itemscope class="secondary-links" itemtype="https://schema.org/Article" style="color: <?PHP echo $color; ?>">
				<?php
				// If show extra images
				if(!empty($showImages) && $showImages == "1") {
					echo '<div class="secondary-image" style="background-image:url(\''.json_decode($item->images)->image_intro.'\');"></div>';
				}
				?>
				<a class="article-link" href="<?php echo $item->link; ?>" itemprop="url">
					<div itemprop="name">

						<?php echo $item->title; ?><?php foreach($item->tags->itemTags as $tag) {
							echo '<i class="icon icon-'.$tag->path.'"></i>';
						}?>
					</div>
				</a>

			</li>
		<?php endforeach; ?>
		</ul>
	</div>
</div>
