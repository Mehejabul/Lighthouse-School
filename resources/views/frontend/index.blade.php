@extends('frontend.layouts.main')

@section('content') 

<!-- banner section start -->
<section class="banner_section" style="background-image: url({{asset('frontend')}}/assets/images/banner/background.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="banner_left_container">
            <div class="banner_top_text">
              <p>LEARN. PLAY. EXPLORE</p>
            </div>
            <div class="banner_middle_text">
              <h2>A safe and joyful place for your lovely children</h2>
            </div>
            <div class="banner_paragraph">
              <p>Assalamu Alaikum! Welcome to lighthouse international school, where academic excellence meets moral values. Located at
                Bashundhara Residential Area in Dhaka, our English medium institution offers a holistic education,
                nurturing students to thrive academically and spiritually. Join us for a journey of learning and
                enlightenment</p>
            </div>
            <div class="button_rating">
                <a class="cmn_btn_hov">Enroll your kid</a>
              <div class="banner_rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <div class="rating_text">
                  <p>4.8 rating on Google</p>
                </div>
              </div>
            </div>
            <div class="banner_phone_number">
              <div class="banner_icon">
                <i class="fa-solid fa-phone"></i>
              </div>
              <div class="icon_number">
                <p>(+880) 1894-940800</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="banner_right_side">
            <div class="image_wrapper">
              <div class="up_image">
                <img src="{{asset('frontend')}}/assets/images/banner/left_banner_up.jpg" class="img-fluid">
              </div>
              <div class="down_image">
                <img src="{{asset('frontend')}}/assets/images/banner/left_banner_down.jpg" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- banner section end -->

  <!-- About us section start -->
  <section class="about_us">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="about_left">
            <div class="about_left_image">
              <img src="{{asset('frontend')}}/assets/images/about/about_us.jpg" class="img-fluid w-100">
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="about_right">
            <div class="about_title">
              <h2>About Us</h2>
            </div>
            <div class="about_heading">
              <h2>lighthouse international school is admitting students from Playgroup to Grade 7</h2>
            </div>
            <div class="about_peragraph">
              <p>lighthouse international school follows the Pearson Edexcel curriculum and intends to deliver excellent educational
                programs in the following Key Learning Areas: English, Mathematics, Science, Technology, Global
                Citizenship, Creative Arts, Personal Development, Health and Physical Education as well as lessons in
                Quran, Islamic Studies and Arabic Language classes.</p>

              <p> Here at lighthouse international school, we aim to help our precious children to think and act in ways that are truly
                inspiring.</p>
            </div>
            <div class="aboutus_btn">
              <a class="transparent_btn">Know more about us</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About us section end -->

  <!-- Counter section start -->
  <section class="counter_section" style="background-image: url({{asset('frontend')}}/assets/images/counter/conter_imagejpg.jpg);">
    <div class="background_overlay">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="conter_content">
              <div class="counter_heading">
                <h3>About us</h3>
                <h2> History of our School</h2>
                <p>The Averroes International School is recognized by the Bangladesh Ministry of Education and
                  authorized by British Council and Edexcel as an English –medium educational institution for both
                  Primary and Secondary Sections. The school established in 2015 is situated at Lalmatia, Mohammadpur in
                  Dhaka. The School, surrounded by peaceful environment, which gives pleasures to children, offers
                  education from Play to A Level <a href="#">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-6">
            <div class="counter_wrapper">`
              <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2">
                  <div class="counter_sec">
                    <i class="fa-solid fa-school"></i><br>
                    <span class="countup">2015</span><br>
                    <p>Founded</p>
                  </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6">
                  <div class="counter_sec">
                    <i class="fa-solid fa-graduation-cap"></i><br>
                    <span class="countup">4200 +</span><br>
                    <p>Students</p>
                  </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6">
                  <div class="counter_sec">
                    <i class="fa-solid fa-person-chalkboard"></i><br>
                    <span class="countup">210 +</span><br>
                    <p>Teachers</p>
                  </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6">
                  <div class="counter_sec">
                    <i class="fa-solid fa-people-group"></i><br>
                    <span class="countup">50 +</span><br>
                    <p>Staff</p>
                  </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6">
                  <div class="counter_sec">
                    <i class="fa-solid fa-network-wired"></i><br>
                    <span class="countup">3 +</span><br>
                    <p>Branches</p>
                  </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6">
                  <div class="counter_sec">
                    <i class="fa-solid fa-tents"></i><br>
                    <span class="countup">9 +</span><br>
                    <p>Campus</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="wrapper_text">
            <div class="row">
              <div class="col-lg-9 col-md-6 col-sm-12">
                <div class="wrap_pera">
                  <p>Start your Beautiful & Bright Future From Here</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="wrapbb">
                  <a href="#" class="box_btn">Book now <span class="arrow-btn"><i
                        class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- counter section enbd -->


  <!-- Age Specification support start -->
  <section class="age_specification">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="age_specification_top">
            <h3>Academics</h3>
            <h2>Age-specific support for every stage</h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="age_specification_content shadow p-3 mb-5 bg-body">
            <div class="auto_height">
            </div>
            <div class="specification_content_image">
              <img src="{{asset('frontend')}}/assets/images/specification/KG.jpg" class="img-fluid" w-100>
            </div>
            <div class="specification_content_text">
              <h2>PreSchool</h2>
              <p>We welcome children from 3 to 6 in the Preschool Program to participate in the classroom from Playgroup
                (Reception 1), Nursery (Reception 2) and Kindergarten (Year 1). Our children in Preschool (Early Years)
                are exposed to different areas of learning that includes communication and language, personal, social
                and emotional development, physical development, literacy, mathematics, understanding the world,
                expressive arts and design. Learning process is pursued through various fun and playful activities to
                develop the sense of spirituality and to build the foundation for academic success.</p>
            </div>
            <div class="specification_btn">
              <a class="without_style_btn">Read more <span><i class="fa-solid fa-greater-than"></i></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="age_specification_content shadow p-3 mb-5 bg-body">
            <div class="auto_height">
            </div>
            <div class="specification_content_image">
              <img src="{{asset('frontend')}}/assets/images/specification/Primary.jpg" class="img-fluid" w-100>
            </div>
            <div class="specification_content_text">
              <h2>Primary School</h2>
              <p>We welcome children from 3 to 6 in the Preschool Program to participate in the classroom from Playgroup
                (Reception 1), Nursery (Reception 2) and Kindergarten (Year 1). Our children in Preschool (Early Years)
                are exposed to different areas of learning that includes communication and language, personal, social
                and emotional development, physical development, literacy, mathematics, understanding the world,
                expressive arts and design. Learning process is pursued through various fun and playful activities to
                develop the sense of spirituality and to build the foundation for academic success.</p>
            </div>
            <div class="specification_btn">
              <a class="without_style_btn">Read more <span><i class="fa-solid fa-greater-"></i></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="age_specification_content shadow p-3 mb-5 bg-body">
            <div class="auto_height">
            </div>
            <div class="specification_content_image">
              <img src="{{asset('frontend')}}/assets/images/specification/Home-5.jpg" class="img-fluid" w-100>
            </div>
            <div class="specification_content_text">
              <h2>Middle School</h2>
              <p>We welcome children from 3 to 6 in the Preschool Program to participate in the classroom from Playgroup
                (Reception 1), Nursery (Reception 2) and Kindergarten (Year 1). Our children in Preschool (Early Years)
                are exposed to different areas of learning that includes communication and language, personal, social
                and emotional development, physical development, literacy, mathematics, understanding the world,
                expressive arts and design. Learning process is pursued through various fun and playful activities to
                develop the sense of spirituality and to build the foundation for academic success.</p>
            </div>
            <div class="specification_btn">
              <a class="without_style_btn">Read more <span><i class="fa-solid fa-greater-than"></i></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Age Specification support End -->

  <!-- School Timimg start -->
  <section class="school_timing_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="school_timing">
            <h2>School Timing</h2>
          </div>
          <div class="school_timing_table_wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="school_table_content">
                  <div class="school_table_head">
                    <h2>For Early Years (Playgroup, Nursery, Kindergarten)</h2>
                  </div>
                  <div class="school_table text-center">
                    <table class="table table-bordered shadow p-3 mb-5">
                      <thead>
                        <tr>
                          <th class="td_head" scope="col">Class</th>
                          <th class="td_head" scope="col">First Shift</th>
                          <th class="td_head" scope="col">Second Shift</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Reception 1(Playgroup)</td>
                          <td>9:00 am – 11:15 am</td>
                          <td>11:30 am – 1:45 pm</td>
                        </tr>
                        <tr>
                          <td>Reception 2(Nursery)</td>
                          <td>8:15 am – 11:40 am</td>
                          <td>11:15 am – 2:30 pm</td>
                        </tr>
                        <tr>
                          <td>Year 1(Kindergarten)</td>
                          <td>8:15 am – 12:20 pm</td>
                          <td>Not applicable</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="school_table_content">
                  <div class="school_table_head">
                    <h2>For Primary Years (Grades 1-4)</h2>
                  </div>
                  <div class="school_table text-center">
                    <table class="table table-bordered shadow p-3 mb-5">
                      <thead>
                        <tr>
                          <th class="td_head" scope="col">Class</th>
                          <th class="td_head" scope="col">School Time</th>
                          <th class="td_head" scope="col">Salah Time</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Year 2-3(Grades 1-2)</td>
                          <td>8:15 am – 1:45 pm</td>
                          <td>1:25 pm – 1:40 pm</td>
                        </tr>
                        <tr>
                          <td>Year 4-5(Grades 3-4)</td>
                          <td>8:15 am – 2:00 pm</td>
                          <td>1:25 pm – 1:40 pm</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="school_table_content">
                  <div class="school_table_head">
                    <h2>For Middle Years (Grades 5-6)</h2>
                  </div>
                  <div class="school_table text-center">
                    <table class="table table-bordered shadow p-3 mb-5">
                      <thead>
                        <tr>
                          <th class="td_head" scope="col">Class</th>
                          <th class="td_head" scope="col">School Time</th>
                          <th class="td_head" scope="col">Salah Time</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Year 6-7(Grades 5-6)</td>
                          <td>8:15 am – 2:50 pm</td>
                          <td>1:25 pm – 1:40 pm</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="school_timing_note">
              <p><span class="text-danger">*</span>lighthouse international school holds the right to chnage the school timing as per
                requirement.</p>
            </div>
          </div>
          <div class="school_timing_btn text-center">
            <a class="cmn_btn">Enroll your kid</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- School Timimg end -->


  <!-- News and media start -->
  <section class="news_media">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-12">
          <div class="left_news_media">
            <div class="slick-carousel">
              <div class="slider_content">
                <img src="{{asset('frontend')}}/assets/images/media/face-book-post-01.jpg" class="img-fluid w-100">
              </div>
            </div>
          </div>
          <div class="floating_blog">
            <div class="counter_heading">
              <h2>Latest update</h2>
            </div>
          </div>
          <div class="content_list">
            <ul>
              <li>
                <a href="#">
                  <p>STS Group to introduce lighthouse international School Satarkul in Bangladesh on 21 November 2022</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <p>STS Group to introduce lighthouse international School Satarkul in Bangladesh on 21 November 2022</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <p>STS Group to introduce lighthouse international School Satarkul in Bangladesh on 21 November 2022</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="media">
            <div class="counter_heading">
              <h2>Latest update</h2>
            </div>
            <div class="media_image_content">
              <div class="row">
                <div class="col-lg-4">
                  <div class="media_image">
                    <img src="{{asset('frontend')}}/assets/images/media/Untitled design.jpg" class="img-fluid w-100">
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="media_text">
                    <a href="#">
                      <p>Learning by doing: Going beyond textbooks to raise exceptional young adults.</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="media_image_content">
              <div class="row">
                <div class="col-lg-4">
                  <div class="media_image">
                    <img src="{{asset('frontend')}}/assets/images/media/Untitled design 1.jpg" class="img-fluid w-100">
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="media_text">
                    <a href="#">
                      <p>Learning by doing: Going beyond textbooks to raise exceptional young adults.</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="media_image_content">
              <div class="row">
                <div class="col-lg-4">
                  <div class="media_image">
                    <img src="{{asset('frontend')}}/assets/images/media/Untitled design 2.jpg" class="img-fluid w-100">
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="media_text">
                    <a href="#">
                      <p>Learning by doing: Going beyond textbooks to raise exceptional young adults.</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="form_content">
            <div class="counter_heading">
              <h2>Latest update</h2>
            </div>
            <div class="form_box  shadow p-3 mb-5">
              <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Parents/Gardians name<span
                      class="text-danger">*</span></label>
                  <input type="parents" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name Of student<span
                      class="text-danger">*</span></label>
                  <input type="email" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Student date of birth<span
                      class="text-danger">*</span></label>
                  <input type="date" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">select grade<span
                      class="text-danger">*</span></label>
                  <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option value="1">-----select grade----</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Phone number</label>
                  <input type="number" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Email number</label>
                  <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">How can we help?</label>
                  <textarea class="form-control" placeholder="Drop your massage here" id="floatingTextarea2"
                    style="height: 100px"></textarea>
                </div>
                <div class="from_btn">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- news and media end -->
@endsection