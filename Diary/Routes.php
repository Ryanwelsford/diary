<?php
namespace Diary;
class Routes implements \RWCSY2028\Routes {
    public function getRoutes() {
        require '../dbconnect.php';
        //diary tables
        $appointmentsTable = new \RWCSY2028\DatabaseTable($pdo, 'appointment', 'id');
        $diariesTable = new \RWCSY2028\DatabaseTable($pdo, 'diary', 'id');
        //timetable tables
        $roomsTable = new \RWCSY2028\DatabaseTable($pdo, 'rooms', 'id');
        $timetableTable = new \RWCSY2028\DatabaseTable($pdo, 'timetable', 'id');
        $timetable_slotsTable = new \RWCSY2028\DatabaseTable($pdo, 'timetable_slots', 'id');
        $tempCourseTable = new \RWCSY2028\DatabaseTable($pdo, 'temp_course', 'id');

        $timetableController = new \Diary\Controllers\Timetable($timetableTable, $timetable_slotsTable, $tempCourseTable, $roomsTable);
        $diaryController = new \Diary\Controllers\Diary($diariesTable, $appointmentsTable, $_GET, $_POST, $_SESSION);
        $routes = [
            'diary/view' => [
                'GET' => [
                    'controller' =>$diaryController,
                    'function' => 'view'
                ]
            ],
            'diary/create' => [
                'GET' => [
                    'controller' =>$diaryController,
                    'function' => 'create'
                ],
                'POST' => [
                    'controller' => $diaryController,
                    'function' => 'create'
                ]
            ],
            'diary/delete' => [
                'POST' => [
                    'controller' => $diaryController,
                    'function' => 'delete'
                ]
            ],
            'diary/results' => [
                'GET' => [
                    'controller' => $diaryController,
                    'function' => "results"
                ]
            ],
            'timetable/create' => [
                'GET' => [
                    'controller' => $timetableController,
                    'function' => 'create'
                ],
                'POST' => [
                    'controller' => $timetableController,
                    'function' => 'create'
                ]
            ],
            'timetable/view' => [
                'GET' => [
                    'controller' => $timetableController,
                    'function' => 'view'
                ],
                'POST' => [
                    'controller' => $timetableController,
                    'function' => 'view'
                ]
            ],
            'timetable/select' => [
                'GET' => [
                    'controller' => $timetableController,
                    'function' => 'selectCourse'
                ],
                'POST' => [
                    'controller' => $timetableController,
                    'function' => 'selectCourse'
                ]
            ],
            'timetable/selectionSearch' => [
                'GET' => [
                    'controller' => $timetableController,
                    'function' => 'selectionSearch'
                ]
            ],
            '' => [
                'GET' => [
                    'controller' =>$diaryController,
                    'function' => 'view'
                ]
            ]

        ];
        return $routes;
    }
    

    public function getReroute() {
            $route = '';
        
        return $route;
    }

    public function getLayoutVariables() {
        return [
    
        ];
    }

    public function checkLogin($userPrivileges = '') {
    
    }
}