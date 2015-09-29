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
   * @author     Michelle Melton, Fred Woolard (modified code from Scott Krajewski, Augsburg College)
   * @copyright  2015 Appalachian State University
   * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
   */

  class block_course_evals_edit_form extends block_edit_form 
  {
 
      protected function specific_definition($mform) 
      {
        
          $mform->addElement('header', 'config_header', get_string('course_evals_settings', 'block_course_evals'));
          $mform->addElement('html', '<p>Enter the URL to your rpi.asp page; this is found on your Remote Portal Interface Setup page in CourseEval3. Do not include uid in the path.</p>');
          
          $mform->addElement('text', 'config_url', get_string('course_evals_url', 'block_course_evals'));
          $mform->setType('config_url', PARAM_URL);
          $mform->addRule('config_url', null, 'required', null, 'server');
      }
  }