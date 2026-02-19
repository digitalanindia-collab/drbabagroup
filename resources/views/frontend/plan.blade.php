@extends('frontend/layout/main')
@section('content')
<banner />
 <section class="page-title" style="background-image: url({{asset('frontend/images/background/4.png')}});background-size: cover; overflow:hidden;  background-repeat: no-repeat;">
            <div class="auto-container">
                <h1>Plan</h1>
                <ul class="page-breadcrumb">
                    <li><a href="/">home</a></li>

                    <li>Plan</li>
                </ul>
            </div>
        </section>
        <!-- End Page Title -->

        <!-- About Section -->
        <section class="about-section">
            <div class="pattern-layer" style="background-image: url({{asset('frontend/images/background/pattern-1.png')}})"></div>
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Image Column -->
                    <div class="image-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="image">
                                <img src="images/about/2.png" alt="">
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->


                </div>
            </div>
        </section>

        <!-- End About Section -->


        <!-- Story Section -->
        <section class="story-section">
            <div class="pattern-layer" style="background-image: url({{asset('frontend/images/background/pattern-7.png')}})"></div>
            <div class="pattern-layer-two" style="background-image: url({{asset('frontend/images/background/pattern-8.png')}})"></div>
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Content Column -->

 <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  {{-- <h4 class="card-title">Basic Table</h4>
                  <p class="card-description">
                    Add class <code>.table</code>
                  </p> --}}
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Sr.No</th>
                          <th>Level</th>
                          <th>Member</th>
                          <th>Plan</th>

                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $key=> $item)
    <tr>
                          <td>{{ $key+1}}</td>
                          <td>{{ $item->level}}</td>
                          <td>{{ $item->member}}</td>
                           <td>{{ $item->income}}%</td>

                        </tr>
                        @endforeach



                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
                    <!-- Counter Column -->


                </div>
            </div>
        </section>

@endsection
