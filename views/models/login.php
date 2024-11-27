<div class="auth-box h-full flex flex-col justify-center">
    <div class="mobile-logo text-center mb-6 lg:hidden flex justify-center">
        <div class="mb-10 inline-flex items-center justify-center">
            <div class="flex items-center">
            <img src="src/img/logo-login.jpg" alt="" srcset="" />
            <span class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white">DashCode</span>
            </div>
               
        </div>
    </div>
    <div class="text-center 2xl:mb-10 mb-4">
        <h4 class="font-medium"> </h4>
        <div class="text-slate-500 text-base">
        </div>
    </div>

    <!-- START::LOGIN FORM -->
    <?php include "views/components/login/login-form.php"; ?>
    <!-- END::LOGIN FORM -->

    <div class="relative border-b-[#9AA2AF] border-opacity-[16%] border-b pt-6">
        <div class="absolute inline-block bg-white dark:bg-slate-800 dark:text-slate-400 left-1/2 top-1/2 transform -translate-x-1/2
                    px-4 min-w-max text-sm text-slate-500 font-normal">

        </div>
    </div>
    <div class="max-w-[242px] mx-auto mt-8 w-full">
        <?php include 'views/components/login/social-login.php'; ?>
    </div>

    <div class="md:max-w-[345px] mx-auto font-normal text-slate-500 dark:text-slate-400 mt-12 uppercase text-sm">

        <a href="" class="text-slate-900 dark:text-white font-medium hover:underline">

        </a>
    </div>
</div>