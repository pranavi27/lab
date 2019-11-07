
<?php
$allTheStates = "Mississippi Alabama Texas Massachusetts Kanas";
$statesArray = [];
$states1 = explode(' ',$allTheStates);
$i =0;
foreach($states1 as $state) {
if (preg_match('/xas$/',($state))) {
$statesArray[$i] = ($state);
$i = $i+1;
print " The states that ends in xas ".$state;
}
}
foreach($states1 as $state) {
if (preg_match('/^k.*s$/i',($state))) {
$statesArray[$i] = ($state);
$i = $i+1;
print " The states that begin with M and ends in s ".$state;
}
}
foreach($states1 as $state) {
if (preg_match('/^M.*s$/',($state))) {
$statesArray[$i] = ($state);
$i = $i+1;
print " The states that begin with M and ends in s ".$state;
}
}
foreach($states1 as $state) {
if (preg_match('/a$/',($state))) {
$StatesArray[$i] = ($state);
$i = $i+1;
print " The states that ends in a ".$state;
}
}
foreach ($statesArray as $element=>$value) {
print("\n".$value."is the element".$element);
}
?>
