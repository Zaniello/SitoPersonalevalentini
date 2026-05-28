<?php $pageTitle = "Esperienza PCTO"; include('header.php'); ?>

<div class="container py-5">
    <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="fw-bold">Esperienza PCTO</h2>
        <p class="text-muted">Percorso Competenze Trasversali e Orientamento</p>
    </div>

    <!-- Descrizione Progetto -->
    <div class="row mb-5" data-aos="fade-up">
        <div class="col-12">
            <div class="card p-4 border-0 shadow-sm">
                <h3>Il Progetto: [Nome del Progetto]</h3>
                <p>Ho svolto il mio periodo di stage presso [Nome Azienda], occupandomi dello sviluppo di [Descrizione breve]. Durante questa esperienza ho potuto mettere in pratica le conoscenze scolastiche in un contesto lavorativo reale.</p>
                <div class="d-flex flex-wrap gap-2 mt-2">
                    <span class="badge bg-light text-primary border border-primary">Problem Solving</span>
                    <span class="badge bg-light text-primary border border-primary">Team Working</span>
                    <span class="badge bg-light text-primary border border-primary">PHP Development</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Diario Attività -->
    <h4 class="mb-4 fw-bold" data-aos="fade-right">Diario delle Attività</h4>
    <div class="table-responsive shadow-sm rounded mb-5" data-aos="fade-up">
        <table class="table table-hover bg-white mb-0">
            <thead class="table-primary">
                <tr>
                    <th>Settimana</th>
                    <th>Attività Svolta</th>
                    <th>Risultato</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Settimana 1</td>
                    <td>Analisi dei requisiti e setup ambiente</td>
                    <td>Ambiente di sviluppo configurato</td>
                </tr>
                <tr>
                    <td>Settimana 2</td>
                    <td>Progettazione del database (ER)</td>
                    <td>Schema SQL approvato</td>
                </tr>
                <!-- Aggiungi altre righe qui -->
            </tbody>
        </table>
    </div>

    <!-- Documenti e Grafici -->
    <div class="row g-4">
        <div class="col-md-4" data-aos="zoom-in">
            <div class="card text-center p-4 border-0 shadow-sm h-100">
                <div class="fs-1 text-primary mb-2"><i class="bi bi-file-earmark-pdf"></i></div>
                <h5>Documentazione</h5>
                <p class="small text-muted">Relazione finale e attestati</p>
                <a href="#" class="btn btn-sm btn-outline-primary mt-auto">Scarica Report</a>
            </div>
        </div>
        <div class="col-md-8" data-aos="zoom-in" data-aos-delay="100">
            <div class="card p-4 border-0 shadow-sm h-100">
                <h5>Pianificazione (WBS & Gantt)</h5>
                <p>La struttura del lavoro è stata suddivisa in 8 settimane per garantire il rilascio puntuale del software.</p>
                <a href="grafici.php" class="btn btn-sm btn-dark w-fit">Vedi Grafici Dettagliati</a>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>