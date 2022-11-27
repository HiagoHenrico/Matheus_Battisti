<?php

  include_once("templates/header.php");

  if(isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {

        if($post['id'] == $postId) {
            $currentPost = $post;
        }

    }

  }

?>

  <main id="post-container">
      <div class="content-container">
          <h1 id="main-title"><?= $currentPost['title'] ?></h1>
          <p id="post-description"><?= $currentPost['description'] ?></p>
          <div class="img-container">
              <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
          </div>
          <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam error nihil ullam fugit accusamus, illo animi placeat cupiditate provident dignissimos consequatur, quia illum nulla, natus eum voluptatibus impedit ipsam corrupti.
          Facilis earum eaque, amet quidem optio deleniti alias ipsum fuga incidunt, maiores atque? Tempore dolorem debitis qui commodi cumque officia ducimus dignissimos. Voluptate rerum iste omnis nostrum eum aperiam hic!
          Nam, magni ad quisquam corrupti ducimus quibusdam quis, nobis voluptas vitae sequi maiores dicta, exercitationem iusto unde quo? Blanditiis corrupti id minus molestiae laudantium labore qui in consequatur ipsam maxime!
          Beatae voluptatem, tenetur fugiat illo possimus autem nemo accusamus sit, quos vero ipsa perferendis, recusandae provident cumque! Accusamus, mollitia dignissimos officiis obcaecati, odit iste eos optio quasi voluptates, qui nisi.
          Laboriosam tempore reprehenderit, quae omnis voluptates quas fugiat optio! Laborum voluptatibus maxime itaque, dolor nihil quia explicabo dolore cum debitis quisquam? Eius sed nobis ea distinctio consequatur blanditiis laudantium adipisci?</p>
          <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam error nihil ullam fugit accusamus, illo animi placeat cupiditate provident dignissimos consequatur, quia illum nulla, natus eum voluptatibus impedit ipsam corrupti.
          Facilis earum eaque, amet quidem optio deleniti alias ipsum fuga incidunt, maiores atque? Tempore dolorem debitis qui commodi cumque officia ducimus dignissimos. Voluptate rerum iste omnis nostrum eum aperiam hic!
          Nam, magni ad quisquam corrupti ducimus quibusdam quis, nobis voluptas vitae sequi maiores dicta, exercitationem iusto unde quo? Blanditiis corrupti id minus molestiae laudantium labore qui in consequatur ipsam maxime!
          Beatae voluptatem, tenetur fugiat illo possimus autem nemo accusamus sit, quos vero ipsa perferendis, recusandae provident cumque! Accusamus, mollitia dignissimos officiis obcaecati, odit iste eos optio quasi voluptates, qui nisi.
          Laboriosam tempore reprehenderit, quae omnis voluptates quas fugiat optio! Laborum voluptatibus maxime itaque, dolor nihil quia explicabo dolore cum debitis quisquam? Eius sed nobis ea distinctio consequatur blanditiis laudantium adipisci?</p>
        </div>

      <aside id="nav-container">
          <h3 id="tags-title">Tags</h3>
          <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
              <a href="#"><?= $tag ?></a>
              <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
          </ul>
          <h3 id="categories-title">Categorias</h3>
          <ul id="categories-list">
            <?php foreach($categories as $category): ?>
            <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
          </ul>

      </aside>
  </main>
  

    <h1><?= $currentPost['title'] ?></h1>
<?php
    include_once("templates/footer.php");
?>