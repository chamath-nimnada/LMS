<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AcademiaPro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>

<body>

    <?php include 'component/nav-bar.php'; ?>

    <main>

        <div class="lottie-bg">
            <lottie-player
                src="animation/background-grey-wave.json"
                background="transparent"
                speed="1"
                style="width: 100%;"
                loop
                autoplay>
            </lottie-player>
        </div>

        <section class="text-center py-5 mt-5 hero-sec">

            <div class="container">
                <h1 class="display-5 fw-bold text-dark mb-3">Empowering the Next Generation of Global Leaders</h1>
                <p class="lead text-muted mx-auto mb-4 max-w-700">
                    Discover professional excellence in education. Rigorous, high-density curriculums designed for the ambitious professional and dedicated scholar.
                </p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="#" class="btn btn-brand px-4 py-2">Browse Courses</a>
                    <a href="#" class="btn btn-outline-brand px-4 py-2 bg-white">Meet Teachers</a>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="fw-bold">Uncompromising Quality, Accessible Scale</h2>
                    <p class="text-muted">We engineer our programs to deliver maximum informational density while maintaining crystal-clear pedagogical hierarchy.</p>
                </div>

                <div class="row g-4">
                    <div class="col-lg-8">
                        <div class="bento-card bento-bg-img border-0">
                            <div class="bento-inner-card shadow-sm">
                                <h5 class="fw-bold">The Mission</h5>
                                <p class="text-muted mb-0 small">To synthesize complex global knowledge into actionable professional frameworks, delivering top-tier educational outcomes to ambitious minds worldwide.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bento-card bg-brand border-0 d-flex justify-content-center align-items-center text-center p-5">
                            <div>
                                <i class="bi bi-mortarboard fs-1 mb-2"></i>
                                <h2 class="fw-bold mb-0">10k+</h2>
                                <p class="mb-0">Active Students</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bento-card d-flex justify-content-center align-items-center text-center p-5">
                            <div>
                                <i class="bi bi-journal-text fs-1 text-info mb-2"></i>
                                <h2 class="fw-bold mb-0">500+</h2>
                                <p class="text-muted mb-0">Rigorous Courses</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="bento-card p-4 flex-row align-items-center">
                            <div class="pe-4 flex-1">
                                <h5 class="fw-bold">Global Network</h5>
                                <p class="text-muted mb-0 small">Our alumni network spans top-tier corporate environments and research institutions globally, forming a powerful matrix of professional excellence.</p>
                            </div>
                            <div class="flex-1">
                                <img src="https://placehold.co/400x300/e2e8f0/a0aec0?text=World+Map" alt="Global Map" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 bg-white">
            <div class="container text-center">
                <h2 class="fw-bold mb-2">Meet Our Expert Teachers</h2>
                <p class="text-muted mb-5">Learn from industry leaders and renowned academics dedicated to your success.</p>

                <div class="row g-4 justify-content-center">
                    <div class="col-md-4">
                        <div class="bento-card p-4 border-0 bg-transparent text-center">
                            <img src="https://placehold.co/150x150/e2e8f0/a0aec0" alt="Sarah Jenkins" class="teacher-img mb-3 shadow-sm">
                            <h5 class="fw-bold mb-1">Dr. Sarah Jenkins</h5>
                            <p class="text-brand small fw-bold mb-0">Data Science</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bento-card p-4 border-0 bg-transparent text-center">
                            <img src="https://placehold.co/150x150/e2e8f0/a0aec0" alt="Marcus Thorne" class="teacher-img mb-3 shadow-sm">
                            <h5 class="fw-bold mb-1">Marcus Thorne</h5>
                            <p class="text-brand small fw-bold mb-0">Global Economics</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bento-card p-4 border-0 bg-transparent text-center">
                            <img src="https://placehold.co/150x150/e2e8f0/a0aec0" alt="Prof. Alan Turing" class="teacher-img mb-3 shadow-sm">
                            <h5 class="fw-bold mb-1">Prof. Alan Turing</h5>
                            <p class="text-brand small fw-bold mb-0">Computer Science</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'component/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>