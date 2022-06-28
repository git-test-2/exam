<?php
/**
 * string $text_message - текст что выводтся в сообщении
 * string $type_message - success, danger, warning, secondary
 */

class Flash
{
    static function message($text_message, $type_message) { //static - вызывать метод без создания класса
        $_SESSION['message'] = $text_message;
        $_SESSION['type_message'] = $type_message;
    }
}