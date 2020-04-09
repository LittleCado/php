<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>
    Мажаев Вячеслав Сергеевич, 191-321. Лабораторная работа № А-2. Циклические алгоритмы. Условия в алгоритмах. Табулирование функций.
    </title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="logo.jpg"></img>
    </header>

    <main>
        <div class="wrap">
            <?php // начало PHP-программы
            
                if( !isset($_GET['key']))
                    $_GET['store'] = '';
                else
                if( isset($_GET['key'])){
                    if(is_int((int)$_GET['key']))
                        $_GET['store'] .= $_GET['key'];
                }
                
                if( !isset($_GET['sum']))
                    $_GET['sum']=0;

                else
                if( isset($_GET['sum']))
                    $str = $_GET['sum'];
                    $str = (int)$str;
                    $str++;
                    $_GET['sum'] = $str;


                echo '<div class="result">'.$_GET['store'].'</div>'; // выводим содержимое хранилища
            ?>
    
            <div class="nums">
                <a class="num" href="?key=1&store=<?php echo $_GET['store']; echo '&sum='; echo $_GET['sum'];?>">1</a>
                <a class="num" href="?key=2&store=<?php echo $_GET['store']; echo '&sum='; echo $_GET['sum'];?>">2</a>
                <a class="num" href="?key=3&store=<?php echo $_GET['store']; echo '&sum='; echo $_GET['sum'];?>">3</a>
                <a class="num" href="?key=4&store=<?php echo $_GET['store']; echo '&sum='; echo $_GET['sum'];?>">4</a>
                <a class="num" href="?key=5&store=<?php echo $_GET['store']; echo '&sum='; echo $_GET['sum'];?>">5</a>
                <a class="num" href="?key=6&store=<?php echo $_GET['store']; echo '&sum='; echo $_GET['sum'];?>">6</a>
                <a class="num" href="?key=7&store=<?php echo $_GET['store']; echo '&sum='; echo $_GET['sum'];?>">7</a>
                <a class="num" href="?key=8&store=<?php echo $_GET['store']; echo '&sum='; echo $_GET['sum'];?>">8</a>
                <a class="num" href="?key=9&store=<?php echo $_GET['store']; echo '&sum='; echo $_GET['sum'];?>">9</a>
                <a class="num" href="?key=0&store=<?php echo $_GET['store']; echo '&sum='; echo $_GET['sum'];?>">0</a>
            </div>
            <div class="reset">
                <a href="index.php?sum=<?php echo $_GET['sum'];?>">СБРОС</a>
            </div>
        </div>
    </main>

    <footer>
        <?php
            echo $_GET['sum'];
        ?>
    </footer>
</body>
</html>