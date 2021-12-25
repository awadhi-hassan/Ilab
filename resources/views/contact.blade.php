
<x-app-layout>
    <section class="contact-header">
        <h1>Contact Us Today</h1>
    </section>

    <!------------contact us---------------->

    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                <i class="fa fa-car"></i>
                <sub>
                    <h5>Nairobi</h5>
                    <p>3rd Ngong Av. ACK Garden Annex, Office 3</p>
                </sub>
                </div>
                <div>
                <i class="fa fa-phone"></i>
                <sub>
                    <h5>+254 798 572767<br>+254 7154 99905</h5>
                    <p>Open: Monday to Saturday, 8AM - 6PM</p>
                </sub>
                </div>
                <div>
                <i class="fa fa-envelope"></i>
                <sub>
                    <h5>info@ilabnetworks.com</h5>
                    <p>Email us your query</p>
                </sub>
                </div>
            </div>
            <div class="contact-col">
                <form action="form-handler.php" method="post">
                    <input type="text" name="name" placeholder="Enter Your name"required>
                    <input type="email" name="email" placeholder="Enter Email address"required>
                    <input type="text" name="subject" placeholder="Enter your subject"required>
                    <textarea rows="8" name="message" placeholder="Message" required></textarea>
                    <button type="submit" class="hero-btn red-btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    @include('footer')

</x-app-layout>
