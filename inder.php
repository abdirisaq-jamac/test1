<?php
//condition
$day =date('D');
/*if($day == 'monday'){
    echo 'maalin wacan ';

}
else{
    echo 'is not today';
}
    */
// switch
switch($day){
    case 'sun':
        echo 'good day';
        break;
        case 'monday':
            echo 'yes may day';
            break;
            case 'tue':
                echo'may bad dat';
                break;
                case 'saturday':
                echo 'my like good day';
                break;
default:
echo 'ma jiro';
break;
}
    