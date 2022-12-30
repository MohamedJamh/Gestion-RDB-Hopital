<!DOCTYPE html>
<html lang="en">
<?php 
    $GLOBALS['page_title']="Doctor My Sessions";
    include '../includes/head.php';
?>
<body>

    <div id="page-content" class="">

        <div id="sidebar" class="">
            <?php include '../includes/doctor-sidebar.php';  ?>
        </div>
    
        <div class="p-5 pl-[18rem] w-full">
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
                            <span class="text-black text-2xl font-semibold">2022-11-01</span>
                        </div>
                        <div class="flex items-center justify-center border-[1px] border-neutral-200 bg-slate-100 rounded-md w-[3rem] h-[3.5rem]">
                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><path d="M19,4h-1V2h-2v2H8V2H6v2H5C3.89,4,3.01,4.9,3.01,6L3,20c0,1.1,0.89,2,2,2h14c1.1,0,2-0.9,2-2V6C21,4.9,20.1,4,19,4z M19,20 H5V10h14V20z M19,8H5V6h14V8z M9,14H7v-2h2V14z M13,14h-2v-2h2V14z M17,14h-2v-2h2V14z M9,18H7v-2h2V18z M13,18h-2v-2h2V18z M17,18 h-2v-2h2V18z"/></g></svg>
                        </div>
                        
                    </div>
                </div>
                <div class="mt-6 flex flex-col">
    
                    <h4 class="font-semibold text-lg">All Sessions ( <span id="sessions-count">7</span> )</h4>
                    <form action="" class="flex flex-row justify-end items-center p-2 text-lg border-[1px] rounded-md h-14 mt-4">
                        <div class="mr-4 w-full flex justify-end" >
                            <label for="session-date-filter" class="font-medium mr-2 mt-2" >Date:</label>
                            <input type="date" name="session-date-filter" class="border-[1px] rounded w-5/6 h-[2.6rem]">
                        </div>
                        
                        <button type="submit" class="flex justify-center items-center bg-blue-200 text-blue-600 rounded-md min-w-[7rem] h-[3rem] text-lg font-medium">
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
                                    Schedule Date & Time
                                </th>
                                <th scope="col" class="py-3 px-6 text-center">
                                    Max num that can be booked
                                </th>
                                <th scope="col" class="py-3 px-6 text-center">
                                    Events
                                </th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="bg-white border-b  font-medium text-black ">
                                <th scope="row" class="py-3 px-6 font-medium">
                                    Test Session
                                </th>
                                <td class="py-4 px-6">
                                    2030-01-01 18:00
                                </td>
                                <td class="py-4 px-6 text-center">
                                    50
                                </td>
                                <td class="flex items-center py-4 px-6 space-x-3 justify-center">
                                    <a href=""><div class="flex justify-center items-center bg-blue-200 text-blue-600 rounded-md w-[7rem] h-[2.5rem] text-lg font-medium"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg><span>View</span></div></a>
                                    <a href=""><div class="flex justify-center items-center bg-blue-200 text-blue-600 rounded-md w-[7rem] h-[2.5rem] text-lg font-medium"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/></svg><span>Cancel</span></div></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
    
                
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/6360d947ff.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
