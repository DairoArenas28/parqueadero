<div class="flex flex-col justify-between min-h-screen">
    <div>
        <!-- BEGIN: Header -->
        <!-- BEGIN: Header -->
        <div class="z-[9]" id="app_header">
            <div class="app-header z-[999] ltr:ml-[248px] rtl:mr-[248px] bg-white dark:bg-slate-800 shadow-sm dark:shadow-slate-700">
                <div class="flex justify-between items-center h-full">
                    <div class="flex items-center md:space-x-4 space-x-2 xl:space-x-0 rtl:space-x-reverse vertical-box">
                        <?php include "views/components/search.php" ?>
                    </div>
                    <!-- end vertcial -->
                    <div class="items-center space-x-4 rtl:space-x-reverse horizental-box">
                        <?php include "views/components/logo.php" ?>
                    </div>
                    <!-- end horizental -->
                    <?php include "views/components/menuhorizon.php" ?>
                    <!-- end top menu -->
                    <?php include "views/components/tools.php" ?>
                    <!-- end nav tools -->
                </div>
            </div>
        </div>


        <!-- END: Search Modal -->
        <!-- END: Header -->
        <!-- END: Header -->
        <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
            <div class="page-content">
                <div class="transition-all duration-150 container-fluid" id="page_layout">
                    <div id="content_layout">

                        <div>
                            <?php include "views/components/dashboard/header.php"; ?>
                            <div class="grid grid-cols-12 gap-5 mb-5">
                                <?php include "views/components/dashboard/upgrade.php"; ?>
                                <div class="2xl:col-span-9 lg:col-span-8 col-span-12">
                                    <div class="p-4 card">
                                        <div class="grid md:grid-cols-3 col-span-1 gap-4">
                                            <!-- BEGIN: Group Chart2 -->
                                            <?php include "views/components/dashboard/card-chart2.php"; ?>
                                            <!-- END: Group Chart2 -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 gap-5">
                                <div class="lg:col-span-8 col-span-12">
                                    <?php include "views/components/dashboard/report-chart2.php"; ?>
                                </div>

                                <div class="lg:col-span-4 col-span-12">
                                    <?php include "views/components/dashboard/overview-chart2.php"; ?>
                                </div>

                                <div class="lg:col-span-8 col-span-12">
                                    <?php include "views/components/dashboard/company-chart2.php"; ?>
                                </div>

                                <div class="lg:col-span-4 col-span-12">
                                    <?php include "views/components/dashboard/recent-activity-chart2.php"; ?>
                                </div>
                                <div class="lg:col-span-8 col-span-12">
                                    <?php include "views/components/dashboard/most-sales.php"; ?>
                                </div>
                                <div class="lg:col-span-4 col-span-12">
                                    <?php include "views/components/dashboard/overview2-chart2.php"; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>