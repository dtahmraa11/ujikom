<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aira Florist</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vuestatic/landing/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/sidebar.css')); ?>">
</head>
<body>
    
        <div class="sidebar">
            <div class="sidebar-brand">
                <img src="<?php echo e(asset('asset/images/logo.png')); ?>" alt="Logo"> <h2>AiraFlorist</h2>
            </div>

            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href=""><span class="las la-igloo"></span><span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href=""><span class="las la-users"></span><span>Customers</span></a>
                    </li>
                    <li>
                        <a href=""><span class="las la-clipboard-list"></span><span>Projects</span></a>
                    </li>
                    <li>
                        <a href=""><span class="las la-shipping-bag"></span><span>Orders</span></a>
                    </li>
                    <li>
                        <a href=""><span class="las la-receipt"></span><span>Inventory</span></a>
                    </li>
                    <li>
                        <a href=""><span class="las la-user-circle"></span><span>Accounts</span></a>
                    </li>
                    <li>
                        <a href=""><span class="las la-clipboard-list"></span><span>Tasks</span></a>
                    </li>
            </ul>
        </div>
     </div>

     <div class="main-content">
        <header>
            <h2>
                <label for="">
                    <span class="las la-bars"></span>
                </label>

                Dashboard
            </h2>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here" />
            </div>

             <div class="user-wrapper">
                <img src="<?php echo e(asset('asset/images/cowo.jpeg')); ?>" style="width: 40px" height="40px" alt="">
                <div>
                    <h4>John Doe</h4>
                    <small>Super admin</small>
                </div>
             </div>
        </header>

        <main>

            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Customers</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>79</h1>
                        <span>Projects</span>
                    </div>
                    <div>
                        <span class="las la-clipboard-list"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>124</h1>
                        <span>Orders</span>
                    </div>
                    <div>
                        <span class="las la-shopping-bag"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>$6k</h1>
                        <span>Income</span>
                    </div>
                    <div>
                        <span class="las la-google-wallet"></span>
                    </div>
                </div>
            </div>

        </main>
     </div>

</body>
</html><?php /**PATH C:\xampp1\htdocs\MoonlightBlooms\resources\views/sidebar.blade.php ENDPATH**/ ?>