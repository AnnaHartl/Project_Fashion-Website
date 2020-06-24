var request= new XMLHttpRequest();
request.open('GET', 'http://localhost:3000/loggedin/1', true);

request.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
      var data = JSON.parse(this.response);
      if(data.user_id != -1){

        var ul = document.getElementById('list');
        const item = document.createElement('li');
        item.setAttribute('class', 'nav-item');
        const btn_logout = document.createElement('button');
        btn_logout.setAttribute('name','logout_button');
        btn_logout.setAttribute('class','btn btn-primary button-nav');
        btn_logout.setAttribute('onclick','log_out();');
        btn_logout.textContent = 'Log out';
        item.appendChild(btn_logout);
        ul.appendChild(item);

      }else {
        var ul = document.getElementById('list');
        const item = document.createElement('li');
        item.setAttribute('class', 'nav-item');
        const item2 = document.createElement('li');
        item.setAttribute('class', 'nav-item');

        const btn_register = document.createElement('button');
        const btn_login = document.createElement('button');

        btn_register.setAttribute('name','register_button');
        btn_register.setAttribute('class','btn btn-primary button-nav');
        btn_register.setAttribute('onclick','location.href = \''+ url +'User/login.html\';');
        btn_register.textContent = 'Register';

        btn_login.setAttribute('name','login_button');
        btn_login.setAttribute('class','btn btn-primary button-nav');
        btn_login.setAttribute('onclick','location.href = \''+ url +'User/login.html\';');
        btn_login.textContent = 'Login';

        item.appendChild(btn_register);
        item2.appendChild(btn_login);

        ul.appendChild(item);
        ul.appendChild(item2);
      }
  }
};
request.send();

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

window.refresh = function() {
    location.reload();
};
