<?php

$name = "Alyona";
$profession = "QA";
$city = "Samara";
$email = "asd@yandex.ru";
$phone = "123";
	$skills = [
		["name" => "Photoshop", "percent" => "34"],
		["name" => "Image", "percent" => "20"],
		["name" => "Photo", "percent" => "80"],
		["name" => "Media", "percent" => "90"],
	];

	$workExperience = [
    	["name" => "Economist", "firstDate" => "Aug 2018 - ", "secondDate" => "Current"],
        ["name" => "Cook", "firstDate" => "Mar 2014 - ", "secondDate" => "June 2018"],
        ["name" => "Manager", "firstDate" => "jan 2013 - " , "secondDate" => "Feb 2014"],
        ];
 ?>  

<!DOCTYPE html>
<html>
  <head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=y7GXiRPXhRp8jWadcHqZm2tRCoUqgx6rO2-LOSLeGTqkMAYN72PXZMU2oGx7GEo2Gkbn_3qZfoy3GtXY0pmb6KOoJbDX6Ff7XuCi_IVYZfUlANgOOx9gb_5j7RhXKGfNOqX5DynhCD2O3WL-mBgwDYCHC9_WxS70IjZi56VRS_IKfmgwPGn4cRB87wm7CISyUFtSTtCQgQwzPu-fUh_8GjIhaw3DMGQbTixOtppZOJCUhdKYUR66KcLVEd7G64e60ufqap8X0gxAX7gefEP8My0diwb9t9DPCA6-Pl2F_zR0rPh5TOAL9iR5iazh7MBa41v1NdyEoZnAmJI4yUdGMM5eKCcQJHjCLMdV9wdTyxl8dOQWyRvNyGJUjDPNfJBtGFOqH42CSN-5n_KDhKUgRYYMkgG7KlWc5VWFiT4jxVy9I6_pfBs7paLx6cFUCyYAznKgzIo87pb3mIjKoiyEhz8aPe-5qDId9FM5qgnB3U_iCktMNamfbpvXtOxJTepwV6B2BlAgxN_k7TvYUIbc5VnAtAmoK73waCEfrAtPbT6WpBiJBOhpHbSA5UiCski_kEdHlTNbEwPJQsPSMve6G03DjQ2zNrwM99YDh2yJ4W3_gRcFKP_6i2uNshpZeYr7FMeTG9tN4n2Q_wsYUccJ4Db5UtuSugTwtqbEMcAT_2TijFB_Je4MHjXkNuqDNN-AMGZiBV2XqBPjQKfq17R_4vU4vIPKa6n3R_tCXUw0hAgrL-Y4n6RHsFzAcaw0en5ZdY3NatuN6MT8gqPLIYrgge6fxeRPdoNyIpmiLmpnH-xcUAq_76FJTuOZdDPhy-9EkWLMO7bm_POcXr2MQ1tYxsj3cVS3wC0RmVydyuj1laNy28KtPvLjxHJWoQZe5S0vdRJPU6JN8X2TgsKF9G2wrwO8WMf3mlWzwYKpGwNFXEEYukywTDHaq_IaNvEU0kstP8DAIL7u8uhGGW7-Q4TStpttw9smh_xKfE5blMYrUSWYdYC36G4xqEGyPSWf_b524flXpIdNIYITjvxWYzWnlwReGBOOAxoNGPUf3MqIH54" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly9zODM4c2FzLnN0b3JhZ2UueWFuZGV4Lm5ldC9yZGlzay8xZTEzZGMzYjY3MzY4ODllZmUzMmNjMmM5ZGJlZDdjOTkyOTdhNzgwNGFlZWRhYmM1YjY1ODRlYzY3NmNhOTNjLzYzNTk3OWViL3ZEQzViM0d2R0JGdnd5WWZaWXRLckdTMU5hSEVRRENrQ25xUTRpZmctLVJaazFqM21CaHNDWTA5d0pNR1M2aDNuUlpOZDlnc3JkZmExLU1TX1Q0dFJ3PT0_dWlkPTAmZmlsZW5hbWU9Y3YuaHRtbCZkaXNwb3NpdGlvbj1hdHRhY2htZW50Jmhhc2g9R2k4U29wY0UlMmJwbTI1VlVYZ0ZuWUhaNmk3RHRKN2IyZTVQc0Nxbkp4OGVEWDZSUHBFNUhrSnIvSTh0NWZFSSUyYmlxL0o2YnBtUnlPSm9uVDNWb1huRGFnJTNkJTNkJmxpbWl0PTAmY29udGVudF90eXBlPXRleHQlMmZodG1sJm93bmVyX3VpZD0xOTk4NDEzNCZmc2l6ZT02NjM1JmhpZD1iZmYwZjdiNDk3YjRkMmYxOTZmNDQ3MjgyMjFkOWQxOCZtZWRpYV90eXBlPWRldmVsb3BtZW50JnRrbnY9djImcnRva2VuPUNmdnZ6NmllSGY4bSZmb3JjZV9kZWZhdWx0PW5vJnljcmlkPW5hLTBjMTFkOWIzODE0MDk0ZjE4OTAxYzgyN2Q4ZDA0ODgxLWRvd25sb2FkZXIxOWUmdHM9NWViZjQwYzkyMTBjMCZzPTk3YTkxZmI0MTgyYzdjN2ZlZTAzYzlmMWY2ZmZlODJlMjZkNmZmYjQ2ODIzN2RmODk5ZjYwYTkzY2JlOTliY2ImcGI9VTJGc2RHVmtYMTg4UDl1dVloVWF2VWJBWVF6emNYdlNLcm5Oa25UOWk0cVhRbmRCcHV6YVotN3E4V0NYc2FVSnFXeXI1T3Y2X2dxVjY2Tm1oTW5UX0FaNWdvaUtZQThlck55U3VONkRqSjg"/><style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2> <?php echo $name ?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $profession ?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $city ?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $email ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $phone ?></p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
         <?php for($i = 0; $i < count($skills); $i++) : ?>
            <p> <?php echo $skills[$i]["name"];?> </p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills[$i]["percent"];?>"> 
            <?php echo $skills[$i]["percent"];?>
            </div>
          </div>
         <?php endfor;?>
         
          <br>
          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
          <p>Английский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Испанский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
          </div>
          <p>Немецкий</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
         <?php for($i = 0; $i < count($workExperience); $i++) : ?>
        <div class="w3-container">
          <h5 class="w3-opacity"><b> <p> <?php echo $workExperience[$i]["name"];?> </p> </b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $workExperience[$i]["firstDate"];?> <span class="w3-tag w3-teal w3-round"><?php echo $workExperience[$i]["secondDate"];?></span></h6>
          <p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
          <hr>
        </div>
        <?php endfor;?>
        
        

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>gb.ru</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
          <p>Web Development! All I need to know in one place</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>London Business School</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
          <p>Master Degree</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>School of Coding</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
          <p>Bachelor Degree</p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <!-- End footer -->
 </footer>

</body>
</html>
