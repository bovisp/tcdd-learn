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
 * New Course settings page file.
 *
 * @packagetheme_tcdd_learn
 * @copyright  2018 Paul Bovis
 * @creditstheme_tcdd_learn - MoodleHQ
 * @licensehttp://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/* Links settings */
$page = new admin_settingpage('theme_tcdd_learn_links', get_string('linksheading', 'theme_tcdd_learn'));

// This is the heading text for the Links section
$name = 'theme_tcdd_learn/linksinfo';
$heading = get_string('links', 'theme_tcdd_learn');
$information = get_string('linksdesc', 'theme_tcdd_learn');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// Link item #1 title
$name = 'theme_tcdd_learn/linkstitle1';
$title = get_string('linkstitle', 'theme_tcdd_learn');
$description = get_string('linkstitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Link item #1 URL
$name = 'theme_tcdd_learn/linkstitle1url';
$title = get_string('linkstitleurl', 'theme_tcdd_learn');
$description = get_string('linkstitleurldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Link item #2 title
$name = 'theme_tcdd_learn/linkstitle2';
$title = get_string('linkstitle', 'theme_tcdd_learn');
$description = get_string('linkstitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Link item #2 URL
$name = 'theme_tcdd_learn/linkstitle2url';
$title = get_string('linkstitleurl', 'theme_tcdd_learn');
$description = get_string('linkstitleurldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Link item #3 title
$name = 'theme_tcdd_learn/linkstitle3';
$title = get_string('linkstitle', 'theme_tcdd_learn');
$description = get_string('linkstitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Link item #3 URL
$name = 'theme_tcdd_learn/linkstitle3url';
$title = get_string('linkstitleurl', 'theme_tcdd_learn');
$description = get_string('linkstitleurldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Link item #4 title
$name = 'theme_tcdd_learn/linkstitle4';
$title = get_string('linkstitle', 'theme_tcdd_learn');
$description = get_string('linkstitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Link item #4 URL
$name = 'theme_tcdd_learn/linkstitle4url';
$title = get_string('linkstitleurl', 'theme_tcdd_learn');
$description = get_string('linkstitleurldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Link item #5 title
$name = 'theme_tcdd_learn/linkstitle5';
$title = get_string('linkstitle', 'theme_tcdd_learn');
$description = get_string('linkstitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Link item #5 URL
$name = 'theme_tcdd_learn/linkstitle5url';
$title = get_string('linkstitleurl', 'theme_tcdd_learn');
$description = get_string('linkstitleurldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Link item #6 title
$name = 'theme_tcdd_learn/linkstitle6';
$title = get_string('linkstitle', 'theme_tcdd_learn');
$description = get_string('linkstitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Link item #6 URL
$name = 'theme_tcdd_learn/linkstitle6url';
$title = get_string('linkstitleurl', 'theme_tcdd_learn');
$description = get_string('linkstitleurldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Link item #7 title
$name = 'theme_tcdd_learn/linkstitle7';
$title = get_string('linkstitle', 'theme_tcdd_learn');
$description = get_string('linkstitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Link item #7 URL
$name = 'theme_tcdd_learn/linkstitle7url';
$title = get_string('linkstitleurl', 'theme_tcdd_learn');
$description = get_string('linkstitleurldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Link item #8 title
$name = 'theme_tcdd_learn/linkstitle8';
$title = get_string('linkstitle', 'theme_tcdd_learn');
$description = get_string('linkstitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Link item #8 URL
$name = 'theme_tcdd_learn/linkstitle8url';
$title = get_string('linkstitleurl', 'theme_tcdd_learn');
$description = get_string('linkstitleurldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Link item #9 title
$name = 'theme_tcdd_learn/linkstitle9';
$title = get_string('linkstitle', 'theme_tcdd_learn');
$description = get_string('linkstitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Link item #9 URL
$name = 'theme_tcdd_learn/linkstitle9url';
$title = get_string('linkstitleurl', 'theme_tcdd_learn');
$description = get_string('linkstitleurldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Link item #10 title
$name = 'theme_tcdd_learn/linkstitle10';
$title = get_string('linkstitle', 'theme_tcdd_learn');
$description = get_string('linkstitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Link item #10 URL
$name = 'theme_tcdd_learn/linkstitle10url';
$title = get_string('linkstitleurl', 'theme_tcdd_learn');
$description = get_string('linkstitleurldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$settings->add($page);