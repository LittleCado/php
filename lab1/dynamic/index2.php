<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <?php 
        $title='Мажаев Вячеслав Сергеевич, 191-321. Лабораторная работа № А-1. Простейшая программа на PHP. Конвертация статического контента в динамический.'; 
        echo '<title>'.$title.'</title>';
    ?> 
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

            <a href="
                <?php 
                    $name='Контакты'; 
                    $link='index3.php'; 
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
        </nav>
    </header>
    <main>
        <div class="change-block">
            <h1>BMW Group</h1>
            <?php echo '<img src="img/2page/'.(date('s')%2 + 1).'.jpg" alt="меняющаяся фотография">'?>
        </div>
        <div class="cars">
            <h2>Наши автомобили</h2>
            <div class="container">
                <div class="car">
                    <img src="img/x2.png" alt="">
                    <h3>BMW X2</h3>
                    <p>от 2 300 000 руб</p>
                </div>
                <div class="car">
                    <img src="img/m2.jpg" alt="">
                    <h3>BMW M2</h3>
                    <p>от 4 900 000 руб</p>
                </div>
                <div class="car">
                    <img src="img/m5.jpg" alt="">
                    <h3>BMW M5</h3>
                    <p>от 8 280 000 руб</p>
                </div>
            </div>
        </div>
        <div class="table">
            <h2>Технические характеристики</h2>
            <table>
                <tbody>
                    <?php
                        echo 
                        '<tr>
                            <td>Х2</td>
                            <td>Абсолютно уникальный. Экстремально необычный автомобиль. Новый BMW X2 с первого взгляда показывает свою спортивную сущность. Мощный и атлетичный, он предлагает динамику и манёвренность, которые в этом классе автомобилей не имеют себе равных. В сочетании с высококачественным дизайном интерьера и многочисленными инновационными технологиями – это экспрессивный герой новой эры. Дело только за Вами. Вы готовы?</td>
                            <td>от 2 300 000 Р</td>
                        </tr>'
                    ?>
                    <tr>
                        <td><?php echo 'М2' ?></td>
                        <td><?php echo 'Вдохновляющий. Спортивный. Независимый. BMW M2 Competition — это чистый адреналин, воплощенный в каждой детали. В передней части кузова выделяются увеличенные воздухозаборники и полноразмерная фирменная решетка радиатора с эмблемой M2. Характерная линия купе проходит от внушительного капота до атлетичной задней части автомобиля. Выразительные 19-дюймовые легкосплавные диски M создают атмосферу динамичного напряжения, а «жабры» M с надписью M2 и наружные зеркала заднего вида M в цвет кузова подчеркивают спортивный характер модели.' ?></td>
                        <td><?php echo 'от 4 900 000 Р' ?></td>
                    </tr>
                    <tr>
                        <td>VW Touareg</td>
                        <td>светодиодные фары ближнего и дальнего света, дневные ходовые огни кожаный мультируль с обогревом обивка внутренних боковин и центральной части сидений кожей vienna навигационная система discover pro, дисплей 9 датчики парковки спереди и сзади<div>интерфейс app-connect (apple carplay, android auto, mirrorlink)</td>
                        <td>от 8 280 000 Р</td>
                    </tr>
                </tbody>
            </table>
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