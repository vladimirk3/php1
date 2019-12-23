<?php
    $h1 = '<h1>Заголовок</h1>';
    $title = '<title>My personal title</title>';
    $year = date("Y");
    echo "<!DOCTYPE html>";
    echo "<html lang=\"en\">";
    echo "<head>";
        echo "<meta charset=\"UTF-8\">";
        echo $title; //выводим тайтл страницы
    echo "</head>";

    echo "<body>";
    echo $h1; //выводим заголовок
    echo $year; //выводим текущий год
    echo "<br>";
    //задача про обмен значениями между двумя переменнми
    echo "<div>Используя только две переменные, поменяйте их значение местами. Например, если a = 1, b = 2, надо, чтобы получилось: b = 1, a = 2.</div>";
    $a = 1;
    $b = 2;
    $a += $b;
    $b = $a - $b;
    $a = $a - $b;
    echo "a=";
    echo $a;
    echo "<br>";
    echo "b=";
    echo $b;
    echo "<br>";
    ?>

<?php
        $a = 5;
        $b = '05';
        echo "var_dump($a == $b);";
        echo "<div style=\"margin-bottom: 2em\">True. При приведении типов строка приводится к int. При этом 0 в десятичной системе счисления отбрасывается и остаетя \"5\"</div>";
        echo "var_dump((int)'012345')";                        // Почему 12345?
        echo "<div style=\"margin-bottom: 2em\">12345. Приводится к int. При этом 0 в десятичной системе счисления отбрасывается и остаетя \"12345\"</div>";
        echo "var_dump((float)123.0 === (int)123.0)";
        echo "<div style=\"margin-bottom: 2em\">False. Так как используется операнд \"===\", то значит используется не только сравенение чисел, но и типов. в данному случае испоьлуются два разных типа int и float</div>";
        echo "var_dump((int)0 === (int)'hello, world')"; // Почему true?
        echo "<div style=\"margin-bottom: 2em\">True. Так как используется операнд \"===\", то значит используется не только сравенение чисел, но и типов. в данному случае типы совпадают - int</div>";
?>

<?php
        echo "Hello, World!";
    ?>
    <?php
        $name = "GeekBrains user";
        echo "Hello, $name!";
    ?>
    <?php
        define('MY_CONST', 100);
        echo MY_CONST;
    ?>

    <?php
        $int10 = 42;
        $int2 = 0b101010;
        $int8 = 052;
        $int16 = 0x2A;
        echo "Десятеричная система $int10 <br>";
        echo "Двоичная система $int2 <br>";
        echo "Восьмеричная система $int8 <br>";
        echo "Шестнадцатеричная система $int16 <br>";
    ?>

    <?php
        $precise1 = 1.5;
        $precise2 = 1.5e4;
        $precise3 = 6E-8;
        echo "$precise1 | $precise2 | $precise3";
    ?>

    <?php
        $a = 1;
        echo "$a";
        echo '$a';
      ?>
    <?php
        $a = 10;
        $b = (boolean) $b;
    ?>

    <?php
        $a = 'Hello,';
        $b = 'world';
        $c = $a . $b;
        echo $c;
    ?>

    <?php
        $a = 4;
        $b = 5;
        echo $a + $b . '<br>';    // сложение
        echo $a * $b . '<br>';    // умножение
        echo $a - $b . '<br>';    // вычитание
        echo $a / $b . '<br>';  // деление
        echo $a % $b . '<br>'; // остаток от деления
        echo $a ** $b . '<br>'; // возведение в степень
    ?>

    <?php
        $a = 4;
        $b = 5;
        $a += $b;
        echo 'a = ' . $a;
        $a = 0;
        echo $a++;     // Постинкремент
        echo ++$a;    // Преинкремент
        echo $a--;     // Постдекремент
        echo --$a;    // Предекремент
    ?>

    <?php
        $a = 4;
        $b = 5;
        var_dump($a == $b);  // Сравнение по значению
        var_dump($a === $b); // Сравнение по значению и типу
        var_dump($a > $b);    // Больше
        var_dump($a < $b);    // Меньше
        var_dump($a <> $b);  // Не равно
        var_dump($a != $b);   // Не равно
        var_dump($a !== $b); // Не равно без приведения типов
        var_dump($a <= $b);  // Меньше или равно
        var_dump($a >= $b);  // Больше или равно?>
    ?>

<?php
    echo "</body>
    </html>";
?>