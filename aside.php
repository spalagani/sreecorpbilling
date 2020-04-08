  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $serverurl ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
  
      <ul class="sidebar-menu" data-widget="tree">
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Operator Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="<?php echo $serverurl ?>operator/add-operator.php"><i class="fa fa-plus"></i> Add Operator</a></li>
            <li><a href="<?php echo $serverurl ?>view.php?list=operator"><i class="fa fa-check"></i> View Operator</a></li>
            <li><a href="#"><i class="fa fa-search"></i> Search Operator</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i> <span>Branch Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="<?php echo $serverurl ?>branch/add-branch.php"><i class="fa fa-search"></i> Add Branch</a></li>
            <li><a href="<?php echo $serverurl ?>view.php?list=payments"><i class="fa fa-list"></i> View Branchs</a></li>
          
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-group"></i> <span>Users Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="<?php echo $serverurl ?>user/add-user.php"><i class="fa fa-plus"></i> Add User</a></li>
            <li><a href="<?php echo $serverurl ?>user/user_bulk.php"><i class="fa fa-upload"></i> Upload Users list</a></li>
            <li><a href="<?php echo $serverurl ?>user/view.php"><i class="fa fa-check"></i> View Users</a></li>
            <li><a href="#"><i class="fa fa-search"></i> Search Users</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-circle-o"></i> <span>Collection Boys Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="<?php echo $serverurl ?>collection-boy/add-collection-boy.php"><i class="fa fa-plus"></i> Add Collection Boy</a></li>
            <li><a href="<?php echo $serverurl ?>view.php?list=collection-boy"><i class="fa fa-check"></i> View Collection Boy</a></li>
          </ul>
        </li>

           <li class="treeview">
          <a href="#">
            <i class="fa fa-square"></i> <span>Packages Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="<?php echo $serverurl ?>package/add-package.php"><i class="fa fa-plus"></i> Add Packages</a></li>
            <li><a href="<?php echo $serverurl ?>view.php?list=package"><i class="fa fa-check"></i> View Packages</a></li>
          </ul>
        </li>


         <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i> <span>Payments Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="<?php echo $serverurl ?>user/user-search.php"><i class="fa fa-search"></i>Make Payment</a></li>
          <!--  <li ><a href="<?php echo $serverurl ?>payment/user-payment-history.php"><i class="fa fa-search"></i>User Payment Histroy</a></li>
            
            <li><a href="<?php echo $serverurl ?>view.php?list=payments"><i class="fa fa-list"></i> List Paid/Unpaid Users</a></li>
           <li ><a href="<?php echo $serverurl ?>view.php?list=payments"><i class="fa fa-search"></i> Search Paid/Unpaid Users</a></li>
           <li ><a href="<?php echo $serverurl ?>view.php?list=payments"><i class="fa fa-search"></i> Search Paid/Unpaid Users by year</a></li>
            <li><a href="<?php echo $serverurl ?>view.php?list=payments"><i class="fa fa-mobile"></i> Send SMS to User</a></li>
           -->
           <li ><a href="<?php echo $serverurl ?>payment/pay-search.php"><i class="fa fa-search"></i> Search Payments</a></li>
           
          </ul>
        </li>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>