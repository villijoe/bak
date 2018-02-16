<?php //echo file_get_contents("http://php.net"); ?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bakalov</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>

<div class="row common">
    <div class="col-lg-6 offset-lg-3">

        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <h3>Найдена строка:</h3>

                <p id="result"></p>

                <p>Введите строку для поиска:</p>
                <div class="input-group">
                    <input type="text" class="form-control" id="search" autofocus />
                </div>
                <br />
                <button id="send" class="btn btn-primary btn-lg btn-block" >Найти</button>

            </div>
        </div>

        <br /><br />
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-left">
                <div class="text-left">
                    <h3 class="text-center">Мое резюме</h3>
                    <?php
                    $fo = @fopen("cv.txt", "r");
                    if ($fo) {
                        while (($buffer = fgets($fo)) !== false) {
                            echo $buffer . "<br />";
                        }
                    }
                    fclose($fo);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="check.js"></script>
</body>
</html>