<?php
 
// Every file should have GPL and copyright in the header - we skip it in tutorials but you should not skip it for real.
 
// This line protects the file from being accessed by a URL directly.                                                               
defined('MOODLE_INTERNAL') || die();
// The name of the second tab in the theme settings.                                                                                
$string['advancedsettings'] = 'Advanced settings';                                                                                  
// The brand colour setting.                                                                                                        
$string['brandcolor'] = 'Brand colour';                                                                                             
// The brand colour setting description.                                                                                            
$string['brandcolor_desc'] = 'The accent colour.';     
// A description shown in the admin theme selector.                                                                         
$string['choosereadme'] = 'Theme TCDD Learn is a child theme of Boost. This is the official them for the Meteorological Service of Canada.';
// The name of our plugin.                                                                                                          
$string['configtitle'] = 'TCDD Learn';    
$string['newcourseurltargetnew'] = 'New Page';                                                                                                
// Name of the first settings tab.                                                                                                  
$string['generalsettings'] = 'General settings';                                                                                    
// The name of our plugin.                                                                                                          
$string['pluginname'] = 'TCDD Learn';                                                                                                    
// Preset files setting.                                                                                                            
$string['presetfiles'] = 'Additional theme preset files';                                                                           
// Preset files help text.                                                                                                          
$string['presetfiles_desc'] = 'Preset files can be used to dramatically alter the appearance of the theme. See <a href=https://docs.moodle.org/dev/Boost_Presets>Boost presets</a> for information on creating and sharing your own preset files, and see the <a href=http://moodle.net/boost>Presets repository</a> for presets that others have shared.';
// Preset setting.                                                                                                                  
$string['preset'] = 'Theme preset';                                                                                                 
// Preset help text.                                                                                                                
$string['preset_desc'] = 'Pick a preset to broadly change the look of the theme.';                                                  
// Raw SCSS setting.                                                                                                                
$string['rawscss'] = 'Raw SCSS';                                                                                                    
// Raw SCSS setting help text.                                                                                                      
$string['rawscss_desc'] = 'Use this field to provide SCSS or CSS code which will be injected at the end of the style sheet.';       
// Raw initial SCSS setting.                                                                                                        
$string['rawscsspre'] = 'Raw initial SCSS';                                                                                         
// Raw initial SCSS setting help text.                                                                                              
$string['rawscsspre_desc'] = 'In this field you can provide initialising SCSS code, it will be injected before everything else. Most of the time you will use this setting to define variables.';
// We need to include a lang string for each block region.                                                                             
$string['region-side-pre'] = 'Right';

// New Course slider on frontpage
$string['newcourseheading'] = 'New Course';
$string['newcourseinfodesc'] = 'Enter the settings for your New Courses.  You must include a title in order for the New Course to appear.  The title will activate the individual New Course secions on the frontpage slider.';
$string['newcourse1'] = 'New Course One';
$string['newcourse2'] = 'New Course Two';
$string['newcourse3'] = 'New Course Three';
$string['newcourse4'] = 'New Course Four';
$string['newcourse5'] = 'New Course Five';
$string['newcourse6'] = 'New Course six';
$string['newcoursetitle'] = 'Title';
$string['newcoursetitledesc'] = 'Title to show in this newcourse spot.  You must include a title in order for the Marketing Tile to appear.';
$string['newcourseicon'] = 'Link Icon';
$string['newcourseicondesc'] = 'Name of the icon you wish to use in the newcourse URL Button. List is <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_new">here</a>.  Just enter what is after "fa-", e.g. "star".';
$string['newcourseimage'] = 'Image';
$string['newcourseimage_desc'] = 'This provides the option of displaying an image in the newcourse spot';
$string['newcoursemetacontent'] = 'Meta Content';
$string['newcoursemetacontentdesc'] = 'Meta content to display in the newcourse box.';
$string['newcoursedescription'] = 'Description';
$string['newcoursedescriptiondesc'] = 'Enter a brief description of the course item.';
$string['newcoursebuttontext'] = 'Link Text';
$string['newcoursebuttontextdesc'] = 'Text to appear on the button.';
$string['newcoursebuttonurl'] = 'Link URL';
$string['newcoursebuttonurldesc'] = 'URL the button will point to.';

$string['categorymenusettings'] = 'Category menu';
$string['categorymenu1'] = 'Category Menu Item One';
$string['categorymenu2'] = 'Category Menu Item Two';
$string['categorymenu3'] = 'Category Menu Item Three';
$string['categorymenu4'] = 'Category Menu Item Four';
$string['categorymenuinfodesc'] = 'Add the title and URL of this category. If there are any sub-categories underneath this category, please enter the titles and URLs of these as well.';
$string['categorymenutitle'] = 'Category title';
$string['categorymenusubtitle'] = 'Subcategory title';
$string['categorymenutitledesc'] = 'Please enter the title of this category.';
$string['categorymenusubtitledesc'] = 'Please enter the title of this subcategory.';
$string['categorymenuurl'] = 'Category URL';
$string['categorymenusuburl'] = 'Subategory URL';
$string['categorymenuurldesc'] = 'Please enter the URL of this category.';
$string['categorymenusuburldesc'] = 'Please enter the URL of this subcategory.';

$string['newsheading'] = 'News';
$string['news'] = 'News';
$string['newsdesc'] = 'Enter a new News or Announcement item here. Your new item will be appended to the News list on the frontpage. Note that only the 10 latest items will be displayed on the frontpage at any one time';
$string['newstitle'] = 'Title';
$string['newstitledesc'] = 'The title of the news item.';
$string['newsbody'] = 'Description';
$string['newsbodydesc'] = 'The description of the news item.';
$string['newsdate'] = 'Date';
$string['newsdatedesc'] = "<strong style='color: red;'>Please do not enter anything in the above textbox.</strong>";

$string['linksheading'] = 'Links';
$string['links'] = 'Links';
$string['linksdesc'] = 'THese links will appear in the frontpage Links widget.';
$string['linkstitle'] = 'Link title';
$string['linkstitledesc'] = 'Enter link title.';
$string['linkstitleurl'] = 'Link URL';
$string['linkstitleurldesc'] = 'Enter the Link URL.';

$string['clickhere'] = 'Click here';
$string['newportal'] = 'to find out what\'s new in the Training Portal!';

$string['trainingcategories'] = 'Training categories';
$string['subcategories'] = 'Subcategories';

$string['latestcourses'] = 'Latest courses';

$string['searchcourses'] = 'Search courses...';

$string['msc'] = 'Meteorological Service of Canada';
$string['trainingportal'] = 'Training Portal';

$string['links'] = 'Links';

$string['logo'] = 'http://msc-educ-smc.cmc.ec.gc.ca/moodle/images/logo_en.png';

$string['contactmessage'] = 'You may contact the Training and Career Development Division (TCDD) at:';