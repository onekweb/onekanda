
function initAll() {
    var mySearch = document.getElementById("searchNew"); // The variable gets the Id "search" from the html document
    mySearch.onfocus = function () {
        if (mySearch.value == "sök här") { //if the value of the input text is "Sök här", do nothing
            mySearch.value = "";
        }
    };
    mySearch.onblur = function () { //If the value of the input text is empty, write sök här on the input text
        if (mySearch.value == "") {
            mySearch.value = "sök här";
        }
    };

    function MyPopPicture() {
        var myImage = document.createElement("img");
        myImage.setAttribute("id", "myImage");
        myImage.setAttribute("src", "images/mario.jpg");
        //document.getElementById("mainContent").appendChild(myImage);
   }
    MyPopPicture();
}

window.onload = initAll;
