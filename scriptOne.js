function myFunction() { 
    var x = document.getElementById("textbox").value; 
    document.getElementById("demo").innerHTML = x; 
} 

function redirect(){
    location.href='/?search='+ document.getElementById('textbox').value;
}

function say(){
    alert(1);
}
