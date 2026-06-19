<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | ExcelInstitute</title>
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
        <div class="container d-flex align-items-center justify-content-center min-vh-100">
            <div class="glass-card register-card p-5 rounded-4 shadow-lg text-center">

                <div class="mb-4">
                    <h3 class="fw-bold text-dark mb-1">Join ExcelInstitute</h3>
                    <p class="text-muted small">Register for the 2026 academic year.</p>
                </div>

                <form action="#" method="POST" class="text-start row g-3">

                    <div class="col-md-6">
                        <label for="firstName" class="form-label fw-medium text-dark small">First Name</label>
                        <input type="text" class="form-control form-control-glass" id="firstName" placeholder="John" required>
                    </div>

                    <div class="col-md-6">
                        <label for="lastName" class="form-label fw-medium text-dark small">Last Name</label>
                        <input type="text" class="form-control form-control-glass" id="lastName" placeholder="Doe" required>
                    </div>

                    <div class="col-md-6">
                        <label for="email" class="form-label fw-medium text-dark small">Email Address</label>
                        <input type="email" class="form-control form-control-glass" id="email" placeholder="john@example.com" required>
                    </div>

                    <div class="col-md-6">
                        <label for="phone" class="form-label fw-medium text-dark small">Phone Number</label>
                        <input type="tel" class="form-control form-control-glass" id="phone" placeholder="07X XXX XXXX" required>
                    </div>

                    <div class="col-12">
                        <label for="stream" class="form-label fw-medium text-dark small">Select Stream / Grade</label>
                        <select class="form-select form-control-glass" id="stream" required>
                            <option value="" selected disabled>Choose your stream...</option>
                            <option value="al-science">A/L Science</option>
                            <option value="al-maths">A/L Mathematics</option>
                            <option value="al-commerce">A/L Commerce</option>
                            <option value="al-arts">A/L Arts</option>
                            <option value="ol">O/L (Grade 10/11)</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="regPassword" class="form-label fw-medium text-dark small">Password</label>
                        <input type="password" class="form-control form-control-glass" id="regPassword" placeholder="Create a password" required>
                    </div>

                    <div class="col-md-6">
                        <label for="confirmPassword" class="form-label fw-medium text-dark small">Confirm Password</label>
                        <input type="password" class="form-control form-control-glass" id="confirmPassword" placeholder="Repeat password" required>
                    </div>

                    <div class="col-12 mt-4">
                        <button type="submit" class="btn btn-brand w-100 py-3 rounded-pill fw-bold">Create Account</button>
                    </div>

                    <div class="col-12 text-center mt-3">
                        <p class="text-muted small mb-0">
                            Already have an account? <a href="login.php" class="text-brand fw-bold text-decoration-none">Login here</a>
                        </p>
                    </div>
                </form>

            </div>
        </div>
    </main>

    <?php include 'component/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>