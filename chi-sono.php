<?php $pageTitle = "Chi Sono"; include('header.php'); ?>

<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-md-5 mb-4 mb-md-0" data-aos="fade-right">
            <!-- Placeholder per la tua foto -->
            <img src="assets/img/Immagine-Personale-Sito-Web_Valentini.jpeg" alt="Tommaso Valentini" class="img-fluid rounded shadow-lg" style="height: 450px; object-fit: cover; width: 100%;">
        </div>
        <div class="col-md-7" data-aos="fade-left">
            <h6 class="text-primary fw-bold text-uppercase">Il mio percorso</h6>
            <h2 class="display-5 fw-bold mb-4">Tommaso Valentini</h2>
            <p class="lead text-muted">
                Studente di Informatica appassionato di sviluppo web e tecnologie moderne. 
                Il mio obiettivo è trasformare linee di codice in soluzioni funzionali ed esteticamente piacevoli.
            </p>
            <p>
                Attualmente frequento l'ultimo anno del percorso tecnico-informatico, dove ho approfondito linguaggi come PHP, 
                JavaScript e la gestione di database complessi. Oltre allo studio, mi dedico a progetti personali 
                per restare sempre aggiornato sulle ultime tendenze del settore.
            </p>
            <div class="row my-4">
                <div class="col-6">
                    <h5 class="fw-bold">Interessi</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle-fill text-primary"></i> Sviluppo Web</li>
                        <li><i class="bi bi-check-circle-fill text-primary"></i> UI/UX Design</li>
                        <li><i class="bi bi-check-circle-fill text-primary"></i> Cybersecurity</li>
                    </ul>
                </div>
                <div class="col-6">
                    <h5 class="fw-bold">Obiettivi</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle-fill text-primary"></i> Laurea in Informatica</li>
                        <li><i class="bi bi-check-circle-fill text-primary"></i> Full-stack Dev</li>
                    </ul>
                </div>
            </div>
            <a href="assets/img/cv-valentini.pdf" class="btn btn-primary btn-lg shadow" download>
                Scarica il mio CV (PDF)
            </a>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>