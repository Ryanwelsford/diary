<?php
namespace Diary;
class Routes implements \CSY2028\Routes {
    public function getRoutes() {
        require '../dbconnect.php';

        $appointmentsTable = new \CSY2028\DatabaseTable($pdo, 'appointment', 'id');
        $diariesTable = new \CSY2028\DatabaseTable($pdo, 'diary', 'id');
        
        $timetableController = new \Diary\Controllers\Timetable();
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