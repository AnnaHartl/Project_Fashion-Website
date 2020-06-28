function change_votes(id) {
  var request= new XMLHttpRequest();
  request.open('GET', 'http://localhost:3000/votes', true);
  request.onload = function () {
      var data = JSON.parse(this.response);
      add_vote(id, data[id].vote);
  }
  request.send();
}

function add_vote(id, votes) {
  var data = {};
  data.vote = votes+1;
  var json = JSON.stringify(data);

  var xhr = new XMLHttpRequest();
  xhr.open("PUT",'http://localhost:3000/votes/'+id, true);
  xhr.setRequestHeader('Content-type','application/json; charset=utf-8');
  xhr.send(json);
}

function show_votes() {
  var request= new XMLHttpRequest();
  request.open('GET', 'http://localhost:3000/votes', true);
  request.onload = function () {
      var data = JSON.parse(this.response);
      document.getElementById("votes1").innerHTML = data[0].vote;
      document.getElementById("votes2").innerHTML = data[1].vote;
      document.getElementById("votes3").innerHTML = data[2].vote;
  }
  request.send();
}

function drawChart() {
  var element = document.getElementById("myChart");
  element.width = "800";
  element.height = "400";
  var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
    type: 'pie',
    data: {
      datasets: [{
        label: "Survey_Chart",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f"],
        data: [
          document.getElementById("votes1").innerHTML,
          document.getElementById("votes2").innerHTML,
          document.getElementById("votes3").innerHTML
        ]
      }]
    },
    options: {
      title: {
        display: false,
        text: 'Chart'
      },
      events: [],
      animation: false,
    }
  });
}

function validation() {
  var request= new XMLHttpRequest();
  request.open('GET', 'http://localhost:3000/loggedin/1', true);
  request.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var data = JSON.parse(this.response);
      if(data.user_id != -1){
        has_voted(data.user_id);
      }
      else {
        document.getElementById("error1").innerHTML = "Please log in to vote";
      }
    }
  };
  request.send();
}

function has_voted(id) {
  var request= new XMLHttpRequest();
  request.open('GET', 'http://localhost:3000/users/'+id, true);
  request.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var user = JSON.parse(this.response);
        if(user.vote == -1){
          update_user(id);
        }
        else {
          document.getElementById("error1").innerHTML += "<br> You can only vote once";
        }
    }
  };
  request.send();
}

function update_user(id) {
  var request= new XMLHttpRequest();
  request.open('GET', 'http://localhost:3000/users/'+id, true);
  request.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var user = JSON.parse(this.response);
      var data = {};
      data.name = user.name;
      data.mail = user.mail;
      data.pw = user.pw;
      data.vote = 1;
      data.id = user.id;
      var json = JSON.stringify(data);
      var xhr = new XMLHttpRequest();
      xhr.open("PUT",'http://localhost:3000/users/'+id, true);
      xhr.setRequestHeader('Content-type','application/json; charset=utf-8');
      xhr.send(json);
      document.getElementById("error1").innerHTML = " ";
    }
  };
  request.send();
}
