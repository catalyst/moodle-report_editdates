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
 * Settings that allow different methods for image placement.
 *
 * @package   report_editdates
 * @copyright 2011 The Open University
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$ADMIN->add('reports',
            new admin_externalpage('reporteditdates',
                                   get_string('pluginname', 'report_editdates'),
                                   "$CFG->wwwroot/report/editdates/index.php",
                                   'report/editdates:view'));

$settings->add(new admin_setting_configcheckbox('report_editdates/timelineview',
                                                get_string('timelineview', 'report_editdates'),
                                                get_string('timelineviewdesc', 'report_editdates'), 0));

$options = array(
    1 => 1,
    2 => 2,
    3 => 3,
    4 => 4,
    5 => 5
);
$settings->add(new admin_setting_configselect('report_editdates/timelinemax',
                                                get_string('timelinemax', 'report_editdates'),
                                                get_string('timelinemaxdesc', 'report_editdates'),
                                                3,
                                                $options));
