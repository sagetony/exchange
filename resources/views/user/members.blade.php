@include('user.head')
@include('user.header')
@include('user.sidebar')




  <!-- START CONTENT -->
  <section id="main-content" class=" ">
      <div class="wrapper main-wrapper row" style=''>
        <div class="col-xl-12">
          <div class="js-conveyor-example">
              <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinMarquee.js"></script><div id="coinmarketcap-widget-marquee" coins="1,1027,825,1839,52,2010" currency="USD" theme="light" transparent="false" show-symbol-logo="true" width="1000000">
          </div>
        </div>
          <div class='col-xs-12'>
              <div class="page-title">

                  <div class="pull-left">
                      <!-- PAGE HEADING TAG - START -->
                      <h1 class="title">Affiliate Program
                    </h1>
                      <!-- PAGE HEADING TAG - END -->
                  </div>

              </div>
              <div class="col-xs-12">
                <section class="box over-h">
                    <header class="panel_header">
                        <h2 class="title pull-left">Affiliate Members and Earning</h2>
                        
                    </header>
                    
                </section>
            </div>

            <div class="clearfix"></div>


            <div class="clearfix"></div>

            <div class="col-lg-8">
                <section class="box has-border-left-3">
                    <header class="panel_header">
                        <h2 class="title pull-left">FAQ</h2>
                        <div class="actions panel_actions pull-right">
                            <a class="box_toggle fa fa-chevron-down"></a>
                            <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                            <a class="box_close fa fa-times"></a>
                        </div>
                    </header>
                    <div class="content-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <h4 class="bold no-mt">Affilite Program</h4>
                                <h4><small>Welcome to our affiliate program, Read our affiliate program terms and conditions <a href="#" class="color-primary">here</a></small></h4>
                                <h5 class="mt-20 bold mb-20">Your Affiliate Link is</h5>
                                <div class="form-group has-focus">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-white" id="field-12" value="{{ Route('register',['ref' => auth()->user()->referralId]) }}" readonly>
                                        <a href="#" class="input-group-addon"  data-color-class="primary" data-animate=" animated fadeIn" data-toggle="tooltip" data-original-title="copy" data-placement="top"><i class="fa fa-copy text-dark"></i></a>
                                    </div>
                                </div>
                                <!-- Bootstrap FAQ - START -->
                                <div class="panel-group no-mb faq-panels" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">How do I use my affiliate link ?</a>
                                    </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium id voluptates, accusamus aliquam, doloribus aperiam ullam tempora nesciunt, architecto vitae molestias. Impedit soluta nulla accusamus! Beatae accusamus eos, inventore aspernatur Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">How does the affiliate link work ?</a>
                                        </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium id voluptates, accusamus aliquam, doloribus aperiam ullam tempora nesciunt, architecto vitae molestias. Impedit soluta nulla accusamus! Beatae accusamus eos, inventore aspernatur Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">How bif are the reward ?</a>
                                    </h4>
                                        </div>
                                        <div id="collapseFive" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium id voluptates, accusamus aliquam, doloribus aperiam ullam tempora nesciunt, architecto vitae molestias. Impedit soluta nulla accusamus! Beatae accusamus eos, inventore aspernatur Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">What do you mean by a "Affiliate Ranking System" ?</a>
                                    </h4>
                                        </div>
                                        <div id="collapseSix" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium id voluptates, accusamus aliquam, doloribus aperiam ullam tempora nesciunt, architecto vitae molestias. Impedit soluta nulla accusamus! Beatae accusamus eos, inventore aspernatur Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">What are the payment options?</a>
                                    </h4>
                                        </div>
                                        <div id="collapseEight" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium id voluptates, accusamus aliquam, doloribus aperiam ullam tempora nesciunt, architecto vitae molestias. Impedit soluta nulla accusamus! Beatae accusamus eos, inventore aspernatur Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">How do I rank up? Can I move down in rank?</a>
                                    </h4>
                                        </div>
                                        <div id="collapseNine" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium id voluptates, accusamus aliquam, doloribus aperiam ullam tempora nesciunt, architecto vitae molestias. Impedit soluta nulla accusamus! Beatae accusamus eos, inventore aspernatur Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- bs faq end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

         

            <div class="clearfix"></div>

         

            <div class="clearfix"></div>

            <div class="col-lg-4">
                <section class="box has-border-left-3">
                    <header class="panel_header">
                        <h2 class="title pull-left">Referral Member</h2>
                        <div class="actions panel_actions pull-right">
                            <a class="box_toggle fa fa-chevron-down"></a>
                            <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                            <a class="box_close fa fa-times"></a>
                        </div>
                    </header>
                    <div class="content-body">
                        <div class="row">
                            <div class="col-xs-12">
                              @foreach ($data as $dat )
                                <div class="trader-buy golden">
                                 
                                    <h6 class="angle-round">{{ $dat->username }}</h6>
                                    <div class="progress progress-cls">
                                      <div class="progress-bar has-gradient-to-right-bottom" style="width:79.27% !important;">760.565 $</div>
                                    </div>
                                    
                                </div>
                                @endforeach
                             
                            </div>
                        </div>
                    </div>
                </section>
            </div>


            <div class="col-lg-8">
                <section class="box has-border-left-3">
                    <header class="panel_header">
                        <h2 class="title pull-left">Recent Transactions</h2>
                        <div class="actions panel_actions pull-right">
                            <a class="box_toggle fa fa-chevron-down"></a>
                            <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                            <a class="box_close fa fa-times"></a>
                        </div>
                    </header>
                    <div class="content-body">
                        <div class="row">
                            <div class="col-xs-12">

                                <div class="table-responsive" data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table table-small-font no-mb table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Affililate ID</th>
                                                <th data-priority="1">Amount</th>
                                                <th data-priority="2">Username</th>
                                                <th data-priority="2">Date</th>
                                                <th data-priority="3">Status</th>
                                                
                                        </thead>
                                        @foreach ($databonus as $dat )

                                        <tbody>
                                            <tr>
                                                <th><i class="fa fa-dot-circle-o complete"></i>{{ $dat->bonusId }}</th>
                                                <td>${{ $dat->amount }}</td>
                                                <td>{{ $dat->nameSponsered }}</td>
                                                <td>{{ $dat->created_at }}</td>
                                                <td> @if($dat->status == "CONFIRM")
                                                  <span class="status-complete">{{ $dat->status }}</span>
                                                  @else
                                                  <span class="status-pending">{{ $dat->status }}</span>
                                                  @endif</td>
                                             
                                            </tr>
                                            
                                          
                                           
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>


            <div class="clearfix"></div>

          </div>
          <div class="col-xs-12">

            <!-- start -->

            <div class="pricing-tables">

                <div class="row">
                    

                </div>
                <!-- row-->

            </div>
            <!-- end -->

        </div>

          <div class="clearfix"></div>
          <!-- MAIN CONTENT AREA STARTS -->
       
          <!-- MAIN CONTENT AREA ENDS -->
      </div>
  </section>
  <!-- END CONTENT -->
                 
@include('user.footer')