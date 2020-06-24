var request= new XMLHttpRequest();
request.open('GET', 'http://localhost:3000/loggedin/1', true);

request.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
      var data = JSON.parse(this.response);
      if(data.user_id != -1){

      }else {
        
      }
  }
};
request.send();
