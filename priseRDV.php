<!DOCTYPE html>
<html>

<head>
    <title>Prise RDV</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="case.js">
        
    </script>
    <style>
    #container{
        margin-left: 25px;
    }
    #gameGrid{
        width: 300px;
        height: 300px;
        padding: 20px;
        border: 2px solid black;
        background-color: beige;
        margin-top: 25%;
    }
    td, th {
        border: thin solid #6495ed;
        width: 90px;
        height: 50px;
        margin-left: 5px;
        margin-top: 5px;
        float: left;
        background-color: rgb(210,210,210);
        }
        input.l
        {
            transform: scale(1);
            margin: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
    <form action="reserverRDV.php" method="post">
        <div class="gameGrid">
            <table id ="tableau" align="center">
                <tr>
                    <td id="case0" >Lundi AM</td>
                    <td id="case1" >Lundi PM</td>
                    <td id="case2" >Mardi AM</td>
                    <td id="case3" >Mardi PM</td>
                    <td id="case4" >Mercredi AM</td>
                    <td id="case5" >Mercredi PM</td>
                    <td id="case6" >Jeudi AM</td>
                    <td id="case7" >Jeudi PM</td>
                    <td id="case8" >Vendredi AM</td>
                    <td id="case9" >Vendredi PM</td>
                    <td id="case10" >Samedi AM</td>
                    <td id="case11" >Samedi PM</td>
                </tr>
                <tr>
                    <td id="case12" ><input class="l" id="btn0" type="checkbox" value ="1" name="case" onclick="main(case12)"></td>
                    <td id="case13" ><input class="l" id="btn1" type="checkbox" value ="2" name="case" onclick="main(case13)"></td>
                    <td id="case14" ><input class="l" id="btn2" type="checkbox" value ="3" name="case" onclick="main(case14)"></td>
                    <td id="case15" ><input class="l" id="btn3" type="checkbox" value ="4" name="case" onclick="main(case15)"></td>
                    <td id="case16" ><input class="l" id="btn4" type="checkbox" value ="5" name="case" onclick="main(case16)"></td>
                    <td id="case17" ><input class="l" id="btn5" type="checkbox" value ="6" name="case" onclick="main(case17)"></td>
                    <td id="case18" ><input class="l" id="btn6" type="checkbox" value ="7" name="case" onclick="main(case18)"></td>
                    <td id="case19" ><input class="l" id="btn7" type="checkbox" value ="8" name="case" onclick="main(case19)"></td>
                    <td id="case20" ><input class="l" id="btn8" type="checkbox" value ="9" name="case" onclick="main(case20)"></td>
                    <td id="case21" ><input class="l" id="btn9" type="checkbox" value ="10" name="case" onclick="main(case21)"></td>
                    <td id="case22" ><input class="l" id="btn10" type="checkbox" value ="11" name="case" onclick="main(case22)"></td>
                    <td id="case23" ><input class="l" id="btn11" type="checkbox" value ="12" name="case" onclick="main(case23)"></td>
                </tr>
                </table>

        <div align ="center">
        <input type="submit" value="Reserver" name="res"/>
        </div>
    </div>
    </form>
    <input type="submit" value="Reset" onclick="rafraichir()">
</body>
</html>