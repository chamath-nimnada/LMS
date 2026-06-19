<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | ExcelInstitute</title>
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
            <div class="glass-card auth-card p-5 rounded-4 shadow-lg text-center">

                <div class="mb-4">
                    <div class="bg-brand text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="bi bi-person-fill fs-2"></i>
                    </div>
                    <h3 class="fw-bold text-dark mb-1">Student Login</h3>
                    <p class="text-muted small">Welcome back! Please enter your details.</p>
                </div>

                <form action="#" method="POST" class="text-start">
                    <div class="mb-3">
                        <label for="studentId" class="form-label fw-medium text-dark small">Student ID or Email</label>
                        <input type="text" class="form-control form-control-glass" id="studentId" placeholder="EXC-12345" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-medium text-dark small">Password</label>
                        <input type="password" class="form-control form-control-glass" id="password" placeholder="••••••••" required>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-4 small">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label text-muted" for="rememberMe">Remember me</label>
                        </div>
                        <a href="#" class="text-brand text-decoration-none fw-medium">Forgot password?</a>
                    </div>

                    <button type="submit" class="btn btn-brand w-100 py-2 rounded-pill fw-bold mb-3">Sign In</button>

                    <p class="text-center text-muted small mb-0">
                        Don't have an account? <a href="register.php" class="text-brand fw-bold text-decoration-none">Register here</a>
                    </p>
                </form>

            </div>
        </div>
    </main>

    <?php include 'component/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>