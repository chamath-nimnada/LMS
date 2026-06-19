<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment History | ExcelInstitute</title>
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
                    <h5 class="mb-0 fw-bold ms-2 d-none d-md-block">Billing & Payments</h5>
                </div>
                <div class="topbar-actions">
                    <button class="btn-icon" title="Logout">
                        <i class="bi bi-box-arrow-right"></i>
                    </button>
                </div>
            </header>

            <div class="dashboard-content">
                <div class="mb-4">
                    <h2 class="fw-bold mb-1">Payment History</h2>
                    <p class="text-muted">Track your class fees, download receipts, and view upcoming dues.</p>
                </div>

                <div class="row g-4 mb-4">
                    <div class="col-md-4">
                        <div class="bg-white p-4 rounded-4 border shadow-sm h-100 d-flex align-items-center gap-3">
                            <div class="bg-brand text-white rounded-circle d-flex align-items-center justify-content-center shadow-sm" style="width: 50px; height: 50px;">
                                <i class="bi bi-wallet2 fs-4"></i>
                            </div>
                            <div>
                                <p class="text-muted small mb-0 fw-medium">Total Paid (This Year)</p>
                                <h4 class="fw-bold mb-0">Rs. 32,500</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-white p-4 rounded-4 border shadow-sm h-100 d-flex align-items-center gap-3 border-start border-4" style="border-start-color: #d9534f !important;">
                            <div class="bg-danger bg-opacity-10 text-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="bi bi-exclamation-circle fs-4"></i>
                            </div>
                            <div>
                                <p class="text-muted small mb-0 fw-medium">Next Payment Due</p>
                                <h4 class="fw-bold mb-0">Rs. 4,000</h4>
                                <small class="text-danger">Due: Nov 05, 2024</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-4 border shadow-sm overflow-hidden mb-5">
                    <div class="p-4 border-bottom d-flex justify-content-between align-items-center">
                        <h5 class="fw-bold mb-0">Recent Transactions</h5>
                        <button class="btn btn-outline-brand btn-sm px-3 rounded-pill fw-medium"><i class="bi bi-download me-1"></i> Download All</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th class="text-muted small fw-medium py-3 px-4">Transaction ID</th>
                                    <th class="text-muted small fw-medium py-3">Date</th>
                                    <th class="text-muted small fw-medium py-3">Description</th>
                                    <th class="text-muted small fw-medium py-3">Amount</th>
                                    <th class="text-muted small fw-medium py-3">Status</th>
                                    <th class="text-muted small fw-medium py-3 text-end px-4">Receipt</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-4 fw-medium">#TRX-98214</td>
                                    <td class="text-muted small">Oct 02, 2024</td>
                                    <td>
                                        <p class="mb-0 fw-medium text-dark">A/L Chemistry - October Fee</p>
                                        <small class="text-muted">Dr. S. Perera</small>
                                    </td>
                                    <td class="fw-bold">Rs. 2,500</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success px-2 py-1 rounded-pill">Paid</span></td>
                                    <td class="text-end px-4">
                                        <button class="btn btn-sm btn-light text-brand rounded-circle border" title="Download Receipt"><i class="bi bi-file-earmark-arrow-down"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 fw-medium">#TRX-97452</td>
                                    <td class="text-muted small">Oct 01, 2024</td>
                                    <td>
                                        <p class="mb-0 fw-medium text-dark">O/L Mathematics - October Fee</p>
                                        <small class="text-muted">Mr. K. Silva</small>
                                    </td>
                                    <td class="fw-bold">Rs. 1,500</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success px-2 py-1 rounded-pill">Paid</span></td>
                                    <td class="text-end px-4">
                                        <button class="btn btn-sm btn-light text-brand rounded-circle border" title="Download Receipt"><i class="bi bi-file-earmark-arrow-down"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 fw-medium">#TRX-89321</td>
                                    <td class="text-muted small">Sep 05, 2024</td>
                                    <td>
                                        <p class="mb-0 fw-medium text-dark">A/L Chemistry - September Fee</p>
                                        <small class="text-muted">Dr. S. Perera</small>
                                    </td>
                                    <td class="fw-bold">Rs. 2,500</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success px-2 py-1 rounded-pill">Paid</span></td>
                                    <td class="text-end px-4">
                                        <button class="btn btn-sm btn-light text-brand rounded-circle border" title="Download Receipt"><i class="bi bi-file-earmark-arrow-down"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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