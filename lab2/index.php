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
    <?php
        $x = 11; // начальное значение аргумента
        $encounting = 2; // количество вычисляемых значений
        $step = 0; // шаг изменения аргумента
        $type = 'A'; // тип верстки
        $min_value=-30; // минимальное значение, останавливающее вычисления
        $max_value=100; // максимальное значение, останавливающее вычисления
        $max_f=0;
        $min_f=0;
        $help=0;
        $sum=0;

        switch ($type) {
            case 'B':
                echo '<ul>';
                break;

            case 'C':
                echo '<ol>';
                break;

            case 'D':
                echo '<table>';
                break;
            
            default:
                break;
        }

        // цикл с заданным количеством итераций
        for( $i=0; $i < $encounting; $i++, $x+=$step ){

            if ($x <= 10)
                $f = 3*$x + 9;
            else if ($x < 20){
                if($x == 11){
                    $f = 'error';
                    $help--;
                }
                else
                    $f = ($x + 3)/($x*$x-121);
            }
            else
                $f = $x*$x*4 - 11;
            $help++;

            if (!is_string($f)){
                if($i == 0){
                    $min_f = $f;
                    $max_f = $f;
                }
                if($min_f > $f)
                    $min_f = $f;

                if($max_f < $f)
                    $max_f = $f;

                $sum+=$f;
            }

            switch ($type) {
                case 'A':
                    echo 'f('.$x.')= ';
                    if (is_string($f))
                        echo $f; 
                    else echo round($f,3);
                    if ($i < ($encounting - 1))
                        echo '<br>';
                    break;

                case 'B':
                case 'C':
                    echo '<li>f('.$x.')= ';
                    if (is_string($f))
                        echo $f;
                    else echo round ($f, 3);
                    echo '</li>';
                    break;
    
                case 'D':
                    echo '<tr>
                            <td>'.$i.'</td>
                            <td>';
                            echo 'f('.$x.')</td>
                            <td>';
                                if (is_string($f))
                                    echo $f;
                                else 
                                    echo round($f, 3);
                                    echo '</td>
                        </tr>';
                    break;
    
                case 'E':
                    echo '<div class="item">f('.$x.')= ';
                    if (is_string($f))
                        echo $f;
                    else
                        echo round($f, 3);
                    echo '</div>';
    
            } // выводим значение функции
            
            if( $f >= $max_value || $f < $min_value ) // если вышли за рамки диапазона
                break;
        }

        switch ($type){
			case 'B':
				echo '</ul>';
				break;
			case 'C':
				echo '</ol>';
				break;
			case 'D':
				echo '</table>';
				break;

			default:
				break;
        }
        
        if ($help == 0){
            $help = 'error';
            echo '<p>Минимальное значение = '.$help.'<br>Максимальное значение = '.$help.'<br>Сумма = '.$help.'<br>Среднее значение = '.$help.'</p>';
        }
        else{
            $help = $sum / $help;
            echo '<p>Минимальное значение = '.round($min_f, 3).'<br>Максимальное значение = '.round($max_f, 3).'<br>Сумма = '.round($sum, 3).'<br>Среднее значение = '.round($help, 3).'</p>';
        }
    ?>
    </main>

    <footer>
        <?php
            echo "Тип верстки: $type";
        ?>
    </footer>
</body>
</html>