<!DOCTYPE html>
<html lang="en">
<?php 
    $GLOBALS['page_title']="Scheduled Sessions";
    include '../includes/head.php';
    require '../controller/Patient.controller.php';
?>
<body>

    <div id="page-content" class="">

        <div id="sidebar" class="">
            <?php 
                $GLOBALS['current_page'] = 'my_bookings';
                include '../includes/paitent-sidebar.php';
            ?>
        </div>

        <div class="p-5 pl-[18rem] w-full">
            <!-- TOP PAGE BAR GOES HERE -->
            <div id="top-bar" class="flex justify-between items-center">
                <div class="flex justify-start  w-5/6" >
                    <a href="" class="w-1/6">
                        <div class="flex justify-center items-center bg-blue-200 text-blue-600 rounded-md w-[7rem] h-[2.5rem] text-lg font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/></svg><span class="m-[8px]">Back</span>
                        </div>
                    </a>
                    <form action="" class="flex justify-start ml-7 w-5/6" >

                        <div class="w-5/6" >
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#616161" class="fixed mt-2 ml-2 "><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
                            <input type="text" placeholder="Search Doctor name or Email or Date (YYY-MM-DD)" class="border-[1px] rounded h-[2.5rem]  pl-[2rem] w-full" style="font-family:arial,fontawesome;">
                        </div>

                        <button class="flex justify-center items-center bg-blue-500 text-white rounded-md w-[7rem] h-[2.5rem] text-lg font-medium ml-6 w-1/6">
                            <span class="m-[8px]">Search</span>
                        </button>
                    </form>
                </div>
                <div class="flex justify-center content-end">

                    <div class="flex flex-col content-center mr-3">
                        <span class="text-zinc-400 text-end">Today's Date</span>
                        <span class="text-black text-2xl font-semibold"><?= date("Y-m-d")?></span>
                    </div>
                    <div class="flex items-center justify-center border-[1px] border-neutral-200 bg-slate-100 rounded-md w-[3rem] h-[3.5rem]">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><path d="M19,4h-1V2h-2v2H8V2H6v2H5C3.89,4,3.01,4.9,3.01,6L3,20c0,1.1,0.89,2,2,2h14c1.1,0,2-0.9,2-2V6C21,4.9,20.1,4,19,4z M19,20 H5V10h14V20z M19,8H5V6h14V8z M9,14H7v-2h2V14z M13,14h-2v-2h2V14z M17,14h-2v-2h2V14z M9,18H7v-2h2V18z M13,18h-2v-2h2V18z M17,18 h-2v-2h2V18z"/></g></svg>
                    </div>
                    
                </div>
            </div>
            <div class="mt-6 ">
                <h5 class="font-semibold text-xl">All Sessions (<span>6</span>)</h5>
            </div>
            <div class="flex gap-2">

            </div>
            <?php
                $myAppointments = myAppointments();
                foreach($myAppointments as $row){
                    $booking_date = $row['booking date'];
                    $id_app = $row['id appointment'];
                    $doctor = $row['Doctor'];
                    $title = $row['Session Title'];
                    $app_number = $row['Appointment Number'];
                    $app_date = $row['Appointment Date'];
                    $app_time = $row['Appointment Time'];
                    echo "
                    <div class='border-[2px] rounded-md mt-[9rem] p-6 flex flex-col pl-[2.5rem] w-1/2'>
                        <p class='font-extralight font-semibold mt-[2.6rem]' style='font-family: arial;'>
                            <span class='font-bold'>$booking_date</span> <br>
                            <span class='font-bold'>OC-000-$id_app</span> <br>
                            <h5 class='text-blue-500 text-2xl font-semibold mt-4'> $title </h5>
                            Appointment Number<br>
                            <span class='font-bold'>$app_number</span><br>
                            <span class='font-bold'>$doctor</span><br>
                            <span class='font-bold'>Schudled date: $app_date</span><br>
                            <span class='font-bold'>starts: $app_time</span><br>
                        </p>
                        <a href='/Gestion-RDB-Hopital/controller/Patient.controller.php?idApp=$id_app'>
                            <div class='flex justify-center items-center bg-blue-200 text-blue-600 rounded-md w-full m-auto h-[2.5rem] text-lg font-medium mt-[3rem]'>
                                <span class='m-[8px]'>Cancel booking</span>
                            </div>
                        </a>
                    </div>
                    ";
                }
            ?>
        </div>
        
    </div>

    <script src="https://kit.fontawesome.com/6360d947ff.js" crossorigin="anonymous"></script>
</body>
</html>
