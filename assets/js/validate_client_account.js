// Is executed on document.ready
$(function(){

    var username = true;
    var pw1 = true;
    var pw2 = true;

    // Disable submit button
    var $submit = $('input[type=submit]');
    $submit.prop('disabled', true);

    // Validate username
        $('#username input').focusout(function(){
            var regex = /^[A-z\u00C0-\u02AB'´`]+\.?/;
            username = !regex.test(this.value);
            if (username) {
                //regex didnt match
                $('#username mark').fadeOut(0);
                $('#usernameInvalid').fadeIn(1000);
            } else {
                //regex matched, now check via ajax if username exists
                usernameVal = this.value;
                $.ajax({
                    url: "assets/php/func/username_ajax.php?username="+usernameVal,
                    type: "GET",
                    dataType: "text",
                    success: function(data){
                        data = $.trim(data)
                        if(data == "true"){
                            //username doesn't exist yet
                            $('#username mark').fadeOut(1000);
                        }
                        else {
                            //username already exists
                            $('#username mark').fadeOut(0);
                            $('#usernameExists').fadeIn(1000);
                        }

                    },
                    error: function(jqXHR, status, msg){
                        $("#time").html("Error! " + msg);
                    }
                });
            }
            updateSubmit();
        });

    // Validate password
    $('#pw1 input').focusout(function(){
        var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}$/;
        //(?=.*[a-z]) Assert presence of at least one lowercase ASCII character
        //(?=.*[A-Z]) Assert presence of at least one uppercase ASCII character
        //(?=.*[0-9]) Assert presence of at least one ASCII digit
        //(?=.*\W)    Assert presence of at least one non-alphanumeric character
        //.{8,}       Match at least 8 characters
        pw1 = !regex.test(this.value);
        if (pw1) {
            $('#pw1 mark').fadeIn(1000);
        } else {
            $('#pw1 mark').fadeOut(1000);
        }
        updateSubmit();
    });

    //check if the second password matches the first
    $('#pw2 input').focusout(function(){
        pw1Val = $('#pw1 input').val();
        pw2Val = this.value;

        if (pw1Val != pw2Val) {
            pw2 = false;
            $('#pw2 mark').fadeIn(1000);
        } else {
            pw2 = true;
            $('#pw2 mark').fadeOut(1000);
        }
        updateSubmit();
    });

    // Updates submit button
    function updateSubmit() {
        $submit.prop('disabled', (name || email));
    }
});