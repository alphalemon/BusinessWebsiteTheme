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

namespace AlphaLemon\Theme\BusinessWebsiteThemeBundle\Core\Slots;

use AlphaLemon\ThemeEngineBundle\Core\TemplateSlots\AlTemplateSlots;
use AlphaLemon\ThemeEngineBundle\Core\TemplateSlots\AlSlot;

/**
 * Defines the Home template
 *
 * @author AlphaLemon
 */
class BusinessWebsiteThemeBundleHomeSlots extends AlTemplateSlots
{
    public function configure() 
    {
        return $this->setupSlots('BusinessWebsiteThemeBundle', 'home');
    }
}
