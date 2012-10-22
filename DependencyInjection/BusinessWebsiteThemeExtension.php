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

namespace  AlphaLemon\Theme\BusinessWebsiteThemeBundle\DependencyInjection;

use AlphaLemon\ThemeEngineBundle\Core\Rendering\DependencyInjection\BaseExtension;

class BusinessWebsiteThemeExtension extends BaseExtension
{
    public function configureTheme()
    {
        return
            array(
                array(
                    'path' => __DIR__.'/../Resources/config',
                    'configFiles' =>
                    array(
                        'business_website_theme.xml',
                    ),
                    'configuration' =>
                    array(
                        array(
                            'path' => __DIR__.'/../Resources/config/templates',
                            'configFiles' =>
                            array(
                                'fullpage.xml',
                                'home.xml',
                                'rightcolumn.xml',
                                'sixboxes.xml',
                            ),
                            'configuration' =>
                            array(
                                array(
                                    'path' => __DIR__.'/../Resources/config/templates/slots',
                                    'configFiles' =>
                                    array(
                                        'base.xml',
                                        'fullpage.xml',
                                        'home.xml',
                                        'rightcolumn.xml',
                                        'sixboxes.xml',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            );
    }

    public function getAlias()
    {
        return 'business_website_theme';
    }
}