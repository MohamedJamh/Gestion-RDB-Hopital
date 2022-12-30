<!doctype html>
<html lang="en">
    <?php
        $GLOBALS['page_title']="All Doctor";
        require "../includes/head.php";
    ?>
<body>
    <?php
        $GLOBALS['current_page'] = 'all_doctors';
        include('../includes/paitent-sidebar.php');
    ?>
    <main class="ml-64 p-6 admin-dashboard flex flex-col gap-3">
        <div class="header flex justify-between">
            <div class="flex gap-2 items-center">
                <button class=" flex gap-2 px-4 py-1 text-blue-600 rounded-md font-bold bg-blue-100">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/></svg>
                    Back
                </button>
            </div>
                <form class="search flex gap-2 items-center w-100">
                    <div class="border-2 rounded p-1 px-3 flex items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#616161"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
                        <input class="p-2 h-7 w-full focus:outline-0 border-0 rounded" type="text" name="search" placeholder="Search doctor name or email">
                    </div>
                    <button class="bg-blue-600  px-4 h-8 rounded text-white" type="submit" name="search" >Search</button>
                </form>
            <div class="date flex gap-2">
                <div class="font-bold">
                    <small class="block text-slate-500 text-right">Today's Date</small>
                    <span class=""><?=date('Y-m-d')?></span>
                </div>
                <div class="h-11 w-11 flex justify-center items-center border-2 rounded bg-slate-100">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><path d="M19,4h-1V2h-2v2H8V2H6v2H5C3.89,4,3.01,4.9,3.01,6L3,20c0,1.1,0.89,2,2,2h14c1.1,0,2-0.9,2-2V6C21,4.9,20.1,4,19,4z M19,20 H5V10h14V20z M19,8H5V6h14V8z M9,14H7v-2h2V14z M13,14h-2v-2h2V14z M17,14h-2v-2h2V14z M9,18H7v-2h2V18z M13,18h-2v-2h2V18z M17,18 h-2v-2h2V18z"/></g></svg>
                </div>
            </div>
        </div>

        <h6 class ="font-bold m-4 p-2">
            All Doctor <span>(2)</span>
        </h6>

        <section>
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full">
                                <thead class="bg-white border-b-4 border-sky-400 font-bold">
                                <tr>
                                    <th scope="col" class="text-sm text-gray-900 px-6 py-4 text-left ">
                                        Doctor name
                                    </th>
                                    <th scope="col" class="text-sm text-gray-900 px-6 py-4 text-left">
                                        Doctor email
                                    </th>
                                    <th scope="col" class="text-sm text-gray-900 px-6 py-4 text-left">
                                        Doctor speciality
                                    </th>
                                    <th scope="col" class="text-sm text-gray-900 px-6 py-4 text-left">
                                        Events
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        Doctor name
                                    </td>
                                    <td class="text-sm text-gray-900 font-medium  px-6 py-4 whitespace-nowrap">
                                        Doctor email
                                    </td>
                                    <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                        Speciality
                                    </td>
                                    <td class="flex text-sm gap-4 px-5 text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                                        <button class="px-4 flex gap-4 items-center py-2 text-blue-600 rounded-md font-bold bg-blue-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
                                            View
                                        </button>
                                        <button class="px-4 flex gap-4 items-center py-2 text-blue-600 rounded-md font-bold bg-blue-100">

                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#0A76D8"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M20,4H4C2.9,4,2,4.9,2,6v3h2V6h16v3h2V6C22,4.9,21.1,4,20,4z"/><path d="M20,18H4v-3H2v3c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2v-3h-2V18z"/><path d="M14.89,7.55c-0.34-0.68-1.45-0.68-1.79,0L10,13.76l-1.11-2.21C8.72,11.21,8.38,11,8,11H2v2h5.38l1.72,3.45 C9.28,16.79,9.62,17,10,17s0.72-0.21,0.89-0.55L14,10.24l1.11,2.21C15.28,12.79,15.62,13,16,13h6v-2h-5.38L14.89,7.55z"/></g></g></svg>
                                            Session
                                        </button>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        Doctor name
                                    </td>
                                    <td class="text-sm text-gray-900 font-medium  px-6 py-4 whitespace-nowrap">
                                        Doctor Email
                                    </td>
                                    <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                        speciality
                                    </td>
                                    <td class="flex text-sm gap-4 px-5 text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                                        <button class="px-4 flex gap-4 items-center py-2 text-blue-600 rounded-md font-bold bg-blue-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
                                            View
                                        </button>
                                        <button class="px-4 flex gap-4 items-center py-2 text-blue-600 rounded-md font-bold bg-blue-100">

                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#0A76D8"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M20,4H4C2.9,4,2,4.9,2,6v3h2V6h16v3h2V6C22,4.9,21.1,4,20,4z"/><path d="M20,18H4v-3H2v3c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2v-3h-2V18z"/><path d="M14.89,7.55c-0.34-0.68-1.45-0.68-1.79,0L10,13.76l-1.11-2.21C8.72,11.21,8.38,11,8,11H2v2h5.38l1.72,3.45 C9.28,16.79,9.62,17,10,17s0.72-0.21,0.89-0.55L14,10.24l1.11,2.21C15.28,12.79,15.62,13,16,13h6v-2h-5.38L14.89,7.55z"/></g></g></svg>
                                            Session
                                        </button>
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