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
                    $name='BMW'; 
                    $link='index2.php'; 
                    $current_page=false; 
                    echo $link;
                ?>"
                <?php
                    if ($current_page) 
                        echo ' class="active">';
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
                        echo ' class="active">'; 
                    echo '>';
                    echo $name; 
                ?>
            </a>
        </nav>
    </header>
    <main>
        <div class="change-block">
            <h1>Volkswagen Group</h1>
            <?php echo '<img src="img/1page/'.(date('s')%2 + 1).'.jpg" alt="меняющаяся фотография">'?>
        </div>
        <div class="cars">
            <h2>Наши автомобили</h2>
            <div class="container">
                <div class="car">
                    <img src="img/golf.jpg" alt="">
                    <h3>VW Golf</h3>
                    <p>от 1 200 000 руб</p>
                </div>
                <div class="car">
                    <img src="img/tiguan.jpg" alt="">
                    <h3>VW Tiguan</h3>
                    <p>от 1 800 000 руб</p>
                </div>
                <div class="car">
                    <img src="img/touareg.jpg" alt="">
                    <h3>VW Touareg</h3>
                    <p>от 2 400 000 руб</p>
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
                            <td>VW Golf</td>
                            <td>дневные ходовые огни 4 стальных диска 6j x 15 центральный замок без функции safelock система abs фронтальные подушки безопасности для водителя и переднего пассажира кондиционер climatic электрические стеклоподъёмники подсветка багажника</td>
                            <td>от 1 200 000 Р</td>
                        </tr>'
                    ?>
                    <tr>
                        <td><?php echo 'VW Tiguan' ?></td>
                        <td><?php echo 'многофункциональное рулевое колесо с кожаной отделкой и подогревом подогрев передних сидений легкосплавные колесные диски montana 7j x 17 система контроля дистанции front assist с функцией экстренного торможения city emergency braking трёхзонная система климат-контроля air care climatronic с фильтром пыльцы аудиосистема composition media электромеханический стояночный тормоз с системой autohold подогрев форсунок омывателя' ?></td>
                        <td><?php echo 'от 1 800 000 Р' ?></td>
                    </tr>
                    <tr>
                        <td>VW Touareg</td>
                        <td>светодиодные фары ближнего и дальнего света, дневные ходовые огни кожаный мультируль с обогревом обивка внутренних боковин и центральной части сидений кожей vienna навигационная система discover pro, дисплей 9 датчики парковки спереди и сзади<div>интерфейс app-connect (apple carplay, android auto, mirrorlink)</td>
                        <td>от 2 400 000 Р</td>
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