// Is executed on document.ready
$(function(){

    var firstname = true;
    var lastname = true;
    var email = true;
    var house_number = true;
    var city = true;
    var postal = true;
    var country = true;

    // Disable submit button
    var $submit = $('input[type=submit]');
    $submit.prop('disabled', true);

    // Validate firstname
    $('#firstname input').focusout(function(){
        var regex = /^[A-z\u00C0-\u02AB'´`]+\.?/;
        firstname = !regex.test(this.value);
        if (firstname) {
            $('#firstname mark').fadeIn(1000);
        } else {
            $('#firstname mark').fadeOut(1000);
        }
        updateSubmit();
    });

    // Validate lastname
    $('#lastname input').focusout(function(){
        var regex = /^[A-z\u00C0-\u02AB'´`]+\.?/;
        lastname = !regex.test(this.value);
        if (lastname) {
            $('#lastname mark').fadeIn(1000);
        } else {
            $('#lastname mark').fadeOut(1000);
        }
        updateSubmit();
    });

    // Validate email
    $('#email input').focusout(function(){
        var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        email = !regex.test(this.value);
        if (email) {
            $('#email mark').fadeIn(1000);
        } else {
            $('#email mark').fadeOut(1000);
        }
        updateSubmit();
    });

    // Validate street
    $('#street input').focusout(function(){
        var regex = /^[A-z\u00C0-\u02AB'´`]+\.?/;
        street = !regex.test(this.value);
        if (street) {
            $('#street mark').fadeIn(1000);
        } else {
            $('#street mark').fadeOut(1000);
        }
        updateSubmit();
    });

    // Validate house number
    $('#house_number input').focusout(function(){
        var regex = /[0-9]+/;
        house_number = !regex.test(this.value);
        if (house_number) {
            $('#house_number mark').fadeIn(1000);
        } else {
            $('#house_number mark').fadeOut(1000);
        }
        updateSubmit();
    });

    // Validate city
    $('#city input').focusout(function(){
        var regex = /^[A-z\u00C0-\u02AB'´`]+\.?/;
        city = !regex.test(this.value);
        if (city) {
            $('#city mark').fadeIn(1000);
        } else {
            $('#city mark').fadeOut(1000);
        }
        updateSubmit();
    });

    // Validate postal code
    $('#postal input').focusout(function(){
        var regex = /[0-9]+/;
        postal = !regex.test(this.value);
        if (postal) {
            $('#postal mark').fadeIn(1000);
        } else {
            $('#postal mark').fadeOut(1000);
        }
        updateSubmit();
    });

    // Validate country
    $('#country input').focusout(function(){
        var regex = /^[A-z\u00C0-\u02AB'´`]+\.?/;
        country = !regex.test(this.value);
        if (country) {
            $('#country mark').fadeIn(1000);
        } else {
            $('#country mark').fadeOut(1000);
        }
        updateSubmit();
    });

    // Updates submit button
    function updateSubmit() {
        $submit.prop('disabled', (name || email));
    }

});
