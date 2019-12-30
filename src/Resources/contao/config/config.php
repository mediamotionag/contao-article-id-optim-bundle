<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package   ArticleIDOptimBundle
 * @author    Rory Zünd, Media Motion AG
 */

$GLOBALS['TL_HOOKS']['compileArticle'][] = array('article_id_optim.hook_listener', 'SetArticleID');