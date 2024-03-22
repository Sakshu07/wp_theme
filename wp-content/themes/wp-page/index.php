<?php
$showPopup = true; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awesome Landing Page</title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <?php wp_head(); ?>
</head>

<body>
    <?php get_header(); ?>

    <header>
        <nav>
            <img src="<?php echo get_template_directory_uri(); ?>/images/collegeDuniaLogo.png" alt="Your Image" class="custom-image">

            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Blogs</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="">Contact us</a></li>
            </ul>
            <button class="registerButton">Register Now</button>
        </nav>
    </header>

    <div class="home">
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/image1.png" alt="Your Image" class="image1">
        </div>
        <div class="form-container">
            <h2>Register Here for Free Entry to India's Biggest Education Fair 2024</h2>
            <form>
                <div class="form-group">
                    <label for="fullName">Full Name</label>
                    <input type="text" class="form-control" id="fullName" placeholder="Enter your full name">
                </div>
                <div class="form-group">
                    <label for="emailId">Email Id</label>
                    <input type="email" class="form-control" id="emailId" placeholder="Enter your email address">
                </div>
                <div class="form-group">
                    <label for="phoneNo">Phone No</label>
                    <input type="tel" class="form-control" id="phoneNo" placeholder="Enter your phone number">
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" placeholder="Enter your city">
                </div>
                <div class="form-group">
                    <label for="course">Course</label>
                    <input type="text" class="form-control" id="course" placeholder="Enter your course">
                </div>
                <div class="form-group">
                    <label for="school">School</label>
                    <input type="text" class="form-control" id="school" placeholder="Enter your school">
                </div>
                <div class="form-group">
                    <label for="qualification">Qualification</label>
                    <input type="text" class="form-control" id="qualification" placeholder="Enter your qualification">
                </div>
                <div class="form-group">
                    <label for="referralCode">Referral Code (Optional)</label>
                    <input type="text" class="form-control" id="referralCode" placeholder="Enter your referral code">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </form>
        </div>
    </div>

    <br>

    <div class="card-row">
        <div class="card">
            <div class="content">

                <div class="description">Apply to top universities with 0 application fee and 0 visa fee</div>
            </div>
        </div>

        <div class="card">
            <div class="content">
                <div class="description">Get 1:1 profile evaluation and counselling</div>
            </div>
        </div>

        <div class="card">
            <div class="content">
                <div class="description">Explore 500+ Universities
                    open for Sep’24 Intake</div>
            </div>
        </div>

        <div class="card">
            <div class="content">
                <div class="description">
                    Get scholarships upto INR 15L.</div>
            </div>
        </div>
    </div>

    <div class="universityText">
        <div class="universityText-1">
            ON SPOT ADMIT FOR SEP'24
        </div>
        <div class="universityText-2">
            In Top Universities
        </div>
    </div>

    <marquee direction="right" scrollamount="5" behavior="scroll">
        <span>
            <img src="<?php echo get_template_directory_uri(); ?>/images/UIS_Wordmark_UISblue.png" alt="enginner Image" class="course-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/cambridge.png" alt="enginner Image" class="course-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/durham.png" alt="enginner Image" class="course-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/New_York_Institute_of_Technology.png" alt="enginner Image" class="course-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/niij.png" alt="enginner Image" class="course-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Oxford_Brookes_University.png" alt="enginner Image" class="course-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Pace.png" alt="enginner Image" class="course-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Queen-Mary.png" alt="enginner Image" class="course-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/steve.png" alt="enginner Image" class="course-image">
        </span>
    </marquee>
    <marquee direction="left" scrollamount="5" behavior="scroll">
        <span>
            <img src="<?php echo get_template_directory_uri(); ?>/images/UAB.png" alt="enginner Image" class="course-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/UMass_Boston.png" alt="enginner Image" class="course-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/University_of_Illinois_Chicago.png" alt="enginner Image" class="course-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/University_of_Edinburgh.png" alt="enginner Image" class="course-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/University_of_New_Haven.png" alt="enginner Image" class="course-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/University-of-Adelaide.png" alt="enginner Image" class="course-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/University-of-glasgow.png" alt="enginner Image" class="course-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/university-of-surrey.png" alt="enginner Image" class="course-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Oxford_Brookes_University.png" alt="enginner Image" class="course-image">
        </span>
    </marquee>

    <div class="universityText">
        <div class="universityText-1">
            Get free Psychometric Test
        </div>
        <div class="universityText-2">
            With University Delegates
        </div>
    </div>

    <div class="universityText">
        <div class="universityText-1">
            Courses
        </div>
        <div class="courses">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/engineer.png" alt="enginner Image" class="course-image">
                <h4>Engineering</h4>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/commerce.png" alt="commerce Image" class="course-image">
                <h4>Commerce</h4>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/Humanities.png" alt="Humanities Image" class="course-image">
                <h4>Humanities</h4>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/medicine.png" alt="medicine Image" class="course-image">
                <h4>Medicine</h4>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/law.png" alt="law Image" class="course-image">
                <h4>Law</h4>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/business.png" alt="business Image" class="course-image">
                <h4>Business</h4>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/science.png" alt="science Image" class="course-image">
                <h4>Science</h4>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/design.png" alt="design Image" class="course-image">
                <h4>Design & Arts Libral</h4>
            </div>
        </div>
    </div>

    <div class="advertisement">
        <div class="card" id="ad-card">
            <div class="feature-card">
                <div class="content">
                    <div class="description">Save upto 60,000
                        On Visa Fee</div>
                    <div class="description">Get 100% off On SEVIS Fee and 75% off on UK Visa Fee</div>
                    <button class="registerButton">Register Now</button>
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/mic.png" alt="mic Image" class="mic-image">
                </div>
            </div>
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png" alt="arrow Image" class="arrow-image">
        </div>
    </div>

    <div class="universityText">
        <div class="universityText-1">
            TESTIMONIALS
        </div>
        <div class="universityText-2">
            Let’s Hear From Our Students
        </div>
    </div>

    <div class="advertisement">
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png" alt="arrow Image" class="arrow-image-2">
        </div>
        <div class="card" id="ad-card">
            <div class="feature-card">
                <div class="content">
                    <div class="description">Save upto 60,000
                        On Visa Fee</div>
                    <div class="description">Get 100% off On SEVIS Fee and 75% off on UK Visa Fee</div>
                    <button class="registerButton">Register Now</button>
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/mic.png" alt="mic Image" class="mic-image">
                </div>
            </div>
        </div>
    </div>

    <h1 style="text-align:center">Frequently Asked Questions</h1>
    <div class="faq-container">

        <div class="faq-card">
            <button class="accordion">What is Collegedunia Career Carnival - India’s Biggest Education Fair 2024?</button>
            <div class="panel">
                <p style="text-align: left;">This is an educational fair that unlocks opportunities for students, providing solutions to admission-related queries for their future education and placements. Students can meet career experts from over 75 Colleges and Universities providing multidisciplinary quality education across India all in one place in this Education Fair.</p>
            </div>
        </div>
        <div class="faq-card">

            <button class="accordion">Who can Attend?</button>
            <div class="panel">
                <p style="text-align: left;">Students who are interested in pursuing a bachelor's or master's degree in any field are welcome to participate in the event at no cost. Additionally, guardians are encouraged to attend the fair to help students make good decisions.</p>
            </div>
        </div>
        <div class="faq-card">

            <button class="accordion">What students expect from this Education Fair?</button>
            <div class="panel">
                <p style="text-align: left;">Students can expect one-to-one interaction with career experts from over 75 Colleges and Universities providing multidisciplinary quality education across India all in one place in this Education Fair. Students can resolve their admission and placement-related queries.</p>
            </div>
        </div>
        <div class="faq-card">

            <button class="accordion">Can I take admission on the spot?</button>
            <div class="panel">
                <p style="text-align: left;">Yes, eligible students may enroll right away</p>
            </div>
        </div>
        <div class="faq-card">

            <button class="accordion">How to apply for the scholarship in this Education Fair?</button>
            <div class="panel">
                <p style="text-align: left;">Over 75 Colleges and Universities providing multidisciplinary quality education across India are coming to Pragati Maidan, New Delhi with their career experts.</p>
            </div>
        </div>
        <div class="faq-card">

            <button class="accordion">Why should you attend this Education Fair?</button>
            <div class="panel">
                <p style="text-align: left;">We give you a platform to interact with Colleges and Universities that can help you with your career. You can receive scholarships from these institutions under the established eligibility criteria of your desired Institution.</p>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h4>About Us</h4>
                    <p>We are a company dedicated to provide the best service to our customers. We are committed to innovation and excellence.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h4>Follow Us</h4>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <p class="text-center">Copyright © 2023 MyCompany</p>
        </div>
    </footer>
    </div>


    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }


        const marquee = document.querySelector('.marquee');

        marquee.addEventListener('finish', () => {
            marquee.scrollAmount = 0; 
            setTimeout(() => {
                marquee.scrollAmount = 5; 
            }, 1000); 
    </script>
</body>

</html>