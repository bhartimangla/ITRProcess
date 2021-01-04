<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ITR</title>

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

            table { 
              width: 750px; 
              border-collapse: collapse; 
              margin:50px auto;
              }

            tr:nth-of-type(odd) { 
              background: #eee; 
              }

            th { 
              background: #3498db; 
              color: white; 
              font-weight: bold; 
              }

            td, th { 
              padding: 10px; 
              border: 1px solid #ccc; 
              text-align: left; 
              font-size: 18px;
              }

            @media 
            only screen and (max-width: 760px),
            (min-device-width: 768px) and (max-device-width: 1024px)  {

              table { 
                  width: 100%; 
              }

              table, thead, tbody, th, td, tr { 
                display: block; 
              }
              
              thead tr { 
                position: absolute;
                top: -9999px;
                left: -9999px;
              }
              
              tr { border: 1px solid #ccc; }
              
              td { 
                border: none;
                border-bottom: 1px solid #eee; 
                position: relative;
                padding-left: 50%; 
              }

              td:before { 
                position: absolute;
                top: 6px;
                left: 6px;
                width: 45%; 
                padding-right: 10px; 
                white-space: nowrap;
                content: attr(data-column);
                color: #000;
                font-weight: bold;
              }

            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
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
            @endif

            <div class="content">
                <h1>Companies hasn't fill the ITR in a Year </h1>
                <table>
                  <thead>
                    <tr>
                      <th>Serial No</th>
                      <th>Company Name</th>
                      <th>No. of Employees</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($companiesInfo as $key => $company)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td data-column="Company Name">{{$company->company_name}}</td>
                      <td data-column="No. of Employees">{{count($company->employees)}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
