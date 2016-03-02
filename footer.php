
</body>
</html>

<script>
    $( document ).ready(function() {
        $('#dropdown-parent').on('show.bs.dropdown', function() {
            $("html, body").css({"overflow": "hidden", "height": "100%");
        });

        $('#dropdown-parent').on('hide.bs.dropdown', function() {
            $("html, body").css({"overflow": "auto", "height": "auto"});
        });
    });
</script>
