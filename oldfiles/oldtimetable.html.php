<?php
    $optionModules = ["","C1001", "C1002", "C1003", "C1004", "C1005", "C1006"];
    $optionRooms = ["","C1", "C2", "C3", "C4", "C5", "C6"];
    $selectModules = "";
    $selectRooms = "";
    
    $days = [
        "Monday" => "M",
        "Tuesday" => "T",
        "Wednesday" => "W",
        "Thursday" => "T",
        "Friday" => "F"
    ];
    $timeslots = ['9-10', '10-11', '11-12', '12-1', '1-2', '2-3', '3-4', '4-5'];
    $selectModules = "";
    foreach($optionModules as $option) {
        $selectModules .= "<option value='".$option."'"." >". $option ."</option>";
    }
    foreach($optionRooms as $option) {
        $selectRooms .= "<option value='".$option."'"." >". $option ."</option>";
    }

?>
<article class = "table-container">
    <h3>Create Timetable</h3>
    <form method = "POST">
        <table class= 'timetable-table large-table'>
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
            <tr>
                <td><?=$days['Monday'];?></td>
                <?php 
                foreach ($timeslots as $keyslot => $value) {

                ?>
                <td>
                    <select id="type" name='timetable[<?=$days['Monday'];?>][<?=$value;?>][module]'>
                    <?php
                    if(isset($timetable[$days['Monday']][$timeslots[$keyslot]]['module'])) {
                        $uniModules = "";
                        foreach($optionModules as $option) {
                            if(isset($timetable[$days['Monday']][$timeslots[$keyslot]]['module']) && $option == $timetable[$days['Monday']][$timeslots[$keyslot]]['module']) {
                                $selected =' selected = "selected"';
                            }
                            else {
                                $selected = '';
                            }
                            $uniModules .= "<option value='".$option."'"." ".$selected." >". $option ."</option>";
                        }
                    }
                    else {
                        $uniModules = $selectModules;
                    }
                    ?>
                    <?=$uniModules;?>
                    </select>
            
                    <select id="type" name='timetable[<?=$days['Monday'];?>][<?=$timeslots[$keyslot];?>][room]'>
                    <?php
                    if(isset($timetable[$days['Monday']][$timeslots[$keyslot]]['room'])) {
                        $unirooms = "";
                        foreach($optionRooms as $option) {
                            if(isset($timetable[$days['Monday']][$timeslots[$keyslot]]['room']) && $option == $timetable[$days['Monday']][$timeslots[$keyslot]]['room']) {
                                $selected =' selected = "selected"';
                            }
                            else {
                                $selected = '';
                            }
                            $unirooms .= "<option value='".$option."'"." ".$selected." >". $option ."</option>";
                        }
                    }
                    else {
                        $unirooms = $selectRooms;
                    }
                    ?>
                    <?=$unirooms;?>
                    </select>
                </td>
                <?php
                }
                ?>
                <td>
                    <select id="type" name='timetable[<?=$days['Monday'];?>][10-11][module]'>
                        <?=$selectModules ?? ''?>
                    </select>

                    <select id="type" name='timetable[<?=$days['Monday'];?>][10-11][room]'>
                        <?=$selectRooms ?? ''?>
                    </select>
                </td>
                <td>
                    <select id="type" name='timetable[<?=$days['Monday'];?>][11-12][module]'>
                        <?=$selectModules ?? ''?>
                    </select>

                    <select id="type" name='timetable[<?=$days['Monday'];?>][11-12][room]'>
                        <?=$selectRooms ?? ''?>
                    </select>
                </td>
                <td>
                    <select id="type" name='timetable[<?=$days['Monday'];?>][12-1][module]'>
                        <?=$selectModules ?? ''?>
                    </select>

                    <select id="type" name='timetable[<?=$days['Monday'];?>][12-1][room]'>
                        <?=$selectRooms ?? ''?>
                    </select>
                </td>
                <td>
                    <select id="type" name='timetable[<?=$days['Monday'];?>][1-2][module]'>
                        <?=$selectModules ?? ''?>
                    </select>

                    <select id="type" name='timetable[<?=$days['Monday'];?>][1-2][room]'>
                        <?=$selectRooms ?? ''?>
                    </select>
                </td>
                <td>
                    <select id="type" name='timetable[<?=$days['Monday'];?>][2-3][module]'>
                        <?=$selectModules ?? ''?>
                    </select>

                    <select id="type" name='timetable[<?=$days['Monday'];?>][2-3][room]'>
                        <?=$selectRooms ?? ''?>
                    </select>
                </td>
                <td>
                    <select id="type" name='timetable[<?=$days['Monday'];?>][3-4][module]'>
                        <?=$selectModules ?? ''?>
                    </select>

                    <select id="type" name='timetable[<?=$days['Monday'];?>][3-4][room]'>
                        <?=$selectRooms ?? ''?>
                    </select>
                </td>
                <td>
                    <select id="type" name='timetable[<?=$days['Monday'];?>][4-5][module]'>
                        <?=$selectModules ?? ''?>
                    </select>

                    <select id="type" name='timetable[<?=$days['Monday'];?>][4-5][room]'>
                        <?=$selectRooms ?? ''?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>T</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>W</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>T</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>F</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        
        <input type="submit" name="Submit">
    </form>
</article>