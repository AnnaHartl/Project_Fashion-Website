var cool =0;
var classic = 0;
var sophiscticated = 0;
var hipster = 0;
function result() {
  var values = [];
  //document.getElementById("uniqueID").value;
  values.push(document.forms["male_form"]["usually"].value);
  values.push(document.forms["male_form"]["personality"].value);
  values.push(document.forms["male_form"]["shoes"].value);
  values.push(document.forms["male_form"]["money"].value);
  //values.push(document.forms["male_form"]["wedding"].value);
  //values.push(document.forms["male_form"]["club"].value);
  for (var i = 0; i < values.length; i++) {
    switch (values[i]) {
      case "1":
        cool+=10;
        break;
      case "2":
        classic+=10;
        break;
      case "3":
        sophiscticated+=10;
        break;
      case "4":
        hipster+=10;
        break;
    }
    //console.log(cool);
  }
  //console.log(cool);
  //window.location.href = "result.html";
  window.location = "result.html?form/val1="+cool+"&form/val2="+classic+"&form/val3="+sophiscticated+"&form/val4="+hipster;
  //console.log(cool);
  //draw_graph(cool,girly,sophiscticated,extra);
  //console.log("test")
}
//console.log(cool);

function draw_graph(v1,v2,v3,v4) {
  //console.log(v1);
  //console.log(v1);
  var element = document.getElementById("myChart");
  element.width = "800";
  element.height = "400";
  var ctx = document.getElementById('myChart').getContext('2d');
  var chart = new Chart(ctx, {
        // The type of chart we want to create
     type: 'polarArea',
    data: {
      datasets: [{
        label: "Survey_Chart",
        backgroundColor: ["#086375", "#1dd3b0","#affc41", "#b2ff9e"],
        data: [
          v1,v2,v3,v4
        ]
      },
    ],
      labels: [
          'Cool',
          'Classic',
          'Sophiscticated',
          'Hipster'
      ]
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
