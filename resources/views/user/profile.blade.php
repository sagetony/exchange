@include('user.head')
@include('user.header')
@include('user.sidebar')

 <!-- START CONTENT -->
 <div id="main-content" class=" ">
  <section class="wrapper main-wrapper row" style=''>

      <div class='col-xs-12'>
          <div class="page-title">

              <div class="pull-left">
                  <!-- PAGE HEADING TAG - START -->
                  <h1 class="title">Settings</h1>
                  <!-- PAGE HEADING TAG - END -->
              </div>


          </div>
      </div>

    


      <div class="clearfix"></div>

      <div class="col-lg-12">
          <section class="box has-border-left-3">
                  <header class="panel_header">
                      <h2 class="title pull-left">Personal Information</h2>
                  </header>
                  <div class="content-body">    
                      <div class="row">
                          <div class="form-container">
                            <form action="{{ route("profileimage") }}" method="post" enctype="multipart/form-data">
                              @csrf

                                  <div class="row">
                                      <div class="col-xs-12 mb-20">
                                          
                                          <div class="col-sm-12 avatar-img ">
                                              <div class="avatar-img-wrapper">
                                                  <img src="{{  auth()->user()->photo}}" style="max-width:100px" alt="">
                                              </div>
                                              <div class="form-group">
                                                  <label class="form-label" for="formfield10">Upload File</label>
                                                  <span class="desc">"JPG, GIF or PNG"</span>
                                                  <div class="controls">
                                                      <input type="file" class="" id="formfield10" name="file" >
                                                  </div>
                                              </div>
                                          </div>

                                      </div>
                                      <div class="col-xs-12">
                                          <div class="col-lg-6 no-pl">
                                              <div class="form-group">
                                                  <label class="form-label">First Name</label>
                                                  <div class="controls">
                                                      <i class=""></i>
                                                      <input type="text" class="form-control"  name ="firstName" value="{{ auth()->user()->firstName }}">
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-lg-6 no-pr">
                                              <div class="form-group">
                                                  <label class="form-label">Last Name</label>
                                                  <div class="controls">
                                                      <i class=""></i>
                                                      <input type="text" class="form-control"  name ="lastName" value="{{ auth()->user()->lastName }}">
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-lg-6 no-pl">
                                            <div class="form-group">
                                                <label class="form-label">Email</label>
                                                <div class="controls">
                                                    <i class=""></i>
                                                    <input type="text" class="form-control"  name ="email" value="{{ auth()->user()->email }}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 no-pr">
                                          <div class="form-group">
                                              <label class="form-label">Username</label>
                                              <div class="controls">
                                                  <i class=""></i>
                                                  <input type="text" class="form-control"  name ="username" value="{{ auth()->user()->username }}" disabled>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-6 no-pl">
                                        <div class="form-group">
                                            <label class="form-label">Phone Number</label>
                                            <div class="controls">
                                                <i class=""></i>
                                                <input type="text" class="form-control"  name ="phoneNumber" value="{{ auth()->user()->phoneNumber }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 no-pr">
                                      <div class="form-group">
                                          <label class="form-label">Country</label>
                                          <div class="controls">
                                              <i class=""></i>
                                              <input type="text" class="form-control"  name ="country" value="{{ auth()->user()->country }}">
                                          </div>
                                      </div>
                                  </div>
                                        
                                          
                                          <div class="pull-right">
                                              <button type="submit" class="btn btn-primary btn-corner right15"><i class="fa fa-check"></i> Update</button>
                                              <button type="button" class="btn btn-default btn-corner"><i class="fa fa-times"></i></button>
                                          </div>
                                          
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
          </section>
      </div>
      <div class="col-lg-12">
        <section class="box has-border-left-3">
                <header class="panel_header">
                    <h2 class="title pull-left">Change Password</h2>
                </header>
                <div class="content-body">    
                    <div class="row">
                        <div class="form-container">
                          <form action="{{ route("profilepass") }}" method="post">
                            @csrf

                                <div class="row">
                                 
                                    <div class="col-xs-12">
                                        <div class="col-lg-6 no-pl">
                                            <div class="form-group">
                                                <label class="form-label">Current Password</label>
                                                <div class="controls">
                                                    <i class=""></i>
                                                    <input type="password" name ="current_password" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 no-pl">
                                          <div class="form-group">
                                              <label class="form-label">New Password</label>
                                              <div class="controls">
                                                  <i class=""></i>
                                                  <input type="password" name ="password" class="form-control" >
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-6 no-pl">
                                        <div class="form-group">
                                            <label class="form-label">Confirm Password</label>
                                            <div class="controls">
                                                <i class=""></i>
                                                <input type="password" name ="password_confirmation" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                       
                                       
                                    
                                </div>
                                      
                                        
                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-primary btn-corner right15"><i class="fa fa-check"></i> Update</button>
                                            <button type="button" class="btn btn-default btn-corner"><i class="fa fa-times"></i></button>
                                        </div>
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </section>
    </div>


      <!-- MAIN CONTENT AREA ENDS -->
  </section>
</div>
<!-- END CONTENT -->
                 
@include('user.footer')