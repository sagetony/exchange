@include('user.head')
@include('user.header')
@include('user.sidebar')

<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-sm-6">
            <h3>Deposit</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('fund') }}">                                       <i data-feather="dollar-sign"></i></a></li>
              <li class="breadcrumb-item active"> Deposit</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 col-xl-6">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
               
                <div class="card-body">
                  <form class="theme-form" action="{{ route('reinvest') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <select class="form-select w-25" aria-label="Default select example" name="coin">
                            @foreach ( $coins as $coin )
                            <option value="{{ $coin->coinName }}">{{ $coin->coinName }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <select class="form-select w-25" aria-label="Default select example" name="pacakage">
                            @foreach ( $packages as $package )
                            <option value="{{ $package->packageName }}">{{ $package->packageName }}</option>
                            @endforeach
                            
                        </select>
                        
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Amount</span>
                        <input type="text" class="form-control" required aria-label="Amount (to the nearest dollar)" name="amount">
                        <span class="input-group-text">$ Dollar</span>
                    </div> 
                    
                    <div class="card-footer text-end">
                        <button class="btn btn-secondary">Reinvest</button>
                      </div>
                  </form>
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