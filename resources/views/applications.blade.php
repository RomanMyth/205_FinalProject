<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Applications</title>
    <style>
        h1{
            display:flex;
            justify-content:center;
        }
        #app_table{
            display:flex;
            justify-content:center;
            border-collapse:collapse;
        }
        #app_table td, th {
            border: 1px solid;
            padding:5px 0px;
        }
        #app_table tbody{
            width:75%;
            display:flex;
            flex-direction:column;
            justify-content:space-evenly;
        }
        .app_table_row{
            display:flex;
        }
        .app_table_row th{
            width:12%;
            display:flex;
            justify-content:center;
        }
        .app_table_row td{
            width:12%;
            display:flex;
            justify-content:center;
        }
    </style>

</head>
<body>
    <h1>Applications</h1>
    <table id="app_table">
        <tr class="app_table_row">
            <th>Application ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Education Level</th>
            <th>Years of Experience</th>
            <th>Other Information</th>
        </tr>

        
            
            @foreach ($applications as $application) 
                <tr class="app_table_row">
                    <td>{{ $application->application_id }}</td>
                    <td>{{ $application->firstname }}</td>
                    <td>{{ $application->lastname }}</td>
                    <td>{{ $application->email }}</td>
                    <td>{{ $application->address }}</td>
                    <td>{{ $application->education }}</td>
                    <td>{{ $application->years_of_experience }}</td>
                    <td>{{ $application->other }}</td>

                </tr>
            @endforeach
        
    </table>
    
</body>
</html>