<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles-map.css" rel="stylesheet">
    <title>Мажаев Вячеслав Сергеевич, 191-321. Лабораторная работа № А-1. Простейшая программа на PHP. Конвертация статического контента в динамический.</title>
</head>
<body>
    <header>
        <img src="img/logo.svg" style="height:80px" alt="">
        <nav>
            <a href="
                <?php 
                    $name='WV'; 
                    $link='index.php'; 
                    $current_page=false; 
                    echo $link;
                ?>"
                <?php
                    if ($current_page) 
                        echo ' class="active"';
                    echo '>';
                    echo $name; 
                ?>
            </a>
            
            <a href="
                <?php 
                    $name='BMW'; 
                    $link='index2.php'; 
                    $current_page=false; 
                    echo $link;
                ?>"
                <?php
                    if ($current_page) 
                        echo ' class="active"';
                    echo '>';
                    echo $name; 
                ?>
            </a>

            <a href="
                <?php 
                    $name='Контакты'; 
                    $link='index3.php'; 
                    $current_page=true; 
                    echo $link;
                ?>"
                <?php
                    if ($current_page) 
                        echo ' class="active"'; 
                    echo '>';
                    echo $name; 
                ?>
            </a>
        </nav>
    </header>
    <main>
        <h1>Где мы находимся?</h1>
        <div class="contacts">
            <div class="info">
                <div class="card">
                    <h2>Телефон:</h2>
                    <p>+7 985 959 1620</p>
                </div>
                <div class="card">
                    <h2>Адрес:</h2>
                    <p>
                        МКАД, 85-й километр, вл3с2, Москва
                    </p>
                </div>
                <div class="card">
                    <h2>Время работы:</h2>
                    <p>9:00-20:00 без выходных</p>
                </div>
            </div>
            <div class="map"><img src="img/map.png" alt=""></div>
        </div>
    </main>
    <footer>
        <p>Мажаев Вячеслав</p>
        <div class="date">
            <?php
                date_default_timezone_set('Europe/Moscow');
                echo 'Сформировано '.(date("d.m.Y")).' в '.(date("H-i:s"))
            ?>
        </div>
    </footer>
</body>
</html>