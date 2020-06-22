function validate() {
  var user_name = document.forms["signIn_form"]["name"].value;
  var user_mail = document.forms["signIn_form"]["mail"].value;
  var user_pw = document.forms["signIn_form"]["password"].value;
  var request= new XMLHttpRequest();
  request.open('GET', 'http://localhost:3000/users', true);
  request.onload = function () {
    var data = JSON.parse(this.response);
    var already_exists = false;
      data.forEach(users => {
        if(users.name == user_name){
          already_exists = true;
          document.getElementById("error").innerHTML = "Username already exists<br>";
        }
        if(users.mail == user_mail){
          already_exists = true;
          document.getElementById("error").innerHTML += "Email already exists";
        }
      });
      if(already_exists == false){
        setTimeout(() => {  add_user(user_name,user_mail,user_pw); }, 500);
        document.getElementById("success").innerHTML += "User successfully created<br>You get redirected in a few second";
        setTimeout(() => {  window.location.href = "../index.html"; }, 2000);
      }
  }
  request.send();
}

function add_user(name, mail, pw) {
  var xhr= new XMLHttpRequest();
  var url = "http://localhost:3000/users";
  xhr.open("POST", url, true);
  xhr.setRequestHeader("Content-type", "application/json");
  var user = {}
  user ["name"] = name;
  user ["mail"] = mail;
  user ["pw"] = pw;
  var data = JSON.stringify(user);
  xhr.send(data);
}
