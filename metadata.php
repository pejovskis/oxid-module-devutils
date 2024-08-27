<?php
/*
 * vanilla-thunder/oxid-module-devutils
 * developent utilities for OXID eShop V6.2 and newer
 *
 * This program is free software;
 * you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation;
 * either version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 *  without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with this program; if not, see <http://www.gnu.org/licenses/>
 */

$sMetadataVersion = '2.1';
$aModule = [
    'id' => 'vt-devutils',
    'title' => '[vt] DevUtils',
    'description' => 'developent utilities for OXID eShop V6.2, forked repository',
    'thumbnail' => 'devutils.jpg',
    'version' => '2.1.9',
    'author' => 'Marat Bedoev',
    'email' => openssl_decrypt("Az6pE7kPbtnTzjHlPhPCa4ktJLphZ/w9gKgo5vA//p4=", str_rot13("nrf-128-pop"), str_rot13("gvalzpr")),
    'url' => 'https://github.com/pejovskis/oxid-module-devutils/tree/fix-module-path',
    'extend' => [
        //\OxidEsales\Eshop\Application\Controller\Admin\ModuleMain::class  => VanillaThunder\DevUtils\Application\Extend\ModuleMain::class,
        \OxidEsales\Eshop\Application\Controller\Admin\NavigationController::class => VanillaThunder\DevUtils\Application\Extend\Controller\NavigationController::class,
        \OxidEsales\Eshop\Application\Model\Order::class => VanillaThunder\DevUtils\Application\Extend\Model\Order::class,
        \OxidEsales\Eshop\Core\DbMetaDataHandler::class => VanillaThunder\DevUtils\Application\Extend\Core\DbMetaDataHandler::class,
        \OxidEsales\Eshop\Core\Email::class => VanillaThunder\DevUtils\Application\Extend\Core\Email::class,
        \OxidEsales\Eshop\Core\Language::class => VanillaThunder\DevUtils\Application\Extend\Core\Language::class,
        \OxidEsales\Eshop\Core\UtilsView::class => VanillaThunder\DevUtils\Application\Extend\Core\UtilsView::class,
    ],
    'controllers' => [
        'devchildtpl' => VanillaThunder\DevUtils\Application\Controller\Admin\DevChildTpl::class,
        'devconfigviewer' => VanillaThunder\DevUtils\Application\Controller\Admin\DevConfigViewer::class,
        'devgui' => VanillaThunder\DevUtils\Application\Controller\Admin\DevGui::class,
        'devlogs' => VanillaThunder\DevUtils\Application\Controller\Admin\DevLogs::class,
        'devmetadata' => VanillaThunder\DevUtils\Application\Controller\Admin\DevMetadata::class,
        'devmodulemetadata' => VanillaThunder\DevUtils\Application\Controller\Admin\DevModuleMetadata::class,
        'devtranslations' => VanillaThunder\DevUtils\Application\Controller\Admin\DevTranslations::class,
        'devmails' => VanillaThunder\DevUtils\Application\Controller\DevMails::class
    ],
    'templates' => [
        'vtdev_module_main.tpl' => 'vt/DevUtils/Application/views/admin/vtdev_module_main.tpl',
        'vtdev_navigation_header.tpl' => 'vt/DevUtils/Application/views/admin/vtdev_navigation_header.tpl',

        'devutils__header.tpl' => 'vt/DevUtils/Application/views/admin/devutils__header.tpl',
        'devutils__footer.tpl' => 'vt/DevUtils/Application/views/admin/devutils__footer.tpl',

        // admin templates
        'devutils_chiltpl.tpl' => 'vt/DevUtils/Application/views/admin/devutils_chiltpl.tpl',
        'devutils_configviewer.tpl' => 'vt/DevUtils/Application/views/admin/devutils_configviewer.tpl',
        'devutils_gui.tpl' => 'vt/DevUtils/Application/views/admin/devutils_gui.tpl',
        'devutils_logs.tpl' => 'vt/DevUtils/Application/views/admin/devutils_logs.tpl',
        'devutils_metadata.tpl' => 'vt/DevUtils/Application/views/admin/devutils_metadata.tpl',
        'devutils_modulemetadata.tpl' => 'vt/DevUtils/Application/views/admin/devutils_modulemetadata.tpl',
        'devutils_translations.tpl' => 'vt/DevUtils/Application/views/admin/devutils_translations.tpl',

        // frontend templates
        'devutils_mails.tpl' => 'vt/DevUtils/Application/views/devutils_mails.tpl',

    ],
    'blocks' => [],
    'settings' => []
];
