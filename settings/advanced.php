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
 * Advanced settings page file.
 *
 * @packagetheme_tcdd_learn
 * @copyright  2018 Paul Bovis
 * @creditstheme_tcdd_learn - MoodleHQ
 * @licensehttp://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/* Advanced settings */                                                                                                          
$page = new admin_settingpage('theme_tcdd_learn_advanced', get_string('advancedsettings', 'theme_tcdd_learn'));                           

// Raw SCSS to include before the content.                                                                                      
$setting = new admin_setting_configtextarea('theme_tcdd_learn/scsspre',                                                              
    get_string('rawscsspre', 'theme_tcdd_learn'), get_string('rawscsspre_desc', 'theme_tcdd_learn'), '', PARAM_RAW);                      
$setting->set_updatedcallback('theme_reset_all_caches');                                                                        
$page->add($setting);                                                                                                           

// Raw SCSS to include after the content.                                                                                       
$setting = new admin_setting_configtextarea('theme_tcdd_learn/scss', get_string('rawscss', 'theme_tcdd_learn'),                           
    get_string('rawscss_desc', 'theme_tcdd_learn'), '', PARAM_RAW);                                                                  
$setting->set_updatedcallback('theme_reset_all_caches');                                                                        
$page->add($setting);                                                                                                           

$settings->add($page);  