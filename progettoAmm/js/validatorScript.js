
    function formHandler(form) {
        
        if (form.username.value === "") {
            alert('Riempire il campo: Username');
            return false;
        }
        
//        if (form.email.value == "") {
//            alert('Riempire il campo: E-mail');
//            return false;
//        } else {
//            var mail = form.email.value;
//            var regV = /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
//            var result = mail.match(regV);
//            if (!result) {
//                alert('L\'email non è valida');
//                return false;
//            }
//        }

        if (form.password.value === "") {
            alert('Riempire il campo: Password');
            return false;
        }

//        $.ajax({
//            url: "../controller/checkForm.php?username="+form.username.value,
//            context: form
//        }).done(function (data) {
//            if(data == 0) {
//                alert('Username già presente');
//                return false;
//            } else {
//                checkAjax = 1;
//                $(this).submit();
//                return true;
//            }
//        });

        $.ajax({
            url: "../controller/checkForm.php",
            type: "post",
            context: form,
            data: "username="+form.username.value,
            success: function(data){
                console.log("log*: " + data);
                switch (data) {
                    case 0:
                        alert("Username già presente");
                        return false;
                        break;
                    case 1:
                        alert("Procedo con il submit");
                        $(this).submit();
                        return true;
                        break;
                }
            },
            error: function(er){
                console.log("error*: " + er);
                return false;
            }
//            success: function(data){
//                $('body').append(data);
//                switch(data) {
//                    case 0:
//                        alert('Username già presente');
//                        return false;
//                        break;
//                    case 1:
////                        checkAjax = 1;
//                        alert('Procedo con il submit');
////                        $(this).submit();
//                        return true;
//                        break;
//                }
//            },
//            fail: function(errorData){
//                alert(errorData);
//            }
        });
        
//        alert('Something wrong in Javascript');
//        return false;

    }

//EXEC BLOCK    

$(document).ready(function() {
//    $("#register").click(function(e){
//        form = $("#registerForm");
//        e.preventDefault();
////        if ($("#Newusername").value === "") {
////            alert('Riempire il campo: Username');
////            return false;
////        }
////        if ($("#Newpassword").value === "") {
////            alert('Riempire il campo: Password');
////            return false;
////        }
//        
//        $.ajax({
//            url: "../controller/checkForm.php",
//            type: "post",
//            data: "username="+$("#Newusername").value,
//            success: function(data){
//                console.log("log*: " + data);
//                switch(data) {
//                    case 0 :
//                        alert('Username già presente');
//                        return false;
//                        break;
//                    case 1 :
//                        alert('Procedo con il submit');
//                        $("#registerForm").submit();
////                        return true;
//                        break;
//                }
//            }
//            
//        
//        });
    
    $("#registerForm").submit(function(e){
            e.preventDefault(); 
            return formHandler(this);
    });
});