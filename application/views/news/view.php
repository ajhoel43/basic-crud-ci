<?php

echo '<h2>'.$news_item->title.'</h2>';
echo $news_item->text."<br>";
?>
<a href="<?php echo site_url('news/hapus/'.$news_item->slug); ?>"><button>Hapus</button></a>
<a href="<?php echo site_url('news/edit_form/'.$news_item->slug); ?>"><button>Edit</button></a>
<a href="<?php echo site_url('news/') ?>"><button>Back to News</button></a><br>