<?php $pageTitle = "Dashboard Grafici"; include('header.php'); ?>

<div class="container py-5">
    <h2 class="mb-5 text-center fw-bold" data-aos="fade-down">Dashboard Professionale</h2>

    <div class="row g-4">
        <!-- Grafico Competenze -->
        <div class="col-md-6" data-aos="zoom-in">
            <div class="card p-4 shadow-sm">
                <h5 class="mb-4">Le mie Competenze</h5>
                <canvas id="skillsChart"></canvas>
            </div>
        </div>

        <!-- Grafico Distribuzione Ore -->
        <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="card p-4 shadow-sm">
                <h5 class="mb-4">Distribuzione Studio Settimanale</h5>
                <canvas id="hoursChart"></canvas>
            </div>
        </div>

        <!-- S-Curve PCTO -->
        <div class="col-12" data-aos="fade-up">
            <div class="card p-4 shadow-sm">
                <h5 class="mb-4">S-Curve: Avanzamento PCTO (Pianificato vs Reale)</h5>
                <canvas id="scurveChart" style="max-height: 300px;"></canvas>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Grafico Competenze (Radar)
    new Chart(document.getElementById('skillsChart'), {
        type: 'radar',
        data: {
            labels: ['HTML/CSS', 'PHP', 'JavaScript', 'Database', 'Reti', 'Sistemi'],
            datasets: [{
                label: 'Livello',
                data: [90, 75, 70, 80, 65, 70],
                backgroundColor: 'rgba(13, 110, 253, 0.2)',
                borderColor: '#0d6efd'
            }]
        }
    });

    // Grafico Ore (Doughnut)
    new Chart(document.getElementById('hoursChart'), {
        type: 'doughnut',
        data: {
            labels: ['Materie Tecniche', 'Materie Umanistiche', 'Progetti Personali'],
            datasets: [{
                data: [50, 30, 20],
                backgroundColor: ['#0d6efd', '#6c757d', '#0dcaf0']
            }]
        }
    });

    // S-Curve (Line)
    new Chart(document.getElementById('scurveChart'), {
        type: 'line',
        data: {
            labels: ['Sett 1', 'Sett 2', 'Sett 3', 'Sett 4', 'Sett 5', 'Sett 6', 'Sett 7', 'Sett 8'],
            datasets: [{
                label: 'Pianificato',
                data: [5, 15, 30, 50, 70, 85, 95, 100],
                borderColor: '#6c757d',
                fill: false
            }, {
                label: 'Reale',
                data: [0, 10, 25, 40, 65, 80, 90, 100],
                borderColor: '#0d6efd',
                fill: true,
                backgroundColor: 'rgba(13, 110, 253, 0.1)'
            }]
        }
    });
});
</script>

<?php include('footer.php'); ?>