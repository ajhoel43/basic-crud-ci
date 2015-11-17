<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/edit_form'); ?>
	<input type="hidden" name="slugold" value="<?php echo $news->slug ?>">
	
    <label for="title">Title</label>
    <input type="input" name="judul" value="<?php echo $news->title ?>" /><br />

    <label for="text">Text</label>
    <textarea name="text"><?php echo $news->text ?></textarea><br />

    <input type="submit" name="update" value="Update news item" />

</form>