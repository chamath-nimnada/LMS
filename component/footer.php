<footer class="bg-dark-custom text-white py-4 mt-5">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
        <div class="mb-3 mb-md-0">
            <h5 class="text-brand fw-bold mb-1">AcademiaPro</h5>
            <small class="text-secondary">© 2024 AcademiaPro. All rights reserved. Professional Excellence in Education.</small>
        </div>
        <ul class="nav">
            <li class="nav-item"><a href="#" class="nav-link text-secondary px-2">Contact Us</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-secondary px-2">Privacy Policy</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-secondary px-2">Terms of Service</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-secondary px-2">FAQ</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-secondary px-2">Career Support</a></li>
        </ul>
    </div>
</footer>

<script>
    (function() {
        if (typeof lottie === "undefined") return;

        const hero = document.querySelector(".hero-sec");
        const imgLayer = document.querySelector(".hero-image-layer");
        const maskHost = document.getElementById("lottie-mask-source");
        const outCanvas = document.getElementById("hero-mask-canvas");

        if (!hero || !imgLayer || !maskHost || !outCanvas) return;

        const outCtx = outCanvas.getContext("2d");
        const heroImg = new Image();
        let imgReady = false;
        let firstPaintDone = false;

        const bg = getComputedStyle(imgLayer).backgroundImage;
        const match = bg && bg.match(/url\(["']?(.*?)["']?\)/);
        if (!match || !match[1]) return;

        heroImg.onload = function() {
            imgReady = true;
        };
        heroImg.src = match[1];

        lottie.loadAnimation({
            container: maskHost,
            renderer: "canvas",
            loop: true,
            autoplay: true,
            path: "animation/background-grey-wave.json",
            rendererSettings: {
                preserveAspectRatio: "xMidYMid slice",
                clearCanvas: true
            }
        });

        function drawCover(ctx, img, w, h) {
            const ir = img.naturalWidth / img.naturalHeight;
            const cr = w / h;
            let sw, sh, sx, sy;

            if (ir > cr) {
                sh = img.naturalHeight;
                sw = sh * cr;
                sx = (img.naturalWidth - sw) / 2;
                sy = 0;
            } else {
                sw = img.naturalWidth;
                sh = sw / cr;
                sx = 0;
                sy = (img.naturalHeight - sh) / 2;
            }

            ctx.drawImage(img, sx, sy, sw, sh, 0, 0, w, h);
        }

        function resizeIfNeeded() {
            const dpr = window.devicePixelRatio || 1;
            const w = hero.clientWidth;
            const h = hero.clientHeight;
            const rw = Math.max(1, Math.floor(w * dpr));
            const rh = Math.max(1, Math.floor(h * dpr));

            if (outCanvas.width !== rw || outCanvas.height !== rh) {
                outCanvas.width = rw;
                outCanvas.height = rh;
                outCanvas.style.width = w + "px";
                outCanvas.style.height = h + "px";
                outCtx.setTransform(dpr, 0, 0, dpr, 0, 0);
            }

            return {
                w,
                h
            };
        }

        function render() {
            const lottieCanvas = maskHost.querySelector("canvas");
            const size = resizeIfNeeded();

            if (lottieCanvas && imgReady) {
                outCtx.clearRect(0, 0, size.w, size.h);

                outCtx.drawImage(lottieCanvas, 0, 0, size.w, size.h);
                outCtx.globalCompositeOperation = "source-in";
                drawCover(outCtx, heroImg, size.w, size.h);
                outCtx.globalCompositeOperation = "source-over";

                if (!firstPaintDone) {
                    outCanvas.style.opacity = "1";
                    imgLayer.style.opacity = "0";
                    firstPaintDone = true;
                }
            }

            requestAnimationFrame(render);
        }

        window.addEventListener("resize", resizeIfNeeded);
        render();
    })();
</script>