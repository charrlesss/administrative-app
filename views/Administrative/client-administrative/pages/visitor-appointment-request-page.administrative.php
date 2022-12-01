<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/layout/header-setup-administrative.php');
?>
<header>
<body>
<main class="w-screen h-screen ">
    <div class="flex relative h-full w-full ">
         <!-- sidebar -->
        <?php
        include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/client-administrative/components/sidebar-administrative.php');
        ?>

        <div class="w-full h-full overflow-x-hidden relative">
        <!-- header -->
            <div id="visitor-header" class="absolute bg-white z-[50] top-0 r-0 l-0  w-full shadow-lg">
                <div  class="flex justify-between  pl-3 xl:pr-20 pr-10 items-center">
                    <?php
                include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/client-administrative/components/visitor-header.administrative.php');
                ?>
                </div>
            </div>
              <!-- content -->
                <div class="mt-[64px] w-full h-[calc(100%-200px)] "> 
                    <div class="w-full h-full  relative ">
                            <div class="flex gap-x-3 p-3 md:gap-y-0 gap-y-3 l flex-wrap absolute  top-0 left-0  bg-white shadow z-[50]">
                                <button id="btn-1" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">company policy</button>
                                <button id="btn-2" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">create request appoinment</button>
                                <button id="btn-3" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">list of request appoinment</button>
                            </div>
                            <div id="render-page" class="w-full h-full relative flex justify-center items-center  ">
                                
                            </div>
                    </div>
                </div>

         </div>
    </div>
</main >
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
<script>
    const renderPageContainer = document.querySelector('#render-page')
    
 const data =    [
    `<div id="content-1" class="mt-36 px-3  w-full h-full absolute left-0 -translate-x-[50%] "> 
    <section class="w-full h-full">
        <h1 class="text-indigo-500 font-['Bebas_Neue'] text-black md:text-[3rem] text-[2rem] font-semibold  tracking-[4px]">
          You need to know about visiting
        </h1>
        <div class=" w-full h-auto relative mt-2 flex xl:flex-row flex-col xl:justify-center xl:items-center gap-x-4">
          <div class="p-6 xl:max-w-sm w-full bg-white xl:rounded-lg xl:border xl:border-gray-200 xl:shadow-md xl:dark:bg-gray-800 xl:dark:border-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
              Purpose of this visitor policy
            </h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
              This workplace visitor policy will outline the rules that all
              company associates are expected to follow when receiving guests of
              any kind. Our workplace guest policies are intended to ensure that
              visitors do not:
            </p>
            <ul class="pl-4 list-disc text-sm mb-4">
              <li> Distract employees from work</li>
              <li>Pose a threat to anyone's safety</li>
              <li>Compromise any of our security systems or properties</li>
            </ul>
          </div>

          <div class="p-6 xl:max-w-sm w-full bg-white xl:rounded-lg xl:border xl:border-gray-200 xl:shadow-md xl:dark:bg-gray-800 xl:dark:border-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
              Who this visitor policy applies to
            </h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
              A "workplace visitor" refers to any non-employee who is visiting
              for any reason. A workplace visitor can include:
            </p>
            <ul class="pl-4 list-disc text-sm mb-4">
              <li> Clients</li>
              <li>Public</li>
              <li>Vendors</li>
              <li>Job candidates</li>
              <li>Temporary workers</li>
              <li>Investors</li>
              <li>Consultants</li>
              <li>Students</li>
              <li>Family members or friendspersonal visitors</li>
            </ul>
          </div>

          <div class="p-6 xl:max-w-sm w-full bg-white xl:rounded-lg xl:border xl:border-gray-200 xl:shadow-md xl:dark:bg-gray-800 xl:dark:border-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
              Visitor rules and procedures
            </h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
              A "workplace visitor" refers to any non-employee who is visiting
              for any reason. A workplace visitor can include:
            </p>
            <ul class="pl-4  list-disc text-sm mb-4">
              <li>
                All visitors should have an appointment before they arrive.
              </li>
              <li>
                All visitors must check in with the front desk or security gate,
                front office, reception area, etc. and provide a form of
                identification.
              </li>
              <li>
                All visitors will be provided with a guest pass and must wear it
                in a way that can be easily seen at all times.
              </li>
              <li>
                Checked-in visitors must wait in the designated reception area
                until they're met by the employee with whom they have an
                appointment.
              </li>
              <li>
                Visitors may not misuse our internet connection or disclose any
                confidential information, which includes taking unauthorized
                photos and recording audio or video without written consent.
              </li>
              <li>
                Visitors must check out with the front desk and return their
                guest card.
              </li>
            </ul>
          </div>
        </div>
      </section>
    </div>`,
    `<div id="content-2" class="mt-36 px-3  w-[600px]  h-[600px] border border-green-500  absolute left-0 -translate-x-[50%]"> 
    content 2
    </div>`,
    `<div id="content-3" class="mt-36 px-3  w-[600px]  h-[600px] border border-yellow-500  absolute left-0 -translate-x-[50%]"> 
     content 3
    </div>`,
]

let count = 0

function buttonClick(){
    $('#btn-1').click(function(){
        $(`#content-${count+1}`).animate({left:'200%'},500 ,function(){
            count = 0
            renderPageContainer.innerHTML = data[count]
            $(`#content-${count+1}`).animate({left:'50%'},500)
        })
    })

    $('#btn-2').click(function(){
        
        $(`#content-${count+1}`).animate({left:'200%'},500 ,function(){
            count = 1
            renderPageContainer.innerHTML = data[count]
            $(`#content-${count+1}`).animate({left:'50%'},500)
        })
        
    })

    $('#btn-3').click(function(){
        $(`#content-${count+1}`).animate({left:'200%'},500 ,function(){
            count = 2
            renderPageContainer.innerHTML = data[count]
            $(`#content-${count+1}`).animate({left:'50%'},500)
        })
    })
    
}

function renderContent(){
    renderPageContainer.innerHTML = data[count]

    $(`#content-${count+1}`).animate({left:'50%'},500)
    buttonClick()
    return
}

renderContent()


</script>

<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/layout/footer-setup-administrative.php');
?>