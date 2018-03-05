<!-- Header -->

<?php include "includes/header.php" ?>

<!-- Body -->

<?php
    if(isset($_POST['submitMail'])) {
        echo 'lol';
    };
?>

<main id="main-content" class="container">
    <div class="row">
        <section id="contacts" class="col-md-5">
            <p>UAB Elmika</p>
            <p><i class="fas fa-phone-square"></i> +370 5 233 3426</p>
            <p><i class="fas fa-fax"></i> +370 5 216 3668</p>
            <p><i class="fas fa-home"></i>41, Naugarduko str., LT-03227, Vilnius, Lithuania.</p>

            <form action="contactform.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="mail" placeholder="E-Mail">
                </div>
                <div class="form-group">
                    <input type="tel" class="form-control" name="phone" placeholder="Phone">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
                </div>
                <button class="btn btn-default" type="submit" name="submitMail">
                    <i class="fas fa-paper-plane"></i> Submit
                </button>
            </form>
        </section>
        <section id="themap" class="col-md-7">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2307.0099384079613!2d25.26532081538046!3d54.674253382118515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd946e0b3b72b3%3A0x9703740ef83f925f!2sNaugarduko+g.+41%2C+Vilnius+03227!5e0!3m2!1sen!2slt!4v1520000963806" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </section>
    </div>
</main>

<!-- Footer -->

<?php include "includes/footer.php" ?>