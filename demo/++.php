<?php
$one = 1;

var_dump($one ++); // 加完之后被var_dump
var_dump(++ $one); // var_dump后再做 ++

echo '<hr />';
$i = 1;
$a = $i++;
echo 'a='.$a.'<hr />';
echo 'i='.$i.'<hr />';
$b = ++$i;
echo 'b='.$b.'<hr />';
echo $a+$b;