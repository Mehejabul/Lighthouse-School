  <!-- footer section start -->
  <section class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-12 col-sm-12">
          <div class="footer_1st_column">
            <div class="footer_logo">
              <img src="{{asset('frontend')}}/assets/images/logo/Light.png" class="img-fluid w-100">
            </div>
            <div class="footer_icon">
              <a href="www.facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
              <a href="www.linkdin.com"><i class="fa-brands fa-linkedin-in"></i></a>
              <a href="www.youtube.com"><i class="fa-brands fa-youtube"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-10 col-md-12 col-sm-12">
          <div class="footer_2nd_column">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="footer_singel_part">
                  <div class="footer_singel_part_title">
                    <h5>About Glenrich</h5>
                  </div>
                  <div class="footer_singel_link">
                    <ul>
                      <li>
                        <a>Mission</a>
                      </li>
                      <li>
                        <a>Vision & Philosophy</a>
                      </li>
                      <li>
                        <a>Glenrich values</a>
                      </li>
                    </ul>
                  </div>
                  <div class="footer_singel_part_title">
                    <h5>Academics</h5>
                  </div>
                  <div class="footer_singel_link">
                    <ul>
                      <li>
                        <a>Carriculam overview</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="footer_singel_part">
                  <div class="footer_singel_part_title">
                    <h5>Satarkul Branch</h5>
                  </div>
                  <div class="footer_singel_link">
                    <ul>
                      <li>
                        <p text-white>Plot No: E-2 & E-3
                          Sunvalley Sharoni, Block: A
                          Sunvalley Abashan Swadesh Properties Ltd Satarkul, Badda Dhaka-1212</p>
                      </li>
                    </ul>
                  </div>
                  <div class="footer_singel_part_title">
                    <h5>Contact Number</h5>
                    <p>+8809677444777</p>
                  </div>
                  <div class="footer_singel_part_title">
                    <h5>Email Address</h5>
                    <p>info@glenrich.edu.bd</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="footer_singel_part">
                  <div class="footer_singel_part_title">
                    <h5>Uttara Branch (Junior Campus)</h5>
                  </div>
                  <div class="footer_singel_link">
                    <ul>
                      <li>
                        <p text-white>Plot 4, Road 13, Sector 6, Uttara Model Town, Dhaka-1230
                        </p>
                      </li>
                    </ul>
                  </div>
                  <div class="footer_singel_part_title">
                    <h5>Contact Number</h5>
                    <p>(+88) 0248961087
                    </p>
                  </div>
                  <div class="footer_singel_part_title">
                    <h5>Email Address</h5>
                    <p>info@uttara.glenrich.edu.bd</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="footer_singel_part">
                  <div class="footer_singel_part_title">
                    <h5>Uttara Branch (Senior Campus)</h5>
                  </div>
                  <div class="footer_singel_link">
                    <ul>
                      <li>
                        <p text-white>Plot ED-01, Road 1, Sector 15, Uttara Model Town, Dhaka-1230
                        </p>
                      </li>
                    </ul>
                  </div>
                  <div class="footer_singel_part_title">
                    <h5>Contact Number</h5>
                    <p>(+88) 09614087141
                    </p>
                  </div>
                  <div class="footer_singel_part_title">
                    <h5>Email Address</h5>
                    <p>info@uttara.glenrich.edu.bd</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bottom_foter">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="copywrite_text">
                  <P>Copyright © 2024 lighthouse international School</P>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="footer_condiion">
                  <span><a>Terms & condition</a><a>privacy policy</a></span>
                  <a></a>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
  </section>
  <!-- footer section end -->
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Slick JS -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
        <!-- mixitup js -->
        <script src="https://cdn.jsdelivr.net/npm/mixitup/dist/mixitup.min.js"></script>
        <!-- Bootstrap JS (optional if you need Bootstrap JS functionality) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/custom.js"></script>

        <script>
            document.querySelectorAll('.menu-expand').forEach(button => {
                button.addEventListener('click', () => {
                    const submenu = button.nextElementSibling.nextElementSibling;
                    if (submenu.style.display === 'none' || submenu.style.display === '') {
                        submenu.style.display = 'block';
                        button.innerHTML = '<i class="fa fa-angle-up"></i>';
                    } else {
                        submenu.style.display = 'none';
                        button.innerHTML = '<i class="fa fa-angle-down"></i>';
                    }
                });
            });
        </script>
</body>

</html>