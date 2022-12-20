<style>
    #message-container{
        height: auto;
        width: 100%;
        position: relative;
        padding:5px;
        display:flex;
        column-gap:5px;
        flex-direction:column;
    }
    #message-container #message-from-you{
        width: 100%;
        height:auto;
        position: relative;
    }
    #message-container #message-from-visitor-management{
        width: 100%;
        height:auto;
        position: relative;
    }
    #message-container #message-from-visitor-management p ,  #message-container #message-from-you p {
        color:white;
        margin:5px 0;
        padding:5px 15px;
        border-radius: 20px;
        overflow-wrap: break-word;
        max-width: 30ch;
    }
    #message-container #message-from-visitor-management p {
        background-color: rgb(129 140 248);
        float: left;
    }
    #message-container #message-from-you p {
        background-color: rgb(79 70 229);
        float: right;
    }
</style>
<div class="border border-1 bg-indigo-50 rounded-lg border-indigo-400 w-full h-[80%] overflow-y-scroll overflow-x-hidden">
    <div id="message-container">
        <div id="message-from-you">
            <p >message-from-you</p>
        </div>
        <div id="message-from-you">
            <p >message-from-you qweqweqweqweqweqweqweqweqwe qwewqeeeeeeeeee qweqweqweqweqwe</p>
        </div> 
        <div id="message-from-you">
            <p >message-from-you</p>
        </div>
        <div id="message-from-visitor-management">
            <p >message-from-you</p>
        </div>
    </div>
</div>