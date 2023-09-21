<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Applications</title>
</head>
<body>
    <table>
        <tr>
            <th>Application ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Education Level</th>
            <th>Years of Experience</th>
            <th>Other Information</th>
        </tr>

        <?php
            
            foreach ($applications as $application) {
                print "<tr>";
                    print "<td>".$application->application_id."</td>";
                    print "<td>".$application->firstname."</td>";
                    print "<td>".$application->lastname."</td>";
                    print "<td>".$application->email."</td>";
                    print "<td>".$application->address."</td>";
                    print "<td>".$application->education."</td>";
                    print "<td>".$application->years_of_experience."</td>";
                    print "<td>".$application->other."</td>";

                print "</tr>";
            }

        ?>
    </table>
    
</body>
</html>