<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package   ArticleIDOptimBundle
 * @author    Rory Zünd, Media Motion AG
 */

namespace Memo\ArticleIDOptimBundle\Service;

use Memo\MemoArticleIDOptimBundle\Model\CatalogModel;
use Contao\Controller;

class HookListener
{	
	
	public function SetArticleID($objTemplate, $arrData, $objModule)
	{
		if(!is_array($objModule->cssID) || count($objModule->cssID) == 0){
			return true;
		}

		if(!is_array($objTemplate->cssID) || count($objTemplate->cssID) == 0){
		    return true;
		}
		
		if ($objModule->cssID[0] != $objTemplate->cssID[0] && $objModule->alias != ''){
			$strCSSClasses = $objModule->cssID[1];
			$objModule->cssID = array($objModule->alias, $strCSSClasses);
		}
	}
	
}
