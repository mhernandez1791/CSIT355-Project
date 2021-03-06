<!DOCTYPE >
<?php include("functions/functions.php"); ?>
<html>
  <head>
    <title>Home - Carlos Martin</title>
      <link rel = "stylesheet"
        type = "text/css"
        href = "style.css"/>
      <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet"> 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>

  <body >
    <!-- Creates the header -->
    <header class="navbar">
      <!--Creates the logo and links it to the home page-->
      <div class="container-width" >
        <div  class="logo-container">
          <a href="home.php">
            <div id="logo-button" class="logo">Carlos Martin
            </div>
          </a>
        </div>

        <a href="cart.php">
          <div id="contactMe" class="menu-item">Cart
          </div>
        </a>

        <a href="#">
          <div id="" class="menu-item">Help
          </div>
        </a>
        
      </div>
    </header>
    

    
    <!-- Banner with picture and text -->
    <section class="banner">
      <div class="container-width">
 
        <div class="banner-container">          
          <div class="banner-content">
              <div>
                  <img src='' class='pic'/>
                </div>
            <div class="banner-title">Carlos Martin
            </div>
            <div class="banner-description">I am a photographer in the NYC Tri-state area who happily travels the world to photograph architecture and landscapes.
            <?php getIP(); ?>  
          </div>
          </div>
        </div>
      </div>
    </section>
  
   <form action="search.php" method="get" enctype="multipart/form-data">
      <table align='center' width='600'>
        <tr>
            <td><input size='10' type='text' name='user_query' placeholder='Search a product'/></td>
             <td>
                <input value='search' name='search' style='text-align: center' type='submit'/>
             </td>
        </tr>
      </table>
    </form>


    <section class="flex-sect">

      <div data-tabs="1" id="ihnutl">
        <nav data-tab-container="1" class="tab-container">
          <a href="#tab1" data-tab="1" class="tab">Photos</a>
          <a href="#tab2" data-tab="1" class="tab">Galeries</a>
          <a href="#tab3" data-tab="1" class="tab">About</a>
        </nav>
        <div id="tab1" data-tab-content="1" class="tab-content">
          <div class="row" id="ie1l4q">
            <div class="cell" id="itbv3j">
              <form class="form">
                <label ><h2>Filters</h2></label>

                <?php 
                getTags();
                ?>
              </form>
              <form class="form">
                  <label><strong>Dimension</strong></label>
                  <div class="form-group">
                    <input type="checkbox" class="checkbox"/>
                    <label class="label">11"x17"</label>
                  </div>
                  <div class="form-group">
                    <input type="checkbox" class="checkbox"/>
                    <label class="label">13"x19"</label>
                  </div>
                  <div class="form-group">
                    <input type="checkbox" class="checkbox"/>
                    <label class="label">17"x22"</label>
                  </div>
                </form>
            </div>
           
            <div class="cell" id="ievkbj">

                <div id="product_box">
                  <?php getProducts() ?>
                </div>

            </div>
          </div>
        </div>
        <div id="tab2" data-tab-content="1" class="tab-content">
          <div>Tab 2 Content
          </div>
          <div class="row" id="ie1l4q">
            <div class="cell" id="itbv3j">
              <form class="form">
                <div class="form-group">
                  <input type="checkbox" class="checkbox"/>
                  <label class="label">Architecture</label>
                </div>
                <div class="form-group">
                  <input type="checkbox" class="checkbox"/>
                  <label class="label">Interiors</label>
                </div>
                <div class="form-group">
                  <input type="checkbox" class="checkbox"/>
                  <label class="label">Landscapes</label>
                </div>
                <div class="form-group">
                  <input type="checkbox" class="checkbox"/>
                  <label class="label">CityScapes</label>
                </div>
              </form>
            </div>
            <div class="cell" id="ievkbj">
              <img id="iydxgg" src="./pictures/DG6TzGH_1eY.jpg">
              <img id="io7iww" src="./pictures/A-7HVd0EsgU.jpg"/>
              <img id="ifgeq7" src="./pictures/9B9nMbOwAME.jpg"/>
              <img id="iq2aop" src="./pictures/BvlKMRCeND0.jpg"/>
              <img src="./pictures/LniT7cNARvQ.jpg" id="i6kdii"/>
              <img src="./pictures/C2r95T9CTP4.jpg" id="ih7vor"/>
            </div>
          </div>
        </div>
        <div id="tab3" data-tab-content="1" class="tab-content">
          <div>Tab 4 Content
          </div>
          
          <div class="about-title"> <strong>Carlos Martin</strong>
          </div>
          <div class="banner-description">I am a photographer in the NYC Tri-state area who happily travels the world to photograph architecture and landscapes.
          </div>

        </div>
      </div>
    </section>
    <script>var items = document.querySelectorAll('#ihnutl');
      for (var i = 0, len = items.length; i < len; i++) {
        (function(){
          var t,e=this,a="[data-tab]",n=document.body,r=n.matchesSelector||n.webkitMatchesSelector||n.mozMatchesSelector||n.msMatchesSelector,o=function(){
            var a=e.querySelectorAll("[data-tab-content]")||[];
            for(t=0;t<a.length;t++)a[t].style.display="none"}
          ,i=function(n){
            var r=e.querySelectorAll(a)||[];
            for(t=0;t<r.length;t++){
              var i=r[t],s=i.className.replace("tab-active","").trim();
              i.className=s}
            o(),n.className+=" tab-active";
            var l=n.getAttribute("href"),c=e.querySelector(l);
            c&&(c.style.display="")}
          ,s=e.querySelector(".tab-active"+a);
          s=s||e.querySelector(a),s&&i(s),e.addEventListener("click",function(t){
            var e=t.target;
            r.call(e,a)&&i(e)}
            )}
         .bind(items[i]))();
      }
    </script>

  
  </body>
  </html>