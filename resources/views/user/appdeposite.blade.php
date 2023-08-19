@extends('user.app')
@section('content')
<!-- App Capsule -->
<div id="appCapsule">
    <div class="section wallet-card-section pt-1">
    <div class="wallet-card">
        <!-- Wallet Footer -->
        <b>Deposit</b>
        <div class="wallet-footer">
            <div class="item">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Bank">
                    <div class="icon-wrapper bg-primary">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                    <strong>Bank</strong>
                </a>
            </div>
            <div class="item">
                <a href="#" data-bs-toggle="modal" data-bs-target="#BTC">
                    <div class="icon-wrapper bg-success">
                        <ion-icon name="wallet-outline"></ion-icon>
                    </div>
                    <strong>BTC</strong>
                </a>
            </div>
            <div class="item">
                <a href="#" data-bs-toggle="modal" data-bs-target="#ETH">
                    <div class="icon-wrapper bg-info">
                        <ion-icon name="wallet-outline"></ion-icon>
                    </div>
                    <strong>ETH</strong>
                </a>
            </div>
            <div class="item">
                <a href="#" data-bs-toggle="modal" data-bs-target="#usdt">
                    <div class="icon-wrapper bg-danger">
                        <ion-icon name="wallet-outline"></ion-icon>
                    </div>
                    <strong>USDT</strong>
                </a>
            </div>


        </div>
        <!-- * Wallet Footer -->
    </div>
</div>
<!-- Wallet Card -->

<!-- Deposit Action Sheet -->
<div class="modal fade action-sheet" id="Bank" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Deposit via Bank</h5>
            </div>
            <div class="modal-body">
                <div class="action-sheet-content">
                <p>Please send your deposit to one of the following banks:</p>
                                <!-- card block -->
    <div class="card-block bg-dark mb-2">
        <div class="card-main">
            <div class="card-button dropdown">

            </div>
            <div class="balance">
                <span class="label">Bank Name</span>
                <h1 class="title"> CIMB BANK</h1>
            </div>
            <div class="in">
                <div class="card-number">
                    <span class="label">Account Number</span>
                     7609879290                        </div>
                <div class="bottom">
                    <div class="card-expiry">
                        <span class="label">Account Name</span>
                         MANSOR BIN AHMAD                            </div>

                </div>
            </div>
        </div>
    </div>
    <!-- * card block -->
                <p>After you make a deposit, confirm by contacting the <a href="https://binarytrade.online/welcome/support">Support Team</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Deposit Action Sheet -->
<!-- Deposit Action Sheet -->
<div class="modal fade action-sheet" id="BTC" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                                <div class="modal-header">
                <h5 class="modal-title">Deposit via BTC</h5>
            </div>
            <div class="modal-body">
                <div class="action-sheet-content">
                <p>Please send your deposit to the following address:</p>

    <div class="input-group">
                                            <input type="text" readonly="" class="form-control" id="copyText" value="bc1qgaxt4z8y5mdfqjue7fcfhxwjsk884t847rj3z9">
                                            <div class="input-group-append">
                                                <button type="button" id="copyBtn" class="btn btn-secondary">Copy</button>
                                            </div>
                            </div>

    <p>After you make a deposit, confirm by contacting the <a href="https://binarytrade.online/welcome/support">Support Team</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Deposit Action Sheet -->
<!-- Deposit Action Sheet -->
<div class="modal fade action-sheet" id="ETH" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                                <div class="modal-header">
                <h5 class="modal-title">Deposit via  </h5>
            </div>
            <div class="modal-body">
                <div class="action-sheet-content">
                <p>Please send your deposit to the following address:</p>

    <div class="input-group">
                                            <input type="text" readonly="" class="form-control" id="copyText2" value=" ">
                                            <div class="input-group-append">
                                                <button type="button" id="copyBtn2" class="btn btn-secondary">Copy</button>
                                            </div>
                            </div>

    <p>After you make a deposit, confirm by contacting the <a href="https://binarytrade.online/welcome/support">Support Team</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Deposit Action Sheet -->
<!-- Deposit Action Sheet -->
<div class="modal fade action-sheet" id="usdt" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                                <div class="modal-header">
                <h5 class="modal-title">Deposit via USDT(BEP-20)</h5>
            </div>
            <div class="modal-body">
                <div class="action-sheet-content">
                <p>Please send your deposit to the following address:</p>

    <div class="input-group">
                                            <input type="text" readonly="" class="form-control" id="copyText3" value="0x36ac260Bc72B18EFA5F133c8f490603BF548110e">
                                            <div class="input-group-append">
                                                <button type="button" id="copyBtn3" class="btn btn-secondary">Copy</button>
                                            </div>
                            </div>

    <p>After you make a deposit, confirm by contacting the <a href="https://binarytrade.online/welcome/support">Support Team</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Deposit Action Sheet -->

<!-- Transactions -->
<div class="section mt-2">
    <div class="section-title">Deposit history</div>
    <div class="transactions">

    </div>
</div>
<!-- * Transactions -->



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    const copyBtn = document.getElementById('copyBtn')
    const copyText = document.getElementById('copyText')

    copyBtn.onclick = () => {
        copyText.select();    // Selects the text inside the input
        document.execCommand('copy');    // Simply copies the selected text to clipboard
         Swal.fire({         //displays a pop up with sweetalert
            icon: 'success',
            title: 'Address copied to clipboard',
            showConfirmButton: false,
            timer: 1000
        });
    }
</script>
<script>
    const copyBtn2 = document.getElementById('copyBtn2')
    const copyText2 = document.getElementById('copyText2')

    copyBtn2.onclick = () => {
        copyText2.select();    // Selects the text inside the input
        document.execCommand('copy');    // Simply copies the selected text to clipboard
         Swal.fire({         //displays a pop up with sweetalert
            icon: 'success',
            title: 'Address copied to clipboard',
            showConfirmButton: false,
            timer: 1000
        });
    }
</script>
<script>
    const copyBtn3 = document.getElementById('copyBtn3')
    const copyText3 = document.getElementById('copyText3')

    copyBtn3.onclick = () => {
        copyText3.select();    // Selects the text inside the input
        document.execCommand('copy');    // Simply copies the selected text to clipboard
         Swal.fire({         //displays a pop up with sweetalert
            icon: 'success',
            title: 'Address copied to clipboard',
            showConfirmButton: false,
            timer: 1000
        });
    }
</script>


</div>
<!-- * App Capsule -->

@stop
