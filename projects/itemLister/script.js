var form = document.getElementById('addForm');
var itemList = document.getElementById('items');
var filter = document.getElementById('filter');


// FORM SUBMIT EVENT
form.addEventListener('submit', addItem);
// DELETE EVENT
itemList.addEventListener('click', removeItem);
// FILTER EVENT
filter.addEventListener('keyup', filterItems);


// ADD ITEM
function addItem(e) {
  e.preventDefault();

//GET INPUT VALUE
var newItem = document.querySelector('#item').value;

// CREATE NEW LI ELEMENT
var li = document.createElement('li');

// ADD A CLASS NAME
li.className = 'list-group-item';

// ADD TEXT NODE WITH INPUT value
li.appendChild(document.createTextNode(newItem));

// CREATE DELETE Button
var deleteBtn = document.createElement('button');
deleteBtn.className = 'btn btn-danger btn-sm float-right delete';
deleteBtn.appendChild(document.createTextNode('X'));

// ADD BUTTON TO LI
li.appendChild(deleteBtn);

// ADD ALL TO UL
itemList.appendChild(li);
}

// REMOVE ITEM
function removeItem(e){
  if(e.target.classList.contains('delete')){
    if(confirm('Are You Sure?')){
      var li = e.target.parentElement;
      itemList.removeChild(li);
    }
  }
}

// FILTER
function filterItems(e){
  var text = e.target.value.toLowerCase();
  var items = itemList.getElementsByTagName('li');
//convert to array
  Array.from(items).forEach(function(item){
    var itemName = item.firstChild.textContent;

    if(itemName.toLowerCase().indexOf(text) != -1){
      item.style.display = 'block';
    }else {
      item.style.display = 'none';
    }
  });
}
