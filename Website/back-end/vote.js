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
