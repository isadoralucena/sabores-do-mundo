class Footer extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    this.innerHTML = `
    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container">
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="logo img-fluid"></a>
        <h3>Sabores do Mundo</h3> -->
  
        <div class="logo">
          <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
          <h1><a href="index.html">Sabores do Mundo</a></h1>
        </div>
  
        <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
        <div class="copyright">
          &copy; Copyright <strong><span>Sabores do Mundo</span></strong>. Todos os direitos reservados
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
          Template pela <a href="https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/">BootstrapMade</a>
        </div>
      </div>
    </footer><!-- End Footer -->
    `;
  }
}

customElements.define('footer-component', Footer);
