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

<div id="main-container" class=" bg-indigo-50 rounded-lg  w-full h-[90%] overflow-y-scroll overflow-x-hidden">
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
    const url = "<?php  echo $GLOBALS['url']."/assets/profile/";  ?>"
    const messagesContainer = document.getElementById('message-container');
    const visitor_id ="<?php echo $_SESSION["user_login_administrative"]; ?>"
    scrollToBottom("main-container")
    getAllMessagesVisitorManagement(visitor_id ,function(res){
        displayMessagesVisitor(messagesContainer,res,url,function(){
            scrollToBottom("main-container")
        })
    })

    setInterval(() => {
        getAllMessagesVisitorManagement(visitor_id ,function(res){
            displayMessagesVisitor(messagesContainer,res,url,function(){
                scrollToBottom("main-container")
             })
        })
    }, 2000);

</script>