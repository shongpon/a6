<?php


/* @var $this yii\web\View */
$this->title = 'My Yii Application';


Yii::$app->view->registerJsFile('healthmenu.js  ',['position' => yii\web\View::POS_END]);
$this->registerCssFile(Yii::$app->request->baseUrl.'/healthmenu.css'); 

?>
    <!-- BEGIN SLIDER -->
    <div class="page-slider margin-bottom-40">
      <div class="fullwidthbanner-container revolution-slider">
        <div class="fullwidthabnner">
          <ul id="revolutionul">
            <!-- THE NEW SLIDE -->
            <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="assets/frontend/pages/img/revolutionslider/thumbs/thumb2.jpg">
              <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
              <img src="assets/frontend/pages/img/revolutionslider/bg9.jpg" alt="">
              
              <div class="caption lft slide_title_white slide_item_left"
                data-x="30"
                data-y="90"
                data-speed="400"
                data-start="1500"
                data-easing="easeOutExpo">
                ศูนย์ข้อมูลสุขภาพประชาชน<br><span class="slide_title_white_bold">จังหวัดสระแก้ว</span>
              </div>
              <div class="caption lft slide_subtitle_white slide_item_left"
                data-x="87"
                data-y="245"
                data-speed="400"
                data-start="2000"
                data-easing="easeOutExpo">
                This is what you were looking for
              </div>
              <a class="caption lft btn dark slide_btn slide_item_left" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes"
                data-x="187"
                data-y="315"
                data-speed="400"
                data-start="3000"
                data-easing="easeOutExpo">
                Purchase Now!
              </a>                        
              <div class="caption lfb"
                data-x="640" 
                data-y="0" 
                data-speed="700" 
                data-start="1000" 
                data-easing="easeOutExpo">
                <img src="assets/frontend/pages/img/revolutionslider/lady.png" alt="Image 1">
              </div>
            </li>    

            <!-- THE FIRST SLIDE -->
            <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="assets/frontend/pages/img/revolutionslider/thumbs/thumb2.jpg">
              <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
              <img src="assets/frontend/pages/img/revolutionslider/bg1.jpg" alt="">
                            
              <div class="caption lft slide_title slide_item_left"
                data-x="30"
                data-y="105"
                data-speed="400"
                data-start="1500"
                data-easing="easeOutExpo">
                Need a website design? 
              </div>
              <div class="caption lft slide_subtitle slide_item_left"
                data-x="30"
                data-y="180"
                data-speed="400"
                data-start="2000"
                data-easing="easeOutExpo">
                This is what you were looking for
              </div>
              <div class="caption lft slide_desc slide_item_left"
                data-x="30"
                data-y="220"
                data-speed="400"
                data-start="2500"
                data-easing="easeOutExpo">
                Lorem ipsum dolor sit amet, dolore eiusmod<br> quis tempor incididunt. Sed unde omnis iste.
              </div>
              <a class="caption lft btn green slide_btn slide_item_left" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes"
                data-x="30"
                data-y="290"
                data-speed="400"
                data-start="3000"
                data-easing="easeOutExpo">
                Purchase Now!
              </a>                        
              <div class="caption lfb"
                data-x="640" 
                data-y="55" 
                data-speed="700" 
                data-start="1000" 
                data-easing="easeOutExpo">
                <img src="assets/frontend/pages/img/revolutionslider/man-winner.png" alt="Image 1">
              </div>
            </li>

            <!-- THE SECOND SLIDE -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-delay="9400" data-thumb="assets/frontend/pages/img/revolutionslider/thumbs/thumb2.jpg">                        
              <img src="assets/frontend/pages/img/revolutionslider/bg2.jpg" alt="">
              <div class="caption lfl slide_title slide_item_left"
                data-x="30"
                data-y="125"
                data-speed="400"
                data-start="3500"
                data-easing="easeOutExpo">
                Powerfull &amp; Clean
              </div>
              <div class="caption lfl slide_subtitle slide_item_left"
                data-x="30"
                data-y="200"
                data-speed="400"
                data-start="4000"
                data-easing="easeOutExpo">
                Responsive Admin &amp; Website Theme
              </div>
              <div class="caption lfl slide_desc slide_item_left"
                data-x="30"
                data-y="245"
                data-speed="400"
                data-start="4500"
                data-easing="easeOutExpo">
                Lorem ipsum dolor sit amet, consectetuer elit sed diam<br> nonummy amet euismod dolore.
              </div>                        
              <div class="caption lfr slide_item_right" 
                data-x="635" 
                data-y="105" 
                data-speed="1200" 
                data-start="1500" 
                data-easing="easeOutBack">
                <img src="assets/frontend/pages/img/revolutionslider/mac.png" alt="Image 1">
              </div>
              <div class="caption lfr slide_item_right" 
                data-x="580" 
                data-y="245" 
                data-speed="1200" 
                data-start="2000" 
                data-easing="easeOutBack">
                <img src="assets/frontend/pages/img/revolutionslider/ipad.png" alt="Image 1">
              </div>
              <div class="caption lfr slide_item_right" 
                data-x="735" 
                data-y="290" 
                data-speed="1200" 
                data-start="2500" 
                data-easing="easeOutBack">
                <img src="assets/frontend/pages/img/revolutionslider/iphone.png" alt="Image 1">
              </div>
              <div class="caption lfr slide_item_right" 
                data-x="835" 
                data-y="230" 
                data-speed="1200" 
                data-start="3000" 
                data-easing="easeOutBack">
                <img src="assets/frontend/pages/img/revolutionslider/macbook.png" alt="Image 1">
              </div>
              <div class="caption lft slide_item_right" 
                data-x="865" 
                data-y="45" 
                data-speed="500" 
                data-start="5000" 
                data-easing="easeOutBack">
                <img src="assets/frontend/pages/img/revolutionslider/hint1-red.png" id="rev-hint1" alt="Image 1">
              </div>                        
              <div class="caption lfb slide_item_right" 
                data-x="355" 
                data-y="355" 
                data-speed="500" 
                data-start="5500" 
                data-easing="easeOutBack">
                <img src="assets/frontend/pages/img/revolutionslider/hint2-red.png" id="rev-hint2" alt="Image 1">
              </div>
            </li>
                        
            <!-- THE THIRD SLIDE -->
            <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="assets/frontend/pages/img/revolutionslider/thumbs/thumb2.jpg">
              <img src="assets/frontend/pages/img/revolutionslider/bg3.jpg" alt="">
              <div class="caption lfl slide_item_left" 
                data-x="30" 
                data-y="95" 
                data-speed="400" 
                data-start="1500" 
                data-easing="easeOutBack">
                <iframe src="http://player.vimeo.com/video/56974716?portrait=0" width="420" height="240" style="border:0" allowFullScreen></iframe> 
              </div>
              <div class="caption lfr slide_title"
                data-x="470"
                data-y="100"
                data-speed="400"
                data-start="2000"
                data-easing="easeOutExpo">
                Responsive Video Support
              </div>
              <div class="caption lfr slide_subtitle"
                data-x="470"
                data-y="170"
                data-speed="400"
                data-start="2500"
                data-easing="easeOutExpo">
                Youtube, Vimeo and others.
              </div>
              <div class="caption lfr slide_desc"
                data-x="470"
                data-y="220"
                data-speed="400"
                data-start="3000"
                data-easing="easeOutExpo">
                Lorem ipsum dolor sit amet, consectetuer elit sed diam<br> nonummy amet euismod dolore.
              </div>
              <a class="caption lfr btn yellow slide_btn" href=""
                data-x="470"
                data-y="280"
                                 data-speed="400"
                                 data-start="3500"
                                 data-easing="easeOutExpo">
                                 Watch more Videos!
                            </a>
                        </li>               
                        
                        <!-- THE FORTH SLIDE -->
                        <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="assets/frontend/pages/img/revolutionslider/thumbs/thumb2.jpg">
                            <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                            <img src="assets/frontend/pages/img/revolutionslider/bg4.jpg" alt="">                        
                             <div class="caption lft slide_title"
                                 data-x="30"
                                 data-y="105"
                                 data-speed="400"
                                 data-start="1500"
                                 data-easing="easeOutExpo">
                                 What else included ?
                            </div>
                            <div class="caption lft slide_subtitle"
                                 data-x="30"
                                 data-y="180"
                                 data-speed="400"
                                 data-start="2000"
                                 data-easing="easeOutExpo">
                                 The Most Complete Admin Theme
                            </div>
                            <div class="caption lft slide_desc"
                                 data-x="30"
                                 data-y="225"
                                 data-speed="400"
                                 data-start="2500"
                                 data-easing="easeOutExpo">
                                 Lorem ipsum dolor sit amet, consectetuer elit sed diam<br> nonummy amet euismod dolore.
                            </div>
                            <a class="caption lft slide_btn btn red slide_item_left" href="http://www.keenthemes.com/preview/index.php?theme=metronic_admin" target="_blank" 
                                 data-x="30"
                                 data-y="300"
                                 data-speed="400"
                                 data-start="3000"
                                 data-easing="easeOutExpo">
                                 Learn More!
                            </a>                        
                            <div class="caption lft start"  
                                 data-x="670" 
                                 data-y="55" 
                                 data-speed="400" 
                                 data-start="2000" 
                                 data-easing="easeOutBack"  >
                                 <img src="assets/frontend/pages/img/revolutionslider/iphone_left.png" alt="Image 2">
                            </div>
                            
                            <div class="caption lft start"  
                                 data-x="850" 
                                 data-y="55" 
                                 data-speed="400" 
                                 data-start="2400" 
                                 data-easing="easeOutBack"  >
                                 <img src="assets/frontend/pages/img/revolutionslider/iphone_right.png" alt="Image 3">
                            </div>                        
                        </li>
                </ul>
                <div class="tp-bannertimer tp-bottom"></div>
            </div>
        </div>
    </div>
    <!-- END SLIDER -->


  



    <div class="main">
      <div class="container">


<div class="nuxion">
    
    <!-- Start MainMenu Bar -->
    <div class="nav-mainmenu nav-largesize">
    
      <!-- Start Main Item - Demo -->
      <a href="#" class="nav-mainitem nav-hover-bluelight floatleft" style="visibility: visible;">
        <span class="nav-icon"><img src="images/anc.png" alt="cloud-sun"></span>
        <span class="nav-title">ตั้งครรภ์/คลอด</span>
      </a>
      <!-- End Main Item - Demo -->
      
    
      <!-- Start ListStyle Item -->
      <a class="nav-mainitem nav-hover-bluelight floatleft" data-navid="nav-liststyle" style="visibility: visible;">
        <span class="nav-icon"><img src="images/baby.png" alt="cloud-sun"></span>
        <span class="nav-title">เด็กอ่อน</span>
      </a>
      <!-- End ListStyle -->
      
      <!-- Start Contact Item -->
      <a class="nav-mainitem nav-hover-bluelight floatleft" data-navid="nav-contact" style="visibility: visible;">
        <span class="nav-icon"><img src="images/child.png" alt="cloud-sun"></i></span>
        <span class="nav-title">ประถมวัย</span>
      </a>
      <!-- End Contact Item -->
      
      <!-- Start AboutUs Item -->
      <a class="nav-mainitem nav-hover-bluelight floatleft" data-navid="nav-aboutus" style="visibility: visible;">
        <span class="nav-icon"><img src="images/young.png" alt="cloud-sun"></span>
        <span class="nav-title">วัยรุ่น</span>
      </a>
      <!-- End AboutUs Item -->
      
      <!-- Start Paragraph Item -->
      <a class="nav-mainitem nav-hover-bluelight floatleft" data-navid="nav-para" style="visibility: visible;">
        <span class="nav-icon"><img src="images/worker.png" alt="cloud-sun"></span>
        <span class="nav-title">วัยทำงาน</span>
      </a>
      <!-- End Paragraph Item -->
      
      <!-- Start Portfolio Item -->
      <a class="nav-mainitem nav-hover-bluelight floatleft" data-navid="nav-portfolio" style="visibility: visible;">
        <span class="nav-icon"><img src="images/elder.png" alt="cloud-sun"></span>
        <span class="nav-title">วัยชรา/ผู้พิการ</span>
      </a>
      <!-- End Portfolio Item -->
      
      <!-- Start Shopping Cart Item -->
      <a class="nav-mainitem nav-hover-bluelight floatleft" data-navid="nav-cart" style="visibility: visible;">
        <span class="nav-icon"><img src="images/death.png" alt="cloud-sun"></span>
        <span class="nav-title">เสียชีวิต</span>
      </a>
      <!-- End Shopping Cart Item -->
      

      
      <!-- Start Link Item -->
      
      <!-- Start Link Item -->
      
      <!-- Start Login Item -->
      
      <!-- End Login Item -->
      
      
    <div class="nav-moremenu" style="display: block;"><div class="nav-moreitem nav-hover-bluelight"><span class="nav-icon"><i class="fa fa-bars"></i></span><span class="nav-title">More</span></div><div class="nav-stackeditemcontainer img-retinawood" style="width: 960px;"><a href="#" class="nav-mainitem nav-hover-bluelight floatleft nav-stackeditem" style="visibility: visible;">
        <span class="nav-icon"><i class="fa fa-link"></i></span>
        <span class="nav-title">Link</span>
      </a><a class="nav-mainitem nav-hover-bluelight floatleft nav-stackeditem" data-navid="nav-login" style="visibility: visible;">
        <span class="nav-icon"><i class="fa fa-sign-in"></i></span>
        <span class="nav-title">Login</span>
      </a></div></div></div><div class="clearspace"></div>
    <!-- End MainMenu Bar -->
  

  
    <!-- Start SubMenu Station -->
    <div class="nav-substation">
    
    
      <!-- Start Sample SubMenu -->
      <div class="nav-submenu" data-navid="navid">
      
        <div class="transparent-smoke dark-text nav-sub-container">

          <div class="nav-submenu-content">
          
          </div>
          
        </div>
        
      </div>
      <!-- End Sample SubMenu -->
      
      

      
      <!-- Start ListStyle SubMenu -->
      <div class="nav-submenu" data-navid="nav-liststyle">
        
        <div class="transparent-smoke dark-text nav-sub-container">
        
          <div class="nav-submenu-content">
          
            <div class="nav-col-4 transparent-mist">
              <h3 class="list-title">Font Awesome</h3>
              <ul class="sub-list-small">
                <li>
                  <a>
                    <span><i class="fa fa-beer"></i></span>
                    <span>Font Awesome 1</span>
                  </a>
                </li>
                <li>
                  <a>
                    <span><i class="fa fa-coffee"></i></span>
                    <span>Font Awesome 2</span>
                  </a>
                </li>
                <li>
                  <a>
                    <span><i class="fa fa-group"></i></span>
                    <span>Font Awesome 3</span>
                  </a>
                </li>
                <li>
                  <a>
                    <span><i class="fa fa-star"></i></span>
                    <span>Font Awesome 4</span>
                  </a>
                </li>
              </ul>
            </div>
          
          
            <div class="nav-col-4 transparent-mist">
              <h3 class="list-title">MarketPlaces</h3>
              <ul class="sub-list-small">
                <li>
                  <a>
                    <span><img src="images/demo/codecanyon.png" alt="CodeCanyon"></span>
                    <span>CodeCanyon</span>
                  </a>
                </li>
                
                <li>
                  <a>
                    <span><img src="images/demo/themeforest.png" alt="ThemeForest"></span>
                    <span>ThemeForest</span>
                  </a>
                </li>
                
                <li>
                  <a>
                    <span><img src="images/demo/videohive.png" alt="VideoHive"></span>
                    <span>VideoHive</span>
                  </a>
                </li>
                
                <li>
                  <a>
                    <span><img src="images/demo/activeden.png" alt="ActiveDen"></span>
                    <span>ActiveDen</span>
                  </a>
                </li>
                
              </ul>
            </div>
          
            <div class="nav-col-4 transparent-mist">
              <h3 class="list-title">Web Tech</h3>
              <ul class="sub-list-small">
                <li>
                  <a>
                    <span><i class="fa fa-beer"></i></span>
                    <span>HTML</span>
                  </a>
                </li>
                <li>
                  <a>
                    <span><i class="fa fa-beer"></i></span>
                    <span>CSS</span>
                  </a>
                </li>
                <li>
                  <a>
                    <span><i class="fa fa-beer"></i></span>
                    <span>Javascript</span>
                  </a>
                </li>
                <li>
                  <a>
                    <span><i class="fa fa-beer"></i></span>
                    <span>PHP</span>
                  </a>
                </li>
              </ul>
            </div>
          
            <div class="nav-col-4 transparent-mist">
              <h3 class="list-title">Business</h3>
              <ul class="sub-list-small">
                <li>
                  <a>
                    <span><i class="fa fa-beer"></i></span>
                    <span>Web Applications</span>
                  </a>
                </li>
                <li>
                  <a>
                    <span><i class="fa fa-beer"></i></span>
                    <span>Web Design</span>
                  </a>
                </li>
                <li>
                  <a>
                    <span><i class="fa fa-beer"></i></span>
                    <span>Marketing</span>
                  </a>
                </li>
                <li>
                  <a>
                    <span><i class="fa fa-beer"></i></span>
                    <span>User Behavior Research</span>
                  </a>
                </li>
                
              </ul>
            </div>
            <div class="clearspace"></div>
        
        
          </div>
        
        </div>
        
      </div>
      <!-- End ListStyle SubMenu -->
      
      
      
      
      <!-- Start Contact SubMenu -->
      <div class="nav-submenu" data-navid="nav-contact">
      
        <div class="transparent-smoke dark-text nav-sub-container">

          <div class="nav-submenu-content">
          
          
            <div class="nav-col-2">
              <p>
                <img src="images/demo/scottwills_cityscape_s.jpg" alt="demo" class="nav-img-fullwidth">
              </p>
              
              <p>
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
              </p>
            
              <!-- Start Social Buttons -->
              <h3 class="margin-top-20">Social Connections</h3>
              <p>
                <a href="#" class="nav-socialbt solid-red floatleft"><img src="images/demo/google.png" alt="connect google"></a>
                <a href="#" class="nav-socialbt solid-blue-2 light-text floatleft margin-left-5"><i class="fa fa-facebook"></i></a>
                <a href="#" class="nav-socialbt solid-blue floatleft margin-left-5"><img src="images/demo/twitter.png" alt="connect twitter"></a>
              </p>
              <!-- Start Social Buttons -->
            
            
            </div>
          
            <div class="nav-col-2">
              <form name="contactform" class="nav-contactform" method="post">
              
                <input type="text" class="transparent-mist" name="fullname" value="Fullname" maxlength="100" onblur="this.value=this.value==''?'Fullname':this.value;" onfocus="if(this.value=='Fullname') this.value=''">
                
                <input type="text" class="transparent-mist" name="email" value="Email" maxlength="100" onblur="this.value=this.value==''?'Email':this.value;" onfocus="if(this.value=='Email') this.value=''">
                
                <input type="text" class="transparent-mist" name="subject" value="Subject" maxlength="255" onblur="this.value=this.value==''?'Subject':this.value;" onfocus="if(this.value=='Subject') this.value=''">
                
                <textarea class="transparent-mist" name="message" onblur="this.value=this.value==''?'Message...':this.value;" onfocus="if(this.value=='Message...') this.value=''">Message...</textarea>
                
                
                <label for="nav-sendmail" class="nav-submitbt nav-hover-bluelight transparent-mist floatright">
                  <!--<span><img src="images/demo/send-mail.png" alt="send mail" /></span>-->
                  <span><i class="fa fa-reply"></i></span>
                  <span>Submit</span>
                </label>
                <input type="submit" name="submit" id="nav-sendmail" value="" class="none">
              
              </form>
            </div><div class="clearspace"></div>

          </div>
          
        </div>
        
      </div>
      <!-- End Contact SubMenu -->
      
      
      
      
      
      
      <!-- Start AboutUs SubMenu -->
      <div class="nav-submenu" data-navid="nav-aboutus">
      
        <div class="transparent-smoke dark-text nav-sub-container">

          <div class="nav-submenu-content">
          
          
            <div class="nav-col-2">
            
              <h2>About Us</h2>
              
              <div class="nav-col-4">
                <p>
                <img src="images/demo/cyan_businesshandshake_s.jpg" alt="demo-aboutus" class="nav-img-fullwidth">
                </p>
              </div>
              
              <div class="nav-col-4 floatright">
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a ante at lorem venenatis pellentesque. Maecenas consequat venenatis tellus ac ultricies. Nullam id congue mi.
                </p>
              </div>
              <div class="clearspace"></div>
              
              <div class="image-ribbon transparent-mist">
                <div class="image-items">
                  <img src="images/demo/book06_s.jpg" alt="">
                </div>
                <div class="image-items">
                  <img src="images/demo/card02_s.jpg" alt="">
                </div>
                <div class="image-items">
                  <img src="images/demo/leaflet10_s.jpg" alt="">
                </div>
                <div class="image-items">
                  <img src="images/demo/moo05_s.jpg" alt="">
                </div><div class="clearspace"></div>
              </div>
              
              <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a ante at lorem venenatis pellentesque. Maecenas consequat venenatis tellus ac ultricies. Nullam id congue mi. Aenean tincidunt magna sed ipsum rhoncus blandit bibendum magna suscipit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam sollicitudin ipsum diam. Integer odio nulla, mattis eu imperdiet commodo, fermentum vitae diam. Etiam ultrices cursus neque, nec elementum mi venenatis convallis.
              
              </p>
            
            </div>
            
            <div class="nav-col-2">
            
              <h2>Timeline</h2>
            
              <table class="nav-table">
                <tbody><tr>
                  <td class="center-align solid-green-2 light-text"><p>2014</p></td>
                  <td class="transparent-mist">
                    <ul class="list-circle">
                      <li class=""><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a ante at lorem venenatis pellentesque. Maecenas consequat venenatis tellus ac ultricies. Nullam id congue mi.</p></li>
                      <li class=""><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></li>
                      <li class=""><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></li>
                    </ul>                                            
                  </td>
                </tr>

                <tr>
                  <td class="center-align solid-orange-2 light-text"><p>2012</p></td>
                  <td class="transparent-mist">
                    <ul class="list-circle">
                      <li><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></li>
                    </ul>                                            
                  </td>
                </tr>

                <tr>
                  <td class="center-align solid-orange-2 light-text"><p>2010</p></td>
                  <td class="transparent-mist">
                    <ul class="list-circle">
                      <li><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></li>
                    </ul>                                            
                  </td>
                </tr>

                <tr>
                  <td class="center-align solid-orange-2 light-text"><p>2009</p></td>
                  <td class="transparent-mist">
                    <ul class="list-circle">
                      <li><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></li>
                    </ul>                                            
                  </td>
                </tr>

                <tr>
                  <td class="center-align solid-orange-2 light-text"><p>2000</p></td>
                  <td class="transparent-mist">
                    <ul class="list-circle">
                      <li><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></li>
                    </ul>                                            
                  </td>
                </tr>

              </tbody></table>
                
            </div>
            
            <div class="clearspace"></div>
            
            
          </div>
          
        </div>
        
      </div>
      <!-- End AboutUs SubMenu -->
      
      
      
      
      
      <!-- Start Paragraph SubMenu -->
      <div class="nav-submenu" data-navid="nav-para">
      
        <div class="transparent-smoke dark-text nav-sub-container">

          <div class="nav-submenu-content">
          
          
          <h3>Our Team</h3>
        
          <p class="margin-top-20">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
            
          </p>
          
          <div class="clearspace"></div>
        
          </div>
          
        </div>
        
      </div>
      <!-- End Paragraph SubMenu -->
      
      
      
      
      
      
      
      <!-- Start Portfolio SubMenu -->
      <div class="nav-submenu" data-navid="nav-portfolio">
      
        <div class="transparent-smoke dark-text nav-sub-container">

          <div class="nav-submenu-content">
          
          
            <div class="nav-col-3 dark-text">
              <p>
                <img src="images/demo/metrobox-banner.png" alt="metrobox" class="nav-img-fullwidth">
              </p>
              
              <h3 class="margin-top-20"><span>Lorem ipsum dolor sit amet</span></h3>
              
              <p>
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
              </p>
              
              <p>
              <a href="#" class="nav-metrobt solid-green light-text">
                <span><i class="fa fa-heart"></i></span>
                <span>See more</span>
              </a>
              </p>
            </div>
            
            
            <div class="nav-col-3 dark-text">
              <p>
                <img src="images/demo/tabion-css-banner.png" alt="metrobox" class="nav-img-fullwidth">
              </p>
              
              <h3 class="margin-top-20"><span>Lorem ipsum dolor sit amet</span></h3>
              
              <p>
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
              </p>
              
              <p>
              <a href="#" class="nav-metrobt solid-green light-text">
                <span><i class="fa fa-heart"></i></span>
                <span>See more</span>
              </a>
              </p>
            </div>
            
            
            <div class="nav-col-3 dark-text">
              <p>
                <img src="images/demo/tilebox-css-banner.png" alt="metrobox" class="nav-img-fullwidth">
              </p>
              
              <h3 class="margin-top-20"><span>Lorem ipsum dolor sit amet</span></h3>
              
              <p>
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
              </p>
              
              <p>
              <a href="#" class="nav-metrobt solid-green light-text">
                <span><i class="fa fa-heart"></i></span>
                <span>See more</span>
              </a>
              </p>
            </div><div class="clearspace"></div>
            
            
            
            
          </div>
          
        </div>
        
      </div>
      <!-- End Portfolio SubMenu -->
      
      
      
      
      
      <!-- Start Feedback SubMenu -->
      <div class="nav-submenu" data-navid="nav-feed">
      
        <div class="transparent-smoke dark-text nav-sub-container">
          
          <div class="nav-submenu-content">
            
            <div class="nav-col-3">
              <div class="nav-avatar solid-blue-2 floatleft">
                <img src="images/demo/avatar-01.png" alt="" class="">
              </div>
              <div class="nav-feed-content floatleft">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a ante at lorem venenatis pellentesque. Maecenas consequat venenatis tellus ac ultricies. Nullam id congue mi. Aenean tincidunt magna sed ipsum rhoncus blandit bibendum magna suscipit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
              </div>
            </div>
            
            <div class="nav-col-3">
              <div class="nav-avatar solid-red-2 floatleft">
                <img src="images/demo/avatar-02.png" alt="" class="">
              </div>
              <div class="nav-feed-content floatleft">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a ante at lorem venenatis pellentesque. Maecenas consequat venenatis tellus ac ultricies. Nullam id congue mi. Aenean tincidunt magna sed ipsum rhoncus blandit bibendum magna suscipit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
              </div>
            </div>
            
            <div class="nav-col-3">
              <div class="nav-avatar solid-green-2 floatleft">
                <img src="images/demo/avatar-03.png" alt="" class="">
              </div>
              <div class="nav-feed-content floatleft">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a ante at lorem venenatis pellentesque. Maecenas consequat venenatis tellus ac ultricies. Nullam id congue mi. Aenean tincidunt magna sed ipsum rhoncus blandit bibendum magna suscipit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
              </div>
            </div>
            
            <div class="clearspace"></div>
            
          </div>
          
        </div>
        
      </div>
      <!-- End Feedback SubMenu -->
      

      
      <!-- Start Shopping Cart Submenu -->
      <div class="nav-submenu" data-navid="nav-cart">
      
        <div class="transparent-smoke dark-text nav-sub-container">

          <div class="nav-submenu-content">
          
          
            <h2>Shopping Cart</h2>

            <div class="nav-col-1">
            
              <div class="nav-cart">
              
                <div class="nav-cart-header">
                  <span class="nav-cart-item-no">#</span>
                  <span class="nav-cart-item-name">Item Name</span>
                  <span class="nav-cart-item-qty">Qty</span>
                  <span class="nav-cart-item-note">Note</span>
                  <span class="nav-cart-item-price">Price</span>
                </div>
                
                <div class="nav-cart-detail">
                  <span class="nav-cart-item-no">1.</span>
                  <span class="nav-cart-item-name">MetroBox jQuery Plugin</span>
                  <span class="nav-cart-item-qty">1</span>
                  <span class="nav-cart-item-note">Regular License</span>
                  <span class="nav-cart-item-price">$10.00</span>
                  <span class="nav-cart-item-rm"><i class="fa fa-times"></i></span>
                </div>
                
                <div class="nav-cart-detail">
                  <span class="nav-cart-item-no">2.</span>
                  <span class="nav-cart-item-name">Tabion CSS Plugin</span>
                  <span class="nav-cart-item-qty">1</span>
                  <span class="nav-cart-item-note">Regular License</span>
                  <span class="nav-cart-item-price">$4.00</span>
                  <span class="nav-cart-item-rm"><i class="fa fa-times"></i></span>
                </div>
                
                <div class="nav-cart-detail">
                  <span class="nav-cart-item-no">3.</span>
                  <span class="nav-cart-item-name">TileBox CSS Plugin</span>
                  <span class="nav-cart-item-qty">1</span>
                  <span class="nav-cart-item-note">Regular License</span>
                  <span class="nav-cart-item-price">$4.00</span>
                  <span class="nav-cart-item-rm"><i class="fa fa-times"></i></span>
                </div>
                
                <div class="nav-cart-detail">
                  <span class="nav-cart-item-no">4.</span>
                  <span class="nav-cart-item-name">OpenPanel jQuery Plugin</span>
                  <span class="nav-cart-item-qty">1</span>
                  <span class="nav-cart-item-note">Regular License</span>
                  <span class="nav-cart-item-price">$8.00</span>
                  <span class="nav-cart-item-rm"><i class="fa fa-times"></i></span>
                </div>
                <div class="nav-cart-detail">
                  <span class="nav-cart-item-no">5.</span>
                  <span class="nav-cart-item-name">MetroTab jQuery Plugin</span>
                  <span class="nav-cart-item-qty">1</span>
                  <span class="nav-cart-item-note">Extended License</span>
                  <span class="nav-cart-item-price">$25.00</span>
                  <span class="nav-cart-item-rm"><i class="fa fa-times"></i></span>
                </div>
              
              </div>
      
            </div>
          
            <div class="nav-col-4">
          
              <div class="nav-cart-sum">
                <div>
                  <span>Item Price:</span>
                  <span>$51.00</span>
                </div>
                <div>
                  <span>TAX (10%):</span>
                  <span>$5.10</span>
                </div>
                <div>
                  <span>Shipping:</span>
                  <span>$0.00</span>
                </div>
                <div class="nav-cart-total">
                  <span>Total:</span>
                  <span>$56.10</span>
                </div>
              </div>
            
              
              <div class="nav-cart-checkout solid-red light-text">
                <a href="#">
                <span>Checkout</span>
                </a>
              </div>
          
            </div>
            <div class="clearspace"></div>
          
          </div>
          
        </div>
        
      </div>
      <!-- End Shopping Cart SubMenu-->
      
      
      
      
      <!-- Start Login SubMenu -->
      <div class="nav-submenu" data-navid="nav-login">
      
        <div class="transparent-smoke dark-text nav-sub-container">

          <div class="nav-submenu-content">
          
            <!-- Start Registration Form -->
            <div class="nav-col-2">
            
              <h2>Register</h2>
            
              <form name="registrationform" method="post" class="nav-loginform">
          
                <input type="text" id="fullname" class="img-navyblue light-text" name="fullname" maxlength="100" onblur="this.style.zIndex=this.value==''?'9997':'9999';">
                <label for="fullname" class="light-text">Full Name</label>
                
                
                <input type="text" id="username" class="light-text" name="username" value="" maxlength="100" onblur="this.style.zIndex=this.value==''?'9997':'9999';">
                <label for="username" class="light-text">Username</label>
                
                
                <input type="password" id="password" class="light-text" name="password" value="" maxlength="50" onblur="this.style.zIndex=this.value==''?'9997':'9999';">
                <label for="password" class="light-text">Password</label>
                
                
                <input type="password" id="re-password" class="light-text" name="re-password" value="" maxlength="50" onblur="this.style.zIndex=this.value==''?'9997':'9999';">
                <label for="re-password" class="light-text">Confirm Password</label>
                
                
                <input type="text" id="email" class="light-text" name="email" value="" maxlength="100" onblur="this.style.zIndex=this.value==''?'9997':'9999';">
                <label for="email" class="light-text">Email</label>
                
                
                <input type="text" id="re-email" class="light-text" name="re-email" value="" maxlength="100" onblur="this.style.zIndex=this.value==''?'9997':'9999';">
                <label for="re-email" class="light-text">Confirm Email</label>
                
                
                <input type="submit" name="create-account" value="CREATE ACCOUNT" class="solid-red light-text">
                
              </form>
              
            </div>
            <!-- End Registration Form -->
            
            <!-- Start Lgoin Form -->
            <div class="nav-col-2">
              
              <h2>Login</h2>
              
              <form name="loginform" method="post" class="nav-loginform">
          
                <input type="text" class="nav-login-user light-text" name="username" value="" maxlength="100">
                
                <input type="password" class="nav-login-password light-text" name="password" value="" maxlength="50">
                
                <input type="submit" name="login" value="SIGN IN" class="solid-blue-2 light-text">
                
              </form>
              
              <div class="nav-login-forgot dark-text">
                <a href="#">Forgot password?</a>
              </div>


            </div>
            <!-- End Login Form -->
            
            <div class="clearspace"></div>
            
            
          </div>
          
        </div>
        
      </div>
      <!-- End Login SubMenu -->
      
      
      
      
    </div>
    <!-- End SubMenu Station -->
  
  </div>





        <!-- BEGIN BLOCKQUOTE BLOCK -->   
        <div class="row quote-v1 margin-bottom-30">
          <div class="col-md-9">
            <span>Metronic - The Most Complete &amp; Popular Admin &amp; Frontend Theme</span>
          </div>
          <div class="col-md-3 text-right">
            <a class="btn-transparent" href="http://www.keenthemes.com/preview/index.php?theme=metronic_admin" target="_blank"><i class="fa fa-rocket margin-right-10"></i>Preview Admin</a>
          </div>
        </div>
        <!-- END BLOCKQUOTE BLOCK -->

        <!-- BEGIN RECENT WORKS -->
        <div class="row recent-work margin-bottom-40">
          <div class="col-md-3">
            <h2><a href="portfolio.html">Recent Works</a></h2>
            <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde voluptatem. Sed unde omnis iste natus error sit voluptatem.</p>
          </div>
          <div class="col-md-9">
            <div class="owl-carousel owl-carousel3">
              <div class="recent-work-item">
                <em>
                  <img src="assets/frontend/pages/img/works/img1.jpg" alt="Amazing Project" class="img-responsive">
                  <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                  <a href="assets/frontend/pages/img/works/img1.jpg" class="fancybox-button" title="Project Name #1" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="#">
                  <strong>Amazing Project</strong>
                  <b>Agenda corp.</b>
                </a>
              </div>
              <div class="recent-work-item">
                <em>
                  <img src="assets/frontend/pages/img/works/img2.jpg" alt="Amazing Project" class="img-responsive">
                  <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                  <a href="assets/frontend/pages/img/works/img2.jpg" class="fancybox-button" title="Project Name #2" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="#">
                  <strong>Amazing Project</strong>
                  <b>Agenda corp.</b>
                </a>
              </div>
              <div class="recent-work-item">
                <em>
                  <img src="assets/frontend/pages/img/works/img3.jpg" alt="Amazing Project" class="img-responsive">
                  <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                  <a href="assets/frontend/pages/img/works/img3.jpg" class="fancybox-button" title="Project Name #3" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="#">
                  <strong>Amazing Project</strong>
                  <b>Agenda corp.</b>
                </a>
              </div>
              <div class="recent-work-item">
                <em>
                  <img src="assets/frontend/pages/img/works/img4.jpg" alt="Amazing Project" class="img-responsive">
                  <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                  <a href="assets/frontend/pages/img/works/img4.jpg" class="fancybox-button" title="Project Name #4" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="#">
                  <strong>Amazing Project</strong>
                  <b>Agenda corp.</b>
                </a>
              </div>
              <div class="recent-work-item">
                <em>
                  <img src="assets/frontend/pages/img/works/img5.jpg" alt="Amazing Project" class="img-responsive">
                  <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                  <a href="assets/frontend/pages/img/works/img5.jpg" class="fancybox-button" title="Project Name #5" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="#">
                  <strong>Amazing Project</strong>
                  <b>Agenda corp.</b>
                </a>
              </div>
              <div class="recent-work-item">
                <em>
                  <img src="assets/frontend/pages/img/works/img6.jpg" alt="Amazing Project" class="img-responsive">
                  <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                  <a href="assets/frontend/pages/img/works/img6.jpg" class="fancybox-button" title="Project Name #6" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="#">
                  <strong>Amazing Project</strong>
                  <b>Agenda corp.</b>
                </a>
              </div>
              <div class="recent-work-item">
                <em>
                  <img src="assets/frontend/pages/img/works/img3.jpg" alt="Amazing Project" class="img-responsive">
                  <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                  <a href="assets/frontend/pages/img/works/img3.jpg" class="fancybox-button" title="Project Name #3" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="#">
                  <strong>Amazing Project</strong>
                  <b>Agenda corp.</b>
                </a>
              </div>
              <div class="recent-work-item">
                <em>
                  <img src="assets/frontend/pages/img/works/img4.jpg" alt="Amazing Project" class="img-responsive">
                  <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                  <a href="assets/frontend/pages/img/works/img4.jpg" class="fancybox-button" title="Project Name #4" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="#">
                  <strong>Amazing Project</strong>
                  <b>Agenda corp.</b>
                </a>
              </div>
            </div>       
          </div>
        </div>   
        <!-- END RECENT WORKS -->

        <!-- BEGIN TABS AND TESTIMONIALS -->
        <div class="row mix-block margin-bottom-40">
          <!-- TABS -->
          <div class="col-md-7 tab-style-1">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab-1" data-toggle="tab">Multipurpose</a></li>
              <li><a href="#tab-2" data-toggle="tab">Documented</a></li>
              <li><a href="#tab-3" data-toggle="tab">Responsive</a></li>
              <li><a href="#tab-4" data-toggle="tab">Clean & Fresh</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane row fade in active" id="tab-1">
                <div class="col-md-3 col-sm-3">
                  <a href="assets/temp/photos/img7.jpg" class="fancybox-button" title="Image Title" data-rel="fancybox-button">
                    <img class="img-responsive" src="assets/frontend/pages/img/photos/img7.jpg" alt="">
                  </a>
                </div>
                <div class="col-md-9 col-sm-9">
                  <p class="margin-bottom-10">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Cosby sweater eu banh mi, qui irure terry richardson ex squid Aliquip placeat salvia cillum iphone.</p>
                  <p><a class="more" href="#">Read more <i class="icon-angle-right"></i></a></p>
                </div>
              </div>
              <div class="tab-pane row fade" id="tab-2">
                <div class="col-md-9 col-sm-9">
                  <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia..</p>
                </div>
                <div class="col-md-3 col-sm-3">
                  <a href="assets/temp/photos/img10.jpg" class="fancybox-button" title="Image Title" data-rel="fancybox-button">
                    <img class="img-responsive" src="assets/frontend/pages/img/photos/img10.jpg" alt="">
                  </a>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-3">
                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
              </div>
              <div class="tab-pane fade" id="tab-4">
                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
              </div>
            </div>
          </div>
          <!-- END TABS -->
        
          <!-- TESTIMONIALS -->
          <div class="col-md-5 testimonials-v1">
            <div id="myCarousel" class="carousel slide">
              <!-- Carousel items -->
              <div class="carousel-inner">
                <div class="active item">
                  <blockquote><p>Denim you probably haven't heard of. Lorem ipsum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met.</p></blockquote>
                  <div class="carousel-info">
                    <img class="pull-left" src="assets/frontend/pages/img/people/img1-small.jpg" alt="">
                    <div class="pull-left">
                      <span class="testimonials-name">Lina Mars</span>
                      <span class="testimonials-post">Commercial Director</span>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <blockquote><p>Raw denim you Mustache cliche tempor, williamsburg carles vegan helvetica probably haven't heard of them jean shorts austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</p></blockquote>
                  <div class="carousel-info">
                    <img class="pull-left" src="assets/frontend/pages/img/people/img5-small.jpg" alt="">
                    <div class="pull-left">
                      <span class="testimonials-name">Kate Ford</span>
                      <span class="testimonials-post">Commercial Director</span>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <blockquote><p>Reprehenderit butcher stache cliche tempor, williamsburg carles vegan helvetica.retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid Aliquip placeat salvia cillum iphone.</p></blockquote>
                  <div class="carousel-info">
                    <img class="pull-left" src="assets/frontend/pages/img/people/img2-small.jpg" alt="">
                    <div class="pull-left">
                      <span class="testimonials-name">Jake Witson</span>
                      <span class="testimonials-post">Commercial Director</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Carousel nav -->
              <a class="left-btn" href="#myCarousel" data-slide="prev"></a>
              <a class="right-btn" href="#myCarousel" data-slide="next"></a>
            </div>
          </div>
          <!-- END TESTIMONIALS -->
        </div>                
        <!-- END TABS AND TESTIMONIALS -->

        <!-- BEGIN STEPS -->
        <div class="row margin-bottom-40 front-steps-wrapper front-steps-count-3">
          <div class="col-md-4 col-sm-4 front-step-col">
            <div class="front-step front-step1">
              <h2>Goal definition</h2>
              <p>Lorem ipsum dolor sit amet sit consectetur adipisicing eiusmod tempor.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 front-step-col">
            <div class="front-step front-step2">
              <h2>Analyse</h2>
              <p>Lorem ipsum dolor sit amet sit consectetur adipisicing eiusmod tempor.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 front-step-col">
            <div class="front-step front-step3">
              <h2>Implementation</h2>
              <p>Lorem ipsum dolor sit amet sit consectetur adipisicing eiusmod tempor.</p>
            </div>
          </div>
        </div>
        <!-- END STEPS -->

        <!-- BEGIN CLIENTS -->
        <div class="row margin-bottom-40 our-clients">
          <div class="col-md-3">
            <h2><a href="#">Our Clients</a></h2>
            <p>Lorem dipsum folor margade sitede lametep eiusmod psumquis dolore.</p>
          </div>
          <div class="col-md-9">
            <div class="owl-carousel owl-carousel6-brands">
              <div class="client-item">
                <a href="#">
                  <img src="assets/frontend/pages/img/clients/client_1_gray.png" class="img-responsive" alt="">
                  <img src="assets/frontend/pages/img/clients/client_1.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="#">
                  <img src="assets/frontend/pages/img/clients/client_2_gray.png" class="img-responsive" alt="">
                  <img src="assets/frontend/pages/img/clients/client_2.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="#">
                  <img src="assets/frontend/pages/img/clients/client_3_gray.png" class="img-responsive" alt="">
                  <img src="assets/frontend/pages/img/clients/client_3.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="#">
                  <img src="assets/frontend/pages/img/clients/client_4_gray.png" class="img-responsive" alt="">
                  <img src="assets/frontend/pages/img/clients/client_4.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="#">
                  <img src="assets/frontend/pages/img/clients/client_5_gray.png" class="img-responsive" alt="">
                  <img src="assets/frontend/pages/img/clients/client_5.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="#">
                  <img src="assets/frontend/pages/img/clients/client_6_gray.png" class="img-responsive" alt="">
                  <img src="assets/frontend/pages/img/clients/client_6.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="#">
                  <img src="assets/frontend/pages/img/clients/client_7_gray.png" class="img-responsive" alt="">
                  <img src="assets/frontend/pages/img/clients/client_7.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="#">
                  <img src="assets/frontend/pages/img/clients/client_8_gray.png" class="img-responsive" alt="">
                  <img src="assets/frontend/pages/img/clients/client_8.png" class="color-img img-responsive" alt="">
                </a>
              </div>                  
            </div>
          </div>          
        </div>
        <!-- END CLIENTS -->
      </div>
    </div>

    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>About us</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat.</p>

            <div class="photo-stream">
              <h2>Photos Stream</h2>
              <ul class="list-unstyled">
                <li><a href="#"><img alt="" src="assets/frontend/pages/img/people/img5-small.jpg"></a></li>
                <li><a href="#"><img alt="" src="assets/frontend/pages/img/works/img1.jpg"></a></li>
                <li><a href="#"><img alt="" src="assets/frontend/pages/img/people/img4-large.jpg"></a></li>
                <li><a href="#"><img alt="" src="assets/frontend/pages/img/works/img6.jpg"></a></li>
                <li><a href="#"><img alt="" src="assets/frontend/pages/img/works/img3.jpg"></a></li>
                <li><a href="#"><img alt="" src="assets/frontend/pages/img/people/img2-large.jpg"></a></li>
                <li><a href="#"><img alt="" src="assets/frontend/pages/img/works/img2.jpg"></a></li>
                <li><a href="#"><img alt="" src="assets/frontend/pages/img/works/img5.jpg"></a></li>
                <li><a href="#"><img alt="" src="assets/frontend/pages/img/people/img5-small.jpg"></a></li>
                <li><a href="#"><img alt="" src="assets/frontend/pages/img/works/img1.jpg"></a></li>
                <li><a href="#"><img alt="" src="assets/frontend/pages/img/people/img4-large.jpg"></a></li>
                <li><a href="#"><img alt="" src="assets/frontend/pages/img/works/img6.jpg"></a></li>
                <li><a href="#"><img alt="" src="assets/frontend/pages/img/works/img3.jpg"></a></li>
                <li><a href="#"><img alt="" src="assets/frontend/pages/img/people/img2-large.jpg"></a></li>
                <li><a href="#"><img alt="" src="assets/frontend/pages/img/works/img2.jpg"></a></li>
              </ul>                    
            </div>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->

          <!-- BEGIN BOTTOM CONTACTS -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>Our Contacts</h2>
            <address class="margin-bottom-40">
              35, Lorem Lis Street, Park Ave<br>
              California, US<br>
              Phone: 300 323 3456<br>
              Fax: 300 323 1456<br>
              Email: <a href="mailto:info@metronic.com">info@metronic.com</a><br>
              Skype: <a href="skype:metronic">metronic</a>
            </address>

            <div class="pre-footer-subscribe-box pre-footer-subscribe-box-vertical">
              <h2>Newsletter</h2>
              <p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
              <form action="#">
                <div class="input-group">
                  <input type="text" placeholder="youremail@mail.com" class="form-control">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                  </span>
                </div>
              </form>
            </div>
          </div>
          <!-- END BOTTOM CONTACTS -->

          <!-- BEGIN TWITTER BLOCK --> 
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2 class="margin-bottom-0">Latest Tweets</h2>
            <a class="twitter-timeline" href="https://twitter.com/twitterapi" data-tweet-limit="2" data-theme="dark" data-link-color="#57C8EB" data-widget-id="455411516829736961" data-chrome="noheader nofooter noscrollbar noborders transparent">Loading tweets by @keenthemes...</a>
          </div>
          <!-- END TWITTER BLOCK -->
        </div>
      </div>
    </div>
    <!-- END PRE-FOOTER -->




