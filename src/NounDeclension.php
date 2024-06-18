<?php
declare(strict_types=1);

namespace Stasya0903\NounDeclension;

class NounDeclension
{
    /**
     * @var array
     */
    private $titles;

    /**
     * Склоняем слово в зависимости от числительного
     * @param int $number Номер
     * @param bool $showNumber Нужно ли показывать номер перед существительным
     * @return string
     */
    public function declineByNumber(int $number, bool $showNumber = true): string
    {
        $numberPositive = abs($number);

        $cases = [2, 0, 1, 1, 1, 2];

        $key = $numberPositive % 100 > 4 && $numberPositive % 100 < 20
            ? 2
            : $cases[min($numberPositive % 10, 5)];

        return ( $showNumber ? "$number " : '' ) . $this->titles[ $key ];

    }

    /**
     * Задаем склонение существительного
     * @param string $one для одного - пример 1 яблоко
     * @param string $two для двух - пример 2 яблока
     * @param string $five для пяти - пример 5 яблок
     * @return void
     */
    public function setTitles(string $one, string $two, string $five)
    {
        $this->titles = [$one, $two, $five];
    }

}