<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>
    Мажаев Вячеслав Сергеевич, 191-321. Лабораторная работа № А-2. Циклические алгоритмы. Условия в алгоритмах. Табулирование функций.
    </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link href="style.css" rel="stylesheet">
</head>
<body>
    <header>
        <img src="logo.jpg"></img>
    </header>

    <main>
    <div class="container">
				<div class="row">
					<div class="col-sm 12 col-md-12 col-lg-6 col-xl-6">
                        <h2 class="mt-3 mb-4">Массив</h2>
                        <form action="result.php" method="post" name="form-1">
                            <table id="elements">
                                <tr>
                                    <td class="element_row">
                                        <div class="form-group">
                                            <label for="element1">0-й элемент</label>
                                            <input type="text" class="form-control" name="element0" id="element0" autofocus>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <input type="button" value="Добавить элемент" class="pseudo-link mb-2" onClick="addElement('elements');">

                            <div class="form-group mt-4">
                                <label for="exampleFormControlSelect1">Способ сортировки</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="algoritm" required>
                                    <option value="1">Сортировка выбором</option>
                                    <option value="2">Пузырьковый алгоритм</option>
                                    <option value="3">Алгоритм Шелла</option>
                                    <option value="4">Алгоритм садового гнома</option>
                                    <option value="5">Быстрая сортировка</option>
                                    <option value="6">Встроенная функция PHP для сортировки по значению</option>
                                </select>
                            </div>
                            <input type="hidden" name="arrLength" id="arrLength" value="1">

                            <button type="submit" class="btn btn-primary mt-3">Сортировать</button>
                        </form>
					</div>
				</div>
			</div>
    </main>

    <footer>
        <div class="container">
                <div class="row">
                    <div class="col-sm 12 col-md-12 col-lg-12 col-xl-12">
                        <div class="scrollyeah" data-shadows="false">
                            <div>
                                <p class="small">Мажаев Вячеслав Сергеевич группа 191-321</p>
                            </div>
                    </div>
                 </div>
            </div>
    </footer>

    <script>
            function setHTML(element, txt) {
                if (element.innerHTML) {
                    element.innerHTML = txt;
                } else //Если функции innerHTML не существует, делаем всё вручную
                {
                    var range = document.createRange();
                    range.selectNodeContents(element);
                    range.deleteContents();
                    var fragment = range.createContextualFragment(txt);
                    element.appendChild(fragment);
                }
            }

            function addElement(table_name) {
                var t = document.getElementById(table_name);
                var index = t.rows.length; //индекс строки
                var row = t.insertRow(index); //Добавляем строку
                var cel = row.insertCell(0); //Добавляем ячейку
                cel.className = 'element_row'; //Задаём класс
                var celcontent = '<div class="form-group"><label for="element1">' + index + '-й элемент</label><input type="text" class="form-control" name="element' + index + '" id="element' + index + '"></div>'; //Контент ячейки
                setHTML(cel, celcontent); //Заполняем ячейку контентом
                var newid = 'element' + index;
                document.getElementById(newid).focus();
                //Заполняем данными скрытый элемент
                document.getElementById('arrLength').value = t.rows.length;
            }
        </script>
</body>
</html>