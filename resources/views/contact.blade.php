<x-layout>

    @include('inc/topbar');

    <x-navbar type="three" />

    <div class="inner-banner">
        <div class="container">
            <h3>Contact Us</h3>
            <x-breadcumb>Contact Us</x-breadcumb>
        </div><!-- /.container -->
    </div><!-- /.inner-banner -->

    <section class="contact-page sec-pad">
        <div class="container">
            <div class="sec-title text-center">
                <h3>Get in <span>touch</span></h3>
                <p>You will find yourself working in a true partnership that results in an incredible <br /> experience, and an end product that is the best. </p>
            </div><!-- /.sec-title text-center -->
            <div class="row">
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3556.784688993381!2d75.71748781440218!3d26.942039483115007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db2d586d5c08b%3A0xda54664be450480!2sJethi+Tech+Solutions!5e0!3m2!1sen!2sin!4v1550763645551" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <form action="http://themexriver.com/industrio/inc/sendemail.php" class="contact-form">
                        <h3>Send Mail</h3>
                        <input type="text" placeholder="Your name.." name="name" />
                        <input type="text" placeholder="Your email address.." name="email" />
                        <input type="text" placeholder="Your Location.." name="subject" />
                        <textarea placeholder="Write..." name="message"></textarea>
                        <button type="submit" class="hvr-sweep-to-right">Send</button>
                    </form>
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact-page -->


    <section class="feature-style-one">
        <div class="container">
            <div class="clearfix">
                <div class="col-md-4">
                    <div class="single-feature-style-one">
                        <div class="icon-box">
                            <i class="industrio-icon-innovation"></i>
                        </div><!-- /.icon-box -->
                        <div class="text-box">
                            <h3>Creative Ideas</h3>
                            <p> Over 20 years running of providing quality in-minerals products.</p>
                        </div><!-- /.text-box -->
                    </div><!-- /.single-feature-style-one -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4">
                    <div class="single-feature-style-one light">
                        <div class="icon-box">
                            <i class="industrio-icon-secure-shield"></i>
                        </div><!-- /.icon-box -->
                        <div class="text-box">
                            <h3>Super Safety</h3>
                            <p>Meets the international standards and ethical trading requirements.</p>
                        </div><!-- /.text-box -->
                    </div><!-- /.single-feature-style-one -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4">
                    <div class="single-feature-style-one light">
                        <div class="icon-box">
                            <i class="industrio-icon-support"></i>
                        </div><!-- /.icon-box -->
                        <div class="text-box">
                            <h3>24/7 Support</h3>
                            <p>Active all the time to serve our customers with the best. </p>
                        </div><!-- /.text-box -->
                    </div><!-- /.single-feature-style-one -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.feature-style-one -->

</x-layout>