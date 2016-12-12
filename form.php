<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include("func.php");
?>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FeedPro - Aplikasi Feedback Problem Appearance Body 1</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!--bootstrap datepicker-->
    <link href="assets/css/bootstrap-datepicker.css" rel="stylesheet">
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>


<?php
function aman($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function tanggal($date){
    $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
 
    $tahun = substr($date, 0, 4);
    $bulan = substr($date, 5, 2);
    $tgl   = substr($date, 8, 2);
 
    $result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;     
    return($result);
}
?>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">FeedPro</a> 
            </div>
    <div style="color: white;
                padding: 15px 50px 5px 50px;
                float: left;
                font-size: 24px;"> Aplikasi Feedback Problem Appearance Body 1
    </div>        
    <div style="color: white;
                padding: 15px 50px 5px 50px;
                float: right;
                font-size: 16px;"> <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> 
    </div>
        </nav>   
           <!-- /. NAV SIDE bar  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <a href="/profile.php"><img src="assets/img/find_user.png" class="user-image img-responsive"/></a>
                    </li>
                
                    
                    <li>
                        <a class="active-menu"  href="index.html"><i class="fa fa-home fa-3x"></i>Home</a>
                    </li>
                    <li> <!--navi bar menu Maping Area-->
                        <a  href="ui.html"><i class="fa fa-image fa-3x"></i> Maping Area</a>
                    </li>
                    <li> <!--navi dropdown menu Problem -->
                        <a href="#"><i class="fa fa-edit fa-3x"></i> Manage Problem<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="form.html">Input Problem</a>
                            </li>
                            <li>
                                <a href="table.html">Edit Data Problem</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li> <!--navi dropdown menu Jaminan Perbaikan -->
                        <a  href="#"><i class="fa fa-mail-reply fa-3x"></i> Jaminan Perbaikan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="form.html">Buat Jaminan Perbaikan</a>
                            </li>
                            <li>
                                <a href="table.html">Update Jaminan Perbaikan</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li> <!--navi dropdown menu Laporan Problem -->
                        <a  href="#"><i class="fa fa-table fa-3x"></i> Laporan Problem<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="table.html">Problem di Body 1</a>
                            </li>
                            <li>
                                <a href="table.html">Problem di Next Process</a>
                            </li>
                            
                        </ul>
                    </li>
                </ul>
               
            </div>
            
        </nav>   
        <!-- /. NAV TOP isi  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Forms Page</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Element Examples
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Basic Form Examples</h3>
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Text Input</label>
                                            <input class="form-control" />
                                            <p class="help-block">Help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Text Input with Placeholder</label>
                                            <input class="form-control" placeholder="PLease Enter Keyword" />
                                            <input class="form-control" placeholder="nama problem" />
                                        </div>

                                        <h3>Input Data Problem</h3> <!--form input problem-->
                                    <!--form input problem mulai-->
                                    <div class="form-group">
                                        <div class="form-input">
                                            <label>Model</label>
                                            <select class="form-control">
                                                <option>D17D</option>
                                                <option>D22x</option>
                                                <option>D40D</option>
                                            </select>
                                        </div>
                                        <div class="form-input">
                                            <label>Nama Problem</label>
                                            <input class="form-control" placeholder="nama problem" />
                                        </div>
                                        <div class="form-input">
                                            <label>Area</label>
                                            <select class="form-control">
                                                <option>D17D Engine Hood Outer</option>
                                                <option>D17D Engine Hood Inner</option>
                                                <option>D17D Front Door Outer Rh</option>
                                                <option>D17D Front Door Inner Rh</option>
                                                <option>D17D Rear Door Outer Rh</option>
                                            </select>
                                        </div>
                                        <div class="form-input">
                                            <label>Zone</label>
                                            <input class="form-control" placeholder="zone" />
                                        </div>
                                        <div class="form-group">
                                        <div class="input-group date" data-provide="datepicker">
                                            <label>Tanggal</label>
                                            <input type="text" name="tgl" class="form-control" placeholder="0000-00-00">
                                                 <div class="input-group-addon">
                                                   <span class="glyphicon glyphicon-calendar"></span>
                                                 </div>
                                        </div>
                                        </div>
                                        <div class="form-input">
                                            <label>Pos Temuan</label>
                                            <input class="form-control" placeholder="pos temuan problem" />
                                        </div>
                                    </div>



                                        
                                        <div class="form-group">
                                            <label>File input</label>
                                            <input type="file" />
                                        </div>
                                        <div class="form-group">
                                            <label>Text area</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Checkboxes</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" />Checkbox Example One
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""/>Checkbox Example Two
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""/>Checkbox Example Three
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Inline Checkboxes Examples</label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox"/> One
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox"/> Two
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox"/> Three
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Radio Button Examples</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked />Radio Example One
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"/>Radio Example Two
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3"/>Radio Example Three
                                                </label>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Select Example</label>
                                            <select class="form-control">
                                                <option>One Vale</option>
                                                <option>Two Vale</option>
                                                <option>Three Vale</option>
                                                <option>Four Vale</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Multiple Select Example</label>
                                            <select multiple class="form-control">
                                                <option>One Vale</option>
                                                <option>Two Vale</option>
                                                <option>Three Vale</option>
                                                <option>Four Vale</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-primary">Reset Button</button>

                                    </form>
                                    <br />
                                      <h3>With radio & checkboxes</h3>
                                    <form>

    <div class="form-group input-group">
      <span class="input-group-addon">
        <input type="checkbox" />
      </span>
      <input type="text" class="form-control" />
    </div>
                                         <div class="form-group input-group">
      <span class="input-group-addon">
        <input type="radio" />
      </span>
      <input type="text" class="form-control" />
    </div>
                                    </form>

                                 
    </div>
                                
                                <div class="col-md-6">
                                    <h3>Disabled Form State Examples</h3>
                                    <form role="form">
                                        <fieldset disabled="disabled">
                                            <div class="form-group">
                                                <label for="disabledSelect">Disabled input</label>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled />
                                            </div>
                                            <div class="form-group">
                                                <label for="disabledSelect">Disabled select </label>
                                                <select id="disabledSelect" class="form-control">
                                                    <option>Disabled select</option>
                                                </select>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" />Disabled Checkbox
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Disabled Button</button>
                                        </fieldset>
                                    </form>
                                    <h3>Validation State Examples</h3>
                                    <form role="form">
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Input with success</label>
                                            <input type="text" class="form-control" id="inputSuccess">
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="inputWarning">Input with warning</label>
                                            <input type="text" class="form-control" id="inputWarning">
                                        </div>
                                        <div class="form-group has-error">
                                            <label class="control-label" for="inputError">Input with error</label>
                                            <input type="text" class="form-control" id="inputError">
                                        </div>
                                    </form>
                                    <h3>Input Group Examples</h3>
                                    <form role="form">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-eur"></i>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Font Awesome Icon">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                    <h3>Different Size Input Groups</h3>
                                     <form role="form">
  <div class=" form-group input-group input-group-lg">
  <span class="input-group-addon">@</span>
  <input type="text" class="form-control" placeholder="Username" />
</div>

<div class="form-group input-group">
  <span class="input-group-addon">@</span>
  <input type="text" class="form-control" placeholder="Username" />
</div>

<div class="form-group input-group input-group-sm">
  <span class="input-group-addon">@</span>
  <input type="text" class="form-control" placeholder="Username" />
</div>
                                         
                                     </form>
                                    <h3>Different Size Input Groups</h3>
                                     <form role="form">
                                  <div class="input-group">
      <span class="form-group input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
      <input type="text" class="form-control" />
    </div>
<br />
                                           <div class="input-group">
     
      <input type="text" class="form-control" />
                                                <span class="form-group input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
    </div>
                                         </form>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <h3>More Customization</h3>
                         <p>
                        For more customization for this template or its components please visit official bootstrap website i.e getbootstrap.com or <a href="http://getbootstrap.com/components/" target="_blank">click here</a> . We hope you will enjoy our template. This template is easy to use, light weight and made with love by binarycart.com 
                        </p>
                    </div>
                </div>
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
      <!--javascript datepicker dan konversi ke tanggal Indonesia-->
    <script src="assets/js/bootstrap-datepicker.js"></script>
    <script>
    $('.date').datepicker({
        format: 'yyyy-mm-dd',
    })
    </script>
    
   
</body>
</html>
