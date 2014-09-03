<script type="text/javascript">
    $.post('web-src/config/model.php', {'method': 'howto'}, function (data) {
        $("#howToOrder").html(data);
    });
</script>

<div id="howToOrder"></div>