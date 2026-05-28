<?php $pageTitle = "Materie Umanistiche"; include('header.php'); ?>

<div class="container py-5">
    <h2 class="fw-bold mb-4" data-aos="fade-right">Area Umanistica</h2>
    
    <div class="accordion shadow-sm" id="accordionHuman">
        <!-- Italiano -->
        <div class="accordion-item" data-aos="fade-up">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                    Italiano & Letteratura
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionHuman">
                <div class="accordion-body">
                    <h5>Programma:</h5> <p>Dall'Unità d'Italia al Postmodernismo.</p>
                    <h5>Competenze:</h5> <p>Analisi critica dei testi e capacità espositiva.</p>
                    <div class="bg-light p-3 rounded">
                        <h6>Progetto in evidenza:</h6>
                        <p class="mb-0 small">Analisi digitale delle opere di Italo Calvino.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Storia -->
        <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                    Storia
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionHuman">
                <div class="accordion-body">
                    <h5>Programma:</h5> <p>Il Novecento: dalle guerre mondiali alla globalizzazione.</p>
                    <h5>Risorse:</h5> <p>Archivi digitali, saggi storici.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>