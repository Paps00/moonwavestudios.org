
<?php
include('includes/dasboard_header.php');
?>


<section class="contact">
    <div class="container contact_container">
        

        <form action="https://formspree.io/f/xknajlwy" method="POST" class="contact_form">
            <div class="form_name">
                <input type="text" name="First Name" placeholder="Enter First Name" required>
                
            </div>
            <input type="text" name="Email" placeholder="Enter your Email" required>
           
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
</section>


<?php
include('includes/dashboard_footer.php');
?>


