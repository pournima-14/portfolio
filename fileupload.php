<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    // $("button").click(function(){
        // $.ajax({url: "demo_test.txt", success: function(result){
            // $("#div1").html(result);
        // }});
    // });
	
     // $("button").click(function(){
        // var dataval = $("form").serialize();
		// $("div").text($("form").serialize());
		// $.ajax({
				// type: 'POST',
                // url: 'upload.php', // point to server-side PHP script 
                // dataType: 'json',  // what to expect back from the PHP script, if anything
                // cache: false,
                // contentType: false,
                // processData: false,
                // data: dataval,
                // success: function(php_script_response){
                    // alert(php_script_response); // display response from the PHP script, if any
                // }
     	// });
    // });
	
    $("#upload").on("click", function() {
    	var file_data = $("#sortpicture").prop("files")[0]; 
        var form_data = new FormData();
        form_data.append("file", file_data);
    	 // console.log(file_data);
        
         $.ajax({
                url: 'upload.php', // point to server-side PHP script 
                dataType: 'json',  // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function(data){
                    // console.log(php_script_response); // display response from the PHP script, if any
					// data = JSON.parse( php_script_response );
					 // data = JSON.parse(php_script_response);
					console.log(data.pou);
					
                }
     	});
    });
});
</script>
</head>
<body>

 <input id="sortpicture" type="file" name="sortpic" />
<button id="upload">Upload</button>  

<div></div>
<br> <br>

</body>
</html>
