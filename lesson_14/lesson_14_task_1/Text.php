<?php

namespace Text;

class Text
{
    public string $text;

    /**
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function __toString(): string
    {
        return $this->text;
    }

    static public function cutWord($text): string
    {

        $str = '';
        $arrStr = explode(" ", $text);
        $arr2 = [];
        foreach ($arrStr as $value) {
            if (iconv_strlen($value) > 7) $value = mb_strimwidth("$value", 0, 7, "*");
            $arr2[] = $value;
            $str = implode(" ", $arr2);
        }
        return $str;
    }
}