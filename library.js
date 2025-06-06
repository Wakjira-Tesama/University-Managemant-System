//playlist.js

window.onload = init;

var booksArray = [];

function init() {

   
    /*var button= document.getElementById("addButton");
    button.onclick = handleButtonClick;*/

    document.getElementById("booklist").innerHTML = "";
    if(localStorage.booksRecord){
    	booksArray =JSON.parse(localStorage.booksRecord);

    	for (var i = 0; i < booksArray.length; i++) {
    		var Title = booksArray[i].title;
    		var Author = booksArray[i].author;
    		var Isbn = booksArray[i].isbn;
    		var Year = booksArray[i].year;

    		prepareTable(i,Title,Author,Isbn,Year);
    	}
    }

}



function handleButtonClick() {

    var Title = document.getElementById("title").value;
    var Author = document.getElementById("author").value;

    var Isbn = document.getElementById("isbn").value;
    var Year = document.getElementById("year").value;
   

    	if((Title == "") ||(Author=="") || (Isbn =="") || (Year=="") )
    	{
    		alert("Please fill-up al the flied");
    	}

    	else {

    		

			var bookObj = {title:Title,author:Author,isbn:Isbn,year:Year};
            if (selectedIndex == -1){
                booksArray.push(bookObj);
            }

            else{
                booksArray.splice(selectedIndex,1,bookObj);
            }





			console.log(booksArray);

			localStorage.booksRecord = JSON.stringify(booksArray);

			init();

			document.getElementById("title").value="";
    		document.getElementById("author").value="";

    		document.getElementById("isbn").value="";
   			document.getElementById("year").value="";

			  		
       		
        }  
    
}

	function prepareTable(index,Title,Author,Isbn,Year){

           /*var table = document.getElementById("booklist");
            var row = table.insertRow();

            var TitleCell = row.insertCell(0);
            var AuthorCell =row.insertCell(1);
            var IsbnCell = row.insertCell(2);
            var YearCell = row.insertCell(3);
            var DeleteCell = row.insertCell(4);
            var UpdateCell = row.insertCell(5);

            TitleCell.innerHTML = Title;
            AuthorCell.innerHTML =Author;
            IsbnCell.innerHTML = Isbn;
            YearCell.innerHTML = Year;
            DeleteCell.innerHTML = '<button onclick="deleteTableRow('+index+')">Delete</button>' ;
            UpdateCell.innerHTML = '<button>Update</button>' ;

            */

			var newRow = document.createElement('tr');

    		var newTitle = document.createElement('td');
    		newTitle.innerHTML = Title;
			newRow.appendChild(newTitle);

			var newAuthor = document.createElement('td');
    		newAuthor.innerHTML = Author;
			newRow.appendChild(newAuthor);

			var newIsbn= document.createElement('td');
    		newIsbn.innerHTML = Isbn;
			newRow.appendChild(newIsbn);


			var newYear = document.createElement('td');
    		newYear.innerHTML = Year;
			newRow.appendChild(newYear);

            var newDelete = document.createElement('td');
            newDelete.innerHTML = '<button onclick="deleteTableRow('+index+')">Delete</button>';
            newRow.appendChild( newDelete);

            var newUpdate = document.createElement('td');
            newUpdate.innerHTML = '<button onclick="EditTableRow('+index+')">Update</button>';
            newRow.appendChild( newUpdate);


			booklist.appendChild(newRow);

		}


function deleteTableRow(index){
    var table = document.getElementById("book-table");
    console.log(index+1);
    table.deleteRow(index+1);
    booksArray.splice(index,1);
    localStorage.booksRecord=JSON.stringify(booksArray);

    init();


}

function clearButtonClick(){
    selectedIndex = -1;
    document.getElementById("title").value="";
    document.getElementById("author").value="";
    document.getElementById("isbn").value="";
    document.getElementById("year").value="";
    document.getElementById("addButton").value = "Add Book";
}

var selectedIndex = -1;

function EditTableRow(index){

    selectedIndex = index;

    var bookObj = booksArray[index];
    document.getElementById("title").value=bookObj.title;
    document.getElementById("author").value=bookObj.author;
    document.getElementById("isbn").value=bookObj.isbn;
    document.getElementById("year").value=bookObj.year;
    document.getElementById("addButton").value = "Update";
}