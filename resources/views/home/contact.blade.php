@include('home.head')
@include('home.header')


          <!--Start breadcrumb area-->
          <section class="breadcrumb-area">
            <div class="breadcrumb-area-bg"
                style="background-image: url(asset/images/backgrounds/breadcrumb-area-bg-6.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content">
                            <div class="title" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500">
                                <h2>Get In Touch</h2>
                            </div>
                            <div class="breadcrumb-menu" data-aos="fade-left" data-aos-easing="linear"
                                data-aos-duration="500">
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li class="active">Get In Touch</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->


        <!--Start Main Contact Form Area-->
        <section class="main-contact-form-area">
            <div class="container">
                <div class="row">

                    <div class="col-xl-6">
                        <div class="contact-info-box-style1">
                            <div class="box1"></div>
                            <div class="title">
                                <h2>Get Support for<br> any Queries or Complaints</h2>
                                <p>Committed to helping you meet all your banking needs.</p>
                            </div>

                            <ul class="contact-info-1">
                                <li>
                                    <div class="icon">
                                        <span class="icon-map"></span>
                                    </div>
                                    <div class="text">
                                        <p>Corporate Office</p>
                                        <h3>141, First Floor, 12 St RootsTerrace,<br>
                                            Los Angeles USA 90010.</h3>
                                    </div>
                                </li>
                           
                                <li>
                                    <div class="icon">
                                        <span class="icon-phone"></span>
                                    </div>
                                    <div class="text">
                                        <p>Front Desk</p>
                                        <h3><a href="tel:123456789">+61 3 8376 6284</a></h3>
                                        <h3><a href="mailto:support@stemvestfinance.com">support@stemvestfinance.com</a></h3>
                                    </div>
                                </li>
                            </ul>

                            

                        </div>
                    </div>


                    <div class="col-xl-6">
                        <div class="contact-form">
                            <form id="contact-form" name="contact_form" class="default-form2"
                                action="/" method="post">

                                <div class="form-group">
                                    <label>Name</label>
                                    <div class="input-box">
                                        <input type="text" name="form_name" id="formName" placeholder="xxxxxx"
                                            required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <div class="input-box">
                                        <input type="email" name="form_email" id="formEmail" placeholder="" required="">
                                    </div>
                                </div>

                               

                                <div class="form-group">
                                    <label>Subject</label>
                                    <div class="input-box">
                                        <input type="text" name="form_subject" value="" id="formSubject"
                                            placeholder="Subject">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Message</label>
                                    <div class="input-box">
                                        <textarea name="form_message" id="formMessage" placeholder=""
                                            required=""></textarea>
                                    </div>
                                </div>

                                <div class="button-box">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden"
                                        value="">
                                    <button class="btn-one" type="submit" data-loading-text="Please wait...">
                                        <span class="txt">
                                            send a message
                                        </span>
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End Main Contact Form Area-->

        


@include('home.footer')