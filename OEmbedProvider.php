<?php

/*
 * Copyright (C) 2010 Brion Vibber <brion@pobox.com>
 * http://www.mediawiki.org/
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 */

$wgExtensionCredits['other'][] = array(
	'path'           => __FILE__,
	'name'           => 'OEmbedProvider',
	'descriptionmsg' => 'oembedprovider-desc',
	'author'         => 'Brion Vibber',
	'url'            => 'http://www.mediawiki.org/wiki/Extension:OEmbedProvider'
);

$wgExtensionMessagesFiles['OEmbedProvider'] = dirname(__FILE__) . '/OEmbedProvider.i18n.php';

$wgAPIModules['oembed'] = 'ApiOEmbed';
$wgAutoloadClasses['ApiOEmbed'] =
	dirname(__FILE__) . '/ApiOEmbed.php';

/**
 * Include <link rel> info on file pages?
 * @todo implement
 */
$wgOEmbedProviderDiscovery = true;
