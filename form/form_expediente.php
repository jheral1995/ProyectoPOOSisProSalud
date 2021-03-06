<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <title>Expediente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <meta name="author" content="templatemo">
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    
    <!-- CSS Bootstrap & Custom -->
    <link rel='stylesheet prefetch' href='../css/bootstrap-theme.min.css'>
    <link rel='stylesheet prefetch' href='../css/bootstrapValidator.min.css'>

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/templatemo_misc.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/templatemo_style.css" rel="stylesheet" media="screen">
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    
    <!-- JavaScripts -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/modernizr.js"></script>

    
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
        </div>

    <![endif]-->
</head>
<body>
    
    
    <div class="bg-image"></div>
    <div class="overlay-bg"></div>

    
    

    <!-- This one in here is responsive menu for tablet and mobiles -->
    <div class="responsive-navigation visible-sm visible-xs">
        <a href="#" class="menu-toggle-btn">
            <i class="fa fa-bars fa-2x"></i>
        </a>
        <div class="responsive_menu">
            <ul class="main_menu">
                <li><a class="show-1 homebutton" href="../index.php"><i class="fa fa-home"></i>Homepage</a></li>
                <li><a class="" href="form_administrador1.php"><i class="fa fa-group"></i>About Us</a></li>
                <li><a class="" href="#"><i class="fa fa-briefcase"></i>Our Gallery</a></li>
                <li><a class="" href="#"><i class="fa fa-cogs"></i>Services</a></li>
                <li><a class="" href="#"><i class="fa fa-globe"></i>Contact Us</a></li>
            </ul> <!-- /.main_menu -->
        </div> <!-- /.responsive_menu -->
    </div> <!-- /responsive_navigation -->

    <div class="main-content">
        <div class="container">
            <div class="row">

                <!-- Static Menu -->
                <div class="col-md-2 visible-md visible-lg">
                    <div class="main_menu">
                        <ul class="menu">
                            <li><a  href="../index.php" data-toggle="tooltip" data-original-title="Inicio"><i class="fa fa-home"></i></a></li>
                            <li><a  href="form_administrador1.php" data-toggle="tooltip" data-original-title="Adminsitrador"><i class="fa fa-user"></i></a></li>
                            <li><a  href="#" data-toggle="tooltip" data-original-title="Reportes"><i class="fa fa-briefcase"></i></a></li>
                            <li><a  href="#" data-toggle="tooltip" data-original-title="Personal de la Clinica"><i class="fa fa-cog"></i></a></li>
                            <li><a  href="#" data-toggle="tooltip" data-original-title="otra cosa"><i class="fa fa-globe"></i></a></li>
                        </ul>
                    </div> <!-- /.main-menu -->
                </div> <!-- /.col-md-2 -->

                <!-- Begin Content -->
                <div class="col-md-10">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="templatemo_logo">
                                <h1> SisProSalud</h1>
                            </div> <!-- /.logo -->
                        </div> <!-- /.col-md-12 -->
                    </div> <!-- /.row -->


                    <div id="menu-container">
                        
                        
                        <div id="menu-1" class="homepage">
                            <div class="page-header">
                                <h2 class="page-title" align="left">Expediente</h2>
                            </div> <!-- /.page-header -->
                            <div  class="content-inner" align="center">
                                <div class="row">
                                    <div class="row">
                                        <div class="col-md-3" >
                                            <label for="txt_nombre">Nombre:</label>
                                        </div>
                                        <div class="col-md-4 full-row" align="left">
                                            <input type="text" id="txt_nombre" maxlength="100" >
                                            <input type="hidden" id="id_datos_personales">
                                            <input type="hidden" id="id_ficha_medica">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3" >
                                            <label for="txt_apellido">Apellido:</label>
                                        </div>
                                        <div class="col-md-4 full-row" align="left">
                                            <input type="text" id="txt_apellido" maxlength="100" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3" >
                                            <label for="txt_num_identidad">Numero de Identidad:</label>
                                        </div>
                                        <div class="col-md-4 full-row" align="left">
                                            <input type="text" id="txt_num_identidad" maxlength="15" placeholder="ejem: 0801-1990-12345">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3" >
                                            <label for="date_fecha_ing">Fecha Ingreso:</label>
                                        </div>
                                        <div class="col-md-4 full-row" align="left">
                                            <div><input type="date" id="date_fecha_ing"></div>
                                        </div>
                                    </div>

                                    <div class="container">                                      
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#datos" style="color: #a71e2b;"><b>Datos Personales</b></a></li>
                                            <li><a data-toggle="tab" href="#ficha" style="color: #a71e2b;"><b>Ficha medica</b></a></li>
                                        </ul>

                                        <div class="tab-content">
                                            <div id="datos" class="tab-pane fade in active">
                                                <h3>Datos Personales</h3>
                                                <div class="row contact-form">
                                                    <div class="col-md-3" >
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="date_fecha_nac">Fecha Nacimiento:</label>
                                                        <div><input type="date" id="date_fecha_nac"></div>
                                                    </div>
                                                </div>
                                                <div class="row contact-form">
                                                    <div class="col-md-3" >
                                                    </div>
                                                    <div class="col-md-6" >
                                                        <label for="slc_sexo">Sexo:</label>
                                                        <select id="slc_sexo" class="">
                                                            <option value="Masculino">Masculino</option>
                                                            <option value="Femenino">Femenino</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="row contact-form">
                                                    <div class="col-md-3" >
                                                    </div>
                                                    <div id="div-departamento" class="col-md-6">
                                                        <label for="slc_departamento">Departamento:</label>
                                                        <select id="slc_departamento">
                                                            <option></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row contact-form">
                                                <div class="col-md-3" >
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="slc_ciudad">Ciudad:</label>
                                                        <select id="slc_ciudad"></select>
                                                    </div>
                                                </div>
                                                
                                                <div class="row contact-form">
                                                <div class="col-md-3" >
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p class="full-row">
                                                            <label for="txt_direccion">Direccion:</label>
                                                            <textarea name="txt_direccion" id="txt_direccion" rows="6"></textarea>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row contact-form">
                                                    <div class="col-md-3" >
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="txt_celular">Celular:</label>
                                                        <input id="txt_celular" type="text" maxlength="60">
                                                    </div>
                                                </div>
                                                <div class="row contact-form">
                                                    <div class="col-md-3" >
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="txt_email">E-Mail:</label>
                                                        <input id="txt_email" type="text" maxlength="60">
                                                    </div>
                                                </div>
                                                
                                                          
                                            </div><!-- Datos Personales -->
                                            
                                            <div id="ficha" class="tab-pane fade">
                                                <h3 style="padding:  30px 0px; ">Ficha medica</h3>
                                                <div class="row">                                                
                                                    <div class="col-md-2" >
                                                        <label for="padecimiento">Padecimientos:</label>
                                                    </div>
                                                    <div name="padecimiento" id="div-padecimiento" class="col-md-4"></div>
                                                    <div class="col-md-4" align="left">
                                                        <button class="add mainBtn2" id="add-padecimiento">Agregar padecimiento</button>
                                                        
                                                        <button class="add mainBtn3" id="crear-padecimiento">Crear padecimiento</button>
                                                    </div>                        
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label for="slc_grupo_sanguineo">Grupo Sanguineo:</label>
                                                    </div>
                                                    <div class="col-md-2 full-row" align="left">
                                                        <select style="width: 100px;" id="slc_grupo_sanguineo">
                                                            <option value="O+">O+</option>
                                                            <option value="O-">O-</option>
                                                            <option value="A+">A+</option>
                                                            <option value="A-">A-</option>
                                                            <option value="B+">B+</option>
                                                            <option value="B-">B-</option>
                                                            <option value="AB+">AB+</option>
                                                            <option value="AB-">AB-</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="slc_anteojos">Anteojos:</label>
                                                    </div>
                                                    <div class="col-md-2 full-row" align="left">
                                                        <select style="width: 100px;" id="slc_anteojos">
                                                            <option value="Si">Si</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="slc_accidentes">Accidentes:</label>
                                                    </div>
                                                    <div class="col-md-2 full-row" align="left">
                                                        <select style="width: 100px;" id="slc_accidentes">
                                                            <option value="Si">Si</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label for="txt_observaciones">Observaciones:</label>
                                                    </div>
                                                    <div class="col-md-8" >
                                                        <p class="full-row">
                                                            
                                                            <textarea id="txt_observaciones" rows="6"></textarea>
                                                        </p>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-md-2">
                                                        <label for="slc_altura">Altura:</label>
                                                    </div>
                                                    <div class="col-md-2 full-row" align="left">
                                                        <select id="slc_altura"></select>
                                                    </div>
                                                </div>
                                                
                                                

                                                
                                                
                                                
                                            </div><!-- ficha medica -->
                                            
                                            
                                            
                                            
                                        </div><!--Tab content -->
                                    </div><!--container del tab var -->

                                     <div class="row contact-form">
                                        <div class="col-md-3" >
                                        </div>
                                        <div class="col-md-2">
                                            <button id="btn_guardar" class="mainBtn" >
                                                Guardar
                                            </button>
                                        </div>
                                        <div class="col-md-2">
                                            <button id="btn_nuevo" class="mainBtn" >
                                                Nuevo
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row contact-form">
                                        <div class="col-md-3" >
                                        </div>
                                        <div class="col-md-6" id="div-respuesta">
                                            
                                        </div>
                                    </div>

                                </div> <!-- /.row -->
                            </div> <!-- /.our-team -->
                        </div> <!-- /.content-inner -->
                    </div> <!-- /.about-us -->
                </div> <!-- /.content-holder -->
            </div> <!-- /.col-md-10 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
<!-- /.main-content -->


    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.lightbox.js"></script>
    <script src="js/templatemo_custom.js"></script>
    
    <script src="../js/js_form/js_form_expediente.js" type="text/javascript"></script>
    <script src='../js/bootstrapvalidator.min.js'></script>

</body>
</html>