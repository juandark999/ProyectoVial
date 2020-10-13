<div class="classic-grid">
<!-- Sidebar -->
<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                    <?php
									
									if(isset($_SESSION['nombre'])){

									?>
								<span>
								<?php echo $_SESSION['nombre']; ?>
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
								<?php
									}else{
								?>
								<span>
									Ciudadano
									<span class="user-level">Bienvenido</span>
									<!--<span class="caret"></span>-->
								</span>
								<?php
									}
								?>
                    </a>
                    <div class="clearfix"></div>
                    <!--
                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">Perfil</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Cerrar Sesi&oacute;n</span>
                                </a>
                            </li>
                        </ul>
                    </div>-->
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item active">
                    <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Inicio</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Modulos</h4>
                </li>




                <?php

							if(isset($_SESSION['rol'])){
								if($_SESSION['rol']==2){

									?>

									<li class="nav-item">
							<a data-toggle="collapse" href="#sidebarLayouts">
								<i class="fas fa-th-list"></i>
								<p>Usuario</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="sidebarLayouts">
								<ul class="nav nav-collapse">
									<li>
										<a href="sidebar-style-1.html">
											<a href="<?php echo getUrl("usuario","usuario","getCreate");?>"><span class="sub-item">Crear Usuario</span></a>
										</a>
									</li>
									<li>
										<a href="sidebar-style-1.html">
											<a href="<?php echo getUrl("usuario","usuario","getConsult"); ?>"><span class="sub-item">Consultar Usuarios</span></a>
										</a>
									</li>
									<li>
										<a href="sidebar-style-1.html">
											<a href="<?php echo getUrl("barrio","barrio","getRegistrar"); ?>"><span class="sub-item">Registrar Barrio</span></a>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<?php
									
								}
							}

						?>



                
                <li class="nav-item">
                    <a data-toggle="collapse" href="#maps">
                        <i class="icon-location-pin"></i>
                        <p>Geovisor</p>
                        
                    </a>
                    <!--<div class="collapse" id="maps">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="maps/jqvmap.html">
                                    <span class="sub-item">Visualizar</span>
                                </a>
                            </li>
                        </ul>
                    </div>-->
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-clipboard-list"></i>
                        <p>Orden Mantenimiento</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="sidebar-style-1.html">
                                    <span class="sub-item">Registrar Orden</span>
                                </a>
                            </li>
                            <li>
                                <a href="overlay-sidebar.html">
                                    <span class="sub-item">Consultar Orden</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <?php
                        if(isset($_SESSION['rol'])){
                            if($_SESSION['rol']==2){

                         
                ?>

                <li class="nav-item">
                    <a data-toggle="collapse" href="#forms">
                        <i class="icon-directions"></i>
                        <p>Tramos</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="forms">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="<?php echo getUrl("gestorvial","gestorvial","getRegistrar"); ?>">
                                    <span class="sub-item">Registrar Tramo</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo getUrl("gestorvial","gestorvial","getConsultar"); ?>">
                                    <span class="sub-item">Consultar Tramo</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <?php
                           }
                        }
                ?>


                <li class="nav-item">
                    <a data-toggle="collapse" href="#tables">
                        <i class="fas fa-user-cog"></i>
                        <p>Usuario</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="tables/tables.html">
                                    <span class="sub-item">Registrar Usuario</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo getUrl("Usuario","Usuario","index") ?>">
                                    <span class="sub-item">Consultar Usuario</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--
                <li class="nav-item">
                    <a data-toggle="collapse" href="#charts">
                        <i class="far fa-chart-bar"></i>
                        <p>Charts</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="charts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="charts/charts.html">
                                    <span class="sub-item">Chart Js</span>
                                </a>
                            </li>
                            <li>
                                <a href="charts/sparkline.html">
                                    <span class="sub-item">Sparkline</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="widgets.html">
                        <i class="fas fa-desktop"></i>
                        <p>Widgets</p>
                        <span class="badge badge-success">4</span>
                    </a>
                </li>-->
                <li class="nav-item">
                    <a data-toggle="collapse" href="#submenu">
                        <i class="fas fa-bars"></i>
                        <p>Catalogo</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="submenu">
                        <ul class="nav nav-collapse">
                            <li>
                                <a data-toggle="collapse" href="#subnav1">
                                    <span class="sub-item">Barrio</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="subnav1">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">Registrar Barrio</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">Consultar Barrio</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a data-toggle="collapse" href="#subnav2">
                                    <span class="sub-item">Comuna</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="subnav2">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">Registrar Comuna</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">Consultar Comuna</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a data-toggle="collapse" href="#subnav3">
                                    <span class="sub-item">Deterioro</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="subnav3">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">Registrar Deterioro</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">Consultar Deterioro</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a data-toggle="collapse" href="#subnav4">
                                    <span class="sub-item">Entorno</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="subnav4">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">Registrar Entorno</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">Consultar Entorno</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a data-toggle="collapse" href="#subnav5">
                                    <span class="sub-item">Elemento Complementario</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="subnav5">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">Registrar Elemento</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">Consultar Elemento</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a data-toggle="collapse" href="#subnav6">
                                    <span class="sub-item">Rol</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="subnav6">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">Registrar Rol</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">Consultar Rol</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#reporte">
                        <i class="fas fa-user-cog"></i>
                        <p>Reporte</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="reporte">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="tables/tables.html">
                                    <span class="sub-item">Caso</span>
                                </a>
                            </li>
                            <li>
                                <a href="tables/datatables.html">
                                    <span class="sub-item">Orden Mantenimiento</span>
                                </a>
                            </li>
                            <li>
                                <a href="tables/datatables.html">
                                    <span class="sub-item">Tramo</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--<li class="mx-4 mt-2">
                    <a href="http://themekita.com/atlantis-bootstrap-dashboard.html" class="btn btn-primary btn-block"><span class="btn-label mr-2"> <i class="fa fa-heart"></i> </span>Buy Pro</a> 
                </li>-->
            </ul>
        </div>
    </div>
</div>

<!-- End Sidebar -->