
$('#registerForm').on('submit', function(){
    if(!$(this).attr('validated')) {
        
        if(emptyChecker(this) == false){
            console.log("func "+ emptyChecker(this));
            alert('Riempire i campi: Username e Password');
            return emptyChecker(this);
        }        
        
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
                  console.log('response= ' + response);
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
    
    alert('Registrazione completata.');
    $('#registerForm').attr('validated',false);
    return true;
});


function emptyChecker(form) {
        
        if (form.username.value == "") {
//            alert('Riempire il campo: Username');
            return false;
        }
        
        if (form.password.value == "") {
//            alert('Riempire il campo: Password');
            return false;
        }
}