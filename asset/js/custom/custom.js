$(document).ready(function(){
	// ADD TO CARD MODAL
	$('.order-item-number').click(function(e){
		e.preventDefault();
		$('#order-item-number').modal('show');
	});
});



/*********** NUMBER PAD ************/
function number_write(x)
{
  var text_box = document.getElementById("number");
  if(x>=0 && x<=9)
  {
    if(isNaN(text_box.value))
   text_box.value = 0;
 text_box.value = (text_box.value * 10)+x;
  }
}
function number_clear()
{
  document.getElementById("number").value = 0;
}
function number_c()
{
  var text_box = document.getElementById("number");
  var num = text_box.value;
  var num1 = num%10;
  num -= num1;
  num /= 10;
  text_box.value = num;
}