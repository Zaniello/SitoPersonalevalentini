<?php $pageTitle = "Home"; include('header.php'); ?>

<header class="hero-section text-center">
    <div class="container" data-aos="fade-up">
        <h1 class="display-3 fw-bold">Tommaso Valentini</h1>
        <p class="lead fs-4 text-secondary">Studente di Informatica | Sviluppatore Web</p>
        <div class="mt-4">
            <a href="portfolio.php" class="btn btn-primary btn-lg me-2">Vedi i miei progetti</a>
            <a href="chi-sono.php" class="btn btn-outline-primary btn-lg">Scopri di più</a>
        </div>
    </div>
</header>

<section class="container my-5 py-5">
    <div class="row g-4 text-center">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card p-4 shadow-sm h-100">
                <h3>Esperienza PCTO</h3>
                <p>Scopri il mio percorso nel mondo del lavoro e le competenze acquisite.</p>
                <a href="pcto.php" class="mt-auto text-decoration-none">Leggi di più &rarr;</a>
            </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card p-4 shadow-sm h-100">
                <h3>Formazione</h3>
                <p>Le materie che studio e i progetti scolastici più significativi.</p>
                <a href="materie.php" class="mt-auto text-decoration-none">Esplora materie &rarr;</a>
            </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card p-4 shadow-sm h-100">
                <h3>Dashboard</h3>
                <p>Statistiche, competenze e grafici di avanzamento lavori.</p>
                <a href="grafici.php" class="mt-auto text-decoration-none">Guarda i grafici &rarr;</a>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>