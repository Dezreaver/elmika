<!-- Header -->
<?php
    $current = "contacts";
    include "includes/header.php";
?>

<!-- Body -->

<?php
//Contacts form send email
$msg = "";
$msgClass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $mailFrom = htmlspecialchars($_POST['mail']);
    $sbj = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    if (!empty($name) && !empty($mailFrom) && !empty($sbj) && !empty($message)) {
        if (filter_var($mailFrom, FILTER_VALIDATE_EMAIL) === false) {
            $msg = "Please use a valid E-Mail address";
            $msgClass = "alert-danger";
        } else {
            $toEmail = "s.kaminskij@elmika.com";
            $subject = $sbj;
            $body = $message;

            if (mail($toEmail, $subject, $body)) {
                $msg = "Your E-Mail has been sent";
                $msgClass = "success";
            } else {
                $msg = "Your E-Mail has not been sent";
                $msgClass = "alert-danger";
            }
        }
    } else {
        $msg = "Please fill in all fields";
        $msgClass = "alert-danger";
    }
};
?>

<main id="main-content" class="container">
    <div class="row">
        <section id="contacts" class="col-md-5">
            <p>UAB Elmika</p>
            <p><i class="fas fa-phone-square"></i> +370 5 233 3426</p>
            <p><i class="fas fa-fax"></i> +370 5 216 3668</p>
            <p><i class="fas fa-home"></i>41, Naugarduko str., LT-03227, Vilnius, Lithuania.</p>

            <?php if ($msg != ''): ?>
                <div class="alert <?= $msgClass; ?>"><?= $msg; ?></div>
            <?php endif; ?>
            <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name"
                           value="<?= isset($_POST['name']) ? $name : ''; ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="mail" placeholder="E-Mail"
                           value="<?= isset($_POST['mail']) ? $mailFrom : ''; ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                           value="<?= isset($_POST['subject']) ? $sbj : ''; ?>">
                </div>
                <div class="form-group">
                    <textarea type="text" class="form-control" name="message" rows="4"
                              placeholder="Your Message"><?= isset($_POST['message']) ? $message : ''; ?></textarea>
                </div>
                <button class="btn btn-default" type="submit" name="submitMail">
                    <i class="fas fa-paper-plane"></i> Submit
                </button>
            </form>
        </section>
        <section id="themap" class="col-md-7">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2307.0099384079613!2d25.26532081538046!3d54.674253382118515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd946e0b3b72b3%3A0x9703740ef83f925f!2sNaugarduko+g.+41%2C+Vilnius+03227!5e0!3m2!1sen!2slt!4v1520000963806"
                    width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </section>
    </div>
</main>

<!-- Footer -->

<?php include "includes/footer.php" ?>