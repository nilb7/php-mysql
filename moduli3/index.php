<?php


$score=59;

if($score>=90){
    echo "Best Grade 5";
}
elseif($score <=89 &&$score >=80){
    echo "4";
}
elseif($score<=79 &&$score >=70){
    echo "3";
}
elseif($score<=69 &&$score >=50){
    echo "2";
}
else {
    echo "1";
}



$day= "Monday";


switch($day){
    case "Monday":
        echo "Ski";
        break;
        case "TUesday":
            echo "ki";
            break;
            case "Wedensday":
                echo "Ski";
                break;
                case "Thursday":
                    echo "ki";
                    break;
                    case "Friday":
                        echo "Ski";
                        break;
                        default:
                        echo "Weekend";
                        break;

}
?>