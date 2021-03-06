<?php

/**
 * ownCloud - search_public
 *
 * @author Jorge Rafael García Ramos
 * @copyright 2012 Jorge Rafael García Ramos <kadukeitor@gmail.com>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

OCP\User::checkLoggedIn();
OCP\App::checkAppEnabled('search_public');

$l = OC_L10N::get('search_public');

OCP\App::setActiveNavigationEntry( 'search_public_index' );

$tmpl = new OCP\Template('search_public', 'search', 'user');
$tmpl->assign( 'caption' , $l->t('Search public Files & Folder in ownCloud :-)') );
$tmpl->assign( 'pattern' , '' );
$tmpl->assign( 'search' , array() );
$tmpl->printPage();


