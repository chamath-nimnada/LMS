<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Classes | ExcelInstitute</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>

<body>

    <!-- Animated Wave Background -->
    <div class="lottie-bg">
        <lottie-player src="assets/bg-wave.json" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay></lottie-player>
    </div>

    <?php include 'component/header.php'; ?>

    <main class="py-5">
        <div class="container">
            <!-- Header Section -->
            <div class="text-center mb-5 mx-auto max-w-700">
                <h1 class="display-6 fw-bold text-dark mb-3">Browse Classes</h1>
                <p class="text-muted mb-0">Find the perfect class to achieve your academic goals. Filter by stream or your preferred teacher to view available schedules.</p>
            </div>

            <!-- Filter Section -->
            <div class="glass-card p-4 rounded-4 shadow-sm mb-5 mx-auto" style="max-width: 900px;">
                <form action="#" method="GET" class="row g-3 align-items-end">
                    <div class="col-md-5">
                        <label for="streamFilter" class="form-label fw-medium text-dark small mb-1">Filter by Stream</label>
                        <select class="form-select form-control-glass" id="streamFilter" name="stream">
                            <option value="all" selected>All Streams</option>
                            <option value="al-science">A/L Science</option>
                            <option value="al-commerce">A/L Commerce</option>
                            <option value="al-arts">A/L Arts</option>
                            <option value="ol">O/L Classes</option>
                        </select>
                    </div>

                    <div class="col-md-5">
                        <label for="teacherFilter" class="form-label fw-medium text-dark small mb-1">Filter by Teacher</label>
                        <select class="form-select form-control-glass" id="teacherFilter" name="teacher">
                            <option value="all" selected>All Teachers</option>
                            <option value="dr-perera">Dr. S. Perera (Chemistry)</option>
                            <option value="prof-fernando">Prof. A. Fernando (Biology)</option>
                            <option value="mr-silva">Mr. K. Silva (Mathematics)</option>
                            <option value="mr-peiris">Mr. R. Peiris (Accounting)</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <button type="submit" class="btn btn-brand w-100 py-2 rounded-3 fw-bold">Search</button>
                    </div>
                </form>
            </div>

            <!-- Classes Grid -->
            <div class="row g-4">

                <!-- Class Card 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="bento-card glass-card p-4 shadow-sm h-100 border-top border-4" style="border-top-color: var(--brand-color) !important;">
                        <div class="mb-3">
                            <span class="badge bg-brand bg-opacity-10 text-brand px-3 py-2 rounded-pill small fw-bold">A/L Science</span>
                        </div>
                        <h5 class="fw-bold mb-3">A/L Chemistry (2026 Theory)</h5>

                        <div class="d-flex align-items-center mb-4">
                            <img src="https://placehold.co/40x40/0f766e/ffffff?text=SP" alt="Teacher" class="rounded-circle shadow-sm me-3">
                            <div>
                                <p class="mb-0 fw-bold text-dark small">Dr. S. Perera</p>
                                <p class="mb-0 text-muted" style="font-size: 0.8rem;">Ph.D. Colombo</p>
                            </div>
                        </div>

                        <ul class="list-unstyled text-muted small mb-4 mt-auto">
                            <li class="mb-2"><i class="bi bi-calendar-event me-2 text-brand"></i>Saturdays</li>
                            <li class="mb-2"><i class="bi bi-clock me-2 text-brand"></i>08:00 AM - 12:00 PM</li>
                            <li><i class="bi bi-geo-alt me-2 text-brand"></i>Main Hall A</li>
                        </ul>

                        <a href="#" class="btn btn-outline-brand w-100 rounded-pill fw-medium py-2 mt-auto">Enroll Now</a>
                    </div>
                </div>

                <!-- Class Card 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="bento-card glass-card p-4 shadow-sm h-100 border-top border-4" style="border-top-color: var(--brand-color) !important;">
                        <div class="mb-3">
                            <span class="badge bg-brand bg-opacity-10 text-brand px-3 py-2 rounded-pill small fw-bold">A/L Science</span>
                        </div>
                        <h5 class="fw-bold mb-3">A/L Biology (2025 Revision)</h5>

                        <div class="d-flex align-items-center mb-4">
                            <img src="https://placehold.co/40x40/0f766e/ffffff?text=AF" alt="Teacher" class="rounded-circle shadow-sm me-3">
                            <div>
                                <p class="mb-0 fw-bold text-dark small">Prof. A. Fernando</p>
                                <p class="mb-0 text-muted" style="font-size: 0.8rem;">Top Rank Producer</p>
                            </div>
                        </div>

                        <ul class="list-unstyled text-muted small mb-4 mt-auto">
                            <li class="mb-2"><i class="bi bi-calendar-event me-2 text-brand"></i>Sundays</li>
                            <li class="mb-2"><i class="bi bi-clock me-2 text-brand"></i>08:00 AM - 01:00 PM</li>
                            <li><i class="bi bi-geo-alt me-2 text-brand"></i>Auditorium</li>
                        </ul>

                        <a href="#" class="btn btn-outline-brand w-100 rounded-pill fw-medium py-2 mt-auto">Enroll Now</a>
                    </div>
                </div>

                <!-- Class Card 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="bento-card glass-card p-4 shadow-sm h-100 border-top border-4" style="border-top-color: var(--brand-color) !important;">
                        <div class="mb-3">
                            <span class="badge bg-brand bg-opacity-10 text-brand px-3 py-2 rounded-pill small fw-bold">O/L Classes</span>
                        </div>
                        <h5 class="fw-bold mb-3">O/L Mathematics (Grade 11)</h5>

                        <div class="d-flex align-items-center mb-4">
                            <img src="https://placehold.co/40x40/0f766e/ffffff?text=KS" alt="Teacher" class="rounded-circle shadow-sm me-3">
                            <div>
                                <p class="mb-0 fw-bold text-dark small">Mr. K. Silva</p>
                                <p class="mb-0 text-muted" style="font-size: 0.8rem;">Marking Examiner</p>
                            </div>
                        </div>

                        <ul class="list-unstyled text-muted small mb-4 mt-auto">
                            <li class="mb-2"><i class="bi bi-calendar-event me-2 text-brand"></i>Wednesdays</li>
                            <li class="mb-2"><i class="bi bi-clock me-2 text-brand"></i>03:30 PM - 05:30 PM</li>
                            <li><i class="bi bi-geo-alt me-2 text-brand"></i>Hall D</li>
                        </ul>

                        <a href="#" class="btn btn-outline-brand w-100 rounded-pill fw-medium py-2 mt-auto">Enroll Now</a>
                    </div>
                </div>

                <!-- Class Card 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="bento-card glass-card p-4 shadow-sm h-100 border-top border-4" style="border-top-color: var(--brand-color) !important;">
                        <div class="mb-3">
                            <span class="badge bg-brand bg-opacity-10 text-brand px-3 py-2 rounded-pill small fw-bold">A/L Commerce</span>
                        </div>
                        <h5 class="fw-bold mb-3">A/L Accounting (2026 Theory)</h5>

                        <div class="d-flex align-items-center mb-4">
                            <img src="https://placehold.co/40x40/0f766e/ffffff?text=RP" alt="Teacher" class="rounded-circle shadow-sm me-3">
                            <div>
                                <p class="mb-0 fw-bold text-dark small">Mr. R. Peiris</p>
                                <p class="mb-0 text-muted" style="font-size: 0.8rem;">B.Com / CA Sri Lanka</p>
                            </div>
                        </div>

                        <ul class="list-unstyled text-muted small mb-4 mt-auto">
                            <li class="mb-2"><i class="bi bi-calendar-event me-2 text-brand"></i>Saturdays</li>
                            <li class="mb-2"><i class="bi bi-clock me-2 text-brand"></i>02:00 PM - 06:00 PM</li>
                            <li><i class="bi bi-geo-alt me-2 text-brand"></i>Hall C</li>
                        </ul>

                        <a href="#" class="btn btn-outline-brand w-100 rounded-pill fw-medium py-2 mt-auto">Enroll Now</a>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <?php include 'component/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>