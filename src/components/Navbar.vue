<template>
  <div class="Navigation">
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <router-link to="/" class="navbar-brand">
            <img class="img-fluid" src="../assets/image/vairal-logo.webp" alt="logo" />
          </router-link>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
              <li class="nav-item">
                <a href="#services" class="nav-link" v-scroll>SERVICES</a>
              </li>
              <li class="nav-item">
                <a href="#subscriptions_sec" class="nav-link" v-scroll>PLANS</a>
              </li>
              <li class="nav-item">
                <a href="#faq_section" class="nav-link" v-scroll>HOW VAIRAL WORKS</a>
              </li>
              <li class="nav-item">
                <a href="#contact_section" class="nav-link" v-scroll>CONTACT US</a>
              </li>
              <!-- <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link" v-scroll>ABOUT US</a>
              </li>
              <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link" v-scroll>CONTACT US</a>
              </li>
              <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link" v-scroll>BLOGS</a>
              </li> -->
            </ul>
            <!-- <div class="d-flex action-btn-wrap">
              <button class="btn btn-outline-primary me-2 fw-bold fs-6" type="button">
                SIGIN IN
              </button>
              <button class="btn btn-primary fw-bold fs-6" type="button">
                JOIN
              </button>
            </div> -->
          </div>
        </div>
      </nav>
    </header>
  </div>
</template>
  
  <script>
export default {
  name: "Navigation",
  data() {
    return {};
  },
};
</script>
  
  
  <style lang="scss">
    .navbar {
      .navbar-brand {
        img {
          height: 26px;
        }
      }

      .btn{
        font-family: 'Bakbak One', cursive;
        font-size: 14px !important;
      }

      .nav-item{
        a{
          @media only screen and (max-width: 992px){
            text-align: center;
          }
        }
      }

      .action-btn-wrap{
        @media only screen and (max-width: 992px){
            justify-content: center;
          }
      }
    }

    .header {
        .headerNavlink{
            font-size: 14px;
        }
    }

    .nav-link{
      font-size: 14px;
      font-weight: 400;
      color: #fff !important;
      font-family: 'Bakbak One', cursive;
    }
</style>