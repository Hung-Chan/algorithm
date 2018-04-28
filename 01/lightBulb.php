<?php
#有编号1~100个灯泡，起初所有的灯都是灭的。有100个同学来按灯泡开关，如果灯是亮的，那么按过开关之后，灯会灭掉。如果灯是灭的，按过开关之后灯会亮。
#现在开始按开关：
#第1个同学，把所有的灯泡开关都按一次(按开关灯的编号： 1,2,3,......100)。
#第2个同学，隔一个灯按一次(按开关灯的编号： 2,4,6,......,100)。
#第3个同学，隔两个灯按一次(按开关灯的编号： 3,6,9,......,99)。
#......
#问题是，在第100个同学按过之后，有多少盏灯是亮着的？这些灯的编号是多少？要求给出解题思路或给出伪码。

$lightBulb = array();
$number = array();
for($i = 1; $i != 100 ; $i++) {
    $lightBulb[$i] = false;
}

$people = 1;
$click = 1;
while($people <= 100){
    while($click * $people <= 100){
	    $lightBulb[$click * $people] = !$lightBulb[$click * $people];
	    $click++;
    }
    $people++;
    $click = 1;
}

$num = 0;
echo '燈的編號：';
for($i = 1 ; $i <= count($lightBulb); $i++){
    if($lightBulb[$i] === true){
        $number[$num] = $i;
        echo $number[$num] . ',';
        $num++;    
    }
}
echo '總共有' . $num . '顆燈亮';
?>