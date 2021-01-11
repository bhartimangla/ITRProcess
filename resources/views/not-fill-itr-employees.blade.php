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
          <button onclick="window.history.back()" class="back-btn">Black</button>
            <div class="content">
                <h1>Employees hasn't fill the ITR in a Year </h1>
                <table>
                  <thead>
                    <tr>
                      <th>Serial No</th>
                      <th>Employee Name</th>
                      <th>Salary (Annual Income)</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(count($employeesInfo) > 0)
                      @foreach($employeesInfo as $key => $employee)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td data-column="Employee Name">{{$employee->name}}</td>
                        <td data-column="Employee Salary">{{$employee->yearlySalary}}</td>
                      </tr>
                      @endforeach
                    @else
                    <tr >
                      <td colspan="3" class="content">Not Found !!</td>
                    </tr>
                    @endif
                  </tbody>
                </table>
            </div>
        </div>
    </body>
</html>