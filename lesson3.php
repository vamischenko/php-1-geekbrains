<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <title>PHP-1 Урок 3</title>
</head>

<body>
    <div class="container">
        <div class="task">
            <h2>1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка</h2>
            <?php
                $i = 0;
                while ($i != 101 ){
                    if (($i % 3) == 0){
                        echo $i . '<br>';
                    }
                    $i++;
                }
            ?>

        </div>
        <hr>
        <div class="task">
            <h2>2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10</h2>
            <?php
                function getNumbers(){
                    $i = 0;
                    do {
                        if ($i == 0){
                            echo $i . ' - это ноль';    
                        } elseif (($i % 2) == 0){
                            echo $i . ' - чётное число';
                        } else {
                            echo $i . ' - нечетное число';
                        }
                        echo '<br>';
                        $i++;
                     } while ($i < 11);
                }
                
                getNumbers();
            ?>

        </div>
        <hr>
        <div class="task">
            <h2>3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области.</h2>
            <?php
                $regions[] =[
                    'name' => 'Московская область',
                    'cities' => ['Москва', 'Зеленоград', 'Клин',]
                ];
                $regions[] =[
                    'name' => 'Ленинградская область',
                    'cities' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт']
                ];
                $regions[] =[
                    'name' => 'Рязанская область',
                    'cities' => ['Касимов', 'Кораблино', 'Михайлов', 'Ряжск']
                ];

                foreach ($regions as $value){
                    echo $value['name'] . ':<br>';
                    foreach ($value['cities'] as $city){
                        echo ' - ' . $city . '<br>';
                    }
                    echo '<hr>';
                    
                }
            ?>
        </div>

        <div class="task">
            <h2>4. Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания. Написать функцию транслитерации строк</h2>
            <?php
                 $chars =[
                    'а' => 'a',   'б' => 'b',   'в' => 'v',
                    'г' => 'g',   'д' => 'd',   'е' => 'e',
                    'ё' => 'yo',   'ж' => 'zh',  'з' => 'z',
                    'и' => 'i',   'й' => 'j',   'к' => 'k',
                    'л' => 'l',   'м' => 'm',   'н' => 'n',
                    'о' => 'o',   'п' => 'p',   'р' => 'r',
                    'с' => 's',   'т' => 't',   'у' => 'u',
                    'ф' => 'f',   'х' => 'x',   'ц' => 'c',
                    'ч' => 'ch',  'ш' => 'sh',  'щ' => 'shh',
                    'ь' => '\'',  'ы' => 'y',   'ъ' => '\'\'',
                    'э' => 'e\'',   'ю' => 'yu',  'я' => 'ya',
                    'А' => 'A',   'Б' => 'B',   'В' => 'V',
                    'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
                    'Ё' => 'YO',   'Ж' => 'Zh',  'З' => 'Z',
                    'И' => 'I',   'Й' => 'J',   'К' => 'K',
                    'Л' => 'L',   'М' => 'M',   'Н' => 'N',
                    'О' => 'O',   'П' => 'P',   'Р' => 'R',
                    'С' => 'S',   'Т' => 'T',   'У' => 'U',
                    'Ф' => 'F',   'Х' => 'X',   'Ц' => 'C',
                    'Ч' => 'CH',  'Ш' => 'SH',  'Щ' => 'SHH',
                    'Ь' => '\'',  'Ы' => 'Y\'',   'Ъ' => '\'\'',
                    'Э' => 'E\'',   'Ю' => 'YU',  'Я' => 'YA',
                ];
            
                function trans($txt) {
                    global $chars;
                    return strtr($txt, $chars);       
                }
                
                echo trans("Тест тест тест");
            ?>
                <hr>
        </div>

        <div class="task">
            <h2>5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку</h2>
            <?php
                function replace($text){
                    return str_replace(' ', '_', $text);
                }
                echo replace("Тест тест тест");
            ?>
        </div>

        <div class="task">
            <h2>6. В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP. Необходимо представить пункты меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать</h2>
            <?php
            //меню без подменю
                $menu_items = ['Урок 1', 'Урок 2', 'Урок 3', 'contact'];
            ?>
                <ul id="menu">
                    <?php
                foreach($menu_items as $item){
                    echo "<li><a href='#'>$item</a></li>";
                }
                ?>
                </ul>
                <br>
                <ul id="menu2">
                    <?php
                //Меню с подменю
                    $items = [
                        'Урок 1' => [
                            'Урок1_1',
                            'Урок1_2',
                            'Урок1_3'
                        ],
                        'Урок 2' => [
                            'Урок2_1',
                            'Урок2_2',
                            'Урок2_3'
                        ],
                    ];
                    
                    foreach($items as $key => $value){
                        echo "<li><a href='#'>";
                        echo $key . "</a>";
                        echo '<ul>';
                            foreach($value as $subitem){
                                echo "<li><a href='#'>&nbsp;$subitem</a></li>";
                            }
                        echo '</ul>';
                        echo "</li>";
                    }
                        
                ?>
                </ul>
        </div>
        <hr>
        <div class="task">
            <h2>Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело цикла.</h2>
            <?php
                for($i = 0; $i < 10; print $i++){};
            ?>
        </div>

        <div class="task">
            <h2>8. Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».</h2>
            <?php
                 $regions =[
                    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
                    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
                    'Рязанская область' => ['Касимов', 'Кораблино', 'Михайлов', 'Ряжск']
                ];
                

                foreach ($regions as $rname => $cities){
                    foreach ($cities as $city){
                       // echo $target_city = ($city[0] == 'К')? ' - ' . $city . '<br>':'';
                        if (mb_substr($city, 0, 1) == 'К') {
                            echo $city . '<br>';
                        }
                    }
                
                }
            ?>
                <hr>
        </div>

        <div class="task">
            <h2>9. Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит транслитерацию и замену пробелов на подчеркивания</h2>
            <?php
               function getMyText($text){
                    $text = trans($text);
                    return replace($text);
               }
                
            echo getMyText('Пример какого-то текста');
            ?>
        </div>
    </div>

</body>

</html>
