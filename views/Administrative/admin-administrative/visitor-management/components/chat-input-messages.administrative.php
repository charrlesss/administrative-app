<style>
    span.ripples {
  position: absolute;
  background: #c7d2fe;
  transform: translate(-50%, -50%);
  pointer-events: none;
  border-radius: 50%;
  animation: animate 1s linear infinite;
  top:50%;
  left:50%;
  tranform:translate(-50%,-50%);
}
@keyframes animate {
  0% {
    width: 0;
    height: 0;
    opacity: 0.5;
  }
  100% {
    width: 100px;
    height: 100px;
    opacity: 0;
  }
}
</style>
<form id="message-form" class=" w-full h-[20%] flex gap-x-2">
    <div class="md:w-[90%] w-[80%] h-auto  flex items-center">
    <textarea 
    class="w-full h-[100px] border-indigo-500 border border-2 rounded-lg p-2 focus:outline-2 focus:outline-indigo-600"
    name="visitor-management-message" 
    id="visitor-management-message" 
    cols="20"
    >
    </textarea>
    </div>
    <div class="md:w-[10%]  w-[20%]  flex items-center">
        <button id="message-button" class="relative w-full h-[100px] border border-2 border-indigo-500 hover:border-indigo-600 hover:bg-indigo-50 rounded-lg flex items-center justify-center">
            <svg class="h-10 w-10 text-indigo-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">
                <line x1="22" y1="2" x2="11" y2="13" />
                <polygon points="22 2 15 22 11 13 2 9 22 2" />
            </svg>
        </button>
    </div>
</form>


<script>
function ripplesEffect(){
    let ripples = document.createElement('span');
    ripples.className="ripples"
    ripples.style.left = '50%';
    ripples.style.top = '50%';
    document.getElementById("message-button").appendChild(ripples);
    setTimeout(() => {
    ripples.remove()
    },1000);
}
</script>

<script>
     $("#message-button").hover(
    function () {
        $("#message-button svg").css({width:"45px",height:"45px"})
    }, 			
    function () {
          $("#message-button svg").css({width:"40px",height:"40px"})
    })
   
</script>

<script>
    function displayMyMessages(input){
    const div = document.createElement("div");
    const message = document.createElement("p");
    div.id = 'message-from'
    message.textContent = input;
    div.append(message);
    messagesContainer.append(div)
    }
</script>

<script>
      $("#message-form").submit(function(e){
            e.preventDefault()
            ripplesEffect()
            const formData = new FormData(e.currentTarget)
            if(formData.get("visitor-management-message").trim() === ''){
                return
            }
            displayMyMessages(formData.get("visitor-management-message").trim())
            scrollToBottom('main-container')
            document.getElementById('visitor-management-message').value = ''
            $.ajax({
                type: "POST",
                url: '/freight/create-message-visitor-management',
                data: ({message:formData.get("visitor-management-message").trim(),visitor_id:"<?php echo $participant_id ?>"}),
                dataType: 'json',
                success: function(res){
                    console.log(res)
                    
                },
                error: function(__,___,____){
                    console.log(__)
                    console.log(___)
                    console.log(____)
                }
            });
        })
</script>

<script>

document.getElementById('visitor-management-message').addEventListener('keypress',(event)=>{
    if((event.code === 'Enter' || event.code === 'NumpadEnter') && event.shiftKey === false){
        event.target.form.dispatchEvent(new Event("submit", {cancelable: true}));
        event.preventDefault();
    }
})
</script>

