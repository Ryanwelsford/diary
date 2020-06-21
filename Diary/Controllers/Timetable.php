<?php
namespace Diary\Controllers;
class Timetable {
//needs access to course, timetables, modules, staff, student, timetable-modules, assigned-timetable and alot more
private $days;
private $timeslots;

    public function __construct() {
        $this->days =
        [
            "Monday" => "Mon",
            "Tuesday" => "Tue",
            "Wednesday" => "Wed",
            "Thursday" => "Thu",
            "Friday" => "Fri"
        ];
        $this->timeslots = ['9-10', '10-11', '11-12', '12-1', '1-2', '2-3', '3-4', '4-5'];
    }

    public function view($timetable = []) {
        $title = 'View Timetable';
        /*
        echo date("D-g");
        echo "-".date("g");*/

        $course['title'] = "Software Engineering";
        /*$timetable = [
            'Mon' => [
                '9-10' => [
                    'module' =>"C1001",
                    'room' => "C2"
                ]
            ]
        ];*/
        if(isset($_POST['timetable'])) {
            $timetable = $_POST['timetable'];
            $this->simplifyArray($timetable);
            var_dump($timetable);
        }
        else {
            $timetable = [
                'Mon' => [
                    '9-10' => [
                        'module' =>"C1001",
                        'room' => "C2"
                    ]
                ],
                'Tue' => [
                    '12-1' => [
                        'module' => "C1004",
                        'room' => "C6"
                    ]
                ],
                'Thu' => [
                    '3-4' => [
                        'module' => "C1002",
                        'room' => "C4"
                    ]
                ]
            ];
        }
        
        return [
            'template' => 'viewtimetable.html.php',
            'title' => $title,
            'variables' => [
                'course' => $course,
                'days' =>$this->days,
                'timeslots' => $this->timeslots,
                'timetable' => $timetable
            ]
        ];
    }

    public function create($errors = []) {
        //$errors["Mon 9-11"] = "Testing";
        //$errors["Wed 1-2"] = "Further testing";
        $title = "View Timetable";
        $optionModules = ["","C1001", "C1002", "C1003", "C1004", "C1005", "C1006"];
        $optionRooms = ["","C1", "C2", "C3", "C4", "C5", "C6"];
        $days = [
            "Monday" => "Mon",
            "Tuesday" => "Tue",
            "Wednesday" => "Wed",
            "Thursday" => "Thu",
            "Friday" => "Fri"
        ];
        $timeslots = ['9-10', '10-11', '11-12', '12-1', '1-2', '2-3', '3-4', '4-5'];
        $course['title'] = "Software Engineering";
        if(isset($_POST['timetable'])) {
            $timetable = $_POST['timetable'];
            $this->simplifyArray($timetable);
            var_dump($timetable);
            $errors["Mon 9-11"] = "Testing";
            $errors["Wed 1-2"] = "Further testing";

        }
        else {
            $timetable = false;
        }
        return [
            'template' => 'timetable.html.php',
            'title' => $title,
            'variables' => [
                'timetable' => $timetable,
                'optionModules' => $optionModules,
                'optionRooms' => $optionRooms,
                'days' => $this->days,
                'timeslots' => $this->timeslots,
                'errors' => $errors,
                'course' => $course
            ]
        ];
    }

    //you can pass by reference in php who knew
    private function simplifyArray(&$array) {
        //var_dump($array);
        foreach($array as $ak => $days) {
            foreach($days as $key =>$times) {
                if(isset($times['module']) && isset($times['room'])){
                    if ($times['module'] == '' && $times['room'] == '') {
                        unset($array[$ak][$key]);
                    }
                    else if ($times['room'] == '') {
                        unset($array[$ak][$key]['room']);
                    }
                    else if ($times['module'] == '') {
                        unset($array[$ak][$key]['module']);
                    }
                }
            }
        }
        return $array;


    }
}