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
 * Planet eStream Authentication Plugin
 *
 * @since 3.2
 * @package    filter_estreamauth
 * @copyright  Planet Enterprises Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */
defined('MOODLE_INTERNAL') || die();
$plugin            = new StdClass();
$plugin->component = 'filter_estreamauth';
$plugin->version   = 2025022400;
$plugin->requires  = 2012062500;
$plugin->release   = '7.0';
$plugin->maturity  = MATURITY_STABLE;
$plugin->dependencies = array(
    'assignsubmission_estream' => ANY_VERSION
);
