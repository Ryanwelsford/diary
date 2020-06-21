<article class = "table-container">

        <h3>View Timetable</h3>
        <table class= 'timetable-table large-table'>
        <tr><div class = "heading-course">Course: <?=$course['title'];?></div></tr>
        <tr>
            <th>Day</th>
            <th>9-10</th>
            <th>10-11</th>
            <th>11-12</th>
            <th>12-1</th>
            <th>1-2</th>
            <th>2-3</th>
            <th>3-4</th>
            <th>4-5</th>
        </tr>

        <?php
        $moduleArray = [];
        foreach($days as $day) {
            ?>
            <tr>
                <td><?=$day;?></td>
                <?php
                    foreach($timeslots as $timeslot) {
                        ?>
                        
                        <?php
                            if (isset($timetable[$day][$timeslot])) {
                                if(!in_array($timetable[$day][$timeslot]['module'], $moduleArray)) {
                                    $moduleArray[] = $timetable[$day][$timeslot]['module'];
                                    $moduleType = "Lecture";
                                }
                                else {
                                    $moduleType = "Practical";
                                }
                                ?>
                                <td class= "timetable-module">
                                    <div>
                                        <div><?=$timetable[$day][$timeslot]['module'] ?? 'Module Not Set'?></div>
                                        <div><?=$moduleType;?></div>
                                        <div>Group 1</div>
                                        <div><?=$timetable[$day][$timeslot]['room'] ?? 'Room Not Set'?></div>
                                    </div>
                                

                                <?php
                            }
                            else {
                                echo "<td>";
                            }
                        ?>
                        
                        </td>
                        <?php
                    }
                ?>  
            </tr>
        <?php
        }
        ?>
        </table>
</article>