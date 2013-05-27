$text = trim($text);
    while ($text != stripslashes($text)) { $text = stripslashes($text); }    
    $text = strip_tags($text,"<b><i><u>");
    $text = preg_replace("/(?<!http:\/\/)www\./","http://www.",$text);
    $text = preg_replace( "/((http|ftp)+(s)?:\/\/[^<>\s]+)/i", "<a href=\"\\0\" target=\"_blank\">\\0</a>",$text);
