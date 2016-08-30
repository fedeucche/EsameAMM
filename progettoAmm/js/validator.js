var checkAjax = 0;

$(document).ready(function() {
    $("#registerForm").submit(function(e){
        if(checkAjax == 1){
            checkAjax = 0;
            return true;
        } else {
//            formHandler(this);
//               e.preventDefault();
            return formHandler(this);
        }
    });
});

function formHandler(form) {
        
    if (form.username.value === "") {
        alert('Riempire il campo: Username');
        return false;
    }

    if (form.password.value === "") {
        alert('Riempire il campo: Password');
        return false;
    }
    
    $.ajax({
        url: "../controller/checkForm.php",
        type: "post",
        context: form,
        data: "username="+form.username.value
    }).done(function(data){
            console.log("Log*: " + data);
            if(data == 0){
                alert("Username già presente.");
                return false;
            } else if (data == 1) {
                alert("Username OK");
                checkAjax = 1;
                form.submit();
                return true;
            }
            else{
                alert("Problems");
                return false;
            }
        });
    return false;
        
//    alert("Problems 2");
//    return false;
    
//        success: function(data){
//            console.log("Log*: " + data);
//            if(data == 0){
//                alert("Username già presente.");
//                return false;
//            } else if (data == 1) {
//                alert("Username OK");
//                checkAjax = 1;
//                form.submit();
//                return false;
//            }
//            else{
//                alert("Problems");
//                return false;
//            }
//        }
//    });
        
}