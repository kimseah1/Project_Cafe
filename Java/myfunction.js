var temp="";

function addtocart(x, y){

			temp+=y+"-";

			document.getElementById("output").innerHTML+="<br>"+x;

			document.getElementById("hidden_cart").value = temp;

}
function myFunction() {
  var x = document.getElementById('cart');
  if (x.style.display === 'block') {
    x.style.display = 'none';
  } else {
    x.style.display = 'block';
  }

}
