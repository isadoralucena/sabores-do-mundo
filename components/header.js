class Header extends HTMLElement {
    constructor() {
        super()
    }

    connectedCallback() {
        this.innerHTML = `
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top d-flex align-items-center header-transparent">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <div class="logo me-auto">
                <!-- Uncomment below if you prefer to use an image logo -->
                <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
                <h1 class="align-middle"><a href="index.html">Sabores do Mundo</a></h1>
            </div>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                <li><a class="nav-link scrollto" href="index.html">Página inicial</a></li>
                <li><a class="nav-link scrollto" href="index.html #map">Continentes</a></li>
                <li><a class="nav-link scrollto" href="index.html #chefs">Equipe</a></li>
                <li><a class="nav-link scrollto" href="index.html #forms">Formulário</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            </div>
        </header><!-- End Header -->
        `
    }

    disconnectedCallback() {
        console.log('Dismounted', this);
    }
}

if ('customElements' in window) {
    customElements.define('main-header', Header)
}
  