 <?php
function buttonElement($styleclass, $button, $text, $attr){
    //$btn1 = "<input class='$styleclass' type='$submit' value='$create' name='$name'>";
    //$btn = "<input class='$styleclass' type='$submit' value='$create' name='$name', ''>"; 
    $btn = "<button class='$styleclass' type='$button' >$text</button>";
    
}
    echo $btn;
    
    function buttonI($style, $type, $value, $name){
        $dc = "<input class='$style' type='$type' value='$value' name='$name' >";
        echo $dc;
    }
?>