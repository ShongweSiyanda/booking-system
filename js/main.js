$( document ).ready(function() {
    
    $('#registerForm').hide();

    //toggling sign-in and register forms

    $('#registerLink').click(function(){
        $('#registerForm').show();
        $('#signUp').slideUp(1000);
      

    });



  });