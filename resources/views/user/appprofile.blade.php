@extends('user.app')

@section('content')
  <!-- App Capsule -->
  <div id="appCapsule">
    <div class="section mt-3 text-center">
        <div class="avatar-section">
            <img src="{{url('/')}}/asset/profile/{{$cast}}" alt="avatar" class="imaged w100 rounded">
        </div>
    </div>
        <center><h2>{{$user->name}}</h2></center>

        @if($user->kyc_status==0)
        <div class="section mt-2 text-center text-danger">
                Your account has not been verified,
            <br> <a href="{{route('user.appkyc')}}" class="btn btn-sm btn-primary">Verify Now</a>
        </div>
        @else

        <div class="section mt-2 text-center text-success">
                Your account has been verified,
            <br> <span class="badge badge-pill badge-primary">Verified</span>
        </div>
        @endif
    <div class="listview-title mt-1">Theme</div>
<ul class="listview image-listview text inset no-line">
<li>
    <div class="item">
        <div class="in">
            <div>
                Dark Mode
            </div>
            <div class="form-check form-switch  ms-2">
                <input class="form-check-input dark-mode-switch" type="checkbox" id="darkmodeSwitch">
                <label class="form-check-label" for="darkmodeSwitch"></label>
            </div>
        </div>
    </div>
</li>
</ul>
<form action="{{url('user/account')}}" method="post">
    @csrf
<div class="listview-title mt-1">Profile Settings</div>
<div class="section">
<div class="card">
<div class="card-body">

<div class="form-group basic">
                <div class="input-wrapper">
                    <label class="label">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username"  value="{{$user->username}}" readonly="">

                </div>
            </div>
            <div class="form-group basic">
                <div class="input-wrapper">
                    <label class="label">Full Name</label>
                    <input type="text" name="nama" class="form-control" placeholder="Your Name" value="{{$user->name}}" required="">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
            </div>
            <div class="form-group basic">
                <div class="input-wrapper">
                    <label class="label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{$user->email}}" readonly="">

                </div>
            </div>
            <div class="form-group basic">
                <div class="input-wrapper">
                    <label class="label">Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="Number Phone" value="{{$user->phone}}" required="">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
            </div>
            <div class="form-group basic">
                <div class="input-wrapper">
                    <label class="label">Password (Leave blank if not replace)</label>
                    <input type="text" name="password" class="form-control" placeholder="New Password">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
            </div><br>

</div>
</div>
</div>

<div class="listview-title mt-1">Withdraw Account</div>
<div class="section">
<div class="card">
<div class="card-body">
            <div class="form-group basic">
                <div class="input-wrapper">
                    <label class="label">Bank Name</label>
                    <input type="text" name="bank" class="form-control" placeholder="Bank Name" value="">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
            </div>
            <div class="form-group basic">
                <div class="input-wrapper">
                    <label class="label">Account Number</label>
                    <input type="text" name="norek" class="form-control" placeholder="Account Number" value="">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
            </div>
            <div class="form-group basic">
                <div class="input-wrapper">
                    <label class="label">Account Name</label>
                    <input type="text" name="an" class="form-control" placeholder="Account Name" value="">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
            </div>
            <div class="form-group basic">
                <div class="input-wrapper">
                    <label class="label">USDT Wallet Address</label>
                    <input type="text" name="btc" class="form-control" placeholder="USDT Wallet Address" value="">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
            </div>


            <br>

</div>
</div>
</div>

<div class="section mt-2">
<button type="submit" class="btn btn-primary btn-block">Save</button>
</div>
</form>




</div>
<!-- * App Capsule -->
@stop
