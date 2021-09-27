<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Conversion</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Mulish', sans-serif;
        }

        h1{
            text-align: center;
            line-height: 20vh;
            color: #6c63ff;
        }

        .main-div{
            width: 100%;
            height: 80vh;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .left-side{
            background-color: #dfe6e9;
            /* border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; */
        }

        .left-side img{
            max-width: 600px;
            height: auto;
        }

        .right-side{
            width: 500px;
            height: 300px;
            background-color: #dfe6e9;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .input1{
            width: 250px;
            height: 40px;
            padding: 5px;
            outline: none;
            border-radius: 1px solid grey;
            border-radius: 5px;
        }

        .selection{
            width: 100%;
            margin: 20px 0;
        }

        .btn{
            padding: 10px 16px;
            border-radius: 5px;
            outline: none;
            border: none;
            background-color: #6c63ff;
            color: white;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.2s;
        }

        .btn:hover{
            transform: scale(1.1);
            color: black;
        }

        p{
            margin: 20px 0px 0px 0px;
        }
    </style>
</head>
<body>
    <Header>
        <h1>Temperature Conversion</h1>
        <div class="main-div">
            <div class="left-side">
                <img src="./13290.jpg" alt="">
            </div>
            <div class="right-side">
                <form method="POST">
                    <input type="text" name="num" placeholder="Enter your number" class="input1">
                    <div class="selection">
                        <label>Celc</label>
                        <input type="radio" name="units" value="cel">
                        <label>Faren</label>
                        <input type="radio" name="units" value="feh">
                    </div>

                    <input type="submit" class="btn" name="submit" value="ConvertNow">
                </form>

                <div>
                    <p>
                        <?php
                            if(isset($_POST['submit'])){
                                $num = $_POST['num'];
                                $temp = $_POST['units'];
                                
                                if($temp == "cel"){
                                    $result = $num * 9 / 5 + 32;
                                    echo "The value of celcius in fahrenheit is $result.";
                                }elseif($temp == "feh"){
                                    $result = ($num - 32) * 5 / 9;
                                    echo "The value of fahrenheit to celcius is $result.";
                                }else{
                                    echo "Please select a value...";
                                }
                            }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </Header>
</body>
</html>