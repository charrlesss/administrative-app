<style>
    #message-container{
        height: auto;
        width: 100%;
        position: relative;
        padding:15px;
        display:flex;
        column-gap:5px;
        flex-direction:column;
    }
    #message-container #message-from{
        width: 100%;
        height:auto;
        position: relative;
        display:flex;
        justify-content:end;
    }
    #message-container #message-to{
        width: 100%;
        height:auto;
        position: relative;
    }
    #message-container #message-to p ,  #message-container #message-from p {
        color:white;
        margin:5px 0;
        padding:5px 15px;
        overflow-wrap: break-word;
        max-width: 30ch;
    }
    #message-container #message-to p.from-top{
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
        border-bottom-left-radius: 20px;
    }
    #message-container #message-to p.from-bottom{
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
    }

    #message-container #message-from p.from-top{
        border-top-left-radius: 20px;
        border-bottom-right-radius: 20px;
        border-bottom-left-radius: 20px;
    }
    #message-container #message-from p.from-bottom{
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        border-bottom-left-radius: 20px;
    }
    #message-container #message-to div{
        position: relative;
        float: left;
    }
    #message-container #message-from div{
        positione: relative;
        float: right;
        
    }
    #message-container #message-to div p {
        background-color: #A45D5D;
    }
    #message-container #message-from div p{
        background-color: rgb(79 70 229);
    }
    
</style>

<div id="main-container" class=" bg-indigo-50 rounded-lg  w-full h-[90%] overflow-y-scroll overflow-x-hidden ">
    <div id="message-container">
      
    </div>
</div>

<script src="/freight/views/js/fetch-messages.js" ></script>

<script>
    function scrollToBottom(id){
        $(`#${id}`).animate({scrollTop:9999999},"slow");
    }
</script>

<script>
    function getVisitorDetails(){
        $.ajax({
            type: "POST",
            url: "/freight/get-details-visitor-management",
            dataType: "json",
            data: { visitor_id },
            success: function(res){
                const con = document.getElementById('header-messages')
                con.innerHTML = ''
                const h1 = document.createElement('h1')
                const p = document.createElement('p')
                const img = document.createElement('img')
                
                
                h1.className = 'md:text-2xl text-xl text-indigo-700 font-semibold uppercase my-5'
                p.className = 'md:text-md text-xs text-indigo-500 font-semibold uppercase my-5'
                h1.textContent = 'inquirers :'
                p.textContent = res.visitor.fullname
                img.src = url + res.visitor.profile
                img.className = 'p-1 md:w-8 md:h-8 w-6 h-6 rounded-full ring-2  ring-indigo-300 dark:ring-indigo-500'
                
                con.append(h1)
                con.append(p)
                con.append(img)
                
                
            },
            error: function (_, __, ___) {
                console.log(_);
                console.log(__);
                console.log(___);
            },
        });
    }
    
</script>

<script>
    function updateSeenMessageOnPage(from_id) {
  $.ajax({
    type: "POST",
    url: "/freight/update-seen-inquirers-participants",
    dataType: "json",
    data: { message_id: from_id },
    success: function (res) {
        if(Boolean(res.success)){
            scrollToBottom('main-container')
        }
    },
    error: function (_, __, ___) {
      console.log(_);
      console.log(__);
      console.log(___);
    },
  });
}
</script>
<script>
    const visitor_id ="<?php echo $participant_id ?>"
    const messagesContainer = document.getElementById('message-container');
    getAllMessagesVisitorManagement(visitor_id,function(res){
        displayllMessagesVisitorManagement(messagesContainer,res,url)
    })
    updateSeenMessageOnPage(visitor_id)
    getVisitorDetails()
    scrollToBottom('main-container')
    setInterval(() => {
        updateSeenMessageOnPage(visitor_id)
        getVisitorDetails()
        getAllMessagesVisitorManagement(visitor_id,function(res){
            displayllMessagesVisitorManagement(messagesContainer,res,url)
        })
       
    }, 2000);
</script>


