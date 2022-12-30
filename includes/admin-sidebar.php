
<div class="sidebar bg-white drop-shadow-xl w-64 fixed top-0 h-screen">
    <div class="flex items-center justify-center gap-4 py-7">
        <img src="/Gestion-RDB-Hopital/assets/img/user.png" class="w-16 h-16 rounded-full" alt="">
        <div>
            <span class="block">Administrator</span>
            <small>admin@youcode.ma</small>
        </div>
    </div>
    <a href="../controller/authentification.controller.php?logout=true">
        <div class="mx-4 bg-sky-200 rounded text-center">log out</div>
    </a>
    <hr class="mx-2 mt-6 mb-2">
    <ul>
        <li class="">
            <a class="side-link flex items-center pl-12  p-5 <?php if($GLOBALS['current_page'] == 'dashboard') echo 'active' ?>" href="./admin-dashboard.php">
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#3b3b3b"><g><rect fill="none" height="24" width="24"/><g><path d="M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z"/><rect height="5" width="2" x="7" y="12"/><rect height="10" width="2" x="15" y="7"/><rect height="3" width="2" x="11" y="14"/><rect height="2" width="2" x="11" y="10"/></g></g></svg>
                <span class="pl-2">Dashboard</span>
            </a>
        </li class="">
        <li>
            <a class="side-link flex items-center pl-12 p-5 <?php if($GLOBALS['current_page'] == 'doctors') echo 'active' ?>" href="./admin-doctors.php">
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#3b3b3b"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M20,6h-4V4c0-1.1-0.9-2-2-2h-4C8.9,2,8,2.9,8,4v2H4C2.9,6,2,6.9,2,8v12c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V8 C22,6.9,21.1,6,20,6z M10,4h4v2h-4V4z M20,20H4V8h16V20z"/><polygon points="13,10 11,10 11,13 8,13 8,15 11,15 11,18 13,18 13,15 16,15 16,13 13,13"/></g></g></svg>
                <span class="pl-2">Doctors</span>
            </a>
        </li>
        <li class="">
            <a class="side-link flex items-center pl-12 p-5 <?php if($GLOBALS['current_page'] == 'schedule') echo 'active' ?>" href="./admin-schedule.php">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#3b3b3b"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12.5 8H11v6l4.75 2.85.75-1.23-4-2.37zm4.837-6.19l4.607 3.845-1.28 1.535-4.61-3.843zm-10.674 0l1.282 1.536L3.337 7.19l-1.28-1.536zM12 4c-4.97 0-9 4.03-9 9s4.03 9 9 9 9-4.03 9-9-4.03-9-9-9zm0 16c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7z"/></svg>
                <span class="pl-2">Schedule</span>
            </a>
        </li>
        <li class="">
            <a class="side-link flex items-center pl-12 p-5 <?php if($GLOBALS['current_page'] == 'appointment') echo 'active' ?>" href="./admin-appointment.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentcolor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" /></svg>
                <span class="pl-2">Appointment</span>    
            </a>
        </li>
        <li class="">
            <a class="side-link flex items-center pl-12 p-5 <?php if($GLOBALS['current_page'] == 'patients') echo 'active' ?>" href="./admin-patients.php">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#3b3b3b"><path d="M0 0h24v24H0V0z" fill="none"/><circle cx="18" cy="4.54" r="2"/><path d="M15 17h-2c0 1.65-1.35 3-3 3s-3-1.35-3-3 1.35-3 3-3v-2c-2.76 0-5 2.24-5 5s2.24 5 5 5 5-2.24 5-5zm3-3.5h-1.86l1.67-3.67C18.42 8.5 17.44 7 15.96 7h-5.2c-.81 0-1.54.47-1.87 1.2L8.22 10l1.92.53.65-1.53H13l-1.83 4.1c-.6 1.33.39 2.9 1.85 2.9H18v5h2v-5.5c0-1.1-.9-2-2-2z"/></svg>
                <span class="pl-2">Patients</span>  
            </a>
        </li>
    </ul>
</div>