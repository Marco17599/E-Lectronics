function Search() {
    let search = document.getElementById("searchh").value;
    window.location.href='Items/search=' + search;
   
}

function required()

{
    var title = document.forms["form"]["title"].value;
    if(title = ""){
        alert("Please input a Value");
        return false;
    }
   
       
    }

/*
var empt = document.forms["form"]["text1"].value;
if (empt == "")
{
alert("Please input a Value");
return false;
}*/
