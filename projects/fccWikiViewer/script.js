var globalUrl = '';
var offSet = 0;

document.getElementById('button').addEventListener('click', function(e){
  e.preventDefault();
  offSet = 0;
  
  var term = document.querySelector('#term').value;
  term.replace(/\s+/g, '_');
  var url = 'https://en.wikipedia.org/w/api.php?action=query&format=json&list=search&utf8=1&srsearch=' +term+ '&callback=?&sroffset=';
  globalUrl = url;
  letsGo(url);
  
})//end of button click event

document.getElementById('more').addEventListener('click', function(e){
  e.preventDefault();
  offSet += 10;
  var url = globalUrl + offSet;
  
  letsGo(url);
})//end of more button click event


function letsGo(url){
  $.getJSON(url, 'jsonp', function(data){
  //console.log(data.query.search.length);
  var resultsAll = data.query.search;
  
  var container = document.querySelector('.main');
  container.innerHTML = '';
  
  for (var i = 0; i < resultsAll.length; i++ ){
    var title = data.query.search[i].title;
    var convert = title.replace(/\s+/g, '_');
    var clicky = 'https://en.wikipedia.org/wiki/' +convert;
    var snippet = data.query.search[i].snippet;
    var result = document.createElement('a');
    result.setAttribute('href', clicky);
    result.setAttribute('target', '_blank');
  
    result.innerHTML = '<div class="result"><p class="title">' +title+ '</p>' + '<p class="snippet">' +snippet+ '</p></div>';
  
  document.querySelector('#form').style.marginTop = '35px';
  document.querySelector('.main').style.display = 'block';
  document.querySelector('.continue').style.display = 'block';
  container.appendChild(result);
  }
  
});//end json function
  
}//end letsGo






