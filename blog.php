<?php
$metaTitle = 'Blog Example Page';
$metaDescription = 'The simpul blog layout';
include $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php';
?>

<header class="blog-list-page">
  <div class="container">
    <h1 class="full">The simpul blog list page</h1>
    <div class="full">
      <span>An example of a basic listing of blog posts using the simpul framework</span>
    </div>
  </div>
</header>

<main class="blog-list-page">
  <div class="container flex-wrap">
    <?php for ($i = 0; $i < 6; $i++) { ?>
    <div class="half blog-list-item">
      <h4 class="blog-list-item-title">A blog-list-item example</h4>
      <img src="/img/example.jpeg" alt="an example image">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum libero magni dicta, ut ducimus eaque saepe
        officia ratione est assumenda natus praesentium aperiam! Ad, debitis molestias enim sint aliquid hic.</p>
      <a class="btn" href="/single.php">Keep Reading &rarr;</a>
    </div>
    <?php } ?>
  </div>
  <div class="pagination">
    <ul>
      <li class="current">
        <a href="#">1</a>
      </li>
      <li><a href="#">2</a></li>
    </ul>
  </div>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php'; ?>