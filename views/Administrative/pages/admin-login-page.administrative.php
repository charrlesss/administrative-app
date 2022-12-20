<?php
 include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/layout/header-setup-administrative.php');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="w-full h-screen bg-indigo-50">

<section class="h-full w-full">
  <div class="px-6 h-full text-gray-800">
    <div
      class="flex xl:justify-center  justify-center items-center flex-wrap h-full g-6"
    >
      <div class=" xl:w-3/12 lg:w-5/12  bg-black p-10 rounded-3xl">
        <form class="w-auto h-auto relative">
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
              placeholder="Employee ID"
            />
          </div>

          <!-- Password input -->
          <div class="mb-6 flex relative">
            <input
              type="password"
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
              type="button"
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
</body>
<script>
  
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
<?php
 include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/layout/footer-setup-administrative.php');
?>
