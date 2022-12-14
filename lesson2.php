<?php


// true             правда
// false            ложь
// !                инвертирует значение (!true будет ложь, а !false будет правда)
// ==               Не строгое равенство
// ===              Строгое равенство (с учетом типа данных)
// !=               Не строгое неравенство
// !==              Строгое не равенство (с учетом типа данных)
// <                Меньше
// >                Больше
// <=               Меньше или равно
// >=               Больше или равно
// OR, ||           Логическое ИЛИ
// AND, &&          Логическое И

// true == !false;

// Логическое ИЛИ — специальное выражение, которое в результате равняется истине, когда хотя бы один участник сравнение истин. 
// $isGymCloseToMe = false; // Есть ли рядом спортзал. Укажем что нет, т.е. false 
// $isGymCheap = true; // Услуги спортзала стоят недорого. Укажем истину, т.е. true

// var_dump($isGymCloseToMe or $isGymCheap); // bool(true)
// но чаще используем так:
// var_dump($isGymCloseToMe || $isGymCheap); // bool(true)

// Любые подобные выражения необязательно состоят из двух условий, они могут включать бесконечное их множество.
// $isGymCloseToMe = false;
// $isGymCheap = true;
// $isGymNew = false;
// $isGymSuitable = $isGymCloseToMe || $isGymCheap || $isGymNew;
// var_dump($isGymSuitable); // bool(true)

// False будет получен только в том случае, если все значения равны False.
// $isGymCloseToMe = false;
// $isGymCheap = false;
// $isGymNew = false;
// $isGymSuitable = $isGymCloseToMe || $isGymCheap || $isGymNew;
// var_dump($isGymSuitable); // bool(false)

// Другой вид сравнения — логическое И. Оно равняется истине, только если все значения равны истине. 
// $isGymCloseToMe = true;
// $isGymCheap = true;
// $isGymSuitable = $isGymCloseToMe && $isGymCheap;
// var_dump($isGymSuitable); // bool(true)

// Соответственно, если хотя бы одно значение не будет равно истине, всё условное выражение, в результате, вернёт ложь (false).
// var_dump(true && true); // bool(true)
// var_dump(false && true); // bool(false)
// var_dump(true && false); // bool(false)

// Очень важно то, что мы можем комбинировать логическое И, ИЛИ и отрицание.
// true && false || true; // bool(true). Читаем слева направо.
// true && false вернет false, и поэтому 
// дальнейшее сравнение будет выглядеть как false || true
// false || true вернет true
// true && !false; // bool(true)
// true || !false; // bool(true)
// true && false || !true; // bool(false)

// Один из доступных трюков — представление true и false как единицу и ноль, а логическое И, логическое ИЛИ как умножение и сложение соответственно. Рассмотрим пример:
// true && true; // bool(true)
// то же самое, что и 
// 1 && 1; // bool(true)
// Можем представить как 1 * 1 (единица умноженная на единицу даст в результате тоже единицу)
// при этом
// true && false; // bool(false)
// то же самое, что и
// 1 && 0; // bool(false)
// Представляем как умножение: 1 * 0 = 0, т.е. false
// Логическое ИЛИ представляем как сложение, но значение не увеличиваем выше единицы
// true || false; // bool(true)
// то же самое, что и
// 1 || 0; // bool(true)
// Представим как сложение: 1 + 0 = 1, т.е. true 
// при этом
// false || false; // bool(false)
// то же самое, что и
// 0 || 0; // bool(false)
// Представляем как сложение: 0 + 0 = 0, т.е. false

// умножение имеет более высокий приоритет, чем сложение. Поэтому:
// false || true && false; // bool(false)
// Сначала выполняется умножение, т.е. часть с логическим И (true && false). Результат: false
// Потом уже выполняется сложение (false || false), и поэтому результат - false

// Если нам нужно повлиять на приоритет выполнения логической операции, как и в математике, мы используем круглые скобки.
// false && true || true && true; // bool(true)
//Сначала вычисляются две части с логическим И. false && true = false, true && true = true.
//Потом выполняется логическое ИЛИ: false || true =  true
// Но
// false && (true || true) && true; // bool(false)
//Мы смещаем приоритет на логическое ИЛИ, поэтому сначала выполняется true || true = true
//Теперь сравнение имеет такой вид: false && true && true. Выполняется слева направо.
// false && true = false. И еще раз false && true = false. 

// Внимание! Если вы используете комбинированное условие, состоящее из логических И, ИЛИ, 
// обязательно обращайте внимание на приоритет выполнения. 
// Подобные ситуации могут ставить в тупик и порой очень сложно обнаруживаются.

// Первое значение      Второе значение     И (&&)          ИЛИ ( || )
// 0 (false)            0 (false)           0 (false)       0 (false)
// 0 (false)            1 (true)            0 (false)       1 (true)
// 1 (true)             0 (false)           0 (false)       1 (true)
// 1 (true)             1 (true)            1 (true)        1 (true)

//------------------------------------------------------------------------------
// Условные конструкции IF, ELSEIF, ELSE

// if ($condition) {
//     // какой-то код, которые выполнится если $condition = true
// } else {
//     // другой код, который выполнится в любой другой ситуации
// }

//Пример блока IF:
// $number = 5;
// if ($number > 3) {
//     $number -= 3;
// }
// echo $number; // 2

// В PHP существует такая вариация оформления условных конструкций, при которой могут 
// быть опущены фигурные скобки тела условия. Это допустимо в тех случаях, когда в теле 
// выполняется только одна операция. Например:
// $number = 3;
// if ($number > 3)
//     $number -= 3;
// else
//     $number = 10;
// echo $number; // 10

// Внимание! Использование условных конструкций без фигурных скобок может встречаться в коде очень часто, 
// но мы рекомендуем использовать явно обозначенное тело условия всегда. Это важно для формирования корректных 
// привычек оформления кода, которые практикуются в профессиональных командах, а также диктуются требованиями 
// стандарта оформления кода PSR-12. 

// Оператор elseif
// $number = 5;
// if ($number > 3) {
//     echo 'Число больше трех';
// } elseif ($number <= 3) {
//     echo 'Число меньше или равно трем';
// }

// Поговорим о порядке выполнения подобного кода. Сначала будет рассмотрено условие, указанное оператору if. 
// Если оно выполняется, интерпретатор выполнит тело оператора if и проигнорирует elseif. 
// Если же условие не будет выполнено, PHP обратится к объявленному следующим по порядку оператору elseif и проверит его условие. 
// Если оно выполнится, начинается выполнение тела elseif.
// Важной особенностью elseif является то, что вы можете использовать их в больших количествах и даже в комбинации с else.
// $time = (int) readline("Сколько примерно времени займет выполнение задачи?\n");
// if ($time == 8) {
//     echo 'Очень объемная задача и займет весь день';
// } elseif ($time > 8 && $time <= 16) {
//     echo 'Мы рекомендуем не забыть про сон. Задача займет больше одного дня';
// } elseif ($time > 16) {
//     echo 'Ого! Стоит запланировать пару дней под эту задачу';
// } elseif ($time == 0) {
//     echo 'Похоже вы ввели неправильное значение';
// } else {
//     echo 'Отлично! Похоже задача не займет много времени';
// }

// Внимание! Проверка условий комбинации if-elseif выполняется ровно до момент первого удовлетворения условия. 
// Это значит, что если мы попали в тело условия if, все объявленные далее операторы elseif будут проигнорированы 
// интерпретатором. В следующем коде приведен пример недостижимого блока кода:
// $number = 5;
// if ($number > 1) {
//     echo 'Все окей';
// } elseif ($number > 2) {
//     // При значении $number = 5 этот блок недостижим, потому что выполнится первое условие в if 
// }

// Switch
// Switch — другая условная конструкция, которая используется для улучшения восприятия 
// большой цепочки условий над единым значением, реализованных через if-elseif-else.
// Оформляется switch следующим образом:
// switch ($num) {
//     case 'возможное значение':
//         // Какие-то действия
//         break;
//     case 'другое возможное значение':
//         // Другие действия
//         break;
// }

// В круглых скобках после оператора switch обычно указывается переменная, значение
// которой будет сравниваться со всеми описанными case-значениями. Например:
// $number = 2;
// switch ($number) {
//     case 1:
//         echo 'Единица';
//         break;
//     case 2:
//         echo 'Двойка';
//         break;
//     case 3:
//         echo 'Тройка';
//         break;
// }
// Каждое возможное значение оформляется внутри тела оператора switch через ключевое 
// слово case, возможное значение и двоеточие. Все, что будет выполнено в этом случае, 
// размещается между символом двоеточия и оператором break.
// При этом break не является обязательным, но сильно влияет на поведение программы. 
// К примеру, если в примере выше в результате будет выведено слово «Двойка», то в 
// следующем примере сработают сразу несколько условий:
// $number = 2;
// switch ($number) {
//     case 1:
//         echo 'Единица';
//         break;
//     case 2:
//         echo 'Двойка'; // Мы попадем в этом условие, потому что $number = 2;
//     case 3:
//         echo 'Тройка'; // Но провалимся и в это сравнение, 
//         //потому что в предыдущем нет слова break;
//         break;
// }

// Может показаться, что функционал оператора switch уступает комбинации if-elseif, 
// потому что может оперировать только сравнению двух значений, но в действительности 
// это не так. В тех случаях, когда нам нужно провести сравнения вида $a > $b, или 
// вообще работать с другими переменными, используется следующий трюк: 
// $number = 2;
// switch (true) {
//     case $number > 2:
//         echo 'Значение больше двух';
//         break;
//     case $number <= 2:
//         echo 'Значение меньше или равно двум';
//         break;
// }
// Чтобы понять, как и почему это работает, давайте представим как интерпретатор выполнит этот код. 
// В качестве значения для сравнения (в круглых скобках после switch) указан «true». Следовательно, 
// это значение и будет сравниваться со всеми предложенными case-вариантами:
//     true == $number > 2: Посколько $number = 2, интерпретатор игнорирует этот блок;
//     true == $number <= 2: Условие выполнено, поэтому будет выполнен блок до break;

// Аналог else
// Как видите, это полноценная альтернатива для if-elseif. Но что же с else? Не обошлось и без этого. 
// Аналог else в конструкции switch является ключевое слово default. 
// Код, находящийся в его теле выполняется только в тех случаях, если не было выполнено 
// ни одного условия case-вариаций. Оформляется он следующим образом:
// $number = 3;
// switch (true) {
//     case $number <= 2:
//         echo 'Значение меньше или равно двум';
//         break;
//     default:
//         echo 'Значение больше двух';
//         break;
// }

// Теперь, когда у нас есть все необходимые инструменты для реализации switch, давайте перепишем пример из главы про elseif с его использованием.
// $time = (int) readline("Сколько примерно времени займет выполнение задачи?\n");
// switch (true) {
//     case $time == 8:
//         echo 'Очень объемная задача и займет весь день';
//         break;
//     case $time > 8 && $time <= 16:
//         echo 'Мы рекомендуем не забыть про сон. Задача займет больше одного дня';
//         break;
//     case $time > 16:
//         echo 'Ого! Стоит запланировать пару дней под эту задачу';
//         break;
//     case $time == 0:
//         echo 'Похоже вы ввели неправильное значение';
//         break;
//     default:
//         echo 'Отлично! Похоже задача не займет много времени';
//         break;
// }

// Тернарный оператор
// В работе программиста очень часто приходится реализовывать проверочные условные конструкции, 
// для того, чтобы обезопасить выполнение программы. К примеру, если вы реализуете простейший 
// калькулятор с функцией деления, вам необходимо убедиться в том, что пользователь не ввёл 
// в качестве делителя ноль, или даже строку. 
// $firstNumber = (int) readline('Введите делимое: ');
// $secondNumber = (int) readline('Введите делитель: ');
// if ($secondNumber === 0) {
//     $result = 0;
// } else {
//     $result = $firstNumber / $secondNumber;
// }
// echo $result;

// Подобное условие легко читается и просто реализуется, но из-за того, что проверки 
// такого рода выполняются в коде регулярно, со временем он превращается в бесконечное 
// полотно блоков if-else. Поэтому, для простейших сравнений-подстраховок в PHP реализован 
// тернарный оператор. Выглядит он следующим образом:
//     условие ? значение для true : значение для false;
// Например, приведенный выше код можно оформить следующим образом:
// $firstNumber = (int) readline('Введите делимое: ');
// $secondNumber = (int) readline('Введите делитель: ');
// $result = $secondNumber == 0 ? 0 : $firstNumber / $secondNumber;
// echo $result;
// Важно то, что тернарный оператор именно возвращает какое-то значение. 
// Это значит, что в него нельзя поместить функцию вывода текста, как echo().

// Данный инструмент может визуально сбивать с толку первое время. Важно уметь его 
// читать и понимать, так как используется он очень часто. Вот ещё пример использования оператора:
// $deliveryType = 'курьер';
// $deliveryPrice = $deliveryType == 'курьер' ? 500 : 200;
// echo $deliveryPrice == 0 ? 'Бесплатно' : $deliveryPrice;

// Также существует сокращённая версия тернарного оператора. Для её понимания, нам 
// потребуется вспомнить главу о динамическом преобразовании из прошлого урока.
// Мы знаем, что PHP выполняет автоматическое приведение типов там, где это возможно 
// и необходимо. Например: если мы передадим в тело условия оператора if пустую 
// строку — она будет преобразована в «false».
// $emptyString = '';
// var_dump((bool) $emptyString); // bool(false)
// var_dump((bool) 0); // bool(false)
// var_dump((bool) 0.0); // bool(false)
// var_dump((bool) null); // bool(false)
// var_dump((bool) 5); // bool(true)
// var_dump((bool) -2); // bool(true)
// var_dump((bool) 'строка'); // bool(true)
// Поэтому, мы можем не выполнять явного приведения к boolean при использовании тернарного оператора.
// Вместо этого
// echo $deliveryPrice == 0 ? 'Бесплатно' : $deliveryPrice;
// Можно использовать следующее
// echo !$deliveryPrice ? 'Бесплатно' : $deliveryPrice;
// Или
// echo $deliveryPrice ? $deliveryPrice : 'Бесплатно';
// Обратите особое внимание на последний пример. Мы проверяем корректность значения, 
// и если оно корректно, получаем его. Иначе, пользуемся запасным (в данном случае 
// это строка ‘Бесплатно’). Именно для таких случаев и используется сокращенная версия 
// тернарного оператора. Для его реализации просто отбросьте значение, стоящее после 
// вопросительного знака (?) и символом двоеточия (:).
// echo $deliveryPrice ?: 'Бесплатно';
// Работает точно также, как и полная версия
// echo $deliveryPrice ? $deliveryPrice : 'Бесплатно';

// Сокращённый тернарный оператор — очень полезная конструкция, позволяющая безопасно 
// и быстро устанавливать значения по-умолчанию для тех случаев, где данные могут не 
// прийти или прийти в некорректном виде.
// Но бывают случаи, когда необходимые значения могут поступить из нескольких источников 
// (например, разные переменные). Тернарный оператор может быть полезен и в таких случаях 
// и используется в виде цепочки.
// $previousProfileAge = null;
// $userAge = readline("Сколько вам лет?\n");
// $age = $userAge ?: $previousProfileAge ?: 0;
// Если в $userAge корректное значение, будем использовать его
// иначе, проверим, есть ли корректные данные в $previousProfileAge
// если да, используем их. Если нет, используем нуль

// Другой пример использования цепочки тернарных операторов — замена if - elseif - else конструкции.
// $number = 2;
// if ($number == 2) {
//     $message = 'Значение равно двум';
// } elseif ($number < 2) {
//     $message = 'Значение менее двух';
// } else {
//     $message = 'Значение больше двух';
// }
// Всю описанную выше конструкцию можно заменить на следующую
// $message = $number == 2 ? 'Значение равно двум' : ($number < 2 ? 'Значение меньше двух' : 'Значение больше двух');
// Но, как вы могли заметить, не смотря на явное сокращение объёмов кода, подобная конструкция 
// сильно усложняет восприятие. По этой причине ее использование рекомендуется только при 
// работе с простыми для восприятия значениями. 

//------------------------------------------------------------------------------
//Циклические конструкции
// Циклы — другая важная конструкция, использующаяся в большинстве языков программирования. 
// Они позволяют выполнять определённые участки кода несколько раз. Всего в PHP реализовано 
// четыре циклические конструкции: while, do-while, for и foreach. Но на этом уроке мы 
// разберём только первые три из них.

// Цикл while
// While, в буквальном переводе с английского, означает “до тех пор”. Данный цикл выполняет действия, 
// пока выполняются условия его выполнения. Внешний вид цикла очень похож на условную конструкцию if 
// и имеет следующий вид:
// $number = 0;
// while ($number < 2) {
//     echo "Current number is $number\n";
//     $number++;
// }
// Цикл объявляется указанием ключевого слово while и условия в круглых скобках. Действия, 
// которые будут выполняться, определяются в фигурных скобках. Повторяющийся в цикле код 
// (окружённый фигурными скобками) называют телом цикла. Каждое повторение блока кода в 
// цикле называют итерацией. Для примера, приведённый выше код выполнит всего 2 итерации. 
// Важно понимать, что условие цикла будет проверено только перед непосредственным входом 
// в тело и при попытке начала новой итерации. Это означает, что если условие цикла будет 
// нарушено внутри тела цикла, выполнение не будет прервано и продолжится до закрывающей 
// фигурной скобки.
// $number = 2;
// while ($number < 2) {
//     echo "Данный цикл даже не запустится. Потому что условие уже не выполнено";
// }
// while ($number < 10) {
//     $number += 10;
//     echo "Цикл все равно продолжит выполняться\n";
//     $number -= 9;
// }
// Поскольку программист сам определяет условие прекращения цикла, очень важно убедиться, 
// что условие задано корректно. В ином случае, вы можете столкнуться с бесконечным циклом. 
// Это может привести к серьёзным проблемам.
// Безусловно, существуют случаи, когда нам необходим именно бесконечный цикл. Чаще всего, 
// это может понадобиться при реализации сервисов, которые работают бесконечно (их называют «демонами»), 
// но подобный формат программ не характерен для PHP. Бесконечный цикл реализуется передачей 
// условия, которое выполняется всегда. Это может быть просто true.
// while (true) {
//     echo 'Это бесконечный цикл. Лучше не запускать';
// }
// Мы всё ещё можем прервать подобный цикл. Например, если условия, необходимые нам 
// для завершения выполнены где-то в теле цикла. Для этого используется ключевое слово break;
// $number = 0;
// while (true) {
//     echo "Итерация бесконечного цикла\n";
//     $number++;
//     if ($number > 10) {
//         break;
//     }
// }
// echo "Мы вышли из цикла\n";
// Давайте рассмотрим ещё несколько примеров использования цикла while. Например, мы 
// запрашиваем у пользователя числовое значение, и повторяем запрос каждый раз, когда 
// получаем неверные данные:
// $age = null;
// while (!$age) {
//     $age = (int) readline("Сколько вам лет?\n");
// }
// Или даже так:
// while (true) {
//     $age = (int) readline("Сколько вам лет?\n");
//     if ($age) {
//         break;
//     } else {
//         echo "Введите корректное числовое значение\n";
//     }
// }
// Цикл do-while
// Следующая циклическая конструкция — do-while, очень похожа на рассмотренный ранее 
// цикл while. Её отличие заключается в том, что условия цикла проверяется в конце, 
// а не начале итерации. Выглядит do-while следующим образом:
// $number = 0;
// do {
//     echo "Current value is $number\n";
//     $number++;
// } while ($number < 2); // Будет выполнено 2 итерации
// Важно! При использовании do-while после объявления условия цикла необходимо поставить символ точки с запятой (;).

// Абсолютно любой случай использования do-while может быть заменён применением цикла while. 
// По этой причине, он используется достаточно редко. Но у него есть одна особенность — тело 
// цикла будет выполнено как минимум один раз, потому что условие проверяется лишь в конце. 
// Для примера, перепишем код запроса возраста пользователя с использованием do-while:
// do {
//     $age = (int) readline("Сколько вам лет?\n");
// } while (!$age);
// Универсальный цикл for
// Использование циклов while и do-while удобно в случаях, когда нам не известно конечное 
// количество требуемых операций и условие необходимо проверять каждый раз. Но что, если 
// нам нужно выполнить код только определённое количество раз? Например, пять.
// $counter = 0;
// while ($counter < 5) {
//     echo "Iteration number $counter\n";
//     $counter++;
// }
// Реализация подобной логики не вызывает никаких проблем, но требует от нас инициализации 
// стартового значения ($counter = 0;), объявление условия прерывания ($counter < 5) 
// и увеличение сравниваемого значения ($counter++). Поскольку подобный случай очень 
// распространен, в языке программирования PHP, как и во многих других, реализован специальный 
// цикл — for. Выглядит он следующим образом:
// for ($counter = 0; $counter < 5; $counter++) {
//     echo "Iteration number $counter\n";
// }
// Случаи пропуска выражений в цикле for очень редкие, но важно понимать наличие такой возможности.
// После ключевого слова for в круглых скобках определяются три выражения. 
// Вычисляется один раз перед началом цикла. В нашем примере будет объявлена переменная $counter 
// со значением равным нулю;
// Условие, проверяемое в начале каждой итерации по аналогии с while. В нашем примере это проверка, 
// является ли значение переменной $counter меньшим по сравнению с числом 5. Цикл будет прерван, 
// как только это выражение будет равно false;
// Выражение, которое будет выполнено в конце каждой итерации. В нашам примере это увеличение 
// значения переменной $counter на единицу.
// Что интересно, вы можете опускать выражения в тех случаях, если они вам не нужны. Например, 
// таким образом можно реализовать бесконечный цикл со счетчиком итераций:
// for ($counter = 0; ; $counter++) {
//     echo "Iteration number $counter\n";
//     if ($counter > 1000) {
//         break; // Прервем цикл, чтобы не уйти в бесконечное выполнение
//     }
// }
// Или, бесконечный цикл без счетчика итераций:
// for (; ; ;) {
//     echo "Итерация\n"; // !!!Бесконечный цикл. Лучше не запускать
// }

// Стоит отметить, что при работе с бесконечными циклами всё же чаще используются циклы while. 
// Случаи пропуска выражений в цикле for очень редкие, но важно понимать наличие такой возможности.

// Другая важная возможность при работе с циклами — вложенность. Она позволяет выполнять циклы прямо внутри циклов. Пример:
// for ($i = 0; $i < 10; $i++) {
//     for ($j = 0; $j < 10; $j++) {
//         // Переменная $j будет обнуляться на каждой новой итерации первого цикла
//         echo "$i - $j\t"; // \t - символ табуляции
//     }
//     echo "\n"; // Просто переносим строку
// }
// Результатом выполнения данного блока кода будет некое подобие матрицы:
// 0 – 0   0 – 1   0 – 2   0 – 3   0 – 4   0 – 5   0 – 6   0 – 7   0 – 8   0 – 9
// 1 – 0   1 – 1   1 – 2   1 – 3   1 – 4   1 – 5   1 – 6   1 – 7   1 – 8   1 – 9
// 2 – 0   2 – 1   2 – 2   2 – 3   2 – 4   2 – 5   2 – 6   2 – 7   2 – 8   2 – 9
// 3 – 0   3 – 1   3 – 2   3 – 3   3 – 4   3 – 5   3 – 6   3 – 7   3 – 8   3 – 9
// 4 – 0   4 – 1   4 – 2   4 – 3   4 – 4   4 – 5   4 – 6   4 – 7   4 – 8   4 – 9
// 5 – 0   5 – 1   5 – 2   5 – 3   5 – 4   5 – 5   5 – 6   5 – 7   5 – 8   5 – 9
// 6 – 0   6 – 1   6 – 2   6 – 3   6 – 4   6 – 5   6 – 6   6 – 7   6 – 8   6 – 9
// 7 – 0   7 – 1   7 – 2   7 – 3   7 – 4   7 – 5   7 – 6   7 – 7   7 – 8   7 – 9
// 8 – 0   8 – 1   8 – 2   8 – 3   8 – 4   8 – 5   8 – 6   8 – 7   8 – 8   8 – 9
// 9 – 0   9 – 1   9 – 2   9 – 3   9 – 4   9 – 5   9 – 6   9 – 7   9 – 8   9 – 9

//------------------------------------------------------------------------------
// Оператор goto
// goto перенаправляет выполнение программы в определённое место. Для этого используются 
// особые метки, заканчивающиеся символом двоеточия (:).
// $number = 0;
// placeToReturn: // Это метка, к которой произойдет возврат
// echo "Current value is $number\n";
// $number++;
// // Если условие не будет задано, программа зациклится
// if ($number < 2) {
//     goto placeToReturn; // После слова goto указываем имя метки, к которой нужно перейти
// }
// В момент, когда итератор дойдет до оператора goto, произойдет «скачок» к метке «placeToReturn» 
// и выполнение продолжится с этого участка.
// Как видите, логика использования очень схожа с циклами, но данная конструкция очень 
// не рекомендуется к использованию. Считается, что практически любой код с goto может 
// быть переписан с использованием обычных циклов. Использование goto допускается в 
// тех случаях, когда реализация через циклы просто невозможна. В мире PHP существует 
// ряд библиотек, использующих данную конструкцию.
