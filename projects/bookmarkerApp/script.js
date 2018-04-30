//Listen for form submit
document.getElementById('myForm').addEventListener('submit', saveBookmark);

//Save bookmark function
function saveBookmark(e){
  var siteName = document.getElementById('siteName').value;
  var siteUrl = document.getElementById('siteUrl').value;

  if(!validateForm(siteName, siteUrl)){
    return false
  }

  //object to contain above properties
  var bookmark = {
    name: siteName,
    url: siteUrl
  };
/*
  //Local storage example commands
  localStorage.setItem('testKey', 'Hello World!');
  console.log(localStorage.getItem('testKey'));
  localStorage.removeItem('testKey');
  console.log(localStorage.getItem('testKey'));
*/

//Test if bookmarks item is in local storage
if(localStorage.getItem('bookmarks') === null) {
  //Set object properties as an array called bookmarks
  var bookmarks = [];
  bookmarks.push(bookmark);

  //Add array to local storage as item 'bookmarks' using JSON.stringify to convert to string
  localStorage.setItem('bookmarks', JSON.stringify(bookmarks));

}else {
  //Get bookmarks from local storage. JSON.parse to convert back to object notation
    var bookmarks = JSON.parse(localStorage.getItem('bookmarks'));

    //Add new bookmark to array
    bookmarks.push(bookmark);

    //Re-set back to local storage
    localStorage.setItem('bookmarks', JSON.stringify(bookmarks));
}

  //Clear the input boxes after submission
  document.getElementById('myForm').reset();


  //Re-fetch bookmarks
  fetchBookmarks();

  //Prevent form from submitting - to work with inputs data
  e.preventDefault();
}

//Delete bookmark
function deleteBookmark(url){
  //Get bookmarks form storage
  var bookmarks = JSON.parse(localStorage.getItem('bookmarks'));

  //Loop through bookmarks
  for(var i = 0; i < bookmarks.length; i++) {
    if(bookmarks[i].url == url) {
      bookmarks.splice(i, 1);
    }
  }
  //Re-set back to local storage
  localStorage.setItem('bookmarks', JSON.stringify(bookmarks));
  //Re-fetch bookmarks
  fetchBookmarks();
}

//Fetch bookmarks

function fetchBookmarks() {
  //Get bookmarks from local storage. JSON.parse to convert back to object notation
  var bookmarks = JSON.parse(localStorage.getItem('bookmarks'));

  //Get output id
  var bookmarkResults = document.getElementById('bookmarkResults');

  //Build output
  bookmarkResults.innerHTML = '';
  for(var i = 0; i < bookmarks.length; i++) {
    var name = bookmarks[i].name;
    var url = bookmarks[i].url;

    bookmarkResults.innerHTML += '<div class="well">'+
                                  '<h3>'+name+
                                  ' <a class="btn btn-default bkmrk" href="'+url+'" target="_blank">Visit</a> '+
                                  ' <a onclick="deleteBookmark(\''+url+'\')" class="btn btn-danger bkmrk" >Delete</a> '+
                                  '</h3>'+
                                  '</div>';
  }

}

function validateForm(siteName, siteUrl) {
  if(!siteName || !siteUrl){
    alert('Please fill in the form');
    return false;
  }

  var expression = /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi;
  var regex = new RegExp(expression);

  if(!siteUrl.match(regex)) {
    alert('Please use a valid URL. (http://www.)');
    return false;
  }

  return true;
}
