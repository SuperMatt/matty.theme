
</body>
</html>

<script>
    $( document ).ready(function() {
        $('#dropdown-parent').on('show.bs.dropdown', function() {
            $("body").css("overflow", "hidden");
        });

        $('#dropdown-parent').on('hide.bs.dropdown', function() {
            $("body").css("overflow", "auto");
        });
    });
</script>
