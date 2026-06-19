<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timetables | ExcelInstitute</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>

<body>

    <?php include 'component/header.php'; ?>

    <main class="py-5">
        <div class="container">
            <!-- Header Section -->
            <div class="text-center mb-5 mx-auto max-w-700">
                <h1 class="display-6 fw-bold text-dark mb-3">Class Schedules</h1>
                <p class="text-muted mb-0">Select your stream below to view the latest timetables for the 2026 academic year. Arrive 15 minutes before the scheduled time.</p>
            </div>

            <!-- Interactive Tabs -->
            <ul class="nav nav-pills justify-content-center mb-5 gap-3 glass-card d-inline-flex p-2 rounded-pill mx-auto shadow-sm" id="pills-tab" role="tablist" style="display: flex !important;">
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-ol-tab" data-bs-toggle="pill" data-bs-target="#pills-ol" type="button" role="tab">O/L Classes</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-al-science-tab" data-bs-toggle="pill" data-bs-target="#pills-al-science" type="button" role="tab">A/L Science</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-al-commerce-tab" data-bs-toggle="pill" data-bs-target="#pills-al-commerce" type="button" role="tab">A/L Commerce</button>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content" id="pills-tabContent">

                <!-- A/L Science Tab -->
                <div class="tab-pane fade show active" id="pills-al-science" role="tabpanel">
                    <div class="row g-4">
                        <!-- Saturday -->
                        <div class="col-md-6">
                            <h4 class="fw-bold mb-4 text-dark glass-card d-inline-block px-4 py-2 rounded-pill shadow-sm">Saturday</h4>

                            <div class="glass-card schedule-card p-4 rounded-3 shadow-sm mb-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge bg-brand">08:00 AM - 12:00 PM</span>
                                    <span class="text-muted small"><i class="bi bi-geo-alt-fill me-1"></i>Main Hall A</span>
                                </div>
                                <h5 class="fw-bold mb-1">A/L Chemistry (Theory)</h5>
                                <p class="text-muted mb-0 small"><img src="https://placehold.co/30x30/0d6efd/ffffff?text=SP" class="rounded-circle me-2" alt="Teacher"> Dr. S. Perera</p>
                            </div>

                            <div class="glass-card schedule-card p-4 rounded-3 shadow-sm">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge bg-brand">01:00 PM - 05:00 PM</span>
                                    <span class="text-muted small"><i class="bi bi-geo-alt-fill me-1"></i>Main Hall B</span>
                                </div>
                                <h5 class="fw-bold mb-1">A/L Physics (Revision)</h5>
                                <p class="text-muted mb-0 small"><img src="https://placehold.co/30x30/0d6efd/ffffff?text=JD" class="rounded-circle me-2" alt="Teacher"> Eng. J. Dissanayake</p>
                            </div>
                        </div>

                        <!-- Sunday -->
                        <div class="col-md-6">
                            <h4 class="fw-bold mb-4 text-dark glass-card d-inline-block px-4 py-2 rounded-pill shadow-sm">Sunday</h4>

                            <div class="glass-card schedule-card p-4 rounded-3 shadow-sm mb-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge bg-brand">08:00 AM - 01:00 PM</span>
                                    <span class="text-muted small"><i class="bi bi-geo-alt-fill me-1"></i>Auditorium</span>
                                </div>
                                <h5 class="fw-bold mb-1">A/L Biology (Paper Class)</h5>
                                <p class="text-muted mb-0 small"><img src="https://placehold.co/30x30/0d6efd/ffffff?text=AF" class="rounded-circle me-2" alt="Teacher"> Prof. A. Fernando</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- A/L Commerce Tab -->
                <div class="tab-pane fade" id="pills-al-commerce" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <h4 class="fw-bold mb-4 text-dark glass-card d-inline-block px-4 py-2 rounded-pill shadow-sm">Saturday</h4>
                            <div class="glass-card schedule-card p-4 rounded-3 shadow-sm mb-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge bg-brand">02:00 PM - 06:00 PM</span>
                                    <span class="text-muted small"><i class="bi bi-geo-alt-fill me-1"></i>Hall C</span>
                                </div>
                                <h5 class="fw-bold mb-1">A/L Accounting</h5>
                                <p class="text-muted mb-0 small"><img src="https://placehold.co/30x30/0d6efd/ffffff?text=RP" class="rounded-circle me-2" alt="Teacher"> Mr. R. Peiris</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- O/L Classes Tab -->
                <div class="tab-pane fade" id="pills-ol" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <h4 class="fw-bold mb-4 text-dark glass-card d-inline-block px-4 py-2 rounded-pill shadow-sm">Weekdays</h4>
                            <div class="glass-card schedule-card p-4 rounded-3 shadow-sm mb-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge bg-brand">Wednesday 03:30 PM - 05:30 PM</span>
                                    <span class="text-muted small"><i class="bi bi-geo-alt-fill me-1"></i>Hall D</span>
                                </div>
                                <h5 class="fw-bold mb-1">O/L Mathematics</h5>
                                <p class="text-muted mb-0 small"><img src="https://placehold.co/30x30/0d6efd/ffffff?text=KS" class="rounded-circle me-2" alt="Teacher"> Mr. K. Silva</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <?php include 'component/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>