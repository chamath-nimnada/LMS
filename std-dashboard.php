<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal | ExcelInstitute</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>

    <div class="dashboard-layout">
        <?php include 'component/std-sidebar.php'; ?>
        <!-- Main Content Area -->
        <main class="dashboard-main">
            <!-- Topbar -->
            <header class="dashboard-topbar">
                <div class="d-flex align-items-center flex-1 gap-3">
                    <button class="topbar-actions btn-icon rounded-3 border" id="toggleSidebarBtn">
                        <i class="bi bi-chevron-left fs-4" id="toggleIcon"></i>
                    </button>
                    <div class="search-wrapper">
                        <i class="bi bi-search"></i>
                        <input type="text" class="search-input" placeholder="Search courses...">
                    </div>
                </div>
                <div class="topbar-actions">
                    <button class="btn-icon" title="Logout">
                        <i class="bi bi-box-arrow-right"></i>
                    </button>
                </div>
            </header>

            <!-- Content -->
            <div class="dashboard-content">
                <div class="mb-5">
                    <h2 class="fw-bold mb-1">Welcome back, Alex</h2>
                    <p class="text-muted">Ready to pick up where you left off?</p>
                </div>

                <!-- In Progress Section -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="fw-bold mb-0">In Progress</h4>
                    <a href="#" class="text-brand text-decoration-none fw-medium small">View All</a>
                </div>

                <div class="row g-4 mb-5">
                    <!-- Course 1 -->
                    <div class="col-md-6 col-lg-5">
                        <div class="dash-card">
                            <div class="dash-card-img-wrapper">
                                <img src="https://placehold.co/600x300/1e2532/ffffff?text=Algorithms" alt="Advanced Algorithms" class="dash-card-img">
                            </div>
                            <div class="p-4 d-flex flex-column flex-1">
                                <h5 class="fw-bold mb-1">Advanced Algorithms</h5>
                                <p class="text-muted small mb-4">Last watched: 2 hours ago</p>

                                <div class="mt-auto">
                                    <div class="d-flex justify-content-between align-items-center small fw-medium mb-1">
                                        <span class="text-muted">Module 4: Dynamic Programming</span>
                                        <span class="text-brand">65%</span>
                                    </div>
                                    <div class="progress-track">
                                        <div class="progress-fill" style="width: 65%;"></div>
                                    </div>
                                    <button class="btn btn-brand w-100 py-2 mt-2"><i class="bi bi-play-circle me-2"></i>Resume</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Course 2 -->
                    <div class="col-md-6 col-lg-5">
                        <div class="dash-card">
                            <div class="dash-card-img-wrapper">
                                <img src="https://placehold.co/600x300/1e2532/ffffff?text=Data+Structures" alt="Data Structures II" class="dash-card-img">
                            </div>
                            <div class="p-4 d-flex flex-column flex-1">
                                <h5 class="fw-bold mb-1">Data Structures II</h5>
                                <p class="text-muted small mb-4">Last watched: Yesterday</p>

                                <div class="mt-auto">
                                    <div class="d-flex justify-content-between align-items-center small fw-medium mb-1">
                                        <span class="text-muted">Module 2: Graph Theory</span>
                                        <span class="text-brand">32%</span>
                                    </div>
                                    <div class="progress-track">
                                        <div class="progress-fill" style="width: 32%;"></div>
                                    </div>
                                    <button class="btn btn-brand w-100 py-2 mt-2"><i class="bi bi-play-circle me-2"></i>Resume</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Purchaced Cources Section -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="fw-bold mb-0">Purchaced Cources</h4>
                    <a href="#" class="text-brand text-decoration-none fw-medium small">View All</a>
                </div>

                <div class="row g-4 mb-5">
                    <!-- Course 1 -->
                    <div class="col-4">
                        <div class="dash-card">
                            <div class="dash-card-img-wrapper">
                                <img src="https://placehold.co/600x300/1e2532/ffffff?text=Algorithms" alt="Advanced Algorithms" class="dash-card-img">
                            </div>
                            <div class="p-4 d-flex flex-column flex-1">
                                <h5 class="fw-bold mb-1">Course 1</h5>
                                <button class="btn btn-brand w-100 py-2 mt-3"><i class="bi bi-play-circle me-2"></i>Start</button>
                            </div>
                        </div>
                    </div>

                    <!-- Course 2 -->
                    <div class="col-4">
                        <div class="dash-card">
                            <div class="dash-card-img-wrapper">
                                <img src="https://placehold.co/600x300/1e2532/ffffff?text=Algorithms" alt="Advanced Algorithms" class="dash-card-img">
                            </div>
                            <div class="p-4 d-flex flex-column flex-1">
                                <h5 class="fw-bold mb-1">Course 2</h5>
                                <button class="btn btn-brand w-100 py-2 mt-3"><i class="bi bi-play-circle me-2"></i>Start</button>
                            </div>
                        </div>
                    </div>
                    <!-- Course 3 -->
                    <div class="col-4">
                        <div class="dash-card">
                            <div class="dash-card-img-wrapper">
                                <img src="https://placehold.co/600x300/1e2532/ffffff?text=Algorithms" alt="Advanced Algorithms" class="dash-card-img">
                            </div>
                            <div class="p-4 d-flex flex-column flex-1">
                                <h5 class="fw-bold mb-1">Course 3</h5>
                                <button class="btn btn-brand w-100 py-2 mt-3"><i class="bi bi-play-circle me-2"></i>Start</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Completed Courses Section -->
                <h4 class="fw-bold mb-3">Completed Courses</h4>
                <div class="completed-row">
                    <div class="d-flex align-items-center gap-3">
                        <div class="completed-icon-wrapper">
                            <i class="bi bi-patch-check-fill"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Introduction to UX Design</h6>
                            <p class="text-muted small mb-0">Completed on Oct 15, 2024</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn text-muted bg-white border"><i class="bi bi-star me-2"></i>Rate</button>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Global Footer inside main area -->
    <?php include 'component/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Sidebar Toggle Script with Icon Change
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