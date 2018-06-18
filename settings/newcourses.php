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
$page = new admin_settingpage('theme_tcdd_learn_newcourse', get_string('newcourseheading', 'theme_tcdd_learn'));

/**
 * New Course spot #1
 */

// This is the heading text for New Course spot #1
$name = 'theme_tcdd_learn/newcourse1info';
$heading = get_string('newcourse1', 'theme_tcdd_learn');
$information = get_string('newcourseinfodesc', 'theme_tcdd_learn');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// New Course spot #1 title
$name = 'theme_tcdd_learn/newcourse1';
$title = get_string('newcoursetitle', 'theme_tcdd_learn');
$description = get_string('newcoursetitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// New Course spot #1 image.
$name = 'theme_tcdd_learn/newcourse1image';
$title = get_string('newcourseimage', 'theme_tcdd_learn');
$description = get_string('newcourseimage_desc', 'theme_tcdd_learn');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'newcourse1image');
$setting->set_updatedcallback('theme_tcdd_learn_update_settings_images');
$page->add($setting);

// New Course spot #1 text metacontent.
$name = 'theme_tcdd_learn/newcourse1metacontent';
$title = get_string('newcoursemetacontent', 'theme_tcdd_learn');
$description = get_string('newcoursemetacontentdesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// New Course spot #1 text description.
$name = 'theme_tcdd_learn/newcourse1description';
$title = get_string('newcoursedescription', 'theme_tcdd_learn');
$description = get_string('newcoursedescriptiondesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// New Course spot #1 text button text.
$name = 'theme_tcdd_learn/newcourse1buttontext';
$title = get_string('newcoursebuttontext', 'theme_tcdd_learn');
$description = get_string('newcoursebuttontextdesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// New Course spot #1 text button url.
$name = 'theme_tcdd_learn/newcourse1buttonurl';
$title = get_string('newcoursebuttonurl', 'theme_tcdd_learn');
$description = get_string('newcoursebuttonurldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

/**
 * New Course spot #2
 */

// This is the heading text for New Course spot #2
$name = 'theme_tcdd_learn/newcourse2info';
$heading = get_string('newcourse2', 'theme_tcdd_learn');
$information = get_string('newcourseinfodesc', 'theme_tcdd_learn');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// New Course spot #2 title
$name = 'theme_tcdd_learn/newcourse2';
$title = get_string('newcoursetitle', 'theme_tcdd_learn');
$description = get_string('newcoursetitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// New Course spot #2 image.
$name = 'theme_tcdd_learn/newcourse2image';
$title = get_string('newcourseimage', 'theme_tcdd_learn');
$description = get_string('newcourseimage_desc', 'theme_tcdd_learn');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'newcourse2image');
$setting->set_updatedcallback('theme_tcdd_learn_update_settings_images');
$page->add($setting);

// New Course spot #2 text metacontent.
$name = 'theme_tcdd_learn/newcourse2metacontent';
$title = get_string('newcoursemetacontent', 'theme_tcdd_learn');
$description = get_string('newcoursemetacontentdesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// New Course spot #2 text description.
$name = 'theme_tcdd_learn/newcourse2description';
$title = get_string('newcoursedescription', 'theme_tcdd_learn');
$description = get_string('newcoursedescriptiondesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// New Course spot #2 text button text.
$name = 'theme_tcdd_learn/newcourse2buttontext';
$title = get_string('newcoursebuttontext', 'theme_tcdd_learn');
$description = get_string('newcoursebuttontextdesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// New Course spot #2 text button url.
$name = 'theme_tcdd_learn/newcourse2buttonurl';
$title = get_string('newcoursebuttonurl', 'theme_tcdd_learn');
$description = get_string('newcoursebuttonurldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

/**
 * New Course spot #3
 */

// This is the heading text for New Course spot #3
$name = 'theme_tcdd_learn/newcourse3info';
$heading = get_string('newcourse3', 'theme_tcdd_learn');
$information = get_string('newcourseinfodesc', 'theme_tcdd_learn');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// New Course spot #3 title
$name = 'theme_tcdd_learn/newcourse3';
$title = get_string('newcoursetitle', 'theme_tcdd_learn');
$description = get_string('newcoursetitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// New Course spot #3 image.
$name = 'theme_tcdd_learn/newcourse3image';
$title = get_string('newcourseimage', 'theme_tcdd_learn');
$description = get_string('newcourseimage_desc', 'theme_tcdd_learn');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'newcourse3image');
$setting->set_updatedcallback('theme_tcdd_learn_update_settings_images');
$page->add($setting);

// New Course spot #3 text metacontent.
$name = 'theme_tcdd_learn/newcourse3metacontent';
$title = get_string('newcoursemetacontent', 'theme_tcdd_learn');
$description = get_string('newcoursemetacontentdesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// New Course spot #3 text description.
$name = 'theme_tcdd_learn/newcourse3description';
$title = get_string('newcoursedescription', 'theme_tcdd_learn');
$description = get_string('newcoursedescriptiondesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// New Course spot #3 text button text.
$name = 'theme_tcdd_learn/newcourse3buttontext';
$title = get_string('newcoursebuttontext', 'theme_tcdd_learn');
$description = get_string('newcoursebuttontextdesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// New Course spot #3 text button url.
$name = 'theme_tcdd_learn/newcourse3buttonurl';
$title = get_string('newcoursebuttonurl', 'theme_tcdd_learn');
$description = get_string('newcoursebuttonurldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

/**
 * New Course spot #4
 */

// This is the heading text for New Course spot #4
$name = 'theme_tcdd_learn/newcourse4info';
$heading = get_string('newcourse4', 'theme_tcdd_learn');
$information = get_string('newcourseinfodesc', 'theme_tcdd_learn');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// New Course spot #4 title
$name = 'theme_tcdd_learn/newcourse4';
$title = get_string('newcoursetitle', 'theme_tcdd_learn');
$description = get_string('newcoursetitledesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// New Course spot #4 image.
$name = 'theme_tcdd_learn/newcourse4image';
$title = get_string('newcourseimage', 'theme_tcdd_learn');
$description = get_string('newcourseimage_desc', 'theme_tcdd_learn');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'newcourse4image');
$setting->set_updatedcallback('theme_tcdd_learn_update_settings_images');
$page->add($setting);

// New Course spot #4 text metacontent.
$name = 'theme_tcdd_learn/newcourse4metacontent';
$title = get_string('newcoursemetacontent', 'theme_tcdd_learn');
$description = get_string('newcoursemetacontentdesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// New Course spot #4 text description.
$name = 'theme_tcdd_learn/newcourse4description';
$title = get_string('newcoursedescription', 'theme_tcdd_learn');
$description = get_string('newcoursedescriptiondesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// New Course spot #4 text button text.
$name = 'theme_tcdd_learn/newcourse4buttontext';
$title = get_string('newcoursebuttontext', 'theme_tcdd_learn');
$description = get_string('newcoursebuttontextdesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// New Course spot #4 text button url.
$name = 'theme_tcdd_learn/newcourse4buttonurl';
$title = get_string('newcoursebuttonurl', 'theme_tcdd_learn');
$description = get_string('newcoursebuttonurldesc', 'theme_tcdd_learn');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$settings->add($page);