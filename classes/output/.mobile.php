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
   * CourseEval Online Course Evaluation plugin
   *
   * @package    block_course_evals
   * @author     Michelle Melton (modified code from Scott Krajewski, Augsburg College)
   * @copyright  2015 Appalachian State University
   * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
   */
  
namespace blocks\course_evals\output;

defined('MOODLE_INTERNAL') || die();

//use context_user;

/**
 * Mobile output class for course eval block.
 *
 * @package    block_course_evals
 * @copyright  2015 Appalachian State University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class .mobile {
    
    /**
     * Returns the course evals block view for the mobile app.
     * @param  array $args Arguments from tool_mobile_get_content WS
     *
     * @return array       HTML, javascript and otherdata
     */
    public static function mobile_block_view($args) {
        global $OUTPUT, $USER, $DB;
        
        $args = (object) $args;
        $userid = $args->userid;
        
        // Capabilities check.
        require_login();
        
        //$context = context_user::instance($userid);
        
        if ($args->userid != $USER->id) {
            //require_capability('mod/certificate:manage', $context);
        }
        
        $data = array(
            'userid' => $userid
        );
        
        return [
            'templates' => [
                [
                    'id' => 'main',
                    'html' => $OUTPUT->render_from_template('blocks_course_evals/mobile_view_page', $data),
                ],
            ],
            'javascript' => '',
            'otherdata' => '',
            'files' => '',
        ];
    }
}