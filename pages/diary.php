<?php
// ref https://codingwithsara.com/how-to-code-calendar-in-php/
date_default_timezone_set('Europe/London');
if(isset($_GET['yearMonth'])) {
    // if links clicked get those dates
    $yearMonth = $_GET['yearMonth'];
}
else {
    // sets date = to today
    $yearMonth = date("Y-m");
}
$a = strtotime($yearMonth);
$title = date('Y-M', $a);

// if you dont use timestamp like this is doesnt work properly with time() for some reason
$timestamp = strtotime($yearMonth . '-01');
if ($timestamp === false) {
    $yearMonth = date('Y-m');
    $timestamp = strtotime($yearMonth . '-01');
}
/*<ul class="diary-appointment">
<li>12:00 - 1:00</li>
<li>Personal Tutorial</li>
</ul>
<ul class="diary-appointment">
<li>12:00 - 1:00</li>
<li>Personal Tutorial</li>
</ul>*/
// todays date
$today = date('Y-m-j', time());

// prev and next month dates
$thisMonth = $yearMonth;
$prev = date("Y-m", strtotime( date( "Y-M-d", strtotime( $thisMonth ) ) . "-1 month" ) );
$next = date("Y-m", strtotime( date( "Y-M-d", strtotime( $thisMonth ) ) . "+1 month" ) );

$dayCount = date('t', $timestamp);
//0 is sunday 1 is monday etc
$str = date('w', $timestamp);


$weeks = array();
$week = '';
$week .= str_repeat('<td></td>', $str);
$test = date('2020-03-11');
// you can use strtotime to format to convert strings from date objects into unicode time stamps
// you then pass this to a new date with a different format like so with the timestamp being a second parameter 
// $old = date('Y-m');
// $timestamp = strtotime($old);
// $new = date('y-m-d', $timestamp);
// create an appointment class with a function that aproduces the <a><ul>etc</ul></a> then loop through 
// type, id start and end times description would all be attributes of appointment along with the link it would follow. i.e. would be createAppointment etc etc
for ( $day = 1; $day <= $dayCount; $day++, $str++) {
    $date = $yearMonth . '-' . $day;
    
    $dayanchor = '<a href="createAppointment.php?date='.$date.'">'.$day.'</a>';
    if ($today == $date) {
        $week .= '<td class="diary-today">'. $dayanchor;
    } 
    // these statements are just here for testing 
    else if ($date == date('2020-06-1')) {
        $appointment['id'] = 5;
        $appointment['type'] = "Meeting";
        $appointment['start_time'] = "2:15";
        $appointment['end_time'] = "3:15";
        $appointment['details'] = "Lorem ipsum dolor sit amet consectetur, adipisicing elit.";
        $week .= loadtemplate('../templates/diaryappointment.html.php', ['appointment' => $appointment]);
        $week .= $dayanchor;
    }
    else if ($date == date('2020-06-6')) {
        $appointment['id'] = 10;
        $appointment['type'] = "Event";
        $appointment['start_time'] = "12:00";
        $appointment['end_time'] = "3:00";
        $appointment['details'] = "test";
        $week .= loadtemplate('../templates/diaryappointment.html.php', ['appointment' => $appointment]);
        $week .= $dayanchor;
    }
    else {
        $week .= '<td>' . $dayanchor;
    }
    // this would be where the appointments loop would be, the appointments array would be created from a group of appointment objects, these would be made from the info pulled from the appointments table.
    $week .= '</td>';
     
    // End of the week OR End of the month
    if ($str % 7 == 6 || $day == $dayCount) {

        if ($day == $dayCount) {
            // Add empty cell
            $week .= str_repeat('<td></td>', 6 - ($str % 7));
        }

        $weeks[] = '<tr>' . $week . '</tr>';

        // Prepare for new week
        $week = '';
    }

}
?>