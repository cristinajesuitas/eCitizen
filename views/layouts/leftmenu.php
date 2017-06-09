<?php

use yii\helpers\Url;
//use yii\bootstrap\ActiveForm;
//use app\web\User;

?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
			
		<!-- Search Form -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search...">
				<span class="input-group-btn">
					<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</form>
			
		<!-- Search Form End -->
			
		<!-- sidebar menu: : style can be found in sidebar.less -->
		
		<ul class="sidebar-menu" data-widget="tree">
		
			<li>
				<a href="/eCitizen/backend/web/index.php?r=region%2Findex">
				 <i class="fa fa-cubes"></i> <span>LGU Organization</span>
				</a>
			</li>
       
			<li>
				<a href="<?= Url::to('views/Pages/Citizen-Info')?>">
					<i class="fa fa-users"></i> <span>Citizen Registry</span>
				</a>
			</li>
			<li>
				<a href="Pages/Report.php">
					<i class="fa fa-folder"></i> <span>Reports</span>
						<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
				</a>
				 <ul class="treeview-menu">
            <li class="active"><a href="index.html">Socio-Economic Profile</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Competitiveness</a></li>
          </ul>
        </li>
       			
			<li>
				<a href="Pages/Report.php">
					<i class="fa fa-bar-chart"></i> <span>Charts</span>
						<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
				</a>
				 <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Lie Graph</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Pyramid Chart</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Utility</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">     
            <li>
              <a href="#"><i class="fa fa-book"></i> Library
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
				<li><a href="<?= Url::to(['lguprofile/index'])?>">
				LGU Profile</a></li>
                <li><a href="<?= Url::to(['library/default/index'])?>">
				PSGC</a></li>
                <li><a href="#"><i class="fa fa-map"></i>Province</a></li>
				<li><a href="#"><i class="fa fa-map"></i>Municipality</a></li>
                <li><a href="#"><i class="fa fa-map"></i>Barangay</a></li>
				<li><a href="#"><i class="fa fa-venus-double"></i>Sex</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Educational Attainment</a></li>
				<li><a href="#"><i class="fa fa-circle-o"></i>Citizenship</a></li>
              </ul>
            </li>		
         </ul>
		 <ul class="treeview-menu">     
            <li>
              <a href="#"><i class="fa fa-user"></i> User Management
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-users"></i>User</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Office</a></li>
				<li><a href="#"><i class="fa fa-circle-o"></i>Designation</a></li>
                <li><a href="#"><i class="fa fa-line-chart"></i>Access Level</a></li>
				<li><a href="#"><i class="fa fa-bar-chart"></i>Access Control</a></li>
              </ul>
            </li>		
         </ul>
		 
        </li>
        
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
</aside>
