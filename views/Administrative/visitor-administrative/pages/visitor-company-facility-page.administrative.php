<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/layout/header-setup-administrative.php');
?>
<header>
<body>

<main class="w-screen h-screen ">
    <div class="flex relative h-full w-full ">
         <!-- sidebar -->
        <?php
        include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/visitor-administrative/components/sidebar-administrative.php');
        ?>

        <div class="w-full h-full overflow-x-hidden relative">
        <!-- header -->
            <div id="visitor-header" class="absolute bg-white z-[50] top-0 r-0 l-0 w-full shadow-lg">
                <div  class="flex justify-between  pl-3 xl:pr-20 pr-10 items-center">
                    <?php
                include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/visitor-administrative/components/visitor-header.administrative.php');
                ?>
                </div>
            </div>

              <!-- content -->
                <div  class="my-24 w-full flex md:flex-row flex-col h-full px-4 md:gap-x-3 gap-x-0  md:gap-y-0 gap-y-3 ">
                    <div id="company" class="md:w-[40%] w-full">
                    </div>
                    <div id="company-facility" class="md:w-[60%] w-full flex flex-col gap-y-3 ">
                    </div>
                </div>
         </div>
    </div>
</main >

<script >
    const company_facility = document.querySelector('#company-facility')
    const company = document.querySelector('#company')
    const url = "<?php echo $GLOBALS['url'].'/assets/img/'; ?>"
       $.ajax({ 
              type: "GET",
              url: "/freight/get-company-facility",             
              dataType: "json",                  
              success: function(res){ 
                    const {
                        company_address,
                        company_description,
                        company_image,
                        company_location,
                        company_name
                    } = res.company[0].company

                    let amenitiesData = ''
                    let servicesData = ''
                    res.company[0].amenities.forEach(({amenities}) => {
                        amenitiesData += `<p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-sm md:text-[15px]">${amenities}.</p>`
                    });
                    res.company[0].services.forEach(({services}) => {
                        servicesData += `<p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-sm md:text-[15px]">${services}.</p>`
                    });

                    company.insertAdjacentHTML("afterbegin", `
                          <div class="p-4 flex flex-col items-center bg-white border rounded-lg shadow-md  hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <img class=" object-cover w-full rounded-t-lg h-auto w-auto md:rounded-none md:rounded-l-lg" src="${url}${company_image}" alt="${company_image}">
                                <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class=" md:text-xl text-lg tracking-tight text-gray-900 dark:text-white uppercase font-semibold mb-10">company</h5>
                                    <h5 class="mb-2 md:text-xl text-lg tracking-tight text-gray-900 dark:text-white uppercase font-semibold">${company_name}</h5>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-sm md:text-[15px]">${company_description}.</p>
                                </div>

                                <div class="px-4 text-left w-full flex justify-start">
                                    <div class="block w-auto">
                                    <h5 class="mb-2 md:text-lg text-md tracking-tight text-gray-900 dark:text-white uppercase font-semibold">amenities</h5>
                                        ${amenitiesData}
                                    </div>
                                </div>
                                <div class="px-4 text-left w-full flex justify-start">
                                    <div class="block w-auto">
                                    <h5 class="mb-2 md:text-lg text-md tracking-tight text-gray-900 dark:text-white uppercase font-semibold">services</h5>
                                        ${servicesData}
                                    </div>
                                </div>
                                <div class="px-4 flex w-full justify-start gap-x-2 my-5">
                                    <button id="map_location" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                         Location
                                    </button>
                                    <button id="map_direction" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                        Direction
                                    </button>
                                </div>
                            </div>
                    `)
                  res.facility.forEach(data => {
                        company_facility.insertAdjacentHTML("afterbegin",
                        ` <a href="/freight/administrative/visitor-dashboard/company-facility/${data.facility.facility_id}" class="p-4 flex flex-col items-center bg-white border rounded-lg shadow-md 2xl:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <img class=" object-cover w-full rounded-t-lg h-auto w-auto md:rounded-none md:rounded-l-lg" src="${url}${data.facility.facility_image}" alt="${data.facility.facility_image}">
                                <div class="flex flex-col justify-between p-4 leading-normal">
                                    <h5 class="mb-2 md:text-xl text-lg tracking-tight text-gray-900 dark:text-white uppercase font-semibold">${data.facility.facility_name}</h5></h5>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-sm md:text-[15px]">${data.facility.facility_description}</p>
                                </div>
                            </a>
                            `)

                    });
                 
                    init(company_location)       

                }
            })
</script>

<script>
    function init(location){
        $("#map_location").click(function(){
            console.log('map_location')
            window.open(
            `https://maps.google.com/?q=${location}`,
            "_self"
            );
        })
        $("#map_direction").click(function(){
            console.log('map_direction')

            navigator.geolocation.getCurrentPosition(function (position) {
            window.open(
                `https://www.google.com/maps/dir/?api=1&origin=${
                position.coords.latitude
                },${
                position.coords.longitude
                }&destination=${location}`,
                "_self"
            );
            }); 
        })
    }
</script>



<?php
include( $_SERVER['DOCUMENT_ROOT'].'/freight/views/Administrative/layout/footer-setup-administrative.php');
?>

