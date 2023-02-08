<?php

function validate_mail($field){
	if ($field == "") return "EMail не введён\n";
      else if (!((strpos($field, ".") > 0) &&
                 (strpos($field, "@") > 0)) ||
                  preg_match("/[^a-zA-Z0-9.@_-]/", $field))
        return "Неправильный формат адреса электронной почты\n";
    return "";
}
function validate_name($field){
	$error = "";
	
	if($field == ""){ $error .= "Имя не введено!\n"; }
	if(preg_match("/^[А-ЯA-Z][а-яa-zА-ЯA-Z\-]{0,}\s[А-ЯA-Z][а-яa-zА-ЯA-Z\-]{1,}(\s[А-ЯA-Z][а-яa-zА-ЯA-Z\-]{1,})?$/", $field)){ $error .= "В имени и фамилии присуствуют русские или англискийе буквы\n"; }
	
	return $error;
}
function validate_rating($field){
	return (!$field <= 10) ? "Вы не установили свою оценку!\n" : "";
}
function validate_comment($field){
	return (strlen($field) > 500) ? "Максимальное количество символов для комментария - 500\n" : "";
}

function fix_string($string){
	if (get_magic_quotes_gpc()) $string = stripslashes($string);
    return htmlentities ($string);
}

?>
