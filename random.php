<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Random Page</title>
        <style>
            table {
                font-family: arial, sans-serif;
                width: 50%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
    <body>
        <?php
        $score = 0;
        print("<table><tr><th>Player</th><th>Computer</th><th>Rounds</th></tr>\n");
        //here write a loop that will run 10 times and compare the scores, increment the score if grater, decrementing if less and leaving it if equal
        //this should print each round out in the table.
        //http://ec2-52-37-146-144.us-west-2.compute.amazonaws.com/CSIS2440/ce02/random.php
        for ($i = 1; $i <= 10; $i++) {
            $p = rand(0, 100);
            $c = rand(0, 100);
            if ($p > $c) {
                $score++;
            } elseif ($p < $c) {
                $score--;
            }
            print("<tr><td>$p</td><td>$c</td><td>$i Score: $score</td></tr>\n");
        }



        print("<tr><td colspan=2>$score</td><td>Player Score</td></tr><table>\n");

        //Year of the---

        $year = date("Y");

        print("It is the year of the:<br>");
        //Here you will write out a switch that will print out the year using the modulo(% 12)
        //Monkey, roster, dog, boar, rat, ox, tiger, rabbit, dragon, snake, horse, and lamb is the order, do not forget a default case
        switch ($year % 12 + 1) {
            case 1:
                echo "Monkey";
                break;
            case 2:
                echo "Rooster";
                break;
            case 3:
                echo "Dog";
                break;
            case 4:
                echo "Boar";
                break;
            case 5 :
                echo "rat";
                break;
            case 6:
                echo "Ox";
                break;
            case 7:
                echo "tiger";
                break;
            case 8:
                echo "Rabbit";
                break;
            case 9:
                echo "Dragon";
                break;
            case 10 :
                echo "snake";
                break;
            case 11:
                echo "horse";
                break;
            case 12:
                echo "lamb";
                break;
            default: echo " no year";
        }
        ?>
    </body>
</html>