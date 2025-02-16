<?php

use Bitrix\Main\Application;
use Bitrix\Main\Context;
use Bitrix\Iblock\PropertyTable;

class CIBlockPropertyFileStringHtml
{
    public function GetUserTypeDescription()
    {
        return [
            "PROPERTY_TYPE" => "S",
            "USER_TYPE" => "file_string_html",
            "DESCRIPTION" => "Файл + Строка + HTML",
            "GetPropertyFieldHtml" => [$this, "GetPropertyFieldHtml"],
            "GetPropertyFieldHtmlMulty" => [$this, "GetPropertyFieldHtmlMulty"],
            "GetAdminListViewHTML" => [$this, "GetAdminListViewHTML"],
            "ConvertToDB" => [$this, "ConvertToDB"],
            "ConvertFromDB" => [$this, "ConvertFromDB"],
            "GetSettingsHTML" => [$this, "GetSettingsHTML"],
            "GetDefaultValue" => [$this, "GetDefaultValue"],
        ];
    }

    public function GetPropertyFieldHtml($property, $value, $strHTMLControlName)
    {
        $html = '';
        $html .= '<input type="text" name="'.$strHTMLControlName['NAME'].'[VALUE]" value="'.htmlspecialcharsbx($value['VALUE']).'" />';
        $html .= '<input type="file" name="'.$strHTMLControlName['NAME'].'[FILE]" />';
        $html .= '<textarea name="'.$strHTMLControlName['NAME'].'[HTML]">'.htmlspecialcharsbx($value['HTML']).'</textarea>';

        return $html;
    }

    public function GetPropertyFieldHtmlMulty($property, $value, $strHTMLControlName)
    {
        $result = '';
        foreach ($value as $val) {
            $result .= $this->GetPropertyFieldHtml($property, $val, $strHTMLControlName) . '<br/>';
        }
        return $result . '<button type="button" onclick="addRow(this)">Добавить</button>';
    }

    public function GetAdminListViewHTML($property, $value, $strHTMLControlName)
    {
        return htmlspecialcharsbx($value['VALUE']).' (файл: '.htmlspecialcharsbx($value['FILE']).')';
    }

    public function ConvertToDB($property, $value)
    {
        return [
            'VALUE' => $value['VALUE'],
            'FILE' => $value['FILE'],
            'HTML' => $value['HTML'],
        ];
    }

    public function ConvertFromDB($property, $value)
    {
        return $value;
    }

    public function GetSettingsHTML($property, $strHTMLControlName)
    {
        return '';
    }

    public function GetDefaultValue()
    {
        return [];
    }
}

// Регистрация пользовательского типа свойства
AddEventHandler("iblock", "OnIBlockPropertyBuildList", function() {
    return (new CIBlockPropertyFileStringHtml())->GetUserTypeDescription();
});
