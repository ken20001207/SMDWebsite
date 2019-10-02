<?php

include("mysqlsettings.php");

$conn =  new mysqli($sqlHost, $sqlUser, $sqlPass, 'mcserver');
if ($conn->connect_errno) {
	echo "<script>alert(\"與伺服器資料庫連線失敗，請通知管理員。\");window.location.replace(\"http://yuanyuan.cloud/smd/donate.php\");</script>";
}
$result = $conn->query("SELECT * FROM `userdata` WHERE `id`='" . $_POST["player"] . "';")
	or die(mysql_error());
if (mysqli_num_rows($result) == 0) echo "<script>alert(\"玩家名稱輸入錯誤，或尚未登入過伺服器。\");window.location.replace(\"http://yuanyuan.cloud/smd/donate.php\");</script>";

    if($_POST["price"] < 49) echo "<script>alert(\"你必須輸入一個有效的金額，最小 NT$ 50。\");window.location.replace(\"http://yuanyuan.cloud/smd/donate.php\");</script>";

date_default_timezone_set("Asia/Taipei");
    
    //載入SDK(路徑可依系統規劃自行調整)
    include('ECPay.Payment.Integration.php');
    try {
        
    	$obj = new ECPay_AllInOne();
   
        //服務參數
        $obj->ServiceURL  = "https://payment.ecpay.com.tw/Cashier/AioCheckOut/V5";   //服務位置
        $obj->HashKey     = 'DC9YwIfEPz1oGPYF' ;                                           //測試用Hashkey，請自行帶入ECPay提供的HashKey
        $obj->HashIV      = 'WUppccXga3cEwtR2' ;                                           //測試用HashIV，請自行帶入ECPay提供的HashIV
        $obj->MerchantID  = '1382343';                                                     //測試用MerchantID，請自行帶入ECPay提供的MerchantID
        $obj->EncryptType = '1';                                                           //CheckMacValue加密類型，請固定填入1，使用SHA256加密


        //基本參數(請依系統規劃自行調整)
        $MerchantTradeNo = time() ;
        $obj->Send['ReturnURL']         = "http://yuanyuan.cloud/smd/payment/receive.php" ;
        $obj->Send['MerchantTradeNo']   = $MerchantTradeNo;
        $obj->Send['MerchantTradeDate'] = date('Y/m/d H:i:s');
        $obj->Send['TotalAmount']       = $_POST["price"];
        $obj->Send['TradeDesc']         = "贊助 SMD:Kingdoms" ;
        $obj->Send['ChoosePayment']     = ECPay_PaymentMethod::ALL ;
        $obj->Send['CustomField1']      = $_POST["player"];
        //訂單的商品資料
        array_push($obj->Send['Items'], array('Name' => "贊助 SMD:Kingdoms", 'Price' => (int)$_POST["price"],
                   'Currency' => "元", 'Quantity' => (int) "1", 'URL' => "dedwed"));

        $obj->CheckOut();

    
    } catch (Exception $e) {
    	echo $e->getMessage();
    } 


 
?>