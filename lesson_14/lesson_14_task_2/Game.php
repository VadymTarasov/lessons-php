<?php

namespace Game;

use Db\Db;

class Game
{
    public array $allCity;
    public string $userCity;

    /**
     * @param array $allCity
     * @param string $userCity
     */
    public function __construct(array $allCity, string $userCity)
    {
        $this->allCity = $allCity;
        $this->userCity = $userCity;
    }

    public function getAnswer(): string
    {
        $databases = new Db();
        $cityAllName = $databases->getAllCities();
        $arr2 = [];
        $gameCity = '';
        $userCity = $_POST['userCity'];
        $gameCity .= "Вы " . $userCity . " -> ";
        foreach ($cityAllName as $value) {
            if (mb_strtoupper(mb_strimwidth("$value", 0, 1)) == mb_strtoupper(mb_substr($userCity, -1))
                && !substr_count($_SESSION['allGameCity'], "$value"))
                $arr2[] = $value;
        }
        $gameCity .= "Компьютер " . reset($arr2);
        return $gameCity;
    }
    static public function textCheck(string $text): string
    {
        $text = trim($text);
        return mb_convert_case($_POST['userCity'], MB_CASE_TITLE, "UTF-8");
    }
}

