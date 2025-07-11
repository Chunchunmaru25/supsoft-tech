@extends('layouts.main')

@section('title', 'Welcome')
@section('content')
    <section id="contact" class="contact section">
        <!-- Contact Section -->
        <section id="contact" class="contact-section">

            <!-- Section Title -->
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Have a project in mind, a question, or just want to connect? I’m always open to discussing new
                    opportunities,
                    creative ideas, or collaborations—feel free to reach out anytime.</p>
            </div><!-- End Section Title -->


            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <!-- Contact Info -->
                    <div class="col-lg-6 mb-5" data-aos="fade-right" data-aos-delay="200">
                        <div class="contact-info-section">
                            <div class="info-header">
                                <h3>Connect With Me</h3>
                            </div>

                            <div class="contact-info-grid">
                                <div class="info-item" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="info-icon">
                                        <i class="bi bi-envelope-fill"></i>
                                    </div>
                                    <div class="info-content">
                                        <h5>Send Email</h5>
                                        <p>clarenceduerme40@gmail.com</p>
                                    </div>
                                </div>

                                <div class="info-item" data-aos="zoom-in" data-aos-delay="350">
                                    <div class="info-icon">
                                        <i class="bi bi-telephone-fill"></i>
                                    </div>
                                    <div class="info-content">
                                        <h5>Call Direct</h5>
                                        <p>+63 (926) 123-2826</p>
                                        <p>+63 (976) 652-2812</p>
                                    </div>
                                </div>

                                <div class="info-item" data-aos="zoom-in" data-aos-delay="400">
                                    <div class="info-icon">
                                        <i class="bi bi-clock-fill"></i>
                                    </div>
                                    <div class="info-content">
                                        <h5>Business Hours</h5>
                                        <p>Mon-Sun: 8AM - 8PM</p>
                                    </div>
                                </div>
                            </div>

                            <div class="social-contact" data-aos="fade-up" data-aos-delay="450">
                                <h5>Follow My Journey</h5>
                                <div class="social-icons">
                                    <a href="https://www.facebook.com/clarence.duerme40" class="social-icon"><i
                                            class="bi bi-facebook"></i></a>
                                    <a href="https://www.instagram.com/moriii__pawsa" class="social-icon"><i
                                            class="bi bi-instagram"></i></a>
                                    <a href="https://www.threads.com/@moriii__pawsa" class="social-icon"><i
                                            class="bi bi-threads"></i></a>
                                    <a href="https://www.tiktok.com/@sh1raase" class="social-icon"><i
                                            class="bi bi-tiktok"></i></a>
                                    <a href="https://www.behance.net/clarenctenorio" class="social-icon"><i
                                            class="bi bi-behance"></i></a>
                                    <a href="https://github.com/Chunchunmaru25" class="social-icon"><i
                                            class="bi bi-github"></i></a>
                                    <a href="https://www.linkedin.com/in/clarence-duerme-2232b4374/" class="social-icon"><i
                                            class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Contact Info -->

                    <!-- Contact Form -->
                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                        <div class="contact-form-wrapper">
                            <div class="form-header">
                                <h3>Send Me a Message</h3>
                                <p>Whether you're looking to start a project, ask a question, or simply say hello, I'm just
                                    a
                                    message away. Let's build something great together.</p>
                            </div>


                            <form action="forms/contact.php" method="post" class="php-email-form">
                                <div class="mb-3">
                                    <label for="contactName" class="form-label">Full Name</label>
                                    <input type="text" name="name" class="form-control" id="contactName"
                                        placeholder="Enter your full name" required="">
                                </div>

                                <div class="mb-3">
                                    <label for="contactEmail" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" name="email" id="contactEmail"
                                        placeholder="Enter your email address" required="">
                                </div>

                                <div class="mb-3">
                                    <label for="contactPhone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" name="phone" id="contactPhone"
                                        placeholder="Enter your phone number">
                                </div>

                                <div class="mb-3">
                                    <label for="contactSubject" class="form-label">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="contactSubject"
                                        placeholder="Enter message subject" required="">
                                </div>

                                <div class="mb-4">
                                    <label for="contactMessage" class="form-label">Your Message</label>
                                    <textarea class="form-control message-textarea" name="message" id="contactMessage" rows="5"
                                        placeholder="Enter your message" required=""></textarea>
                                </div>

                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>

                                <button type="submit" class="submit-btn">
                                    <span>Send Message</span>
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                            </form>
                        </div>
                    </div><!-- End Contact Form -->
                </div>
            </div>
        </section><!-- End Contact Section -->

    </section><!-- /Contact Section -->
@endsection
