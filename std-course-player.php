<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Player | ExcelInstitute</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>

    <div class="dashboard-layout">

        <main class="dashboard-main w-100">
            <header class="dashboard-topbar">
                <div class="d-flex align-items-center flex-1 gap-3">
                    <a href="std-course-category.php" class="btn btn-outline-secondary px-3 py-2 rounded-2">
                        <i class="bi bi-chevron-left fs-5"></i>
                    </a>

                    <nav aria-label="breadcrumb" class="d-none d-md-block ms-3 mt-3">
                        <ol class="breadcrumb mb-0 small fw-medium">
                            <li class="breadcrumb-item"><a href="std-course-category.php" class="text-muted text-decoration-none">Courses</a></li>
                            <li class="breadcrumb-item"><a href="#" class="text-muted text-decoration-none">A/L Science</a></li>
                            <li class="breadcrumb-item active text-brand" aria-current="page">Chemistry Theory</li>
                        </ol>
                    </nav>
                </div>
                <div class="topbar-actions">
                    <button class="btn-icon" title="Logout">
                        <i class="bi bi-box-arrow-right fs-4"></i>
                    </button>
                </div>
            </header>

            <div class="dashboard-content pt-4">

                <div class="row g-4 justify-content-center">
                    <div class="col-12 col-xl-11">

                        <div class="video-container mb-4">
                            <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Course Video Player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>

                        <div class="d-flex justify-content-between align-items-start mb-4">
                            <div>
                                <h3 class="fw-bold mb-1">Module 1: Atomic Structure & Bonding</h3>
                                <p class="text-muted small mb-0"><img src="https://placehold.co/24x24/047648/ffffff?text=SP" class="rounded-circle me-2" alt="Teacher"> Dr. S. Perera • A/L Chemistry (2026)</p>
                            </div>
                            <button class="btn btn-outline-brand rounded-pill px-4"><i class="bi bi-check2-circle me-2"></i>Mark as Complete</button>
                        </div>

                        <ul class="nav nav-tabs border-bottom-0 mb-4 gap-2" id="courseTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active rounded-pill px-4 bg-white border text-dark" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab">Overview</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-pill px-4 bg-white border text-dark" id="materials-tab" data-bs-toggle="tab" data-bs-target="#materials" type="button" role="tab">Study Materials</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-pill px-4 bg-white border text-dark" id="qa-tab" data-bs-toggle="tab" data-bs-target="#qa" type="button" role="tab">Q&A</button>
                            </li>
                        </ul>

                        <div class="tab-content bg-white p-4 rounded-4 border shadow-sm mb-5" id="courseTabsContent">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel">
                                <h5 class="fw-bold mb-3">About this Module</h5>
                                <p class="text-muted mb-4">This module covers the fundamental concepts of atomic structure, isotopes, and electron configurations. It provides the groundwork required for advanced physical chemistry topics. Make sure to download the tutorial sheets from the materials tab before starting the video.</p>

                                <h6 class="fw-bold mb-2">Learning Outcomes:</h6>
                                <ul class="text-muted small mb-0">
                                    <li class="mb-2">Understand the Bohr model and quantum mechanical model of the atom.</li>
                                    <li class="mb-2">Write electron configurations for elements and ions.</li>
                                    <li>Explain trends in ionization energy and electron affinity.</li>
                                </ul>
                            </div>

                            <div class="tab-pane fade" id="materials" role="tabpanel">
                                <h5 class="fw-bold mb-3">Downloadable Resources</h5>
                                <p class="text-muted small mb-4">Click the button to download PDFs and past paper questions related to this lesson.</p>

                                <div class="resource-item">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-danger bg-opacity-10 text-danger rounded p-2 me-3 fs-4">
                                            <i class="bi bi-file-earmark-pdf-fill"></i>
                                        </div>
                                        <div>
                                            <h6 class="fw-bold mb-1">Module 1 - Full Note</h6>
                                            <span class="text-muted small">PDF • 2.4 MB</span>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-outline-brand small py-1 px-3"><i class="bi bi-download me-1"></i> Download</a>
                                </div>

                                <div class="resource-item">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-danger bg-opacity-10 text-danger rounded p-2 me-3 fs-4">
                                            <i class="bi bi-file-earmark-pdf-fill"></i>
                                        </div>
                                        <div>
                                            <h6 class="fw-bold mb-1">Past Paper Questions (2015-2023)</h6>
                                            <span class="text-muted small">PDF • 1.1 MB</span>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-outline-brand small py-1 px-3"><i class="bi bi-download me-1"></i> Download</a>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="qa" role="tabpanel">
                                <h5 class="fw-bold mb-3">Ask the Teacher</h5>
                                <div class="mb-4">
                                    <textarea class="form-control mb-2" rows="3" placeholder="Type your question here..."></textarea>
                                    <button class="btn btn-brand w-100 py-2 fw-medium">Submit Question</button>
                                </div>
                                <hr>
                                <div class="mt-4">
                                    <p class="text-muted small text-center">No questions asked yet for this module.</p>
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
        // Bootstrap Tabs logic to handle active styling
        const tabLinks = document.querySelectorAll('#courseTabs .nav-link');
        tabLinks.forEach(link => {
            link.addEventListener('click', function() {
                tabLinks.forEach(t => {
                    t.classList.remove('bg-brand', 'text-white');
                    t.classList.add('bg-white', 'text-dark');
                });
                this.classList.remove('bg-white', 'text-dark');
                this.classList.add('bg-brand', 'text-white');
            });
        });

        // Initialize first tab with primary colors
        const overviewTab = document.getElementById('overview-tab');
        if (overviewTab) {
            overviewTab.classList.add('bg-brand', 'text-white');
            overviewTab.classList.remove('bg-white', 'text-dark');
        }
    </script>
</body>

</html>