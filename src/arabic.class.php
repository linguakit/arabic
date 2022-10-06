<?php
namespace LinguaKit\Arabic;
class Arabic
{
    public function arabizi($input)
    {
        $input = str_replace('ض', 'D', $input);
        $input = str_replace('ص', 'S', $input);
        $input = str_replace('ث', 'th', $input);
        $input = str_replace('ق', 'q', $input);
        $input = str_replace('ف', 'f', $input);
        $input = str_replace('غ', 'gh', $input);
        $input = str_replace('ع', '3', $input);
        $input = str_replace('ه', 'h', $input);
        $input = str_replace('خ', 'kh', $input);
        $input = str_replace('ح', '7', $input);
        $input = str_replace('ج', 'j', $input);
        $input = str_replace('ة', 'a', $input);
        $input = str_replace('ش', 'sh', $input);
        $input = str_replace('س', 's', $input);
        $input = str_replace('ي', 'ii', $input);
        $input = str_replace('ب', 'b', $input);
        $input = str_replace('ل', 'l', $input);
        $input = str_replace('ا', 'aa', $input);
        $input = str_replace('ت', 't', $input);
        $input = str_replace('ن', 'n', $input);
        $input = str_replace('م', 'm', $input);
        $input = str_replace('ك', 'k', $input);
        $input = str_replace('ظ', 'DH', $input);
        $input = str_replace('ط', 'T', $input);
        $input = str_replace('ذ', 'dh', $input);
        $input = str_replace('د', 'd', $input);
        $input = str_replace('ز', 'z', $input);
        $input = str_replace('ر', 'r', $input);
        $input = str_replace('و', 'uu', $input);
        $input = str_replace('،', ',', $input);
        $input = str_replace('َ', 'a', $input);
        $input = str_replace('ِ', 'i', $input);
        $input = str_replace('ُ', 'u', $input);
        $input = str_replace('ء', '2', $input);
        $input = str_replace('أ', '2', $input);
        return $input;
    }
}
