@extends('layouts.app')

@section('content')
    
 {{-- Full-page background container --}}
  <div style="
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
                        url('{{ asset('media/Central_Shaheed_Minar_University_of_Chittagong.jpeg') }}'); background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
  background-size: cover;">


    {{-- Hero Section --}}
<section class="hero d-flex justify-content-center align-items-center text-center text-white" style="height: calc(100vh - 60px);">
  <div>
    <h1 class="fw-bold">24<sup>th</sup> International Mathematics Conference</h1>
    <br>
    <h4 class="fw-bold">December 18-19, 2025</h4>
    <br>

    {{-- Logos Section --}}
    <div class="d-flex justify-content-center align-items-center mb-3">
      <img src="/media/BMS_logo.png" alt="Bangladesh Mathematical Society" style="height: 80px; margin-right: 15px;">
      <img src="/media/cu_logo_white.png" alt="Department of Mathematics CU" style="height: 80px;">
    </div>

    {{-- Organization Names --}}
    <h5>Bangladesh Mathematical Society</h5>
    <h5>Department of Mathematics, University of Chittagong</h5>
    <hr style="border-color: white;">
  </div>
</section>

    {{-- Hero Section end --}}

    {{-- About Us Section --}}
      <section id="about" class="py-5 bg-light">
        <div class="container">
          <div class="row align-items-center">
            {{-- Logo / Image Column --}}
            <div class="col-md-5 text-center mb-4 mb-md-0">
              <img
                src="/media/conference_logo.png"
                alt="CSE Alumni Logo"
                class="img-fluid"
                style="max-width: 250px"
              />
            </div>
            {{-- Text Column --}}
            <div class="col-md-7">
              <h3 class="fw-bold mb-4">24<sup>th</sup> International Mathematics Conference</h3>
              <p class="text-muted pb-5" style="text-align: justify;">
                The International Conference on Mathematical Sciences, jointly organized by the University of Chittagong’s Department of Mathematics and the Bangladesh Mathematical Society (BMS), is scheduled for December 18-19, 2025. This prestigious event aims to advance research and promote collaboration among global scholars, researchers, and professionals in pure and applied mathematics. Hosted at the University of Chittagong, a leading public institution in Bangladesh, the conference will provide a dynamic platform for intellectual exchange, featuring keynote addresses, research paper presentations, and interactive workshops that explore cutting-edge topics in mathematical sciences.

The event is guided by a distinguished National Advisory Committee, ensuring academic excellence and strategic oversight. The committee includes esteemed leaders from prominent Bangladeshi universities, reflecting the conference’s commitment to fostering high-caliber discourse. The University of Chittagong’s scenic campus offers an inspiring backdrop for networking and collaboration, creating an ideal environment for both established academics and emerging scholars to share innovative ideas.

This conference welcomes participants from diverse backgrounds, including academia, industry, and research institutions, to engage with the global mathematical community. Attendees will have opportunities to present their work, discuss interdisciplinary applications, and contribute to shaping the future of mathematics. The collaboration with BMS underscores the event’s dedication to promoting mathematical sciences in Bangladesh and beyond.

Join us in Chittagong to connect with peers, explore new research frontiers, and be part of a transformative academic experience. Submit abstracts, register early, and participate in this significant gathering to drive progress in mathematical sciences.
              </p>
            </div>
          </div>
        </div>
      </section>



            {{-- Three Key Points Section --}}
      <section class="py-5 bg-white text-center">
        <div class="container">
          <div class="row g-4">
            <div class="col-md-4">
              <div class="mb-3">
                <i class="bi bi-pc-display-horizontal display-4 text-dark"></i>
              </div>
              <h5 class="fw-bold">Website Launch</h5>
              <p>
                This website will be launching <b>mid July 2025</b>. Stay tuned for updates!
              </p>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <i class="bi bi-envelope-at-fill display-4 text-dark"></i>
              </div>
              <h5 class="fw-bold">Contact Us</h5>
              <p >
                <span class=>For any queries or suggestions, please reach out to us via email.</span>
                <b>Email us at :</b> mathchair@cu.ac.bd
              </p>

            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <i class="bi bi-calendar-event-fill display-4 text-dark"></i>
              </div>
              <h5 class="fw-bold">Event Schedule</h5>
              <p style="text-align: center;">
                <b>Deadline of Abstract Submission: </b>September 10, 2025<br>
                <b>Notification of Acceptance: </b>October 10, 2025<br>
                <b>Deadline of Full Paper Submission: </b>October 30, 2025<br>
                <b>Conference Dates: </b>December 18-19, 2025<br>
              </p>
            </div>
          </div>
        </div>
      </section>



      {{-- Infinite banner --}}
       <div class="wrapper pt-4">
  <div class="marquee">
    <p>
      This Website is under construction. Please check back later for updates. For any queries, contact us at given email addresses. Thank you for your patience!
    </p>
    <p>
      This Website is under construction. Please check back later for updates. For any queries, contact us at given email addresses. Thank you for your patience!
    </p>
    <p>
      This Website is under construction. Please check back later for updates. For any queries, contact us at given email addresses. Thank you for your patience!
    </p>
    <p>
    <p>
      This Website is under construction. Please check back later for updates. For any queries, contact us at given email addresses. Thank you for your patience!
    </p>
    <p>
      This Website is under construction. Please check back later for updates. For any queries, contact us at given email addresses. Thank you for your patience!
    </p>
    <p>
      This Website is under construction. Please check back later for updates. For any queries, contact us at given email addresses. Thank you for your patience!
    </p>
    <p>

    </p>
  </div>
</div>
@endsection('content')