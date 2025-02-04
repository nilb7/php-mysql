<?php

function maxnum($nr1, $nr2) {
    if($nr1>$nr2){
        return $nr1;
    }
    else{
        return $nr2;
    }

}
echo maxnum(10,14);

function findnum($nrs1){
    if($nrs1%2==0){
        echo "Ti gjete numrin qift";
    }
    else{
        echo "Ti nuk gjete numrin qift";
    }
}

echo findnum(6)



?>