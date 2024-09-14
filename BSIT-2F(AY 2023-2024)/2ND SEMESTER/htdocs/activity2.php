<?php

    $ao = $_GET['ao'] ?? "A";
    $num1 = $_GET['num1'] ?? 0;
    $num2 = $_GET['num2'] ?? 0;
    $str = "";
    $ans;

    switch ($ao) {
        case 'A':
            $str = "sum";
            $ans = $num1 + $num2;
            break;
        case 'S':
            $str = "difference";
            $ans = $num1 - $num2;
            break;
        case 'M':
            $str = "product";
            $ans = $num1 * $num2;
            break;
        case 'D':
            $str = "quotient";
            $ans = $num1 / $num2;
            break;
        default :
            $ans = "Select a operation!";
    }

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Activity 2</title>
<meta name="generator" content="WYSIWYG Web Builder 18 Trial Version - https://www.wysiwygwebbuilder.com">
<link href="activity2.css" rel="stylesheet">
<link href="index.css" rel="stylesheet">
</head>
<body>
<div id="container">
<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb18.png" alt="WYSIWYG Web Builder" style="position:absolute;left:461px;top:685px;margin: 0;border-width:0;z-index:250" width="88" height="31"></a>
<div id="wb_Image1" style="position:absolute;left:82px;top:98px;width:424px;height:293px;z-index:1;">
<img src="images/Screenshot 2023-09-08 135954.png" id="Image1" alt="" width="424" height="317"></div>
<div id="wb_Image2" style="position:absolute;left:505px;top:98px;width:427px;height:291px;z-index:2;">
<img src="images/Screenshot 2023-09-08 140012.png" id="Image2" alt="" width="427" height="291"></div>
<div id="wb_Image3" style="position:absolute;left:82px;top:390px;width:424px;height:281px;z-index:3;">
<img src="images/Screenshot 2023-09-08 140042.png" id="Image3" alt="" width="424" height="282"></div>
<div id="wb_Image4" style="position:absolute;left:506px;top:388px;width:426px;height:283px;z-index:4;">
<img src="images/Screenshot 2023-09-08 140113.png" id="Image4" alt="" width="426" height="361"></div>
<div id="wb_Text1" style="position:absolute;left:173px;top:209px;width:60px;height:54px;text-align:center;z-index:5;">
<span style="color:#FFFFFF;font-family:Arial;font-size:24px;"><strong><?php echo $num1; ?></strong></span></div>
<div id="wb_Text5" style="position:absolute;left:178px;top:497px;width:62px;height:54px;text-align:center;z-index:6;">
<span style="color:#000000;font-family:Arial;font-size:24px;"><strong><?php echo $num1; ?></strong></span></div>
<div id="wb_Text6" style="position:absolute;left:350px;top:495px;width:56px;height:54px;text-align:center;z-index:7;">
<span style="color:#000000;font-family:Arial;font-size:24px;"><strong><?php echo $num2; ?></strong></span></div>
<div id="wb_Text8" style="position:absolute;left:646px;top:465px;width:132px;height:19px;z-index:8;">
<span style="color:#FFFFFF;font-family:Arial;font-size:17px;"><strong>The <?php echo $str; ?> is : </strong></span></div>
<div id="wb_Text9" style="position:absolute;left:646px;top:512px;width:120px;height:36px;text-align:center;z-index:9;">
<span style="color:#FFFFFF;font-family:Arial;font-size:32px;"><strong><?php echo $ans; ?></strong></span></div>
<div id="wb_Text10" style="position:absolute;left:156px;top:20px;width:699px;height:74px;text-align:center;z-index:10;">
<span style="color:#00008B;font-family:'Carter One';font-size:48px;">ACTIVITY 2</span></div>
<div id="wb_Text2" style="position:absolute;left:778px;top:209px;width:56px;height:54px;text-align:center;z-index:11;">
<span style="color:#FFFFFF;font-family:Arial;font-size:24px;"><strong><?php echo $num2; ?></strong></span></div>
</div>
</body>
</html>