<?foreach( $posts as $post ):?>
    <div class="span8">
        <h1><a href="<?= BASE_URL ?>posts/view/<?= $post['post_id'] ?>"><?=$post['post_subject']?></a></h1>
        <p><?=$post['post_text']?></p>
        <div>

        </div>
    </div>
<?endforeach?>