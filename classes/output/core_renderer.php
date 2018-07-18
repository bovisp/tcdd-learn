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
namespace theme_tcdd_learn\output;

use coding_exception;
use html_writer;
use tabobject;
use tabtree;
use custom_menu_item;
use custom_menu;
use block_contents;
use navigation_node;
use action_link;
use stdClass;
use moodle_url;
use preferences_groups;
use action_menu;
use help_icon;
use single_button;
use single_select;
use paging_bar;
use url_select;
use context_course;
use pix_icon;
use theme_config;

defined('MOODLE_INTERNAL') || die;

require_once ($CFG->dirroot . "/course/renderer.php");
require_once ($CFG->libdir . '/coursecatlib.php');

/**
 * Renderers to align Moodle's HTML with that expected by Bootstrap
 *
 * @package    theme_tcdd_learn
 * @copyright  2012 Bas Brands, www.basbrands.nl
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class core_renderer extends \theme_boost\output\core_renderer {
    private function array_sort($array, $on, $order=SORT_ASC){

        $new_array = array();
        $sortable_array = array();

        if (count($array) > 0) {
            foreach ($array as $k => $v) {
                if (is_array($v)) {
                    foreach ($v as $k2 => $v2) {
                        if ($k2 == $on) {
                            $sortable_array[$k] = $v2;
                        }
                    }
                } else {
                    $sortable_array[$k] = $v;
                }
            }

            switch ($order) {
                case SORT_ASC:
                    asort($sortable_array);
                    break;
                case SORT_DESC:
                    arsort($sortable_array);
                    break;
            }

            foreach ($sortable_array as $k => $v) {
                $new_array[$k] = $array[$k];
            }
        }

        return $new_array;
    }

    public function tcdd_news() {
        global $CFG, $PAGE;

        $context = $this->page->context;

        // Change the UNIX timesptamp to a human readable date.
        $newformat = date("Y-m-d H:i:s", substr($PAGE->theme->settings->newsdate, 0, 10));

        // Assemble the new data into an array.
        $newData = array(
            'title' => $PAGE->theme->settings->newstitle,
            'body' => $PAGE->theme->settings->newsbody,
            'date' => $newformat,
            'epochdate' => $PAGE->theme->settings->newsdate
        );

        // Open the JSON file and get its contents. Delete it afterwards.
        $file = file_get_contents($CFG->dirroot . '/theme/tcdd_learn/json/news.json', true);
        $data = json_decode($file,true);
        $data = array_unique($data, SORT_REGULAR);
        unset($file);

       $data = $this->array_sort($data, 'epochdate', SORT_DESC);

        if (count($data) > 5) {
            array_pop($data);
        }
        
        $data[] = $newData;

        $data = array_unique($data, SORT_REGULAR);

        $result = json_encode($data);
        file_put_contents($CFG->dirroot . '/theme/tcdd_learn/json/news.json', $result);
        unset($result);

        $tcdd_newscontext = [
            'hasnewsitems' => count($data),
            'newsitems' => []
        ];

        foreach ($data as $item) {
            $tcdd_newscontext['newsitems'][] = $item;
        }

        return $this->render_from_template('theme_tcdd_learn/tcddnews', $tcdd_newscontext);
    }

    public function tcdd_links() {
        global $PAGE;

        $context = $this->page->context;
        $linksCount = 10;
        $linkItems = [];

        $haslink1 = (empty($PAGE->theme->settings->linkstitle1)) ? false : $PAGE->theme->settings->linkstitle1;
        $link1url = (empty($PAGE->theme->settings->linkstitle1url)) ? false : $PAGE->theme->settings->linkstitle1url;
        $haslink2 = (empty($PAGE->theme->settings->linkstitle2)) ? false : $PAGE->theme->settings->linkstitle2;
        $link2url = (empty($PAGE->theme->settings->linkstitle2url)) ? false : $PAGE->theme->settings->linkstitle2url;
        $haslink3 = (empty($PAGE->theme->settings->linkstitle3)) ? false : $PAGE->theme->settings->linkstitle3;
        $link3url = (empty($PAGE->theme->settings->linkstitle3url)) ? false : $PAGE->theme->settings->linkstitle3url;
        $haslink4 = (empty($PAGE->theme->settings->linkstitle4)) ? false : $PAGE->theme->settings->linkstitle4;
        $link4url = (empty($PAGE->theme->settings->linkstitle4url)) ? false : $PAGE->theme->settings->linkstitle4url;
        $haslink5 = (empty($PAGE->theme->settings->linkstitle5)) ? false : $PAGE->theme->settings->linkstitle5;
        $link5url = (empty($PAGE->theme->settings->linkstitle5url)) ? false : $PAGE->theme->settings->linkstitle5url;
        $haslink6 = (empty($PAGE->theme->settings->linkstitle6)) ? false : $PAGE->theme->settings->linkstitle6;
        $link6url = (empty($PAGE->theme->settings->linkstitle6url)) ? false : $PAGE->theme->settings->linkstitle6url;
        $haslink7 = (empty($PAGE->theme->settings->linkstitle7)) ? false : $PAGE->theme->settings->linkstitle7;
        $link7url = (empty($PAGE->theme->settings->linkstitle7url)) ? false : $PAGE->theme->settings->linkstitle7url;
        $haslink8 = (empty($PAGE->theme->settings->linkstitle8)) ? false : $PAGE->theme->settings->linkstitle8;
        $link8url = (empty($PAGE->theme->settings->linkstitle8url)) ? false : $PAGE->theme->settings->linkstitle8url;
        $haslink9 = (empty($PAGE->theme->settings->linkstitle9)) ? false : $PAGE->theme->settings->linkstitle9;
        $link9url = (empty($PAGE->theme->settings->linkstitle9url)) ? false : $PAGE->theme->settings->linkstitle9url;
        $haslink10 = (empty($PAGE->theme->settings->linkstitle10)) ? false : $PAGE->theme->settings->linkstitle10;
        $link10url = (empty($PAGE->theme->settings->linkstitle10url)) ? false : $PAGE->theme->settings->linkstitle10url;

        for ($i = 1; $i <= $linksCount; $i++) {
            if (${'haslink'.$i}) {
                $linkItems[] = [
                    'haslink' => ${'haslink'.$i},
                    'linkurl' => ${'link'.$i.'url'}
                ];
            }
        }

        $tcdd_linkscontext = [
            'haslinkitems' => count($linkItems),
            'linkitems' => $linkItems
        ];

        return $this->render_from_template('theme_tcdd_learn/tcddlinks', $tcdd_linkscontext);
    }

	public function tcdd_newcourse() {
        global $PAGE;

        $context = $this->page->context;

        $hasnewcourse1 = (empty($PAGE->theme->settings->newcourse1)) ? false : format_text($PAGE->theme->settings->newcourse1);
        $newcourse1metacontent = (empty($PAGE->theme->settings->newcourse1metacontent)) ? false : format_text($PAGE->theme->settings->newcourse1metacontent);
        $newcourse1description = (empty($PAGE->theme->settings->newcourse1description)) ? false : format_text($PAGE->theme->settings->newcourse1description);
        $newcourse1buttontext = (empty($PAGE->theme->settings->newcourse1buttontext)) ? false : format_text($PAGE->theme->settings->newcourse1buttontext);
        $newcourse1buttonurl = (empty($PAGE->theme->settings->newcourse1buttonurl)) ? false : $PAGE->theme->settings->newcourse1buttonurl;
        $newcourse1image = (empty($PAGE->theme->settings->newcourse1image)) ? false : 'newcourse1image';

        $hasnewcourse2 = (empty($PAGE->theme->settings->newcourse2)) ? false : format_text($PAGE->theme->settings->newcourse2);
        $newcourse2metacontent = (empty($PAGE->theme->settings->newcourse2metacontent)) ? false : format_text($PAGE->theme->settings->newcourse2metacontent);
        $newcourse2description = (empty($PAGE->theme->settings->newcourse2description)) ? false : format_text($PAGE->theme->settings->newcourse2description);
        $newcourse2buttontext = (empty($PAGE->theme->settings->newcourse2buttontext)) ? false : format_text($PAGE->theme->settings->newcourse2buttontext);
        $newcourse2buttonurl = (empty($PAGE->theme->settings->newcourse2buttonurl)) ? false : $PAGE->theme->settings->newcourse2buttonurl;
        $newcourse2image = (empty($PAGE->theme->settings->newcourse2image)) ? false : 'newcourse2image';

        $hasnewcourse3 = (empty($PAGE->theme->settings->newcourse3)) ? false : format_text($PAGE->theme->settings->newcourse3);
        $newcourse3metacontent = (empty($PAGE->theme->settings->newcourse3metacontent)) ? false : format_text($PAGE->theme->settings->newcourse3metacontent);
        $newcourse3description = (empty($PAGE->theme->settings->newcourse3description)) ? false : format_text($PAGE->theme->settings->newcourse3description);
        $newcourse3buttontext = (empty($PAGE->theme->settings->newcourse3buttontext)) ? false : format_text($PAGE->theme->settings->newcourse3buttontext);
        $newcourse3buttonurl = (empty($PAGE->theme->settings->newcourse3buttonurl)) ? false : $PAGE->theme->settings->newcourse3buttonurl;
        $newcourse3image = (empty($PAGE->theme->settings->newcourse3image)) ? false : 'newcourse3image';

        $hasnewcourse4 = (empty($PAGE->theme->settings->newcourse4)) ? false : format_text($PAGE->theme->settings->newcourse4);
        $newcourse4metacontent = (empty($PAGE->theme->settings->newcourse4metacontent)) ? false : format_text($PAGE->theme->settings->newcourse4metacontent);
        $newcourse4description = (empty($PAGE->theme->settings->newcourse4description)) ? false : format_text($PAGE->theme->settings->newcourse4description);
        $newcourse4buttontext = (empty($PAGE->theme->settings->newcourse4buttontext)) ? false : format_text($PAGE->theme->settings->newcourse4buttontext);
        $newcourse4buttonurl = (empty($PAGE->theme->settings->newcourse4buttonurl)) ? false : $PAGE->theme->settings->newcourse4buttonurl;
        $newcourse4image = (empty($PAGE->theme->settings->newcourse4image)) ? false : 'newcourse4image';

        $tcdd_newcoursecontext = [
        	'hasnewcourses' => ($hasnewcourse1 || $hasnewcourse2 || $hasnewcourse3 || $hasnewcourse4) ? true : false, 'newcourses' => array(
            array(
                'hascourse' => $hasnewcourse1,
                'tileimage' => $newcourse1image,
                'metacontent' => $newcourse1metacontent,
                'description' => $newcourse1description,
                'title' => $hasnewcourse1,
                'button' => "<a href = '$newcourse1buttonurl' title = '$newcourse1buttontext' alt='$newcourse1buttontext' class='btn btn-outline-primary'> $newcourse1buttontext </a>",
                'url' => $newcourse1buttonurl
            ) ,
            array(
                'hascourse' => $hasnewcourse2,
                'tileimage' => $newcourse2image,
                'metacontent' => $newcourse2metacontent,
                'description' => $newcourse2description,
                'title' => $hasnewcourse2,
                'button' => "<a href = '$newcourse2buttonurl' title = '$newcourse2buttontext' alt='$newcourse2buttontext' class='btn btn-outline-primary ml-auto'> $newcourse2buttontext </a>",
                'url' => $newcourse2buttonurl
            ) ,
            array(
                'hascourse' => $hasnewcourse3,
                'tileimage' => $newcourse3image,
                'metacontent' => $newcourse3metacontent,
                'description' => $newcourse3description,
                'title' => $hasnewcourse3,
                'button' => "<a href = '$newcourse3buttonurl' title = '$newcourse3buttontext' alt='$newcourse3buttontext' class='btn btn-outline-primary ml-auto'> $newcourse3buttontext </a>",
                'url' => $newcourse3buttonurl
            ) ,
            array(
                'hascourse' => $hasnewcourse4,
                'tileimage' => $newcourse4image,
                'metacontent' => $newcourse4metacontent,
                'description' => $newcourse4description,
                'title' => $hasnewcourse4,
                'button' => "<a href = '$newcourse4buttonurl' title = '$newcourse4buttontext' alt='$newcourse4buttontext' class='btn btn-outline-primary ml-auto'> $newcourse4buttontext </a>",
                'url' => $newcourse4buttonurl
            ) 
        )];

        return $this->render_from_template('theme_tcdd_learn/tcddnewcourse', $tcdd_newcoursecontext);
    }

    public function tcdd_categorymenu()
    {
        global $PAGE;

        $context = $this->page->context;

        $hascategorymenu1 = (empty($PAGE->theme->settings->categorymenu1)) ? false : $PAGE->theme->settings->categorymenu1;
        $categorymenu1url = (empty($PAGE->theme->settings->categorymenu1url)) ? false : $PAGE->theme->settings->categorymenu1url;

        $hascategorymenu1sub1 = (empty($PAGE->theme->settings->categorymenu1sub1)) ? false : $PAGE->theme->settings->categorymenu1sub1;
        $categorymenu1urlsub1 = (empty($PAGE->theme->settings->categorymenu1sub1url)) ? false : $PAGE->theme->settings->categorymenu1sub1url;
        $hascategorymenu1sub2 = (empty($PAGE->theme->settings->categorymenu1sub2)) ? false : $PAGE->theme->settings->categorymenu1sub2;
        $categorymenu1urlsub2 = (empty($PAGE->theme->settings->categorymenu1sub2url)) ? false : $PAGE->theme->settings->categorymenu1sub2url;
        $hascategorymenu1sub3 = (empty($PAGE->theme->settings->categorymenu1sub3)) ? false : $PAGE->theme->settings->categorymenu1sub3;
        $categorymenu1urlsub3 = (empty($PAGE->theme->settings->categorymenu1sub3url)) ? false : $PAGE->theme->settings->categorymenu1sub3url;
        $hascategorymenu1sub4 = (empty($PAGE->theme->settings->categorymenu1sub4)) ? false : $PAGE->theme->settings->categorymenu1sub4;
        $categorymenu1urlsub4 = (empty($PAGE->theme->settings->categorymenu1sub4url)) ? false : $PAGE->theme->settings->categorymenu1sub4url;
        $hascategorymenu1sub5 = (empty($PAGE->theme->settings->categorymenu1sub5)) ? false : $PAGE->theme->settings->categorymenu1sub5;
        $categorymenu1urlsub5 = (empty($PAGE->theme->settings->categorymenu1sub5url)) ? false : $PAGE->theme->settings->categorymenu1sub5url;
        $hascategorymenu1sub6 = (empty($PAGE->theme->settings->categorymenu1sub6)) ? false : $PAGE->theme->settings->categorymenu1sub6;
        $categorymenu1urlsub6 = (empty($PAGE->theme->settings->categorymenu1sub6url)) ? false : $PAGE->theme->settings->categorymenu1sub6url;
        $hascategorymenu1sub7 = (empty($PAGE->theme->settings->categorymenu1sub7)) ? false : $PAGE->theme->settings->categorymenu1sub7;
        $categorymenu1urlsub7 = (empty($PAGE->theme->settings->categorymenu1sub7url)) ? false : $PAGE->theme->settings->categorymenu1sub7url;
        $hascategorymenu1sub8 = (empty($PAGE->theme->settings->categorymenu1sub8)) ? false : $PAGE->theme->settings->categorymenu1sub8;
        $categorymenu1urlsub8 = (empty($PAGE->theme->settings->categorymenu1sub8url)) ? false : $PAGE->theme->settings->categorymenu1sub8url;
        $hascategorymenu1sub9 = (empty($PAGE->theme->settings->categorymenu1sub9)) ? false : $PAGE->theme->settings->categorymenu1sub9;
        $categorymenu1urlsub9 = (empty($PAGE->theme->settings->categorymenu1sub9url)) ? false : $PAGE->theme->settings->categorymenu1sub9url;
        $hascategorymenu1sub10 = (empty($PAGE->theme->settings->categorymenu1sub10)) ? false : $PAGE->theme->settings->categorymenu1sub10;
        $categorymenu1urlsub10 = (empty($PAGE->theme->settings->categorymenu1sub10url)) ? false : $PAGE->theme->settings->categorymenu1sub10url;

        $hascategorymenu2 = (empty($PAGE->theme->settings->categorymenu2)) ? false : $PAGE->theme->settings->categorymenu2;
        $categorymenu2url = (empty($PAGE->theme->settings->categorymenu2url)) ? false : $PAGE->theme->settings->categorymenu2url;

        $hascategorymenu2sub1 = (empty($PAGE->theme->settings->categorymenu2sub1)) ? false : $PAGE->theme->settings->categorymenu2sub1;
        $categorymenu2urlsub1 = (empty($PAGE->theme->settings->categorymenu2sub1url)) ? false : $PAGE->theme->settings->categorymenu2sub1url;
        $hascategorymenu2sub2 = (empty($PAGE->theme->settings->categorymenu2sub2)) ? false : $PAGE->theme->settings->categorymenu2sub2;
        $categorymenu2urlsub2 = (empty($PAGE->theme->settings->categorymenu2sub2url)) ? false : $PAGE->theme->settings->categorymenu2sub2url;
        $hascategorymenu2sub3 = (empty($PAGE->theme->settings->categorymenu2sub3)) ? false : $PAGE->theme->settings->categorymenu2sub3;
        $categorymenu2urlsub3 = (empty($PAGE->theme->settings->categorymenu2sub3url)) ? false : $PAGE->theme->settings->categorymenu2sub3url;
        $hascategorymenu2sub4 = (empty($PAGE->theme->settings->categorymenu2sub4)) ? false : $PAGE->theme->settings->categorymenu2sub4;
        $categorymenu2urlsub4 = (empty($PAGE->theme->settings->categorymenu2sub4url)) ? false : $PAGE->theme->settings->categorymenu2sub4url;
        $hascategorymenu2sub5 = (empty($PAGE->theme->settings->categorymenu2sub5)) ? false : $PAGE->theme->settings->categorymenu2sub5;
        $categorymenu2urlsub5 = (empty($PAGE->theme->settings->categorymenu2sub5url)) ? false : $PAGE->theme->settings->categorymenu2sub5url;
        $hascategorymenu2sub6 = (empty($PAGE->theme->settings->categorymenu2sub6)) ? false : $PAGE->theme->settings->categorymenu2sub6;
        $categorymenu2urlsub6 = (empty($PAGE->theme->settings->categorymenu2sub6url)) ? false : $PAGE->theme->settings->categorymenu2sub6url;
        $hascategorymenu2sub7 = (empty($PAGE->theme->settings->categorymenu2sub7)) ? false : $PAGE->theme->settings->categorymenu2sub7;
        $categorymenu2urlsub7 = (empty($PAGE->theme->settings->categorymenu2sub7url)) ? false : $PAGE->theme->settings->categorymenu2sub7url;
        $hascategorymenu2sub8 = (empty($PAGE->theme->settings->categorymenu2sub8)) ? false : $PAGE->theme->settings->categorymenu2sub8;
        $categorymenu2urlsub8 = (empty($PAGE->theme->settings->categorymenu2sub8url)) ? false : $PAGE->theme->settings->categorymenu2sub8url;
        $hascategorymenu2sub9 = (empty($PAGE->theme->settings->categorymenu2sub9)) ? false : $PAGE->theme->settings->categorymenu2sub9;
        $categorymenu2urlsub9 = (empty($PAGE->theme->settings->categorymenu2sub9url)) ? false : $PAGE->theme->settings->categorymenu2sub9url;
        $hascategorymenu2sub10 = (empty($PAGE->theme->settings->categorymenu2sub10)) ? false : $PAGE->theme->settings->categorymenu2sub10;
        $categorymenu2urlsub10 = (empty($PAGE->theme->settings->categorymenu2sub10url)) ? false : $PAGE->theme->settings->categorymenu2sub10url;

        $hascategorymenu3 = (empty($PAGE->theme->settings->categorymenu3)) ? false : $PAGE->theme->settings->categorymenu3;
        $categorymenu3url = (empty($PAGE->theme->settings->categorymenu3url)) ? false : $PAGE->theme->settings->categorymenu3url;

        $hascategorymenu3sub1 = (empty($PAGE->theme->settings->categorymenu3sub1)) ? false : $PAGE->theme->settings->categorymenu3sub1;
        $categorymenu3urlsub1 = (empty($PAGE->theme->settings->categorymenu3sub1url)) ? false : $PAGE->theme->settings->categorymenu3sub1url;
        $hascategorymenu3sub2 = (empty($PAGE->theme->settings->categorymenu3sub2)) ? false : $PAGE->theme->settings->categorymenu3sub2;
        $categorymenu3urlsub2 = (empty($PAGE->theme->settings->categorymenu3sub2url)) ? false : $PAGE->theme->settings->categorymenu3sub2url;
        $hascategorymenu3sub3 = (empty($PAGE->theme->settings->categorymenu3sub3)) ? false : $PAGE->theme->settings->categorymenu3sub3;
        $categorymenu3urlsub3 = (empty($PAGE->theme->settings->categorymenu3sub3url)) ? false : $PAGE->theme->settings->categorymenu3sub3url;
        $hascategorymenu3sub4 = (empty($PAGE->theme->settings->categorymenu3sub4)) ? false : $PAGE->theme->settings->categorymenu3sub4;
        $categorymenu3urlsub4 = (empty($PAGE->theme->settings->categorymenu3sub4url)) ? false : $PAGE->theme->settings->categorymenu3sub4url;
        $hascategorymenu3sub5 = (empty($PAGE->theme->settings->categorymenu3sub5)) ? false : $PAGE->theme->settings->categorymenu3sub5;
        $categorymenu3urlsub5 = (empty($PAGE->theme->settings->categorymenu3sub5url)) ? false : $PAGE->theme->settings->categorymenu3sub5url;
        $hascategorymenu3sub6 = (empty($PAGE->theme->settings->categorymenu3sub6)) ? false : $PAGE->theme->settings->categorymenu3sub6;
        $categorymenu3urlsub6 = (empty($PAGE->theme->settings->categorymenu3sub6url)) ? false : $PAGE->theme->settings->categorymenu3sub6url;
        $hascategorymenu3sub7 = (empty($PAGE->theme->settings->categorymenu3sub7)) ? false : $PAGE->theme->settings->categorymenu3sub7;
        $categorymenu3urlsub7 = (empty($PAGE->theme->settings->categorymenu3sub7url)) ? false : $PAGE->theme->settings->categorymenu3sub7url;
        $hascategorymenu3sub8 = (empty($PAGE->theme->settings->categorymenu3sub8)) ? false : $PAGE->theme->settings->categorymenu3sub8;
        $categorymenu3urlsub8 = (empty($PAGE->theme->settings->categorymenu3sub8url)) ? false : $PAGE->theme->settings->categorymenu3sub8url;
        $hascategorymenu3sub9 = (empty($PAGE->theme->settings->categorymenu3sub9)) ? false : $PAGE->theme->settings->categorymenu3sub9;
        $categorymenu3urlsub9 = (empty($PAGE->theme->settings->categorymenu3sub9url)) ? false : $PAGE->theme->settings->categorymenu3sub9url;
        $hascategorymenu3sub10 = (empty($PAGE->theme->settings->categorymenu3sub10)) ? false : $PAGE->theme->settings->categorymenu3sub10;
        $categorymenu3urlsub10 = (empty($PAGE->theme->settings->categorymenu3sub10url)) ? false : $PAGE->theme->settings->categorymenu3sub10url;

        $hascategorymenu4 = (empty($PAGE->theme->settings->categorymenu4)) ? false : $PAGE->theme->settings->categorymenu4;
        $categorymenu4url = (empty($PAGE->theme->settings->categorymenu4url)) ? false : $PAGE->theme->settings->categorymenu4url;

        $hascategorymenu4sub1 = (empty($PAGE->theme->settings->categorymenu4sub1)) ? false : $PAGE->theme->settings->categorymenu4sub1;
        $categorymenu4urlsub1 = (empty($PAGE->theme->settings->categorymenu4sub1url)) ? false : $PAGE->theme->settings->categorymenu4sub1url;
        $hascategorymenu4sub2 = (empty($PAGE->theme->settings->categorymenu4sub2)) ? false : $PAGE->theme->settings->categorymenu4sub2;
        $categorymenu4urlsub2 = (empty($PAGE->theme->settings->categorymenu4sub2url)) ? false : $PAGE->theme->settings->categorymenu4sub2url;
        $hascategorymenu4sub3 = (empty($PAGE->theme->settings->categorymenu4sub3)) ? false : $PAGE->theme->settings->categorymenu4sub3;
        $categorymenu4urlsub3 = (empty($PAGE->theme->settings->categorymenu4sub3url)) ? false : $PAGE->theme->settings->categorymenu4sub3url;
        $hascategorymenu4sub4 = (empty($PAGE->theme->settings->categorymenu4sub4)) ? false : $PAGE->theme->settings->categorymenu4sub4;
        $categorymenu4urlsub4 = (empty($PAGE->theme->settings->categorymenu4sub4url)) ? false : $PAGE->theme->settings->categorymenu4sub4url;
        $hascategorymenu4sub5 = (empty($PAGE->theme->settings->categorymenu4sub5)) ? false : $PAGE->theme->settings->categorymenu4sub5;
        $categorymenu4urlsub5 = (empty($PAGE->theme->settings->categorymenu4sub5url)) ? false : $PAGE->theme->settings->categorymenu4sub5url;
        $hascategorymenu4sub6 = (empty($PAGE->theme->settings->categorymenu4sub6)) ? false : $PAGE->theme->settings->categorymenu4sub6;
        $categorymenu4urlsub6 = (empty($PAGE->theme->settings->categorymenu4sub6url)) ? false : $PAGE->theme->settings->categorymenu4sub6url;
        $hascategorymenu4sub7 = (empty($PAGE->theme->settings->categorymenu4sub7)) ? false : $PAGE->theme->settings->categorymenu4sub7;
        $categorymenu4urlsub7 = (empty($PAGE->theme->settings->categorymenu4sub7url)) ? false : $PAGE->theme->settings->categorymenu4sub7url;
        $hascategorymenu4sub8 = (empty($PAGE->theme->settings->categorymenu4sub8)) ? false : $PAGE->theme->settings->categorymenu4sub8;
        $categorymenu4urlsub8 = (empty($PAGE->theme->settings->categorymenu4sub8url)) ? false : $PAGE->theme->settings->categorymenu4sub8url;
        $hascategorymenu4sub9 = (empty($PAGE->theme->settings->categorymenu4sub9)) ? false : $PAGE->theme->settings->categorymenu4sub9;
        $categorymenu4urlsub9 = (empty($PAGE->theme->settings->categorymenu4sub9url)) ? false : $PAGE->theme->settings->categorymenu4sub9url;
        $hascategorymenu4sub10 = (empty($PAGE->theme->settings->categorymenu4sub10)) ? false : $PAGE->theme->settings->categorymenu4sub10;
        $categorymenu4urlsub10 = (empty($PAGE->theme->settings->categorymenu4sub10url)) ? false : $PAGE->theme->settings->categorymenu4sub10url;

        $hascategorymenu5 = (empty($PAGE->theme->settings->categorymenu5)) ? false : $PAGE->theme->settings->categorymenu5;
        $categorymenu5url = (empty($PAGE->theme->settings->categorymenu5url)) ? false : $PAGE->theme->settings->categorymenu5url;

        $hascategorymenu5sub1 = (empty($PAGE->theme->settings->categorymenu5sub1)) ? false : $PAGE->theme->settings->categorymenu5sub1;
        $categorymenu5urlsub1 = (empty($PAGE->theme->settings->categorymenu5sub1url)) ? false : $PAGE->theme->settings->categorymenu5sub1url;

        $tcdd_categorymenucontext = [
            'hascategorymenus' => ($hascategorymenu1 || $hascategorymenu2 || $hascategorymenu3 || $hascategorymenu4 || $hascategorymenu5) ? true : false,

            'hassubcategory1' => $hascategorymenu1sub1 ? true : false,
            'hassubcategory2' => $hascategorymenu2sub1 ? true : false,
            'hassubcategory3' => $hascategorymenu3sub1 ? true : false,
            'hassubcategory4' => $hascategorymenu4sub1 ? true : false,
            'hassubcategory5' => $hascategorymenu5sub1 ? true : false,

            'subcategory1items' => array(
                array(
                    'hassubcategoryitem' => $hascategorymenu1sub1,
                    'subtitle' => $hascategorymenu1sub1,
                    'url' => $categorymenu1urlsub1
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu1sub2,
                    'subtitle' => $hascategorymenu1sub2,
                    'url' => $categorymenu1urlsub2
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu1sub3,
                    'subtitle' => $hascategorymenu1sub3,
                    'url' => $categorymenu1urlsub3
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu1sub4,
                    'subtitle' => $hascategorymenu1sub4,
                    'url' => $categorymenu1urlsub4
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu1sub5,
                    'subtitle' => $hascategorymenu1sub5,
                    'url' => $categorymenu1urlsub5
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu1sub6,
                    'subtitle' => $hascategorymenu1sub6,
                    'url' => $categorymenu1urlsub6
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu1sub7,
                    'subtitle' => $hascategorymenu1sub7,
                    'url' => $categorymenu1urlsub7
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu1sub8,
                    'subtitle' => $hascategorymenu1sub8,
                    'url' => $categorymenu1urlsub8
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu1sub9,
                    'subtitle' => $hascategorymenu1sub9,
                    'url' => $categorymenu1urlsub9
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu1sub10,
                    'subtitle' => $hascategorymenu1sub10,
                    'url' => $categorymenu1urlsub10
                ) 
            ),

            'subcategory2items' => array(
                array(
                    'hassubcategoryitem' => $hascategorymenu2sub1,
                    'subtitle' => $hascategorymenu2sub1,
                    'url' => $categorymenu2urlsub1
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu2sub2,
                    'subtitle' => $hascategorymenu2sub2,
                    'url' => $categorymenu2urlsub2
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu2sub3,
                    'subtitle' => $hascategorymenu2sub3,
                    'url' => $categorymenu2urlsub3
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu2sub4,
                    'subtitle' => $hascategorymenu2sub4,
                    'url' => $categorymenu2urlsub4
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu2sub5,
                    'subtitle' => $hascategorymenu2sub5,
                    'url' => $categorymenu2urlsub5
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu2sub6,
                    'subtitle' => $hascategorymenu2sub6,
                    'url' => $categorymenu2urlsub6
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu2sub7,
                    'subtitle' => $hascategorymenu2sub7,
                    'url' => $categorymenu2urlsub7
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu2sub8,
                    'subtitle' => $hascategorymenu2sub8,
                    'url' => $categorymenu2urlsub8
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu2sub9,
                    'subtitle' => $hascategorymenu2sub9,
                    'url' => $categorymenu2urlsub9
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu2sub10,
                    'subtitle' => $hascategorymenu2sub10,
                    'url' => $categorymenu2urlsub10
                ) 
            ),

            'subcategory3items' => array(
                array(
                    'hassubcategoryitem' => $hascategorymenu3sub1,
                    'subtitle' => $hascategorymenu3sub1,
                    'url' => $categorymenu3urlsub1
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu3sub2,
                    'subtitle' => $hascategorymenu3sub2,
                    'url' => $categorymenu3urlsub2
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu3sub3,
                    'subtitle' => $hascategorymenu3sub3,
                    'url' => $categorymenu3urlsub3
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu3sub4,
                    'subtitle' => $hascategorymenu3sub4,
                    'url' => $categorymenu3urlsub4
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu3sub5,
                    'subtitle' => $hascategorymenu3sub5,
                    'url' => $categorymenu3urlsub5
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu3sub6,
                    'subtitle' => $hascategorymenu3sub6,
                    'url' => $categorymenu3urlsub6
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu3sub7,
                    'subtitle' => $hascategorymenu3sub7,
                    'url' => $categorymenu3urlsub7
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu3sub8,
                    'subtitle' => $hascategorymenu3sub8,
                    'url' => $categorymenu3urlsub8
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu3sub9,
                    'subtitle' => $hascategorymenu3sub9,
                    'url' => $categorymenu3urlsub9
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu3sub10,
                    'subtitle' => $hascategorymenu3sub10,
                    'url' => $categorymenu3urlsub10
                ) 
            ),

            'subcategory4items' => array(
                array(
                    'hassubcategoryitem' => $hascategorymenu4sub1,
                    'subtitle' => $hascategorymenu4sub1,
                    'url' => $categorymenu4urlsub1
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu4sub2,
                    'subtitle' => $hascategorymenu4sub2,
                    'url' => $categorymenu4urlsub2
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu4sub3,
                    'subtitle' => $hascategorymenu4sub3,
                    'url' => $categorymenu4urlsub3
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu4sub4,
                    'subtitle' => $hascategorymenu4sub4,
                    'url' => $categorymenu4urlsub4
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu4sub5,
                    'subtitle' => $hascategorymenu4sub5,
                    'url' => $categorymenu4urlsub5
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu4sub6,
                    'subtitle' => $hascategorymenu4sub6,
                    'url' => $categorymenu4urlsub6
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu4sub7,
                    'subtitle' => $hascategorymenu4sub7,
                    'url' => $categorymenu4urlsub7
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu4sub8,
                    'subtitle' => $hascategorymenu4sub8,
                    'url' => $categorymenu4urlsub8
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu4sub9,
                    'subtitle' => $hascategorymenu4sub9,
                    'url' => $categorymenu4urlsub9
                ),
                array(
                    'hassubcategoryitem' => $hascategorymenu4sub10,
                    'subtitle' => $hascategorymenu4sub10,
                    'url' => $categorymenu4urlsub10
                ) 
            ),

            'subcategory5items' => array(
                array(
                    'hassubcategoryitem' => $hascategorymenu5sub1,
                    'subtitle' => $hascategorymenu5sub1,
                    'url' => $categorymenu5urlsub1
                ) 
            ),

            'categorymenus' => array(
                array(
                    'hascategory' => $hascategorymenu1,
                    'title' => $hascategorymenu1,
                    'button' => "<button class='tcdd_tabs' id='menuButton-1'>$hascategorymenu1</button>"
                ),
                array(
                    'hascategory' => $hascategorymenu2,
                    'title' => $hascategorymenu2,
                    'button' => "<button class='tcdd_tabs' id='menuButton-2'>$hascategorymenu2</button>"
                ) ,
                array(
                    'hascategory' => $hascategorymenu3,
                    'title' => $hascategorymenu3,
                    'button' => "<button class='tcdd_tabs' id='menuButton-3'>$hascategorymenu3</button>"
                ) ,
                array(
                    'hascategory' => $hascategorymenu4,
                    'title' => $hascategorymenu4,
                    'button' => "<button class='tcdd_tabs' id='menuButton-4'>$hascategorymenu4</button>"
                ),
                array(
                    'hascategory' => $hascategorymenu5,
                    'title' => $hascategorymenu5,
                    'button' => "<button class='tcdd_tabs' id='menuButton-5'>$hascategorymenu5</button>"
                )
            ) 
        ];

        return $this->render_from_template('theme_tcdd_learn/tcddcategorymenu', $tcdd_categorymenucontext);
    }
}