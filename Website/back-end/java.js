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
          h3.textContent = `User: ${comment.name}`;

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
}

function clear(){
  var element = document.getElementById("cont");
  element.parentNode.removeChild(element);
}

function add_comment(article_id) {
  comment(article_id);
  setTimeout(() => {  window.refresh(); }, 500);
}

window.refresh = function() {
    location.reload();
};
