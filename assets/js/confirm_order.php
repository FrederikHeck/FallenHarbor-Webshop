<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    $("button").click( function() {
      $( "#dialog" ).dialog();
       $(".dialog" ).show();
    } );
    function submitForm(){
        $("form").submit();
    }
</script>
