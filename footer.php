    </div>
</body>
</html>

<script>
    $( document ).ready(function() {
        $('#dropdownmenu').on('show.bs.dropdown', function() {
            $("html, body").css("overflow", "hidden");
        });

        $('#dropdownmenu').on('hide.bs.dropdown', function() {
            $("html, body").css("overflow", "auto");
        });
    });
</script>
