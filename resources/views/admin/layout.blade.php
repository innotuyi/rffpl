<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <!-- DataTables CSS -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEJ+2KwG41Q8PzEurTHbTpNidwq0dyt0ri0X0/zurWX+2fFJZfvTtiJJq1ZB3" crossorigin="anonymous">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }

        /* Dashboard Container */
        .dashboard-container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Styling */
        .sidebar {
            width: 250px;
            background-color: #4A3F99;
            color: white;
            padding: 20px;
            position: fixed;
            height: 100%;
            overflow-y: auto;
        }

        .sidebar h2 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar li {
            margin: 15px 0;
        }

        .sidebar li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            font-weight: 600;
            display: flex;
            align-items: center;
        }

        .sidebar li a i {
            margin-right: 10px;
        }

        .sidebar li a:hover {
            text-decoration: underline;
        }

        /* Main Content Styling */
        .main-content {
            margin-left: 270px;
            /* Adjust for sidebar width */
            padding: 20px;
            flex: 1;
            background-color: #ffffff;
            min-height: 100vh;
            overflow: auto;
        }

        .header {
            background-color: #4A3F99;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .header p {
            font-size: 16px;
        }

        .content {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }


        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .main-content {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>RYFPL Admin</h2>
            <ul>
                <li><a href="{{ route('admin.pages.index') }}"><i class="fas fa-file-alt"></i> Manage Pages</a></li>
                <li><a href="{{ route('admin.team.index') }}"><i class="fas fa-users"></i> Manage Team</a></li>
                <li><a href="{{ route('admin.organization.edit') }}"><i class="fas fa-building"></i> Organization
                        Details</a></li>
                <li><a href="{{ route('admin.donations.index') }}"><i class="fas fa-hand-holding-heart"></i> Donation
                        Settings</a></li>
                <li><a href="{{ route('admin.emails.index') }}"><i class="fas fa-envelope"></i> Manage Emails</a></li>
                <li><a href="{{ route('admin.analytics.index') }}"><i class="fas fa-chart-line"></i> View Analytics</a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <h1>Welcome to the Admin Dashboard</h1>
                <p>Manage and oversee your organization effectively.</p>
            </div>
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Other JS files -->
    @yield('scripts')
    <script>
        $(document).ready(function() {
            $('.datatable-button-html5-columns').DataTable({
                responsive: true,
                columnDefs: [{
                        orderable: false,
                        targets: [2]
                    } // Make the "Actions" column unsortable
                ],
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
    <script src="https://cdn.datatables.net/buttons/2.3.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.1/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.1/js/buttons.print.min.js"></script>

</body>

</html>
