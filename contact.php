<?php
include 'partials/header.php';
?>

<section class="contact">
    <div class="container contact__container">
        <h1>Contact Us</h1>
        <p>If you have any questions, comments, or suggestions, feel free to reach out to us through the form below or via our social media channels. We’d love to hear from you!</p>
        <form action="<?= ROOT_URL ?>process-contact.php" method="POST" class="contact__form">
            <div class="form__control">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your Name" required>
            </div>
            <div class="form__control">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Your Email" required>
            </div>
            <div class="form__control">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" placeholder="Your Message" required></textarea>
            </div>
            <button type="submit" class="btn">Send</button>
        </form>
    </div>
</section>

<?php
include 'partials/footer.php';
?>
