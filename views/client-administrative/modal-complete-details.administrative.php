
<style>
* {
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
}
body {
	font-family: 'Roboto', sans-serif;
	color: #546E7A;
}
.wrapper {
	max-width: 18rem;
	padding: 0 0.5rem;
	margin-left: auto;
	margin-right: auto;
	padding-top: 4rem;
}
.datepicker-container {
	 font-size: 1rem;
	font-weight: 400;
	display: block;
	margin-bottom: 0.5rem;
	color: #B0BEC5;
    border: 1px solid #DFE3E7;
	padding: 0.5rem 0.75rem;
	border-radius: 0.5rem;
}
input {
	font-family: 'Roboto', sans-serif;
	display:block;
	border: none;
	border-radius: .267rem;
	border: 1px solid transparent;
	line-height: 1.5rem;
	padding: 0;
	font-size: 1rem;
	color: #607D8B;
	width: 100%;
	margin-top: 0.5rem;
}
input:focus {outline: none;}
#ui-datepicker-div {
	display: none;
	background-color: #fff;
	box-shadow: 0 0.125rem 0.5rem rgba(0,0,0,0.1);
	margin-top: 0.25rem;
	border-radius: 0.5rem;
	padding: 0.5rem;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
.ui-datepicker-calendar thead th {
	padding: 0.25rem 0;
	text-align: center;
	font-size: 0.75rem;
	font-weight: 400;
	color: #78909C;
}
.ui-datepicker-calendar tbody td {
	width: 2.5rem;
	text-align: center;
	padding: 0;
}
.ui-datepicker-calendar tbody td a {
	display: block;
	border-radius: 0.25rem;
	line-height: 2rem;
	transition: 0.3s all;
	color: #546E7A;
	font-size: 0.875rem;
	text-decoration: none;
}
.ui-datepicker-calendar tbody td a:hover {	
	background-color: #E0F2F1;
}
.ui-datepicker-calendar tbody td a.ui-state-active {
	background-color: #009688;
	color: white;
}
.ui-datepicker-header a.ui-corner-all {
	cursor: pointer;
	position: absolute;
	top: 0;
	width: 2rem;
	height: 2rem;
	margin: 0.5rem;
	border-radius: 0.25rem;
	transition: 0.3s all;
}
.ui-datepicker-header a.ui-corner-all:hover {
	background-color: #ECEFF1;
}
.ui-datepicker-header a.ui-datepicker-prev {	
	left: 0;	
	background: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==");
	background-repeat: no-repeat;
	background-size: 0.5rem;
	background-position: 50%;
	transform: rotate(180deg);
}
.ui-datepicker-header a.ui-datepicker-next {
	right: 0;
	background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==');
	background-repeat: no-repeat;
	background-size: 10px;
	background-position: 50%;
}
.ui-datepicker-header a>span {
	display: none;
}
.ui-datepicker-title {
	text-align: center;
	line-height: 2rem;
	margin-bottom: 0.25rem;
	font-size: 0.875rem;
	font-weight: 500;
	padding-bottom: 0.25rem;
}
.ui-datepicker-week-col {
	color: #78909C;
	font-weight: 400;
	font-size: 0.75rem;
}

@import url('https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap');
body {
  height: 100%; margin: 0
}

a {
    color: #007bff;
    text-decoration: none;
}
button:focus,
input:focus{
  outline: none;
  box-shadow: none;
}
a,
a:hover{
  text-decoration: none;
}

body{
  font-family: 'Roboto', sans-serif;
   background-color: #e0e3e8;
  
}



.form-area {
    background-color: #fff;
    padding: 40px;
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.form-area .form-inner {
    width: 100%;
}
.form-control {
    display: block;
    width: 100%;
    height: auto;
    padding: 15px 19px;
    font-size: 1rem;
    line-height: 1.4;
    color: #475F7B;
    background-color: #FFF;
    border: 1px solid #DFE3E7;
    border-radius: .267rem;
    -webkit-transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.form-control:focus {
    color: #475F7B;
    background-color: #FFF;
    border-color: #5A8DEE;
    outline: 0;
    box-shadow: 0 3px 8px 0 rgb(0 0 0 / 10%);
}
.intl-tel-input,
.iti{
  width: 100%;
}

.md-country-picker-item {
    position: relative;
    line-height: 20px;
    padding: 10px 0 10px 40px;
}

.md-country-picker-flag {
    position: absolute;
    left: 0;
    height: 20px;
}

.mbsc-scroller-wheel-item-2d .md-country-picker-item {
    transform: scale(1.1);
}

    
</style>
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
                        <div class="row justify-content-center">
                            <div class="col-md-6 mt-5 mb-5">
                                <div class="form-area">
                                    <div class="form-inner">
                                        <div>
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
                                            </div>
                                            <div class="form-group mt-2  ">
                                                <div class="border px-4 py-[.5] rounded-lg" id="container-country-number">
                                                <div  class=" flex flex-row items-center relative justify-center">
                                                        <select   name="country" id="countries" class="border-none w-[150px] h-[40px] outline-none"  required>
                                                            <option selected value="">Chose</option>
                                                        </select>
                                                        <input id="mb-number" placeholder="Enter Your Number" name="mb-number" type="text"  class="mb-2 h-[40px] pl-2 border-none outline-none " required>
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                          <div   class="form-group datepicker-container mt-2 "  id="bd-container" >
                                            <label for="datepicker" id="datepicker-label" >Birth Date
                                                </label>	
                                                <input type="text" id="datepicker" autocomplete="off" name="birthdate" >
                                        </div>
                                        <div class="form-group">
                                        <textarea name="address" rows="2" class= " form-control   block p-2.5 w-full text-sm text-gray-900  rounded-lg " placeholder="Address"></textarea>
                                        </div>
                                        <div  class="form-group flex my-3 gap-x-3 items-center ">
                                                    <div class="flex items-end ">
                                                        <input id="male" type="radio" value="male" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                        <label for="male" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Male</label>
                                                    </div>
                                                    <div class="flex items-end ">
                                                        <input checked id="female" type="radio" value="female" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                        <label for="female" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Female</label>
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
</form>

<script>

    $(function(){
$("#complete-info").submit(function(e){
e.preventDefault()
const formData = new FormData(e.currentTarget)
formData.append('profile',$('#profile').prop('files')[0])
formData.append('address',formData.get('address'))
formData.append('gender',formData.get('gender'))
formData.append('mb-number',formData.get('mb-number'))
formData.append('country',formData.get('country'))

        $.ajax({
            type: 'post',
            url: '/freight/visitor-complete-info',
            data:formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                console.log(response)
            }
        })
        })
    })
</script>

<script> 
 const button = document.querySelector('#btn')
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
})
btn.addEventListener('click',()=>{
  input.click()
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
    readURL(e.dataTransfer)   
    $('#dis').show()
})

img.addEventListener('dragleave',(e)=>{
    e.preventDefault()
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

    const countryPN =
     [
    {
    "name": "Afghanistan",
    "dial_code": "+93",
    "code": "AF"
    },
    {
    "name": "Aland Islands",
    "dial_code": "+358",
    "code": "AX"
    },
    {
    "name": "Albania",
    "dial_code": "+355",
    "code": "AL"
    },
    {
    "name": "Algeria",
    "dial_code": "+213",
    "code": "DZ"
    },
    {
    "name": "AmericanSamoa",
    "dial_code": "+1684",
    "code": "AS"
    },
    {
    "name": "Andorra",
    "dial_code": "+376",
    "code": "AD"
    },
    {
    "name": "Angola",
    "dial_code": "+244",
    "code": "AO"
    },
    {
    "name": "Anguilla",
    "dial_code": "+1264",
    "code": "AI"
    },
    {
    "name": "Antarctica",
    "dial_code": "+672",
    "code": "AQ"
    },
    {
    "name": "Antigua and Barbuda",
    "dial_code": "+1268",
    "code": "AG"
    },
    {
    "name": "Argentina",
    "dial_code": "+54",
    "code": "AR"
    },
    {
    "name": "Armenia",
    "dial_code": "+374",
    "code": "AM"
    },
    {
    "name": "Aruba",
    "dial_code": "+297",
    "code": "AW"
    },
    {
    "name": "Australia",
    "dial_code": "+61",
    "code": "AU"
    },
    {
    "name": "Austria",
    "dial_code": "+43",
    "code": "AT"
    },
    {
    "name": "Azerbaijan",
    "dial_code": "+994",
    "code": "AZ"
    },
    {
    "name": "Bahamas",
    "dial_code": "+1242",
    "code": "BS"
    },
    {
    "name": "Bahrain",
    "dial_code": "+973",
    "code": "BH"
    },
    {
    "name": "Bangladesh",
    "dial_code": "+880",
    "code": "BD"
    },
    {
    "name": "Barbados",
    "dial_code": "+1246",
    "code": "BB"
    },
    {
    "name": "Belarus",
    "dial_code": "+375",
    "code": "BY"
    },
    {
    "name": "Belgium",
    "dial_code": "+32",
    "code": "BE"
    },
    {
    "name": "Belize",
    "dial_code": "+501",
    "code": "BZ"
    },
    {
    "name": "Benin",
    "dial_code": "+229",
    "code": "BJ"
    },
    {
    "name": "Bermuda",
    "dial_code": "+1441",
    "code": "BM"
    },
    {
    "name": "Bhutan",
    "dial_code": "+975",
    "code": "BT"
    },
    {
    "name": "Bolivia, Plurinational State of",
    "dial_code": "+591",
    "code": "BO"
    },
    {
    "name": "Bosnia and Herzegovina",
    "dial_code": "+387",
    "code": "BA"
    },
    {
    "name": "Botswana",
    "dial_code": "+267",
    "code": "BW"
    },
    {
    "name": "Brazil",
    "dial_code": "+55",
    "code": "BR"
    },
    {
    "name": "British Indian Ocean Territory",
    "dial_code": "+246",
    "code": "IO"
    },
    {
    "name": "Brunei Darussalam",
    "dial_code": "+673",
    "code": "BN"
    },
    {
    "name": "Bulgaria",
    "dial_code": "+359",
    "code": "BG"
    },
    {
    "name": "Burkina Faso",
    "dial_code": "+226",
    "code": "BF"
    },
    {
    "name": "Burundi",
    "dial_code": "+257",
    "code": "BI"
    },
    {
    "name": "Cambodia",
    "dial_code": "+855",
    "code": "KH"
    },
    {
    "name": "Cameroon",
    "dial_code": "+237",
    "code": "CM"
    },
    {
    "name": "Canada",
    "dial_code": "+1",
    "code": "CA"
    },
    {
    "name": "Cape Verde",
    "dial_code": "+238",
    "code": "CV"
    },
    {
    "name": "Cayman Islands",
    "dial_code": "+ 345",
    "code": "KY"
    },
    {
    "name": "Central African Republic",
    "dial_code": "+236",
    "code": "CF"
    },
    {
    "name": "Chad",
    "dial_code": "+235",
    "code": "TD"
    },
    {
    "name": "Chile",
    "dial_code": "+56",
    "code": "CL"
    },
    {
    "name": "China",
    "dial_code": "+86",
    "code": "CN"
    },
    {
    "name": "Christmas Island",
    "dial_code": "+61",
    "code": "CX"
    },
    {
    "name": "Cocos (Keeling) Islands",
    "dial_code": "+61",
    "code": "CC"
    },
    {
    "name": "Colombia",
    "dial_code": "+57",
    "code": "CO"
    },
    {
    "name": "Comoros",
    "dial_code": "+269",
    "code": "KM"
    },
    {
    "name": "Congo",
    "dial_code": "+242",
    "code": "CG"
    },
    {
    "name": "Congo, The Democratic Republic of the Congo",
    "dial_code": "+243",
    "code": "CD"
    },
    {
    "name": "Cook Islands",
    "dial_code": "+682",
    "code": "CK"
    },
    {
    "name": "Costa Rica",
    "dial_code": "+506",
    "code": "CR"
    },
    {
    "name": "Cote d'Ivoire",
    "dial_code": "+225",
    "code": "CI"
    },
    {
    "name": "Croatia",
    "dial_code": "+385",
    "code": "HR"
    },
    {
    "name": "Cuba",
    "dial_code": "+53",
    "code": "CU"
    },
    {
    "name": "Cyprus",
    "dial_code": "+357",
    "code": "CY"
    },
    {
    "name": "Czech Republic",
    "dial_code": "+420",
    "code": "CZ"
    },
    {
    "name": "Denmark",
    "dial_code": "+45",
    "code": "DK"
    },
    {
    "name": "Djibouti",
    "dial_code": "+253",
    "code": "DJ"
    },
    {
    "name": "Dominica",
    "dial_code": "+1767",
    "code": "DM"
    },
    {
    "name": "Dominican Republic",
    "dial_code": "+1849",
    "code": "DO"
    },
    {
    "name": "Ecuador",
    "dial_code": "+593",
    "code": "EC"
    },
    {
    "name": "Egypt",
    "dial_code": "+20",
    "code": "EG"
    },
    {
    "name": "El Salvador",
    "dial_code": "+503",
    "code": "SV"
    },
    {
    "name": "Equatorial Guinea",
    "dial_code": "+240",
    "code": "GQ"
    },
    {
    "name": "Eritrea",
    "dial_code": "+291",
    "code": "ER"
    },
    {
    "name": "Estonia",
    "dial_code": "+372",
    "code": "EE"
    },
    {
    "name": "Ethiopia",
    "dial_code": "+251",
    "code": "ET"
    },
    {
    "name": "Falkland Islands (Malvinas)",
    "dial_code": "+500",
    "code": "FK"
    },
    {
    "name": "Faroe Islands",
    "dial_code": "+298",
    "code": "FO"
    },
    {
    "name": "Fiji",
    "dial_code": "+679",
    "code": "FJ"
    },
    {
    "name": "Finland",
    "dial_code": "+358",
    "code": "FI"
    },
    {
    "name": "France",
    "dial_code": "+33",
    "code": "FR"
    },
    {
    "name": "French Guiana",
    "dial_code": "+594",
    "code": "GF"
    },
    {
    "name": "French Polynesia",
    "dial_code": "+689",
    "code": "PF"
    },
    {
    "name": "Gabon",
    "dial_code": "+241",
    "code": "GA"
    },
    {
    "name": "Gambia",
    "dial_code": "+220",
    "code": "GM"
    },
    {
    "name": "Georgia",
    "dial_code": "+995",
    "code": "GE"
    },
    {
    "name": "Germany",
    "dial_code": "+49",
    "code": "DE"
    },
    {
    "name": "Ghana",
    "dial_code": "+233",
    "code": "GH"
    },
    {
    "name": "Gibraltar",
    "dial_code": "+350",
    "code": "GI"
    },
    {
    "name": "Greece",
    "dial_code": "+30",
    "code": "GR"
    },
    {
    "name": "Greenland",
    "dial_code": "+299",
    "code": "GL"
    },
    {
    "name": "Grenada",
    "dial_code": "+1473",
    "code": "GD"
    },
    {
    "name": "Guadeloupe",
    "dial_code": "+590",
    "code": "GP"
    },
    {
    "name": "Guam",
    "dial_code": "+1671",
    "code": "GU"
    },
    {
    "name": "Guatemala",
    "dial_code": "+502",
    "code": "GT"
    },
    {
    "name": "Guernsey",
    "dial_code": "+44",
    "code": "GG"
    },
    {
    "name": "Guinea",
    "dial_code": "+224",
    "code": "GN"
    },
    {
    "name": "Guinea-Bissau",
    "dial_code": "+245",
    "code": "GW"
    },
    {
    "name": "Guyana",
    "dial_code": "+595",
    "code": "GY"
    },
    {
    "name": "Haiti",
    "dial_code": "+509",
    "code": "HT"
    },
    {
    "name": "Holy See (Vatican City State)",
    "dial_code": "+379",
    "code": "VA"
    },
    {
    "name": "Honduras",
    "dial_code": "+504",
    "code": "HN"
    },
    {
    "name": "Hong Kong",
    "dial_code": "+852",
    "code": "HK"
    },
    {
    "name": "Hungary",
    "dial_code": "+36",
    "code": "HU"
    },
    {
    "name": "Iceland",
    "dial_code": "+354",
    "code": "IS"
    },
    {
    "name": "India",
    "dial_code": "+91",
    "code": "IN"
    },
    {
    "name": "Indonesia",
    "dial_code": "+62",
    "code": "ID"
    },
    {
    "name": "Iran, Islamic Republic of Persian Gulf",
    "dial_code": "+98",
    "code": "IR"
    },
    {
    "name": "Iraq",
    "dial_code": "+964",
    "code": "IQ"
    },
    {
    "name": "Ireland",
    "dial_code": "+353",
    "code": "IE"
    },
    {
    "name": "Isle of Man",
    "dial_code": "+44",
    "code": "IM"
    },
    {
    "name": "Israel",
    "dial_code": "+972",
    "code": "IL"
    },
    {
    "name": "Italy",
    "dial_code": "+39",
    "code": "IT"
    },
    {
    "name": "Jamaica",
    "dial_code": "+1876",
    "code": "JM"
    },
    {
    "name": "Japan",
    "dial_code": "+81",
    "code": "JP"
    },
    {
    "name": "Jersey",
    "dial_code": "+44",
    "code": "JE"
    },
    {
    "name": "Jordan",
    "dial_code": "+962",
    "code": "JO"
    },
    {
    "name": "Kazakhstan",
    "dial_code": "+77",
    "code": "KZ"
    },
    {
    "name": "Kenya",
    "dial_code": "+254",
    "code": "KE"
    },
    {
    "name": "Kiribati",
    "dial_code": "+686",
    "code": "KI"
    },
    {
    "name": "Korea, Democratic People's Republic of Korea",
    "dial_code": "+850",
    "code": "KP"
    },
    {
    "name": "Korea, Republic of South Korea",
    "dial_code": "+82",
    "code": "KR"
    },
    {
    "name": "Kuwait",
    "dial_code": "+965",
    "code": "KW"
    },
    {
    "name": "Kyrgyzstan",
    "dial_code": "+996",
    "code": "KG"
    },
    {
    "name": "Laos",
    "dial_code": "+856",
    "code": "LA"
    },
    {
    "name": "Latvia",
    "dial_code": "+371",
    "code": "LV"
    },
    {
    "name": "Lebanon",
    "dial_code": "+961",
    "code": "LB"
    },
    {
    "name": "Lesotho",
    "dial_code": "+266",
    "code": "LS"
    },
    {
    "name": "Liberia",
    "dial_code": "+231",
    "code": "LR"
    },
    {
    "name": "Libyan Arab Jamahiriya",
    "dial_code": "+218",
    "code": "LY"
    },
    {
    "name": "Liechtenstein",
    "dial_code": "+423",
    "code": "LI"
    },
    {
    "name": "Lithuania",
    "dial_code": "+370",
    "code": "LT"
    },
    {
    "name": "Luxembourg",
    "dial_code": "+352",
    "code": "LU"
    },
    {
    "name": "Macao",
    "dial_code": "+853",
    "code": "MO"
    },
    {
    "name": "Macedonia",
    "dial_code": "+389",
    "code": "MK"
    },
    {
    "name": "Madagascar",
    "dial_code": "+261",
    "code": "MG"
    },
    {
    "name": "Malawi",
    "dial_code": "+265",
    "code": "MW"
    },
    {
    "name": "Malaysia",
    "dial_code": "+60",
    "code": "MY"
    },
    {
    "name": "Maldives",
    "dial_code": "+960",
    "code": "MV"
    },
    {
    "name": "Mali",
    "dial_code": "+223",
    "code": "ML"
    },
    {
    "name": "Malta",
    "dial_code": "+356",
    "code": "MT"
    },
    {
    "name": "Marshall Islands",
    "dial_code": "+692",
    "code": "MH"
    },
    {
    "name": "Martinique",
    "dial_code": "+596",
    "code": "MQ"
    },
    {
    "name": "Mauritania",
    "dial_code": "+222",
    "code": "MR"
    },
    {
    "name": "Mauritius",
    "dial_code": "+230",
    "code": "MU"
    },
    {
    "name": "Mayotte",
    "dial_code": "+262",
    "code": "YT"
    },
    {
    "name": "Mexico",
    "dial_code": "+52",
    "code": "MX"
    },
    {
    "name": "Micronesia, Federated States of Micronesia",
    "dial_code": "+691",
    "code": "FM"
    },
    {
    "name": "Moldova",
    "dial_code": "+373",
    "code": "MD"
    },
    {
    "name": "Monaco",
    "dial_code": "+377",
    "code": "MC"
    },
    {
    "name": "Mongolia",
    "dial_code": "+976",
    "code": "MN"
    },
    {
    "name": "Montenegro",
    "dial_code": "+382",
    "code": "ME"
    },
    {
    "name": "Montserrat",
    "dial_code": "+1664",
    "code": "MS"
    },
    {
    "name": "Morocco",
    "dial_code": "+212",
    "code": "MA"
    },
    {
    "name": "Mozambique",
    "dial_code": "+258",
    "code": "MZ"
    },
    {
    "name": "Myanmar",
    "dial_code": "+95",
    "code": "MM"
    },
    {
    "name": "Namibia",
    "dial_code": "+264",
    "code": "NA"
    },
    {
    "name": "Nauru",
    "dial_code": "+674",
    "code": "NR"
    },
    {
    "name": "Nepal",
    "dial_code": "+977",
    "code": "NP"
    },
    {
    "name": "Netherlands",
    "dial_code": "+31",
    "code": "NL"
    },
    {
    "name": "Netherlands Antilles",
    "dial_code": "+599",
    "code": "AN"
    },
    {
    "name": "New Caledonia",
    "dial_code": "+687",
    "code": "NC"
    },
    {
    "name": "New Zealand",
    "dial_code": "+64",
    "code": "NZ"
    },
    {
    "name": "Nicaragua",
    "dial_code": "+505",
    "code": "NI"
    },
    {
    "name": "Niger",
    "dial_code": "+227",
    "code": "NE"
    },
    {
    "name": "Nigeria",
    "dial_code": "+234",
    "code": "NG"
    },
    {
    "name": "Niue",
    "dial_code": "+683",
    "code": "NU"
    },
    {
    "name": "Norfolk Island",
    "dial_code": "+672",
    "code": "NF"
    },
    {
    "name": "Northern Mariana Islands",
    "dial_code": "+1670",
    "code": "MP"
    },
    {
    "name": "Norway",
    "dial_code": "+47",
    "code": "NO"
    },
    {
    "name": "Oman",
    "dial_code": "+968",
    "code": "OM"
    },
    {
    "name": "Pakistan",
    "dial_code": "+92",
    "code": "PK"
    },
    {
    "name": "Palau",
    "dial_code": "+680",
    "code": "PW"
    },
    {
    "name": "Palestinian Territory, Occupied",
    "dial_code": "+970",
    "code": "PS"
    },
    {
    "name": "Panama",
    "dial_code": "+507",
    "code": "PA"
    },
    {
    "name": "Papua New Guinea",
    "dial_code": "+675",
    "code": "PG"
    },
    {
    "name": "Paraguay",
    "dial_code": "+595",
    "code": "PY"
    },
    {
    "name": "Peru",
    "dial_code": "+51",
    "code": "PE"
    },
    {
    "name": "Philippines",
    "dial_code": "+63",
    "code": "PH"
    },
    {
    "name": "Pitcairn",
    "dial_code": "+872",
    "code": "PN"
    },
    {
    "name": "Poland",
    "dial_code": "+48",
    "code": "PL"
    },
    {
    "name": "Portugal",
    "dial_code": "+351",
    "code": "PT"
    },
    {
    "name": "Puerto Rico",
    "dial_code": "+1939",
    "code": "PR"
    },
    {
    "name": "Qatar",
    "dial_code": "+974",
    "code": "QA"
    },
    {
    "name": "Romania",
    "dial_code": "+40",
    "code": "RO"
    },
    {
    "name": "Russia",
    "dial_code": "+7",
    "code": "RU"
    },
    {
    "name": "Rwanda",
    "dial_code": "+250",
    "code": "RW"
    },
    {
    "name": "Reunion",
    "dial_code": "+262",
    "code": "RE"
    },
    {
    "name": "Saint Barthelemy",
    "dial_code": "+590",
    "code": "BL"
    },
    {
    "name": "Saint Helena, Ascension and Tristan Da Cunha",
    "dial_code": "+290",
    "code": "SH"
    },
    {
    "name": "Saint Kitts and Nevis",
    "dial_code": "+1869",
    "code": "KN"
    },
    {
    "name": "Saint Lucia",
    "dial_code": "+1758",
    "code": "LC"
    },
    {
    "name": "Saint Martin",
    "dial_code": "+590",
    "code": "MF"
    },
    {
    "name": "Saint Pierre and Miquelon",
    "dial_code": "+508",
    "code": "PM"
    },
    {
    "name": "Saint Vincent and the Grenadines",
    "dial_code": "+1784",
    "code": "VC"
    },
    {
    "name": "Samoa",
    "dial_code": "+685",
    "code": "WS"
    },
    {
    "name": "San Marino",
    "dial_code": "+378",
    "code": "SM"
    },
    {
    "name": "Sao Tome and Principe",
    "dial_code": "+239",
    "code": "ST"
    },
    {
    "name": "Saudi Arabia",
    "dial_code": "+966",
    "code": "SA"
    },
    {
    "name": "Senegal",
    "dial_code": "+221",
    "code": "SN"
    },
    {
    "name": "Serbia",
    "dial_code": "+381",
    "code": "RS"
    },
    {
    "name": "Seychelles",
    "dial_code": "+248",
    "code": "SC"
    },
    {
    "name": "Sierra Leone",
    "dial_code": "+232",
    "code": "SL"
    },
    {
    "name": "Singapore",
    "dial_code": "+65",
    "code": "SG"
    },
    {
    "name": "Slovakia",
    "dial_code": "+421",
    "code": "SK"
    },
    {
    "name": "Slovenia",
    "dial_code": "+386",
    "code": "SI"
    },
    {
    "name": "Solomon Islands",
    "dial_code": "+677",
    "code": "SB"
    },
    {
    "name": "Somalia",
    "dial_code": "+252",
    "code": "SO"
    },
    {
    "name": "South Africa",
    "dial_code": "+27",
    "code": "ZA"
    },
    {
    "name": "South Sudan",
    "dial_code": "+211",
    "code": "SS"
    },
    {
    "name": "South Georgia and the South Sandwich Islands",
    "dial_code": "+500",
    "code": "GS"
    },
    {
    "name": "Spain",
    "dial_code": "+34",
    "code": "ES"
    },
    {
    "name": "Sri Lanka",
    "dial_code": "+94",
    "code": "LK"
    },
    {
    "name": "Sudan",
    "dial_code": "+249",
    "code": "SD"
    },
    {
    "name": "Suriname",
    "dial_code": "+597",
    "code": "SR"
    },
    {
    "name": "Svalbard and Jan Mayen",
    "dial_code": "+47",
    "code": "SJ"
    },
    {
    "name": "Swaziland",
    "dial_code": "+268",
    "code": "SZ"
    },
    {
    "name": "Sweden",
    "dial_code": "+46",
    "code": "SE"
    },
    {
    "name": "Switzerland",
    "dial_code": "+41",
    "code": "CH"
    },
    {
    "name": "Syrian Arab Republic",
    "dial_code": "+963",
    "code": "SY"
    },
    {
    "name": "Taiwan",
    "dial_code": "+886",
    "code": "TW"
    },
    {
    "name": "Tajikistan",
    "dial_code": "+992",
    "code": "TJ"
    },
    {
    "name": "Tanzania, United Republic of Tanzania",
    "dial_code": "+255",
    "code": "TZ"
    },
    {
    "name": "Thailand",
    "dial_code": "+66",
    "code": "TH"
    },
    {
    "name": "Timor-Leste",
    "dial_code": "+670",
    "code": "TL"
    },
    {
    "name": "Togo",
    "dial_code": "+228",
    "code": "TG"
    },
    {
    "name": "Tokelau",
    "dial_code": "+690",
    "code": "TK"
    },
    {
    "name": "Tonga",
    "dial_code": "+676",
    "code": "TO"
    },
    {
    "name": "Trinidad and Tobago",
    "dial_code": "+1868",
    "code": "TT"
    },
    {
    "name": "Tunisia",
    "dial_code": "+216",
    "code": "TN"
    },
    {
    "name": "Turkey",
    "dial_code": "+90",
    "code": "TR"
    },
    {
    "name": "Turkmenistan",
    "dial_code": "+993",
    "code": "TM"
    },
    {
    "name": "Turks and Caicos Islands",
    "dial_code": "+1649",
    "code": "TC"
    },
    {
    "name": "Tuvalu",
    "dial_code": "+688",
    "code": "TV"
    },
    {
    "name": "Uganda",
    "dial_code": "+256",
    "code": "UG"
    },
    {
    "name": "Ukraine",
    "dial_code": "+380",
    "code": "UA"
    },
    {
    "name": "United Arab Emirates",
    "dial_code": "+971",
    "code": "AE"
    },
    {
    "name": "United Kingdom",
    "dial_code": "+44",
    "code": "GB"
    },
    {
    "name": "United States",
    "dial_code": "+1",
    "code": "US"
    },
    {
    "name": "Uruguay",
    "dial_code": "+598",
    "code": "UY"
    },
    {
    "name": "Uzbekistan",
    "dial_code": "+998",
    "code": "UZ"
    },
    {
    "name": "Vanuatu",
    "dial_code": "+678",
    "code": "VU"
    },
    {
    "name": "Venezuela, Bolivarian Republic of Venezuela",
    "dial_code": "+58",
    "code": "VE"
    },
    {
    "name": "Vietnam",
    "dial_code": "+84",
    "code": "VN"
    },
    {
    "name": "Virgin Islands, British",
    "dial_code": "+1284",
    "code": "VG"
    },
    {
    "name": "Virgin Islands, U.S.",
    "dial_code": "+1340",
    "code": "VI"
    },
    {
    "name": "Wallis and Futuna",
    "dial_code": "+681",
    "code": "WF"
    },
    {
    "name": "Yemen",
    "dial_code": "+967",
    "code": "YE"
    },
    {
    "name": "Zambia",
    "dial_code": "+260",
    "code": "ZM"
    },
    {
    "name": "Zimbabwe",
    "dial_code": "+263",
    "code": "ZW"
    }
    ]

    countryPN.forEach((data) => {
    const option = document.createElement('option')
    option.value = data.name
    option.textContent =  `${data["name"].slice(0,7)}...` + " "+" " +`(${data["dial_code"]})`
    $('#countries').append(option)
});

</script>





