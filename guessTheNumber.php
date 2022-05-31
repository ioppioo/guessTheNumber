<?php

$randomNumber = random_int(1, 100);

do {
    echo "Введите число от 1 до 100: ";
    $takeNumber = (int)readline();

    if ($takeNumber < $randomNumber) {
        echo "Введеное число меньше загаданного! \n";
    }

    if ($takeNumber > $randomNumber) {
        echo "Введеное число больше загаданного! \n";
    }

} while ($takeNumber !== $randomNumber);

echo "Верно! Было загадано: {$takeNumber}!";
