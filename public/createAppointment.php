<?php 
    if(isset($_POST['submit']) && $_POST['appointment']['start_time']< $_POST['appointment']['end_time']) {
        $error = 'Successfully submitted';
        header('location: index.php');
    }
    // if appointment array is created but the start time is after the end time send error and fill form
    else if (isset($_POST['appointment']) && $_POST['appointment']['start_time'] > $_POST['appointment']['end_time']) {
        $error = '<p class="error">Start Time must be before End Time</p>';
        $appointment = $_POST['appointment'];
    }
    else {
        $error = '';
        // if date is set due to link sent from diary pages
        if(isset($_GET['date']) ){
            $date = $_GET['date'];
            $string = strtotime($date);
            $appointment['date'] = date('Y-m-d', $string);
        }
        else if (isset($_POST['appointment'])) {
            $appointment = $_POST['appointment'];
        }
        else if (isset($_GET['id'])) {
            // pull information from appointments table and set appointment array = values
            $appointment['start_time'] = '03:00';
        }
        else {
            $appointment = false;
        }
}

    //$appointment['start_time'] = '03:00';
    //format for time is 'NN:NN' FORMAT for dates is 'dd/mm/yyyy'
    require '../templates/appointmentform.html.php';