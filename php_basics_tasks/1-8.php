    <?php
    header('Content-Type: text/html; charset=utf-8');
    /* 1. Создайте переменную name и присвойте ей значение, содержащее ваше имя, например "Иннокентий". */
        $name = "Sergiy";
        echo $name;
    /* 2. Создайте переменную age и присвойте ей значение, содержащее ваш возраст, например 20. */   
        $age = 20;
        echo "<br/>$age";
    /* 3. Выведите с помощью echo фразу "Меня зовут: %ваше_имя%", например: "Меня зовут: Иннокентий". */
        echo "<br/>Меня зовут: $name" . ".";
    /* 4. Выведите фразу "Мне %ваш_возраст% лет", например: "Мне 20 лет". */
        echo "<br/>Мне $age лет.";
    /* 5. Напишите конструкцию if, которая выводит фразу: "Вам еще работать и работать" при условии, 
    что значение переменной age попадает в диапазон чисел от 18 до 59 (включительно). */
        if ($age>=18 && $age<=59)
        {
            echo "<br/>Вам еще работать и работать";
        };
    /* 6. Расширьте конструкцию if из п.5, выводя фразу: "Вам пора на пенсию" при условии, что значение переменной age больше 59. */
        $age=63;
        echo "<br/>Мне $age лет.";
        if ($age>=18 && $age<=59)
        {
            echo "<br/>Вам еще работать и работать";
        } elseif ( $age>59)
        {
            echo "<br/>Вам пора на пенсию";
        };
    /* 7. Расширьте конструкцию if из п.5-6, выводя фразу: "Вам еще рано работать" при условии, 
    что значение переменной age попадает в диапазон чисел от 0 до 17 (включительно). */
        $age=15;
        echo "<br/>Мне $age лет.";
        if ($age>=18 && $age<=59)
        {
            echo "<br/>Вам еще работать и работать";
        } elseif ( $age>59)
        {
            echo "<br/>Вам пора на пенсию";
        } elseif ($age>=0 && $age<=17)
        {
             echo "<br/>Вам еще рано работать";
        };
    /* 8. Расширьте конструкцию if из п.5-7, выводя фразу: "Неизвестный возраст" при условии, 
    что значение переменной age является отрицательным числом, или вовсе числом не является.*/
        $age="fnd";
        if(is_int($age)&&$age>=0){
            echo "<br/>Вам $age лет.";
            if ($age>=18 && $age<=59)
            {
                echo "<br/>Вам еще работать и работать";
            } elseif ( $age>59)
            {
                echo "<br/>Вам пора на пенсию";
            } elseif ($age>=0 && $age<=17)
            {
                 echo "<br/>Вам еще рано работать";
            }
        }
        else {
            echo "<br/>Неизвестный возраст";
        };
    ?>

