
//Gallery
$(document).ready(function(){
$( "#left" ).click(function() {
  $( ".carousel-inner" ).animate({ "left": "+=150px" }, "slow" );
});

$( "#right" ).click(function(){
  $( ".carousel-inner" ).animate({ "left": "-=150px" }, "slow" );
});

});

/*form  test
var emailField = document.getElementById('inputEmail');
emailField.onfocus = function(){
  if (emailField.value =="Email"){
      emailField.value= "";
  }
};

emailField.onblur = function(){
  if (emailField.value==""){
      emailField.value="Email";
      document.getElementById("inputEmail").style.color = "red";
  }
};

var yourNameField = document.getElementById('inputName');
yourNameField.onfocus = function(){
  if (yourNameField.value =="Your Name"){
      yourNameField.value= "";
  }
};

yourNameField.onblur = function(){
  if (yourNameField.value==""){
      yourNameField.value="Your Name";
      document.getElementById("inputName").style.color = "red";
  }
};
*/
//thank you message
function prepareEventHandlers() {
  document.getElementById('submit').onclick = function(){
    if (document.getElementById('inputEmail').value === "" && document.getElementById('inputName').value === ""){
          document.getElementById('thankYou').innerHTML="please fiil out the form";
    } else {
      document.getElementById('thankYou').innerHTML="Thank you for your messege";
      return false;
    }
  };
}
window.onload = function() {
  prepareEventHandlers();
}

/*comments*/
var main=function(){
    $('.btn').click(function(){
        var post = $('.status-box').val();
        $('<li>').text(post).prependTo('.posts');
        $('.status-box').val('');
        $('.counter').text('140');
        $('.btn').addClass('disabled');

    });

    $('.status-box').keyup(function(){
        var postLength = $(this).val().length;
        var charactersLeft = 140-postLength;

        $('.counter').text(charactersLeft);

        if(charactersLeft < 0){
        $('.btn').addClass('disabled');
    }else if(charactersLeft == 140){
        $('.btn').addClass('disabled');
    }else{
         $('.btn').removeClass('disabled');
    }
    });


$('.btn').addClass('disabled');

}
