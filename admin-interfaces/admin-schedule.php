<!DOCTYPE html>
<html lang="en">
<?php 
    $GLOBALS['page_title']="Admin Schedule";
    require '../includes/head.php';
    require '../controller/Admin.controller.php';
    // setDoctorAsOptions();
?>
<body> <!-- background-color:RGBA(0,0,0,0.57); -->
    <div id="admin-schedule-content p-0" class="flex flex-wrap h-screen "> 
        <div id="sidebar" class="w-1/6 z-20" >
            <?php
                $GLOBALS['current_page'] = 'schedule';
                 include '../includes/admin-sidebar.php';
            ?>
        </div>
    
        <div class="p-5 pl-[18rem] w-full m-0 fixed z-10">
            <div class="admin-schedule-content">
                <!-- TOP PAGE BAR GOES HERE -->
                <div id="top-bar" class="flex justify-between items-center">
                    <div class="flex justify-between">
                        <a href="">
                            <div class="flex justify-center items-center bg-blue-200 text-blue-600 rounded-md w-[7rem] h-[2.5rem] text-lg font-medium">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/></svg><span class="m-[8px]">Back</span>
                            </div>
                        </a>
                        <h1 class="text-2xl font-semibold ml-5">Schedule Manager</h1>
                    </div>
                    <div class="flex justify-center content-end">
    
                        <div class="flex flex-col content-center mr-3">
                            <span class="text-zinc-400 text-end">Today's Date</span>
                            <span class="text-black text-2xl font-semibold"><?= date('Y-m-d');  ?></span>
                        </div>
                        <div class="flex items-center justify-center border-[1px] border-neutral-200 bg-slate-100 rounded-md w-[3rem] h-[3.5rem]">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><path d="M19,4h-1V2h-2v2H8V2H6v2H5C3.89,4,3.01,4.9,3.01,6L3,20c0,1.1,0.89,2,2,2h14c1.1,0,2-0.9,2-2V6C21,4.9,20.1,4,19,4z M19,20 H5V10h14V20z M19,8H5V6h14V8z M9,14H7v-2h2V14z M13,14h-2v-2h2V14z M17,14h-2v-2h2V14z M9,18H7v-2h2V18z M13,18h-2v-2h2V18z M17,18 h-2v-2h2V18z"/></g></svg>
                        </div>
                        
                    </div>
                </div>
                <!-- ADD SESSION GOES HERE -->
                <div id="schedule-session" class="flex justify-start items-center mt-9">
                    <h3 class="text-xl font-semibold">Schedule a Session</h3>
                    <button type="button" onclick="show_modal('modal-container')"  class="flex justify-between bg-blue-600 rounded-md text-white p-1 pl-3 pr-3 w-[10rem] ml-6" >
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/></svg>
                        <span>Add a Session</span>
                    </button>
                </div>
    
                <div class="mt-4 flex flex-col">
    
                    <h4 class="font-semibold text-lg ">All Sessions (<span id="sessions-count"><?= COUNT(Admin::readSession())?></span>)</h4>
                    <form action="admin-schedule.php" class="flex flex-row justify-end items-center p-2 text-lg border-[1px] rounded-md h-14 mt-4" method="POST">
                        <div class="mr-6 w-2/6" >
                            <label for="session-date-filter" class="font-semibold mr-1w-1/6 ">Date:</label>
                            <input type="date" name="session-date-filter" class="border-[1px] rounded  h-[2.6rem] w-5/6">
                        </div>
                        
                        <div class="mr-6 w-2/6">
                            <label for="session-doctor-filter" class="font-semibold mr-1 w-2/6">Doctor:</label>
                            <select name="session-doctor-filter" class="border-[1px] rounded w-5/6 h-[2.6rem] pl-2">
                                <option value="" selected disabled >Choose a doctor name</option>
                                <?php setDoctorAsOptions();?>
                            </select>
                        </div>
                        
                        <button type="submit" class="flex justify-center items-center bg-blue-200 text-blue-600 rounded-md min-w-[7rem] h-[3rem] text-lg font-medium" name="filter-session">
                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><g><path d="M0,0h24 M24,24H0" fill="none"/><path d="M7,6h10l-5.01,6.3L7,6z M4.25,5.61C6.27,8.2,10,13,10,13v6c0,0.55,0.45,1,1,1h2c0.55,0,1-0.45,1-1v-6 c0,0,3.72-4.8,5.74-7.39C20.25,4.95,19.78,4,18.95,4H5.04C4.21,4,3.74,4.95,4.25,5.61z"/><path d="M0,0h24v24H0V0z" fill="none"/></g></svg>
                            <span class="font-medium">Filter</span>
                        </button>
                    </form>
                    
                </div>
                <div class="overflow-x-auto relative shadow-md mt-6 rounded max-h-[35rem] min-h-[20rem] overflow-y-auto">
                    <table class="w-full text-left border border-slate-300 rounded">
                        <thead class="border-b-4 border-blue-500">
                            <tr class="text-lg text-black  font-medium">
                                <th scope="col" class="py-3 px-6 ">
                                    Session title
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Doctor
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Schedule Date & Time
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Max num that can be booked
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Events
                                </th>
                            </tr>
                        </thead>
                        <tbody class="">
                        <?php readSession();
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ADD SESSION MODAL GOEs HERE  -->
    <div id="modal-container" class="" style="display:none;">
        <div id="modal-background" class="w-screen h-screen fixed top-0 left-0 z-30"style="background-color:RGBA(0,0,0,0.57);"></div>
        <div id="modal-content" class=" w-[30rem] fixed top-0  mt-[10rem] bg-white rounded-lg z-40 " style="left:35%;">
            <div id="modal-header"class="text-center font-semibold text-xl p-2 pt-4 ">
                Add Session
            </div>
            <form action="../controller/admin.controller.php" class="flex flex-col  pb-0" method="POST">

                <div class="flex flex-col mb-5 px-4">
                    <label for="session-title" class="text-sm text-slate-600 font-semibold mb-1">Title</label>
                    <input type="text" class="bg-gray-200 border-0 rounded w-full h-[2.5rem] text-sm p-2" name="session-title" required>
                </div>
                <div class="flex flex-col mb-5 px-4">
                    <label for="session-doctor" class="text-sm text-slate-600 font-semibold mb-1">Doctor's Name</label>
                    <select name="session-doctor" id="" class="bg-gray-200 border-0 rounded w-100 h-[2.5rem] text-sm p-2" required>
                        <?php setDoctorAsOptions();?>
                    </select>
                </div>
                
                <div class="flex justify-between items-center mb-5 px-4">

                    <div class="flex flex-col mb-5">
                        <label for="session-date" class="text-sm text-slate-600 font-semibold mb-1">Date</label>
                        <input type="date"  class="bg-gray-200 border-0 rounded w-80 h-[2.5rem] text-sm p-2" name="session-date" required>
                    </div>
                    
                    <div class="flex flex-col mb-5">
                        <label for="session-patients" class="text-sm text-slate-600 font-semibold mb-1">Max patients</label>
                        <input type="number"class="bg-gray-200 border-0 rounded w-24 h-[2.5rem] text-sm p-2" name="session-patients" required>
                    </div>

                </div>
                <div id="modal-footer" class="flex justify-end bg-gray-200 border-t-2 p-2 rounded-b-lg w-100">
                    <button type="button" onclick="hide_modal('modal-container')" class="bg-red-600 rounded-md w-24 h-[2.5rem] text-white">Cancel</button>
                    <button type="submit" class="bg-blue-500 rounded-md w-24 h-[2.5rem] text-white ml-4" name="create-session">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- END MODAL -->
    <!-- VIEW SESSION MODAL -->
    <?php if( isset($_GET['view-session']) ) viewSession() ?>
<?php require_once'../includes/footer.php';?>
</body>
</html>
