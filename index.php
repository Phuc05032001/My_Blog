<!DOCTYPE html>
<html>
<title>mayyodayy</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/png" href=".img/favicon.png"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
#more {display: none; }
.div .p .a {display: inline}
</style>
<body class="w3-light-grey">

<!-- Navigation bar with social media icons -->
<div class="w3-bar w3-black w3-hide-small">
  <a href="https://www.facebook.com/k.van25" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-snapchat"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-flickr"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-twitter"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-linkedin"></i></a>
  <div class="w3-bar-item w3-right" >
    <form action="search">
        <input type="search" id="search" placeholder="Search..."/>
        <i class="fa fa-search"></i>
    </form>
  </div>
</div>
  
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">

  <!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><b>MAY BLOG</b></h1>
    <h6>Welcome to the blog of <span class="w3-tag">May's world</span></h6>
  </header>

  <!-- Image header -->
  <header class="w3-display-container w3-wide" id="home">
    <img class="w3-image" src=".img/May.png" alt="May's story" width="1600" height="1060">
    <div class="w3-display-left w3-padding-large">
      <h1 class="w3-text-white">May's Story</h1>
      <h1 class="w3-jumbo w3-text-white w3-hide-small"><b>Một đám mây lơ lửng...</b></h1>
      <h6><button class="w3-button w3-white w3-padding-large w3-large w3-opacity w3-hover-opacity-off" onclick="document.getElementById('subscribe').style.display='block'">SUBSCRIBE</button></h6>
    </div>
  </header>

  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l8 s12">
    
      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>Chuyện linh tinh</h3>
          <h5>Bạn qua thư, <span class="w3-opacity">November 9, 2021</span></h5>
        </div>

        <div class="w3-justify">
          <div>
          
          <p> 
              <img src=".img/banquathu.jpg" alt="banquathu" style="width:100%" class="w3-padding-16">
              Cô ngồi cạnh cửa sổ, trên tay là ly trà hoa nhài đang nghi ngút khói. Bên cạnh 
              cô, chú mèo Kiki đang nghịch ngợm cuộn len màu nâu của nó. Đây đã là cuộn len thứ bảy
              trong<span id="dots">...</span> <span id="more">bộ sưu tập đồ chơi của Kiki. Cứ độ đâu một tháng, Kiki lại chẳng còn hứng thú với món đồ chơi mới nữa. Một chiếc lông vũ nằm đâu đó trong khe ghế sofa. Một quả
              bóng xanh lăn lóc trên sàn. Một chú Teddy kẹt sau cánh tủ. Và giờ Kiki đang vui vẻ với một cuộn len mới – cuộn len mà một tháng sau, có lẽ nó sẽ nằm cô quạnh ở đâu đó
              trong căn gác xép bé tẹo của cô. Ly trà trên tay cô lúc này đã dần nguội đi. Cô nhấp một ngụm, cảm nhận vị hoa nhài đang tan ra trên đầu lưỡi. Qua lớp kính của chiếc 
              cửa sổ nhỏ, tuyết đang bắt đầu rơi. Một cơn gió rít qua, thổi bay đi đám tuyết non trên bụi cây trước cửa. Một cảm giác lạnh buốt chạy qua từng tế bào mạch máu ở cánh 
              tay cô. Ở xa xa, một cặp tình nhân đang dạo bước trên nền tuyết dày đặc. Cô chẳng thể nghe thấy họ nói cái gì, chỉ thấy miệng họ lúc nào luyên thuyên chuyện trò và thi
              thoảng, hai người lại cười phá lên, đập tan khoảng không lạnh lẽo yên tĩnh. Nụ cười hạnh phúc trên gương mặt của cả hai làm cô quên đi mất rằng nhiệt độ bên ngoài đã
              xuống tới -5 độ C. Dường như việc đi lại trên nền tuyết phủ trắng lên tới nửa cẳng chân kia đối với họ chỉ như đang chơi trò chôn chân vào cát – trò chơi cô đã từng
              thích thú lúc còn bé. Cô nhìn họ, khóe miệng bất giác mỉm cười.
              Mình độc thân được bao lâu rồi ấy nhỉ? – Cô tựa lưng vào ghế, mắt đảo theo từng vòng quay của chiếc quạt trên trần nhà.. Những cánh quạt quay chầm chậm, chầm chậm, đưa
              cô vào một khoảng kí ức mênh mông… 
              <br>          
              “Ting! Ting!”. Cô đặt cốc nước lên bàn, một tay xoa xoa chiếc khăn lên mái tóc ướt vừa gội, mắt dán vào dòng tin nhắn mới hiện trên màn hình vi tính. “Chào cậu! Mình có 
              đọc được mấy dòng bình luận cậu viết trên diễn đàn, mình thấy rất đồng cảm với những gì cậu viết.” – tin nhắn từ một tài khoản không có avatar từ diễn đàn sách nọ. Cô có
              chút ngạc nhiên. Một dòng bình luận vu vơ lại thu hút những tâm hồn đồng điệu tìm đến nhau sao? Lịch sự gửi lại lời chào và kèm theo lời cảm ơn, cô trở lại với những xấp
              thống kê số liệu đang chồng chất trước mặt, quên bẵng đi cuộc chào hỏi vừa rồi.           
              10 giờ tối. “Ting!”. Điện thoại cô sáng lên: “Chào cậu, lại là mình nè. Mình vừa đọc được cuốn sách mới nhưng chả biết trao đổi với ai, không biết cậu có rảnh không ha?”.
              Cô chợt nhớ ra cuộc trò chuyện ban chiều. Trao đổi về sách sao? Cô bắt đầu tò mò về người bạn chưa gặp. Đối với cô, sách luôn đem đến những điều mới mẻ. Những kẻ đọc sách
              cũng thế. Những góc nhìn khác nhau về một đoạn văn nào đó, những điều kì lạ về tác giả mà cô chưa từng được biết, những câu chuyện giống hệt với những gì mình từng trải
              qua. Cô thích trò chuyện về những thứ như thế. Cô thích thú với những kẻ đọc sách. “Ừa, cậu nói đi, sách gì á?”. “Phía sau nghi can X nè”. “Ơ, quyển đó mình vừa đọc tháng 
              trước đó, cuốn dễ sợ luôn.”. 
              <br>
             <img src=".img/banquathu2.jpg" alt="banquathu2" style="width:100%" class="w3-padding-16"> 
              Và thế là cuộc trò chuyện của hai kẻ yêu sách cứ diễn ra, hằng ngày. Dần dần, họ len lỏi vào cuộc sống của nhau, chỉ thông qua một cái màn hình máy tính. Họ
              trò chuyện về thành phố nơi họ sống. Về những trải nghiệm đã từng trải qua. Về những mối tình đầu dang dở. Những cuộc trò chuyện luôn mang trong nó thứ gì đó bất ngờ, thú vị mà đối phương chẳng thể đoán trước được. Họ như những đứa trẻ đang khám phá thế giới rộng lớn. Họ như chú mèo Kiki thích thú với những thứ mới lạ. Họ gọi nhau bằng cái tên vừa thân mật cũng vừa xa lạ: “Bạn qua thư”.
              “Nè, mình mới viết một bài trên wordpress, cậu vào xem bài viết đầu tay của mình đi nè!”.           
              “Ghê vậy! Để mình coi coi….            
              Uhm, viết hay quá vậy ta, hay mình cũng lập một tài khoản rồi viết được hông ta.. mà mình sợ viết không được hay”.           
              “Đâu. Lập đi lập đi. Cậu viết hay mà, lập đi, viết đi rồi tớ sẽ là người đọc đầu tiên luôn cho!”          
              Và thế là, một chiếc blog đã được lập, chỉ dựa trên một lời động viên không-biết-có-thật-hay-không và một nguồn cảm hứng nho nhỏ đến từ một người bạn lạ hoắc.         
              Bạn qua thư, họ biết nhau qua những câu chữ, những dòng tin nhắn, hiểu nhau bằng lối viết, mến nhau bằng những câu chuyện có sự đồng cảm. Bạn qua thư, họ tự tưởng tượng hình ảnh của đối phương bằng khối óc sáng tạo của mình. Họ gửi gắm, trút hết lòng tin của mình cho một kẻ lạ mặt nào đó chưa từng tiếp xúc, chưa từng nghe thấy giọng nhau. Mọi thứ luôn tốt đẹp khi làm bạn qua thư.       
              Và rồi một ngày nọ, tin nhắn không đến nữa. Tình bạn của họ chấm dứt, một người bạn ảo, một người bạn lạ mặt đang giữ hàng đống những bí mật của đối phương, biến mất, không chút vết tích. Chẳng có một cuộc cãi vã nào, chỉ đơn giản là biến mất. Kí ức của họ về nhau vẫn luôn đẹp, vẫn luôn ẩn chứa thứ gì đó mới lạ mà đối phương luôn muốn khai thác, kiếm tìm. Những thứ mới mẻ luôn mang một sức hút kì lạ như thế..           
              Cô mở mắt. Ngoài trời giờ chỉ còn là một mảng tối đen như mực. Ánh đèn vàng của khu phố hắt ngược vào tấm kính cửa sổ, cô thấy Kiki đang chìm vào giấc mơ của riêng nó. Đôi tình nhân đã đi từ lúc nào. Ly trà trên tay cô lạnh ngắt. Bông hoa nhài nhỏ đã chìm xuống đáy ly, teo lại thành một thứ nhũn nhũn xỉn màu. Trong khoảng tối, chiếc điện thoại đặt trên bàn của cô sáng lên: “Chào cậu! Mình rất thích những gì cậu viết!”</span>
              <a href="#" onclick="myFunction()" id="myBtn">Read more</a>
            </p>
            
            
          </div>
          <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction('demo1')" id="myBtn"><b>Replies  </b> <span class="w3-tag w3-white">1</span></button></p>
          <p class="w3-clear"></p>
          <div class="w3-row w3-margin-bottom" id="demo1" style="display:none">
            <hr>
              <div class="w3-col l2 m3">
                <img src=".img/avatar_smoke.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>George <span class="w3-opacity w3-medium">May 3, 2015, 6:32 PM</span></h4>
                <p>Great blog post! Following</p>
              </div>
          </div>
        </div>
      </div>
      <hr>

      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>TITLE HEADING</h3>
          <h5>Title description, <span class="w3-opacity">April 23, 2016</span></h5>
        </div>

        <div class="w3-justify">
          <img src=".img/man_hat.jpg" alt="Men in Hats" style="width:100%" class="w3-padding-16">
          <p><strong>Hats!</strong> The trend this summer is hats for men!</p>
          <p>Some text about this blog entry. Fashion fashion and mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies
            mi non congue ullam corper. Praesent tincidunt sedtellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
          <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction('demo2')"><b>Replies  </b> <span class="w3-tag w3-white">2</span></button></p>
          <p class="w3-clear"></p>
          
          <!-- Example of comment field -->
          <div id="demo2" style="display:none">
            <div class="w3-row">
              <hr>
              <div class="w3-col l2 m3">
                <img src=".img/girl_train.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>Amber <span class="w3-opacity w3-medium">April 26, 2015, 10:52 PM</span></h4>
                <p>Love your blog page! Simply the best! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
              </div>
            </div>
            <div class="w3-row w3-margin-bottom">
              <div class="w3-col l2 m3">
                <img src=".img/girl.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>Angie <span class="w3-opacity w3-medium">April 23, 2015, 9:12 PM</span></h4>
                <p>Love hats!!</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>TITLE HEADING</h3>
          <h5>Title description, <span class="w3-opacity">April 7, 2016</span></h5>
        </div>

        <div class="w3-justify">
          <img src=".img/runway.jpg" alt="Runway" style="width:100%" class="w3-padding-16">
          <p><strong>Dont miss!</strong> The runway in New York City this weekend is gonna be legendary!</p>
          <p>Some text about this blog entry. Fashion fashion and mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies
            mi non congue ullam corper. Praesent tincidunt sedtellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
          <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction('demo3')"><b>Replies  </b> <span class="w3-tag w3-white">3</span></button></p>
          <p class="w3-clear"></p>
          
          <!-- Example of comment field -->
          <div id="demo3" style="display:none">
            <hr>
            <div class="w3-row w3-margin-bottom">
              <div class="w3-col l2 m3">
                <img src=".img/girl_mountain.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>Jane <span class="w3-opacity w3-medium">April 10, 2015, 7:22 PM</span></h4>
                <p>That was a great runway show! Thanks for everything.</p>
              </div>
            </div>
            <div class="w3-row w3-margin-bottom">
              <div class="w3-col l2 m3">
                <img src=".img/boy.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>John <span class="w3-opacity w3-medium">April 8, 2015, 10:32 PM</span></h4>
                <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
              </div>
            </div>
            <div class="w3-row w3-margin-bottom">
              <div class="w3-col l2 m3">
                <img src=".img/girl_hood.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>Anja <span class="w3-opacity w3-medium">April 7, 2015, 9:12 PM</span></h4>
                <p>Cant wait for the runway to start!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    <!-- END BLOG ENTRIES -->
    </div>

    <!-- About/Information menu -->
    <div class="w3-col l4">
      <!-- About Card -->
      <div class="w3-white w3-margin">
        <img src=".img/May2.jpg" alt="May2" style="width:100%" class="w3-grayscale">
        <div class="w3-container w3-black">
          <h4>Vân nè</h4>
          <p>Chào mọi người, mình là Khánh Vân. Có thể gọi mình là Mây. Mình không phải là một kẻ viết hay, không phải người kể chuyện,
             cũng chẳng là ai cả. Đơn giản là một người thích viết, thích viết những trải nghiệm và tâm sự của bản thân. Đối với mình,
            viết là ghi lại quá trình trưởng thành về mặt nhận thức của một người. Mình lập trang này, cốt chỉ để viết ra những góc nhìn,
             những trải nghiệm mới, để sau này, khi đọc lại, mình đã biết Khánh Vân của năm ấy đã thay đổi nhường nào..</p>
        </div>
      </div>
      <hr>

      <!-- Posts -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Popular Posts</h4>
        </div>
        <ul class="w3-ul w3-hoverable w3-white">
          <li class="w3-padding-16">
            <img src=".img/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">Denim</span>
            <br>
            <span>Sed mattis nunc</span>
          </li>
          <li class="w3-padding-16">
            <img src=".img/bandmember.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">Sweaters</span>
            <br>
            <span>Praes tinci sed</span>
          </li>
          <li class="w3-padding-16">
            <img src=".img/workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">Chuyện linh tinh</span>
            <br>
            <span>Ultricies congue</span>
          </li>
          <li class="w3-padding-16">
            <img src=".img/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px">
            <span class="w3-large">Trends</span>
            <br>
            <span>Lorem ipsum dipsum</span>
          </li>
        </ul>
      </div>
      <hr>

      <!-- Advertising -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Advertise</h4>
        </div>
        <div class="w3-container w3-white">
          <div class="w3-container w3-display-container w3-light-grey w3-section" style="height:200px">
            <span class="w3-display-middle">Your AD Here</span>
          </div>
        </div>
      </div>
      <hr>

      <!-- Tags -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Tags</h4>
        </div>
        <div class="w3-container w3-white">
          <p>
            <span class="w3-tag w3-black w3-margin-bottom">Fashion</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Hats</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Norway</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sweaters</span>
            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Deals</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Accessories</span>
            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Shopping</span>
            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Jeans</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Trends</span>
          </p>
        </div>
      </div>
      <hr>

      <!-- Inspiration -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Inspiration</h4>
        </div>
        <div class="w3-row-padding w3-white">
          <div class="w3-col s6">
            <p><img src=".img/jeans.jpg" alt="Jeans" style="width:100%"></p>
            <p><img src=".img/team1.jpg" alt="Jeans" style="width:100%"></p>
          </div>
          <div class="w3-col s6">
            <p><img src=".img/avatar_hat.jpg" alt="Men in Hats" style="width:100%" class="w3-grayscale"></p>
            <p><img src=".img/team4.jpg" alt="Jeans" style="width:100%"></p>
         </div>
        </div>
      </div>
      <hr>

      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Follow Me</h4>
        </div>
        <div class="w3-container w3-xlarge w3-padding">
          <a href="https://www.facebook.com/k.van25"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
          <i class="fa fa-instagram w3-hover-opacity"></i>
          <i class="fa fa-snapchat w3-hover-opacity"></i>
          <i class="fa fa-pinterest-p w3-hover-opacity"></i>
          <i class="fa fa-twitter w3-hover-opacity"></i>
          <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
      </div>
      <hr>
      
      <!-- Subscribe -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Subscribe</h4>
        </div>
        <div class="w3-container w3-white">
          <p>Enter your e-mail below and get notified on the latest blog posts.</p>
          <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" style="width:100%"></p>
          <p><button type="button" onclick="document.getElementById('subscribe').style.display='block'" class="w3-button w3-block w3-red">Subscribe</button></p>
        </div>
      </div>

    <!-- END About/Intro Menu -->
    </div>

  <!-- END GRID -->
  </div>

<!-- END w3-content -->
</div>

<!-- Subscribe Modal -->
<div id="subscribe" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content" style="padding:32px">
    <div class="w3-container w3-white">
      <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
      <h2 class="w3-wide">SUBSCRIBE</h2>
      <p>Join my mailing list to receive updates on the latest blog posts and other things.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('subscribe').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey" style="padding:32px">
  <a href="#" class="w3-button w3-black w3-padding-large w3-margin-bottom"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
</footer>

<script>
// Toggle between hiding and showing blog replies/comments
document.getElementById("myBtn").click();
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

function likeFunction(x) {
  x.style.fontWeight = "bold";
  x.innerHTML = "✓ Liked";
}
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- button readmore/readless -->
<script>
  function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }
  </script>
</body>
</html>
