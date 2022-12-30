<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $GLOBALS['page_title'] = 'Doctor Dashboard';
        include('../includes/head.php');
        require_once '../controller/Doctor.controller.php';
    ?>
</head>
<body>
    <?php
        $GLOBALS['current_page'] = 'dashboard';
        include('../includes/doctor-sidebar.php');
    ?>
    <main class="doctor-dashboard ml-64 p-6 flex flex-col gap-3">
        <div class="header flex justify-between">
            <h1 class="font-bold text-2xl">Doctor Dashboard</h1>
            <div class="date flex gap-2">
                <div class="font-bold">
                    <small class="block text-slate-500 text-right">Today's Date</small>
                    <span class="">2022-20-11</span>
                </div>
                <div class="h-11 w-11 flex justify-center items-center border-2 rounded bg-slate-100">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><path d="M19,4h-1V2h-2v2H8V2H6v2H5C3.89,4,3.01,4.9,3.01,6L3,20c0,1.1,0.89,2,2,2h14c1.1,0,2-0.9,2-2V6C21,4.9,20.1,4,19,4z M19,20 H5V10h14V20z M19,8H5V6h14V8z M9,14H7v-2h2V14z M13,14h-2v-2h2V14z M17,14h-2v-2h2V14z M9,18H7v-2h2V18z M13,18h-2v-2h2V18z M17,18 h-2v-2h2V18z"/></g></svg>
                </div>
            </div>
        </div>
        <div class="banner relative w-full h-64 rounded-md overflow-hidden border mt-3 bg-cover">
            <div class="p-5">
                <h2 class="font-semibold my-2">Welcome!</h2>
                <span class="font-bold text-2xl">Test Doctor</span>
                <p class="my-4 text-sm">Thanks for joinnig with us. We are always trying to get you a complete service <br>You can view your dailly schedule, Reach Patients Appointment at home!</p>
                <a href="">
                    <div class="w-72 py-1 text-white text-center text-sm bg-sky-600 rounded-md">View My Appointments</div>
                </a>
            </div>
        </div>
        <div class="flex flex-col xl:flex-row gap-4">
            <div class="upcoming-appointments block m-0 w-full xl:w-1/2">
                <h2 class="font-bold text-xl my-4">Status</h2>
                <div class="status flex justify-between flex-wrap gap-2 px-4">
                    <div class=" border-2 border-slate-200 rounded-lg justify-between flex w-56 p-5 ">
                        <div class="font-semibold">
                            <span class="block text-sky-600"><?= Person::getStatistics('CountDoctor') ?></span>
                            <span class="block">Doctors</span>
                        </div>
                        <div class="h-14 w-14 flex justify-center items-center border-2 rounded bg-slate-100">
                            <svg class="fill-sky-600" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill=""><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M20,6h-4V4c0-1.1-0.9-2-2-2h-4C8.9,2,8,2.9,8,4v2H4C2.9,6,2,6.9,2,8v12c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V8 C22,6.9,21.1,6,20,6z M10,4h4v2h-4V4z M20,20H4V8h16V20z"/><polygon points="13,10 11,10 11,13 8,13 8,15 11,15 11,18 13,18 13,15 16,15 16,13 13,13"/></g></g></svg>
                        </div>
                    </div>
                    <div class=" border-2 border-slate-200 rounded-lg justify-between flex w-56 p-5 ">
                        <div class="font-semibold">
                            <span class="block text-sky-600"><?= Person::getStatistics('CountPatient') ?></span>
                            <span class="block">Patients</span>
                        </div>
                        <div class="h-14 w-14 flex justify-center items-center border-2 rounded bg-slate-100">
                            <svg class="fill-sky-600" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#3b3b3b"><path d="M0 0h24v24H0V0z" fill="none"/><circle cx="18" cy="4.54" r="2"/><path d="M15 17h-2c0 1.65-1.35 3-3 3s-3-1.35-3-3 1.35-3 3-3v-2c-2.76 0-5 2.24-5 5s2.24 5 5 5 5-2.24 5-5zm3-3.5h-1.86l1.67-3.67C18.42 8.5 17.44 7 15.96 7h-5.2c-.81 0-1.54.47-1.87 1.2L8.22 10l1.92.53.65-1.53H13l-1.83 4.1c-.6 1.33.39 2.9 1.85 2.9H18v5h2v-5.5c0-1.1-.9-2-2-2z"/></svg>
                        </div>
                    </div>
                    <div class=" border-2 border-slate-200 rounded-lg justify-between flex w-56 p-5 ">
                        <div class="font-semibold">
                            <span class="block text-sky-600"><?= Person::getStatistics('NewBooking') ?></span>
                            <span class="block">New Booking</span>
                        </div>
                        <div class="h-14 w-14 flex justify-center items-center border-2 rounded bg-slate-100">
                            <svg class="fill-sky-600" xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" /></svg>
                        </div>
                    </div>
                    <div class=" border-2 border-slate-200 rounded-lg justify-between flex w-56 p-5 ">
                        <div class="font-semibold">
                            <span class="block text-sky-600"><?= Person::getStatistics('TodaySession') ?></span>
                            <span class="block">Today's session</span>
                        </div>
                        <div class="h-14 w-14 flex justify-center items-center border-2 rounded bg-slate-100">
                            <svg class="fill-sky-600" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#3b3b3b"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M20,4H4C2.9,4,2,4.9,2,6v3h2V6h16v3h2V6C22,4.9,21.1,4,20,4z"/><path d="M20,18H4v-3H2v3c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2v-3h-2V18z"/><path d="M14.89,7.55c-0.34-0.68-1.45-0.68-1.79,0L10,13.76l-1.11-2.21C8.72,11.21,8.38,11,8,11H2v2h5.38l1.72,3.45 C9.28,16.79,9.62,17,10,17s0.72-0.21,0.89-0.55L14,10.24l1.11,2.21C15.28,12.79,15.62,13,16,13h6v-2h-5.38L14.89,7.55z"/></g></g></svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="upcoming-sessions block w-full xl:w-1/2">
                <h2 class="font-bold text-xl my-4 ">Upcoming Sessions until Next Week</h2>
                <div class="w-full h-64 border-x border-t rounded-md overflow-y-scroll mt-3">
                    <table class="w-full relative">
                        <tr class="sticky top-0 bg-white">
                            <th class="border-b-4 p-2 border-sky-400">Session Title</th>
                            <th class="border-b-4 p-2 border-sky-400">Schduled Date</th>
                            <th class="border-b-4 p-2 border-sky-400">Time</th>
                        </tr>
                        <?php 
                            $sessionPerWeek = sessionsPerWeek();
                            foreach ($sessionPerWeek as $row) {
                                $title = $row['title'];
                                $date_start = $row['date_start'];
                                echo "
                                    <tr class='border-2 border-sky-50'>
                                        <td class='text-center py-2 '>$title</td>
                                        <td class='text-center py-2 '>$date_start</td>
                                        <td class='text-center py-2 '>--:--</td>
                                    </tr>
                                ";
                            }
                            
                        ?>
                    </table>
                </div>
                <a href="doctor-my-sessions.php">
                    <div class="w-full p-2 bg-sky-700 text-white text-center rounded-md" >Show all Sessions</div>
                </a>
            </div>
        </div>
    </main>


</body>
</html>