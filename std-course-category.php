<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Catalog | ExcelInstitute</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>

    <div class="dashboard-layout">

        <!-- Included Dashboard Sidebar -->
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
                        <input type="text" class="search-input" placeholder="Search for subjects, teachers...">
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
                <div class="mb-4">
                    <h2 class="fw-bold mb-1">Course Catalog</h2>
                    <p class="text-muted">Browse and enroll in available classes for the 2025/2026 intakes.</p>
                </div>

                <!-- Filters -->
                <div class="bg-white p-4 rounded-3 border mb-4">
                    <form action="#" method="GET" class="row g-3 align-items-end">
                        <div class="col-md-3">
                            <label for="streamFilter" class="form-label fw-medium text-dark small mb-1">Stream</label>
                            <select class="form-select" id="streamFilter" name="stream">
                                <option value="all" selected>All Streams</option>
                                <option value="al-science">A/L Science</option>
                                <option value="al-commerce">A/L Commerce</option>
                                <option value="al-arts">A/L Arts</option>
                                <option value="ol">O/L Classes</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label for="subjectFilter" class="form-label fw-medium text-dark small mb-1">Subject</label>
                            <select class="form-select" id="subjectFilter" name="subject">
                                <option value="all" selected>All Subjects</option>
                                <option value="chemistry">Chemistry</option>
                                <option value="physics">Physics</option>
                                <option value="biology">Biology</option>
                                <option value="math">Mathematics</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="teacherFilter" class="form-label fw-medium text-dark small mb-1">Teacher</label>
                            <select class="form-select" id="teacherFilter" name="teacher">
                                <option value="all" selected>All Teachers</option>
                                <option value="dr-perera">Dr. S. Perera</option>
                                <option value="prof-fernando">Prof. A. Fernando</option>
                                <option value="mr-silva">Mr. K. Silva</option>
                            </select>
                        </div>

                        <div class="col-md-2">
                            <button type="submit" class="btn btn-brand w-100 py-2 rounded-3 fw-bold">Filter</button>
                        </div>
                    </form>
                </div>

                <!-- Course Grid -->
                <div class="row g-4 mb-5">

                    <!-- Course Item 1 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="dash-card">
                            <div class="dash-card-img-wrapper">
                                <span class="dash-badge badge-should">A/L SCIENCE</span>
                                <img src="https://placehold.co/400x250/1e2532/ffffff?text=Chemistry" alt="Chemistry" class="dash-card-img">
                            </div>
                            <div class="p-4 d-flex flex-column flex-1">
                                <h5 class="fw-bold mb-2">A/L Chemistry (2026 Theory)</h5>
                                <div class="d-flex align-items-center mb-3">
                                    <img src="https://placehold.co/30x30/047648/ffffff?text=SP" alt="Teacher" class="rounded-circle me-2">
                                    <span class="text-muted small">Dr. S. Perera</span>
                                </div>
                                <ul class="list-unstyled text-muted small mb-4">
                                    <li class="mb-1"><i class="bi bi-clock me-2"></i>Sat, 08:00 AM - 12:00 PM</li>
                                    <li><i class="bi bi-geo-alt me-2"></i>Main Hall A</li>
                                </ul>
                                <div class="mt-auto pt-3 border-top d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-dark fs-5">Rs. 2500<span class="text-muted small fs-6">/mo</span></span>
                                    <button class="btn btn-outline-brand py-1 px-3 rounded-pill small fw-bold">Enroll</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Course Item 2 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="dash-card">
                            <div class="dash-card-img-wrapper">
                                <span class="dash-badge badge-should">A/L SCIENCE</span>
                                <img src="https://placehold.co/400x250/1e2532/ffffff?text=Biology" alt="Biology" class="dash-card-img">
                            </div>
                            <div class="p-4 d-flex flex-column flex-1">
                                <h5 class="fw-bold mb-2">A/L Biology (2025 Revision)</h5>
                                <div class="d-flex align-items-center mb-3">
                                    <img src="https://placehold.co/30x30/047648/ffffff?text=AF" alt="Teacher" class="rounded-circle me-2">
                                    <span class="text-muted small">Prof. A. Fernando</span>
                                </div>
                                <ul class="list-unstyled text-muted small mb-4">
                                    <li class="mb-1"><i class="bi bi-clock me-2"></i>Sun, 08:00 AM - 01:00 PM</li>
                                    <li><i class="bi bi-geo-alt me-2"></i>Auditorium</li>
                                </ul>
                                <div class="mt-auto pt-3 border-top d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-dark fs-5">Rs. 3000<span class="text-muted small fs-6">/mo</span></span>
                                    <button class="btn btn-outline-brand py-1 px-3 rounded-pill small fw-bold">Enroll</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Course Item 3 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="dash-card">
                            <div class="dash-card-img-wrapper">
                                <span class="dash-badge badge-should">O/L CLASSES</span>
                                <img src="https://placehold.co/400x250/1e2532/ffffff?text=Mathematics" alt="Mathematics" class="dash-card-img">
                            </div>
                            <div class="p-4 d-flex flex-column flex-1">
                                <h5 class="fw-bold mb-2">O/L Mathematics (Grade 11)</h5>
                                <div class="d-flex align-items-center mb-3">
                                    <img src="https://placehold.co/30x30/047648/ffffff?text=KS" alt="Teacher" class="rounded-circle me-2">
                                    <span class="text-muted small">Mr. K. Silva</span>
                                </div>
                                <ul class="list-unstyled text-muted small mb-4">
                                    <li class="mb-1"><i class="bi bi-clock me-2"></i>Wed, 03:30 PM - 05:30 PM</li>
                                    <li><i class="bi bi-geo-alt me-2"></i>Hall D</li>
                                </ul>
                                <div class="mt-auto pt-3 border-top d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-dark fs-5">Rs. 1500<span class="text-muted small fs-6">/mo</span></span>
                                    <button class="btn btn-outline-brand py-1 px-3 rounded-pill small fw-bold">Enroll</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Course Item 4 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="dash-card">
                            <div class="dash-card-img-wrapper">
                                <span class="dash-badge badge-should">A/L COMMERCE</span>
                                <img src="https://placehold.co/400x250/1e2532/ffffff?text=Accounting" alt="Accounting" class="dash-card-img">
                            </div>
                            <div class="p-4 d-flex flex-column flex-1">
                                <h5 class="fw-bold mb-2">A/L Accounting (2026)</h5>
                                <div class="d-flex align-items-center mb-3">
                                    <img src="https://placehold.co/30x30/047648/ffffff?text=RP" alt="Teacher" class="rounded-circle me-2">
                                    <span class="text-muted small">Mr. R. Peiris</span>
                                </div>
                                <ul class="list-unstyled text-muted small mb-4">
                                    <li class="mb-1"><i class="bi bi-clock me-2"></i>Sat, 02:00 PM - 06:00 PM</li>
                                    <li><i class="bi bi-geo-alt me-2"></i>Hall C</li>
                                </ul>
                                <div class="mt-auto pt-3 border-top d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-dark fs-5">Rs. 2500<span class="text-muted small fs-6">/mo</span></span>
                                    <button class="btn btn-outline-brand py-1 px-3 rounded-pill small fw-bold">Enroll</button>
                                </div>
                            </div>
                        </div>
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