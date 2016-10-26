
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

//thank you message
function prepareEventHandlers() {
  document.getElementById('submit').onclick = function(){
    if (document.getElementById('Email').value =="" && document.getElementById('Name').value ==""){
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
*/
