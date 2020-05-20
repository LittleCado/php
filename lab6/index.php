<?php
    
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>
    Мажаев Вячеслав Сергеевич, 191-321. Лабораторная № 6 «Использование форм для передачи данных в программу РНР. Тест математических знаний»
    </title>
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <header>
        <img src="logo.jpg"></img>
    </header>

    <main>
			<div class="container">
				<div class="row">
					<div class="col-sms 12 col-md-12 col-lg-8 col-xl-6">
                        <?php
                            if (isset($_POST['submit'])) {
                                // Задаём полям вид, как будто они строки в таблице
                                echo '<style>
                                             .form-control {
                                                display: block;
                                                width: 100%;
                                                padding-top: .375rem;
                                                padding-bottom: .375rem;
                                                margin-bottom: 0;
                                                line-height: 1.5;
                                                color: #212529;
                                                background-color: transparent;
                                                border: solid transparent;
                                                border-width: 1px 0;
                                            }
                                            
                                            .showInTask {
                                                display: none;
                                            }
                                      </style>';

                                $name = $_POST['name'];
                                $group = $_POST['group'];
                                $about = $_POST['about'];

                                $answerUser = $_POST['answerUser'];

                                if (isset($_POST['variant'])) {
                                    $a = $_POST['A'];
                                    $b = $_POST['B'];
                                    $c = $_POST['C'];
                                }
                                switch ($_POST['variant']) {
                                    case 1:
                                        $p = ($a + $b + $c) / 2;
                                        if (($p * ($p - $a) * ($p - $b) * ($p - $c)) >= 0){
                                            $answerRobot = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
                                        }
                                        else{
                                            $answerRobot = sqrt(-1 * $p * ($p - $a) * ($p - $b) * ($p - $c));
                                        }
                                        break;
                                    case 2:
                                        $answerRobot = $a + $b + $c;
                                        break;
                                    case 3:
                                        $answerRobot = ($a + $b) / 2 * $c;
                                        break;
                                    case 4:
                                        $answerRobot = $a * $b * $c;
                                        break;
                                    case 5:
                                        $answerRobot = ($a + $b + $c) / 3;
                                        break;
                                    case 6:
                                        $answerRobot = pow($b, 2) - 4 * $a * $c;
                                        break;
                                }
                                $answerRobot = round($answerRobot, 2);


                                if ($answerUser == $answerRobot)
                                    $result = 'Тест пройден';
                                else
                                    $result = 'Тест не пройден';
                            }
                            else {
                                echo '<style>.showInResult { display: none; }</style>';

                                if (isset($_GET['name'])) {
                                    $name = $_GET['name'];
                                    $group = $_GET['group'];
                                    $about = $_GET['about'];
                                }
                            }
                        ?>
                        <form name="task" action="" method="POST">
                            <h2 class="mt-3 mb-4">Решение задачи</h2>
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">ФИО</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputName" name="name" value="<?php if (isset($name)) echo $name; ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputGroup" class="col-sm-2 col-form-label">Группа</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputGroup" name="group" value="<?php if (isset($group)) echo $group; ?>" required>
                                </div>
                            </div>
                            <div class="form-group row showInTask">
                                <label for="textareaAbout" class="col-sm-2 col-form-label">О вас</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="textareaAbout" rows="3" name="about" required><?php if (isset($about)) echo $about; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row showInResult">
                                <label for="input" class="col-sm-2 col-form-label">О вас</label>
                                <div class="col-sm-10">
                                    <div style="padding: .375rem .75rem;"><?php echo $about; ?></div>
                                </div>
                            </div>

                            <div class="form-group row showInTask" style="margin-top: 2rem;">
                                <label for="input" class="col-sm-2 col-form-label">Задача</label>
                                <div class="col-sm-10">
                                    <select class="custom-select" name="variant">
                                        <option value="1" selected>Площадь треугольника</option>
                                        <option value="2">Периметр треугольника</option>
                                        <option value="3">Площадь трапеции</option>
                                        <option value="4">Объём параллелепипеда</option>
                                        <option value="5">Среднее арифметическое</option>
                                        <option value="6">Дискриминант</option>
                                    </select>
                                </div>
                            </div>
                            <?php
                                if (isset($_POST['submit'])) {
                                    switch ($_POST['variant']) {
                                        case 1:
                                            $variant = 'Площадь треугольника';
                                            break;
                                        case 2:
                                            $variant = "Периметр треугольника";
                                            break;
                                        case 3:
                                            $variant = "Площадь трапеции";
                                            break;
                                        case 4:
                                            $variant = "Объём параллелепипеда";
                                            break;
                                        case 5:
                                            $variant = "Среднее арифметическое";
                                            break;
                                        case 6:
                                            $variant = "Дискриминант";
                                            break;
                                    }

                                    echo '<div class="form-group row" style="margin-top: 2rem;">
                                            <label for="input" class="col-sm-2 col-form-label">Задача</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" value="'.$variant.'"></div></div>';
                                }
                            ?>
                            <div class="form-group row">
                                <label for="inputA" class="col-sm-2 col-form-label">A</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputA" value="<?php if (isset($_POST['submit'])) { echo $a; } else { echo mt_rand(0,10000)/100; }?>" name="A" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputB" class="col-sm-2 col-form-label">B</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputB" value="<?php if (isset($_POST['submit'])) { echo $b; } else { echo mt_rand(0,10000)/100; }?>" name="B" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputC" class="col-sm-2 col-form-label">C</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputC" value="<?php if (isset($_POST['submit'])) { echo $c; } else { echo mt_rand(0,10000)/100; }?>" name="C" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputAnswerUser" class="col-sm-2 col-form-label">Ваш ответ</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputAnswerUser" name="answerUser" value="<?php if (isset($answerUser)) echo $answerUser; ?>" required>
                                </div>
                            </div>
                            <div class="form-group row showInResult">
                                <label for="inputAnswerRobot" class="col-sm-2 col-form-label">Прав. ответ</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputAnswerRobot" value="<?php echo $answerRobot; ?>">
                                </div>
                            </div>
                            <div class="form-group row showInResult">
                                <label for="inputResult" class="col-sm-2 col-form-label">Вывод</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputResult" value="<?php echo $result; ?>">
                                </div>
                            </div>

                            <div class="form-group row showInTask" style="margin-top: 2rem;">
                                <label for="input" class="col-sm-2 col-form-label">Версия</label>
                                <div class="col-sm-10">
                                    <select class="custom-select" name="version">
                                        <option value="browser" selected>Для просмотра в браузере</option>
                                        <option value="print">Для печати</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row showInTask">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkEmail" onclick="blockEmail = document.getElementById('blockEmail'); inputEmail = document.getElementById('inputEmail'); if (this.checked) { blockEmail.style.display = 'flex'; inputEmail.required = 'required'; } else { blockEmail.style.display = 'none'; inputEmail.removeAttribute('required'); }">
                                        <label class="form-check-label" for="checkEmail">
                                            Отправить результат теста по эл. почте.
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row showInTask" id="blockEmail">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Эл. почта</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail" name="email">
                                </div>
                            </div>
                            <?php
                                if(!empty($_POST['email'])) // настройки email
                                {
                                    $email = $_POST['email'];

                                    require 'class_phpmailer.php';
                                    require 'class_smtp.php';

                                    $mail = new PHPMailer;

                                    $mail->isSMTP();
                                    $mail->Host = 'smtp.yandex.ru';
                                    $mail->SMTPAuth = true;
                                    $mail->Username = 'viachik2001';
                                    $mail->Password = 'viachik999';
                                    $mail->SMTPSecure = 'ssl';
                                    $mail->Port = 465;
                                    $mail->CharSet="UTF-8";
                                    $mail->setFrom('viachik2001@yandex.ru');
                                    $mail->addAddress($email);

                                    // Письмо
                                    $out_text = "
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td>ФИО</td>
                                                            <td>$name</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Группа</td>
                                                            <td>$group</td>
                                                        </tr>
                                                        <tr>
                                                            <td>О вас</td>
                                                            <td>$about</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Задача</td>
                                                            <td>$variant</td>
                                                        </tr>
                                                        <tr>
                                                            <td>A</td>
                                                            <td>$a</td>
                                                        </tr>
                                                        <tr>
                                                            <td>B</td>
                                                            <td>$b</td>
                                                        </tr>
                                                        <tr>
                                                            <td>C</td>
                                                            <td>$c</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ваш ответ</td>
                                                            <td>$answerUser</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Прав. ответ</td>
                                                            <td>$answerRobot</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Результат</td>
                                                            <td>$result</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                ";
                                    $mail->isHTML(true);
                                    $mail->Subject = "Результат тестирования";
                                    $mail->Body    = "$out_text";

                                    if(!$mail->send()) {
                                        echo 'Сообщение не может быть отправлено';
                                        echo 'Ошибка: ' . $mail->ErrorInfo;
                                    }

                                    // выводим соответствующее сообщение в браузер
                                    echo '
                                        <div class="form-group row">
                                            <label for="input" class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <div style="padding: .375rem .75rem;">Результаты отправлены по почте: '.$email.'</div>
                                            </div>
                                        </div>
                                        ';
                                }
                            ?>
                            <div class="form-group row showInTask" style="margin-top: 2rem;">
                                <label for="input" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary" name="submit">Проверить</button>
                                </div>
                            </div>
                            <?php
                            if (isset($_POST['version'])){
                                if ($_POST['version'] == 'browser') {
                                    echo '<div class="form-group row" style="margin-top: 2rem;">
                                            <label for="input" class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <div style="padding: .375rem .75rem;"><a href="?name='.$name.'&group='.$group.'&about='.$about.'">Повторить тест</a></div>
                                            </div>
                                        </div>';
                                }
                            }
                            ?>
                        </form>
					</div>
				</div>
			</div>
		</main>
        <footer>
		<div class="footer-blog">			
          
          <span>Дата и время:
            <?php
            date_default_timezone_set('Europe/Moscow');
            echo 'Сформировано '.(date("d.m.Y")).' в '.(date("H-i:s"))
            ?></span>

       </div>
  </footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>