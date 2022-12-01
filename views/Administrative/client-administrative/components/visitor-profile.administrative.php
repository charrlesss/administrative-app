
<link rel="stylesheet" href="/freight/views/css/date-picker.css">
<link rel="stylesheet" href="/freight/views/css/form-style.css">
<?php
function limitString($string){
    $new_string =  mb_strimwidth($string, 0, 30, "...");
    return     $new_string ;
}
?>
<form id="update-profile" class=" w-full h-full  px-10  ">

    <div class="w-full relative h-auto flex md:justify-start justify-center ">
        <div class="z-[50] md:w-[200px] md:h-[200px] w-[170px] h-[170px] relative ">
             <div class=" relative bg-transparent z-[50] md:w-[200px] md:h-[200px] w-[170px] h-[170px] bg-gray-50 flex overflow-hidden relative  justify-center items-center rounded-full " id="drop-box" >
                <img
                    id="img"
                    class="cursor-pointer rounded-full absolute top-[50%] left-[50%] -translate-y-2/4 -translate-x-2/4 min-h-full min-w-full block"
                    />
                    <input type="file"  id="profile" name="profile" style="opacity:0;float:left; -z-1 cursor-pointer" required />
                
                </div>
                <header  id="dis" class="cursor-pointer absolute bottom-5 -right-0  z-[100] text-center">
                            <svg class="border rounded-full p-1 bg-orange-500 h-8 w-8 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M15 7v-4h-12v12.01h4" stroke-dasharray=".001 4" />  <path d="M19 11v-2a2 2 0 0 0 -2 -2h-8a2 2 0 0 0 -2 2v8a2 2 0 0 0 2 2h2" />  <path d="M13 13l9 3l-4 2l-2 4l-3 -9" /></svg>
                </header>
                <p id="name_of_file" class="pt-2 uppercase text-xs font-semibold w-[250px] lg:-left-[10px] -left-[35px] text-center overflow-hidden absolute  -bottom-8"></p>
            </div>

           <div class=" md:flex hidden w-auto h-auto items-center ml-5 ">
                <div class="flex flex-col">
                    <h1 class="text-3xl w-full overflow-hidden whitespace-nowrap	"><?php echo limitString($_SESSION['visitor_account']['fullname']); ?> </h1>
                    <p class="uppercase text-xs font-semibold text-gray-300 tracking-[2px]"><?php echo $_SESSION['visitor_account']['country']; ?></p>
                </div> 
            </div>
    </div>

    <!-- //form     -->
    <section class="w-full  mt-10" >
        <div class="w-full">
            <div class="">
                <div class="col-md-6 mt-5 mb-5">
                    <div class="form-area">
                        <div class="form-inner">
                                <!-- fullname & email -->
                                <div class="flex gap-x-4 w-full h-auto md:flex-row flex-col ">
                                    <div class="form-group der md:mt-2 rounded-lg w-full">
                                        <label for="fullname" class="text-[11px] uppercase text-indigo-900 font-semibold">Full Name</label>
                                        <input type="text" name="fullname" id="fullname" class="form-control m-0" required>
                                    </div>
                                    <div class="form-group  md:mt-2 rounded-lg w-full">
                                        <label for="email" class="text-[11px] uppercase text-indigo-900 font-semibold">Email</label>
                                        <input type="email" name="email" id="email" class="form-control m-0" required>
                                    </div>
                                </div>
                                        <!-- country & mobile number -->
                                <div class="flex gap-x-4 w-full h-auto md:flex-row flex-col">
                                        <div class="form-group md:mt-2  w-full">
                                            <label for="countries" class="text-[11px] uppercase text-indigo-900 font-semibold">Mobile Number</label>
                                            <div class="border px-4  rounded-lg" id="container-country-number">
                                                <div  class=" flex flex-row items-center relative justify-center h-[50px] ">
                                                    <select   name="country-mb" id="countries" class="border-none w-[78px] h-[40px] outline-none"  required>
                                                        <!-- <option selected value="qweqweqwe">Chose</option> -->
                                                    </select>
                                                    <input id="mb-number" placeholder="Enter Your Number" name="mb-number" type="text"  class="form-group mb-2" required>
                                                </div>
                                                
                                            </div>
                                        </div>

                                        <div class="form-group der mt-2 rounded-lg w-full h-[65px]">
                                            <label for="countries-input" class="text-[11px] uppercase text-indigo-900 font-semibold">Country</label>
                                            <select  name="countries-input" id="countries-input" class="form-control "  required>
                                                    <option  value="">Chose</option>
                                            </select>
                                        </div>
                                </div>

                                
                                <div  class="flex gap-x-4 w-full h-auto md:flex-row flex-col mt-2">
                                    <div  class="form-group  w-full"  id="bd-container" >
                                        <label for="birthdate" class="text-[11px] uppercase text-indigo-900 font-semibold">Birth Date</label> 
                                        <input class="form-control m-0 p-0"  type="text" placeholder="DD-MM-YYYY" id="datepicker" autocomplete="off" name="birthdate"  required>
                                    </div>

                                    <div class="form-group w-full ">
                                        <label for="address" class="text-[11px] uppercase text-indigo-900 font-semibold">Address</label> 
                                        <textarea name="address" rows="1" class= " form-control" id="address" placeholder="Address" required></textarea>
                                    </div>
                            </div>
                            

                            <div  class="form-group flex my-3 gap-x-3 items-center ">
                                        <div class="flex items-end ">
                                            <input id="male" type="radio" value="male" name="gender" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="male" class="ml-2 text-[11px] uppercase text-indigo-900 font-semibold" >Male</label>
                                        </div>
                                        <div class="flex items-end ">
                                            <input checked id="female" type="radio" value="female" name="gender" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="female" class="text-[11px] uppercase text-indigo-900 font-semibold ml-2" >Female</label>
                                        </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class=" flex justify-between items-center pt-5  space-x-2 rounded-b ">
                    <div class="flex gap-x-3">
                        <button type="submit" data-modal-toggle="defaultModal" type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg md:text-sm text-xs px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save Changes</button>
                        <a href="/freight/administrative/visitor-dashboard/profile" data-modal-toggle="defaultModal" type="button" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg md:text-sm text-xs px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Reset</a>
                    </div>
                    <button type="button" id="btn-change-password" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg md:text-sm text-xs px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Change Password</button>
                </div>
        </div>  
    </section>
</form>
<div id="loading-update-profile" class="flex justify-center items-center  border-5 border-red-500 absolute top-0 bottom-0 left-0 right-0 z-[100] bg-white">
    <div role="status">
        <svg class="inline mr-2 w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
        </svg>
        <span class="sr-only">Loading...</span>
    </div>
</div>


<script src="/freight/views/js/country.js"></script>
<script src="/freight/views/js/mobilenumber-country.js"></script>


<script>
    const profile =  "<?php echo $_SESSION['visitor_account']['profile'] ?>"
    const fullname ="<?php echo $_SESSION['visitor_account']['fullname'] ?>"
    const email ="<?php echo $_SESSION['visitor_account']['email'] ?>"
    const mb_number ="<?php echo $_SESSION['visitor_account']['mb_number'] ?>"
    const country = "<?php echo $_SESSION['visitor_account']['country'] ?>"
    const birthdate = "<?php echo $_SESSION['visitor_account']['birthdate'] ?>"
    const address = "<?php echo $_SESSION['visitor_account']['address'] ?>"
    const gender = "<?php echo $_SESSION['visitor_account']['gender'] ?>"
</script>


<script>
    $(function(){
        $("#btn-change-password").click(function(){
            $("#loading-update-profile").show()
                $.ajax({
                type: 'post',
                url: '/freight/forgot-password-send-email',
                dataType:'json',
                data: ({email:email ,from:"/freight/administrative/visitor-dashboard/profile"}),
                success:function(res){
                    const timeout= setTimeout(() => {
                        $("#loading-update-profile").hide()
                        clearTimeout(timeout)
                        Swal.fire({
                        icon: 'success',
                        title: 'Click the link to verify',
                        text:res.message,
                        showConfirmButton: true,
                        })
                    },2000)
                },
            })  
        })
    })

</script>



<script>

    $("#loading-update-profile").hide()

    $("#update-profile").submit(function(e){
        e.preventDefault()
        $("#loading-update-profile").show()
        const formData = new FormData(e.currentTarget)
        const inputProfile = formData.get('profile').name.split('/')[formData.get('profile').name.split('/').length -1]
        console.log( formData.get('gender'))
     
    if(inputProfile ===  profile &&
       formData.get('email') === email&&
       formData.get('fullname') ===  fullname&&
       formData.get('mb-number') === mb_number&&
       formData.get('countries-input') === country&&
       formData.get('birthdate')=== birthdate &&
       formData.get('address') === address &&
       formData.get('gender') === gender){
        $("#loading-update-profile").hide()
            return Swal.fire({
               icon: 'warning',
               title: 'Opppps!',
               text:"You need to change some fields if you want to update your profile!",
               showConfirmButton: true,
            })
        }

        formData.append('profile' ,formData.get('profile'))
        formData.append('fullname' ,formData.get('fullname'))
        formData.append('email' ,formData.get('email'))
        formData.append('mb-number' ,formData.get('mb-number'))
        formData.append('countries-input' ,formData.get('countries-input'))
        formData.append('birthdate' ,formData.get('birthdate'))
        formData.append('address' ,formData.get('address'))
        formData.append('gender' ,formData.get('gender'))

        $.ajax({
            type: 'post',
            url: '/freight/visitor-update-profile',
            data:formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
               const timeout =  setTimeout(() => {
                $("#loading-update-profile").hide()
                clearTimeout(timeout)
                Swal.fire({
                    icon: 'success',
                    title: 'Good job!',
                    text:response.message,
                    showConfirmButton: false,
                    timer: 1000
                }).finally(()=>{
                   window.location.reload()
                })
                }, 2000);
            }
        })


})

</script>

<script>
        $('#fullname').val(`${fullname}`)
        $('#email').val(`${email}`)
        $('#mb-number').val(`${mb_number}`)
        $('#countries-input').val(`${country}`)
        $('#datepicker').val(`${birthdate}`)
        $('#address').val(`${address}`)
        if(gender.toLowerCase() === "male"){
            $('#male').attr('checked', true);
        }
        $('#female').attr('checked', true);
</script>


<script>
   function defaultValue (input){
    const myFile = new File(['Hello World!'], '"<?php echo $GLOBALS['url']."/assets/profile/".$_SESSION['visitor_account']['profile']; ?>', {
            type: 'text/plain',
            lastModified: new Date(),
        });
        const dataTransfer = new DataTransfer();
        dataTransfer.items.add(myFile);
        input.files = dataTransfer.files
   }
</script>



<script> 
const button = document.querySelector('#btn')
const input = document.querySelector('#profile')
const filename = document.querySelector('#name_of_file')
const img = document.querySelector('#img')
const discription = document.querySelector('#dis')
const dropbox = img.closest('#drop-box')

defaultValue(input)
let uploadfile
img.src ="<?php echo $GLOBALS['url']."/assets/profile/".$_SESSION['visitor_account']['profile']; ?>"
   
discription.addEventListener('click',()=>{
  input.click()
})
img.addEventListener('click',()=>{
  input.click()
  input.style.display ="block"
})

input.addEventListener('change',(e)=>{
   readURL(e.target)
 
})

filename.textContent = "drag & drop or select an image"

function readURL(input){
    const file = input.files[0]
  if(!input.files && !input.files[0]) return
  filename.textContent =  file.name
  const reader = new FileReader()
  reader.onload = (e)=>{
    uploadfile =  e.target.result
    img.src =uploadfile
  }
  reader.readAsDataURL(input.files[0])
}


img.addEventListener('dragover',(e)=>{
    e.preventDefault()
    $('#dis').hide()
    img.src = "<?php echo $GLOBALS['url'].'/assets/img/drop.jpg'; ?>"
})

img.addEventListener('drop' ,(e)=>{
    e.preventDefault()
    img.src ="<?php echo $GLOBALS['url']."/assets/profile/".$_SESSION['visitor_account']['profile']; ?>"

    input.required =false
    const dT = new DataTransfer();
    dT.items.add(e.dataTransfer.files[0]);
    input.files = dT.files
    readURL(e.dataTransfer)   
    $('#dis').show()
})

img.addEventListener('dragleave',(e)=>{
    e.preventDefault()
    input.required =false
    $('#dis').show()
    if(uploadfile){
        img.src = uploadfile
        return
    }
    img.src ="<?php echo $GLOBALS['url']."/assets/profile/".$_SESSION['visitor_account']['profile']; ?>"
})
</script>



<script>
       $( function() {
	$( "#datepicker" ).datepicker({
		dateFormat: "dd-mm-yy"
		,	duration: "fast"
	});


    $("#bd-container").click(function(){
        $( "#datepicker" ).focus()
    })
    $("#mb-number").focus(function(){
     document.querySelector('#container-country-number').closest('div').style.border = "1px solid  #5A8DEE"
    })
 
    $("#countries").focus(function(){
     document.querySelector('#container-country-number').closest('div').style.border = "1px solid  #5A8DEE"
    })

    // $("#countries-input").focus(function(){
    //  document.querySelector('#countries-input').closest('div').style.border = "1px solid  #5A8DEE"
    // })


    $("#mb-number").focusout(function(){
     document.querySelector('#container-country-number').closest('div').style.border = ""
    })

    $("#countries").focusout(function(){
     document.querySelector('#container-country-number').closest('div').style.border = ""
    })

    
    $("#countries-input").focusout(function(){
     document.querySelector('#countries-input').closest('div').style.border = ""
    })



})
</script>


<script>
    countryPN.forEach((data) => {
        const option = document.createElement('option')
        if(data.name === country){
            option.textContent  =`(${data["dial_code"]})`
            option.value =data.name
            option.selected = true
            $('#countries').append(option)

            return
        }

    option.textContent =  `${data["name"]}` +" " +`(${data["dial_code"]})`
    option.value = data.name

    $('#countries').append(option)
    });


$('#countries').change(function(e){
    e.preventDefault()
    const optionSelected = $('#countries :selected').text().toString().split(' ')
    $('#countries :selected')[0].textContent =  optionSelected[optionSelected.length -1]
})
</script>


<script>
countries.forEach((data) => {
    const option = document.createElement('option')
    if(data.name === country){
        option.textContent =  `${data["name"]}`
         option.value = data.name
        option.selected = true
        $('#countries-input').append(option)
        return
    }
    
    option.textContent =  `${data["name"]}`
    option.value = data.name

    $('#countries-input').append(option)
    });

</script>