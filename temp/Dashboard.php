<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Admin Dashboard</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-color: #dc3545;
            --secondary-color: #f8f9fa;
            --dark-color: #343a40;
            --light-color: #ffffff;
            --sidebar-width: 250px;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fb;
            overflow-x: hidden;
        }
        
        .sidebar {
            width: var(--sidebar-width);
            background: linear-gradient(180deg, var(--primary-color), #a71d2a);
            color: white;
            height: 100vh;
            position: fixed;
            transition: all 0.3s;
            z-index: 1000;
        }
        
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 12px 20px;
            margin: 5px 0;
            border-radius: 5px;
            transition: all 0.3s;
        }
        
        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }
        
        .sidebar .nav-link i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }
        
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 20px;
            transition: all 0.3s;
        }
        
        .header {
            background-color: var(--light-color);
            padding: 15px 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 25px;
            border-radius: 10px;
        }
        
        .stat-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s;
            margin-bottom: 25px;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
        }
        
        .stat-card .card-body {
            padding: 20px;
        }
        
        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-right: 15px;
        }
        
        .blood-type {
            font-weight: bold;
            font-size: 1.2rem;
        }
        
        .blood-count {
            font-size: 1.8rem;
            font-weight: 700;
        }
        
        .recent-activities {
            max-height: 400px;
            overflow-y: auto;
        }
        
        .activity-item {
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }
        
        .activity-item:last-child {
            border-bottom: none;
        }
        
        .priority-high {
            border-left: 4px solid var(--primary-color);
        }
        
        .priority-medium {
            border-left: 4px solid #ffc107;
        }
        
        .priority-low {
            border-left: 4px solid #28a745;
        }
        
        .table th {
            font-weight: 600;
        }
        
        .badge-blood {
            padding: 8px 15px;
            font-size: 0.9rem;
        }
        
        .donor-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #e9ecef;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: var(--primary-color);
        }
        
        .chart-container {
            height: 300px;
            position: relative;
        }
        
        @media (max-width: 992px) {
            .sidebar {
                width: 70px;
                text-align: center;
            }
            
            .sidebar .nav-link span {
                display: none;
            }
            
            .sidebar .nav-link i {
                margin-right: 0;
                font-size: 1.2rem;
            }
            
            .main-content {
                margin-left: 70px;
            }
        }
        
        @media (max-width: 768px) {
            .sidebar {
                width: 0;
                overflow: hidden;
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .sidebar.active {
                width: var(--sidebar-width);
            }
            
            .sidebar.active .nav-link span {
                display: inline;
            }
            
            .sidebar.active .nav-link i {
                margin-right: 10px;
            }
        }
    </style>
</head>
<body>
        <!-- Sidebar -->
    <div class="sidebar">
        <div class="p-3">
            <h3 class="text-center py-3">BloodBank</h3>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#"><i class="bi bi-speedometer2"></i> <span>Dashboard</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-person-lines-fill"></i> <span>Donors</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-droplet"></i> <span>Blood Inventory</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-people"></i> <span>Recipients</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-clipboard-check"></i> <span>Requests</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-calendar-event"></i> <span>Campaigns</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-geo-alt"></i> <span>Locations</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-gear"></i> <span>Settings</span></a>
                </li>
                <li class="nav-item mt-5">
                    <a class="nav-link" href="#"><i class="bi bi-box-arrow-right"></i> <span>Logout</span></a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header d-flex justify-content-between align-items-center">
            <div>
                <h2 class="mb-0">Dashboard</h2>
                <p class="text-muted mb-0">Welcome back, Admin</p>
            </div>
            <div class="d-flex align-items-center">
                <div class="me-3">
                    <button class="btn btn-outline-secondary position-relative">
                        <i class="bi bi-bell"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            5
                        </span>
                    </button>
                </div>
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" id="userMenu" data-bs-toggle="dropdown">
                        <i class="bi bi-person-circle"></i> Admin
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="row">
            <div class="col-md-3">
                <div class="stat-card bg-white">
                    <div class="card-body d-flex align-items-center">
                        <div class="stat-icon bg-primary bg-opacity-10 text-primary">
                            <i class="bi bi-droplet"></i>
                        </div>
                        <div>
                            <h5 class="text-muted">Total Units</h5>
                            <h3>1,248</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card bg-white">
                    <div class="card-body d-flex align-items-center">
                        <div class="stat-icon bg-success bg-opacity-10 text-success">
                            <i class="bi bi-person-plus"></i>
                        </div>
                        <div>
                            <h5 class="text-muted">New Donors</h5>
                            <h3>32</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card bg-white">
                    <div class="card-body d-flex align-items-center">
                        <div class="stat-icon bg-warning bg-opacity-10 text-warning">
                            <i class="bi bi-people"></i>
                        </div>
                        <div>
                            <h5 class="text-muted">Active Donors</h5>
                            <h3>1,042</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card bg-white">
                    <div class="card-body d-flex align-items-center">
                        <div class="stat-icon bg-info bg-opacity-10 text-info">
                            <i class="bi bi-clipboard-check"></i>
                        </div>
                        <div>
                            <h5 class="text-muted">Requests</h5>
                            <h3>24</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blood Inventory -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Blood Inventory</h5>
                        <button class="btn btn-sm btn-primary">Add Stock</button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <div class="border rounded p-3 text-center">
                                    <div class="blood-type text-danger">A+</div>
                                    <div class="blood-count">248</div>
                                    <div class="text-muted small">Units</div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="border rounded p-3 text-center">
                                    <div class="blood-type text-danger">A-</div>
                                    <div class="blood-count">112</div>
                                    <div class="text-muted small">Units</div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="border rounded p-3 text-center">
                                    <div class="blood-type text-danger">B+</div>
                                    <div class="blood-count">198</div>
                                    <div class="text-muted small">Units</div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="border rounded p-3 text-center">
                                    <div class="blood-type text-danger">B-</div>
                                    <div class="blood-count">87</div>
                                    <div class="text-muted small">Units</div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="border rounded p-3 text-center">
                                    <div class="blood-type text-danger">AB+</div>
                                    <div class="blood-count">65</div>
                                    <div class="text-muted small">Units</div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="border rounded p-3 text-center">
                                    <div class="blood-type text-danger">AB-</div>
                                    <div class="blood-count">34</div>
                                    <div class="text-muted small">Units</div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="border rounded p-3 text-center">
                                    <div class="blood-type text-danger">O+</div>
                                    <div class="blood-count">321</div>
                                    <div class="text-muted small">Units</div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="border rounded p-3 text-center">
                                    <div class="blood-type text-danger">O-</div>
                                    <div class="blood-count">183</div>
                                    <div class="text-muted small">Units</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0">Recent Activities</h5>
                    </div>
                    <div class="card-body recent-activities">
                        <div class="activity-item priority-high">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="donor-avatar">JD</div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-0">John Doe donated A+ blood</h6>
                                    <p class="text-muted mb-0 small">2 hours ago</p>
                                </div>
                            </div>
                        </div>
                        <div class="activity-item priority-medium">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="donor-avatar">MJ</div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-0">Mary Johnson requested O- blood</h6>
                                    <p class="text-muted mb-0 small">5 hours ago</p>
                                </div>
                            </div>
                        </div>
                        <div class="activity-item priority-low">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="donor-avatar">RS</div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-0">Robert Smith became a new donor</h6>
                                    <p class="text-muted mb-0 small">Yesterday</p>
                                </div>
                            </div>
                        </div>
                        <div class="activity-item priority-medium">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="donor-avatar">EP</div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-0">Emergency request for AB+ blood</h6>
                                    <p class="text-muted mb-0 small">2 days ago</p>
                                </div>
                            </div>
                        </div>
                        <div class="activity-item priority-high">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="donor-avatar">LS</div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-0">Low stock alert for B- blood</h6>
                                    <p class="text-muted mb-0 small">2 days ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Donations and Requests -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Recent Donations</h5>
                        <a href="#" class="text-decoration-none">View All</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Donor</th>
                                        <th>Blood Type</th>
                                        <th>Quantity</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="donor-avatar me-2">JD</div>
                                                <div>John Doe</div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-danger badge-blood">A+</span></td>
                                        <td>450 ml</td>
                                        <td>12 Oct, 2023</td>
                                        <td><span class="badge bg-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="donor-avatar me-2">MJ</div>
                                                <div>Mary Johnson</div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-danger badge-blood">O-</span></td>
                                        <td>450 ml</td>
                                        <td>11 Oct, 2023</td>
                                        <td><span class="badge bg-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="donor-avatar me-2">RS</div>
                                                <div>Robert Smith</div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-danger badge-blood">B+</span></td>
                                        <td>450 ml</td>
                                        <td>10 Oct, 2023</td>
                                        <td><span class="badge bg-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="donor-avatar me-2">EP</div>
                                                <div>Emma Parker</div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-danger badge-blood">AB-</span></td>
                                        <td>450 ml</td>
                                        <td>9 Oct, 2023</td>
                                        <td><span class="badge bg-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="donor-avatar me-2">LS</div>
                                                <div>Lisa Simpson</div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-danger badge-blood">A-</span></td>
                                        <td>450 ml</td>
                                        <td>8 Oct, 2023</td>
                                        <td><span class="badge bg-success">Approved</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Blood Requests</h5>
                        <a href="#" class="text-decoration-none">View All</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Patient</th>
                                        <th>Blood Type</th>
                                        <th>Quantity</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="donor-avatar me-2">TW</div>
                                                <div>Tom Wilson</div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-danger badge-blood">O+</span></td>
                                        <td>2 Units</td>
                                        <td>12 Oct, 2023</td>
                                        <td><span class="badge bg-success">Fulfilled</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="donor-avatar me-2">SC</div>
                                                <div>Sarah Connor</div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-danger badge-blood">AB-</span></td>
                                        <td>1 Unit</td>
                                        <td>11 Oct, 2023</td>
                                        <td><span class="badge bg-warning">Processing</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="donor-avatar me-2">MJ</div>
                                                <div>Mike Johnson</div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-danger badge-blood">B-</span></td>
                                        <td>3 Units</td>
                                        <td>10 Oct, 2023</td>
                                        <td><span class="badge bg-danger">Urgent</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="donor-avatar me-2">AP</div>
                                                <div>Anna Parker</div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-danger badge-blood">A+</span></td>
                                        <td>1 Unit</td>
                                        <td>9 Oct, 2023</td>
                                        <td><span class="badge bg-success">Fulfilled</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="donor-avatar me-2">DB</div>
                                                <div>David Brown</div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-danger badge-blood">O-</span></td>
                                        <td>2 Units</td>
                                        <td>8 Oct, 2023</td>
                                        <td><span class="badge bg-warning">Processing</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple script to toggle sidebar on mobile
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.querySelector('.sidebar');
            const toggleBtn = document.createElement('button');
            toggleBtn.innerHTML = '<i class="bi bi-list"></i>';
            toggleBtn.className = 'btn btn-primary position-fixed d-lg-none';
            toggleBtn.style.left = '10px';
            toggleBtn.style.top = '10px';
            toggleBtn.style.zIndex = '1001';
            
            document.body.appendChild(toggleBtn);
            
            toggleBtn.addEventListener('click', function() {
                sidebar.classList.toggle('active');
            });
        });
    </script>
</body>
</html>