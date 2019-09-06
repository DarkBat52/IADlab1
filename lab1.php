
<!DOCTYPE html>
<?php session_start(); ?> 
<html lang="en">
<head>
    <link rel="stylesheet" href="lab1css.css">
    <meta charset="UTF-8">
    <title>Laboratory work 1</title>
    <script src="validator.js"></script>
</head>

    <body>

        <table align="center" id = "mainTable">
            <tr>
                <th cosplan = 1 class="section" >
                    Черезов Игорь Юрьевич, P3200, вариант 18022
                </th>
            </tr>
            <tr>
                <th width = "50%" id="header2"> Coordinate Plane </th>
            </tr>
            <tr>
                <td align = "center">
                    <canvas id = mCanvas width = "400" height = "400">
                        Your browser doesn't support this element
                    </canvas>
                    <script src="canvas.js"></script>
                </td>
            </tr>
            <tr>
                <td align = "center" class="section">
                    Enter the following data
                </td>
            </tr>
                <tr>
                    <td>
                        <form id="mainForm" method = "GET" action="lab1php.php" onsubmit="return validate()">
                            <table>
                            <tr>
                                <td align="center">
                                    Select X:
                                </td>
                                <td>
                                    <select name="x">
                                        <option value="-2">-2</option>
                                        <option value="-1.5">-1.5</option>
                                        <option value="-1">-1</option>
                                        <option value="-0.5">-0.5</option>
                                        <option value="0">0</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>

                                    </select>
                                </td>

                            </tr>
                            <tr colspan="1">
                                <td align="center">
                                    Enter Y:
                                </td>

                                <td>
                                    <input  type="text" name="y" placeholder="-5 ... 5" required maxlength="6">
                                </td>

                            </tr>
                                <tr align="center">
                                    <td></td>
                                    <td id="yValid" class="errormsg"></td>

                                </tr>
                            <tr>
                                <td align="center" id="chooser">
                                    Choose R:
                                </td>
                                <td id="chooser">
                                
                                    <label class="container">
                                        <span class="checkmark"> </span>
                                        <input type="checkbox" name="R1" value="1" id="R1">
                                        1.0
                                        <br>
                                    </label>
                                    <input type="checkbox" name="R1_5" value="1.5" id="R1_5"> 1.5<br>
                                    <input type="checkbox" name="R2" value="2" id="R2"> 2.0<br>
                                    <input type="checkbox" name="R2_5" value="2.5" id="R2_5"> 2.5<br>
                                    <input type="checkbox" name="R3" value="3" id="R3"> 3.0<br>
                                </td>

                            </tr>
                            <tr>
                                <td></td >
                                <td id="rValid" class="errormsg"></td>
                            </tr>
                            </table>
                            <tr>
                                <td align="center">
                                    <input type="submit" value="Check">
                                </td>
                            </tr>


                        </form>
                    </td>
        </tr>
                    <tr>
                    <td>
                        <table id="resTable">
                            <!— Heading of the table-->
                            <tr class="TableHeader" cosplan="4" id="header3">
                                <td>
                                    X
                                </td>
                                <td>
                                    Y
                                </td>
                                <td>
                                    R
                                </td>
                                <td>
                                    Res
                                </td>

                            </tr>
                            <!— Table Data-->
                            <?php

                                if(isset($_COOKIE["TableData"])) {
                                    $index = 0;
                                    $line = $_COOKIE["TableData"];
                                    function nextStr(){
                                        global $line;
                                        global $index;
                                        $res = "";
                                        do {
                                            if (strlen($line)>$index)
                                                $ch = $line[$index++];
                                            else $ch = ' ';
                                            if ($ch != " ")
                                                $res = $res.$ch;

                                        } while ($ch != ' ');
                                        return $res;
                                    }

                                    $s=nextStr();

                                    while($s!="" && $s!=" "){
                                        echo '<tr class="line">';
                                            for ($i=0;$i<4;$i++){
                                                echo '<td>'.$s.'</td>';
                                                $s=nextStr();
                                            }
                                            echo '</tr>';
                                    }
                                }

                            ?>
                        </table>

                    </td>
                </tr>
                <tr> <td>
                        <?php
                            date_default_timezone_set('Europe/Moscow');
                            echo "Time of opening: ";
                            echo date('H:i:s',time());
                            if (isset($_SESSION["ComputeTime"]))
                            echo '<br>Script run time: '.($_SESSION["runTime"])."s";
                        ?>
                    </td>
                </tr>
        </table>
    </body>
</html>