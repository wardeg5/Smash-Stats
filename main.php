
<!DOCTYPE html>
<html id = "html">
<head>
    <script src="js/jquery.js"></script>
    <script src = "js/smashmode.js"></script>
    <script src = "js/colorchange.js"></script>

<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <title>Super Smash Brothers Melee Stats</title>

    <link href='https://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
    <link href='css/main.css' rel='stylesheet' type='text/css'>

</head>
<body id = "body">
    <audio id = "toggle">
      <source src="audio/toggle.mp3" type="audio/mpeg">
</audio>

  <audio id = "ok">
      <source src="audio/ok.mp3" type="audio/mpeg">
</audio>
 <audio id = "back">
      <source src="audio/back.mp3" type="audio/mpeg">
</audio>
<br>
    <img id = "centered" src = "img/header.png">

<br>
    <br>
  <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->

<source src="video/smash.mp4" type="video/mp4">
</video>

<a class="btn btn-primary" id = "play1" onClick="changeHeight();" onmouseover="this.style.background='gold'; this.style.color='black';" onmouseout="this.style.background='black'; this.style.color='gold';"> <div id = "toggle1" > Hide Definitions <span class="glyphicon glyphicon-chevron-up"></span></div><div id = "toggle2" style="display: none" ><span class="glyphicon glyphicon-chevron-down"></span> Show Definitions </div><img id= "menubtn" src = "img/menubutton.png"></a>  <br>

<div id = "definitions">
    <hr>
    <h2>Definitions</h2>
    <hr> 
    <h3><i>Running Speed</i></h3>Average running speed is calculated from a standing start. Each character runs for 100 meters and I calculate the average speed.
    The character with the fastest running speed is Captain Falcon. The character with the slowest running speed is Zelda.
    <hr>
    <h3><i>Walking Speed</i></h3>Average walking speed measures distance traveled and time from a standing start. The character with fastest walking speed is Fox, followed closely by Marth. The character with the slowest walking speed is Bowser.
    <hr>
    <h3><i>Falling Speed</i></h3>Average fall speed was measured by placing a character exactly 8.1 meters in the air. The character with the fastest falling speed is Falco. The character with the slowest falling speed is Jigglypuff.
    <hr>
    <h3><i>Jumping Speed</i></h3>Jump speed is the measure of the jump animation.Fox is the character with the fastest jump speed. Bowser is the character with the slowest jump speed.
    <hr>
    <h3><i>Short Hop Height</i></h3>A short hop corresponds to a light tap of the jump button on the gamecube controller. The character with the highest short hop is Samus. The character with the lowest short hop is jigglypuff.
    <hr>
    <h3><i>Full Jump Height</i></h3>The height of each character's full jump. Falco is the character with the highest full jump. Jigglypuff has the lowest full jump.


    <hr>
    <h3><i>Ledge Rolling Distance (0-99%)</i></h3>A ledge roll is when a character grabs a ledge and presses L/R to perform a roll toward the center of the stage.

    The ledge roll distance varies depending on the player's damage level; the roll is longer when over 99% damage.The character with the longest ledge roll is Donkey Kong. The character with the shortest ledge roll is Pichu.
    <hr>
    <h3><i>Ledge Rolling Distance (100-999%)</i></h3>A ledge roll performed at high damage. This table is in descending order.

    The character with the longest ledge roll is Donkey Kong. The character with the shortest ledge roll is Pichu.
    <hr>

    <h3><i>Wavedash Distance</i></h3>A wavedash is an advanced technique that allows the character to slide across the ground. The direction in which one wavedashes does not alter the distance traveled in this test; distances are measured from a standing start.
    The character with the longest wavedash is Luigi. The character with the shortest wavedash is tied between Zelda and Peach.
    <hr>
    <h3><i>Grab Range</i></h3>The character with the longest grab range is Samus. The character with the shortest grab range is Pichu.
    <br>
    <br>
<hr>
</div>
<a class="btn btn-primary" id = "play2" onClick="changeHeight2();" onmouseover="this.style.background='gold'; this.style.color='black';" onmouseout="this.style.background='black'; this.style.color='gold';"> <div id = "toggle3"> Hide Character Stats <span class="glyphicon glyphicon-chevron-up"></span></div><div id = "toggle4" style="display: none"><span class="glyphicon glyphicon-chevron-down"></span> Show Character Stats</div><img id= "menubtn" src = "img/menubutton.png"></a><br>

<div id = "output">
    <hr>
    <h2>Character Stats</h2>
<?php
/**
 * Created by PhpStorm.
 * User: Warren Degenhardt
 * Date: 10/14/2015
 * Time: 2:35 PM
 */


$characters = array
(
    array("Captain Falcon",13.54,4.01,15.68,5,109.922,38749874,1037253577,9726718,3327742,893895, "http://www.ssbwiki.com/images/thumb/2/29/CaptainFalconIcon%28SSBM%29.png/40px-CaptainFalconIcon%28SSBM%29.png"),
    array("Fox",12.96,7.48,15.19,4,99.027,36851957,1035290230,6022150,4081662,1081275,"http://www.ssbwiki.com/images/thumb/8/8d/FoxIcon%28SSBM%29.png/40px-FoxIcon%28SSBM%29.png"),
    array("Marth",10.75,7.38,11.85,5,107.704,37850723,1036269816,7288111,5276825,1942916, "http://www.ssbwiki.com/images/thumb/a/ab/MarthIcon%28SSBM%29.png/40px-MarthIcon%28SSBM%29.png"),
    array("Sheik",10.64,5.64,11.57,4,118.301,37585964,1035816751,6531667,3391390,1433508,"http://www.ssbwiki.com/images/thumb/2/21/SheikIcon%28SSBM%29.png/40px-SheikIcon%28SSBM%29.png"),
    array("Pikachu",10.62,5.82,10.57,4,107.717,37051189,1035841384,7113748,3323810,829387,"http://www.ssbwiki.com/images/thumb/e/ee/PikachuIcon%28SSBM%29.png/40px-PikachuIcon%28SSBM%29.png"),
    array("Pichu",10.29,5.81,10.57,4,107.717,37051189,1031639000,2758334,2888496,742352,"http://www.ssbwiki.com/images/thumb/c/c7/PichuIcon%28SSBM%29.png/40px-PichuIcon%28SSBM%29.png"),
    array("Roy",9.63,5.59,13.14,6,98.965,36767546,1035650680,6672431,4568830,1824651, "http://www.ssbwiki.com/images/thumb/f/f3/RoyIcon%28SSBM%29.png/40px-RoyIcon%28SSBM%29.png"),
    array("Young Link",9.58,5.64,11.57,5,99.909,37177018,1033932008,5079419,3566396,2856845, "http://www.ssbwiki.com/images/thumb/6/6a/YoungLinkIcon%28SSBM%29.png/40px-YoungLinkIcon%28SSBM%29.png"),
    array("Donkey Kong",9.46,5.63,13.50,6,106.680,38561139,1040610846,13637272,3391390,1638295, "http://www.ssbwiki.com/images/thumb/a/a9/DonkeyKongIcon%28SSBM%29.png/40px-DonkeyKongIcon%28SSBM%29.png"),
    array("Yoshi",9.45,5.4,10.57,6,115.927,37789646,1034760535,5822117,4743837,2293552, "http://www.ssbwiki.com/images/thumb/b/bd/YoshiIcon%28SSBM%29.png/40px-YoshiIcon%28SSBM%29.png"),
    array("Falco",8.88,6.56,16.76,6,101.440,42152505,1036633013,7312597,3888936,1238961, "http://www.ssbwiki.com/images/thumb/7/7c/FalcoIcon%28SSBM%29.png/40px-FalcoIcon%28SSBM%29.png"),
    array("Mr. Game & Watch",8.88,5.16,9.53,5,100,35896572,1035413663,5073002,4606160,1044391, "http://www.ssbwiki.com/images/thumb/7/74/MrGame%26WatchIcon%28SSBM%29.png/40px-MrGame%26WatchIcon%28SSBM%29.png"),
    array("Dr. Mario",8.86,5.16,9.35,5,100,35896572,1035150953,5989456,4606160,929221, "http://www.ssbwiki.com/images/thumb/b/b0/DrMarioIcon%28SSBM%29.png/40px-DrMarioIcon%28SSBM%29.png"),
    array("Mario",8.86,5.16,9.35,5,100,35896572,1035150953,5989456,4606160,929221, "http://www.ssbwiki.com/images/thumb/f/fe/MarioIcon%28SSBM%29.png/40px-MarioIcon%28SSBM%29.png"),
    array("Bowser",8.85,3.05,10.34,9,99.053,36927977,1037540115,7459512,4112493,1907590, "http://www.ssbwiki.com/images/thumb/9/99/BowserIcon%28SSBM%29.png/40px-BowserIcon%28SSBM%29.png"),
    array("Ice Climbers",8.38,4.47,8.84,4,98.638,37853349,1035524776,6652483,7644833,793655, "http://www.ssbwiki.com/images/thumb/5/5b/IceClimbersIcon%28SSBM%29.png/40px-IceClimbersIcon%28SSBM%29.png"),
    array("Ness",8.29,3.96,10.34,5,105.798,38084036,1036460298,7480567,4377991,870344, "http://www.ssbwiki.com/images/thumb/8/8c/NessIcon%28SSBM%29.png/40px-NessIcon%28SSBM%29.png"),
    array("Kirby",8.29,4.01,9.17,4,109.844,34323707,1035984759,6886635,3327742,1530910, "http://www.ssbwiki.com/images/thumb/2/24/KirbyIcon%28SSBM%29.png/40px-KirbyIcon%28SSBM%29.png"),
    array("Samus",8.29,4.71,7.84,4,121.660,37686626,1036277958,8069829,4606160,5230563, "http://www.ssbwiki.com/images/thumb/f/f3/SamusIcon%28SSBM%29.png/40px-SamusIcon%28SSBM%29.png"),
    array("Mewtwo",8.29,4.72,8.38,6,104.226,37409797,1036692406,8022645,6820737,1331115, "http://www.ssbwiki.com/images/thumb/2/2c/MewtwoIcon%28SSBM%29.png/40px-MewtwoIcon%28SSBM%29.png"),
    array("Ganondorf",7.98,3.42,11.05,7,113.424,35005283,1038698990,11108534,3749947,995264, "http://www.ssbwiki.com/images/thumb/d/d7/GanondorfIcon%28SSBM%29.png/40px-GanondorfIcon%28SSBM%29.png"),
    array("Luigi",7.93,5.16,8.68,5,110.078,39909867,1036509617,7191658,9531045,1343914, "http://www.ssbwiki.com/images/thumb/f/f3/LuigiIcon%28SSBM%29.png/40px-LuigiIcon%28SSBM%29.png"),
    array("Link",7.78,5.64,11.30,7,99.909,36247855,1036041368,7221090,2713489,4170743, "http://www.ssbwiki.com/images/thumb/c/c5/LinkIcon%28SSBM%29.png/40px-LinkIcon%28SSBM%29.png"),
    array("Peach",7.69,4.01,8.24,6,113.943,36872929,1036762077,7783218,2660328,1059772, "http://www.ssbwiki.com/images/thumb/0/0e/PeachIcon%28SSBM%29.png/40px-PeachIcon%28SSBM%29.png"),
    array("Jigglypuff",6.59,3.3,7.36,6,95.126,31597415,1036205422,7134036,2946167,1347498, "http://www.ssbwiki.com/images/thumb/4/44/JigglypuffIcon%28SSBM%29.png/40px-JigglypuffIcon%28SSBM%29.png"),
    array("Zelda",6.51,3.31,7.71,7,115.936,36847244,1037777580,8798075,2660328,1161142, "http://www.ssbwiki.com/images/thumb/e/e5/ZeldaIcon%28SSBM%29.png/40px-ZeldaIcon%28SSBM%29.png")
);
$average_speed = 0;
$average_walk = 0;
$average_fall = 0;
$average_jump = 0;
$average_hop = 0;
$average_full_jump = 0;
$average_ledge_roll_low = 0;
$average_ledge_roll_high = 0;
$average_wavedash = 0;
$average_grab = 0;
for ($row = 0; $row <  26; $row++) {
    echo "<hr>";
    echo "<ul>";
    echo "<img src =".$characters[$row][11].">&nbsp;&nbsp;";
    echo "<b>".$characters[$row][0]."</b>";

    echo "<li>Running Speed(m/s): ".$characters[$row][1]."</li>";
    $average_speed += $characters[$row][1];
    echo "<li>Walking Speed(m/s): ".$characters[$row][2]."</li>";
    $average_walk += $characters[$row][2];
    echo "<li>Falling Speed(m/s): ".$characters[$row][3]."</li>";
    $average_fall += $characters[$row][3];
    echo "<li>Jumping Speed(Frames): ".$characters[$row][4]."</li>";
    $average_jump += $characters[$row][4];
    echo "<li>Short Hop Height(Unit x): ".$characters[$row][5]."</li>";
    $average_hop += $characters[$row][5];
    echo "<li>Full Jump Height(Unit y): ".$characters[$row][6]."</li>";
    $average_full_jump += $characters[$row][6];
    echo "<li>Ledge Rolling Distance (0-99%) (Unit x): ".$characters[$row][7]."</li>";
    $average_ledge_roll_low += $characters[$row][7];
    echo "<li>Ledge Rolling Distance (100-999%) (Unit x): ".$characters[$row][8]."</li>";
    $average_ledge_roll_high += $characters[$row][8];
    echo "<li>Wavedash Distance (Unit x): ".$characters[$row][9]."</li>";
    $average_wavedash += $characters[$row][8];
    echo "<li>Grab Range (Unit x): ".$characters[$row][10]."</li>";
    $average_grab += $characters[$row][9];
    echo "</ul><br>";
}
?>
    <hr>
</div>
    <a class="btn btn-primary" id = "play3" onClick="changeHeight3();" onmouseover="this.style.background='gold'; this.style.color='black';" onmouseout="this.style.background='black'; this.style.color='gold';"> <div id = "toggle5"> Hide Average Stats <span class="glyphicon glyphicon-chevron-up"></span></div><div id = "toggle6" style="display: none"><span class="glyphicon glyphicon-chevron-down"></span> Show Average Stats</div><img id= "menubtn" src = "img/menubutton.png"></a><br>
    <div id = "averages">
        <hr>
        <h2>Averages</h2>
        <?php
echo "<hr>";
echo "average running speed (m/s):".$average_speed/26 ;
echo "<br><br>";
echo "average walking speed (m/s):".$average_walk/26;
echo "<br><br>";
echo "average falling speed (m/s):".$average_fall/26;
echo "<br><br>";
echo "average jumping speed (frames):".$average_jump/26;
echo "<br><br>";
echo "average short hop height:".$average_hop/26;
echo "<br><br>";
echo "average jump height:".$average_full_jump/26;
echo "<br><br>";
echo "average ledge rolling distance (0-99%):".$average_ledge_roll_low/26;
echo "<br><br>";
echo "average ledge rolling distance (100-999%):".$average_ledge_roll_high/26;
echo "<br><br>";
echo "average wave dash distance:".$average_wavedash/26;
echo "<br><br>";
echo "average grab range:".$average_grab/26;
    echo "<hr>";

    ?>
        <hr>
</div>
    <a class="btn btn-primary" id = "play4" onClick="changeHeight4();" onmouseover="this.style.background='gold'; this.style.color='black';" onmouseout="this.style.background='black'; this.style.color='gold';"> <div id = "toggle7"> Hide Speed Rankings <span class="glyphicon glyphicon-chevron-up"></span></div><div id = "toggle8" style="display: none"><span class="glyphicon glyphicon-chevron-down"></span> Show Speed Rankings</div><img id= "menubtn" src = "img/menubutton.png"></a><br>

    <div id = "speed">
    <hr>
        <h2>Speed Rankings</h2>
        <?php

        for ($row = 0; $row <  26; $row++) {
            echo "<hr>";
            echo "<b>";
            echo $row + 1;
            echo "</b>";

            echo "<ul>";
            echo "<img src =".$characters[$row][11].">&nbsp;&nbsp;";
            echo "<b>".$characters[$row][0]."</b>";

            echo "<li>Running Speed(m/s): ".$characters[$row][1]."</li>";
            echo "<li>Walking Speed(m/s): ".$characters[$row][2]."</li>";

            echo "</ul>";
        }
        ?>
        <hr>

    </div>

    <a class="btn btn-primary" id = "play5" onClick="changeHeight5();" onmouseover="this.style.background='gold'; this.style.color='black';" onmouseout="this.style.background='black'; this.style.color='gold';"> <div id = "toggle9"> Hide Falling Speed Rankings <span class="glyphicon glyphicon-chevron-up"></span></div><div id = "toggle10" style="display: none"><span class="glyphicon glyphicon-chevron-down"></span> Show Falling Speed Rankings</div><img id= "menubtn" src = "img/menubutton.png"></a><br>

    <div id = "falling">
        <hr>
        <h2>Falling Speed Rankings</h2>
        
<?php
$fallingrank = array();
for ($row = 0; $row <  26; $row++) {

 array_push($fallingrank, $characters[$row][3]);

    }        
     
arsort($fallingrank);
$row = 0;
foreach ($fallingrank as $key => $val) {
    $row += 1;
        echo "<hr>";
   echo "<b>";
            echo $row;
            echo "</b>";
               echo "<ul>";
            echo "<img src =".$characters[$key][11].">&nbsp;&nbsp;";
    echo "<b>" . $characters[$key][0] . "</b>";
     echo "<br>";
    echo "<li>Falling Speed(m/s): $val</li>\n";
               echo "</ul>";

}


?>
        <hr>
    </div>



        <a class="btn btn-primary" id = "play6" onClick="changeHeight6();" onmouseover="this.style.background='gold'; this.style.color='black';" onmouseout="this.style.background='black'; this.style.color='gold';"> <div id = "toggle11"> Hide Jumping Speed Rankings <span class="glyphicon glyphicon-chevron-up"></span></div><div id = "toggle12" style="display: none"><span class="glyphicon glyphicon-chevron-down"></span> Show Jumping Speed Rankings</div><img id= "menubtn" src = "img/menubutton.png"></a><br>

    <div id = "jumping">
        <hr>
        <h2>Jumping Speed Rankings</h2>
        
<?php
$jumpingrank = array();
for ($row = 0; $row <  26; $row++) {

 array_push($jumpingrank, $characters[$row][4]);

    }        
     
asort($jumpingrank);
$row = 0;
foreach ($jumpingrank as $key => $val) {
    $row += 1;
        echo "<hr>";
   echo "<b>";
            echo $row;
            echo "</b>";
               echo "<ul>";
            echo "<img src =".$characters[$key][11].">&nbsp;&nbsp;";
    echo "<b>" . $characters[$key][0] . "</b>";
     echo "<br>";
    echo "<li>Jumping Speed(frames): $val</li>\n";
               echo "</ul>";

}


?>
        <hr>
    </div>
        <a class="btn btn-primary" id = "play7" onClick="changeHeight7();" onmouseover="this.style.background='gold'; this.style.color='black';" onmouseout="this.style.background='black'; this.style.color='gold';"> <div id = "toggle13"> Hide Short Hop Rankings <span class="glyphicon glyphicon-chevron-up"></span></div><div id = "toggle14" style="display: none"><span class="glyphicon glyphicon-chevron-down"></span> Show Short Hop Rankings</div><img id= "menubtn" src = "img/menubutton.png"></a><br>

    <div id = "shorthop">
        <hr>
        <h2>Short Hop Height Rankings</h2>
        
<?php
$shorthoprank = array();
for ($row = 0; $row <  26; $row++) {

 array_push($shorthoprank, $characters[$row][5]);

    }        
     
asort($shorthoprank);
$row = 0;
foreach ($shorthoprank as $key => $val) {
    $row += 1;
        echo "<hr>";
   echo "<b>";
            echo $row;
            echo "</b>";
               echo "<ul>";
            echo "<img src =".$characters[$key][11].">&nbsp;&nbsp;";
    echo "<b>" . $characters[$key][0] . "</b>";
     echo "<br>";
    echo "<li>Short Hop Height(Unit x): $val</li>\n";
               echo "</ul>";

}


?>
        <hr>
    </div>

        <a class="btn btn-primary" id = "play8" onClick="changeHeight8();" onmouseover="this.style.background='gold'; this.style.color='black';" onmouseout="this.style.background='black'; this.style.color='gold';"> <div id = "toggle15"> Hide Full Jump Rankings <span class="glyphicon glyphicon-chevron-up"></span></div><div id = "toggle16" style="display: none"><span class="glyphicon glyphicon-chevron-down"></span> Show Full Jump Rankings</div><img id= "menubtn" src = "img/menubutton.png"></a><br>

    <div id = "fulljump">
        <hr>
        <h2>Full Jump Height Rankings</h2>
        
<?php
$fulljump = array();
for ($row = 0; $row <  26; $row++) {

 array_push($fulljump, $characters[$row][7]);

    }        
     
asort($fulljump);
$row = 0;
foreach ($fulljump as $key => $val) {
    $row += 1;
        echo "<hr>";
   echo "<b>";
            echo $row;
            echo "</b>";
               echo "<ul>";
            echo "<img src =".$characters[$key][11].">&nbsp;&nbsp;";
    echo "<b>" . $characters[$key][0] . "</b>";
     echo "<br>";
    echo "<li>Full Jump Height(Unit y): $val</li>\n";
               echo "</ul>";

}


?>
        <hr>
    </div>


   <a class="btn btn-primary" id = "play9" onClick="changeHeight9();" onmouseover="this.style.background='gold'; this.style.color='black';" onmouseout="this.style.background='black'; this.style.color='gold';"> <div id = "toggle17"> Hide Ledge Roll (0%-99%) Rankings <span class="glyphicon glyphicon-chevron-up"></span></div><div id = "toggle18" style="display: none"><span class="glyphicon glyphicon-chevron-down"></span> Show Ledge Roll (0%-99%) Rankings</div><img id= "menubtn" src = "img/menubutton.png"></a><br>

    <div id = "ledgelow">
        <hr>
        <h2>Ledge Roll (0%-99%) Rankings</h2>
        
<?php
$ledgelow = array();
for ($row = 0; $row <  26; $row++) {

 array_push($ledgelow, $characters[$row][7]);

    }        
     
arsort($ledgelow);
$row = 0;
foreach ($ledgelow as $key => $val) {
    $row += 1;
        echo "<hr>";
   echo "<b>";
            echo $row;
            echo "</b>";
               echo "<ul>";
            echo "<img src =".$characters[$key][11].">&nbsp;&nbsp;";
    echo "<b>" . $characters[$key][0] . "</b>";
     echo "<br>";
    echo "<li>Ledge Roll Distance (0%-99%) (Unit x): $val</li>\n";
               echo "</ul>";

}


?>
        <hr>
    </div>


   <a class="btn btn-primary" id = "play10" onClick="changeHeight10();" onmouseover="this.style.background='gold'; this.style.color='black';" onmouseout="this.style.background='black'; this.style.color='gold';"> <div id = "toggle19"> Hide Ledge Roll (100%-999%) Rankings <span class="glyphicon glyphicon-chevron-up"></span></div><div id = "toggle20" style="display: none"><span class="glyphicon glyphicon-chevron-down"></span> Show Ledge Roll (100%-999%) Rankings</div><img id= "menubtn" src = "img/menubutton.png"></a><br>

    <div id = "ledgehigh">
        <hr>
        <h2>Ledge Roll (100%-999%) Rankings</h2>
        
<?php
$ledgehigh = array();
for ($row = 0; $row <  26; $row++) {

 array_push($ledgehigh, $characters[$row][8]);

    }        
     
arsort($ledgehigh);
$row = 0;
foreach ($ledgehigh as $key => $val) {
    $row += 1;
        echo "<hr>";
   echo "<b>";
            echo $row;
            echo "</b>";
               echo "<ul>";
            echo "<img src =".$characters[$key][11].">&nbsp;&nbsp;";
    echo "<b>" . $characters[$key][0] . "</b>";
     echo "<br>";
    echo "<li>Ledge Roll Distance (100%-999%) (Unit x): $val</li>\n";
               echo "</ul>";

}


?>
        <hr>
    </div>




   <a class="btn btn-primary" id = "play11" onClick="changeHeight11();" onmouseover="this.style.background='gold'; this.style.color='black';" onmouseout="this.style.background='black'; this.style.color='gold';"> <div id = "toggle21"> Wave Dash Rankings <span class="glyphicon glyphicon-chevron-up"></span></div><div id = "toggle22" style="display: none"><span class="glyphicon glyphicon-chevron-down"></span> Wave Dash Rankings</div><img id= "menubtn" src = "img/menubutton.png"></a><br>

    <div id = "wavedash">
        <hr>
        <h2>Wave Dash Rankings</h2>
        
<?php
$wavedash = array();
for ($row = 0; $row <  26; $row++) {

 array_push($wavedash, $characters[$row][9]);

    }        
     
arsort($wavedash);
$row = 0;
foreach ($wavedash as $key => $val) {
    $row += 1;
        echo "<hr>";
   echo "<b>";
            echo $row;
            echo "</b>";
               echo "<ul>";
            echo "<img src =".$characters[$key][11].">&nbsp;&nbsp;";
    echo "<b>" . $characters[$key][0] . "</b>";
     echo "<br>";
    echo "<li>Wave Dash Distance (Unit x): $val</li>\n";
               echo "</ul>";

}


?>
        <hr>
    </div>




   <a class="btn btn-primary" id = "play12" onClick="changeHeight12();" onmouseover="this.style.background='gold'; this.style.color='black';" onmouseout="this.style.background='black'; this.style.color='gold';"> <div id = "toggle23"> Grab Rankings <span class="glyphicon glyphicon-chevron-up"></span></div><div id = "toggle24" style="display: none"><span class="glyphicon glyphicon-chevron-down"></span> Grab Rankings</div><img id= "menubtn" src = "img/menubutton.png"></a><br>

    <div id = "grab">
        <hr>
        <h2>Grab Rankings</h2>
        
<?php
$grab = array();
for ($row = 0; $row <  26; $row++) {

 array_push($grab, $characters[$row][10]);

    }        
     
arsort($grab);
$row = 0;
foreach ($grab as $key => $val) {
    $row += 1;
        echo "<hr>";
   echo "<b>";
            echo $row;
            echo "</b>";
               echo "<ul>";
            echo "<img src =".$characters[$key][11].">&nbsp;&nbsp;";
    echo "<b>" . $characters[$key][0] . "</b>";
     echo "<br>";
    echo "<li>Grab Range (Unit x): $val</li>\n";
               echo "</ul>";

}


?>
        <hr>
    </div>

 <script>
function changeHeight() {
    
$('#definitions').toggle('slow');

$('#toggle1').toggle('slow');
  $('#toggle2').toggle('slow');
};


function changeHeight2() {
    $('#output').toggle('slow');

$('#toggle3').toggle('slow');
  $('#toggle4').toggle('slow');
};

function changeHeight3() {
    $('#averages').toggle('slow');

    $('#toggle5').toggle('slow');
    $('#toggle6').toggle('slow');
};

function changeHeight4() {
    $('#speed').toggle('slow');

    $('#toggle7').toggle('slow');
    $('#toggle8').toggle('slow');
};

function changeHeight5() {
    $('#falling').toggle('slow');

    $('#toggle9').toggle('slow');
    $('#toggle10').toggle('slow');
};

function changeHeight6() {
    $('#jumping').toggle('slow');

    $('#toggle11').toggle('slow');
    $('#toggle12').toggle('slow');
};
function changeHeight7() {
    $('#shorthop').toggle('slow');

    $('#toggle13').toggle('slow');
    $('#toggle14').toggle('slow');
};
function changeHeight8() {
    $('#fulljump').toggle('slow');

    $('#toggle15').toggle('slow');
    $('#toggle16').toggle('slow');
};

function changeHeight9() {
    $('#ledgelow').toggle('slow');

    $('#toggle17').toggle('slow');
    $('#toggle18').toggle('slow');
};


function changeHeight10() {
    $('#ledgehigh').toggle('slow');

    $('#toggle19').toggle('slow');
    $('#toggle20').toggle('slow');
};

function changeHeight11() {
    $('#wavedash').toggle('slow');

    $('#toggle21').toggle('slow');
    $('#toggle22').toggle('slow');
};

function changeHeight12() {
    $('#grab').toggle('slow');

    $('#toggle23').toggle('slow');
    $('#toggle24').toggle('slow');
};
$( document ).ready(function() {
    changeHeight();
    changeHeight2();
    changeHeight3();
    changeHeight4();
    changeHeight5();
   changeHeight6();
   changeHeight7();
   changeHeight8();
   changeHeight9();
   changeHeight10();
   changeHeight11();
   changeHeight12();

});

</script>
<footer id = "footer"><div id = "credits">data sourced from: <a href = "http://www.antd.org/ssbm/melee-character-stats-list">antd.org</a>
<p id = "nightmode">


</p>

</footer>
</body>

</html>
