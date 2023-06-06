<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​IT Company, ​The backbone for internet business, Company Services, ​Large payments volume or unique business model?, ​What’s included, What We Do, Custom software solutions">
    <meta name="description" content="">
    <title>CommunityList</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="CommunityList.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.13.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|Cambay:400,400i,700,700i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "/images/9ad540b0-5c41-88cf-db65-2f8848d61d7a.png"
}</script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   <script>
      <?php
      $Community_Title = $_GET['Community_Title'];
      ?>
      function read_data(n, page) {
      var Temp = [];
      var communityTitle = "<?php echo $Community_Title; ?>";

      $.ajax({
        url: '../Script/CommunitySearch.php',
        type: 'GET',
        data: { Community_Title: communityTitle },
        dataType: 'json',
        async: false,
        success: function (data) {
          Temp[0] = data[page].Community_Title;
          Temp[1] = data[page].Community_Data;
          Temp[2] = data[page].Community_Like;
          Temp[3] = data[page].Num;
        },
        error: function (e) {
          alert("");
        }
      });

      if (Temp[n] == null) {
        return "";
      }

      return Temp[n];
    }
    function move(n){
      var Num = read_data(3,n);
      location.href = "../CommunityRead.php?Num="+Num;

    }
    function Input() 
        {
          var Community_Title = document.CommunnitySearch.Community_Title.value;
          location.href = "../CommunitySearch.php?Community_Title="+Community_Title;
        }
  </script>
    <meta name="theme-color" content="#5595e8">
    <meta property="og:title" content="CommunityList">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-header u-header" id="sec-d9ff"><div class="u-clearfix u-sheet u-valign-bottom-xs u-sheet-1">
        <a href="../Main.php" data-page-id="97827342" class="u-image u-logo u-image-1" data-image-width="257" data-image-height="84" title="CommunityList">
          <img src="/images/9ad540b0-5c41-88cf-db65-2f8848d61d7a.png" class="u-logo-image u-logo-image-1">
        </a>
      </div></header> 
    <section class="u-align-center u-clearfix u-white u-section-1" id="carousel_2df3">
      <h3 class="u-align-left-xs u-text u-text-default-xs u-text-1">제목</h3>
      <div class="u-border-6 u-border-custom-color-1 u-line u-line-horizontal u-line-1"></div>
      <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1"></div>
      </div>
      <div class="u-list u-list-2">
        <div class="u-repeater u-repeater-2"></div>
      </div>
      <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-list u-list-3">
        <div class="u-repeater u-repeater-3"></div>
      </div>
      <h3 class="u-align-right-xs u-text u-text-2">좋아요</h3>
      <a href="../CommunityWrite.html" class="u-active-custom-color-2 u-align-right-xs u-border-none u-btn u-button-style u-custom-color-1 u-hover-custom-color-2 u-text-body-alt-color u-btn-1">글쓰기</a>
      <div class="u-form u-form-1">
        <form action="#" enctype="multipart/form-data" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="CommunnitySearch" style="padding: 10px;">
          <div class="u-form-group">
            <input type="text" placeholder="검색하기" id="name-e801" name="Community_Title" class="u-border-4 u-border-custom-color-1 u-input u-input-rectangle u-white" required="required" style="width:85%; float:left;">
            <a href="#" onclick="Input()" class="u-border-none u-btn u-btn-submit u-button-style u-none u-btn-2"style="float:right"><span class="u-file-icon u-icon"><img src="/images/aa2c9d57-d260-7e6d-0e49-d8a2e08a4f2a.png" alt=""></span>&nbsp;
            </a>
          </div>
        </form>
      </div>
      <div class="u-table u-table-responsive u-table-1">
        <table class="u-table-entity" style="margin-top:50px;">
          <colgroup>
            <col width="84.6%">
            <col width="15.4%">
          </colgroup>
          <tbody class="u-align-left-xs u-table-body">
            <tr style="height: 60px;">
              <td class="u-table-cell"><a onclick="move(0)"><script>document.write(read_data(0,0))</script></a></td>
              <td class="u-align-center-xs u-border-2 u-border-custom-color-1 u-border-no-bottom u-border-no-top u-table-cell"><script>document.write(read_data(2,0))</script></td>
            </tr>
            <tr style="height: 60px;">
              <td class="u-table-cell "><a onclick="move(1)"><script>document.write(read_data(0,1))</script></a></td>
              <td class="u-align-center-xs u-border-2 u-border-custom-color-1 u-border-no-bottom u-border-no-top u-table-cell"><script>document.write(read_data(2,1))</script></td>
            </tr>
            <tr style="height: 60px;">
              <td class="u-table-cell"><a onclick="move(2)"><script>document.write(read_data(0,2))</script></a></td>
              <td class="u-align-center-xs u-border-2 u-border-custom-color-1 u-border-no-bottom u-border-no-top u-table-cell"><script>document.write(read_data(2,2))</script></td>
            </tr>
            <tr style="height: 60px;">
              <td class="u-table-cell"><a onclick="move(3)"><script>document.write(read_data(0,3))</script></a></td>
              <td class="u-align-center-xs u-border-2 u-border-custom-color-1 u-border-no-bottom u-border-no-top u-table-cell"><script>document.write(read_data(2,3))</script></td>
            </tr>
            <tr style="height: 60px;">
              <td class="u-table-cell"><a onclick="move(4)"><script>document.write(read_data(0,4))</script></a></td>
              <td class="u-align-center-xs u-border-2 u-border-custom-color-1 u-border-no-bottom u-border-no-top u-table-cell"><script>document.write(read_data(2,4))</script></td>
            </tr>
            <tr style="height: 60px;">
              <td class="u-table-cell"><a onclick="move(5)"><script>document.write(read_data(0,5))</script></a></td>
              <td class="u-align-center-xs u-border-2 u-border-custom-color-1 u-border-no-bottom u-border-no-top u-table-cell"><script>document.write(read_data(2,5))</script></td>
            </tr>
            <tr style="height: 60px;">
              <td class="u-table-cell"><a onclick="move(6)"><script>document.write(read_data(0,6))</script></a></td>
              <td class="u-align-center-xs u-border-2 u-border-custom-color-1 u-border-no-bottom u-border-no-top u-table-cell"><script>document.write(read_data(2,6))</script></td>
            </tr>
            <tr style="height: 60px;">
              <td class="u-table-cell"><a onclick="move(7)"><script>document.write(read_data(0,7))</script></a></td>
              <td class="u-align-center-xs u-border-2 u-border-custom-color-1 u-border-no-bottom u-border-no-top u-table-cell"><script>document.write(read_data(2,7))</script></td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
</body></html>