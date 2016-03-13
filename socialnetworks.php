<?php
/*
* @Social networks
* Created By Juraj Vysvader
* https://www.unisoftdev.tech/
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @Copyright (C) 2016 Juraj Vysvader. All rights reserved.
*/

defined('_JEXEC') or die;

class plgContentSocialnetworks extends JPlugin{

	public function onContentAfterDisplay($context, &$article, &$params, $limitstart)
        {
                return "<div id='socialnetworks'></div>";
        }	


	public function onContentPrepare($context, &$row, &$params, $page = 0)
		{
				$document = JFactory::getDocument();
				$document->addStyleSheet(JURI::base(). "plugins/content/socialnetworks/socialnetworks.css");
				$document->addScript(JURI::base(). "plugins/content/socialnetworks/socialnetworks.js");
				
		}		
}

?>
