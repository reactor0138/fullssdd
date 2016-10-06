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
 * fullssdd block caps.
 *
 * @package    block_fullssdd
 * @copyright  Daniel Neis <danielneis@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$settings->add(new admin_setting_heading('sampleheader',
                                         get_string('headerconfig', 'block_fullssdd'),
                                         get_string('descconfig', 'block_fullssdd')));

$settings->add(new admin_setting_configcheckbox('fullssdd/foo',
                                                get_string('labelfoo', 'block_fullssdd'),
                                                get_string('descfoo', 'block_fullssdd'),
                                                '0'));

$settings->add(new admin_setting_configtext('block_fullssdd/url', get_string('url', 'block_fullssdd'),
            get_string('url_details', 'block_fullssdd'), 'https://quizlet.com/132695231/scatter/embed', PARAM_RAW)); 
                                                
$settings->add(new admin_setting_configtext('block_fullssdd/width', get_string('width', 'block_fullssdd'),
            get_string('width_details', 'block_fullssdd'), 600, PARAM_INT)); 
            
$settings->add(new admin_setting_configtext('block_fullssdd/height', get_string('height', 'block_fullssdd'),
            get_string('height_details', 'block_fullssdd'), 400, PARAM_INT));   
            
$options = array();
$options['course']=get_string('course');
$options['popup']=get_string('popup');
            
$settings->add(new admin_setting_configselect('block_fullssdd/pagelayout', get_string('pagelayout', 'block_fullssdd'),
            get_string('pagelayout_details', 'block_fullssdd'),'course', $options));                                                       
                                                
$settings->add(new admin_setting_configtext('block_fullssdd/firstname', get_string('firstname', 'block_fullssdd'),
            get_string('firstname_details', 'block_fullssdd'), 'Bob', PARAM_RAW)); 
            
$settings->add(new admin_setting_configcolourpicker('block_fullssdd/namecolour', get_string('firstname', 'block_fullssdd'),
            get_string('namecolour_details', 'block_fullssdd'), '#ff0000')); 
        