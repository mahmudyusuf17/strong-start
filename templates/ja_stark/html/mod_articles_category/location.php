<?php
/**
 * ------------------------------------------------------------------------
 * JA Stark Template
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2018 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
 * @license - Copyrighted Commercial Software
 * Author: J.O.O.M Solutions Co., Ltd
 * Websites:  http://www.joomlart.com -  http://www.joomlancers.com
 * This file may not be redistributed in whole or significant part.
 * ------------------------------------------------------------------------
 */

defined('_JEXEC') or die;
$moduleclass_sfx = $params->get('moduleclass_sfx','');

if ($grouped) {
	// flat the group list
	foreach ($list as $group_name => $group) {
		foreach ($group as $item) {
			$_list[] = $item;
		}
	}
} else {
	$_list = $list;
}
$catids = $params->get('catid');
if(isset($catids) && $catids['0'] != ''){
	$catid = $catids[0];	
	$jacategoriesModel = JCategories::getInstance('content');
	$jacategory = $jacategoriesModel->get($catid);
}

?>
<div class="category-module<?php echo $moduleclass_sfx; ?> mod-locations mod-grid">
	<div class="row">
		<?php foreach ($list as $item) : ?>
			<div class="col-sm-6 col-md-3">
				<div class="mod-locations-item">
					<?php echo JLayoutHelper::render('joomla.content.intro_image', $item); ?>

					<div class="item-info"><div class="inner">
						<?php if ($params->get('link_titles') == 1) : ?>
							<a class="mod-articles-category-title <?php echo $item->active; ?>" href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a>
						<?php else : ?>
							<?php echo $item->title; ?>
						<?php endif; ?>
					</div></div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>

</div>
