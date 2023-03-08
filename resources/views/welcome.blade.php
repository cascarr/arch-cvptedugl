@extends('frontend.layouts.app')
@section('title', 'CVPT Education Global - Home')

@section('content')

   <main>

      <section class="hero d-flex justify-content-center
               align-items-center" id="section_1">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12">
                    <div class="heroText">
                        <h1 class="text-white mb-lg-5 mb-4">
                            Giving the African Student a
                            Global Education Experience.
                        </h1>

                        <!--
                        <a href="https://www.youtube.com/watch?v=AYaHuZ4BB6Y"
                           class="popup-youtube play-icon-wrap d-flex
                           align-items-center">
                           <i class="bi-play play-icon"></i>

                           <small>1:49 Minutes</small>
                        </a>
                        -->
                        <p class="play-icon-wrap d-flex
                        align-items-center" style="background: orangered;color: #fff; font-weight:900; padding: .5rem; width: 12rem;">
                            Study 2yrs in Asia & Finish in North America.
                        </p>
                    </div><!-- .heroText -->
                </div><!-- .col-lg-8 col-12 -->

            </div><!-- .row -->
        </div><!-- .container -->

        <div class="overlay"></div>
      </section>

      <section class="about section-padding" id="">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                    <h2 class="mb5">
                        Global Experience
                    </h2>
                </div><!-- .col-lg-6 col-12 -->

                <div class="col-lg-4 col-12 ms-lg-auto mb-5
                     mb-lg-0">
                    <nav>

                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-intro-tab"
                                    data-bs-toggle="tab" data-bs-target="#nav-intro"
                                    type="button" role="tab" aria-controls="nav-intro"
                                    aria-selected="true">
                                Introduction
                            </button>

                            <button class="nav-link" id="nav-profile-tab"
                                    data-bs-toggle="tab" data-bs-target="#nav-profile"
                                    type="button" role="tab" aria-controls="nav-profile"
                                    aria-selected="false">
                                Profile
                            </button>

                            <button class="nav-link" id="nav-faq-tab"
                                    data-bs-toggle="tab" data-bs-target="#nav-faq"
                                    type="button" role="tab" aria-controls="nav-faq"
                                    aria-selected="false">
                                FAQs
                            </button>
                        </div><!-- .nav nav-tabs -->

                    </nav>
                </div><!-- .col-lg-4 col-12 ms-lg-auto -->

                <div class="col-12">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-intro"
                             role="tabpanel" aria-labelledby="nav-intro-tab">
                            <div class="row">
                                <div class="col-lg-6 col-12 mb-lg-0 mb-4">
                                    <img src="{{ asset('frontend/first_style/images/webpage-browser-digital-icon-symbols-concept.jpg') }}"
                                         alt="" class="img-fluid">
                                </div><!-- .col-lg-6 col-12 mb-lg-0 mb-4 -->

                                <div class="col-lg-5 col-12 m-auto">
                                    <h3 class="mb-3">
                                        21st-Century Education
                                    </h3>

                                    <p>
                                        Our partner universities are some of the world's
                                        leading top universities.
                                        We operate numerous Study Abroad programs opening up better pathways
                                        for our students.
                                        A pathway offering broad experience of continents and affordable tuition
                                        for our students, preparing them for the industry.
                                    </p>
                                    <p>
                                        Our bootcamps are equally outstanding. We operate a number of
                                        bootcamps majorly in the area of software development.
                                        Most times, our bootcamp graduates end up advancing and pursuing
                                        further education at our partner universities and campuses in Asia,
                                        North America, Europe, and the Pacifics.
                                    </p>
                                    <p>
                                        Our Career programs and hiring. Once our graduates are done
                                        learning the technical skills. They can go through our career
                                        programs that prepares them for their next career step and
                                        provides exclusive opportunities.
                                    </p>

                                </div><!-- .col-lg-5 col-12 m-auto -->
                            </div><!-- .row -->
                        </div><!-- .tab-pane fade show active -->

                        <div class="tab-pane fade" id="nav-profile"
                             role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row">
                                <div class="col-lg-5 col-12 m-auto">

                                    <h3 class="mb-3">
                                        Cascarr Ihesie, Principal
                                    </h3>

                                    <p>
                                        Our priority is ensuring that affordable and quality education is brought
                                        and served to communities where the opportunities aren't there.
                                        <strong>Every student must be industrial ready and equipped</strong>
                                        before they get to the industry.
                                    </p>

                                    <ul class="social-icon mt-lg-5 mt-3">
                                        <li class="me-3">
                                            <strong>
                                                Where to find?
                                            </strong>
                                        </li>

                                        <li>
                                            <a href="https://twitter.com/AnalystONilz" class="social-icon-link
                                               bi-twitter"></a>
                                        </li>

                                        <li>
                                            <a href="https://www.linkedin.com/in/cascarr-ihesie-182295a0/"
                                               class="social-icon-link bi-linkedin"></a>
                                        </li>

                                        <li>
                                            <a href="mailto:c.ihesie45nl@gmail.com"
                                               class="social-icon-link bi-envelope"></a>
                                        </li>
                                    </ul>

                                </div><!-- .col-lg-5 col-12 m-auto -->

                                <div class="col-lg-6 col-12 mt-lg-0 mt-4">
                                    <img src="{{ asset('frontend/first_style/images/cax-owner.jpg') }}"
                                         alt="" class="img-fluid">
                                </div><!-- .col-lg-6 col-12 mt-lg-0 mt-4 -->
                            </div><!-- .row -->
                        </div><!-- .tab-pane fade -->

                        <div class="tab-pane fade" id="nav-faq"
                             role="tabpanel" aria-labelledby="nav-faq-tab">
                            <div class="row">
                                <div class="col-lg-6 col-12 mb-lg-0 mb-4">
                                    <img src="{{ asset('frontend/first_style/images/slide/microsoft-edge-FAaz8lkinzs-unsplash.jpg') }}"
                                         alt="African student discussing a course with his Prof." class="img-fluid">
                                </div><!-- .col-lg-6 col-12 mb-lg-0 mb-4 -->

                                <div class="col-lg-5 col-12 m-auto">
                                    <h3 class="mb-3">
                                        Frequently Asked Questions
                                    </h3>

                                    <div class="accordion" id="accordionGeneral">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headinggOne">

                                                <button class="accordion-button collapsed"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#accordionGeneralOne"
                                                        aria-expanded="true" aria-controls="
                                                        accordionGeneralOne">
                                                    What is CVPT?
                                                </button>

                                            </h2>

                                            <div id="accordionGeneralOne" class="accordion-collapse
                                                 collapse" aria-labelledby="headingOne" data-bs-parent="
                                                 #accordionGeneral">
                                                <div class="accordion-body">

                                                    <p class="large-paragraph">
                                                        <strong>CVPT</strong> is an acronym for
                                                        Cletrav Investment for Promoting Technology.
                                                    </p>
                                                    <p class="large-paragraph">
                                                        <strong>
                                                            CVPT Education Global
                                                        </strong> is a trademark owned by
                                                        <a href="https://topvietnam.com/cty/vi/Ha-Noi/Cong-Ty-TNHH-Cletrav-55J15A09B.html"
                                                           target="_blank">
                                                           <strong>
                                                            Cletrav Co.,Ltd Vietnam
                                                           </strong>
                                                        </a>.
                                                    </p>

                                                </div><!-- .accordion-body -->
                                            </div><!-- .accordion-collapse -->
                                        </div><!-- .accordion-item -->

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#accordionGeneralTwo"
                                                        aria-expanded="false" aria-controls="
                                                        accordionGeneralTwo">
                                                    What are the available service areas?
                                                </button>
                                            </h2>

                                            <div id="accordionGeneralTwo" class="accordion-collapse
                                                 collapse" aria-labelledby="headingTwo" data-bs-parent="
                                                 #accordionGeneral">
                                                <div class="accordion-body">

                                                    <p class="large-paragraph">
                                                        We provide full admission and enrollment support,
                                                        and relocation service for all our Study Abroad
                                                        programs. And currently, our <strong>Study 2 years in
                                                        Vietnam & Finish in North America</strong> is
                                                        the hottest selling right now.
                                                    </p>

                                                    <p class="large-paragraph">
                                                        We operate bootcamps on Software Development with
                                                        major focus on Server-side Engineering.
                                                        We encourage our High School graduates intending to
                                                        study abroad in the area of computing, to go through
                                                        our bootcamp. This enable them cope with the working
                                                        environment overseas and prepares them for the unlimited
                                                        opportunities out there.
                                                    </p>

                                                </div><!-- .accordion-body -->
                                            </div><!-- .accordion-collapse -->

                                        </div><!-- .accordion-item -->

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#accordionGeneralThree"
                                                        aria-expanded="false" aria-controls="
                                                        accordionGeneralThree">
                                                    What's your success rate on your service areas?
                                                </button>
                                            </h2>

                                            <div id="accordionGeneralThree" class="accordion-collapse
                                                 collapse" aria-labelledby="headingThree" data-bs-parent="
                                                 #accordionGeneral">
                                                <div class="accordion-body">

                                                    <p class="large-paragraph">
                                                        Since 2016, we have recorded over 100+
                                                        students, with 80% of African origin and
                                                        where residents of Nigeria, sucessfully
                                                        gained admission into our Study Abroad
                                                        programs. And we have never recorded any
                                                        visa refusal.
                                                    </p>

                                                    <p class="large-paragraph">
                                                        We have seen graduates with no computing
                                                        background take part in our bootcamps and
                                                        afterwards successfully secure paid internship
                                                        opportunities. And this is a 100% employment
                                                        rate.
                                                    </p>

                                                </div><!-- .accordion-body -->
                                            </div><!-- .accordion-collapse -->

                                        </div><!-- .accordion-item -->

                                    </div><!-- .accordion -->

                                </div><!-- .col-lg-5 col-12 m-auto -->
                            </div><!-- .row -->
                        </div><!-- .tab-pane fade -->

                    </div><!-- .tab-content -->
                </div><!-- .col-12 -->

            </div><!-- .row -->
        </div><!-- .container -->
      </section>

      <section class="pricing section-padding" id="section_5">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <h2 class="text-white mb-5 text-center">
                        Core Business Areas
                    </h2>
                </div><!-- .col-12 -->

                <div class="col-lg-6 col-12">
                    <div class="pricing-plan bg-white">
                        <div class="d-flex flex-wrap align-items-center
                             pricing-header">
                             <i class="pricing-icon"></i>

                             <div class="pricing-name">
                                <h4>
                                    Study Abroad
                                </h4>
                             </div><!-- .pricing-name -->

                             <small class="pricing-recommend">
                                Enrollment open
                             </small>

                        </div><!-- .d-flex flex-wrap -->

                        <div class="pricing-body">
                            <h5 class="mb-3">
                                Destinations
                            </h5>

                            <ul class="pricing-list">
                                <li class="pricing-list-item">
                                    Study In Vietnam
                                </li>
                            </ul>

                            <h5 class="mt-lg-5 mt-4 mb-3">
                                Standouts
                            </h5>

                            <p>
                                Study 2yrs In Vietnam & Finish in
                                North America.
                            </p><br>

                        </div><!-- .pricing-body -->

                    </div><!-- .pricing-plan bg-white -->
                </div><!-- .col-lg-6 col-12 -->

                <div class="col-lg-6 col-12 mt-lg-0 mt-5">
                    <div class="pricing-plan border-0 bg-white
                         shadow-lg">
                        <div class="d-flex flex-wrap align-items-center
                             pricing-header">

                             <div class="pricing-name">
                                <h4>
                                    Bootcamps
                                </h4>
                             </div><!-- .pricing-name -->

                             <small class="pricing-recommend">
                                Enrollment open
                             </small>
                        </div><!-- .d-flex flex-wrap -->

                        <div class="pricing-body">
                            <h5 class="mb-3">
                                Locations
                            </h5>

                            <ul class="pricing-list">
                                <li class="pricing-list-item">
                                    St. Brendan's Campus, Jahi 2.
                                </li>
                                <li class="pricing-list-item">
                                    ThangLong City Campus, Hanoi.
                                </li>
                            </ul>

                            <h5 class="mt-lg-5 mt-4 mb-3">
                                Standouts
                            </h5>

                            <p>
                                Small class size giving students, a
                                close student to teacher relationship.
                            </p>
                        </div><!-- .pricing-body -->
                    </div><!-- .pricing-plan border-0 -->
                </div><!-- .col-lg-6 col-12 mt-lg-0 mt-5 -->

            </div><!-- .row -->
        </div><!-- .container -->
      </section>

   </main>

@endsection

