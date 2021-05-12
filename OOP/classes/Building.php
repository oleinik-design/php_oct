<?php


class Building
{
    /**
     * Длина строения
     * @var float|int
     */

    private $length;

    /**
     * Ширина строения
     * @var float|int
     */
    private $width;

    /**
     * Количество этажей
     * @var int
     */
    private $numberOfFloors;

    /**
     * Building constructor.
     * @param int $length
     * @param int $width
     * @param int $numberOfFloors
     */

    public function __construct($length, $width, $numberOfFloors)
    {

        $this->length = $length;
        $this->width = $width;
        $this->numberOfFloors = $numberOfFloors;

    }


    /**
     * We calculate the area
     * @return float|int
     */



    public function getSquare()
    {
        return ($this->length * $this->width) * $this->numberOfFloors;
    }


    /**
     * Вывод в браузер значений.
     * @return string
     */


    public function __toString()
    {
        $showSquare = '<p>Площадь дома составляет' . '  '.$this->getSquare().' '.'метров &sup2; </p>'
        . PHP_EOL . '<p>Длина составляет '. $this->length.'метров &sup2; </p>'
        . PHP_EOL . '<p>Ширина составляет '. $this->width.'метров &sup2; </p>'
        . PHP_EOL . '<p>Количество этажей составляет '. $this->length.' штуки </p>';
        return $showSquare;// TODO: Implement __toString() method.
    }

}