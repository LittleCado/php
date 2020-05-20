<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>
    Мажаев Вячеслав Сергеевич, 191-321. Лабораторная работа № А-5. Циклические алгоритмы. Условия в алгоритмах. Табулирование функций.
    </title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <img src="logo.jpg">
    <div class="main-menu" id="main_menu"><?php

        if(isset($_GET['content'])){
          $h = (int)$_GET['content'];
          $_GET['content'] = $h;

          if ($_GET['content'] > 9 || $_GET['content'] < 2){ // Защита
            $_GET['content'] = 2;
          }
        }


        echo '<a href="?html_type=TABLE';
        if (isset($_GET['content']))
            echo '&content='.$_GET['content'];
        echo '"';
        if (array_key_exists('html_type', $_GET) && $_GET['html_type'] == 'TABLE')
            echo ' class="selected"';
        echo '>Табличная вёрстка</a>';

        echo '<a href="?html_type=DIV';
        if (isset($_GET['content']))
            echo '&content='.$_GET['content'];
        echo '"';
        if (array_key_exists('html_type', $_GET) && $_GET['html_type'] == 'DIV')
            echo ' class="selected"';
        echo '>Блочная вёрстка</a>';
    ?></div>
	</header>

	<main>
          <div class="product-menu"><?php
            echo '<a href="';
            if (isset($_GET['html_type']))
              echo '?html_type='.$_GET['html_type'];
            else echo '?html_type=TABLE';
            echo '"';
            if (!isset($_GET['content'])) echo ' class="selected"';
            echo '>Вся таблица умножения</a>';

            for ($i = 2; $i < 10; $i++) {
              echo '<a href="?';
              if (isset($_GET['html_type']))
                echo 'html_type='.$_GET['html_type'].'&';
              else echo 'html_type=TABLE&';
              echo 'content='.$i.'"';
              if (isset($_GET['content']) && $_GET['content'] == $i)
                echo ' class="selected"';
              echo '>Таблица умножения на '.$i.'</a>';
            }
          ?></div>
        <div class="container">
          <?php
            function outNumAsLink($p) {				//ввывод числа
              if ($p < 10)
                if (array_key_exists('html_type', $_GET))
                  return '<a href="?html_type='.$_GET['html_type'].'&content='.$p.'">'.$p.'</a>';
                else
                  return '<a href="?html_type=TABLE&content='.$p.'">'.$p.'</a>';
              else return $p;
            }

            function outData($n) {					//счет без типа верстки
              if (array_key_exists('html_type', $_GET) && $_GET['html_type'] == 'DIV')
                for ($i = 2; $i < 10; $i++)
                  echo outNumAsLink($n).'x'.outNumAsLink($i).'='.outNumAsLink($n*$i).'<br>';
              else
                for ($i = 2; $i < 10; $i++)
                  if ($i != 9) echo outNumAsLink($n).'x'.outNumAsLink($i).'='.outNumAsLink($n*$i).'<br>';
                  else echo outNumAsLink($n).'x'.outNumAsLink($i).'='.outNumAsLink($n*$i);
            }

            function outTableForm() {				//вывод в табличной верстке
              echo '<table>';
              if (!isset($_GET['content']))
                for ($i = 2; $i < 10; $i++) {
                  if (($i == 2) || ($i == 6)) 
                  	echo '<tr>';
                  echo '<td>';
                  outData($i);
                  echo '</td>';
                  if (($i == 5) || ($i == 9)) echo '</tr>';
                }
              else {
                echo '<tr class="tabSingleRow"><td>';
                if($_GET['content'] > 9 && $_GET['content'] < 2)
                    outData(2);
                else
                    outData($_GET['content']);
                echo '</td></tr>';
              }
              echo '</table>';
            }

            function outDivForm() {					//вывод в блочной верстке
              if (!isset($_GET['content']))
                for ($i = 2; $i < 10; $i++) {
                  echo '<div class="divRow">';
                  outData($i);
                  echo '</div>';
                }
              else {
                echo '<div class="divSingleRow">';
                outData($_GET['content']);
                echo '</div>';
              }
            }

            if (!array_key_exists('html_type', $_GET)) 
            	outTableForm();
            if (isset($_GET['html_type']) && $_GET['html_type'] == 'TABLE')
            	outTableForm();
            else if (isset($_GET['html_type']) && $_GET['html_type'] == 'DIV')
              outDivForm();
            else if (isset($_GET['html_type']) && ($_GET['html_type'] != 'DIV' || $_GET['html_type'] != 'TABLE'))
            	outTableForm();
          ?>
        </div>
  </main>

  <footer>
		<div class="footer-blog">			
          <span>Тип вёрстки: <?php
            if (!isset($_GET['html_type']) || $_GET['html_type'] == 'TABLE') echo 'табличная';
            else echo 'блочная';
          ?></span>
          <span>Таблица умножения <?php
            if (!isset($_GET['content'])) echo '(полная)';
            else echo 'на '.$_GET['content'];
          ?></span>
          <span>Дата и время:
            <?php
            date_default_timezone_set('Europe/Moscow');
            echo 'Сформировано '.(date("d.m.Y")).' в '.(date("H-i:s"))
            ?></span>

       </div>
  </footer>
</body>
</html>