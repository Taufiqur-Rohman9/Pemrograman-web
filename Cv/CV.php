<?php 
    $sapa = "HELLO <br> I AM TAUFIQUR ROHMAN";
    $intro = "<h1> &nbsp; LET'S INTRODUCE MYSELF<p>My name is Taufiq. My favorite food is meatballs, while my favorite drink is ice tea. About the hobby, i really like to sing</p></h1>";
    $academic="<h2>ACADEMIC<p>MI Thoriqul Huda<br />SMPN 2 Mojoagung <br />SMAN Mojoagung</p></h2>";
    $hobi="<h2>HOBBIES<p>Singing <br />Watching Film <br />Swiming</p></h2>";
    $kontak="<h2>CONTACT<p>taufikurrohman222 <br />@gmail.com</p></h2>";
    $skill="<h1>SKILL</h1>";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>CV</title>
        <style>
            *{
                padding: 5px;
                margin: 5px;
            }
            .head{
                display: flex;
            }
            .head h1{
                font-size: 60px;
                flex-grow: 2;
                padding-top: 30px;
            }
            .isi{
                display: flex;
            }
            .isi h1{
                padding-top: 120px;
            }
            .isi p{
                padding-left: 10px;
                font-size: 20px;
                color: grey;
            }
            .imgisi{
                display: flex;
            }
            .imgisi img{
                flex-grow: 2;
            }
            #img2{
                margin-top: 21px;
            }
            #img3{
                margin-top: 10px;
            }
            .isiimg{
                display: flex;
            }
            .isiimg h2{
                flex-grow: 3;
                text-align: center;
            }
            .isiimg p{
                color: grey;
            }
            .container{
                width: 100%;
                background-color: #f2f2f2;
                margin-bottom: 10px;
                border-radius: 10px;
            } 
            #skill h1{
                padding-left: 46.5%;
            }
            .skill1{width: 80%;background-color: grey;border-radius:10px; }
            .skill2{width: 70%;background-color: grey;border-radius:10px;}
            .skill3{width: 50%;background-color: grey; border-radius:10px}
        </style>
    </head>
    <body>
        <br />
        <div class="head">
        <?php   echo "<h1>$sapa</h1>";
                ; ?>
        <img src="foto.png" alt="working" width="400px" height="240px"/>
        </div>
        <br />
        <div class="isi">
            <img src="present.jpg" alt="intro" width="600px" height="360px"/>
            <?php   echo "$intro";
                ; ?>
        </div>
        <div class="imgisi">
            <img id="img" src="read.jpg" alt="read" height="300" width="160px"/>
            <img id="img2" src="work.jpg" alt="work" height="300px" width="160px"/>
            <img id="img3" src="phone2.jpg" alt="phone2" height="300px" width="160px"/>
        </div>
        <div class="isiimg">
            <?php   echo "$academic";
                    echo "$hobi";
                    echo "$kontak";
                ; ?>
        </div>
            <div id="skill">
                <?php echo "$skill"; ?>
            </div>
            <label><b>Teamwork</b></label>
            <div class="container">
            <div class="skill1">&nbsp;80%</div>
            </div>
            <label><b>Public Speaking</b></label>
            <div class="container">
            <div class="skill2">&nbsp;70%</div>
            </div>
            <label><b>Leadership</b></label>
            <div class="container">
            <div class="skill3">&nbsp;50%</div>
            </div>
    </body>
</html>