<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
    <link rel="stylesheet" href="{{url('calc.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <table align="center" width="20%" border="1" style="margin-top: 50px;">
        <tr>
            <td colspan="4"><input type="text" name="" id="tx1"></td>
        </tr>
        <tr>
            <td><button class="btn1" onclick="setcalc('+')">+</button></td>
            <td><button class="btn1" onclick="setcalc('-')">-</button></td>
            <td><button class="btn1" onclick="setcalc('*')">*</button></td>
            <td><button class="btn1" onclick="setcalc('/')">/</button></td>
        </tr>
        <tr>
            <td><button class="btn1" onclick="setcalc(1)">1</button></td>
            <td><button class="btn1" onclick="setcalc(2)">2</button></td>
            <td><button class="btn1" onclick="setcalc(3)">3</button></td>
            <td rowspan="4"><button id="bt2" onclick="setresult()">=</button></td>
        </tr>
        <tr>
            <td><button class="btn1" onclick="setcalc(4)">4</button></td>
            <td><button class="btn1" onclick="setcalc(5)">5</button></td>
            <td><button class="btn1" onclick="setcalc(6)">6</button></td>

        </tr>
        <tr>
            <td><button class="btn1" onclick="setcalc(7)">7</button></td>
            <td><button class="btn1" onclick="setcalc(8)">8</button></td>
            <td><button class="btn1" onclick="setcalc(9)">9</button></td>

        </tr>
        <tr>
            <td><button class="btn1" onclick="setcalc(0)">0</button></td>
            <td><button class="btn1" onclick="setcalc('.')">.</button></td>
            <td><button class="btn1" onclick="setclear('')">c</button></td>

        </tr>
    </table>
    <script>
        function setcalc(num) {
            display = eval(document.getElementById('tx1').value += num)

        }

        function setresult() {

            document.getElementById('tx1').value = display

        }

        function setclear() {
            document.getElementById('tx1').value = " "
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</body>

</html>