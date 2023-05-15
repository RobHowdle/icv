<section id="contact">
    <header class="section-header wow fadeInUp"></header>
    <div class="container">
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <div class="form-container">
            <h1>
                Contact Us
            </h1>
            <form method="post" id="reused_form">
                <input id="name" type="text" name="Name" placeholder="Your Name" required maxlength="50">
                <input id="email" type="email" name="Email" placeholder="Your Email" required maxlength="50">
                <input id="phone" type="tel" name="Phone" placeholder="Your Phone" required maxlength="50">
                <textarea id="message" name="Message" rows="10" placeholder="Your Message" maxlength="6000" required></textarea>
                <div class="g-recaptcha" data-sitekey="6LfcfIcUAAAAALQK1voraR2QZFlj2kryw8JCbPyy"></div>
                <button class="button-primary" type="submit">Send</button>
            </form>
            <div id="success_message" style="display:none">
                <h3>Submitted the form successfully!</h3>
                <p> We will get back to you soon. </p>
            </div>
            <div id="error_message" style="width:100%; height:100%; display:none; "> 
            <h3>Error</h3> Sorry there was an error sending your form. </div>
        </div>
    </div>
</section>
