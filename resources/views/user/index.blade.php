
@extends('user.app')


@section('content')
<div class="app">
<!-- App Capsule -->

    <div id="appCapsule">
        <div class="section  mt-2">
            <!-- TradingView Widget BEGIN -->
            <form action="" method="get">
                <table width="100%">
                    <tr>
                        <td width="80%">
                            <select name="coin" class="form-control" required style="background-color: transparent;
                            text-color:white">
                                <option value=""> = Select Chart =</option>
                                <option value="2">BTC/USD</option>
                                <option value="3">ETH/USD</option>
                                <option value="10">BCH/USD</option>
                                <option value="11">DOGE/USD</option>
                                <option value="12">XRP/USD</option>
                                <option value="13">TRX/USD</option>
                                <option value="14">SAND/USD</option>
                                <option value="15">XLM/USD</option>
                                <option value="16">BNB/USD</option>
                                <option value="4">GBP/USD</option>
                                <option value="5">AUD/USD</option>
                                <option value="6">EUR/USD</option>
                                <option value="7">NZD/USD</option>
                                <option value="8">JPY/USD</option>
                                <option value="9">CHF/USD</option>
                            </select>
                        </td>
                        <td>
                            <input type="submit" class="btn btn-primary" value="Select">
                        </td>
                    </tr>
                </table>
            </form>
            <div class="tradingview-widget-container">
                <div id="tradingview_07938"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                <script type="text/javascript">
                    new TradingView.widget(
          {
          "width": "100%",
          "height": 450,
          "symbol": "COINBASE:BTCUSD",
          "interval": "1",
          "timezone": "Etc/UTC",
          "theme": "dark",
          "style": "1",
          "locale": "en",
          "toolbar_bg": "#f1f3f6",
          "enable_publishing": false,
          "hide_top_toolbar": false,
          "save_image": false,
          "studies": [
            "BB@tv-basicstudies",
            "PSAR@tv-basicstudies"
          ],
          "container_id": "tradingview_07938"
        }
          );
                </script>
            </div><!-- TradingView Widget END -->
            <div class="card">
                <div class="card-body">
                    <form action="" method="get">
                        <input type="hidden" name="coin" class="form-control" value="2" required="">
                        <input type="hidden" name="price" value="0.00642200" required="">
                        <table width="100%">
                            <tr>
                                <td width="50%">
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label class="label">Time</label>
                                            <select name="time" class="form-control" required>
                                                <option value="85">1 minute</option>
                                                <option value="120">2 minute</option>
                                                <option value="180">3 minute</option>
                                                <option value="300">5 minute</option>
                                                <option value="600">10 minute</option>
                                                <option value="900">15 minute</option>
                                            </select>
                                        </div>

                                    </div>
                                </td>
                                <td width="50%">
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label class="label">$ Amount</label>
                                            <input type="number" min="5" name="amount" class="form-control" value="0"
                                                required>
                                            <i class="clear-input">
                                                <ion-icon name="close-circle"></ion-icon>
                                            </i>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%">
                                    <input type="submit" name="Buy" class="btn btn-success w-100" value="Buy 100%">
                                </td>
                                <td width="50%">
                                    <input type="submit" name="Sell" class="btn btn-danger w-100" value="Sell 100%">
                                </td>
                            </tr>
                        </table>
                </div>
            </div>
            </form>
            <!-- Transactions -->
            <div class="section mt-2">
                <div class="section-title">History of Last 20 Trades</div>
                <div class="transactions">
                    <div id="trade"></div>
                </div>
            </div>
            <!-- * Transactions -->

            <div id="btcusd"></div>
        </div>
        <script type="text/javascript">
            var otomatis = setInterval(
        function ()
        {
        $('#btcusd').load('https://binarytrade.online/welcome/apiprice/2').fadeIn("slow");
        $('#ethusd').load('https://binarytrade.online/welcome/apiprice/3').fadeIn("slow");
        $('#gbpusd').load('https://binarytrade.online/welcome/apiprice/4').fadeIn("slow");
        $('#audusd').load('https://binarytrade.online/welcome/apiprice/5').fadeIn("slow");
        $('#eurusd').load('https://binarytrade.online/welcome/apiprice/6').fadeIn("slow");
        $('#nzdusd').load('https://binarytrade.online/welcome/apiprice/7').fadeIn("slow");
        $('#jpyusd').load('https://binarytrade.online/welcome/apiprice/8').fadeIn("slow");
        $('#chfusd').load('https://binarytrade.online/welcome/apiprice/9').fadeIn("slow");
        $('#bchusd').load('https://binarytrade.online/welcome/apiprice/10').fadeIn("slow");
        $('#dogeusd').load('https://binarytrade.online/welcome/apiprice/11').fadeIn("slow");
        $('#xrpusd').load('https://binarytrade.online/welcome/apiprice/12').fadeIn("slow");
        $('#trxusd').load('https://binarytrade.online/welcome/apiprice/13').fadeIn("slow");
        $('#sandusd').load('https://binarytrade.online/welcome/apiprice/14').fadeIn("slow");
        $('#xlmusd').load('https://binarytrade.online/welcome/apiprice/15').fadeIn("slow");
        $('#bnbusd').load('https://binarytrade.online/welcome/apiprice/16').fadeIn("slow");
        $('#trade').load('https://binarytrade.online/welcome/livetrade/2').fadeIn("slow");
        }, 2000);
        </script>


    </div>




    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }

        /* Firefox */
        input[type=number] {
          -moz-appearance: textfield;
        }
        </style>
</div>
<!-- * App Capsule -->

</div>@stop
