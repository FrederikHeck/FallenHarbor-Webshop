<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    $(".btnBuy").click( function() {
      $( "#dialog" ).dialog();
       $(".dialog" ).show();
    } );
    function submitForm(){
        $("form").submit();
    }
</script>
