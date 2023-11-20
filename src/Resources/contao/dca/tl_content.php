<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 *
 * @package     Contao Themes-Shop
 * @filesource  tl_content.php
 * @version     1.0.0
 * @since       21.09.15 - 15:45
 * @author      Patrick Froch <info@easySolutionsIT.de>
 * @link        http://easySolutionsIT.de
 * @copyright   e@sy Solutions IT 2015
 * @license     EULA
 */

/**
 * Set Tablename: tl_content
 */
$strName = 'tl_content';

/* Palettes */
$GLOBALS['TL_DCA'][$strName]['palettes']['ctscolor'] = '{type_legend},type;{iconposition_legend},iconclass,variant;headline;{color_legend},ctsbgcolor,ctsfontcolor;{text_legend},text,ctscolortextalign;{link_legend},url,linkTitle,titleText,target;{template_legend:hide},ctstemplate;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';


$GLOBALS['TL_DCA'][$strName]['fields']['ctscolortextalign'] = array
(
    'label'                   => &$GLOBALS['TL_LANG'][$strName]['ctscolortextalign'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('center','left','right'),
    'eval'                    => array('tl_class' => 'w50', 'alwaysSave' => true),
    'sql'                     => "text NULL"
);