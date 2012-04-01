<?php
/*
 * This file is part of the BusinessWebsiteThemeBundle theme and it is distributed
 * under the MIT License. In addiction, to use this bundle, you must leave
 * intact this copyright notice.
 *
 * (c) Since 2011 AlphaLemon
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * For extra documentation and help please visit http://alphalemon.com
 * 
 * @license    GPL LICENSE Version 2.0
 * 
 */

namespace AlphaLemon\Theme\BusinessWebsiteThemeBundle\Core\Listener;

use Symfony\Component\DependencyInjection\ContainerInterface;
use AlphaLemon\AlphaLemonCmsBundle\Core\Event\Actions\Block\BlockEditedEvent;

/**
 * AfterEditBlockListener
 *
 * @author AlphaLemon <info@alphalemon.com>
 */
class AfterEditBlockListener
{
    protected $container;
    
    /**
     * Contructor
     * 
     * @param ContainerInterface $container 
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
    * Renders the 
    *
    * @param BlockEditedEvent $event
    */
    public function onBlockEdited(BlockEditedEvent $event)
    {return;
        $blockManager = $event->getBlockManager();
        $block = $blockManager->get();
        $block->setHtmlContent($blockManager->getHtmlContentCMSMode() . '<script type="text/javascript">$("h2, h3, h4, h5, .tabs ul.nav li a, h6").doCufon();</script>');
        $blockManager->set($block);
        $event->setBlockManager($blockManager);
    }
}

