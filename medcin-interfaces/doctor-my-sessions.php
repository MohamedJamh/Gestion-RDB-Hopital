<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div id="page-content" class="flex flex-wrap">
        <div id="sidebar" class="w-1/6">
            sidebar
        </div>
    
        <div class="p-5 w-5/6">
            <div class="admin-schedule-content">
                <!-- TOP PAGE BAR GOES HERE -->
                <div id="top-bar" class="flex justify-between">
                    <div class="flex justify-between">
                        <a href="">
                            <div class="flex justify-center items-center bg-blue-200 text-sky-800 rounded-md w-[7rem] h-[2.5rem] text-lg font-medium">
                                <i class="fa-solid fa-arrow-left"></i></i><span class="m-[8px]">Back</span>
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
                            <i class="fa-solid fa-calendar-days text-2xl text-stone-700"></i>
                        </div>
                        
                    </div>
                </div>
                <div class="mt-6 flex flex-col">
    
                    <h4 class="font-medium text-lg ">All Sessions ( <span id="sessions-count">7</span> )</h4>
                    <form action="" class="flex flex-row justify-end items-center p-2 text-lg border-[1px] rounded-md h-14 mt-4">
                        <div class="mr-6 ">
                            <label for="session-date-filter" class="font-medium mr-1">Date:</label>
                            <input type="date" name="session-date-filter" class="border-[1px] rounded w-[55rem] h-[2.6rem]">
                        </div>
                        
                        <button type="submit" class="flex justify-center items-center bg-blue-200 text-sky-800 rounded-md min-w-[7rem] h-[3rem] text-lg font-medium">
                            <i class="fa-solid fa-filter font-medium mr-2"></i>
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
                                    <a href=""><div class="flex justify-center items-center bg-blue-200 text-sky-800 rounded-md w-[7rem] h-[2.5rem] text-lg font-medium"><i class="fa-solid fa-eye mr-2"></i><span>View</span></div></a>
                                    <a href=""><div class="flex justify-center items-center bg-blue-200 text-sky-800 rounded-md w-[7rem] h-[2.5rem] text-lg font-medium"><i class="fa-solid fa-trash mr-2"></i><span>Cancel</span></div></a>
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
