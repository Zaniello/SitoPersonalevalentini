<?php $pageTitle = "Materie Tecniche"; include('header.php'); ?>

<div class="container py-5">
    <h2 class="fw-bold mb-4" data-aos="fade-right text-primary">Area Tecnica & Informatica</h2>
    
    <div class="row g-4">
        <!-- Informatica -->
        <div class="col-md-12" data-aos="fade-up">
            <div class="card p-4 border-0 shadow-sm border-start border-primary border-5">
                <h4>Informatica</h4>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <h6>Programma:</h6>
                        <ul class="small">
                            <li>Programmazione OOP (PHP, Java)</li>
                            <li>Database Relazionali e SQL</li>
                            <li>Sviluppo Web Front-end & Back-end</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6>Progetti:</h6>
                        <a href="portfolio.php" class="btn btn-sm btn-primary">Vedi progetti software</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sistemi e Reti -->
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card h-100 p-4 border-0 shadow-sm">
                <h4>Sistemi e Reti</h4>
                <p class="small">Configurazione di reti LAN/WAN, protocolli TCP/IP e sicurezza informatica.</p>
                <div class="mt-auto"><span class="badge bg-secondary">Cisco Packet Tracer</span></div>
            </div>
        </div>

        <!-- TPSIT -->
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100 p-4 border-0 shadow-sm">
                <h4>TPSIT</h4>
                <p class="small">Gestione dei processi, thread e programmazione di rete.</p>
                <div class="mt-auto"><span class="badge bg-secondary">Socket Programming</span></div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>