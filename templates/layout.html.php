<!DOCTYPE html>
<html>
	<head>
    
    <script type="text/javascript" src="/tabScript.js"></script>

    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="/style.css">
        <link rel="stylesheet" href="/diary.css"/>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		<title><?=$title;?></title>
    </head>
    <body>
        <div class = "nav-container">
    
        <nav class="navbar navbar-expand-lg justify-content-center">
        <img class="logo" src="/images/new logo.jpg" alt="logo">
            <!-- <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button> -->
            <!-- <div class="collapse navbar-collapse " id="navbarMenu"> -->        
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link hvr-sweep-to-right" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Student</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item hvr-grow-shadow" href="/">Create</a>
                        <a class="dropdown-item hvr-grow-shadow" href="/amendstudentlist">Amend</a>
                        <a class="dropdown-item hvr-grow-shadow" href="/archive">Archive</a>
                        <a class="dropdown-item hvr-grow-shadow" href="/displaystudentlist">Display</a>
                        <a class="dropdown-item hvr-grow-shadow" href="#">Assign</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link hvr-sweep-to-left" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Staff</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item hvr-grow-shadow" href="/createstaff">Create</a>
                        <a class="dropdown-item hvr-grow-shadow" href="/liststaff">Amend</a>
                        <a class="dropdown-item hvr-grow-shadow" href="/archivestaff">Archive</a>
                        <a class="dropdown-item hvr-grow-shadow" href="/staffdisplaylist">Display</a>
                        <a class="dropdown-item hvr-grow-shadow" href="#">Assign</a>

                    </div>
                </li>
                <li class="nav-item dropdown ">
                    <a href="#" class="nav-link hvr-sweep-to-left" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Course</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item hvr-grow-shadow" href="#">Create Structure</a>
                        <a class="dropdown-item hvr-grow-shadow" href="#">Amend</a>
                        <a class="dropdown-item hvr-grow-shadow" href="#">Display</a>
                        <a class="dropdown-item hvr-grow-shadow" href="#">Delete</a>
                        <a class="dropdown-item hvr-grow-shadow" href="#">Archive</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link hvr-sweep-to-left" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Module</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item hvr-grow-shadow" href="#">Create</a>
                        <a class="dropdown-item hvr-grow-shadow" href="#">Amend</a>
                        <a class="dropdown-item hvr-grow-shadow" href="#">Delete</a>
                        <a class="dropdown-item hvr-grow-shadow" href="#">Archive</a>
                        <a class="dropdown-item hvr-grow-shadow" href="#">Display</a>
                        <a class="dropdown-item hvr-grow-shadow" href="#">Assign</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link hvr-sweep-to-left" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Assignement</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item hvr-grow-shadow" href="#">Create</a>
                        <a class="dropdown-item hvr-grow-shadow" href="#">Amend</a>
                        <a class="dropdown-item hvr-grow-shadow" href="#">Delete</a>
                        <a class="dropdown-item hvr-grow-shadow" href="#">Archive</a>
                        <a class="dropdown-item hvr-grow-shadow" href="#">Display</a>
                        <a class="dropdown-item hvr-grow-shadow" href="#">Assign</a>
                        <a class="dropdown-item hvr-grow-shadow" href="#">Mark/Grade</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link hvr-sweep-to-left" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Attendance</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item hvr-grow-shadow" href="#">Create</a>
                        <a class="dropdown-item hvr-grow-shadow" href="#">Amend</a>
                        <a class="dropdown-item hvr-grow-shadow" href="#">Archive</a>
                        <a class="dropdown-item hvr-grow-shadow" href="#">Monitor</a>
                        <a class="dropdown-item hvr-grow-shadow" href="#">Display</a>
                        <a class="dropdown-item hvr-grow-shadow" href="#">Action Poor Attendance</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link hvr-sweep-to-left" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Personal Tutor</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item hvr-grow-shadow" href="/personaltutorlist">Create</a>
                        <a class="dropdown-item hvr-grow-shadow" href="/amendpersonaltutorlist">Amend</a>
                        <a class="dropdown-item hvr-grow-shadow" href="/assignpersonaltutorlist">Assign</a>
                        <a class="dropdown-item hvr-grow-shadow" href="/displaytutorlist">Display</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link hvr-sweep-to-left" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Timetable</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item hvr-grow-shadow" href="/timetable/select">Create</a>
                        <a class="dropdown-item hvr-grow-shadow" href="#">Amend</a>
                        <a class="dropdown-item hvr-grow-shadow" href="#">Delete</a>
                        <a class="dropdown-item hvr-grow-shadow" href="#">Archive</a>
                        <a class="dropdown-item hvr-grow-shadow" href="/timetable/view">Display</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link hvr-sweep-to-left" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Diary</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item hvr-grow-shadow" href="/diary/create">Create</a>
                        <a class="dropdown-item hvr-grow-shadow" href="/diary/results">Amend</a>
                        <a class="dropdown-item hvr-grow-shadow" href="/diary/results">Delete</a>
                        <a class="dropdown-item hvr-grow-shadow" href="/diary/view">Display</a>
                        <a class="dropdown-item hvr-grow-shadow" href="/diary/results">Search</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link hvr-sweep-to-left" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Report</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item hvr-grow-shadow" href="#">Create</a>
                        <a class="dropdown-item hvr-grow-shadow" href="#">Display</a>
                        <a class="dropdown-item hvr-grow-shadow" href="#">Print</a>
                    </div>
                </li>
            </ul>
        <!-- </div> -->
        </nav>
        </div>
    <?=$output;?>
    </body>