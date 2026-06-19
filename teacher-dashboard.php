<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard | ExcelInstitute</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>

    <div class="dashboard-layout">

        <!-- Included Teacher Sidebar -->
        <?php include 'component/teacher-sidebar.php'; ?>

        <!-- Main Content Area -->
        <main class="dashboard-main">
            <!-- Topbar -->
            <header class="dashboard-topbar">
                <div class="d-flex align-items-center flex-1 gap-3">
                    <button class="topbar-actions btn-icon" id="toggleSidebarBtn">
                        <i class="bi bi-chevron-left fs-4" id="toggleIcon"></i>
                    </button>
                    <div class="search-wrapper d-none d-md-flex">
                        <i class="bi bi-search"></i>
                        <input type="text" class="search-input" placeholder="Search courses, students...">
                    </div>
                </div>
                <div class="topbar-actions d-flex gap-3">
                    <button class="btn-icon position-relative" title="Notifications">
                        <i class="bi bi-bell"></i>
                        <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle"></span>
                    </button>
                    <button class="btn-icon" title="Messages">
                        <i class="bi bi-chat-left-text"></i>
                    </button>
                    <button class="btn-icon border-start ps-3 ms-1" title="Logout">
                        <i class="bi bi-box-arrow-right"></i>
                    </button>
                </div>
            </header>

            <!-- Content -->
            <div class="dashboard-content">

                <div class="d-flex justify-content-between align-items-end mb-4">
                    <div>
                        <h2 class="fw-bold mb-1">Welcome back, Professor</h2>
                        <p class="text-muted mb-0">Here's an overview of your academic operations and student progress for the current semester.</p>
                    </div>
                    <div class="text-end d-none d-md-block">
                        <p class="text-muted small mb-0 fw-bold text-uppercase">Current Term</p>
                        <h5 class="text-brand fw-bold mb-0">Fall 2026</h5>
                    </div>
                </div>

                <!-- Stats Row -->
                <div class="row g-4 mb-5">
                    <div class="col-xl-3 col-md-6">
                        <div class="teacher-stat-card shadow-sm">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <div class="teacher-stat-icon"><i class="bi bi-people-fill"></i></div>
                                <span class="trend-badge trend-up"><i class="bi bi-arrow-up-right"></i> 12%</span>
                            </div>
                            <h3 class="fw-bold mb-1">1,248</h3>
                            <p class="text-muted small mb-0">Total Students</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="teacher-stat-card shadow-sm">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <div class="teacher-stat-icon bg-secondary bg-opacity-10 text-secondary"><i class="bi bi-book-half"></i></div>
                            </div>
                            <h3 class="fw-bold mb-1">8</h3>
                            <p class="text-muted small mb-0">Active Courses</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="teacher-stat-card shadow-sm">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <div class="teacher-stat-icon text-warning" style="background: rgba(255, 193, 7, 0.1);"><i class="bi bi-cash-stack"></i></div>
                                <span class="trend-badge trend-up"><i class="bi bi-arrow-up-right"></i> 5%</span>
                            </div>
                            <h3 class="fw-bold mb-1">Rs. 142,450</h3>
                            <p class="text-muted small mb-0">Total Earnings (MTD)</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="teacher-stat-card shadow-sm">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <div class="teacher-stat-icon bg-info bg-opacity-10 text-info"><i class="bi bi-bar-chart-fill"></i></div>
                            </div>
                            <h3 class="fw-bold mb-1">78%</h3>
                            <p class="text-muted small mb-0">Avg. Completion Rate</p>
                        </div>
                    </div>
                </div>

                <!-- Student Questions Section -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="fw-bold mb-0">Recent Student Questions</h4>
                    <a href="#" class="btn btn-outline-brand btn-sm rounded-pill px-3 fw-medium">View All Boards</a>
                </div>

                <div class="row g-4 mb-4">
                    <!-- Question 1 -->
                    <div class="col-12">
                        <div class="bg-white border rounded-4 p-4 shadow-sm d-flex gap-3 align-items-start">
                            <img src="https://placehold.co/50x50/047648/ffffff?text=SJ" alt="Student" class="rounded-circle shadow-sm flex-shrink-0">
                            <div class="flex-1">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <h6 class="fw-bold mb-0">Sarah Jenkins</h6>
                                        <small class="text-muted">A/L Chemistry (2026) • Module 1: Atomic Structure</small>
                                    </div>
                                    <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill small">Unanswered</span>
                                </div>
                                <p class="text-dark small mb-3">Sir, could you please re-explain the trend in the first ionization energy across period 3? I didn't quite understand the dip at Aluminum.</p>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-brand btn-sm px-4 rounded-pill fw-medium"><i class="bi bi-reply-fill me-1"></i> Reply</button>
                                    <button class="btn btn-light btn-sm px-3 rounded-pill text-muted border"><i class="bi bi-check2-circle me-1"></i> Mark Resolved</button>
                                </div>
                            </div>
                            <div class="text-end ms-3 d-none d-sm-block">
                                <small class="text-muted">2 hours ago</small>
                            </div>
                        </div>
                    </div>

                    <!-- Question 2 -->
                    <div class="col-12">
                        <div class="bg-white border rounded-4 p-4 shadow-sm d-flex gap-3 align-items-start">
                            <img src="https://placehold.co/50x50/047648/ffffff?text=MD" alt="Student" class="rounded-circle shadow-sm flex-shrink-0">
                            <div class="flex-1">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <h6 class="fw-bold mb-0">Marcus Doe</h6>
                                        <small class="text-muted">A/L Chemistry (2026) • Module 2: Chemical Calculations</small>
                                    </div>
                                    <span class="badge bg-warning bg-opacity-10 text-warning rounded-pill small">In Progress</span>
                                </div>
                                <p class="text-dark small mb-3">In question 4 of the past paper discussion, why did we use the ideal gas equation instead of assuming STP conditions?</p>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-brand btn-sm px-4 rounded-pill fw-medium"><i class="bi bi-reply-fill me-1"></i> Reply</button>
                                    <button class="btn btn-light btn-sm px-3 rounded-pill text-muted border"><i class="bi bi-check2-circle me-1"></i> Mark Resolved</button>
                                </div>
                            </div>
                            <div class="text-end ms-3 d-none d-sm-block">
                                <small class="text-muted">Yesterday</small>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Footer -->
            <div class="mt-auto border-top bg-white p-3 text-center text-muted small">
                © 2026 ExcelInstitute. All rights reserved.
            </div>

        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('toggleSidebarBtn').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            const toggleIcon = document.getElementById('toggleIcon');
            sidebar.classList.toggle('minimized');
            if (sidebar.classList.contains('minimized')) {
                toggleIcon.classList.remove('bi-chevron-left');
                toggleIcon.classList.add('bi-chevron-right');
            } else {
                toggleIcon.classList.remove('bi-chevron-right');
                toggleIcon.classList.add('bi-chevron-left');
            }
        });
    </script>
</body>

</html>