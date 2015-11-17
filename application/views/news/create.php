<h2><?php echo $title; ?></h2>

<?php //echo validation_errors(); ?>

<form name="form_submit" method="POST" role="form">
	<input type="hidden" name="id">
    <label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="text">Text</label>
    <textarea name="text"></textarea><br />

    <input type="submit" name="submit" value="Create news item" />

</form>
<button onclick="window.location('index.php')">Tes</button>

<script>
$(document).ready(function(){
	$("[name='submit']").click(function(){
		window.location("<?php echo base_url('news') ?>")
		/*
	    $.ajax({
	        url : '<?php echo base_url('index.php/news/create_ajax') ?>',
	        type: "POST",
	        data : $("form[name='form_submit']").serialize(),
	        success : function(msg)
	        {
	            var FLAG = 1,
	                MESSAGE = 2;

	            msg = msg.split('@@');

	            if( msg[FLAG] == '0')
	            {
	                window.location("<?php echo base_url('index.php/news') ?>");
	            }
	            else
	            {
	                $('.modal-error').html( msg[MESSAGE] );
	            }
	        }
	    });

	    window.location("<?php echo base_url('index.php/news') ?>");*/
	});
});
</script>