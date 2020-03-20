<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Content.pagenavigation
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('bootstrap.tooltip');

$lang = JFactory::getLanguage();

?>
<ul class="pager pagenav">
<?php if ($row->prev) : ?>
	<li class="previous readmore">
		<a class="hasTooltip btn" title="<?php echo htmlspecialchars($rows[$location - 1]->title); ?>"
			aria-label="<?php echo JText::sprintf('JPREVIOUS_TITLE', htmlspecialchars($rows[$location - 1]->title)); ?>"
				href="<?php echo $row->prev; ?>" rel="prev">
			<?php
				echo '<span class="fas fa-angle-double-left" aria-hidden="true"></span> <span aria-hidden="true">' . $row->prev_label . '</span>';
			?>
		</a>
	</li>
<?php endif; ?>
<?php if ($row->next) : ?>
	<li class="next readmore gil-right">
		<a class="hasTooltip btn" title="<?php echo htmlspecialchars($rows[$location + 1]->title); ?>"
			aria-label="<?php echo JText::sprintf('JNEXT_TITLE', htmlspecialchars($rows[$location + 1]->title)); ?>"
				href="<?php echo $row->next; ?>" rel="next">
			<?php
				echo '<span aria-hidden="true">' . $row->next_label . '</span> <span class="fas fa-angle-double-right" aria-hidden="true"></span>';
			?>
		</a>
	</li>
<?php endif; ?>
</ul>
