<?php
$metaTitle = 'The simpul framework';
$metaDescription = 'My Site built using the simpul framework/starter template';
include $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php';
?>

<section class="simpul-hero home background-media-shade">
    <div class="container">
        <div class="hero-content flex-wrap">
            <div class="half">
                <h1>simpul</h1>
                <h2>Super clean, lightweight starting point for website developers</h2>
                <a href="https://github.com/mrwigster/simpul" class="btn">One clear CTA</a>
            </div>
        </div>
    </div>
    <aside class="background-video">
        <video autoplay playsinline loop muted src="/videos/forest-drone.mp4" type="video/mp4"></video>
    </aside>
</section>

<div class="card-blocks">
    <div class="container flex-wrap">
        <div class="third card">
            <a href="./blog.php">
                <h4 class="card-title">A card example</h4>
                <img src="/img/example.jpeg" alt="an example image">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum libero magni dicta, ut ducimus eaque saepe officia ratione est assumenda natus praesentium aperiam! Ad, debitis molestias enim sint aliquid hic.</p>
                <span class="btn" href="/">Keep Reading &rarr;</span>
            </a>
        </div>
        <div class="third card">
            <a href="./blog.php">
                <h4 class="card-title">A card example</h4>
                <img src="/img/example.jpeg" alt="an example image">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum libero magni dicta, ut ducimus eaque saepe officia ratione est assumenda natus praesentium aperiam! Ad, debitis molestias enim sint aliquid hic.</p>
                <span class="btn" href="/">Keep Reading &rarr;</span>
            </a>
        </div>
        <div class="third card">
            <a href="./blog.php">
                <h4 class="card-title">A card example</h4>
                <img src="/img/example.jpeg" alt="an example image">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum libero magni dicta, ut ducimus eaque saepe officia ratione est assumenda natus praesentium aperiam! Ad, debitis molestias enim sint aliquid hic.</p>
                <span class="btn" href="/">Keep Reading &rarr;</span>
            </a>
        </div>
    </div>
</div>

<section class="simpul-section key-simpul-facts">
    <div class="container flex-wrap">
        <h2 class="full">Key Facts</h2>
        <h3 class="full">About simpul</h3>
        <div class="third">
            <p>Focus on clean and simple code, as basic as possible whilst retaining the majority of features, elements and bits needed to start 90%+ of most standard PHP websites.</p>
        </div>
        <div class="third">
            <p>Total deployed size:<br>
                <strong>css:</strong> 19kb<br>
                <strong>JS:</strong> 20kb
            </p>
        </div>
        <div class="third">
            <p>Utlising a simple code and build structure of: gulp & sass. with gulp handling auto minification, babel, simple PHP server, browser-sync and more!</p>
        </div>
    </div>
</section>
<section class="simpul-section-odd typography">
    <div class="container">
        <code class="simpul-section--title">typography</code>
        <h1>heading h1</h1>
        <h2>heading h2</h2>
        <h3>heading h3</h3>
        <h4>heading h4</h4>
        <h5>heading h5</h5>
        <h6>heading h6</h6>
        <a href="#">Anchor </a>
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
        <h5>No floats—It's <?php echo date('Y'); ?>!</h5>
        <i>Simpul doesn't use any type of <code>float</code> for layout at all, only relying on flex and/or grid!</i>
        <p>Below is an example of the simpul flex/grid system. Switch the button below and you should notice hardly anything changes.<br>That's because we've managed to cleverly create a structure that works and sizes the same way in both flex and grid based layouts!</p>
        <div id="switchFlexGrid" data-current="flex">Switch: <span class="demo-flex-switcher flex">Flex</span><span class="demo-flex-switcher grid">Grid</span></span></div>
    </div>
</section>

<section class="simpul-section-odd">
    <div class="flex-wrap flex-grid-switching" id="gridExample">
        <div class="simpul-example-block quart">.quart</div>
        <div class="simpul-example-block quart">.quart</div>
        <div class="simpul-example-block quart">.quart</div>
        <div class="simpul-example-block quart">.quart</div>
        <div class="simpul-example-block quart">.quart</div>
        <div class="simpul-example-block quart offset-quart">.quart.offset-quart</div>
        <div class="simpul-example-block quart">.quart</div>
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
  <div class="simpul-example-block quart">.quart</div>
  <div class="simpul-example-block quart">.quart</div>
  <div class="simpul-example-block quart">.quart</div>
  <div class="simpul-example-block quart offset-quart">.quart.offset-quart</div>
  <div class="simpul-example-block quart">.quart</div>
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
    <article class="container">
        <code class="simpul-section--title">Long form content looks like:</code>
        <img src="/img/example.jpeg" alt="Default image example">
        <h3>My latest blog post</h3>
        <p>Paragraph text: <strong>Inline strong text</strong> & <em>inline em text</em> dolor sit amet, consectetur adipisicing elit. Possimus corporis quasi sunt fugiat eaque illum, excepturi ut veniam quis animi dolore voluptatem qui minus, incidunt ea fugit quod. In, deleniti.</p>
        <p>Paragraph text: <strong>Inline strong text</strong> & <em>inline em text</em> dolor sit amet, consectetur adipisicing elit. Possimus corporis quasi sunt fugiat eaque illum, excepturi ut veniam quis animi dolore voluptatem qui minus, incidunt ea fugit quod. In, deleniti.</p>
        <a href="/single.php" class="btn">See full blog post for long content</a>
    </article>
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
                <input type="radio" id="radioone" name="radioexample" value="radio 1"><label for="radioone">Radio 1</label>
                <input type="radio" id="radiotwo" name="radioexample" value="radio 2"><label for="radiotwo">Radio 2</label>
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

<script>
    const switcher = document.getElementById("switchFlexGrid");
    // The grid/column example.
    const gridExample = document.getElementById("gridExample");

    switcher.addEventListener("click", function() {
        if (switcher.getAttribute("data-current") == "flex") {
            switcher.setAttribute("data-current", "grid");
            gridExample.classList.remove("flex-wrap");
            gridExample.classList.add("grid-wrap");
            gridExample.style.opacity = 0;
            setTimeout(() => {
                gridExample.style.opacity = 1;
            }, 150);
        } else {
            switcher.setAttribute("data-current", "flex");
            gridExample.classList.remove("grid-wrap");
            gridExample.classList.add("flex-wrap");
            gridExample.style.opacity = 0;
            setTimeout(() => {
                gridExample.style.opacity = 1;
            }, 150);
        }
    });
</script>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php'; ?>