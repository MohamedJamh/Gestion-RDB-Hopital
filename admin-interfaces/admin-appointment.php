<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/Gestion-RDB-Hopital/assets/css/main.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Appointment</title>
</head>
<body>    
<?php 
    $GLOBALS['current_page'] = 'appointment';
    include '../includes/admin-sidebar.php';
?>
  <main class="pl-20 ml-56 p-8">
    <div class="flex   justify-around gap-5">
        <div class="flex gap-2 items-center">
          <button class=" flex gap-2 px-4 py-1 text-blue-600 rounded-md font-bold bg-blue-100"> 
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/></svg>
            Back
          </button>
            <h1 class=" font-bold"> Appointment Manager</h1>
        </div>
        <div class= "ml-auto flex items-center gap-4">  
                    <div class="block ">       
                    <p>Today's Date <br></p>
                    <p class="font-bold">2022-12-01</p>
                  </div> 
                  <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><path d="M19,4h-1V2h-2v2H8V2H6v2H5C3.89,4,3.01,4.9,3.01,6L3,20c0,1.1,0.89,2,2,2h14c1.1,0,2-0.9,2-2V6C21,4.9,20.1,4,19,4z M19,20 H5V10h14V20z M19,8H5V6h14V8z M9,14H7v-2h2V14z M13,14h-2v-2h2V14z M17,14h-2v-2h2V14z M9,18H7v-2h2V18z M13,18h-2v-2h2V18z M17,18 h-2v-2h2V18z"/></g></svg>

        </div>
    </div>              
            <div> <i class="bx bx-calendar"></i></div>
        
            <h6 class ="font-bold m-4 p-2">All Appointments <span>(2)</span></h6>
            <div class="flex items-center ml-2 border">
                
                  <div class ="items-center m-2 ml-20 p-2">
                    <label for="" class="ml-16"> Date:</label>
                    <input class="py-1 px-10 border" type="date">
                  </div>
                  <div class="items-center border ml-16 p-2 m-2">
                    <label for=""class="ml-20">Doctor: </label>
                    <select class=" py-1 px-4"name="" id="">
                      <option class="text-gray-50" value="">Choose Doctor Name</option>
                      <option value="1">Psychiatrie</option>
                      <option value="2">Pediatrie</option>
                      <option value="3">Cardioogie</option>
                    </select>
              
            </div>
            <div class="ml-auto">
              <button class=" flex gap-2 px-8 py-2 text-blue-600 rounded-md font-bold bg-blue-100">
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><g><path d="M0,0h24 M24,24H0" fill="none"/><path d="M7,6h10l-5.01,6.3L7,6z M4.25,5.61C6.27,8.2,10,13,10,13v6c0,0.55,0.45,1,1,1h2c0.55,0,1-0.45,1-1v-6 c0,0,3.72-4.8,5.74-7.39C20.25,4.95,19.78,4,18.95,4H5.04C4.21,4,3.74,4.95,4.25,5.61z"/><path d="M0,0h24v24H0V0z" fill="none"/></g></svg>
                Filter
              </button>
            </div>
          </div>
          <section>
            <div class="flex flex-col">
              <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                  <div class="overflow-hidden">
                    <table class="min-w-full">
                      <thead class="bg-white border-b-4 border-sky-400">
                        <tr>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Patient Name
                          </th>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Appointment number
                          </th>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Doctor
                          </th>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Session Title
                          </th>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Session Date & Time
                          </th>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Appointment Date 
                          </th>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Events
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                              <!-- *******************  Patient 1*********** -->
                        <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            Patient name
                          </td>
                          <td class="text-sm text-center text-blue-500 font-bold px-6 py-4 whitespace-nowrap">2</td>
                          <td class="text-sm text-gray-900 font-medium  px-6 py-4 whitespace-nowrap">
                            Doctor name
                          </td>
                          <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                            Pediatrie
                          </td>
                          <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                            2050-01-01 <br>18:00
                          </td>
                          <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                            2022-12-03
                          </td>
                          <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                            
                           <button class="px-4 flex gap-4 items-center py-2 text-blue-600 rounded-md font-bold bg-blue-100">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                            
                             Cancel</button> 
                          </td>
                        </tr>
                              <!-- *******************  Patient 2*********** -->
                        <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            Patient name
                          </td>
                          <td class="text-sm text-center text-blue-500 font-bold px-6 py-4 whitespace-nowrap">2</td>
                          <td class="text-sm text-gray-900 font-medium  px-6 py-4 whitespace-nowrap">
                            Doctor name
                          </td>
                          <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                            Pediatrie
                          </td>
                          <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                            2050-01-01 <br>18:00
                          </td>
                          <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                            2022-12-03
                          </td>
                          <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                            
                           <button class="px-4 flex gap-4 items-center py-2 text-blue-600 rounded-md font-bold bg-blue-100">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                             Cancel</button> 
                          </td>
                        </tr>
                              <!-- *******************  Patient 3*********** -->
                        <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            Patient name
                          </td>
                          <td class="text-sm text-center text-blue-500 font-bold px-6 py-4 whitespace-nowrap">2</td>
                          <td class="text-sm text-gray-900 font-medium  px-6 py-4 whitespace-nowrap">
                            Doctor name
                          </td>
                          <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                            Pediatrie
                          </td>
                          <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                            2050-01-01 <br>18:00
                          </td>
                          <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                            2022-12-03
                          </td>
                          <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                            
                           <button class="px-4 flex gap-4 items-center py-2 text-blue-600 rounded-md font-bold bg-blue-100">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                            
                             Cancel</button> 
                          </td>
                        </tr>
                              <!-- *******************  Patient 4*********** -->
                        <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            Patient name
                          </td>
                          <td class="text-sm text-center text-blue-500 font-bold px-6 py-4 whitespace-nowrap">2</td>
                          <td class="text-sm text-gray-900 font-medium  px-6 py-4 whitespace-nowrap">
                            Doctor name
                          </td>
                          <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                            Pediatrie
                          </td>
                          <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                            2050-01-01 <br>18:00
                          </td>
                          <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                            2022-12-03
                          </td>
                          <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                            
                           <button class="px-4 flex gap-4 items-center py-2 text-blue-600 rounded-md font-bold bg-blue-100">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                             Cancel</button> 
                          </td>
                        </tr>
                           <!-- *******************  Patient 5*********** -->
                           <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                              Patient name
                            </td>
                            <td class="text-sm text-center text-blue-500 font-bold px-6 py-4 whitespace-nowrap">2</td>
                            <td class="text-sm text-gray-900 font-medium  px-6 py-4 whitespace-nowrap">
                              Doctor name
                            </td>
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                              Pediatrie
                            </td>
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                              2050-01-01 <br>18:00
                            </td>
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                              2022-12-03
                            </td>
                            <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                              
                             <button class="px-4 flex gap-4 items-center py-2 text-blue-600 rounded-md font-bold bg-blue-100">
  
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                              </svg>
                               Cancel</button> 
                            </td>
                          </tr>
                             <!-- *******************  Patient 6*********** -->
                        <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            Patient name
                          </td>
                          <td class="text-sm text-center text-blue-500 font-bold px-6 py-4 whitespace-nowrap">2</td>
                          <td class="text-sm text-gray-900 font-medium  px-6 py-4 whitespace-nowrap">
                            Doctor name
                          </td>
                          <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                            Pediatrie
                          </td>
                          <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                            2050-01-01 <br>18:00
                          </td>
                          <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                            2022-12-03
                          </td>
                          <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                            
                           <button class="px-4 flex gap-4 items-center py-2 text-blue-600 rounded-md font-bold bg-blue-100">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                             Cancel</button> 
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </section>
      </main>
        </body>
        </html>