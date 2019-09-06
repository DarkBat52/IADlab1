<?php


    session_start();
    $_SESSION["StartTime"] = microtime(true);
    $StartTime = microtime(true);

    $x = $_GET['x'];
    $y = $_GET['y'];


    if (isset($_GET['R1'])){
        $R = $_GET['R1'];
        print("<p> r1 </p>");
    }

    else if (isset($_GET['R1_5'])) $R = $_GET['R1_5'];
    else if (isset($_GET['R2'])) $R = $_GET['R2'];
    else if (isset($_GET['R2_5'])) $R = $_GET['R2_5'];
    else if (isset($_GET['R3'])) $R = $_GET['R3'];



    if (isset($x) && $x<=2 && $x>=-2 && isset($y) && $y >= -5 && $y <= 5 && (isset($R) && $R>=1 && $R<=3))
    {
        $_SESSION['x'][] = $x;
        $_SESSION['y'][] = $y;
        $_SESSION['R'][] = $R;
        $res = ((($x <= $R) && ($x >= 0) && ($y >= -$R/2) && ($y <= 0)) ||
            (($x*$x + $y*$y <= $R*$R) && ($y >= 0) && ($x <= 0)) ||
            (($y >= $x*(-0.5) - $R/2) && ($x <= 0) && ($y <= 0)));
        $line = $x.' '.$y.' '.$R.' '.($res?"True":"False").' ';
        if (!isset($_COOKIE["TableData"]))
            setcookie("TableData",$line,time()+86400*30);
        else setcookie("TableData",$line.$_COOKIE["TableData"],time()+86400*30);
        $_SESSION["runTime"] = microtime(true)- $StartTime;
        header("Location: lab1.php#header3");
    }



