<?php
 include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/layout/header-setup-administrative.php');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >
<section class="w-full h-screen bg-indigo-50">
  <div class="px-6 h-full text-gray-800">
    <div
      class="flex xl:justify-center  justify-center items-center flex-wrap h-full g-6"
    >
      <div class=" xl:w-3/12 lg:w-5/12  bg-black p-10 rounded-3xl">
        <form id="administrative-employee-login" class="w-auto h-auto relative">
          <!-- Email input -->
          <div class="mb-6 flex w-full justify-center">
          <img
            class="w-24 h-24   "
            src="<?php echo $GLOBALS['url'].'/assets/img/truck.png'; ?>"
            alt="logo"
            />
        </div>
        <div class="mb-3">
            <p class="text-white  text-xs form-check-label inline-block text-gray-800">Please login with your employee ID and password below.</p>
        </div>
          <div class="mb-6 ">
            <input
              type="text"
              class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
              id="employeeId"
              name="employeeId"
              placeholder="Employee ID"
            />
          </div>

          <!-- Password input -->
          <div class="mb-6 flex relative">
            <input
              type="password"
              name="password"
              class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border-y border-l  border-solid border-gray-300 rounded-tl rounded-bl  transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:border-y focus:border-l focus:outline-none"
              id="password"
              autocomplete="on"
              placeholder="Password"
            />
            <div 
            class="w-[40px] border-none h-full bg-white py-[10px] flex justify-center font-normal rounded-tr rounded-br cursor-pointer bg-clip-padding transition ease-in-out"
            id="password-button">
                 <i class="fa fa-eye text-black text-xl" id="icon-password"></i>   
            </div>
          </div>

          <div class="flex justify-end items-center mb-6">
            <a href="#!" class="text-gray-800 text-white text-sm hover:text-indigo-300">Forgot password?</a>
          </div>
          <div class="text-left">
            <button
              type="submit"
              class="inline-block px-7 py-3 bg-indigo-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-indigo-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
            >
              Login
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<div id="loading" class="z-[100] bg-white flex justify-center items-center  border-5 border-red-500 absolute top-0 bottom-0 left-0 right-0 z-[100] bg-white">
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

    $("#password").focus(function(){
        $("#password-button").css({
            borderTop:'1px solid #3b82f6',
            borderBottom:'1px solid #3b82f6',
            borderRight:'1px solid #3b82f6'
        })
    })
    $("#password").focusout(function(){
        $("#password-button").css({
            border:'none',
        })
    })
    $("#password-button").click(function(){
           if($("#password").attr('type') === 'password'){
               $("#password").attr('type','text')
               $('#icon-password')[0].className = 'fa fa-eye-slash text-black text-xl'
               return
            }

            $("#password").attr('type','password')
            $('#icon-password')[0].className = 'fa fa-eye text-black text-xl'
    })

 
</script>

<script>
      $('#administrative-employee-login').submit(function(e){
          e.preventDefault()
          $("#loading").show()

            $.ajax({
                type: 'post',
                url: '/freight/visitor-management-authentication',
                data: $('#administrative-employee-login').serialize(),
                dataType: "json",
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
                        window.location.href = response.redirect
                      })

                  }, 2000);

                },
                error: function (_,__,___) {
                  console.log(_)
                  console.log(__)
                  console.log(___)

                }
            })

      })
</script>
<?php
 include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/layout/footer-setup-administrative.php');
?>
