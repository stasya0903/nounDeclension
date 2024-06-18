# nounDeclension
Пакет генерирующий корректное склонение существительных с числительными
Данный пакет позволит вам решить проблему склонения существительных

## Установка

    composer require drandin/declension-nouns
## Использование

Создаем класс для склонений:

```php
<?php

require __DIR__ . '/../vendor/autoload.php';

$service = new Stasya0903\NounDeclension\NounDeclension();
```

#### `setTitles(string $one, string $two, string $five)`

Используем метод `setTitles` чтобы задать склонения существительного

```php
<?php

$service->setTitles('курс', 'курса', 'курсов');
```

#### `declineByNumber(int $number, bool $showNumber = true): string`

Метод `declineByNumber` возвращает существительное в соответствующем числительному склонении

```php
<?php

  echo $service->declineByNumber(7);
```

    
