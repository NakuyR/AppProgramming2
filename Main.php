<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​IT Company, ​The backbone for internet business, Company Services, ​Large payments volume or unique business model?, ​What’s included, What We Do, Custom software solutions">
    <meta name="description" content="">
    <title>Main</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Main.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.13.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|Cambay:400,400i,700,700i">
    <?php
    $Name = $_COOKIE["Name"];
    ?>
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
      function read_Recipe_data(n,page){
      
      var Temp = [];

      $.ajax({
          url: '../Script/RecipeList.php', 
          type: 'get',
          dataType: 'json',
          async :false,
          success: function (data) {
              Temp[0] = data[page].Recipe_Title;
              Temp[1] = data[page].Recipe_Data;
              Temp[2] = data[page].Recipe_Like;
              Temp[3] = data[page].Num;
          },

          error: function(e) {
              alert("");  
          }
      });
      if (Temp[n] == null) {
        return "";
      }
      return Temp[n];
  }
    function Recipe_move(n){
      var Num = read_Recipe_data(3,n);
      location.href = "../RecipeRead.php?Num="+Num;
    }

    function read_Community_data(n,page){
      
      var Temp = [];

      $.ajax({
          url: '../Script/CommunityList.php', 
          type: 'get',
          dataType: 'json',
          async :false,
          success: function (data) {
              Temp[0] = data[page].Community_Title;
              Temp[1] = data[page].Community_Data;
              Temp[2] = data[page].Community_Like;
              Temp[3] = data[page].Num;
          },

          error: function(e) {
              alert("");  
          }
      });
      if (Temp[n] == null) {
        return "";
      }
      return Temp[n];
  }
    function Community_move(n){
      var Num = read_Community_data(3,n);
      location.href = "../CommunityRead.php?Num="+Num;

    }


</script>

    <meta name="theme-color" content="#5595e8">
    <meta property="og:title" content="Main">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"> 
    <section class="u-align-center u-clearfix u-white u-section-1" id="carousel_2df3">
      <a href="../login.html" class="u-active-custom-color-2 u-border-none u-btn u-button-style u-custom-color-1 u-hover-custom-color-2 u-text-white u-btn-1">로그아웃</a>
      <h3 class="u-text u-text-default-xs u-text-1"><?=$Name?>님 안녕하세요</h3>
      <div class="u-table u-table-responsive u-table-1">
        <table class="u-table-entity">
          <colgroup>
            <col width="81.8%">
            <col width="18.2%">
          </colgroup>
          <tbody class="u-table-body">
            <tr style="height: 46px;">
              <td class="u-border-4 u-border-custom-color-1 u-border-no-bottom u-border-no-top u-table-cell"><a onclick="Recipe_move(0)"><script>document.write(read_Recipe_data(0,0))</script></a></td>
              <td class="u-align-center-xs u-border-4 u-border-custom-color-1 u-border-no-bottom u-border-no-top u-table-cell"><script>document.write(read_Recipe_data(2,0))</script></td>
            </tr>
            <tr style="height: 46px;">
              <td class="u-border-4 u-border-custom-color-1 u-border-no-bottom u-border-no-top u-table-cell"><a onclick="Recipe_move(1)"><script>document.write(read_Recipe_data(0,1))</script></a></td>
              <td class="u-align-center-xs u-border-4 u-border-custom-color-1 u-border-no-bottom u-border-no-top u-table-cell"><script>document.write(read_Recipe_data(2,1))</script></td>
            </tr>
            <tr style="height: 46px;">
              <td class="u-border-4 u-border-custom-color-1 u-border-no-bottom u-border-no-top u-table-cell"><a onclick="Recipe_move(2)"><script>document.write(read_Recipe_data(0,2))</script></a></td>
              <td class="u-align-center-xs u-border-4 u-border-custom-color-1 u-border-no-bottom u-border-no-top u-table-cell"><script>document.write(read_Recipe_data(2,2))</script></td>
            </tr>
            <tr style="height: 46px;">
              <td class="u-border-4 u-border-custom-color-1 u-border-no-bottom u-border-no-top u-table-cell"><a onclick="Recipe_move(3)"><script>document.write(read_Recipe_data(0,3))</script></a></td>
              <td class="u-align-center-xs u-border-4 u-border-custom-color-1 u-border-no-bottom u-border-no-top u-table-cell"><script>document.write(read_Recipe_data(2,3))</script></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="u-border-4 u-border-custom-color-1 u-line u-line-horizontal u-line-1"></div>
      <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1"></div>
      </div>
      <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-list u-list-2">
        <div class="u-repeater u-repeater-2"></div>
      </div>
      <img class="u-image u-image-default u-preserve-proportions u-image-1" src="/images/b8522439-5088-0989-9a8d-41c99647e196.png" alt="" data-image-width="174" data-image-height="168">
      <a href="../RecipeList.html" class="u-active-custom-color-2 u-border-none u-btn u-button-style u-custom-color-1 u-hover-custom-color-2 u-text-white u-btn-2">레시피</a>
      <div class="u-table u-table-responsive u-table-2">
        <table class="u-table-entity">
          <colgroup>
            <col width="81.8%">
            <col width="18.2%">
          </colgroup>
          <tbody class="u-table-body">
            <tr style="height: 46px;">
              <td class="u-border-4 u-border-custom-color-1 u-border-no-bottom u-border-no-top u-table-cell"><a onclick="Community_move(0)"><script>document.write(read_Community_data(0,0))</script></a></td>
              <td class="u-align-center-xs u-border-4 u-border-custom-color-1 u-border-no-bottom u-border-no-top u-table-cell"><script>document.write(read_Community_data(2,0))</script></td>
            </tr>
            <tr style="height: 46px;">
              <td class="u-border-4 u-border-custom-color-1 u-border-no-bottom u-border-no-top u-table-cell"><a onclick="Community_move(1)"><script>document.write(read_Community_data(0,1))</script></a></td>
              <td class="u-align-center-xs u-border-4 u-border-custom-color-1 u-border-no-bottom u-border-no-top u-table-cell"><script>document.write(read_Community_data(2,1))</script></td>
            </tr>
            <tr style="height: 46px;">
              <td class="u-border-4 u-border-custom-color-1 u-border-no-bottom u-border-no-top u-table-cell"><a onclick="Community_move(2)"><script>document.write(read_Community_data(0,2))</script></a></td>
              <td class="u-align-center-xs u-border-4 u-border-custom-color-1 u-border-no-bottom u-border-no-top u-table-cell"><script>document.write(read_Community_data(2,2))</script></td>
            </tr>
            <tr style="height: 46px;">
              <td class="u-border-4 u-border-custom-color-1 u-border-no-bottom u-border-no-top u-table-cell"><a onclick="Community_move(3)"><script>document.write(read_Community_data(0,3))</script></a></td>
              <td class="u-align-center-xs u-border-4 u-border-custom-color-1 u-border-no-bottom u-border-no-top u-table-cell"><script>document.write(read_Community_data(2,3))</script></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="u-border-4 u-border-custom-color-1 u-line u-line-horizontal u-line-2"></div>
      <a href="../CommunityList.html" class="u-active-custom-color-2 u-border-none u-btn u-button-style u-custom-color-1 u-hover-custom-color-2 u-text-white u-btn-3">커뮤니티</a>
    </section>
</body></html>