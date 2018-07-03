<?php
/**
 * @package     SIJ.ArticlesFeed
 * @subpackage  mod_articlesfeed
 *
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.md
 */

defined('_JEXEC') or die;

// Include the latest functions only once
JLoader::register('ModArticlesFeedHelper', __DIR__ . '/helper.php');

$list            = ModArticlesFeedHelper::getList($params);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');

$titleUrl = $params->get('titleurl');
$title = $params->get('title');
$color = $params->get('color');
$lightercolor = $params->get('lightercolor');
$showImages = $params->get('show_secondary_images');


// Add CSS
$document = JFactory::getDocument();
$document->addStyleSheet(JUri::base().'modules/mod_articlesfeed/tmpl/style.css');

require JModuleHelper::getLayoutPath('mod_articlesfeed', $params->get('layout', 'default'));
