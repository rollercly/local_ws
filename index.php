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
 * Pages main view page.
 *
 * @package         local_ws_prueba
 * @author          Kevin Dibble <kevin.dibble@learningworks.co.nz>.
 * @copyright       2017 LearningWorks Ltd.
 * @license         http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later.
 */

require_once(dirname(dirname(dirname(__FILE__))).'/config.php');

// Get the id of the page to be displayed.
$pageid = optional_param('id', 0, PARAM_INT);

// Setup the page.
$PAGE->set_context(\context_system::instance());
$PAGE->set_url("{$CFG->wwwroot}/local/ws_prueba/index.php", ['id' => $pageid]);

require_once("{$CFG->dirroot}/local/ws_prueba/lib.php");

// More page setup.
$PAGE->set_title("titulo");
$PAGE->set_heading("cabecera");


// Output the header.
echo $OUTPUT->header();

echo "pageid:".$pageid;


// Now output the footer.
echo $OUTPUT->footer();