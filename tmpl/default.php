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
	<div class="row">
		<a href="<?PHP echo $list[0]->link; ?>">
		<div class="col-7-sm articlesfeed-image" style="background-image: url('<?PHP print(json_decode($list[0]->images)->image_intro); ?>');">
		</div>
		<div class="col-5-sm articlesfeed-title" style="background-color: <?PHP echo $color; ?>">
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
	<div class="articleslist">
		<ul class="list">
		<?php foreach (array_slice($list, 1) as $item) : ?>
			<li itemscope itemtype="https://schema.org/Article" style="color: <?PHP echo $color; ?>">
				<a class="article-link" href="<?php echo $item->link; ?>" itemprop="url">
					<span itemprop="name">
						<?php echo $item->title; ?><?php foreach($item->tags->itemTags as $tag) {
							echo '<i class="icon icon-'.$tag->path.'"></i>';
						}?>
					</span>
				</a>
			</li>
		<?php endforeach; ?>
		</ul>
	</div>
</div>
