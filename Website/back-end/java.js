function show_comments(article_id) {
  const app = document.getElementById('root');

  const container = document.createElement('div');
  container.setAttribute('class', 'container');
  container.setAttribute('id', "cont");

  app.appendChild(container);
  var request= new XMLHttpRequest();
  request.open('GET', 'http://localhost:3000/comments', true);
  request.onload = function () {

    // Begin accessing JSON data here
    var data = JSON.parse(this.response);
      data.forEach(comment => {
        if(comment.article_id == article_id){

          const h3 = document.createElement('h3');
          find_user(comment.user_id, h3);
          //h3.textContent = `User: ${user.name}`;

          const p = document.createElement('p');
          comment.text = comment.text.substring(0, 300);
          p.textContent = `Text: ${comment.text}`;

          container.appendChild(h3);
          container.appendChild(p);
        }
      });
  }
  request.send();
}

function comment(article_id) {
  var loggedin = is_logged();
  if(loggedin == true)
  {
    var xhr= new XMLHttpRequest();
    var url = "http://localhost:3000/comments";
    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-type", "application/json");
    var name = document.forms["comment_form"]["new_name"].value;
    var text = document.forms["comment_form"]["new_text"].value;
    var item = {}
    item ["name"] = name;
    item ["text"] = text;
    item ["article_id"] = article_id;
    var data = JSON.stringify(item);
    xhr.send(data);
    return true;
  }
  else {
    console.log("Not logged in");
    document.getElementById("error").innerHTML = "Please log in to comment";
    return false;
  }
}

function clear(){
  var element = document.getElementById("cont");
  element.parentNode.removeChild(element);
}

function add_comment(article_id) {
  if(comment(article_id) == true){
    setTimeout(() => {  window.refresh(); }, 500);
  }
}

window.refresh = function() {
    location.reload();
};

function find_user(id, element) {
  var request= new XMLHttpRequest();
  request.open('GET', 'http://localhost:3000/users', true);
  request.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var data = JSON.parse(this.response);
      data.forEach(user => {
          if(user.id == id){
            element.textContent = `User: ${user.name}`;
          }
      });
    }
  };
  request.send();
}

function is_logged() {
  var bool = false;
  var request= new XMLHttpRequest();
  request.open('GET', 'http://localhost:3000/loggedin/1', true);
  request.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var data = JSON.parse(this.response);
      if(data.user_id != -1){
        bool = true;
      }
    }
  };
  request.send();
  return bool;
}
