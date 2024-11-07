<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department Report</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .department {
            margin-bottom: 20px;
            page-break-inside: avoid;
            /* Prevents page breaks within a department section */
        }

        .department h3 {
            background-color: #f4f4f4;
            padding: 10px;
            margin: 0;
            font-size: 18px;
        }

        .department p {
            font-style: italic;
            margin: 0 0 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            font-size: 14px;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }
    </style>
</head>

<body>
    <h2>Employee Report by Department</h2>

    @foreach ($departments as $department)
        <div class="department">
            <h3>{{ $department->department_name }}</h3>
            <p>{{ $department->department_description }}</p>

            @if ($department->employees->isEmpty())
                <p>No employees in this department.</p>
            @else
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date of Employment</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($department->employees as $employee)
                            <tr>
                                <td>{{ $employee->full_name }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->phone_number }}</td>
                                <td>{{ \Carbon\Carbon::parse($employee->date_of_employment)->format('d-m-Y') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    @endforeach
</body>

</html>
