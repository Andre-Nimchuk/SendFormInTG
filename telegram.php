<?php 


$date = $_POST['user_date'];
$time = $_POST['user_time'];
$address = $_POST['user_address'];
$token = "1445729117:AAHsDFqk5Zfc5wJvKwsujrm-bXI7G03UmnU";
$chat_id = "-437144392";
$arr = array(
    'Дата зустрічі: ' => $date,
    'Час зустрічі: ' => $time,
    'Місце зустрічі: ' => $address
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
    header('Location: TY_send_form.html');
} else {
    echo "Error";
}
?>