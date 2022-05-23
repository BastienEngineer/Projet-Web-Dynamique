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
                    <td id="case12" onclick="main(case12)"><input type="hidden" value ="c" name="c1"></td>
                    <td id="case13" onclick="main(case13)" name="2"></td>
                    <td id="case14" onclick="main(case14)" name="3"></td>
                    <td id="case15" onclick="main(case15)" name="4"></td>
                    <td id="case16" onclick="main(case16)" name="5"></td>
                    <td id="case17" onclick="main(case17)" name="6"></td>
                    <td id="case18" onclick="main(case18)" name="7"></td>
                    <td id="case19" onclick="main(case19)" name="8"></td>
                    <td id="case20" onclick="main(case20)" name="9"></td>
                    <td id="case21" onclick="main(case21)" name="10"></td>
                    <td id="case22" onclick="main(case22)" name="11"></td>
                    <td id="case23" onclick="main(case23)" name="12"></td>
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