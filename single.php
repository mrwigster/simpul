<?php
$metaTitle = 'A Single Blog Example Page';
$metaDescription = 'The simpul blog layout';
include $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php';
?>

<header class="blog-single">
  <div class="container">
    <h1>A simpul blog post</h1>
    <div class="meta-info">
      <span>Posted by:<img class="author-picture" src="/img/alex-simpul.jpg">simpul on <?php echo date(
              'dS F Y'
            ); ?></span>
    </div>
  </div>
</header>

<main class="content">
  <article class="container">
    <h2 class="simpul-section--title">Long form content looks like:</h2>
    <p>Paragraph text: <strong>Inline strong text</strong> & <em>inline em text</em> dolor sit amet, consectetur
      adipisicing elit. Possimus corporis quasi sunt fugiat eaque illum, excepturi ut veniam quis animi dolore
      voluptatem qui minus, incidunt ea fugit quod. In, deleniti.</p>
    <img src="/img/example.jpeg" alt="Default image example">
    <h3>More text...</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos illum laboriosam enim consequatur placeat
      nihil incidunt suscipit, vero in a! A sequi mollitia sit ea at quaerat dolore, illum aut.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos illum laboriosam enim consequatur placeat
      nihil incidunt suscipit, vero in a! A sequi mollitia sit ea at quaerat dolore, illum aut.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos illum laboriosam enim consequatur placeat
      nihil incidunt suscipit, vero in a! A sequi mollitia sit ea at quaerat dolore, illum aut.</p>
    <blockquote>
      <h3>Blockquote</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quam laborum tenetur nemo ab sed impedit
        ratione! Corrupti, ipsam eveniet sit, dignissimos ducimus sequi enim, fuga nesciunt itaque exercitationem
        suscipit!</p>
    </blockquote>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic laborum et minus incidunt labore id dolorem
      delectus, velit cupiditate ab possimus libero, eum ipsum iusto consequuntur nisi vero nobis inventore!</p>
    <code>HR:</code>
    <hr>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic laborum et minus incidunt labore id dolorem
      delectus, velit cupiditate ab possimus libero, eum ipsum iusto consequuntur nisi vero nobis inventore!</p>

  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php'; ?>