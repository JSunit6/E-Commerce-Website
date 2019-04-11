<?php
session_start();
$_SESSION['badge'];
 $conn=mysql_connect('localhost','root');
 if(!$conn)
{
    die('Cannot connect'.mysql_error());
}
mysql_select_db("mca_project_1317",$conn);
$sql="select * from demo_card_foot";
$result=mysql_query($sql);
?>
<html>
    <head>
        <title>Football Accessories</title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/FC_Barcelona_(crest).svg.png">
        <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.5/material.light_blue-light_green.min.css" />
        <link rel="stylesheet" href="footweb.css" /> 
        <script src="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js"></script>
        <script src="JS/footweb.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="JS/jquery.fs.boxer.js"></script>
        <link rel="stylesheet" href="CSS/jquery.fs.boxer.css">
        <link rel="stylesheet" href="CSS/style.css">
        

        <script type="text/javascript">

         $(document).ready(function() {
                $(".boxer").not(".retina, .boxer_fixed, .boxer_top, .boxer_format, .boxer_mobile, .boxer_object").boxer();

                $(".boxer.boxer_fixed").boxer({
                    fixed: true
                });

                $(".boxer.boxer_top").boxer({
                    top: 50
                });

                $(".boxer.retina").boxer({
                    retina: true
                });
                
                $(".boxer.boxer_mobile").boxer({
                    mobile: true
                });
            });

        </script>
</head>
    <body>
                
<div class="demo-layout-transparent mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--transparent">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">FOOTBALL</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
         
            <?php
            if(isset($_SESSION["username"]))
            {
                echo 


                '<a class="mdl-navigation__link" id="loginname"  inactive>'.$_SESSION["username"].
                '</a><button id="mdl-menu--bottom-right" class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">more_vert</i>
                      </button>
                      <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="mdl-menu--bottom-right">
                        <li class="mdl-menu__item">Change Password</li>
                        <li class="mdl-menu__item" onclick="demoFunct()">Logout</li>
                      </ul>
                      
                      ';
                 
            }
            else{
              echo '<a class="mdl-navigation__link" href="#" onclick="showLogin()">Login</a>';
            }
           ?>
          <span id="badgecart" class="material-icons mdl-badge" data-badge=<?php echo $_SESSION["badge"] ?>>
          <button id="cart" title="add to cart" class="mdl-button mdl-js-button mdl-button--icon" onclick="showCart()" >
               <i class="material-icons">add_shopping_cart</i>
          </button>
          </span>
        
      </nav>
    </div>
  </header>

  <div class="mdl-layout__drawer" >
    <span class="mdl-layout-title">FOOTBALL</span>
    <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="3">Home</a>
        
        
        <a class="mdl-navigation__link" href="#" onclick="showFootball()">Footballs</a>
     <div id="football" hidden>
         <a class="mdl-navigation__link" href="#" onclick="demoshowfCards()"><img src="images/childicon.png">Nike</a>
        <a class="mdl-navigation__link" href=""><img src="images/childicon.png">Addidas</a>
     </div>
      <a class="mdl-navigation__link"  href="#" onclick="showshoes()">Shoes</a>
      
      <div id="shoes" hidden>
         <a class="mdl-navigation__link" href=""><img src="images/childicon.png">Nike</a>
         <a class="mdl-navigation__link" href=""><img src="images/childicon.png">Addidas</a>
          </div>
      
      
      <a class="mdl-navigation__link" href="#" onclick="showjersey()">Jersey's</a>
      
     <div id="jersey" hidden>
     <a class="mdl-navigation__link" ><img src="images/childicon.png">Nike</a>
     <a class="mdl-navigation__link" href=""><img src="images/childicon.png">Addidas</a>
    
      </div>
           
      
      <a class="mdl-navigation__link"  href="#" onclick="show()">Club Merchandise</a>
      <div id="clubmer" hidden>
     <a class="mdl-navigation__link" href=""><img src="images/childicon.png">Homoooo</a>
     <a class="mdl-navigation__link" href=""><img src="images/childicon.png">Homoooo</a>
     <a class="mdl-navigation__link" href=""><img src="images/childicon.png">Homoooo</a>
      </div>
      <nav>  <a class="mdl-navigation__link"  href="#" onclick="show()">Contact Us</a>
    </nav>
    <nav>  <a class="mdl-navigation__link"  href="#" onclick="show()">About Us</a>
    </nav>
  </div>
<!-------login------>
<main class="mdl-layout__content">
   <div id="Login" hidden>
                <center>
        <div id="slideupanm">
            <div class="mdl-card mdl-shadow--2dp demo-card-square">
                <div class="mdl-card__title mdl-card--expand">
                    <h2 id="lgntitletxt" class="mdl-card__title-text">Sign In</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    <form>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="sample1" name="uname" />
                        <label class="mdl-textfield__label" for="sample1">USERNAME</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="password" id="sample2" name="passwd" />
                        <label class="mdl-textfield__label" for="sample2">PASSWORD</label>
                    </div>
                    </div>
                
                <div class="mdl-card__actions mdl-card--border">
                    
                        <button formmethod="post" formaction="login.php"  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" id="lgnbtn">
                            <i class="icon material-icons" id="loginicn">done</i>
                        </button>
                        <button formmethod="post" formaction="FootballWeb.php" id="btnclose" title="Close" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" onmouseover="changeColor()"> 
                            <i class="icon material-icons">close</i>
                    </button>

                    </form>
                    <button title="Forgot Password" class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored" id="forgotpassbtn" onclick="showForgotPass()"> 
                        <i class="icon material-icons" >help</i>
                    </button>
                    <button title="SignUp" class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored" id="fabbtn" onclick="loadNewPage()"> 
                        <i class="icon material-icons">supervisor_account</i>
                    </button>

                </div>
            </div>
        </div>
                          <!--   ------fogot pass------- -->
        <div id="forgotpass" hidden>
            <div class="mdl-card mdl-shadow--2dp demo-card-square">
                <div id="forgotpassbackgrnd" class="mdl-card__title mdl-card--expand">
                   <div id="frgtbtnback">
                             <button class="mdl-button mdl-js-button mdl-button--icon" onclick="goBack()">
                                <i class="material-icons">keyboard_arrow_left</i>
                             </button>
                         </div>
                    <h2 id="lgntitletxt" class="mdl-card__title-text">
                      
                        <div id="forgotpasstitle">
                            Forgot Password
                        </div>
                    </h2>
                </div>
                <form>
                <div class="mdl-card__supporting-text">
                    
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="mdl-textfield__input" type="email" name="forgotemail" />
                        <label class="mdl-textfield__label" for="sample1">Email-Id</label>
                    </div>
                </div>
                
                <div class="mdl-card__actions mdl-card--border">
                    
                        <button formmethod="post" formaction="forgotpass.php"  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" id="forgotpassbtn">
                            <i class="icon material-icons" id="loginicn">done</i>
                        </button>
                        <button formmethod="post" formaction="FootballWeb.php" id="btnclose" title="Close" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" onmouseover="changeColor()"> 
                            <i class="icon material-icons">close</i>
                        </button>
                </div>
                    </form>
            </div>
            </div>        
                     <!-- ------forgot pass------- -->
        <div id="signup" style="width:340px; height:600px; margin-top:10px;" >
            <form  id="SignUpform" name="signupform" action="register.php" method="post"> 
                <div  id="card-square" class="mdl-card mdl-shadow--2dp demo-card-square">
                   <div id="card_title" class="mdl-card__title mdl-card--expand">
                       <h2 id="card__title-text" class="mdl-card__title-text">
                         <div id="fabbtnback">
                             <button class="mdl-button mdl-js-button mdl-button--icon" onclick="goBack()">
                                <i class="material-icons">keyboard_arrow_left</i>
                             </button>
                         </div>
                        <div id="signuptitle">
                            SignUp
                        </div>
                        
                         </h2>
                </div>

                    <div id="support_text" class="mdl-card__supporting-text">

                        <div  class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="email" id="email" name="emailid"  required />
                            <label id="lblemail" class="mdl-textfield__label" for="sample0">Email-Id</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <textarea class="mdl-textfield__input" type="text" rows= "0" id="address" name="address" required></textarea>
                            <label class="mdl-textfield__label" for="sample5">Address</label>
                        </div>
                        <div  class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="contact" name="conno" pattern="\d{10}" title="Please enter 10 digits" required/>
                            <label id="lblcontact" class="mdl-textfield__label" for="sample1">Contact No.</label>
                        </div>
                        <div  class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="password" id="passwd" name="passwd" required/>

                            <label id="lblpasswd" class="mdl-textfield__label" for="sample2">Password</label>
                        </div>
                        <div  id="textfield0" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" placeholder="Confirm Password">
                            <input class="mdl-textfield__input" type="password" id="conpasswd" name="conpasswd" required/>
                            <label id="lblcpasswd" class="mdl-textfield__label" for="sample3">Confirm Password</label>
                        </div>

                    </div>
                    <div  id="fab_icon" class="mdl-card__actions mdl-card--border">

                    <button formmethod="post" formaction="register.php" id="fabbtnsgnupdone" title="Done" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"> 
                            <i class="icon material-icons">done_all</i>
                            
                    </button>
                        <br/>
                        <br/>
                        
                        
                        

                    </div>
                </div>
            </form>
            </div>
            </center>
        </div>
<!--  -----cards-----  -->
<div id="cards" hidden> 
 <div class="mdl-grid">
<?php

for($i=0;$i<mysql_num_rows($result);$i++)
{
mysql_data_seek($result,$i);
$row=mysql_fetch_row($result);
$j=0;
echo '
    <div id="card'.$i.'" class="mdl-cell mdl-cell--4-col" hidden>
        <div id="footnikecard" class="demo-card-square mdl-card mdl-shadow--2dp" >
  <div id="fnikecard'.$i.'" class="mdl-card__title mdl-card--expand">
   <h2 id="fnikecardtitle" class="mdl-card__title-text"> <b><br><br><br>'.$row[$j].'
            <script>
                var x=0;
                
                function demoshowfCards()
                {
                  for(x=0;x<='.$i.';x++)
                  {
                        $login=0;
                        document.getElementById("card"+x).hidden=false;
                        showfCards();
                  }
                };
            </script>
   </b></h2>
  </div>
  
<div class="mdl-card__actions mdl-card--border">
   <button id="shopid'.$i.'" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" onclick="showExpfnikeCard'.$i.'()">
      <i  class="material-icons">keyboard_arrow_right</i>
    </button>
</div>

</div>  
    </div>
     
    ';

 
}
?>
</div>
</div>
<div id="expandedcards">
<?php
for($i=0;$i<mysql_num_rows($result);$i++)
{
mysql_data_seek($result,$i);
$row=mysql_fetch_row($result);
$j=0;
echo 
'


  <div id="expfnikecard'.$i.'" hidden>
    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
    <div class="pop_up_area">
      <ul type="none">
       <li id="li1">
       <div class="single_popup">
        <a href="images/Football/Nike/nike.jpeg" class="boxer boxer_image" title="Photo Title-1">
        <img src="images/Football/Nike/nike.jpeg" alt=""  />
        </a>
       </div>
       </li>

      <li id="li2">
      <div class="single_popup">
        <a href="images/Football/Nike/fnike1small.jpg" class="boxer boxer_image" title="Photo Title-2">
        <img src="images/Football/Nike/fnike1small.jpg" alt=""/>
        </a>
      </div>
      </li>
      
      <li id="li3">
      <div class="single_popup">
        <a href="images/Football/Nike/fnike1small.jpg" class="boxer boxer_image" title="Photo Title-3">
        <img src="images/Football/Nike/fnike1small.jpg" alt=""  />
        </a>
      </div>
      </li>
      
      <li id="li4">
      <div class="single_popup">
        <a href="images/Football/Nike/fnike1small.jpg" class="boxer boxer_image" title="Photo Title-4">
        <img src="images/Football/Nike/fnike1small.jpg" alt=""  />
        </a>  
      </div>
      </li>
      </ul>
    </div>
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">'.$row[$j].'</h2>
  </div>
  <div class="mdl-card__supporting-text">
    DESCRIPTION: <br>'.$row[++$j].'<br>'.$row[++$j].'<br> QUANTITY:'.$row[++$j].'<br> PRICE:'.$row[++$j].'

  </div>
  <form>
  <div class="mdl-card__actions mdl-card--border">
    <button formmethod="post" formaction="addtocart.php" id="shopid" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" >
      <i  class="material-icons">shopping_cart</i>
    </button>
    <button id="cartback" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" >
      <i  class="material-icons">keyboard_arrow_left</i>
    </button>
  </div>
  </form>
  </div>
  </div>
';
 }
 ?>
 </div>
     
     <!-- -----shopping cart table------ -->
          <div id="shopping_cart" hidden>
              <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
                    <thead>
                      <tr>
                        <th class="mdl-data-table__cell--non-numeric">Items</th>
                        <th>Quantity</th>
                        <th>Unit price</th>
                      </tr>
                    </thead>

                  <tbody>
                      <tr>
                        <td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
                        <td>25</td>
                        <td>$2.90</td>
                      </tr>

                      <tr>
                        <td class="mdl-data-table__cell--non-numeric">Plywood (Birch)</td>
                        <td>50</td>
                        <td>$1.25</td>
                      </tr>

                      <tr>
                        <td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)</td>
                        <td>10</td>
                        <td>$2.35</td>
                      </tr>
               </tbody>
            </table>
          </div>
    <!--  -----shopping cart table------  -->
 
</main>

</div>

    </body>
</html>
