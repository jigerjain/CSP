function myFunction() { 
    var x = document.getElementById("textbox").value; 
    document.getElementById("demo").innerHTML = x; 
} 

function redirect(){
    location.href='/?search='+ document.getElementById('textbox').value;
}

function sayHello(){
    alert(1);
}


document.getElementById('demo').innerHTML="I am script from other source.";