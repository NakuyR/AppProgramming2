<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​IT Company, ​The backbone for internet business, Company Services, ​Large payments volume or unique business model?, ​What’s included, What We Do, Custom software solutions">
    <meta name="description" content="">
    <title>Read</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Read.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.13.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|Cambay:400,400i,700,700i">
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "/images/9ad540b0-5c41-88cf-db65-2f8848d61d7a.png"
    }
</script>
<?php

$host = 'localhost';
$user = 'korea';
$pw = '1234';
$dbName = 'Recip';
$con = new mysqli($host, $user, $pw, $dbName);

$Num = $_GET['Num'];

$query = "select * from Community where Num='$Num'";

$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

$Community_Title=$row['Community_Title'];
$Community_Data=$row['Community_Data'];
$Community_Like=$row['Community_Like'];

?>
    <meta name="theme-color" content="#5595e8">
    <meta property="og:title" content="Read">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-header u-header" id="sec-d9ff"><div class="u-clearfix u-sheet u-valign-bottom-xs u-sheet-1">
        <a href="./Main.php" data-page-id="97827342" class="u-image u-logo u-image-1" data-image-width="257" data-image-height="84" title="Main">
          <img src="/images/9ad540b0-5c41-88cf-db65-2f8848d61d7a.png" class="u-logo-image u-logo-image-1">
        </a>
      </div></header> 
    <section class="u-align-center u-clearfix u-white u-section-1" id="carousel_2df3">
      <div class="u-table u-table-responsive u-table-1">
        <table class="u-table-entity">
          <colgroup>
            <col width="83.3%">
            <col width="16.7%">
          </colgroup>
          <tbody class="u-table-body">
            <tr style="height: 46px;">
              <td class="u-border-4 u-border-custom-color-1 u-table-cell"><?=$Community_Title?></td>
              <td class="u-align-center-xs u-border-4 u-border-custom-color-1 u-table-cell"><?=$Community_Like?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1"></div>
      </div>
      <div class="u-border-4 u-border-custom-color-1 u-container-style u-group u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <p class="u-text u-text-default-xs u-text-1"><?=$Community_Data?></p>
        </div>
      </div>
      <a href="../Script/CommunityLike.php?Num=<?=$Num?>" class="u-active-custom-color-2 u-border-none u-btn u-button-style u-custom-color-1 u-hover-custom-color-2 u-text-white u-btn-1">좋아요</a>
      <a href="../CommunityList.html" class="u-active-custom-color-2 u-border-none u-btn u-button-style u-custom-color-1 u-hover-custom-color-2 u-text-white u-btn-2">목록으로<br>
      </a>
    </section>
</body></html>