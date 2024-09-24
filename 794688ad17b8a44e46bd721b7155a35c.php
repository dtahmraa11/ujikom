<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aira Florist</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css" >">
    <link rel="stylesheet" href="<?php echo e(asset('css/admin.css')); ?>">
</head>
<body>
    
        <div class="sidebar">
            <div class="sidebar-brand">
                <img src="<?php echo e(asset('asset/images/logo.png')); ?>" alt="Logo"> <h2>AiraFlorist</h2>
            </div>

            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href=""><span class="las la-igloo"></span><span>Products</span></a>

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
            <div class="sidebar-menu mt-4">
                <ul>
                        <li class="nav-item">
                            <form action="<?php echo e(url('/logout')); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="nav-link btn btn-primary btn-link border-5" style="background-color: #FFB1B1">Logout</button>
                            </form>
                        </li>
                </ul>
        </div>
             <div class="user-wrapper">
                <img src="<?php echo e(asset('asset/images/bando.jpeg')); ?>" style="width: 40px" height="40px" alt="">
                <div>
                    <h4>Dita Humaira P</h4>
                    <small>Super Admin</small>
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
</html><?php /**PATH C:\xampp1\htdocs\MoonlightBlooms\resources\views/admin.blade.php ENDPATH**/ ?>