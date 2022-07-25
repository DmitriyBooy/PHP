<?php
$name = readline("Как вас зовут?");

$oneCase = readline("Какая задача стоит перед вами сегодня?");
$oneTime = readline("Сколько примерно времени эта задача займет?");

$twoCase = readline("Какая задача стоит перед вами сегодня?");
$twoTime = readline("Сколько примерно времени эта задача займет?");

$threeCase = readline("Какая задача стоит перед вами сегодня?");
$threeTime = readline("Сколько примерно времени эта задача займет?");

echo("{$name}, сегодня у вас запланировано 3 приоритетных задачи на день:
- ${oneCase} (${oneTime}ч)
- ${twoCase} (${twoTime}ч)
- ${threeCase} (${threeTime}ч)
");
