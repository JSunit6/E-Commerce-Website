/*-----pop up-----*/
 
/*------pop up-----*/
    var $login=0;
    

            function loadNewPage() 
            {
                if($login===1)
            {
                document.getElementById('signup').hidden=false;
                jQuery('#signup').hide();
                jQuery('#slideupanm').fadeOut(5);
                jQuery('#forgotpass').fadeOut(500);
                jQuery('#signup').slideDown(2000);
                $login=0;
            }
        }
    function showLogin()
    {
        if($login===0)
    {
        document.getElementById('cards').hidden=true;
        jQuery('#signup').hide();
        jQuery('#forgotpass').hide();
        jQuery("#shopping_cart").hide();
        document.getElementById('Login').hidden=false;
        jQuery('#slideupanm').hide();
        jQuery('#slideupanm').animate().fadeIn(800);
        
        $login=1;
       
    }
}
    var flagf=0;
    var flags=0;
    var flagj=0;
    var flagcm=0;
    function showFootball()
     
    {
        
        if(flagf===0){
            document.getElementById('football').hidden=false;
            jQuery("#football").hide();
            jQuery("#football").slideDown(1000);
            flagf=1;           
        }
        else if(flagf===1)
        {
            jQuery("#football").slideUp(1000);
            flagf=0;
        }
        
       
    }
        function showshoes()
     
    {
        
        if(flags===0){
            document.getElementById('shoes').hidden=false;
            
            jQuery("#shoes").hide();
            jQuery("#shoes").slideDown(1000);
            flags=1;           
        }
        else if(flags===1)
        {
            jQuery("#shoes").slideUp(1000);
            flags=0;
        }
        
       
    }
    
    function showjersey()
   {
        
        if(flagj===0){
            document.getElementById('jersey').hidden=false;
            
            jQuery("#jersey").hide();
            jQuery("#jersey").slideDown(1000);
            flagj=1;           
        }
        else if(flagj===1)
        {
            jQuery("#jersey").slideUp(1000);
            flagj=0;
        }
        
    }


    function goBack()
    {
        document.getElementById('signup').hidden=true;
        
        showLogin();
    } 

    function clearAll()
    {
        document.getElementById('name').value="";
        document.getElementById('lblname').value="";
        document.getElementById('address').value="";
        document.getElementById('emailid').value="";
        document.getElementById('passwd').value="";
        document.getElementById('conpasswd').value="";
    }
     function showfCards(){
        
        document.getElementById('Login').hidden=true;
        document.getElementById('cards').hidden=false;
        jQuery('#forgotpass').fadeOut(500);
        jQuery('#expfnikecard0').fadeOut(500);
        /*document.getElementById(a).hidden=false*/
        
        jQuery('#card0').hide();
        jQuery('#card0').slideDown(350);
        
        jQuery('#card1').hide();
        jQuery('#card1').slideDown(550);
        
        
        jQuery('#card2').hide();
        jQuery('#card2').slideDown(850);
        $login=0;
        
    }
    function demoFunct()
    {
      document.location.href='logout.php';
    }

    function showForgotPass()
    {

        document.getElementById('forgotpass').hidden=false;
                jQuery('#slideupanm').slideUp(1000);
                jQuery('#forgotpass').hide();
                jQuery('#forgotpass').slideDown(2000);
                $login=0;
    }

    function showCart()
    {
      $login=0;
      alert($login);
      jQuery("#slideupanm").slideUp(800);
      jQuery("#signup").slideUp(800);
      jQuery("#forgotpass").slideUp(800);
      jQuery("#cards").slideUp(500);
      jQuery("#expfnikecard0").slideUp(500);
      jQuery("#expfnikecard1").slideUp(500);
      jQuery("#expfnikecard2").slideUp(500);
      document.getElementById('shopping_cart').hidden=false;
      jQuery("#shopping_cart").hide();
      jQuery("#shopping_cart").fadeIn(800);
      
    }

    function Demo()
    {
        alert("HI");
    }







function showExpfnikeCard0()
{
  
                        var e=document.getElementById("expfnikecard0");
                        e.hidden=false;
                        alert(e);
                        jQuery("#card0").hide();
                        jQuery("#card1").hide();
                        jQuery("#card2").hide();
                        jQuery("#expfnikecard1").fadeOut(500);
                        jQuery("#expfnikecard2").fadeOut(500);
                        jQuery("#expfnikecard0").hide();
                        jQuery("#expfnikecard0").fadeIn(500);
                        $login=0;
                        
                  
}
function showExpfnikeCard1()
{
  
                        document.getElementById("expfnikecard1").hidden=false;
                        jQuery("#card0").hide();
                        jQuery("#card1").hide();
                        jQuery("#card2").hide();
                        jQuery("#expfnikecard0").fadeOut(500);
                        jQuery("#expfnikecard2").fadeOut(500);
                        jQuery("#expfnikecard1").hide();
                        jQuery("#expfnikecard1").fadeIn(500);
                        $login=0;
                        
                        
                  
}
function showExpfnikeCard2()
{
  
                        document.getElementById("expfnikecard2").hidden=false;
                        jQuery("#card0").hide();
                        jQuery("#card1").hide();
                        jQuery("#card2").hide();
                        jQuery("#expfnikecard1").fadeOut(500);
                        jQuery("#expfnikecard0").fadeOut(500);
                        jQuery("#expfnikecard2").hide();
                        jQuery("#expfnikecard2").fadeIn(500);
                        $login=0;
                        
}
