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
                      <h1 class="title">Deposit History</h1>
                      <!-- PAGE HEADING TAG - END -->
                  </div>

              </div>
          </div>
          <div class="col-lg-10">
            <section class="box" style="border-left: 3px solid #e77512;">
                <header class="panel_header">
                    <h2 class="title pull-left">Recent deposit activities</h2>
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
                                            <th>Transaction Id</th>
                                            <th data-priority="1">Amount</th>
                                            <th data-priority="1">Plan</th>
                                            <th data-priority="1">Status</th>
                                            <th data-priority="3">Date</th>

                                    </thead>
                                    @foreach ($data as $dat )
                                    <tbody>
                                        <tr>
                                            <th><i class="fa fa-dot-circle-o complete"></i> {{ $dat->transactionId }}</th>
                                            <td>${{ $dat->amount }}</td>
                                            <td>{{ $dat->plan }}</td>

                                            <td>
                                              @if($dat->status == "CONFIRM")
                                              <span class="status-complete">{{ $dat->status }}</span>
                                              @else
                                              <span class="status-pending">{{ $dat->status }}</span>
                                              @endif
                                            </td>
                                            <td>{{ $dat->created_at }}</td>

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
          <!-- MAIN CONTENT AREA STARTS -->
       
          <!-- MAIN CONTENT AREA ENDS -->
      </div>
  </section>
  <!-- END CONTENT -->
                 
@include('user.footer')