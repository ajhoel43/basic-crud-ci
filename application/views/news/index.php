<h2><?php echo $title; ?></h2>
<?php echo anchor('news/create/', '<button>Buat news baru</button>') ?>
<?php foreach ($news as $news_item): ?>

        <h3><?php echo $news_item->title; ?></h3>
        <div class="main">
                <?php echo $news_item->text; ?>
        </div>
        <p><a href="<?php echo site_url('news/view/'.$news_item->slug); ?>"><button>View article</button></a></p>
<?php endforeach; ?>