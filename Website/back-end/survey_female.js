var cool =0;
var girly = 0;
var sophiscticated = 0;
var extra = 0;
function result() {
  var values = [];
  //document.getElementById("uniqueID").value;
  values.push(document.forms["female_form"]["beach"].value);
  values.push(document.forms["female_form"]["personality"].value);
  values.push(document.forms["female_form"]["gift"].value);
  values.push(document.forms["female_form"]["shoes"].value);
  values.push(document.forms["female_form"]["wedding"].value);
  values.push(document.forms["female_form"]["club"].value);
  for (var i = 0; i < values.length; i++) {
    switch (values[i]) {
      case "1":
        cool+=10;
        break;
      case "2":
        girly+=10;
        break;
      case "3":
        sophiscticated+=10;
        break;
      case "4":
        extra+=10;
        break;
    }
    //console.log(cool);
  }
  //console.log(cool);
  //window.location.href = "result.html";
  window.location = "result.html?form/val1="+cool+"&form/val2="+girly+"&form/val3="+sophiscticated+"&form/val4="+extra;
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
          'Girly',
          'Sophiscticated',
          'Extra'
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
