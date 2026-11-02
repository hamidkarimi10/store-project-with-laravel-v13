@section('scripts')
    <script src="{{ asset('admin-assets/assets/app.js') }}"></script>
    <script>
        // Simple line chart without external libs
        const canvas = document.getElementById('salesChart');
        if (canvas) {
            const ctx = canvas.getContext('2d');
            const dpr = window.devicePixelRatio || 1;
            const width = canvas.clientWidth;
            const height = canvas.clientHeight;
            canvas.width = width * dpr;
            canvas.height = height * dpr;
            ctx.scale(dpr, dpr);

            const padding = 18;
            const points = [28, 35, 22, 40, 31, 44, 38, 46, 35, 49, 42, 58];
            const max = Math.max(...points) + 10;
            const min = Math.min(...points) - 10;
            const stepX = (width - padding * 2) / (points.length - 1);

            // gradient fill
            const grad = ctx.createLinearGradient(0, padding, 0, height - padding);
            grad.addColorStop(0, 'rgba(99, 102, 241, 0.5)');
            grad.addColorStop(1, 'rgba(37, 99, 235, 0.05)');

            ctx.beginPath();
            points.forEach((p, i) => {
                const x = padding + i * stepX;
                const y = padding + (1 - (p - min) / (max - min)) * (height - padding * 2);
                if (i === 0) ctx.moveTo(x, y);
                else ctx.lineTo(x, y);
            });
            ctx.lineWidth = 2.2;
            ctx.strokeStyle = '#60a5fa';
            ctx.stroke();

            // fill under line
            ctx.lineTo(width - padding, height - padding);
            ctx.lineTo(padding, height - padding);
            ctx.closePath();
            ctx.fillStyle = grad;
            ctx.fill();
        }
    </script>
@show
