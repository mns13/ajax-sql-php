var output = document.getElementById('output');

function submitData(fdata) {
   var xhttp = new XMLHttpRequest();
   xhttp.onload = function() {
      console.log(xhttp.responseText);
   }
   xhttp.open(fdata.method, fdata.action, true);
   xhttp.send(new FormData(fdata));

   // console.log(fdata.method);
   return false;
}

//AJAX
var ajaxhttp = new XMLHttpRequest();
var url = "js/json.json";

ajaxhttp.open("GET",url, true);
ajaxhttp.setRequestHeader("content-type", "application/json");
output.innerHTML = 'Loading...';
ajaxhttp.onreadystatechange = function() {
   if(ajaxhttp.readyState == 4 && ajaxhttp.status == 200) {
      var jcontent = JSON.parse(ajaxhttp.responseText);
      for(var myObj in jcontent) {
         output.innerHTML += '<div>' + jcontent[myObj].email + ' ' + jcontent[myObj].password + '<br>'  + '</div>';
      }
      console.log(jcontent);
   }
}

ajaxhttp.send();

// console.log(ajaxhttp);