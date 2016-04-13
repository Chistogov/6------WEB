<?php
//Div ,где: $dc-div,$s-style
function divs($dc,$s=''){
$form = '<div class=\''.$dc.'\' style=\''.$s.'\'>';
return $form;
}
//Окончания тегов ,где: $type-тип тега, $text-для lable
function ends($type,$text=''){
if ($type=='form') $form = '</form>';
if ($type=='label') $form = '<label>'.$text.'</label><br/>';
elseif ($type=='div') $form = '</div>';
return $form;
}
//Form, где: $fa-form action,$fc-form class,$fm-form method
function forms($fa,$id,$fm){
$form = '<form action=\''.$fa.'\' id=\''.$id.'\' method=\''.$fm.'\'>';
return $form;
}
//INPUT, где: $it-input type,$ic-input class,$in-input name,$iv-input value
function button($it,$in,$iv=''){
$form = '<input type=\''.$it.'\' name=\''.$in.'\' value=\''.$iv.'\' />';
return $form;
}
function inputs($it,$in,$ip,$iph,$rqd){
$form = '<input type=\''.$it.'\' name=\''.$in.'\' pattern=\''.$ip.'\' placeholder=\''.$iph.'\' '.$rqd.' /> <br/>';
return $form;
}
?>