




function insertData(){

	var user_name = generateString();
	var password = generateString();
    var data = 'user_name'+user_name+'&password'+password;
	$.ajax({
        type: 'POST',
        data: data,
        url: '/test/index.php/students/saveStudent',        
        success:function(response){

          alert("data inserted")        	
        }
	});


}


function generateString()
{
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for( var i=0; i < 5; i++ )
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    return text;
}

$.ajax({
        type: 'POST',
        url: '/test/index.php/students/getstudents',        
        success:function(response){
        	alert("hello");
            console.log(response);
        }
});
