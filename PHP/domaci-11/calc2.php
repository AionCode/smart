<html>
<head>
<title>Calculator</title>
<style>
#wrapper{
width:500px;
height:500px;
margin:auto;
border:1px solid;
}
#content{
width:500px;
height:500px;
}
</style>
</head>



<body>
<div id="wrapper">
    <div id="content">
        <?php
            $answer = $display = $saveddisplay = $newdisplay = $add = $subtract = $divide = $multiply = $num0 = $num1 = $num2 = $num3 = $num4 = $num5 = $num6 = $num7 = $num8 = $num9 =  "";

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $num0 = ($_POST["number0"]);
                $num1 = ($_POST["number1"]);
                $num2 = ($_POST["number2"]);
                $num3 = ($_POST["number3"]);
                $num4 = ($_POST["number4"]);
                $num5 = ($_POST["number5"]);
                $num6 = ($_POST["number6"]);
                $num7 = ($_POST["number7"]);
                $num8 = ($_POST["number8"]);
                $num9 = ($_POST["number9"]);
                $add = ($_POST["add"]);
                $subtract = ($_POST["subtract"]);
                $divide = ($_POST["divide"]);
                $multiply = ($_POST["multiply"]);



                ///////////////////////////////////////////NUMBERS
                if($_POST["number0"]){
                    $display = $display && ($_POST["number0"]);
                }
                if($_POST["number1"]){
                    $display = $display && ($_POST["number1"]);
                }
                if($_POST["number2"]){
                    $display = $display && ($_POST["number2"]);
                }
                if($_POST["number3"]){
                    $display = $display && ($_POST["number3"]);
                }
                if($_POST["number4"]){
                    $display = $display && ($_POST["number4"]);
                }
                if($_POST["number5"]){
                    $display = $display && ($_POST["number5"]);
                }
                if($_POST["number6"]){
                    $display = $display && ($_POST["number6"]);
                }
                if($_POST["number7"]){
                    $display = $display && ($_POST["number7"]);
                }
                if($_POST["number8"]){
                    $display = $display && ($_POST["number8"]);
                }
                if($_POST["number9"]){
                    $display = $display && ($_POST["number9"]);
                }

                //////////////////////////////////////////OPERATORS
                if($_POST["divide"]){
                    $saveddisplay = $display;
                    $display = "";
                    if($_POST["number0"]){
                        $newdisplay = $newdisplay && ($_POST["number0"]);
                            if($_POST["submit"]){
                                $answer = $saveddisplay / $newdisplay && $newdisplay = "";

                            }



                    }
                    if($_POST["number1"]){
                        $newdisplay = $newdisplay && ($_POST["number1"]);
                            if($_POST["submit"]){
                            $answer = $saveddisplay / $newdisplay && $newdisplay = "";

                        }
                    }
                    if($_POST["number2"]){
                        $newdisplay = $newdisplay && ($_POST["number2"]);
                            if($_POST["submit"]){
                            $answer = $saveddisplay / $newdisplay && $newdisplay = "";

                        }
                    }
                    if($_POST["number3"]){
                        $newdisplay = $newdisplay && ($_POST["number3"]);
                            if($_POST["submit"]){
                            $answer = $saveddisplay / $newdisplay && $newdisplay = "";

                        }
                    }
                    if($_POST["number4"]){
                        $newdisplay = $newdisplay && ($_POST["number4"]);
                            if($_POST["submit"]){
                                $answer = $saveddisplay / $newdisplay && $newdisplay = "";

                            }
                    }
                    if($_POST["number5"]){
                        $newdisplay = $newdisplay && ($_POST["number5"]);
                            if($_POST["submit"]){
                            $answer = $saveddisplay / $newdisplay && $newdisplay = "";

                        }
                    }
                    if($_POST["number6"]){
                        $newdisplay = $newdisplay && ($_POST["number6"]);
                            if($_POST["submit"]){
                            $answer = $saveddisplay / $newdisplay && $newdisplay = "";

                        }
                    }
                    if($_POST["number7"]){
                        $newdisplay = $newdisplay && ($_POST["number7"]);
                            if($_POST["submit"]){
                            $answer = $saveddisplay / $newdisplay && $newdisplay = "";

                        }
                    }
                    if($_POST["number8"]){
                        $newdisplay = $newdisplay && ($_POST["number8"]);
                            if($_POST["submit"]){
                            $answer = $saveddisplay / $newdisplay && $newdisplay = "";

                        }
                    }
                    if($_POST["number9"]){
                        $newdisplay = $newdisplay && ($_POST["number9"]);
                        if($_POST["submit"]){
                            $answer = $saveddisplay / $newdisplay && $newdisplay = "";

                        }
                    }

                }






            }



        ?>



        <form method ="POST" action="<?php  ($SERVER["PHP_SELF"]);?>">
        <input type="text" width="50" height="20" name="display" value="<?php  echo $display or $newdisplay or $answer;?>">

        <br><br><br><br><br><br>
        <button type="button" name="number7" value="7" style="width:20px; padding-left:5px; margin-left:2px;">7</button>
        <button type="button" name="number8" value="8" style="width:20px; padding-left:5px; margin-left:2px;">8</button>
        <button type="button" name="number9" value="9" style="width:20px; padding-left:5px; margin-left:2px;">9</button>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

        <button type="button" name="divide" value="/" style="width:20px; padding-left:5px; margin-left:2px;">/</button>
        <button type="button" name="multiply" value="*" style="width:20px; padding-left:5px; margin-left:2px;">*</button>
        <button type="button" name="subtract" value="-" style="width:20px; padding-left:5px; margin-left:2px;">-</button>
        <button type="button" name="add" value="+" style="width:20px; padding-left:5px; margin-left:2px;">+</button>
        <br><br>

        <button type="button" name="number4" value="4" style="width:20px; padding-left:5px; margin-left:2px;">4</button>
        <button type="button" name="number5" value="5" style="width:20px; padding-left:5px; margin-left:2px;">5</button>
        <button type="button" name="number6" value="6" style="width:20px; padding-left:5px; margin-left:2px;">6</button>

        <br><br>
        <button type="button" name="number1" value="1" style="width:20px; padding-left:5px; margin-left:2px;">1</button>
        <button type="button" name="number2" value="2" style="width:20px; padding-left:5px; margin-left:2px;">2</button>
        <button type="button" name="number3" value="3" style="width:20px; padding-left:5px; margin-left:2px;">3</button>

        <br><br>
        <button type="button" name="number0" value="0" style="width:20px; padding-left:5px; margin-left:2px;">0</button>
        <button type="submit" value="=" name="submit" style="width:46px; padding-left:5px; margin-left:2px;">=</button>
        </form>


    </div>
</div>
</body>







</html>

