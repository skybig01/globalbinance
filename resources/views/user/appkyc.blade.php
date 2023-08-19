@extends('user.app')
@section('content')

<div id="appCapsule">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <h1>App KYC</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            @if($set->kyc)
                <div class="card" id="kyc">
                  <div class="card-body">
                    <h3 class="card-title mb-3">Kyc verification</h3>
                    <p class="card-text mb-4">Upload an identity document, for example, driver licence, voters card, international passport, national ID.</p>
                    <span class="badge badge-pill badge-primary">
                    @if($user->kyc_status==0)
                      Unverified
                    @else
                      Verified
                    @endif
                    </span>
                    <br><br>
                    @if(empty($user->kyc_link))
                        <form method="post" action="{{url('user/kyc')}}" enctype="multipart/form-data">
                        @csrf
                          <div class="row">
                            <div class="col-lg-8">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFileLang1" name="image" lang="en">
                                <label class="custom-file-label" for="customFileLang1">Select document</label>
                              </div>
                              <span class="form-text text-white">Accepted formats: png, jpg.</span>
                                <br>
                           
                            <br>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary  px-3">Upload<i class="icon-paperplane ml-2"></i></button>
                            </div>
                          </div>
                        </form>
                    @endif
                  </div>
                </div>
            @endif
            <div class="card">
              <div class="card-header header-elements-inline">
                 <h3 class="mb-0">Change account photo</h3>
              </div>
      
              <div class="card-body">
                <form action="{{url('user/avatar')}}" enctype="multipart/form-data" method="post">
                @csrf
                    <div class="form-group">
                        <div class="col-lg-8">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileLang" name="image" accept="image/*">
                        <label class="custom-file-label" for="customFileLang">Select photo</label>
                      </div>
                      <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                      <span class="form-text text-muted">Accepted formats:png, jpg.</span>
                    </div>
                    </div>
                    <br>
                  <div class="text-right">
                    {{-- <button type="submit" class="btn btn-sm btn-primary px-3">Upload<i class="icon-paperplane ml-2"></i></button> --}}

                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary  px-3">Upload<i class="icon-paperplane ml-2"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
      
            </div>
          </div>
    </div>





</div>




@stop

