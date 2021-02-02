<?php
$valor_estado=$_POST['valor_estado'];
switch ($valor_estado) {
	case 1:
		exec('sudo python /var/www/html/html/py/Forward_Fast.py');
		break;
	case 2:
		exec('sudo python /var/www/html/html/py/Left_Fast.py');
		break;
	case 3:
		exec('sudo python /var/www/html/html/py/Right_Fast.py');
		break;
	case 4:
		exec('sudo python /var/www/html/html/py/Backward_Fast.py');
		break;
	case 5:
		exec('sudo python /var/www/html/html/py/STOP.py');
		break;
	case 6:
		exec('sudo python /var/www/html/html/py/Forward_Medium.py');
		break;
	case 7:
		exec('sudo python /var/www/html/html/py/Left_Medium.py');
		break;
	case 8:
		exec('sudo python /var/www/html/html/py/Right_Medium.py');
		break;
	case 9:
		exec('sudo python /var/www/html/html/py/Backward_Medium.py');
		break;
	case 10:
		exec('sudo python /var/www/html/html/py/Forward_Slow.py');
		break;
	case 11:
		exec('sudo python /var/www/html/html/py/Left_Slow.py');
		break;
	case 12:
		exec('sudo python /var/www/html/html/py/Right_Slow.py');
		break;
	case 13:
		exec('sudo python /var/www/html/html/py/Backward_Slow.py');
		break;
	default:
		exec('sudo python /var/www/html/html/py/STOP.py');
		break;
}
?>
