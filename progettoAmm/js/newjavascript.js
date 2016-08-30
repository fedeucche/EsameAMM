
$('#registerForm').on('submit', function(){
    if(!$(this).attr('validated')) {
        // FINAL SUBMIT

        var that = $(this),
            url = '../controller/checkForm.php',
            type = that.attr('method'),
            data = {};

        that.find('[name]').each(function(index, value){
            var that = $(this),
                name = that.attr('name'),
                value = that.val();

            data[name] = value;
        });

        $.ajax({
            url: url,
            type: type,
            data: data,
            success: function(response){
                  console.log(response);
                  if(response == 1){
                      $('#registerForm').attr('validated',true);
                      $('#registerForm').submit();
                  }
                  if(response == 0){
                      alert("Username già presente.");
                  }
            }
        });
        return false;
    }
    alert('Ora chiamo submit(true); ma non fa il submit');
    return true;
});


//function submitForm(data) {
//    console.log('Final submit');
//    console.log(data['username']);
//    
//    $('#registerForm').submit();
//    
////    $.ajax({
////        url: '../view/master.php',
////        type: 'post',
////        data: 'register&username='+ data['username'] + '&password=' + data['password'],
////        success: function(){
////            alert('Form Submitted');
////        }
////    });
//    
//}