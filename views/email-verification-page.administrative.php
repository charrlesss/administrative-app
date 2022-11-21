<?php 
    include( 'layout/header-setup-administrative.php');
?>
<style>
    *{
  box-sizing: border-box;
}
body{
  margin: 0;
}
.title{
  max-width: 400px;
  margin: auto;
  text-align: center;
  font-family: "Poppins", sans-serif;
 
}
h3{
    font-weight: bold;
  }
  p{
    font-size: 12px;
    color: #118a44;
  }
  p.msg{
      color: initial;
      text-align: initial;
      font-weight: bold;
    }
  
.otp-input-fields{
  margin: auto;
  background-color: white;
  box-shadow: 0px 0px 8px 0px #02025044;
  max-width: 400px;
  width: auto;
  display: flex;
  justify-content: center;
  gap: 10px;
  padding: 40px;
}
  input{
    height: 40px;
    width: 40px;
    background-color: transparent;
    border-radius: 4px;
    border: 1px solid #2f8f1f;
    text-align: center;
    outline: none;
    font-size: 16px;
    &::-webkit-outer-spin-button,
    &::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
  }

  input[type=number] {
      -moz-appearance: textfield;
    }

    input:focus{
      border-width: 2px;
      border-color: darken(#2f8f1f, 5%);
      font-size: 20px;
    }
    input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

.result{
  max-width: 400px;
  margin: auto;
  padding: 24px;
  text-align: center;
  p{
    font-size: 24px;
    font-family: 'Antonio', sans-serif;
    opacity: 1;
    transition: color 0.5s ease;
    &._ok{
      color: green;
    }
    &._notok{
      color: red;
      border-radius: 3px;
    }
  }
}
</style>
</head>
<body>
<section class="sm:h-screen h-auto w-screen  flex justify-center bg-[#8E629D] ">
<section class="h-full gradient-form  md:h-screen ">
  <div class="container py-12 px-6 h-full">
    <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
      <div class="xl:w-10/12">
        <div class="block bg-white shadow-lg rounded-lg">
          <div class="lg:flex lg:flex-wrap g-0">
            <div class="lg:w-6/12 px-4 md:px-0">
              <div class="md:p-12 md:mx-6">
                <div class="text-center">
                  <img
                  class="mx-auto sm:w-48 sm:pt-10 pt-4 w-24"
                  src="<?php echo $GLOBALS['url'].'/assets/img/delivery-boy.png'; ?>"
                    alt="logo"
                  />
                  <h4 class="text-xl font-semibold mt-1 mb-12 pb-1 ">Create Request For Visiting</h4>
                </div>
                <form id="form-verification-email" action="javascript: void(0)" class="otp-form" name="otp-form">
  
            <div class="title">
                <h3>Code VERIFICATION</h3>
                <p class="info text-blue-500">An code has been sent to <?php echo  $_SESSION["verify-email-administrative"];  ?></p>
                <div class="flex items-center  gap-x-2  mb-5">
                  <p class="msg ">Please enter Code to verify </p>
                  <p id="divCounter" class="  underline text-lg font-semibold text-black"></p>
                </div>
            </div>
            <div class="otp-input-fields">
                <input required  type="number" class="otp__digit otp__field__1" name="otp_1">
                <input required type="number" class="otp__digit otp__field__2" name="otp_2">
                <input required type="number" class="otp__digit otp__field__3" name="otp_3">
                <input required type="number" class="otp__digit otp__field__4" name="otp_4">
                <input required type="number" class="otp__digit otp__field__5" name="otp_5">
            </div>
            <div class="w-full text-center flex  items-center justify-center gap-x-4">
            <div class=" pt-1 sm:mb-12 mb-5 pb-1 mt-5   w-auto">
                    <button
                      class=" inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
                      type="submit"
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
                      Submit
                    </button>
                </div>
                <div  class=" pt-1 sm:mb-12 mb-5 pb-1 mt-5   w-auto">
              <button
              id="resend-button"
                      class=" inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
                      type="button"
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
                      Resend Code
                      </button>
              </div>
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

let interval;
$(function () {

  $('#resend-button').click(function(){
    $("#loading").show()
    clearInterval(interval)
      $.ajax({ 
      type: "GET",
      url: "/freight/resend-verification-code",             
      dataType: "json",                  
      success: function(res){ 
      const clearTime  = setTimeout(()=>{
          $("#loading").hide()
          clearTimeout(clearTime)
            Swal.fire({
              icon: 'success',
              title: 'Resend Code',
              text:res.message,
              showConfirmButton: true,
            }).then(()=>{
              $.ajax({ 
            type: "GET",
            url: "/freight/verification-session-start",             
            dataType: "json",                  
            success: function(res){ 
              sessionStorage.setItem("counter", 60);
                window.location.href = '/freight'
              }
            })
          })
        },1000)
      }
    })
  })
})
</script>

    <script type="text/javascript">
    if (sessionStorage.getItem("counter")) {
      if (sessionStorage.getItem("counter") <= 0) {
        var value = 60;
      } else {
        var value = sessionStorage.getItem("counter");
      }
    } else {
      var value = 60;
    }
    document.getElementById('divCounter').innerHTML = value;

    var counter = function () {
      if (value <= 0) {
        sessionStorage.setItem("counter", 60);
        value = 0;
      } else {
        value = parseInt(value) - 1;
        sessionStorage.setItem("counter", value);
      }
      document.getElementById('divCounter').innerHTML = value;
    };

     setInterval(counter, 1000);
    window.onbeforeunload =function(){
      var value = sessionStorage.getItem("counter");
      value = parseInt(value) - 1;
      sessionStorage.setItem("counter", value);
  }
  </script> 
<script>

function expiredVerificationSession(response){

  if(Date.now() > (response.session_expired * 1000)){
    $.ajax({ 
    type: "GET",
    url: "/freight/verify-session-remove",             
    dataType: "json",                  
    success: function(res){ 
          Swal.fire({
            icon: 'error',
            title: 'Your Account was not verified, The system will remove this account',
            text:res.message,
            showConfirmButton: true,
          }).then(()=>{
            window.location.href = "/freight"
          })

      }
  })
    return clearInterval(interval)
  }
}


 $(document).ready(function() {
  $.ajax({ 
    type: "GET",
    url: "/freight/verify-session",             
    dataType: "json",                  
    success: function(response){  
       interval = setInterval(()=>{
        expiredVerificationSession(response)
      },100)        
      }
  })
});



</script>

<script>
    var otp_inputs = document.querySelectorAll(".otp__digit")
var mykey = "0123456789".split("")
otp_inputs.forEach((_)=>{
  _.addEventListener("keyup", handle_next_input)
})
function handle_next_input(event){
  let current = event.target
  let index = parseInt(current.classList[1].split("__")[2])
  current.value = event.key
  
  if(event.keyCode == 8 && index > 1){
    if( current.previousElementSibling !== null)
    current.previousElementSibling.focus()
  }
  if(index < 6 && mykey.indexOf(""+event.key+"") != -1){
    var next = current.nextElementSibling;
    if(next !== null)
    next.focus()
  }
  var _finalKey = ""
  for(let {value} of otp_inputs){
      _finalKey += value
  }

}
</script>

<script>
$(function () {
    $('#form-verification-email').on('submit', function (e) {
    e.preventDefault()
    $("#loading").show()
    const  formData = new FormData(e.currentTarget)
    const otp= [formData.get('otp_1'),formData.get('otp_2'),formData.get('otp_3'),formData.get('otp_4'),formData.get('otp_5')].join('')
            formData.append('otp' ,otp)     
            $.ajax({
            type: 'post',
            url: '/freight/verify-email',
            data: formData,
            success: function (response) {
              const clearTime  = setTimeout(()=>{
              $("#loading").hide()
              clearTimeout(clearTime)
              Swal.fire({
              title:response.message,
              text: "Are you sure, You want to go to?",
              icon: 'success',
              confirmButtonColor: '#3085d6',
              showDenyButton: true,
              confirmButtonText: 'Your Dashboard.',
              denyButtonText:"Re-Login your Account."
            }).then((result)=>{
              if (result.isConfirmed) {
                  $.ajax({ 
                      type: "GET",
                      url: "/freight/go-to-dashboard",             
                      dataType: "json",                  
                      success: function(res){ 
                          if(res.success){
                            window.location.href = "/freight"
                            return 
                          }
                          Swal.fire({
                          icon: 'error',
                          text:res.message,
                          showConfirmButton: true,
                        })
                      }
                  })
                  return
                } else if (result.isDenied) {
                  $.ajax({ 
                      type: "GET",
                      url: "/freight/re-login",             
                      dataType: "json",                  
                      success: function(){ 
                            window.location.href = "/freight"
                      }
                  })

                }
              })

              },2000)
            },
            processData: false,
            contentType: false,
        });
    });
})
</script>
<?php 
    include('layout/footer-setup-administrative.php')
?>