<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * General settings page file.
 *
 * @packagetheme_tcdd_learn
 * @copyright  2018 Paul Bovis
 * @creditstheme_tcdd_learn - MoodleHQ
 * @licensehttp://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/* General settings */                                                                         
$page = new admin_settingpage('theme_tcdd_learn_categorymenu', get_string('categorymenusettings', 'theme_tcdd_learn'));      

// This is the heading text for Category 1
$name = 'theme_tcdd_learn/categorymenu1info';
$heading = get_string('categorymenu1', 'theme_tcdd_learn');
$information = get_string('categorymenuinfodesc', 'theme_tcdd_learn');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// Category 1 title
$name = 'theme_tcdd_learn/categorymenu1';
$title = get_string('categorymenutitle', 'theme_tcdd_learn');
$description = get_string('categorymenutitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 1 URL
$name = 'theme_tcdd_learn/categorymenu1url';
$title = get_string('categorymenuurl', 'theme_tcdd_learn');
$description = get_string('categorymenuurldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 1 Subcategory 1 title
$name = 'theme_tcdd_learn/categorymenu1sub1';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 1 Subcategory 1 title URL
$name = 'theme_tcdd_learn/categorymenu1sub1url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 1 Subcategory 2 title
$name = 'theme_tcdd_learn/categorymenu1sub2';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 1 Subcategory 2 title URL
$name = 'theme_tcdd_learn/categorymenu1sub2url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 1 Subcategory 3 title
$name = 'theme_tcdd_learn/categorymenu1sub3';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 1 Subcategory 3 title URL
$name = 'theme_tcdd_learn/categorymenu1sub3url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 1 Subcategory 4 title
$name = 'theme_tcdd_learn/categorymenu1sub4';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 1 Subcategory 4 title URL
$name = 'theme_tcdd_learn/categorymenu1sub4url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 1 Subcategory 5 title
$name = 'theme_tcdd_learn/categorymenu1sub5';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 1 Subcategory 5 title URL
$name = 'theme_tcdd_learn/categorymenu1sub5url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 1 Subcategory 6 title
$name = 'theme_tcdd_learn/categorymenu1sub6';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 1 Subcategory 6 title URL
$name = 'theme_tcdd_learn/categorymenu1sub6url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 1 Subcategory 7 title
$name = 'theme_tcdd_learn/categorymenu1sub7';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 1 Subcategory 7 title URL
$name = 'theme_tcdd_learn/categorymenu1sub7url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 1 Subcategory 8 title
$name = 'theme_tcdd_learn/categorymenu1sub8';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 1 Subcategory 8 title URL
$name = 'theme_tcdd_learn/categorymenu1sub8url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 1 Subcategory 9 title
$name = 'theme_tcdd_learn/categorymenu1sub9';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 1 Subcategory 9 title URL
$name = 'theme_tcdd_learn/categorymenu1sub9url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 1 Subcategory 10 title
$name = 'theme_tcdd_learn/categorymenu1sub10';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 1 Subcategory 10 title URL
$name = 'theme_tcdd_learn/categorymenu1sub10url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);



// This is the heading text for Category 2
$name = 'theme_tcdd_learn/categorymenu2info';
$heading = get_string('categorymenu2', 'theme_tcdd_learn');
$information = get_string('categorymenuinfodesc', 'theme_tcdd_learn');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// Category 2 title
$name = 'theme_tcdd_learn/categorymenu2';
$title = get_string('categorymenutitle', 'theme_tcdd_learn');
$description = get_string('categorymenutitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 2 URL
$name = 'theme_tcdd_learn/categorymenu2url';
$title = get_string('categorymenuurl', 'theme_tcdd_learn');
$description = get_string('categorymenuurldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 2 Subcategory 1 title
$name = 'theme_tcdd_learn/categorymenu2sub1';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 2 Subcategory 1 title URL
$name = 'theme_tcdd_learn/categorymenu2sub1url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 2 Subcategory 2 title
$name = 'theme_tcdd_learn/categorymenu2sub2';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 2 Subcategory 2 title URL
$name = 'theme_tcdd_learn/categorymenu2sub2url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 2 Subcategory 3 title
$name = 'theme_tcdd_learn/categorymenu2sub3';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 2 Subcategory 3 title URL
$name = 'theme_tcdd_learn/categorymenu2sub3url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 2 Subcategory 4 title
$name = 'theme_tcdd_learn/categorymenu2sub4';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 2 Subcategory 4 title URL
$name = 'theme_tcdd_learn/categorymenu2sub4url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 2 Subcategory 5 title
$name = 'theme_tcdd_learn/categorymenu2sub5';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 2 Subcategory 5 title URL
$name = 'theme_tcdd_learn/categorymenu2sub5url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 2 Subcategory 6 title
$name = 'theme_tcdd_learn/categorymenu2sub6';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 2 Subcategory 6 title URL
$name = 'theme_tcdd_learn/categorymenu2sub6url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 2 Subcategory 7 title
$name = 'theme_tcdd_learn/categorymenu2sub7';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 2 Subcategory 7 title URL
$name = 'theme_tcdd_learn/categorymenu2sub7url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 2 Subcategory 8 title
$name = 'theme_tcdd_learn/categorymenu2sub8';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 2 Subcategory 8 title URL
$name = 'theme_tcdd_learn/categorymenu2sub8url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 2 Subcategory 9 title
$name = 'theme_tcdd_learn/categorymenu2sub9';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 2 Subcategory 9 title URL
$name = 'theme_tcdd_learn/categorymenu2sub9url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 2 Subcategory 10 title
$name = 'theme_tcdd_learn/categorymenu2sub10';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 2 Subcategory 10 title URL
$name = 'theme_tcdd_learn/categorymenu2sub10url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);



// This is the heading text for Category 3
$name = 'theme_tcdd_learn/categorymenu3info';
$heading = get_string('categorymenu3', 'theme_tcdd_learn');
$information = get_string('categorymenuinfodesc', 'theme_tcdd_learn');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// Category 3 title
$name = 'theme_tcdd_learn/categorymenu3';
$title = get_string('categorymenutitle', 'theme_tcdd_learn');
$description = get_string('categorymenutitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 3 URL
$name = 'theme_tcdd_learn/categorymenu3url';
$title = get_string('categorymenuurl', 'theme_tcdd_learn');
$description = get_string('categorymenuurldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 3 Subcategory 1 title
$name = 'theme_tcdd_learn/categorymenu3sub1';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 3 Subcategory 1 title URL
$name = 'theme_tcdd_learn/categorymenu3sub1url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 3 Subcategory 2 title
$name = 'theme_tcdd_learn/categorymenu3sub2';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 3 Subcategory 2 title URL
$name = 'theme_tcdd_learn/categorymenu3sub2url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 3 Subcategory 3 title
$name = 'theme_tcdd_learn/categorymenu3sub3';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 3 Subcategory 3 title URL
$name = 'theme_tcdd_learn/categorymenu3sub3url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 3 Subcategory 4 title
$name = 'theme_tcdd_learn/categorymenu3sub4';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 3 Subcategory 4 title URL
$name = 'theme_tcdd_learn/categorymenu3sub4url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 3 Subcategory 5 title
$name = 'theme_tcdd_learn/categorymenu3sub5';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 3 Subcategory 5 title URL
$name = 'theme_tcdd_learn/categorymenu3sub5url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 3 Subcategory 6 title
$name = 'theme_tcdd_learn/categorymenu3sub6';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 3 Subcategory 6 title URL
$name = 'theme_tcdd_learn/categorymenu3sub6url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 3 Subcategory 7 title
$name = 'theme_tcdd_learn/categorymenu3sub7';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 3 Subcategory 7 title URL
$name = 'theme_tcdd_learn/categorymenu3sub7url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 3 Subcategory 8 title
$name = 'theme_tcdd_learn/categorymenu3sub8';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 3 Subcategory 8 title URL
$name = 'theme_tcdd_learn/categorymenu3sub8url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 3 Subcategory 9 title
$name = 'theme_tcdd_learn/categorymenu3sub9';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 3 Subcategory 9 title URL
$name = 'theme_tcdd_learn/categorymenu3sub9url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 3 Subcategory 10 title
$name = 'theme_tcdd_learn/categorymenu3sub10';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 3 Subcategory 10 title URL
$name = 'theme_tcdd_learn/categorymenu3sub10url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);



// This is the heading text for Category 4
$name = 'theme_tcdd_learn/categorymenu4info';
$heading = get_string('categorymenu4', 'theme_tcdd_learn');
$information = get_string('categorymenuinfodesc', 'theme_tcdd_learn');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// Category 4 title
$name = 'theme_tcdd_learn/categorymenu4';
$title = get_string('categorymenutitle', 'theme_tcdd_learn');
$description = get_string('categorymenutitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 4 URL
$name = 'theme_tcdd_learn/categorymenu4url';
$title = get_string('categorymenuurl', 'theme_tcdd_learn');
$description = get_string('categorymenuurldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 4 Subcategory 1 title
$name = 'theme_tcdd_learn/categorymenu4sub1';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 4 Subcategory 1 title URL
$name = 'theme_tcdd_learn/categorymenu4sub1url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 4 Subcategory 2 title
$name = 'theme_tcdd_learn/categorymenu4sub2';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 4 Subcategory 2 title URL
$name = 'theme_tcdd_learn/categorymenu4sub2url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 4 Subcategory 3 title
$name = 'theme_tcdd_learn/categorymenu4sub3';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 4 Subcategory 3 title URL
$name = 'theme_tcdd_learn/categorymenu4sub3url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 4 Subcategory 4 title
$name = 'theme_tcdd_learn/categorymenu4sub4';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 4 Subcategory 4 title URL
$name = 'theme_tcdd_learn/categorymenu4sub4url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 4 Subcategory 5 title
$name = 'theme_tcdd_learn/categorymenu4sub5';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 4 Subcategory 5 title URL
$name = 'theme_tcdd_learn/categorymenu4sub5url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 4 Subcategory 6 title
$name = 'theme_tcdd_learn/categorymenu4sub6';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 4 Subcategory 6 title URL
$name = 'theme_tcdd_learn/categorymenu4sub6url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 4 Subcategory 7 title
$name = 'theme_tcdd_learn/categorymenu4sub7';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 4 Subcategory 7 title URL
$name = 'theme_tcdd_learn/categorymenu4sub7url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 4 Subcategory 8 title
$name = 'theme_tcdd_learn/categorymenu4sub8';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 4 Subcategory 8 title URL
$name = 'theme_tcdd_learn/categorymenu4sub8url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 4 Subcategory 9 title
$name = 'theme_tcdd_learn/categorymenu4sub9';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 4 Subcategory 9 title URL
$name = 'theme_tcdd_learn/categorymenu4sub9url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 4 Subcategory 10 title
$name = 'theme_tcdd_learn/categorymenu4sub10';
$title = get_string('categorymenusubtitle', 'theme_tcdd_learn');
$description = get_string('categorymenusubtitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Category 4 Subcategory 10 title URL
$name = 'theme_tcdd_learn/categorymenu4sub10url';
$title = get_string('categorymenusuburl', 'theme_tcdd_learn');
$description = get_string('categorymenusuburldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);



$settings->add($page);