jQuery(document).ready(function(){
    // This button will increment the value
    $('.qtyplus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name="'+fieldName+'"]').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name="'+fieldName+'"]').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name="'+fieldName+'"]').val(0);
        }
    });
    // This button will decrement the value till 0
    $(".qtyminus").click(function(e) {
	alert('No');
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name="'+fieldName+'"]').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name="'+fieldName+'"]').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name="'+fieldName+'"]').val(0);
        }
    });
});



$(document).ready(function(){
	// ADD TO CARD MODAL
	$('.order-item-number').click(function(e){
		e.preventDefault();
		$('#order-item-number').modal('show');
	});
	
	// print reciept
	$('#printReciept').click(function(e){
		//printDiv();
		PrintMe('DivIdToPrint');
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

/*************** Print Div *********/
function printDiv()
{
var divToPrint=document.getElementById('DivIdToPrint');
var newWin=window.open('','Print-Window','width=400,height=400,top=100,left=100');
newWin.document.open();
    newWin.document.write('<html><head><style>#in {display:none}</style><body   onload="window.print()">'+divToPrint.innerHTML+'</body></html>');
newWin.document.close();
setTimeout(function(){newWin.close();},10);

}
function PrintMe(DivID) {
var disp_setting="toolbar=no,location=no,";
disp_setting+="directories=no,menubar=no,";
disp_setting+="scrollbars=no,width=450, height=350, left=100, top=25";
   var content_vlue = document.getElementById(DivID).innerHTML;
   var docprint=window.open("","",disp_setting);
   docprint.document.open();
   docprint.document.write('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"');
   docprint.document.write('"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">');
   docprint.document.write('<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">');
   docprint.document.write('<head><title>Nextcup</title>');
   
   docprint.document.write('<style type="text/css">body{ margin:0px;');
   docprint.document.write('font-family:verdana,Arial;color:#000;');
   docprint.document.write('font-family:Verdana, Geneva, sans-serif; font-size:12px;}');
   docprint.document.write('a{color:#000;text-decoration:none;} </style>');
   docprint.document.write('</head><body onLoad="self.print()"><center>');
   docprint.document.write(content_vlue);
   docprint.document.write('</center></body></html>');
   docprint.document.close();
   docprint.focus();
   
}