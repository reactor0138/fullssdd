<?php

require('../../config.php');
require_once('../../lib/moodlelib.php');

require_login();

//get our config
$def_config = get_config('block_fullssdd');

$usercontext = context_user::instance($USER->id);
$PAGE->set_course($COURSE);
$PAGE->set_url('/blocks/fullssdd/view.php');
$PAGE->set_heading($SITE->fullssdd);
$PAGE->set_pagelayout($def_config->pagelayout);
$PAGE->set_title(get_string('pluginname', 'block_fullssdd'));
$PAGE->navbar->add(get_string('pluginname', 'block_fullssdd'));


// start output to browser
echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('pluginname', 'block_fullssdd'),2);

echo '<div><h3 style="color:'.$def_config->namecolour.'">' . get_string('welcome', 'block_fullssdd') . $def_config->firstname. '</h3></div>';


echo '<div><h3>' . get_string('welcome', 'block_fullssdd') . fullname($USER) . '</h3></div>';


echo '<br>' . $OUTPUT->user_picture($USER);

//send footer out to browser
echo $OUTPUT->footer();
return;


	