@extends('user.app')

@section('content')
   <!-- App Capsule -->
   <style>
    #appCapsul{
        background-color: #6236FF;
    }
.gradientSection {
text-align: center;
/* background: #6236FF; */
/* background-image: linear-gradient(-208deg, #6236FF 38%, #8a69ff 100%); */
}
</style>
   <div id="appCapsule">



    <!-- Wallet -->
    <div class="section full gradientSection">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
               
            <h5 class="title mb-2">Current Balance</h5>
            <h1 class="total">$ 2,562.50</h1>
            <h4 class="caption">
                <span class="iconbox text-success">
                    <ion-icon name="trending-up-outline"></ion-icon>
                </span>
                0.053205 BTC
            </h4>
            </div>
            <div class="wallet-inline-button mt-5">
                <a href="#" class="item" data-bs-toggle="modal" data-bs-target="#depositActionSheet">
                    <div class="iconbox">
                        <ion-icon name="card"></ion-icon>
                    </div>
                    <strong>Deposit</strong>
                </a>
                <a href="#" class="item" data-bs-toggle="modal" data-bs-target="#withdrawActionSheet">
                    <div class="iconbox">
                        <ion-icon name="cash"></ion-icon>
                    </div>
                    <strong>Withdraw</strong>
                </a>
                {{-- <a href="#" class="item" data-bs-toggle="modal" data-bs-target="#sendActionSheet">
                    <div class="iconbox">
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </div>
                    <strong>Send</strong>
                </a>
                <a href="crypto-exchange.html" class="item">
                    <div class="iconbox">
                        <ion-icon name="swap-vertical-outline"></ion-icon>
                    </div>
                    <strong>Exchange</strong>
                </a> --}}
            </div>
        </div>
    </div>
    <!-- * Wallet -->


    <!-- Deposit Action Sheet -->
    <div class="modal fade action-sheet" id="depositActionSheet" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Deposit</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">
                        <form>
                            <div class="form-group basic mb-2">
                                <div class="input-wrapper">
                                    <label class="label" for="account2">Select Account</label>
                                    <select class="form-control custom-select" id="account2">
                                        <option value="0">Savings (*** 5019)</option>
                                        <option value="1">Investment (*** 6212)</option>
                                        <option value="2">Mortgage (*** 5021)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="depositAmount">Enter Amount</label>
                                    <div class="exchange-group small">
                                        <div class="input-col">
                                            <input type="text" class="form-control form-control-lg pe-0"
                                                id="depositAmount" placeholder="0" value="380" maxlength="14">
                                        </div>
                                        <div class="select-col">
                                            <select class="form-select form-select-lg currency">
                                                <option value="USD" selected>USD</option>
                                                <option value="EUR">EUR</option>
                                                <option value="AUD">AUD</option>
                                                <option value="CAD">CAD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2">
                                <button type="button" class="btn btn-primary btn-lg btn-block"
                                    data-bs-dismiss="modal">Deposit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Deposit Action Sheet-->

    <!-- Withdraw Action Sheet -->
    <div class="modal fade action-sheet" id="withdrawActionSheet" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Withdraw</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">
                        <form>
                            <div class="form-group basic mb-2">
                                <div class="input-wrapper">
                                    <label class="label" for="account3">Select Account</label>
                                    <select class="form-control custom-select" id="account3">
                                        <option value="0">Savings (*** 5019)</option>
                                        <option value="1">Investment (*** 6212)</option>
                                        <option value="2">Mortgage (*** 5021)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group basic mb-2">
                                <div class="input-wrapper">
                                    <label class="label" for="iban1">IBAN</label>
                                    <input type="email" class="form-control" id="iban1"
                                        placeholder="Enter your IBAN">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="withdrawAmount">Enter Amount</label>
                                    <div class="exchange-group small">
                                        <div class="input-col">
                                            <input type="text" class="form-control form-control-lg pe-0"
                                                id="withdrawAmount" placeholder="0" value="380" maxlength="14">
                                        </div>
                                        <div class="select-col">
                                            <select class="form-select form-select-lg currency">
                                                <option value="USD" selected>USD</option>
                                                <option value="EUR">EUR</option>
                                                <option value="AUD">AUD</option>
                                                <option value="CAD">CAD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2">
                                <button type="button" class="btn btn-primary btn-lg btn-block"
                                    data-bs-dismiss="modal">Withdraw</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Withdraw Action Sheet-->

    <!-- Send Action Sheet -->
    <div class="modal fade action-sheet" id="sendActionSheet" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Send</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">
                        <form>

                            <div class="form-group basic mb-2">
                                <div class="input-wrapper">
                                    <label class="label" for="walletaddress">Wallet Address</label>
                                    <input type="email" class="form-control" id="walletaddress"
                                        placeholder="Enter a wallet address">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="sendAmount">Enter Amount</label>
                                    <div class="exchange-group small">
                                        <div class="input-col">
                                            <input type="text" class="form-control form-control-lg pe-0"
                                                id="sendAmount" placeholder="0" value="380" maxlength="14">
                                        </div>
                                        <div class="select-col">
                                            <select class="form-select form-select-lg currency">
                                                <option value="BTC" selected>BTC</option>
                                                <option value="ETH">ETH</option>
                                                <option value="ADA">ADA</option>
                                                <option value="USDT">USDT</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2">
                                <button type="button" class="btn btn-primary btn-lg btn-block"
                                    data-bs-dismiss="modal">Send</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Send Action Sheet-->


    <!-- Portfolio -->

    <!-- Portfolio -->


    <!-- Watchlist -->
 
    <!-- carousel  -->

    <!-- * carousel  -->
    <!-- Watchlist -->

    <!-- Action Sheet Watchlist -->

    <!-- * Action Sheet Watchlist -->


    <!-- Transactions -->

    <!-- Transactions -->









</div>
<!-- * App Capsule -->

@stop








