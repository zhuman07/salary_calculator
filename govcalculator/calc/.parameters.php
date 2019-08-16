<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = array(
    "PARAMETERS" => array(
        "TYPE_EDITOR" => Array(
            "PARENT" => "SETTINGS",
            "NAME" => "Режим редактора",
            "TYPE" => "LIST",
            "VALUES" => array('TYPE_1' => 'Упрощенные редактор', 'TYPE_2' => 'Полной редактор'),
        ),

        'INIT_ID' => array(
            "PARENT" => "SETTINGS",
            "NAME" => "ID редатора (уникальный)",
            "TYPE" => "STRING",
            "DEFAULT" => '',
        ),
    )
);
?>