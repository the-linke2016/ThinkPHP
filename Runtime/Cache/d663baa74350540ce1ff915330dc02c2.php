<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <!--<?php
 echo 'Hello,  ' . $name . '<br>'; ?>

        <?php
 echo 'Hi,  ' . $name . '<br>'; ?>

        <?php
 echo 'I am a ' . $sex . '<br>'; ?>

        <?php
 echo $today . '<br>'; ?>-->

        <!--<?php echo ($me['name']); ?>
        <?php echo ($me["name"]); ?>
        <?php echo (($me["sex"])?($me["sex"]):'man'); ?>
        <?php echo ($me["age-1"]); ?>
        <?php echo ($me['age']-1); ?>
        <?php echo (md5($me['name'])); ?>-->
            
            <!-- 三个#代替三个变量 -->

        <!--<?php if(is_array($person)): $i = 0; $__LIST__ = array_slice($person,0,3,true);if( count($__LIST__)==0 ) : echo "没有数据" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i; echo ($data['name']); ?>-----<?php echo ($data['age']); ?></br><?php endforeach; endif; else: echo "没有数据" ;endif; ?>
        <?php if(is_array($person)): foreach($person as $key=>$data): echo ($data['name']); ?>-----<?php echo ($data['age']); ?></br><?php endforeach; endif; ?>-->

        <!-- eq=|neq!=|gt>|egt>=|lt<|elt<=|heq===|nheq!== -->
        <!--<?php $__FOR_START_13186__=1;$__FOR_END_13186__=10;for($k=$__FOR_START_13186__;$k <= $__FOR_END_13186__;$k+=1){ echo ($k); ?></br><?php } ?>-->

        <!--<?php if($num > 10): ?>num 大于 10
            <?php elseif($num < 10): ?>num 小于 10
            <?php else: ?>num 等于 10<?php endif; ?>-->

        <!--<?php switch($name): case "laoshi": ?>小明<?php break;?>
            <?php case "xiaohong": case "xiaohuang": ?>小明，你<?php break;?>
            <?php default: ?>小明自己<?php endswitch;?>-->

        <!-- 比较标签 name='变量名' value='比较的值' ></比较标签> -->
        <!--<?php if(($num) == "10"): ?>num = 10<?php else: ?>num != 10<?php endif; ?>-->
        <!--<?php if(($num) != "12"): ?>num != 12<?php endif; ?>-->
        <!--<?php if(($num) == "11"): ?>num = 11<?php else: ?>num != 11<?php endif; ?>-->
        
        <!--<?php if(in_array(($num), explode(',',"1,2,3"))): ?>在这个区间<?php endif; ?>
        <?php if(!in_array(($num), explode(',',"1,2,3"))): ?>不在这个区间<?php endif; ?>
        <?php $_RANGE_VAR_=explode(',',"1,10");if($num>= $_RANGE_VAR_[0] && $num<= $_RANGE_VAR_[1]):?>确实在这里<?php else: ?>确实不在<?php endif; ?>
        <?php $_RANGE_VAR_=explode(',',"1,10");if($num<$_RANGE_VAR_[0] || $num>$_RANGE_VAR_[1]):?>确实不在<?php endif; ?>-->
        
        <!--<?php if(in_array(($num), explode(',',"1,11,12"))): ?>有11这个数<?php else: ?>没有11这个数<?php endif; ?>-->

        <!--<?php echo ($num>11?'大于11':'小于等于11'); ?>-->
    </body>
</html>