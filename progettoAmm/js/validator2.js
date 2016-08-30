$('#registerForm').submit(function(){
    if(!(this.attr('validated'))) {
        // GET THE VARS
        var username = this.username.value;
        console.log(username);


         $.ajax({
            url: '../controller/checkForm.php',
            data: "username="+username,
            type: 'post', 
//            dataType: 'json',
            
            beforeSend : function(){   },
            success: function(answer){
                console.log(answer);
//                if(answer.error === false){
//                if(answer == 1){
//                       $('#registerForm').attr('validated',true);
//                       $('#registerForm').submit();
//                } 
//                if(answer == 0){
//                    //display the errors
//                    alert("Username già presente.");
//                }
            }
         });
        return false;
    }
//     else {
    return true;
//    }
});

//$('#greatForm').submit(function(){
//    if(!$(this).attr('validated'))
//    {
//     // GET THE VARS
//     var email = $('#email').val();
//
//
//      $.ajax({ 
//        data: { 'field1' : email  },
//        type: 'GET', 
//        dataType: 'json',
//        url: 'url.php',
//        beforeSend : function(){   },
//        success: function(answer){   
//            if(answer.error === false){
//                   $('#greatForm').attr('validated',true);
//                   $('#greatForm').submit();
//            } 
//            if(answer.error === true){
//                //display the errors
//            }
//        }
//     });
//     return false;  
//    }                            
//   return true;
//});