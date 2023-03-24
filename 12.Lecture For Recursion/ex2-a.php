<?php
function foo($num){
    if($num===0){
        return;
    }else{
        echo "foo ";
        bar($num-1);
    }
}

function bar($num){
    if($num===0){
        return;
    }else{
        echo "bar ";
        foo($num-1);
    }
}

foo(5);