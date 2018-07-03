<?php
$metaTitle = 'My website | Simpul';
$metaDescription = 'My Site built using the simpul framework/starter template';
include($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');
?>

<section class="simpul-hero home">
  <div class="container">
    <div class="hero-content">
      <h1>A nice big hero</h1>
      <h2>With accompanying text</h2>
      <a href="/" class="btn">One clear CTA</a>
    </div>
  </div>
  <aside class="background-video">
    <video autoplay playsinline loop mute>
      <source src="/videos/forest-drone.mp4" type="video/mp4">
    </video>
  </aside>
</section>

<div class="blog-list-page">
  <div class="container flex-wrap">
    <div class="third card">
      <h4><a href="/">A simple card</a></h4>
      <img src="/img/example.jpeg" alt="an example image">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum libero magni dicta, ut ducimus eaque saepe officia ratione est assumenda natus praesentium aperiam! Ad, debitis molestias enim sint aliquid hic.</p>
      <a class="btn" href="/">Keep Reading &rarr;</a>
    </div>
    <div class="third card">
      <h4><a href="/">A simple card</a></h4>
      <img src="/img/example.jpeg" alt="an example image">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum libero magni dicta, ut ducimus eaque saepe officia ratione est assumenda natus praesentium aperiam! Ad, debitis molestias enim sint aliquid hic.</p>
      <a class="btn" href="/">Keep Reading &rarr;</a>
    </div>
    <div class="third card">
      <h4><a href="/">A simple card</a></h4>
      <img src="/img/example.jpeg" alt="an example image">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum libero magni dicta, ut ducimus eaque saepe officia ratione est assumenda natus praesentium aperiam! Ad, debitis molestias enim sint aliquid hic.</p>
      <a class="btn" href="/">Keep Reading &rarr;</a>
    </div>
  </div>
</div>

<section class="simpul-section-odd typography">
  <div class="container">
  <code class="simpul-section--title">typography</code>
  <h1>heading h1</h1>
  <h2>heading h2</h2>
  <h3>heading h3</h3>
  <h4>heading h4</h4>
  <h5>heading h5</h5>
  <h6>heading h6</h6>
  <a>Anchor </a>
  <em>Emphasis </em>
  <small>Small </small>
  <strong>Strong </strong>
  <u>Underline</u>
  <blockquote>
    <h2>A Blockquote H2</h2>
    Un-wrapped text in blockquote Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel quam itaque modi odit quia dignissimos mollitia reprehenderit doloremque doloribus sint animi atque alias cupiditate, tempore qui beatae quod possimus. Non.
    <p>paragraph text in blockquote</p>
  </blockquote>
  </div>
</section>

<section class="simpul-section lists">
  <div class="container">
  <code class="simpul-section--title">lists</code>
  <ul>
    <li>Un-ordered list item</li>
    <li>Un-ordered list item</li>
    <li>Un-ordered list item</li>
    <li>Un-ordered list item
      <ul>
        <li>ul in li item 1</li>
        <li>ul in li item 2</li>
        <li>ul in li item 3</li>
        <li>ul in li item 4</li>
      </ul>
    </li>
  </ul>
  <ol>
    <li>Ordered List item</li>
    <li>Ordered List item</li>
    <li>Ordered List item</li>
    <li>Ordered List item</li>
  </ol>
  </div>
</section>

<section class="simpul-section-odd buttons">
  <div class="container">
  <code class="simpul-section--title">Buttons</code>
  <div class="btn">.btn Button</div>
  <div class="btn-outline">.btn-outline Button</div>
  </div>
</section>

<section class="simpul-section head-for-grid">
  <div class="container">
  <code class="simpul-section--title">The simpul flex/grid-wrap system:</code>
  <h3>No floats!</h3>
  <strong>It's 2018!</strong>
  <i>Simpul doesn't use any <code>float</code>'s for layout at all, only relying on flex and/or grid!</i>
  <div id="switchFlexGrid" data-current="flex">Switch Flex | Grid</div>
  </div>
</section>

<section class="simpul-section-odd">
  <div class="flex-wrap" id="gridExample">
    <div class="simpul-example-block quart">.quart</div>
    <div class="simpul-example-block quart">.quart</div>
    <div class="simpul-example-block quart offset-quart">.quart.offset-quart</div>
    <div class="simpul-example-block third">.third</div>
    <div class="simpul-example-block third">.third</div>
    <div class="simpul-example-block third">.third</div>
    <div class="simpul-example-block third">.third</div>
    <div class="simpul-example-block third offset-third">.third.offset-third</div>
    <div class="simpul-example-block half">.half</div>
    <div class="simpul-example-block half">.half</div>
    <div class="simpul-example-block twothird">.twothird</div>
    <div class="simpul-example-block third">.third</div>
    <div class="simpul-example-block threequart">.threequart</div>
    <div class="simpul-example-block quart">.quart</div>
    <div class="simpul-example-block full">.full</div>
  </div>
</section>

<section class="simpul-section code-example">
  <div class="container">
  <code class="simpul-section--title">A code block:</code>
  <pre>
<code><?php echo htmlentities('<div class="flex-wrap" id="gridExample">
<div class="simpul-example-block quart">.quart</div>
<div class="simpul-example-block quart">.quart</div>
<div class="simpul-example-block quart offset-quart">.quart.offset-quart</div>
<div class="simpul-example-block third">.third</div>
<div class="simpul-example-block third">.third</div>
<div class="simpul-example-block third">.third</div>
<div class="simpul-example-block third">.third</div>
<div class="simpul-example-block third offset-third">.third.offset-third</div>
<div class="simpul-example-block half">.half</div>
<div class="simpul-example-block half">.half</div>
<div class="simpul-example-block twothird">.twothird</div>
<div class="simpul-example-block third">.third</div>
<div class="simpul-example-block threequart">.threequart</div>
<div class="simpul-example-block quart">.quart</div>
<div class="simpul-example-block full">.full</div>
</div>'); ?>
</code>
</pre>
  </div>
</section>

<section class="simpul-section-odd content">
  <div class="container">
    <code class="simpul-section--title">Long form content looks like:</code>
    <img src="/img/example.jpeg" alt="Default image example">
    <h3>My latest blog post</h3>
    <p>Paragraph text: <strong>Inline strong text</strong> & <em>inline em text</em> dolor sit amet, consectetur adipisicing elit. Possimus corporis quasi sunt fugiat eaque illum, excepturi ut veniam quis animi dolore voluptatem qui minus, incidunt ea fugit quod. In, deleniti.</p>
  </div>
</section>

<section class="simpul-section form">
  <div class="container">
  <code class="simpul-section--title">Forms:</code>
  <form class="flex-wrap" action="#" autocomplete="none">
    <label class="third" for="name">Name:
      <input type="text" name="name" id="name" placeholder="text">
    </label>
    <label class="third" for="nametwo">Name (disabled):
      <input type="text" name="nametwo" id="name" disabled placeholder="disabled">
    </label>
    <label class="third" for="email">Email (required):
      <input type="email" name="email" id="email" placeholder="email required" required>
    </label>
    <label class="full" for="textarea">Textarea:
      <textarea name="message" id="textarea" cols="30" rows="10"></textarea>
    </label>
    <div class="third">
      <div>Checkboxes:</div>
      <input type="checkbox" id="checkone" value="Check 1"><label for="checkone">Check 1</label>
      <input type="checkbox" id="checktwo" value="Check 2"><label for="checktwo">Check 2</label>
    </div>
    <label class="third" for="name">
      <div>Radios:</div>
      <input type="radio" id="radioone" value="radio 1"><label for="radioone">Radio 1</label>
      <input type="radio" id="radiotwo" value="radio 2"><label for="radiotwo">Radio 2</label>
    </label>
    <label class="third" for="select">
      Select:
      <select name="select" id="select">
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>
      </select>
    </label>
    <input class="half" type="submit" value="submit">
  </form>
  </div>
</section>

<?php include($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>