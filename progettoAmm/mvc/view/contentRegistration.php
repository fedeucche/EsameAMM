
<div class="content centeredContent" id="registerContent">
    <h2>Registrazione</h2>
    <form id="registerForm" method="post">
        <br/>
        <input type="text" id="username" name="username" placeholder="Username">
        <br/>
        <input type="password" id="password" name="password" placeholder="Password">
        <br/>
        <input id="register" type="submit" name="register" value="Registrati">
    </form>
</div>

<script src="../../js/newjavascript.js"></script>





<!--$(document).ready(function() {
    $(form)
        .formValidation({
            ... options ...
        })
        .on('success.form.fv', function(e) {
            // Prevent form submission
            e.preventDefault();

            var $form = $(e.target),
                fv    = $(e.target).data('formValidation');

            // Do whatever you want here ...

            // Then submit the form as usual
            fv.defaultSubmit();
        });
});-->

<!--<script type="text/javascript">
$(document).ready(function() {
    $('#registerForm')
        .formValidation({
            ... options ...
        })
        .on('success.form.fv', function(e) {
            // Prevent form submission
            e.preventDefault();

            var $form = $(e.target),
                fv    = $(e.target).data('formValidation');

            // Do whatever you want here ...

            // Then submit the form as usual
            fv.defaultSubmit();
        });
});

</script>-->


<!--<script type="text/javascript">
    $(function(){
        $('#register').click(function(){
        $('body').append('<img src="../../media/loading.gif" alt="loading" id="loading">');
        var username = $('#newUsername').val();
        var password = $('#newPassword').val();
        $.ajax({
            url:"master.php",
            type:"post",
            data: 'register&username=' + username + '&password=' + password,
            success: function(r){
                if(r){
                    $('#loading').fadeOut(2000, function(){
                        $(this).remove();
                    });
                } else {
                    $('#register').before('<p>Errore</p>');
                }
//                $('#risposta').remove();
//                $('#wrapper').before(r);
                
            }
        });
        
        return false;
        });
    });
    
</script>-->
