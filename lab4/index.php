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
        $structure = array('', ' ', '*#*', 'Русский*Матем*Инфа#89*74*83', '*Матем*Инфа#89*74*83#Русский*Матем*Инфа#89*74*83');
        
        function isEmpty($str){
            return (!isset($str) || trim($str) == '');
        }

        function isEmptyTable($lines){
            //проверка на существование таблицы
            for ($i = 0; $i < count($lines); $i++){
                if (isset($lines[$i]) && strlen($lines[$i]) != 0){
                    return false;       //таблица существует
                    break;
                }
            }
            return true;
        }

        function parseLine($str, $maxLineLenght){ //разбираем строки
            $tds = explode('*', $str);
            $outLines = "<tr>";

            for ($i = 0; $i < count($tds); $i++){  //оборачиваем каждую ячейку в td
                $outLines .= '<td>'.$tds[$i].'</td>';
            }

            if (count(explode('*', $str)) < $maxLineLenght){  //если сумма ячеек в строке меньше максимальной длины строки
                $diff = $maxLineLenght - count(explode('*', $str));  
                for ($i = 0; $i < $diff; $i++){
                    $outLines .= '<td></td>';     // создаем пустые ячейке, если в строке введены не все ячейки
                }
            }

            $outLines .= "</tr>";
            return $outLines;
        }

        function parseTable($str){
            $lines = explode('#', $str);  //разбиваем на строки
            $maxLength = 0; // макс длина строки
            
            if (isEmptyTable($lines)){
                $outLines = '<p>В таблице нет строк</p>';
            }
            else{
                //берем первую строку за максмум
                if (count($lines) > 0 && !isEmpty($lines[0])){
                    $maxLength = count(explode('*', $lines[0]));
                }

                //поиск длины самой большой строки
                for ($i = 0; $i < count($lines); $i++){
                    if (!isEmpty($lines[$i]) && count(explode('*', $lines[$i])) > $maxLength){
                        $maxLength = count(explode('*', $lines[$i]));
                    }
                }

                //если длина так и осталась 0 значит в таблице нет ячеек
                if ($maxLength == 0){
                    $outLines = '<p>В таблице нет строк с ячейками</p>';
                }
                
                else if ($lines==0){//проверка на наличие пустых ячеек
                    $outLines = '<p>В таблице нет строк с ячейками</p>';
                }
                else{
                    $outLines = '<table>';

                    for ($i = 0; $i < count($lines); $i++){
                        //если длина строки 0 или строка пустая значит не выводим её так как как в ней нет ячеек
                        if (strlen($lines[$i]) == 0 || isEmpty($lines[$i])){
                            continue;
                        }
                        $outLines .= parseLine($lines[$i], $maxLength);
                    }
                    $outLines .= '</table>';
                }
            }
            return $outLines;
        }


        for ($i = 0; $i < count($structure); $i++){
            echo '<h2>Таблица №'.($i + 1).'</h2><br>';
            echo parseTable($structure[$i]).'<br>';
        }
    ?>
    </main>

    <footer>

    </footer>
</body>
</html>