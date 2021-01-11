<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ITR</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    </head>
    <body>
        <div>
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
                <h1>Companies List</h1>
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
                      <td data-column="Company Name"><a href="no-fill-itr-employees/{{$company->org_id}}">{{$company->company_name}}</a></td>
                      <td data-column="No. of Employees">{{count($company->employees)}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </body>
</html>