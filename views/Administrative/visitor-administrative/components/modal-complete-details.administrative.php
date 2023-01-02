

<link rel="stylesheet" href="/freight/views/css/date-picker.css">
<link rel="stylesheet" href="/freight/views/css/form-style.css">

<form id="complete-info" enctype="multipart/form-data" class="absolute left-0 right-0 top-0 bottom-0 bg-transparent z-[100] ">
    <div class="flex justify-center items-center w-screen h-screen ">
        <div class="relative w-full max-w-2xl h-full md:h-auto ">
        <div class="relative bg-white rounded-lg shadow-2xl sm:mx-0 mx-3 mt-10 border-t-2 border-slate-100 dark:bg-gray-700  ">

             <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Complte Your Info.
                </h3>
            </div>

            <section >
                    <div class="container">
                        <div class="row justify-content-center ">
                            <div class="col-md-6 mt-5 mb-5">
                                <div class="form-area px-5">
                                    <div class="form-inner">
                                    

                                            <div class="w-full relative h-auto flex  justify-center ">
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
                                            </div>

                                          
    
                                            <div class="form-group md:mt-2  w-full">
                                                <label for="countries" class="text-[11px] uppercase text-indigo-900 font-semibold">Mobile Number</label>
                                                <div class="border px-4  rounded-lg" id="container-country-number">
                                                    <div  class=" flex flex-row items-center relative justify-center h-[50px] ">
                                                        <select   name="country" id="countries" class="border-none w-[78px] h-[40px] outline-none"  required>
                                                             <option selected value="">Chose</option>
                                                        </select>
                                                        <input id="mb-number" placeholder="Enter Your Number" name="mb-number" type="text"  class="form-group mb-2" required>
                                                    </div>
                                                    
                                                </div>
                                            </div>


                                            <div  class="form-group  w-full"  id="bd-container" >
                                                <label for="birthdate" class="text-[11px] uppercase text-indigo-900 font-semibold">Birth Date</label> 
                                                <input class="form-control m-0 p-0"  type="text" placeholder="DD-MM-YYYY" id="datepicker" autocomplete="off" name="birthdate"  required>
                                            </div>

                                            <div class="form-group w-full ">
                                                <label for="address" class="text-[11px] uppercase text-indigo-900 font-semibold">Address</label> 
                                                <textarea name="address" rows="1" class= " form-control" id="address" placeholder="Address" required></textarea>
                                            </div>

                                              <div  class="form-group flex my-3 gap-x-3 items-center ">
                                                    <div class="flex items-end ">
                                                        <input id="male" type="radio" value="male" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                        <label for="male" class="text-[11px] uppercase text-indigo-900 font-semibold ml-2">Male</label>
                                                    </div>
                                                    <div class="flex items-end ">
                                                        <input checked id="female" type="radio" value="female" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                        <label for="female" class="text-[11px] uppercase text-indigo-900 font-semibold ml-2">Female</label>
                                                    </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                     <button type="submit" data-modal-toggle="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                 </div>
                </div>  
            </section>

          </div>
        </div>
    </div>

</form>

 <div id="loading-complete-details" class="flex justify-center items-center  border-5 border-red-500 absolute top-0 bottom-0 left-0 right-0 z-[100] bg-white">
    <div role="status">
        <svg class="inline mr-2 w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
        </svg>
        <span class="sr-only">Loading...</span>
    </div>
</div> 

<script src="/freight/views/js/mobilenumber-country.js"></script>

<script>
    
$(function(){
     $("#loading-complete-details").hide()


$("#complete-info").submit(function(e){
e.preventDefault()
 $("#loading-complete-details").show()


const formData = new FormData(e.currentTarget)
formData.append('profile',$('#profile').prop('files')[0])
formData.append('address',formData.get('address'))
formData.append('gender',formData.get('gender'))
formData.append('mb-number',formData.get('mb-number'))
formData.append('country',formData.get('country'))
formData.append('birthdate',formData.get('birthdate'))
        $.ajax({
            type: 'post',
            url: '/freight/visitor-complete-info',
            data:formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
               const timeout =  setTimeout(() => {
                   $("#loading-complete-details").hide()

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
    })
</script>

<script> 

const input = document.querySelector('#profile')
const filename = document.querySelector('#name_of_file')
const img = document.querySelector('#img')
const discription = document.querySelector('#dis')
const dropbox = img.closest('#drop-box')

let uploadfile
img.src = "<?php echo $GLOBALS['url'].'/assets/img/profile_default.jpg'; ?>"
   
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
    img.src = "<?php echo $GLOBALS['url'].'/assets/img/profile_default.jpg'; ?>"
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
    img.src = "<?php echo $GLOBALS['url'].'/assets/img/profile_default.jpg'; ?>"

})
</script>


<script>
       $( function() {
	$( "#datepicker" ).datepicker({
		dateFormat: "dd-mm-yy"
		,	duration: "fast"
	});

    $("#datepicker").focus(function(){
     document.querySelector('#datepicker-label').closest('div').style.border = "1px solid  #5A8DEE"
    })
    $("#datepicker").focusout(function(){
     document.querySelector('#datepicker-label').closest('div').style.border = ""
    })
    $("#bd-container").click(function(){
        $( "#datepicker" ).focus()
    })
    $("#mb-number").focus(function(){
     document.querySelector('#container-country-number').closest('div').style.border = "1px solid  #5A8DEE"
    })
 
    $("#countries").focus(function(){
     document.querySelector('#container-country-number').closest('div').style.border = "1px solid  #5A8DEE"
    })

    $("#mb-number").focusout(function(){
     document.querySelector('#container-country-number').closest('div').style.border = ""
    })

    $("#countries").focusout(function(){
     document.querySelector('#container-country-number').closest('div').style.border = ""
    })

})
</script>

<script>

 

    countryPN.forEach((data) => {
    const option = document.createElement('option')
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



                     <!-- <div class="form-group mt-2  ">
                                                <div class="border px-4 py-[.5] rounded-lg" id="container-country-number">
                                                <div  class=" flex flex-row items-center relative justify-center">
                                                        <select   name="country" id="countries" class="border-none  w-[78px] h-[40px] outline-none"  required>
                                                            <option selected value="">Chose</option>
                                                        </select>
                                                        <input id="mb-number" placeholder="Enter Your Number" name="mb-number" type="text"  class="mb-2 h-[40px] pl-2 border-none outline-none " required>
                                                    </div>
                                                    
                                                </div>
                                            </div> -->


                                                <!-- <div> 
                                            <div class="form-group mb-10">
                                                    <div class="w-full  h-auto flex justify-center items-center flex-col">
                                                             <div  class=" w-auto h-auto  flex  justify-center items-center">
                                                                <div id="btn" class=" w-full h-full relative  oveflow-hidden">
                                                                    <div class="border-2 bg-transparent z-[100] md:w-[200px] md:h-[200px] w-[170px] h-[170px] bg-gray-50 flex overflow-hidden relative  justify-center items-center rounded-full " id="drop-box" >
                                                                     <img
                                                                         id="img"
                                                                        class=" rounded-full absolute top-[50%] left-[50%] -translate-y-2/4 -translate-x-2/4 min-h-full min-w-full block"
                                                                        />
                                                                        <input type="file"  id="profile" name="profile" style="opacity:0;float:left; " required />
                                                                    </div>
                                                                   
                                                                    </div>
                                                                    <header  id="dis" class="absolute  z-[100] text-center">
                                                                        <h4 class="font-semibold text-sm text-teal-800 hover:text-blue-500">Choose a file or </br><span> drag it Here</span></h4>
                                                                    </header>
                                                                    
                                                                  </div>
                                                                    <p id="name_of_file" class="pt-2"></p>
                                                            </div>   
                                                    </div>
                                            </div> -->