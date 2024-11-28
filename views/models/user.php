<div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
    <div class="page-content">
        <div class="transition-all duration-150 container-fluid" id="page_layout">
            <div id="content_layout"></div>

            <!-- BEGIN: Breadcrumb -->
            <div class="mb-5">
                <ul class="m-0 p-0 list-none">
                    <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                        <a href="index.html">
                            <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                            <iconify-icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
                        </a>
                    </li>
                    <li class="inline-block relative text-sm text-primary-500 font-Inter ">
                        Table
                        <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                    </li>
                    <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                        Basic-Table</li>
                </ul>
            </div>
            <!-- END: BreadCrumb -->


            <div class=" space-y-5">
                <div class="card">
                    <header class=" card-header noborder">
                        <h4 class="card-title">Usuarios
                        </h4>


                        <!-- Botón para abrir el modal -->
                        <div class="flex justify-center my-4">
                            <button
                                data-bs-toggle="modal"
                                data-bs-target="#basic_modal"
                                class="btn inline-flex justify-center text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-md shadow-md focus:ring-2 focus:ring-blue-300 focus:outline-none capitalize">
                                Add
                            </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="basic_modal" tabindex="-1" aria-labelledby="basic_modal" aria-hidden="true">
                            <div class="modal-dialog relative w-auto pointer-events-none max-w-lg mx-auto">
                                <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white rounded-lg outline-none text-current dark:bg-slate-800">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-4 border-b dark:border-slate-700 bg-blue-500 rounded-t">
                                        <h3 class="text-lg font-medium text-white capitalize">
                                            Stylish Modal with Form
                                        </h3>
                                        <button
                                            type="button"
                                            class="text-white bg-transparent hover:text-slate-200 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-slate-600"
                                            data-bs-dismiss="modal">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="p-6 space-y-4">
                                        <form method="POST" id="modalForm" class="space-y-6">
                                            <!-- Campo Full Name -->
                                            <div class="input-area relative">
                                                <label for="largeInput" class="form-label">User Name</label>
                                                <div class="relative">
                                                    <input type="text" name="username" class="form-control !pl-9" placeholder="User Name">
                                                    <iconify-icon icon="heroicons-outline:user" class="absolute left-2 top-1/2 -translate-y-1/2 text-base text-slate-500"></iconify-icon>
                                                </div>
                                            </div>

                                            <div class="input-area relative">
                                                <label for="largeInput" class="form-label">Email</label>
                                                <div class="relative">
                                                    <input type="email" name="email" class="form-control !pl-9" placeholder="Your Email">
                                                    <iconify-icon icon="heroicons-outline:mail" class="absolute left-2 top-1/2 -translate-y-1/2 text-base text-slate-500"></iconify-icon>
                                                </div>
                                            </div>
                                            <div class="input-area relative">
                                                <label for="largeInput" class="form-label">Phone</label>
                                                <div class="relative">
                                                    <input type="tel" class="form-control !pl-9" placeholder="Phone Number" pattern="[0-9]">
                                                    <iconify-icon icon="heroicons-outline:phone" class="absolute left-2 top-1/2 -translate-y-1/2 text-base text-slate-500"></iconify-icon>
                                                </div>
                                            </div>
                                            <div class="input-area relative">
                                                <label for="largeInput" class="form-label">Password</label>
                                                <div class="relative">
                                                    <input type="tel" name="password" class="form-control !pl-9" placeholder="8+ characters, 1 capitat letter">
                                                    <iconify-icon icon="heroicons-outline:lock-closed" class="absolute left-2 top-1/2 -translate-y-1/2 text-base text-slate-500"></iconify-icon>
                                                </div>
                                            </div>
                                            <div class="checkbox-area">
                                                <label class="inline-flex items-center cursor-pointer">
                                                    <input type="checkbox" class="hidden" name="checkbox">
                                                    <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative
                                        transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                                                        <img src="assets/images/icon/ck-white.svg" alt="checkbox" class="h-[10px] w-[10px] block m-auto opacity-0">
                                                    </span>
                                                    <span class="text-slate-500 dark:text-slate-400 text-sm leading-6">Remember me</span>
                                                </label>
                                            </div>
                                            <?php 
                                                $putuser = new UserController();
                                                $putuser->putUserCtr();
                                            ?>
                                        </form>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="flex items-center justify-end p-4 border-t dark:border-slate-700">
                                        <button
                                            data-bs-dismiss="modal"
                                            class="btn ml-2 px-4 py-2 text-sm text-white bg-blue-500 hover:bg-blue-600 rounded-md shadow-md focus:ring-2 focus:ring-blue-400 focus:outline-none">
                                            Close
                                        </button>
                                        <button
                                            type="submit"
                                            form="modalForm"
                                            class="btn ml-2 px-4 py-2 text-sm text-white bg-blue-500 hover:bg-blue-600 rounded-md shadow-md focus:ring-2 focus:ring-blue-400 focus:outline-none">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="vertically_center" tabindex="-1" aria-labelledby="vertically_center" aria-hidden="true">
                            <div class="modal-dialog top-1/2 !-translate-y-1/2 relative w-auto pointer-events-none">
                                <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding
                    rounded-md outline-none text-current">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                                        <!-- Modal header -->
                                        <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-black-500">
                                            <h3 class="text-xl font-medium text-white dark:text-white capitalize">
                                                Vertically Center
                                            </h3>
                                            <button type="button" class="text-slate-400 bg-transparent hover:text-slate-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center
                                dark:hover:bg-slate-600 dark:hover:text-white" data-bs-dismiss="modal">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="#ffffff" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10
                                        11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-6 space-y-4">
                                            <h6 class="text-base text-slate-900 dark:text-white leading-6">
                                                Lorem ipsum dolor sit.
                                            </h6>
                                            <p class="text-base text-slate-600 dark:text-slate-400 leading-6">
                                                Oat cake ice cream candy chocolate cake apple pie. Brownie carrot cake candy canes. Cake sweet roll cake cheesecake cookie chocolate cake liquorice.
                                            </p>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="flex items-center justify-end p-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                                            <button data-bs-dismiss="modal" class="btn inline-flex justify-center text-white bg-black-500">Accept</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </header>
                    <div class="card-body px-6 pb-6">
                        <div class="overflow-x-auto -mx-6 dashcode-data-table">
                            <span class=" col-span-8  hidden"></span>
                            <span class="  col-span-4 hidden"></span>
                            <div class="inline-block min-w-full align-middle">
                                <div class="overflow-hidden ">
                                    <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700" id="data-table">
                                        <thead class=" border-t border-slate-100 dark:border-slate-800">
                                            <tr>
                                                <th scope="col" class=" table-th ">
                                                    Id
                                                </th>

                                                <th scope="col" class=" table-th ">
                                                    UserName
                                                </th>

                                                <th scope="col" class=" table-th ">
                                                    Email
                                                </th>

                                                <th scope="col" class=" table-th ">
                                                    Password
                                                </th>

                                                <th scope="col" class=" table-th ">
                                                    Created in
                                                </th>
                                                <th scope="col" class=" table-th ">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                            <?php

                                            $user = new UserController();

                                            $result = $user->getUserAllCtr();

                                            foreach ($result as $key => $value) {

                                                echo '
                                            <tr>
                                                <td class="table-td">' . ($key + 1) . '</td>
                                                <td class="table-td ">' . $value["username"] . '</td>
                                                <td class="table-td ">' . $value["email"] . '</td>
                                                <td class="table-td ">' . $value["password"] . '</td>
                                                <td class="table-td ">' . $value["Timestamp"] . '</td>
                                                <td class="table-td">
                                                    <button  class="btn inline-flex justify-center btn-primary btn-sm">
                                                        Editar
                                                    </button>
                                                    <button  class="btn inline-flex justify-center btn-primary btn-sm">
                                                        Eliminar
                                                    </button>
                                                </td>
                                                
                                            </tr>
                                        ';
                                            } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>