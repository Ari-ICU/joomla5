<?php
/**
 * @package	HikaShop for Joomla!
 * @version	5.1.2
 * @author	hikashop.com
 * @copyright	(C) 2010-2024 HIKARI SOFTWARE. All rights reserved.
 * @license	GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
defined('_JEXEC') or die('Restricted access');
?><?php
if(!empty($this->options['text'])) {
	echo $this->options['text'];
} else {
	$this->emptyBlocksCount++;
}