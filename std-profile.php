<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile | ExcelInstitute</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>

    <div class="dashboard-layout">

        <?php include 'component/std-sidebar.php'; ?>

        <main class="dashboard-main">
            <header class="dashboard-topbar">
                <div class="d-flex align-items-center flex-1 gap-3">
                    <button class="topbar-actions btn-icon" id="toggleSidebarBtn">
                        <i class="bi bi-chevron-left fs-4" id="toggleIcon"></i>
                    </button>
                    <h5 class="mb-0 fw-bold ms-2 d-none d-md-block">Account Settings</h5>
                </div>
                <div class="topbar-actions">
                    <button class="btn-icon" title="Logout">
                        <i class="bi bi-box-arrow-right"></i>
                    </button>
                </div>
            </header>

            <div class="dashboard-content">
                <div class="mb-4">
                    <h2 class="fw-bold mb-1">My Profile</h2>
                    <p class="text-muted">Manage your personal information, contact details, and security settings.</p>
                </div>

                <div class="row g-4 mb-5">

                    <div class="col-lg-4">
                        <div class="bg-white p-4 rounded-4 border shadow-sm text-center h-100">
                            <div class="position-relative d-inline-block mb-3 mt-3">
                                <img src="https://placehold.co/150x150/047648/ffffff?text=AL" alt="Profile Avatar" class="rounded-circle shadow-sm" style="width: 120px; height: 120px; object-fit: cover; border: 4px solid #fff;">
                                <button class="btn btn-sm btn-brand rounded-circle position-absolute bottom-0 end-0 shadow" style="width: 32px; height: 32px; padding: 0;">
                                    <i class="bi bi-camera-fill"></i>
                                </button>
                            </div>
                            <h4 class="fw-bold mb-1">Alex Fernando</h4>
                            <p class="text-brand fw-medium small mb-3">Student ID: EXC-26045</p>

                            <hr class="text-muted">

                            <ul class="list-unstyled text-start text-muted small mt-4 mb-0">
                                <li class="mb-3 d-flex align-items-center"><i class="bi bi-mortarboard fs-5 me-3 text-brand"></i> A/L Science Stream (2026)</li>
                                <li class="mb-3 d-flex align-items-center"><i class="bi bi-envelope fs-5 me-3 text-brand"></i> alex.f@example.com</li>
                                <li class="mb-3 d-flex align-items-center"><i class="bi bi-telephone fs-5 me-3 text-brand"></i> +94 77 123 4567</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="bg-white p-4 rounded-4 border shadow-sm mb-4">
                            <h5 class="fw-bold mb-4">Personal Details</h5>
                            <form action="#" method="POST" class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-medium text-dark small">First Name</label>
                                    <input type="text" class="form-control form-control-glass" value="Alex">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-medium text-dark small">Last Name</label>
                                    <input type="text" class="form-control form-control-glass" value="Fernando">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-medium text-dark small">Email Address</label>
                                    <input type="email" class="form-control form-control-glass" value="alex.f@example.com">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-medium text-dark small">Phone Number</label>
                                    <input type="tel" class="form-control form-control-glass" value="+94771234567">
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-medium text-dark small">Home Address</label>
                                    <input type="text" class="form-control form-control-glass" value="123/A, School Lane, Colombo 03">
                                </div>
                                <div class="col-12 mt-4 text-end">
                                    <button type="submit" class="btn btn-brand px-4 py-2 rounded-pill fw-medium">Save Changes</button>
                                </div>
                            </form>
                        </div>

                        <div class="bg-white p-4 rounded-4 border shadow-sm">
                            <h5 class="fw-bold mb-4">Change Password</h5>
                            <form action="#" method="POST" class="row g-3">
                                <div class="col-md-12">
                                    <label class="form-label fw-medium text-dark small">Current Password</label>
                                    <input type="password" class="form-control form-control-glass" placeholder="Enter current password">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-medium text-dark small">New Password</label>
                                    <input type="password" class="form-control form-control-glass" placeholder="Enter new password">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-medium text-dark small">Confirm New Password</label>
                                    <input type="password" class="form-control form-control-glass" placeholder="Repeat new password">
                                </div>
                                <div class="col-12 mt-4 text-end">
                                    <button type="submit" class="btn btn-outline-brand px-4 py-2 rounded-pill fw-medium">Update Password</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>

            <div class="mt-auto border-top bg-white p-3 text-center text-muted small">
                © 2024 ExcelInstitute. All rights reserved.
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