<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
<head>
<?php
        $GLOBALS['page_title'] = 'Patient  Settings';
        include('../includes/head.php');
    ?>
</head>
<body>
<?php
    $GLOBALS['current_page'] = 'settings';
    include '../includes/doctor-sidebar.php';

?>
    <main class=" pl-20 ml-48 p-4">
        <div class="flex   justify-around gap-5">
            <div class="flex gap-2 items-center">
                                  
                <button class=" flex gap-2 px-4 py-1 text-blue-600 rounded-md font-bold bg-blue-100"> 
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/></svg>
                    Back
                </button>
                
                <h1 class=" font-bold"> Settings</h1>
            </div>
            <div class= "ml-auto flex items-center gap-4">  
                <div class="block ">       
                    <p>Today's Date <br></p>
                    <p class="font-bold"><?= $today = date("Y-m-d");?></p>
                </div> 
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><path d="M19,4h-1V2h-2v2H8V2H6v2H5C3.89,4,3.01,4.9,3.01,6L3,20c0,1.1,0.89,2,2,2h14c1.1,0,2-0.9,2-2V6C21,4.9,20.1,4,19,4z M19,20 H5V10h14V20z M19,8H5V6h14V8z M9,14H7v-2h2V14z M13,14h-2v-2h2V14z M17,14h-2v-2h2V14z M9,18H7v-2h2V18z M13,18h-2v-2h2V18z M17,18 h-2v-2h2V18z"/></g></svg>
            </div>
        </div>
        <section> 
            <div class="p-4 space-between  mt-4">

                <div class="flex p-8 border ">
                    <button class="hover:bg-gray-200 gap-4 flex items-center" data-modal-toggle="editDoctor">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#0A76D8"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M20,6h-4V4c0-1.1-0.9-2-2-2h-4C8.9,2,8,2.9,8,4v2H4C2.9,6,2,6.9,2,8v12c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V8 C22,6.9,21.1,6,20,6z M10,4h4v2h-4V4z M20,20H4V8h16V20z"/><polygon points="13,10 11,10 11,13 8,13 8,15 11,15 11,18 13,18 13,15 16,15 16,13 13,13"/></g></g></svg>                      
                        <div class="block ">
                            <h1 class="text-start font-bold text-blue-500">Account Settings</h1>
                            <p>Edit your Account Details & Change Password</p>
                        </div>
                    </button>
                </div>
                <!-- *****form edit details of patient ***** -->
                  <div id="editDoctor" tabindex="-1" aria-hidden="true" class="fixed p-1 left-0 right-0 z-50 hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                        <div class="relative w-full h-full max-w-md md:h-auto">
                            <form action="">
                                <div class="min-h-screen   flex flex-col justify-center ">
                                    <div class="relative py-3 max-w-xl sm:mx-auto">
                                    <div class="absolute inset-0 bg-gradient-to-r from-blue-300 bto-blue-600 shadow-lg transform rounded-3xl">
                                        </div>
                                        <div class="relative   bg-white shadow-lg rounded-3xl sm:p-20">
                                            <div class="max-w-md mx-auto">
                                                <div>
                                                    <h1 class=" flex justify-center text-2xl font-semibold">Edit  Personal Details</h1>
                                                </div>
                                                <div>
                                                <h6 class=" mb-5 text-gray-500 text-center font-semibold"> </h6>
                                            </div>
                                                <div class="divide-y divide-gray-200">
                                                    <div class=" text-base  space-y-4 text-gray-700 text-lg leading-7">
                                                        <div class="relative">
                                                            <input  id="first_name" name="first_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 outline-none borer-rose-600" placeholder="Email address" />
                                                            <label for="first_name" class="ml-4 absolute left-0 -top-3.5 text-gray-600 text-sm  peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">first name</label>
                                                        </div>
                                                        <div class="relative">
                                                            <input  id="last_name" name="last_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Email address" />
                                                            <label for="last_name" class="ml-4 absolute left-0 -top-3.5 text-gray-600 text-sm  peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">last name</label>
                                                        </div>  
                                                        <div class="relative">
                                                            <input  id="last_name" name="last_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Email address" />
                                                            <label for="last_name" class="ml-4 absolute left-0 -top-3.5 text-gray-600 text-sm  peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Date of birthday</label>
                                                        </div>                               
                                                        <div class="relative">
                                                            <input  id="email" name="email" type="email" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Email address" />
                                                            <label for="email" class=" ml-4 absolute left-0 -top-3.5 text-gray-600 text-sm  peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Email Address</label>
                                                        </div>
                                                        <!-- <div class="relative">
                                                            <input  id="password" name="password" type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none borer-rose-600" placeholder="Password" />
                                                            <label class="ml-4 absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 text-sm">Password</label>
                                                        </div> -->
                                                        <div class="relative">
                                                            <button  type="submit" name="submit" class="bg-red-300 text-red-700 rounded-md px-4 py-1" data-dismiss="editDoctor" >Cancel</button>
                                                            <button  type="submit" name="submit" class="bg-green-500 text-white rounded-md px-4 py-1">Update</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> 
                         <!-- ******* end form edit doctor ***** -->
                <div class="flex p-8 border ">
                    <button  class="hover:bg-gray-200 flex items-center gap-4 "  data-modal-toggle="viewDetails">                    
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
                        <div class="gap-4 block">
                            <h1 class="text-start font-bold text-blue-500">View Account Details</h1>
                            <p>View Personl information About your Account </p>
                        </div>
                    </button>
                </div>
                <!-- *****form view details ******* -->
           <div id="viewDetails" tabindex="-1" aria-hidden="true" class="fixed p-1 left-0 right-0 z-50 hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                        <div class="relative w-full h-full max-w-md md:h-auto">
                            <form action="">
                                <div class="min-h-screen   flex flex-col justify-center ">
                                    <div class="relative py-3 max-w-xl sm:mx-auto">
                                    <div class="absolute inset-0 bg-gradient-to-r from-blue-300 bto-blue-600 shadow-lg transform rounded-3xl">
                                        </div>
                                        <div class="relative   bg-white shadow-lg rounded-3xl sm:p-20">
                                            <div class="max-w-md mx-auto">
                                            <div>
                                                <h1 class=" flex justify-center text-2xl font-semibold">Personal Details of patient </h1>
                                            </div>
                                            <div>
                                                <h6 class=" mb-5 text-gray-500 text-center font-semibold"> </h6>
                                            </div>
                                            <div class="divide-y divide-gray-200">
                                                <div class=" text-base  space-y-4 text-gray-700 text-lg leading-7">
                                                    <div class="relative">
                                                        <input  id="first_name" name="first_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 outline-none borer-rose-600" placeholder="Email address" />
                                                        <label for="first_name" class="ml-4 absolute left-0 -top-3.5 text-gray-600 text-sm  peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">first name</label>
                                                    </div>
                                                    <div class="relative">
                                                        <input  id="last_name" name="last_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Email address" />
                                                        <label for="last_name" class="ml-4 absolute left-0 -top-3.5 text-gray-600 text-sm  peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">last name</label>
                                                    </div>
                                                    <div class="relative">
                                                        <input  id="last_name" name="last_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Email address" />
                                                        <label for="last_name" class="ml-4 absolute left-0 -top-3.5 text-gray-600 text-sm  peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Date of birthday</label>
                                                    </div>                              
                                                        <div class="relative">
                                                            <input  id="email" name="email" type="email" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Email address" />
                                                            <label for="email" class=" ml-4 absolute left-0 -top-3.5 text-gray-600 text-sm  peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Email Address</label>
                                                        </div>
                                                        <div class="relative">
                                                            <input  id="password" name="password" type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none borer-rose-600" placeholder="Password" />
                                                            <label class="ml-4 absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 text-sm">Password</label>
                                                        </div>                                                       
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> 
                <!-- *****end form view details******* -->
                <div class="flex p-8 border ">
                    <button type="button"  data-modal-toggle="deleteDoctor"  class="hover:bg-gray-200 gap-4 flex  items-center" >                    
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#0A76D8"><path d="M0 0h24v24H0V0z" fill="none"/><circle cx="18" cy="4.54" r="2"/><path d="M15 17h-2c0 1.65-1.35 3-3 3s-3-1.35-3-3 1.35-3 3-3v-2c-2.76 0-5 2.24-5 5s2.24 5 5 5 5-2.24 5-5zm3-3.5h-1.86l1.67-3.67C18.42 8.5 17.44 7 15.96 7h-5.2c-.81 0-1.54.47-1.87 1.2L8.22 10l1.92.53.65-1.53H13l-1.83 4.1c-.6 1.33.39 2.9 1.85 2.9H18v5h2v-5.5c0-1.1-.9-2-2-2z"/></svg>
                        <div class="  gap-4 block">
                            <h1  class="font-bold text-start text-red-400">Delete Account</h1>
                            <p>Will Permananently Remove your Account </p>
                        </div>
                    </button>   
                </div>
            </div>
        </section>
                <!-- ************form delet account ********** -->
            <div id="deleteDoctor" tabindex="-1" aria-hidden="true" class="fixed p-1 left-0 right-0 z-50 hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                <div class="relative w-full h-full max-w-md md:h-auto">
                    <form action="">
                        <div class="min-h-screen   flex flex-col justify-center ">
                            <div class="relative py-3 max-w-xl sm:mx-auto">
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-300 bto-blue-600 shadow-lg transform rounded-3xl">
                                </div>
                                <div class="relative   bg-white shadow-lg rounded-3xl sm:p-20">
                                    <div class="max-w-md mx-auto">
                                        <div class="">
                                            <h1 class=" flex justify-center text-2xl font-semibold">Are you sure? </h1>
                                            <p class=" p-4 gap-4 text-center ">You want to delete this record <br> <span>Name of doctor</span> </p>
                                        </div>
                                        <div class="divide-y divide-gray-200">
                                            <div class=" text-base  space-y-4 text-gray-700 text-lg leading-7">
                                                <div class="relative  flex justify-center gap-4  " >
                                                    <button  type="submit" name="submit" class="bg-blue-600 text-white rounded-md px-4 py-1">yes</button>
                                                    <button  type="submit" name="submit" class="bg-blue-600 text-white rounded-md px-4 py-1">No</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div> 
                <!-- ************end form delet account ********** -->
   </main>
   <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>

</body>
</html>