<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank & Sample Collection System</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #d32f2f;
            --primary-dark: #b71c1c;
            --secondary: #f44336;
            --light: #ffebee;
            --dark: #424242;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #424242;
        }
        
        .navbar {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
        }
        
        .nav-link {
            color: rgba(255,255,255,0.9) !important;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .nav-link:hover {
            color: white !important;
            transform: translateY(-2px);
        }
        
        .blood-type {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
            margin: 2px;
        }
        
        .A+ { background-color: #ffcdd2; color: #c62828; }
        .A- { background-color: #ffecb3; color: #ef6c00; }
        .B+ { background-color: #bbdefb; color: #1565c0; }
        .B- { background-color: #e1bee7; color: #6a1b9a; }
        .AB+ { background-color: #c8e6c9; color: #2e7d32; }
        .AB- { background-color: #b2dfdb; color: #00695c; }
        .O+ { background-color: #e8f5e8; color: #2e7d32; }
        .O- { background-color: #ffffff; color: #757575; border: 1px solid #ddd; }
        
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: all 0.3s;
            margin-bottom: 20px;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }
        
        .card-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            border-radius: 12px 12px 0 0 !important;
            font-weight: 600;
            padding: 15px 20px;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, var(--primary-dark) 0%, #9a0007 100%);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(211, 47, 47, 0.3);
        }
        
        .btn-outline-primary {
            border-color: var(--primary);
            color: var(--primary);
            border-radius: 8px;
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary);
            color: white;
        }
        
        .stat-card {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            border-left: 4px solid var(--primary);
        }
        
        .stat-card .card-body {
            display: flex;
            align-items: center;
        }
        
        .stat-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-right: 15px;
        }
        
        .alert-danger {
            background-color: #ffebee;
            border-color: #ffcdd2;
            color: #c62828;
        }
        
        .timeline {
            position: relative;
            padding: 20px 0;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            width: 2px;
            background-color: #e0e0e0;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -1px;
        }
        
        .timeline-item {
            padding: 10px 40px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
        }
        
        .timeline-item::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: white;
            border: 4px solid var(--primary);
            border-radius: 50%;
            top: 15px;
            z-index: 1;
        }
        
        .timeline-item.left {
            left: 0;
        }
        
        .timeline-item.right {
            left: 50%;
        }
        
        .timeline-item.left::after {
            right: -10px;
        }
        
        .timeline-item.right::after {
            left: -10px;
        }
        
        .bg-hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1607618453678-9b74229c70a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            height: 500px;
            display: flex;
            align-items: center;
        }
        
        footer {
            background-color: var(--dark);
            color: white;
            padding: 40px 0 20px;
        }
        
        .footer-link {
            color: #e0e0e0;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-link:hover {
            color: white;
            text-decoration: underline;
        }
        
        @media (max-width: 768px) {
            .timeline::before {
                left: 31px;
            }
            
            .timeline-item {
                width: 100%;
                padding: 10px 40px 10px 70px;
            }
            
            .timeline-item.left,
            .timeline-item.right {
                left: 0;
            }
            
            .timeline-item.left::after,
            .timeline-item.right::after {
                left: 15px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-heartbeat me-2"></i>BloodLife
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home"><i class="fas fa-home me-1"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#donate"><i class="fas fa-donate me-1"></i> Donate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#inventory"><i class="fas fa-vial me-1"></i> Inventory</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#requests"><i class="fas fa-hospital me-1"></i> Requests</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact"><i class="fas fa-phone me-1"></i> Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="bg-hero text-white text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4">Save Lives, Donate Blood</h1>
                    <p class="lead mb-5">Your donation can save up to 3 lives. Join our community of life savers today.</p>
                    <div class="d-flex flex-wrap justify-content-center gap-3">
                        <a href="#donate" class="btn btn-light btn-lg px-4">Become a Donor</a>
                        <a href="#requests" class="btn btn-outline-light btn-lg px-4">Request Blood</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="fw-bold">Our Impact</h2>
                    <p class="text-muted">Helping save lives every day</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-3 col-sm-6">
                    <div class="card stat-card h-100">
                        <div class="card-body">
                            <i class="fas fa-tint stat-icon"></i>
                            <div>
                                <h3 class="mb-0 fw-bold">12,543</h3>
                                <p class="mb-0 text-muted">Units Collected</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card stat-card h-100">
                        <div class="card-body">
                            <i class="fas fa-users stat-icon"></i>
                            <div>
                                <h3 class="mb-0 fw-bold">8,921</h3>
                                <p class="mb-0 text-muted">Active Donors</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card stat-card h-100">
                        <div class="card-body">
                            <i class="fas fa-heart stat-icon"></i>
                            <div>
                                <h3 class="mb-0 fw-bold">15,678</h3>
                                <p class="mb-0 text-muted">Lives Saved</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card stat-card h-100">
                        <div class="card-body">
                            <i class="fas fa-calendar-check stat-icon"></i>
                            <div>
                                <h3 class="mb-0 fw-bold">365</h3>
                                <p class="mb-0 text-muted">Days Active</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Donation Process -->
    <section id="donate" class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="fw-bold">How to Donate Blood</h2>
                    <p class="text-muted">Simple steps to become a life saver</p>
                </div>
            </div>
            <div class="timeline">
                <div class="timeline-item left">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                    <i class="fas fa-user-check"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0 fw-bold">Registration</h5>
                                    <p class="mb-0 text-muted">Register online or at our center with your ID</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline-item right">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                    <i class="fas fa-heartbeat"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0 fw-bold">Health Screening</h5>
                                    <p class="mb-0 text-muted">Quick medical check to ensure you're eligible</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline-item left">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                    <i class="fas fa-tint"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0 fw-bold">Blood Collection</h5>
                                    <p class="mb-0 text-muted">Safe and sterile collection process (10-15 mins)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline-item right">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                    <i class="fas fa-coffee"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0 fw-bold">Refreshments</h5>
                                    <p class="mb-0 text-muted">Enjoy snacks and drinks after donation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blood Inventory -->
    <section id="inventory" class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="fw-bold">Current Blood Inventory</h2>
                    <p class="text-muted">Real-time blood availability</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-3 col-sm-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="display-4 fw-bold text-danger mb-2">A+</div>
                            <h5 class="card-title">A Positive</h5>
                            <p class="card-text">Available: <span class="fw-bold">142</span> units</p>
                            <div class="progress mb-3" style="height: 10px;">
                                <div class="progress-bar bg-success" style="width: 85%"></div>
                            </div>
                            <span class="badge bg-success">Good</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="display-4 fw-bold text-warning mb-2">A-</div>
                            <h5 class="card-title">A Negative</h5>
                            <p class="card-text">Available: <span class="fw-bold">45</span> units</p>
                            <div class="progress mb-3" style="height: 10px;">
                                <div class="progress-bar bg-warning" style="width: 60%"></div>
                            </div>
                            <span class="badge bg-warning">Moderate</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="display-4 fw-bold text-primary mb-2">B+</div>
                            <h5 class="card-title">B Positive</h5>
                            <p class="card-text">Available: <span class="fw-bold">89</span> units</p>
                            <div class="progress mb-3" style="height: 10px;">
                                <div class="progress-bar bg-success" style="width: 75%"></div>
                            </div>
                            <span class="badge bg-success">Good</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="display-4 fw-bold text-info mb-2">B-</div>
                            <h5 class="card-title">B Negative</h5>
                            <p class="card-text">Available: <span class="fw-bold">23</span> units</p>
                            <div class="progress mb-3" style="height: 10px;">
                                <div class="progress-bar bg-danger" style="width: 30%"></div>
                            </div>
                            <span class="badge bg-danger">Low</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="display-4 fw-bold text-success mb-2">AB+</div>
                            <h5 class="card-title">AB Positive</h5>
                            <p class="card-text">Available: <span class="fw-bold">67</span> units</p>
                            <div class="progress mb-3" style="height: 10px;">
                                <div class="progress-bar bg-success" style="width: 70%"></div>
                            </div>
                            <span class="badge bg-success">Good</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="display-4 fw-bold text-secondary mb-2">AB-</div>
                            <h5 class="card-title">AB Negative</h5>
                            <p class="card-text">Available: <span class="fw-bold">12</span> units</p>
                            <div class="progress mb-3" style="height: 10px;">
                                <div class="progress-bar bg-danger" style="width: 20%"></div>
                            </div>
                            <span class="badge bg-danger">Critical</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="display-4 fw-bold text-success mb-2">O+</div>
                            <h5 class="card-title">O Positive</h5>
                            <p class="card-text">Available: <span class="fw-bold">201</span> units</p>
                            <div class="progress mb-3" style="height: 10px;">
                                <div class="progress-bar bg-success" style="width: 90%"></div>
                            </div>
                            <span class="badge bg-success">Excellent</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="display-4 fw-bold text-dark mb-2">O-</div>
                            <h5 class="card-title">O Negative</h5>
                            <p class="card-text">Available: <span class="fw-bold">34</span> units</p>
                            <div class="progress mb-3" style="height: 10px;">
                                <div class="progress-bar bg-warning" style="width: 50%"></div>
                            </div>
                            <span class="badge bg-warning">Moderate</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <div class="alert alert-danger d-inline-flex align-items-center" role="alert">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        <strong>Urgent Need:</strong> AB-, B- blood types needed immediately
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Donation Requirements -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="fw-bold">Donation Requirements</h2>
                    <p class="text-muted">Ensure you're eligible to donate</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card h-100">
                        <div class="card-header">
                            <i class="fas fa-check-circle me-2"></i> Eligibility Criteria
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <i class="fas fa-check text-success me-2"></i>
                                    Age between 18-65 years
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-check text-success me-2"></i>
                                    Weight over 50 kg (110 lbs)
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-check text-success me-2"></i>
                                    Hemoglobin level: 12.5 g/dL or higher
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-check text-success me-2"></i>
                                    No chronic diseases or infections
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-check text-success me-2"></i>
                                    Not pregnant or breastfeeding
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-check text-success me-2"></i>
                                    No recent tattoos or piercings (within 6 months)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card h-100">
                        <div class="card-header">
                            <i class="fas fa-times-circle me-2"></i> Temporary Deferrals
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <i class="fas fa-clock text-warning me-2"></i>
                                    Recent surgery (wait 6 months)
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-clock text-warning me-2"></i>
                                    Dental procedure (wait 7 days)
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-clock text-warning me-2"></i>
                                    Travel to malaria-risk area (wait 12 months)
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-clock text-warning me-2"></i>
                                    Blood transfusion (wait 12 months)
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-clock text-warning me-2"></i>
                                    Men who have sex with men (wait 3 months)
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-clock text-warning me-2"></i>
                                    COVID-19 vaccination (wait 7 days)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blood Requests -->
    <section id="requests" class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="fw-bold">Emergency Blood Requests</h2>
                    <p class="text-muted">Immediate needs in your area</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="card-title mb-0">Emergency Request</h5>
                                <span class="badge bg-danger">URGENT</span>
                            </div>
                            <p class="card-text">
                                <i class="fas fa-hospital me-2"></i> City General Hospital
                            </p>
                            <p class="card-text">
                                <i class="fas fa-tint me-2"></i> <span class="blood-type AB-">AB-</span> Blood Type Needed
                            </p>
                            <p class="card-text">
                                <i class="fas fa-user-injured me-2"></i> Accident victim requiring immediate transfusion
                            </p>
                            <p class="card-text">
                                <i class="fas fa-clock me-2"></i> Needed within: <strong>2 hours</strong>
                            </p>
                            <button class="btn btn-primary btn-sm">
                                <i class="fas fa-phone me-1"></i> Contact Hospital
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="card-title mb-0">Critical Need</h5>
                                <span class="badge bg-warning">HIGH PRIORITY</span>
                            </div>
                            <p class="card-text">
                                <i class="fas fa-hospital me-2"></i> Regional Medical Center
                            </p>
                            <p class="card-text">
                                <i class="fas fa-tint me-2"></i> <span class="blood-type B-">B-</span> Blood Type Needed (3 units)
                            </p>
                            <p class="card-text">
                                <i class="fas fa-user-injured me-2"></i> Patient undergoing major surgery
                            </p>
                            <p class="card-text">
                                <i class="fas fa-clock me-2"></i> Needed within: <strong>6 hours</strong>
                            </p>
                            <button class="btn btn-primary btn-sm">
                                <i class="fas fa-phone me-1"></i> Contact Center
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-outline-primary">
                        <i class="fas fa-plus me-2"></i> Submit New Request
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section id="contact" class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="fw-bold">Contact Us</h2>
                    <p class="text-muted">We're here to help with any questions</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Get in Touch</h4>
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label">Subject</label>
                                    <select class="form-select" id="subject" required>
                                        <option value="">Select a subject</option>
                                        <option value="donation">Blood Donation</option>
                                        <option value="request">Blood Request</option>
                                        <option value="partnership">Partnership</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" rows="5" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Our Locations</h4>
                            <div class="d-flex align-items-start mb-4">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-map-marker-alt fa-2x"></i>
                                </div>
                                <div>
                                    <h5>Main Blood Center</h5>
                                    <p class="mb-1">123 Health Street, Medical District</p>
                                    <p class="mb-1">City, State 12345</p>
                                    <p class="mb-1"><i class="fas fa-phone me-2"></i> (555) 123-4567</p>
                                    <p class="mb-0"><i class="fas fa-envelope me-2"></i> main@bloodlife.org</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mb-4">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-map-marker-alt fa-2x"></i>
                                </div>
                                <div>
                                    <h5>Westside Collection Center</h5>
                                    <p class="mb-1">456 Wellness Avenue</p>
                                    <p class="mb-1">City, State 67890</p>
                                    <p class="mb-1"><i class="fas fa-phone me-2"></i> (555) 987-6543</p>
                                    <p class="mb-0"><i class="fas fa-envelope me-2"></i> westside@bloodlife.org</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-clock fa-2x"></i>
                                </div>
                                <div>
                                    <h5>Operating Hours</h5>
                                    <p class="mb-1"><strong>Monday-Friday:</strong> 8:00 AM - 6:00 PM</p>
                                    <p class="mb-1"><strong>Saturday:</strong> 9:00 AM - 4:00 PM</p>
                                    <p class="mb-0"><strong>Sunday:</strong> 10:00 AM - 2:00 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5 class="fw-bold mb-3"><i class="fas fa-heartbeat me-2"></i>BloodLife</h5>
                    <p class="small">Dedicated to saving lives through blood donation and collection. Join our mission to ensure every patient gets the blood they need.</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-white"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin fa-lg"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <h6 class="fw-bold mb-3">Quick Links</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#home" class="footer-link">Home</a></li>
                        <li class="mb-2"><a href="#donate" class="footer-link">Donate Blood</a></li>
                        <li class="mb-2"><a href="#inventory" class="footer-link">Blood Inventory</a></li>
                        <li class="mb-2"><a href="#requests" class="footer-link">Emergency Requests</a></li>
                        <li class="mb-2"><a href="#contact" class="footer-link">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 mb-4 mb-md-0">
                    <h6 class="fw-bold mb-3">Donor Information</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="footer-link">Eligibility Criteria</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Donation Process</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Benefits of Donation</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Frequently Asked Questions</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Donor Rewards</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h6 class="fw-bold mb-3">Newsletter</h6>
                    <p class="small">Subscribe to receive updates on blood needs and donation events.</p>
                    <form>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Your email">
                            <button class="btn btn-light" type="submit">Subscribe</button>
                        </div>
                    </form>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-shield-alt text-success me-2"></i>
                        <small>Your information is secure</small>
                    </div>
                </div>
            </div>
            <hr class="my-4" style="background-color: rgba(255,255,255,0.2);">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="small mb-0">&copy; 2025 BloodLife Blood Bank & Sample Collection. All rights reserved. AKP DevZ </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Active navigation highlighting
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');
            
            let current = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= (sectionTop - 300)) {
                    current = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>