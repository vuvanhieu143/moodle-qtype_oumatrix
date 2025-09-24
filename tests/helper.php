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

use qtype_oumatrix\column;
use qtype_oumatrix\row;

/**
 * Test helper for the OU matrix question type.
 * The class has code to generate question data structures for sample OU matrix questions.
 *
 * @package     qtype_oumatrix
 * @copyright   2023 The Open University
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qtype_oumatrix_test_helper extends question_test_helper {

    #[\Override]
    public function get_test_questions(): array {
        return [
                'animals_single',
                'food_multiple',
        ];
    }

    /**
     * Get the question data, as it would be loaded by get_question_options.
     *
     * @return stdClass
     */
    public function get_oumatrix_question_data_animals_single(): stdClass {
        global $USER;

        $qdata = new stdClass();

        $qdata->createdby = $USER->id;
        $qdata->modifiedby = $USER->id;
        $qdata->qtype = 'oumatrix';
        $qdata->name = 'oumatrix_animals_single01';
        $qdata->questiontext = 'Animal classification. Please answer the sub questions in all 4 rows.';
        $qdata->questiontextformat = FORMAT_HTML;
        $qdata->generalfeedback = 'We are recognising different type of animals';
        $qdata->generalfeedbackformat = FORMAT_HTML;
        $qdata->defaultmark = 1;
        $qdata->length = 1;
        $qdata->penalty = 0.3333333;
        $qdata->status = \core_question\local\bank\question_version_status::QUESTION_STATUS_READY;
        $qdata->versionid = 0;
        $qdata->version = 1;
        $qdata->questionbankentryid = 0;
        $qdata->options = new stdClass();
        $qdata->options->inputtype = 'single';
        $qdata->options->grademethod = 'partial';
        $qdata->options->shuffleanswers = 0;
        $qdata->options->correctfeedback = test_question_maker::STANDARD_OVERALL_CORRECT_FEEDBACK;
        $qdata->options->correctfeedbackformat = FORMAT_HTML;
        $qdata->options->partiallycorrectfeedback = test_question_maker::STANDARD_OVERALL_PARTIALLYCORRECT_FEEDBACK;
        $qdata->options->partiallycorrectfeedbackformat = FORMAT_HTML;
        $qdata->options->incorrectfeedback = test_question_maker::STANDARD_OVERALL_INCORRECT_FEEDBACK;
        $qdata->options->incorrectfeedbackformat = FORMAT_HTML;
        $qdata->options->shownumcorrect = 1;
        $qdata->options->questionnumbering = 'abc';

        $qdata->columns = [
                11 => (object) [
                        'id' => 11,
                        'number' => 1,
                        'name' => 'Insects',
                ],
                12 => (object) [
                        'id' => 12,
                        'number' => 2,
                        'name' => 'Fish',
                ],
                13 => (object) [
                        'id' => 13,
                        'number' => 3,
                        'name' => 'Birds',
                ],
                14 => (object) [
                        'id' => 14,
                        'number' => 4,
                        'name' => 'Mammals',
                ],
        ];
        $qdata->rows = [
                11 => (object) [
                        'id' => 11,
                        'number' => 1,
                        'name' => 'Bee',
                        'correctanswers' => ['1' => 'a1'],
                        'feedback' => 'Flies and Bees are insects.',
                        'feedbackformat' => FORMAT_HTML,
                ],
                12 => (object) [
                        'id' => 12,
                        'number' => 2,
                        'name' => 'Salmon',
                        'correctanswers' => ['2' => 'a2'],
                        'feedback' => 'Cod, Salmon and Trout are fish.',
                        'feedbackformat' => FORMAT_HTML,
                ],
                13 => (object) [
                        'id' => 13,
                        'number' => 3,
                        'name' => 'Seagull',
                        'correctanswers' => ['3' => 'a3'],
                        'feedback' => 'Gulls and Owls are birds.',
                        'feedbackformat' => FORMAT_HTML,
                ],
                14 => (object) [
                        'id' => 14,
                        'number' => 4,
                        'name' => 'Dog',
                        'correctanswers' => ['4' => 'a4'],
                        'feedback' => 'Cows, Dogs and Horses are mammals.',
                        'feedbackformat' => FORMAT_HTML,
                ],
        ];

        $qdata->hints = [
                1 => (object) [
                        'hint' => 'Hint 1.',
                        'hintformat' => FORMAT_HTML,
                        'shownumcorrect' => 1,
                        'clearwrong' => 0,
                        'options' => 0,
                ],
                2 => (object) [
                        'hint' => 'Hint 2.',
                        'hintformat' => FORMAT_HTML,
                        'shownumcorrect' => 1,
                        'clearwrong' => 1,
                        'options' => 1,
                ],
        ];
        return $qdata;
    }

    /**
     * Get the question data, as it would be loaded by get_question_options.
     *
     * @return stdClass
     */
    public static function get_oumatrix_question_form_data_animals_single(): stdClass {
        $qfdata = new stdClass();

        $qfdata->name = 'oumatrix_animals_single01';
        $qfdata->questiontext = [
                'text' => 'Animal classification. Please answer the sub questions in all 4 rows.',
                'format' => FORMAT_HTML,
        ];
        $qfdata->generalfeedback = ['text' => 'We are recognising different type of animals.', 'format' => FORMAT_HTML];
        $qfdata->defaultmark = 1;
        $qfdata->length = 1;
        $qfdata->penalty = 0.3333333;
        $qfdata->status = \core_question\local\bank\question_version_status::QUESTION_STATUS_READY;
        $qfdata->versionid = 0;
        $qfdata->version = 1;
        $qfdata->questionbankentryid = 0;
        $qfdata->inputtype = 'single';
        $qfdata->grademethod = 'partial';
        $qfdata->shuffleanswers = 0;
        $qfdata->questionnumbering = 'abc';
        $qfdata->correctfeedback = [
                'text' => test_question_maker::STANDARD_OVERALL_CORRECT_FEEDBACK,
                'format' => FORMAT_HTML,
        ];
        $qfdata->partiallycorrectfeedback = [
                'text' => test_question_maker::STANDARD_OVERALL_PARTIALLYCORRECT_FEEDBACK,
                'format' => FORMAT_HTML,
        ];
        $qfdata->shownumcorrect = 1;
        $qfdata->incorrectfeedback = [
                'text' => test_question_maker::STANDARD_OVERALL_INCORRECT_FEEDBACK,
                'format' => FORMAT_HTML,
        ];
        $qfdata->columnname = [
                0 => 'Insects',
                1 => 'Fish',
                2 => 'Birds',
                3 => 'Mammals',
        ];
        $qfdata->rowname = [
                0 => 'Bee',
                1 => 'Salmon',
                2 => 'Seagull',
                3 => 'Dog',
        ];
        $qfdata->rowanswers = [
                0 => "1",
                1 => "2",
                2 => "3",
                3 => "4",
        ];
        $qfdata->feedback = [
                0 => [
                        'text' => 'Flies and Bees are insects.',
                        'format' => FORMAT_HTML,
                ],
                1 => [
                        'text' => 'Cod, Salmon and Trout are fish.',
                        'format' => FORMAT_HTML,
                ],
                2 => [
                        'text' => 'Gulls and Owls are birds.',
                        'format' => FORMAT_HTML,
                ],
                3 => [
                        'text' => 'Cows, Dogs and Horses are mammals.',
                        'format' => FORMAT_HTML,
                ],
        ];
        $qfdata->hint = [
                0 => ['text' => 'Hint 1.', 'format' => FORMAT_HTML],
                1 => ['text' => 'Hint 2.', 'format' => FORMAT_HTML],
        ];
        $qfdata->hintshownumbcorrect = [1, 1];
        return $qfdata;
    }

    /**
     * Get the question data, as it would be loaded by get_question_options.
     *
     * @return stdClass
     */
    public function get_oumatrix_question_data_food_multiple(): stdClass {
        global $USER;

        $qdata = new stdClass();

        $qdata->createdby = $USER->id;
        $qdata->modifiedby = $USER->id;
        $qdata->qtype = 'oumatrix';
        $qdata->name = 'oumatrix_food_multiple01';
        $qdata->questiontext = 'Please classify the list of food item as Proteins, Vegetables, Fats.';
        $qdata->questiontextformat = FORMAT_HTML;
        $qdata->generalfeedback = 'A delicious and healthy meal is a balanced one.';
        $qdata->generalfeedbackformat = FORMAT_HTML;
        $qdata->defaultmark = 1;
        $qdata->length = 1;
        $qdata->penalty = 0.3333333;
        $qdata->status = \core_question\local\bank\question_version_status::QUESTION_STATUS_READY;
        $qdata->versionid = 0;
        $qdata->version = 1;
        $qdata->questionbankentryid = 0;
        $qdata->options = new stdClass();
        $qdata->options->inputtype = 'multiple';
        $qdata->options->grademethod = 'partial';
        $qdata->options->shuffleanswers = 0;
        $qdata->options->correctfeedback = test_question_maker::STANDARD_OVERALL_CORRECT_FEEDBACK;
        $qdata->options->correctfeedbackformat = FORMAT_HTML;
        $qdata->options->partiallycorrectfeedback = test_question_maker::STANDARD_OVERALL_PARTIALLYCORRECT_FEEDBACK;
        $qdata->options->partiallycorrectfeedbackformat = FORMAT_HTML;
        $qdata->options->incorrectfeedback = test_question_maker::STANDARD_OVERALL_INCORRECT_FEEDBACK;
        $qdata->options->incorrectfeedbackformat = FORMAT_HTML;
        $qdata->options->shownumcorrect = 1;
        $qdata->options->questionnumbering = 'none';

        $qdata->columns = [
                21 => (object) [
                        'id' => 21,
                        'number' => 1,
                        'name' => 'Chicken breast',
                ],
                22 => (object) [
                        'id' => 22,
                        'number' => 2,
                        'name' => 'Carrot',
                ],
                23 => (object) [
                        'id' => 23,
                        'number' => 3,
                        'name' => 'Salmon fillet',
                ],
                24 => (object) [
                        'id' => 24,
                        'number' => 4,
                        'name' => 'Asparagus',
                ],
                25 => (object) [
                        'id' => 25,
                        'number' => 5,
                        'name' => 'Olive oil',
                ],
                26 => (object) [
                        'id' => 26,
                        'number' => 6,
                        'name' => 'Steak',
                ],
                27 => (object) [
                        'id' => 27,
                        'number' => 7,
                        'name' => 'Potato',
                ],
        ];
        $qdata->rows = [
                21 => (object) [
                        'id' => 21,
                        'number' => 1,
                        'name' => 'Proteins',
                        'correctanswers' => [1, 3, 6],
                        'feedback' => 'Chicken, fish and red meat containing proteins.',
                        'feedbackformat' => FORMAT_HTML,
                ],
                22 => (object) [
                        'id' => 22,
                        'number' => 2,
                        'name' => 'Vegetables',
                        'correctanswers' => [2, 4, 7],
                        'feedback' => 'Carrot, Asparagus, Potato are vegetables.',
                        'feedbackformat' => FORMAT_HTML,
                ],
                23 => (object) [
                        'id' => 23,
                        'number' => 3,
                        'name' => 'Fats',
                        'correctanswers' => [5],
                        'feedback' => 'Olive oil contains fat.',
                        'feedbackformat' => FORMAT_HTML,
                ],
        ];

        $qdata->hints = [
                1 => (object) [
                        'hint' => 'Hint 1.',
                        'hintformat' => FORMAT_HTML,
                        'shownumcorrect' => 1,
                        'clearwrong' => 0,
                        'options' => 0,
                ],
                2 => (object) [
                        'hint' => 'Hint 2.',
                        'hintformat' => FORMAT_HTML,
                        'shownumcorrect' => 1,
                        'clearwrong' => 1,
                        'options' => 1,
                ],
        ];
        return $qdata;
    }

    /**
     * Get the question data, as it would be loaded by get_question_options.
     *
     * @return stdClass
     */
    public static function get_oumatrix_question_form_data_food_multiple(): stdClass {
        $qfdata = new stdClass();

        $qfdata->name = 'oumatrix_food_multiple01';
        $qfdata->questiontext = ['text' => 'Please classify the list of food item as Proteins, Vegetables, Fats.',
            'format' => FORMAT_HTML,
        ];
        $qfdata->generalfeedback = ['text' => 'A delicious and healthy meal is a balanced one.', 'format' => FORMAT_HTML];
        $qfdata->defaultmark = 1;
        $qfdata->length = 1;
        $qfdata->penalty = 0.3333333;
        $qfdata->status = \core_question\local\bank\question_version_status::QUESTION_STATUS_READY;
        $qfdata->versionid = 0;
        $qfdata->version = 1;
        $qfdata->questionbankentryid = 0;
        $qfdata->inputtype = 'multiple';
        $qfdata->grademethod = 'partial';
        $qfdata->shuffleanswers = 0;
        $qfdata->questionnumbering = 'none';
        $qfdata->correctfeedback = [
                'text' => test_question_maker::STANDARD_OVERALL_CORRECT_FEEDBACK,
                'format' => FORMAT_HTML,
        ];
        $qfdata->partiallycorrectfeedback = [
                'text' => test_question_maker::STANDARD_OVERALL_PARTIALLYCORRECT_FEEDBACK,
                'format' => FORMAT_HTML,
        ];
        $qfdata->shownumcorrect = 1;
        $qfdata->incorrectfeedback = [
                'text' => test_question_maker::STANDARD_OVERALL_INCORRECT_FEEDBACK,
                'format' => FORMAT_HTML,
        ];
        $qfdata->columnname = [
                0 => 'Chicken breast',
                1 => 'Carrot',
                2 => 'Salmon fillet',
                3 => 'Asparagus',
                4 => 'Olive oil',
                5 => 'Steak',
                6 => 'Potato',
        ];
        $qfdata->rowname = [
                0 => 'Proteins',
                1 => 'Vegetables',
                2 => 'Fats',
        ];
        $qfdata->rowanswersa1 = [
                0 => "1",
        ];
        $qfdata->rowanswersa2 = [
                1 => "1",
        ];
        $qfdata->rowanswersa3 = [
                0 => "1",
        ];
        $qfdata->rowanswersa4 = [
                1 => "1",
        ];
        $qfdata->rowanswersa5 = [
                2 => "1",
        ];
        $qfdata->rowanswersa6 = [
                0 => "1",
        ];
        $qfdata->rowanswersa7 = [
                1 => "1",
        ];
        $qfdata->feedback = [
                0 => [
                        'text' => 'Chicken, fish and red meat containing proteins.',
                        'format' => FORMAT_HTML,
                ],
                1 => [
                        'text' => 'Carrot, Asparagus, Potato are vegetables.',
                        'format' => FORMAT_HTML,
                ],
                2 => [
                        'text' => 'Olive oil contains fat.',
                        'format' => FORMAT_HTML,
                ],
        ];
        $qfdata->hint = [
                0 => ['text' => 'Hint 1.', 'format' => FORMAT_HTML],
                1 => ['text' => 'Hint 2.', 'format' => FORMAT_HTML],
        ];
        $qfdata->hintshownumbcorrect = [1, 1];
        return $qfdata;
    }

    /**
     * Returns a qtype_oumatrix_single question.
     *
     * @return qtype_oumatrix_single
     */
    public function make_oumatrix_question_animals_single(): qtype_oumatrix_single {
        question_bank::load_question_definition_classes('oumatrix');
        $question = new qtype_oumatrix_single();
        $question->id = 123;
        $question->name = 'oumatrix_animals_single01';
        $question->questiontext = 'Animal classification. Please answer the sub questions in all 4 rows.';
        $question->generalfeedback = 'We are recognising different type of animals';
        $question->generalfeedbackformat = FORMAT_HTML;
        $question->qtype = question_bank::get_qtype('oumatrix');
        $question->defaultmark = 1;
        $question->length = 1;
        $question->penalty = 0.3333333;
        $question->status = \core_question\local\bank\question_version_status::QUESTION_STATUS_READY;
        $question->versionid = 0;
        $question->version = 1;
        $question->questionbankentryid = 0;
        $question->grademethod = 'partial';
        $question->shuffleanswers = 0;
        $question->correctfeedback = test_question_maker::STANDARD_OVERALL_CORRECT_FEEDBACK;
        $question->correctfeedbackformat = FORMAT_HTML;
        $question->partiallycorrectfeedback = test_question_maker::STANDARD_OVERALL_PARTIALLYCORRECT_FEEDBACK;
        $question->partiallycorrectfeedbackformat = FORMAT_HTML;
        $question->incorrectfeedback = test_question_maker::STANDARD_OVERALL_INCORRECT_FEEDBACK;
        $question->incorrectfeedbackformat = FORMAT_HTML;
        $question->shownumcorrect = 1;
        $question->questionnumbering = 'abc';
        $question->columns = [
            1 => new column($question->id, 1, 'Insects', 11),
            2 => new column($question->id, 2, 'Fish', 12),
            3 => new column($question->id, 3, 'Birds', 13),
            4 => new column($question->id, 4, 'Mammals', 14),
        ];

        $question->rows = [
            1 => new row(11, $question->id, 1, 'Bee', [1 => '1'],
                    'Flies and Bees are insects.', FORMAT_HTML),
            2 => new row(12, $question->id, 2, 'Salmon', [2 => '1'],
                    'Cod, Salmon and Trout are fish.', FORMAT_HTML),
            3 => new row(13, $question->id, 3, 'Seagull', [3 => '1'],
                    'Gulls and Owls are birds.', FORMAT_HTML),
            4 => new row(14, $question->id, 4, 'Dog', [4 => '1'],
                    'Cows, Dogs and Horses are mammals.', FORMAT_HTML),
        ];

        return $question;
    }

    /**
     * Returns a qtype_oumatrix_single question.
     *
     * @return qtype_oumatrix_multiple
     */
    public function make_oumatrix_question_food_multiple(): qtype_oumatrix_multiple {
        global $USER;

        question_bank::load_question_definition_classes('oumatrix');
        $question = new qtype_oumatrix_multiple();
        $question->id = 123;
        $question->createdby = $USER->id;
        $question->modifiedby = $USER->id;
        $question->qtype = 'oumatrix';
        $question->name = 'oumatrix_food_multiple01';
        $question->questiontext = 'Please classify the list of food item as Proteins, Vegetables, Fats.';
        $question->questiontextformat = FORMAT_HTML;
        $question->generalfeedback = 'A delicious and healthy meal is a balanced one.';
        $question->generalfeedbackformat = FORMAT_HTML;
        $question->defaultmark = 1;
        $question->length = 1;
        $question->penalty = 0.3333333;
        $question->status = \core_question\local\bank\question_version_status::QUESTION_STATUS_READY;
        $question->versionid = 0;
        $question->version = 1;
        $question->questionbankentryid = 0;
        $question->grademethod = 'partial';
        $question->shuffleanswers = 0;
        $question->correctfeedback = test_question_maker::STANDARD_OVERALL_CORRECT_FEEDBACK;
        $question->correctfeedbackformat = FORMAT_HTML;
        $question->partiallycorrectfeedback = test_question_maker::STANDARD_OVERALL_PARTIALLYCORRECT_FEEDBACK;
        $question->partiallycorrectfeedbackformat = FORMAT_HTML;
        $question->incorrectfeedback = test_question_maker::STANDARD_OVERALL_INCORRECT_FEEDBACK;
        $question->incorrectfeedbackformat = FORMAT_HTML;
        $question->shownumcorrect = 1;
        $question->questionnumbering = 'none';
        $question->columns = [
            1 => new column($question->id, 1, 'Chicken breast', 21),
            2 => new column($question->id, 2, 'Carrot', 22),
            3 => new column($question->id, 3, 'Salmon fillet', 23),
            4 => new column($question->id, 4, 'Asparagus', 24),
            5 => new column($question->id, 5, 'Olive oil', 25),
            6 => new column($question->id, 6, 'Steak', 26),
            7 => new column($question->id, 7, 'Potato', 27),
        ];

        $question->rows = [
            1 => new row(21, $question->id, 1, 'Proteins', [1 => '1', 3 => '1', 6 => '1'],
                    'Chicken, fish and red meat containing proteins.', FORMAT_HTML),
            2 => new row(22, $question->id, 2, 'Vegetables', [2 => '1', 4 => '1', 7 => '1'],
                    'Carrot, Asparagus, Potato are vegetables.', FORMAT_HTML),
            3 => new row(23, $question->id, 3, 'Fats', [5 => '1'],
                    'Olive oil contains fat.', FORMAT_HTML),
        ];

        $question->hints = [
                1 => new question_hint_with_parts(1, 'Hint 1.', FORMAT_HTML, 1, 0),
                2 => new question_hint_with_parts(2, 'Hint 2.', FORMAT_HTML, 1, 1),
        ];

        return  $question;
    }
}
