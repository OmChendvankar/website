<?php
include 'config.php';

if (isset($_POST['submit'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];

    $query = " insert into contact (name, email, phone, message) values ('$name','$email','$phone','$message')";
    mysqli_query($conn, $query);
    header('location: index.php');

}

?>

<section id="contact">
            <div class="container">
                <div class="sectionHead">Contact Us</div>
                <hr>
                <br>
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-6 offset-md-2">
                                <h4 class="sectionSubSubHead text-capitalize">Send A message</h4>
                                <form action="" method="POST" id="contact-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" required placeholder="Name*">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" required placeholder="Email*">
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="phone" required placeholder="Phone*">
                                    </div>
                                    <div class="form-group">
                                        <textarea type="text" class="form-control" name="message" required placeholder="Message*"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-info" name="submit" type="submit">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4 class="sectionSubSubHead">Mail Us</h4>
                        <ul class="list-unstyled">
                            <li>Daily Magazine Pvt. Ltd.</li>
                            <li>Thane, Maharashtra</li>
                            <li>India</li>
                            <li>Pin: 421XXX</li>
                            <li>Phone: +91 xxxxxxxxxx</li>
                            <li>Email: dailymag@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="footer">
        <div class="container">
            Copyright © 2020-21
            <span style="color:#f20056;">
                Daily Magazine Pvt. Ltd.
            </span>
        </div>
    </footer>
