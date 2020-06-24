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
        setTimeout(() => {  add_user(user_name,user_mail,user_pw); }, 300);
        setTimeout(() => {  login(user_mail,user_pw); }, 1000);
        //login(user_mail,user_pw);
        document.getElementById("error").innerHTML = " ";
        document.getElementById("success").innerHTML = "User successfully created<br>You get redirected in a few second";
        //setTimeout(() => {  window.location.href = "../index.html"; }, 2000);
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

//login
function get_data() {
  var user_mail = document.forms["login_form"]["email"].value;
  var user_pw = document.forms["login_form"]["password"].value;
  login(user_mail,user_pw);
}

function login(user_mail, user_pw) {
  var request= new XMLHttpRequest();
  request.open('GET', 'http://localhost:3000/users', true);

  request.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var data = JSON.parse(this.response);
        var found = false;
          data.forEach(user => {
            if(user.mail == user_mail){
              found = true;
              if(user.pw == user_pw){
                log_user(user.id);
                document.getElementById("error").innerHTML = " ";
                document.getElementById("success").innerHTML = "Successfully logged in<br>You get redirected in a few second";
                setTimeout(() => {  window.location.href = "../index.html"; }, 2000);
              }
              else {
                document.getElementById("error").innerHTML = "Wrong password";
              }
            }
          });
          if(found == false){
            document.getElementById("error").innerHTML = "User doesn't exist";
          }
    }
  };
  request.send();
}

function log_user(u_id) {
  var data = {};
  data.user_id = u_id;
  var json = JSON.stringify(data);

  var xhr = new XMLHttpRequest();
  xhr.open("PUT",'http://localhost:3000/loggedin/1', true);
  xhr.setRequestHeader('Content-type','application/json; charset=utf-8');
  xhr.send(json);
}

function log_out() {
  var data = {};
  data.user_id = -1;
  var json = JSON.stringify(data);

  var xhr = new XMLHttpRequest();
  xhr.open("PUT",'http://localhost:3000/loggedin/1', true);
  xhr.setRequestHeader('Content-type','application/json; charset=utf-8');
  xhr.send(json);
  setTimeout(() => {  window.refresh(); }, 500);
  alert("Successfully logged out");
}
