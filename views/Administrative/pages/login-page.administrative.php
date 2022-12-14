<?php
 include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/layout/header-setup-administrative.php');
?>
<style>
     body{
      background: #8E629D;
      height: 100vh;
      width: 100%;
    },
</style>
</head>
<body>
<section class="m:h-screen h-auto w-screen  flex justify-center bg-[#8E629D]">
<section class="h-full gradient-form  md:h-screen">

  <div class="container py-12 px-6 h-full">
    <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
        <div class="xl:w-10/12">
            <div class="block bg-white shadow-lg rounded-lg">
            <a href="/freight">
            <img
            class="w-6 h-6  ml-3 mt-3 absolute"
            src="<?php echo $GLOBALS['url'].'/assets/img/home.png'; ?>"
            alt="logo"
            />
            </a>
          <div class="lg:flex lg:flex-wrap g-0">
            <div class="lg:w-6/12 px-4 md:px-0">
              <div class="md:p-12 md:mx-6">
                <div class="text-center">
                  <img
                    class="mx-auto sm:w-48 sm:pt-10 pt-4 w-24"
                    src="<?php echo $GLOBALS['url'].'/assets/img/delivery-boy.png'; ?>"
                    alt="logo"
                  />
                </div>
                <form id="form-login">
                  <p class="mb-4">Please login to your account</p>
                  <div class="mb-4">
                    <input
                      type="email"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      name="email"
                      placeholder="Email"
                    />
                  </div>
                  <div class="mb-4">
                    <input
                      type="password"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      name="password"
                      placeholder="Password"
                    />
                  </div>
                  <div class="text-center pt-1 sm:mb-12 mb-5 pb-1">
                    <button
                      class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
                      type="submit"
                      id="submit"
                      data-mdb-ripple="true"
                      data-mdb-ripple-color="light"
                      style="
                        background: linear-gradient(
                          to right,
                          #ee7724,
                          #d8363a,
                          #dd3675,
                          #b44593
                        );
                      "
                    >
                      Log in
                    </button>
                    <a class="text-gray-500" href="administrative-forgot-password">Forgot password?</a>
                  </div>
                  <div class="flex items-center justify-between pb-6">
                    <a href="administrative-register" class="mb-0 mr-2 hover:text-blue-500">Don't have an account?</a>
                  </div>
                </form>
              </div>
            </div>
            <div
              class="lg:w-6/12 flex items-center lg:rounded-r-lg rounded-b-lg lg:rounded-bl-none"
              style="
                background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
              "
            >
              <div class="text-white px-4 py-6 md:p-12 md:mx-6">
                <h4 class="text-xl font-semibold mb-6">We are more than just a company</h4>
                <p class="text-sm">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</section>

<div id="loading" class="flex justify-center items-center  border-5 border-red-500 absolute top-0 bottom-0 left-0 right-0 z-[100] bg-white">
    <div role="status">
        <svg class="inline mr-2 w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
        </svg>
        <span class="sr-only">Loading...</span>
    </div>
</div>

<script>    

$("#loading").hide()

$(function () {
$('#form-login').on('submit', function (e) {
  e.preventDefault()
  $("#loading").show()


    $.ajax({
    type: 'post',
    url: '/freight/login-user',
    data: $('#form-login').serialize(),
    success: function (response) {
      const timeout= setTimeout(() => {
      $("#loading").hide()
    clearTimeout(timeout)
      if(!response.success){
       return   Swal.fire({
          icon: 'error',
          text:response.message,
          showConfirmButton: true,
        })
      }
      Swal.fire({
        icon: 'success',
        title: 'Good job!',
        text:response.message,
        showConfirmButton: false,
        timer: 1000
      }).finally(()=>{
      window.location.href = "/freight/administrative/visitor-dashboard"
    })
  }, 2000);
    },  
    error:function(_ , _ ,errorMessage){
    $("#loading").hide()
    clearTimeout(timeout)
      console.log(errorMessage);
    }

  });

 
 

});

});

</script>




 <?php
 include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/layout/footer-setup-administrative.php');
?>
