<?php
    include_once'header.php';
?>


<section class="container" id="home">
    <div class="home">
        <img src="static/home.jpg" alt="This is Image">
        <h1>This is Our Project</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex nam rem aspernatur, deserunt maxime et quos perferendis recusandae impedit atque consectetur quam sequi culpa magni dignissimos repudiandae consequuntur, delectus temporibus.
        </p>
    </div>
</section>
<section class="container" id="about">
    <h1>About Our Work</h1>
    <div class="about">
        <div class="about-left">
            <img src="static/about-left.jpg" alt="">
            <h2>This is left work</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum obcaecati alias rerum deserunt modi nisi repellendus quaerat provident sequi! Reprehenderit!
            </p>
        </div>
        <div class="about-right">
            <img src="static/about-right.jpg" alt="">
            <h2>This is right work</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum obcaecati alias rerum deserunt modi nisi repellendus quaerat provident sequi! Reprehenderit!
            </p>
        </div>
    </div>
</section>
<section class="container" id="team">
    <h1>This Is Our Team</h1>
    <div class="team">
        <div class="one">
            <img src="static/one.jpg" alt="">
            <h2>Mr.One</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, debitis.
            </p>
        </div>
        <div class="two">
            <img src="static/two.jpg" alt="">
            <h2>Mr.Two</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, debitis.
            </p>
        </div>
        <div class="three">
            <img src="static/three.jpg" alt="">
            <h2>Mr.Three</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, debitis.
            </p>
        </div>
    </div>
</section>
<section class="container" id="contact">
    <h1>Contact Us Here</h1>
    <div class="form">
        <form action="includes/contact.inc.php" method="post">
            <input type="text" name="name" placeholder="Name..." required>
            <input type="text" name="email"  placeholder="Email..." required>
            <textarea name="textarea" cols="30" rows="10" placeholder="Message..."></textarea>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</section>
<?php
    include_once'footer.php';
?>