
        <!-- page content -->
        <div class="col-md-9">
          <div class="well pageContent">


<?php foreach ($posts as $key => $post) {

  $byLine = $post['author'] . ' - ' . $post['posted'];
  $content = 200 > strlen($post['content']) ? $post['content'] : substr($post['content'], 0, 200) . '...';

?>


            <div class="post">
              <div class="postTitle">
                <h3><?php print $post['title'] . "<br>" . "<br>"; ?></h3></div>
              <div class="postContent"><?php print $content . "<br>" . "<br>"; ?></div>
              <div class="postByLine">
                <em><?php print $byLine; ?></em></div>
            </div>

<?php } ?>

          </div>
        </div>
        <!-- end page content -->
