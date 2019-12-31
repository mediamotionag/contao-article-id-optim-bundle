<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package   ArticleIDOptimBundle
 * @author    Rory Zünd, Media Motion AG
 */

$GLOBALS['TL_HOOKS']['compileArticle'][] = array('Memo\ArticleIDOptimBundle\Service\HookListener', 'SetArticleID');