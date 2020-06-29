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
          //find_user(comment.user_id, h3);
          var request1= new XMLHttpRequest();
          request1.open('GET', 'http://localhost:3000/users', true);
          request1.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              var data1 = JSON.parse(this.response);
              data1.forEach(user => {
                  if(user.id == comment.user_id){
                    //console.log(user.name);
                    h3.textContent = `User: ${user.name}`;
                  }
              });
            }
          };
          request1.send();
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

function clear(){
  var element = document.getElementById("cont");
  element.parentNode.removeChild(element);
}

function add_comment(article_id) {
    comment(article_id);
}

window.refresh = function() {
    location.reload();
};

function comment(article_id) {
  var request1= new XMLHttpRequest();
  request1.open('GET', 'http://localhost:3000/loggedin/1', true);
  request1.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var data1 = JSON.parse(this.response);
      if(data1.user_id != -1){
        var xhr= new XMLHttpRequest();
        var url = "http://localhost:3000/comments";
        xhr.open("POST", url, true);
        xhr.setRequestHeader("Content-type", "application/json");
        var text = document.forms["comment_form"]["new_text"].value;
        var item = {}
        item ["user_id"] = data1.user_id;
        item ["text"] = text;
        item ["article_id"] = article_id;
        var data = JSON.stringify(item);
        xhr.send(data);
        setTimeout(() => {  window.refresh(); }, 500);
      }
      else {
        console.log("Not logged in");
        document.getElementById("error").innerHTML = "Please log in to comment";
      }
    }
  };
  request1.send();
}
