<div class="w-full h-auto relative py-5 " id="inquirers-container">
  
</div>

<script src="/freight/views/js/inquirers-participants.js" ></script>
<script src='https://momentjs.com/downloads/moment.js'></script>


<script>
    const url = "<?php  echo $GLOBALS['url']."/assets/profile/";  ?>"
    const container = document.getElementById('inquirers-container')
    inquirersParticipants(function(res){
        displayInquirersParticipants(container,res,url)
    })
    setInterval(() => {
        const url = "<?php  echo $GLOBALS['url']."/assets/profile/";  ?>"
        const container = document.getElementById('inquirers-container')
        inquirersParticipants(function(res){
            displayInquirersParticipants(container,res,url)
        })
    }, 2000);
    
</script>