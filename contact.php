
<?php
include('includes/dasboard_header.php');
?>


<section class="contact">
    <div class="container contact_container">
        <aside class="contact_aside">
            <div class="aside_image">
                <img src="images/TRANS.png" alt="logo">
            </div>
            <h2>Contact Us</h2>
            <p>Moon Wave Studios</p>
            <ul class="contact_details">
                <li>
                    <i class="uil uil-phone-times"></i>
                    <h5>papsmadeit.top</h5>
                </li>

                <li>
                    <i class="uil uil-phone-times"></i>
                    <h5>0704383202</h5>
                </li>

                <li>
                    <i class="uil uil-phone-times"></i>
                    <h5>kenmagio988@gmail.com</h5>
                </li>

                <li>
                    <i class="uil uil-phone-times"></i>
                    <h5>Admin@papsmadeit.top</h5>
                </li>
            </ul>
            <ul class="contact_socials">
<li><a href="#"><i class="uil uil-facebook-f"></i></a></li>
<li><a href="#"><i class="uil uil-facebook-f"></i></a></li>
<li><a href="#"><i class="uil uil-facebook-f"></i></a></li>
<li><a href="#"><i class="uil uil-facebook-f"></i></a></li>
            </ul>
        </aside>

        <form action="https://formspree.io/f/xknajlwy" method="POST" class="contact_form">
            <div class="form_name">
                <input type="text" name="First Name" placeholder="Enter First Name" required>
                <input type="text" name="Last Name" placeholder="Enter Last Name" required>
            </div>
            <input type="text" name="Email" placeholder="Enter your Email" required>
            <textarea name="Message"  rows="5" placeholder="Type Message" required></textarea>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
</section>

















<?php
include('includes/dashboard_footer.php');
?>