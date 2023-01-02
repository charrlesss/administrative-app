<div class="w-full border h-full  border-x-[1px]   border-b-[1px]"> 
    <h1 class="text-2xl font-semibold py-2 text-center text-indigo-500">Visitors Today</h1>
    <div id="visitor-today-list" class=" relative shadow-md  h-full  drop-shadow-xl"></div>
</div>  

<script src="/freight/views/js/visitor-today.js"></script>

<script>
   const profileTodayVisitUrl = "<?php echo $GLOBALS['url']."/assets/profile"; ?>"
    fetchVisitorToday(profileTodayVisitUrl)
</script>

 <!---  empty -->
                    <!--   -->