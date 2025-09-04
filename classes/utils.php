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

namespace qtype_oumatrix;

/**
 * Helper functions for qtype_oumatrix.
 *
 * @package   qtype_oumatrix
 * @copyright 2025 The Open University
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class utils {
    /** @var int Shuffle rows only. */
    const ROW_ONLY = 1;
    /** @var int Shuffle columns only. */
    const COLUMN_ONLY = 2;
    /** @var int Shuffle both rows and columns. */
    const ROW_AND_COLUMN = 3;

    /**
     * Return the options for the shuffle select element.
     *
     * @return array
     */
    public static function shuffle_select_option(): array {
        return  [
            0 => get_string('no'),
            self::ROW_ONLY => get_string('shuffleanswers_optionrowonly', 'qtype_oumatrix'),
            self::COLUMN_ONLY => get_string('shuffleanswers_optioncolumnonly', 'qtype_oumatrix'),
            self::ROW_AND_COLUMN => get_string('shuffleanswers_optionrowcolumn', 'qtype_oumatrix'),
        ];
    }
}
