<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            table {
              border-collapse: collapse;
              width: 100%;
            }

            td, th {
              border: 1px solid #dddddd;
              text-align: left;
              padding: 8px;
            }

            tr:nth-child(even) {
              background-color: #dddddd;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            {{-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

            <div class="content">
                <div class="title m-b-md">
                    Yummi Pizza Shop Laravel API
                </div>
                <hr>
                <table>
                  <caption><h3>All Orderse</h3></caption>
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Address</th>
                      <th>City</th>
                      <th>Order</th>
                      <th>Date</th>
                      <th>Amounts</th>
                      <th>Delivery Price</th>
                      <th>Order Price</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($allorders as $order)
                      <tr>
                        <td>{{ $order->client_name }}</td>
                        <td>{{ $order->client_address }}</td>
                        <td>{{ $order->client_city }}</td>
                        <td>{{ implode(', ', $order->item) }}</td>
                        <td>{{ $order->created_at}}</td>
                        <td>{{ $order->item_quantity }}</td>
                        <td>{{ $order->item_delivery_price }} &euro;</td>
                        <td>{{ $order->item_total_price }} &euro;</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
