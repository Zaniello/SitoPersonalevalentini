<?php $pageTitle = "Portfolio"; include('header.php'); ?>

<div class="container py-5">
    <h2 class="text-center fw-bold mb-4">I Miei Progetti</h2>
    
    <!-- Filtri -->
    <div class="d-flex justify-content-center gap-2 mb-5">
        <button class="btn btn-sm btn-outline-primary" onclick="filterSelection('all')">Tutti</button>
        <button class="btn btn-sm btn-outline-primary" onclick="filterSelection('informatica')">Informatica</button>
        <button class="btn btn-sm btn-outline-primary" onclick="filterSelection('sistemi')">Sistemi</button>
    </div>

    <div class="row g-4">
        <!-- Progetto 1 -->
        <div class="col-md-4 filter-card informatica" data-aos="fade-up">
            <div class="card shadow-sm h-100">
                <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Project">
                <div class="card-body">
                    <span class="badge bg-primary mb-2">Informatica - 2023</span>
                    <h5 class="card-title">Gestione Magazzino PHP</h5>
                    <p class="card-text small text-muted">Un'applicazione web per gestire le scorte di un magazzino con database MySQL.</p>
                    <a href="#" class="btn btn-sm btn-dark">Vedi su GitHub</a>
                </div>
            </div>
        </div>
        <!-- Aggiungi altri progetti simili... -->
    </div>
</div>

<script>
function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filter-card");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
        if (x[i].className.indexOf(c) > -1) x[i].style.display = "block";
    }
}
</script>

<?php include('footer.php'); ?>