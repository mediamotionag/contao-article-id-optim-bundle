<?php
/**
 * @copyright  Media Motion AG <https://www.mediamotion.ch>
 * @author     Rory Zünd (Media Motion AG)
 * @package    ArticleIDOptimBundle
 * @license    LGPL-3.0+
 * @see	       https://github.com/mediamotionag/contao-jwplayer-bundle
 */

namespace Memo\ArticleIDOptimBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Memo\ArticleIDOptimBundle\MemoArticleIDOptimBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(MemoArticleIDOptimBundle::class)->setLoadAfter([ContaoCoreBundle::class])
        ];
    }
}