<?php

date_default_timezone_set("Asia/Taipei");


// 付款結果通知
require('ECPay.Payment.Integration.php');
try {
    // 收到綠界科技的付款結果訊息，並判斷檢查碼是否相符
    $AL = new ECPay_AllInOne();
    $AL->MerchantID = '1382343';
    $AL->HashKey = 'DC9YwIfEPz1oGPYF';
    $AL->HashIV = 'WUppccXga3cEwtR2';
    // $AL->encryptType = ECPay_EncryptType::ENC_MD5; // MD5
    $AL->EncryptType = ECPay_EncryptType::ENC_SHA256; // SHA256
    $arFeedback = $AL->CheckOutFeedback();

    // 付款後續參數處理
    if (true) {

        // 寫入記錄檔
        $sLog_Path  = __DIR__ . '/payment_return' . date('Ymd') . '.log'; // LOG路徑
        $sLog = '+++++++++++++++++++++++++++++++++++++++ 接收回傳參數 ' . date('Y-m-d H:i:s') . ' ++++++++++++++++++++++++++++++++++++++++++++' . "\n";
        $fp = fopen($sLog_Path, "a+");
        fputs($fp, $sLog);
        fclose($fp);

        $sLog_File =  print_r($arFeedback, true) . "\n";
        $fp = fopen($sLog_Path, "a+");
        fputs($fp, $sLog_File);
        fclose($fp);

        $mysqlresult = "更新資料庫成功";

        $sqlHost = 'localhost';
        $sqlUser = 'root';
        $sqlPass = 'Ken3228009!';
        $conn =  new mysqli($sqlHost, $sqlUser, $sqlPass, 'donate');
        if ($conn->connect_errno) {
            $mysqlresult = "資料庫連線失敗";
        }
        $result = $conn->query("INSERT INTO  `data` (`player`,`TradeNo`,`MerchantTradeNo`,`PaymentDate`,`PaymentType`,`RtnMsg`,`TradeDate`,`TradeAmt`) 
        VALUES ('" . $arFeedback["CustomField1"] . "' ,'" . $arFeedback["TradeNo"] . "','" . $arFeedback["MerchantTradeNo"] . "','" . $arFeedback["PaymentDate"] . "'
        ,'" . $arFeedback["PaymentType"] . "','" . $arFeedback["RtnMsg"] . "','" . $arFeedback["TradeDate"] . "','" . $arFeedback["TradeAmt"] . "');")
            or $mysqlresult = "更新資料庫失敗 " . $conn->error ;

        $sLog = $mysqlresult . "\n";
        $fp = fopen($sLog_Path, "a+");
        fputs($fp, $sLog);
        fclose($fp);
    }

    echo '1|OK';
} catch (Exception $e) {
    if (true) {
        $sLog_Path  = __DIR__ . '/payment_return' . date('Ymd') . '.log'; // LOG路徑
        $sLog = '+++++++++++++++++++++++++++++++++++++++ 接收回傳參數(錯誤) ' . date('Y-m-d H:i:s') . ' ++++++++++++++++++++++++++++++++++++++++++++' . "\n";
        $fp = fopen($sLog_Path, "a+");
        fputs($fp, $sLog);
        fclose($fp);

        $sLog_File = '0|' . $e->getMessage() . "\n";
        $fp = fopen($sLog_Path, "a+");
        fputs($fp, $sLog_File);
        fclose($fp);
    }
}
echo " <script   language = 'javascript'  
	type = 'text/javascript'> ";
echo " window.location.href = 'http://yuanyuan.cloud/smd' "; //需導向的網址 
echo " </script > ";
