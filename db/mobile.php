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
 * CoursEval Online Course Evaluation plugin
 *
 * @package    block_course_evals
 * @author     Michelle Melton (modified code from Scott Krajewski, Augsburg College)
 * @copyright  2015 Appalachian State University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$addons = [
    'block_course_evals' => [ // Plugin identifier
        'handlers' => [ // Different places where the plugin will display content.
            'courseevals' => [ // Handler unique name (alphanumeric).
                'displaydata' => [
                    'title' => 'Course evaluations'
                ],

                'delegate' => 'CoreBlockDelegate', // Delegate (where to display the link to the plugin).
                'method' => 'mobile_block_view' // Main function in \mod_certificate\output\mobile.
            ],
        ],
    ],
];