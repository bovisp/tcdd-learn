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

/* New Course settings */
$page = new admin_settingpage('theme_tcdd_learn_news', get_string('newsheading', 'theme_tcdd_learn'));

/**
 * New Course spot #1
 */

// This is the heading text for New Course spot #1
$name = 'theme_tcdd_learn/newsinfo';
$heading = get_string('news', 'theme_tcdd_learn');
$information = get_string('newsdesc', 'theme_tcdd_learn');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// News item title
$name = 'theme_tcdd_learn/newstitle';
$title = get_string('newstitle', 'theme_tcdd_learn');
$description = get_string('newstitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// News item body
$name = 'theme_tcdd_learn/newsbody';
$title = get_string('newsbody', 'theme_tcdd_learn');
$description = get_string('newsbodydesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// News item date
$name = 'theme_tcdd_learn/newsdate';
$title = get_string('newsdate', 'theme_tcdd_learn');
$description = get_string('newsdatedesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$settings->add($page);