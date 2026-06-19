<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Management | ExcelInstitute</title>
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
                        <input type="text" class="search-input" placeholder="Search courses...">
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

                <!-- Page Header & Action Button -->
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
                    <div>
                        <h2 class="fw-bold mb-1">Course Management</h2>
                        <p class="text-muted mb-0">Create, edit, and manage your published courses and drafts.</p>
                    </div>
                    <div>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-brand px-4 py-2 fw-bold rounded-pill shadow-sm" data-bs-toggle="modal" data-bs-target="#createCourseModal">
                            <i class="bi bi-plus-lg me-2"></i>Create New Course
                        </button>
                    </div>
                </div>

                <!-- Filters & Sorting -->
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3 border-bottom pb-3">
                    <!-- Tabs -->
                    <div class="bg-white border p-1 rounded-pill d-inline-flex">
                        <button class="btn btn-sm btn-brand rounded-pill px-4 fw-medium">All Courses</button>
                        <button class="btn btn-sm text-muted rounded-pill px-4 fw-medium bg-transparent border-0">Published</button>
                        <button class="btn btn-sm text-muted rounded-pill px-4 fw-medium bg-transparent border-0">Drafts</button>
                    </div>

                    <!-- Sort -->
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-sort-down text-muted"></i>
                        <span class="text-muted small fw-medium text-nowrap">Sort by:</span>
                        <select class="form-select form-select-sm border-0 bg-transparent fw-bold w-auto cursor-pointer shadow-none">
                            <option value="newest" selected>Newest First</option>
                            <option value="oldest">Oldest First</option>
                            <option value="popular">Most Popular</option>
                        </select>
                    </div>
                </div>

                <!-- Course Cards Grid -->
                <div class="row g-4 mb-5">

                    <!-- Course 1: Published -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="dash-card border shadow-sm">
                            <div class="position-relative">
                                <span class="badge bg-white text-dark position-absolute top-0 end-0 m-3 shadow-sm rounded-pill px-3 py-2 fw-bold">
                                    <span class="text-success me-1">●</span> Published
                                </span>
                                <img src="https://placehold.co/600x300/047648/ffffff?text=A/L+Physics" alt="Physics Course" class="dash-card-img" style="height: 180px;">
                            </div>
                            <div class="p-4 d-flex flex-column flex-1">
                                <h4 class="fw-bold mb-2">Advanced Physics A/L Masterclass</h4>
                                <p class="text-muted small mb-4 line-clamp-2">Complete curriculum covering mechanics to quantum physics. Intensive past paper discussions included.</p>

                                <div class="bg-light rounded-3 p-3 d-flex justify-content-between mb-4 mt-auto border">
                                    <div>
                                        <div class="text-muted small fw-medium mb-1"><i class="bi bi-people me-1"></i> Students</div>
                                        <div class="fw-bold text-dark">1,240</div>
                                    </div>
                                    <div class="border-start ps-3">
                                        <div class="text-muted small fw-medium mb-1"><i class="bi bi-cash me-1"></i> Earnings</div>
                                        <div class="fw-bold text-dark">Rs. 850,000</div>
                                    </div>
                                </div>

                                <div class="d-flex gap-2">
                                    <button class="btn btn-outline-secondary flex-grow-1 fw-medium rounded-pill border"><i class="bi bi-pencil-square me-1"></i> Edit Course</button>
                                    <button class="btn btn-outline-secondary flex-grow-1 fw-medium rounded-pill border">Lessons</button>
                                    <button class="btn btn-outline-secondary px-3 fw-medium rounded-pill border"><i class="bi bi-bar-chart-fill"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Course 2: Published -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="dash-card border shadow-sm">
                            <div class="position-relative">
                                <span class="badge bg-white text-dark position-absolute top-0 end-0 m-3 shadow-sm rounded-pill px-3 py-2 fw-bold">
                                    <span class="text-success me-1">●</span> Published
                                </span>
                                <img src="https://placehold.co/600x300/1e2532/ffffff?text=O/L+Mathematics" alt="Math Course" class="dash-card-img" style="height: 180px;">
                            </div>
                            <div class="p-4 d-flex flex-column flex-1">
                                <h4 class="fw-bold mb-2">O/L Mathematics Revision</h4>
                                <p class="text-muted small mb-4 line-clamp-2">Intensive past paper discussion and core concepts breakdown for Grade 11 students.</p>

                                <div class="bg-light rounded-3 p-3 d-flex justify-content-between mb-4 mt-auto border">
                                    <div>
                                        <div class="text-muted small fw-medium mb-1"><i class="bi bi-people me-1"></i> Students</div>
                                        <div class="fw-bold text-dark">850</div>
                                    </div>
                                    <div class="border-start ps-3">
                                        <div class="text-muted small fw-medium mb-1"><i class="bi bi-cash me-1"></i> Earnings</div>
                                        <div class="fw-bold text-dark">Rs. 420,000</div>
                                    </div>
                                </div>

                                <div class="d-flex gap-2">
                                    <button class="btn btn-outline-secondary flex-grow-1 fw-medium rounded-pill border"><i class="bi bi-pencil-square me-1"></i> Edit Course</button>
                                    <button class="btn btn-outline-secondary flex-grow-1 fw-medium rounded-pill border">Lessons</button>
                                    <button class="btn btn-outline-secondary px-3 fw-medium rounded-pill border"><i class="bi bi-bar-chart-fill"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Course 3: Draft -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="dash-card border shadow-sm bg-light">
                            <div class="position-relative d-flex align-items-center justify-content-center bg-secondary bg-opacity-10" style="height: 180px;">
                                <span class="badge bg-white text-dark position-absolute top-0 end-0 m-3 shadow-sm rounded-pill px-3 py-2 fw-bold">
                                    <span class="text-warning me-1">●</span> Draft
                                </span>
                                <i class="bi bi-image text-muted opacity-50" style="font-size: 3rem;"></i>
                            </div>
                            <div class="p-4 d-flex flex-column flex-1 bg-white">
                                <h4 class="fw-bold mb-2">Introduction to Organic Chemistry</h4>
                                <p class="text-muted small mb-4 font-italic">Course content is currently being drafted. No lessons uploaded yet.</p>

                                <div class="mt-auto mb-4">
                                    <div class="d-flex justify-content-between align-items-center small fw-bold mb-2">
                                        <span class="text-muted">Setup Progress</span>
                                        <span class="text-dark">30%</span>
                                    </div>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 30%;"></div>
                                    </div>
                                </div>

                                <button class="btn text-warning bg-warning bg-opacity-10 border border-warning w-100 fw-bold rounded-pill py-2">Continue Editing</button>
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

    <!-- Create Course Modal -->
    <div class="modal fade" id="createCourseModal" tabindex="-1" aria-labelledby="createCourseModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-4 border-0 shadow">
                <div class="modal-header border-bottom-0 pb-0 mt-2 mx-2">
                    <h5 class="modal-title fw-bold" id="createCourseModalLabel">Create New Course</h5>
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form action="#" method="POST" enctype="multipart/form-data" class="row g-3">
                        <div class="col-12">
                            <label class="form-label fw-medium text-dark small">Course Title</label>
                            <input type="text" class="form-control" placeholder="e.g. Advanced Physics A/L Masterclass" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-medium text-dark small">Stream / Category</label>
                            <select class="form-select" required>
                                <option value="" selected disabled>Select Category</option>
                                <option value="al-science">A/L Science</option>
                                <option value="al-commerce">A/L Commerce</option>
                                <option value="al-arts">A/L Arts</option>
                                <option value="ol">O/L Classes</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-medium text-dark small">Monthly Fee (Rs.)</label>
                            <input type="number" class="form-control" placeholder="e.g. 2500" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-medium text-dark small">Course Description</label>
                            <textarea class="form-control" rows="3" placeholder="Briefly describe what students will learn..." required></textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-medium text-dark small">Course Thumbnail Image</label>
                            <input class="form-control" type="file" accept="image/*" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer border-top-0 pt-0 pe-4 pb-4">
                    <button type="button" class="btn btn-light rounded-pill px-4 fw-medium border" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-brand rounded-pill px-4 fw-medium">Create Course Draft</button>
                </div>
            </div>
        </div>
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