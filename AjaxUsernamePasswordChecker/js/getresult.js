/*****
*@author sam
*@version 1.2
*@email   sam.nyx@live.com
*@googlecode   sam0hack
*
*
***/


function lookup_users()
    {

   var get=document.getElementById('uname').value;
   var div=document.getElementById('pass').value;

if(get.length==0)
{
$('#suggestions_cus').hide();   
}
else
{
            $("#suggestions_cus").show();
                        $.ajax({ 
                           url:'ajaxfile/getcon.php?get='+get+'&div='+div,
                              success:function(data){
                                $("#autoSuggestionsList_cus").html(data);
                              }
                        });

}


}

function fill2(valee)
{
var str="#";


$(str).val(valee);
                    
setTimeout("$('#suggestions_cus').hide();",200);   

}



function getsrch() {
     var subsrch="subsrch";
//document.getElementById('myform1').submit();
//alert(subsrch);
return subsrch;


}



