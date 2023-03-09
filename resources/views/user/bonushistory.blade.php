@include('user.head')
@include('user.header')
@include('user.sidebar')

<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-sm-6">
            <h3>Bonus History</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">  </a></li>
              <li class="breadcrumb-item active">Bonus History</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 col-xl-12">
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 box-col-12">
                <div class="card order-card">
                  <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                      <div class="flex-grow-1">
                        <p class="square-after f-w-600">Recent Transactions<i class="fa fa-circle"></i></p>
                      </div>
                     
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="table-responsive">
                      <table class="table table-bordernone">
                        <thead>
                          <tr>
                            <th class="f-26">Bonus ID</th>
                            <th>Amount</th>
                            <th>Username</th>
                            <th>Plan</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        @foreach ($data as $dat )
                        <tbody>
                          <tr>
                            <td> 
                              <div class="d-flex">
                                <div class="flex-grow-1"><span class="f-14 f-w-600">{{ $dat->bonusId }}</span></div>
                              </div>
                            </td>
                            <td> <span>${{ $dat->amount }}</span></td>
                            <td>{{ $dat->nameSponsered }}</td>
                            <td>{{ $dat->created_at }}</td>
                            <td>{{ $dat->status }}</td>
                            
                          </tr>
                       
                        </tbody>
                        @endforeach
                      </table>
                    </div>
                    
                  </div>
                </div>
              </div>
            
          </div>
        </div>
        
      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>
@include('user.footer')