<template>
  <div class="footer">
    <footer>
      <div class="container">
        <div class="wrapper row d-flex align-items-center">
          <div class="col-12 col-md-2 f-row">
            <a class="navbar-brand" href="/">
              <img class="img-fluid logo" src="../assets/image/vairal-logo.webp" alt="logo" />
            </a>
          </div>
          <div class="col-12 col-md-4 f-row">
            <p class="text-white mb-0"><a href="https://www.enfection.com/" class="text-white" >Enfection PVT LTD </a> - ALL rights reserved</p>
          </div>
          <div class="col-12 col-md-6 ">
            <ul class="navigation mb-0 ps-0">
              <li><a href="#" class="text-white">Home</a></li>
              <li><a href="#services" class="text-white">Services</a></li>
              <li><a href="#subscriptions_sec" class="text-white">Plans</a></li>
              <li><a href="#faq_section" class="text-white">HOW VAIRAL WORKS</a></li>
              <li><a href="#contact" class="text-white">Contact us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
  </template>
  
  <script>
  
  export default {
    name: 'App',
    data() {
      return {
        currentYear: new Date().getFullYear(),
      }
    },
  }
  </script>

<style lang="scss">
.footer{
    padding-top: 15px;
    padding-bottom: 42px;
    border-top: 1px solid #ffffff44;
    margin-top: 30px;
    font-size: 12px;

    a {
      text-decoration: none;
    }
    .wrapper{
        display: flex;
        justify-content: space-between;

        @media only screen and (max-width: 992px){
            flex-direction: column;
            justify-content: center;
        }

        .f-row{
          @media only screen and (max-width: 992px){
            padding-top: 12px;
            text-align: center;
        }
        }

        .logo{
          height: 16px;
        }
    
        .navigation{
            display: flex;
            justify-content: flex-end;
            column-gap: 25px;
            row-gap: 12px;

            @media only screen and (max-width: 992px){
                column-gap: 14px;
                justify-content: center;
                padding-top: 8px;
            }
            
            li{
                list-style: none;
                a{
                    text-decoration: none;
                    transition: all 0.3s;
    
                    &:hover{
                        opacity: .6;
                    }
                }
            }
        }
    }
}
</style>
  