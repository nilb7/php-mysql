<?php


$students = array(
    
    array("Anik","Prishtin", "16"),
    array("Eden","Prishtin", "16"),
    array("Nil","Prishtin", "14"),
);

echo $students[0][0] . "Vendi:" .$students[0][1] . ", Mosha:" .$students[0][2] . "<br>";
echo $students[1][0] . "Vendi:" .$students[1][1] . ", Mosha:" .$students[1][2] . "<br>";
echo $students[2][0] . "Vendi:" .$students[2][1] . ", Mosha:" .$students[2][2] . "<br>";

for($row=0; $row<3;$row++){
    echo "<p><b>Row number $row </br> </p>";
    echo "<ul>";
    for($col=0; $col<3;$col++){
        echo "<li>". $students[$row][$col] . "</li>";
    }
    echo "</ul>";
}

$arrays = array(

    array(1,2,3),
    array(1,2,3),
    array(1,2,3),
);

for($i=0,$i<3;$i++){
    for($j=0;$j<3;$j++){
        echo "Array: $i Element: $j <br>";
    }
}


$grade = array(
    "Math" => "3",
    "Art" => "5",
    "History" => "4",
    "Music" => "5",
)

foreach($grade as $key => $value){
    echo "Subject:" . $key . ", Grade:" . $value;
    echo "<br>";
}