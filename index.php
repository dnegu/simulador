<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Product Page Template</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default navbar-inverse">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#">Pro4MixCem</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="jumbotron">
		  <h1 class="text-center"> PRO4MIXCEM</h1>
    </div>
  </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="name">
                                NOMBRE</label>
                            <input type="text" class="form-control" id="name" placeholder="Nombre del cemento" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="cantidad">
                                Cantidad del Clinker:</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="cantidad" placeholder="Peso del Clinker" required="required" />
                                <span class="input-group-addon">Toneladas Métricas</span>
                             </div>
                        </div>
                         <div class="form-group">
                            <label for="cantidad">
                                Número de Materia Prima:</label>
                            <select id="MP" name="cantidad" class="form-control" required="required">
                                <option value="na" selected="">Elije un opción:</option>
                                <option value="MP2">2 Materias Primas</option>
                                <option value="MP3">3 Materias Primas</option>
                                <option value="MP4">4 Materias Primas</option>
                            </select>
                        </div>
                    </div>
                         <div class="col-lg-2">
                           </div>
                         <div class="col-lg-6">                                             
                        <div class="form-group">
                            <label for="name">
                                Módulos Requeridos:</label>                              
                         </div>
                          <div class="col-lg-2">
                           </div>
                            <div class="col-lg-4">   
                               <div class="input-group">
                                <span class="input-group-addon">KSK</span>
                                <input type="number" class="form-control" id="KSK" placeholder="1-2" required="required" />
                               </div>
                               
                                <div class="input-group">
                                <span class="input-group-addon"> SM </span>
                                <input type="number" class="form-control" id="SM" placeholder="1-2" required="required" />
                               </div> 
                               
                               <div class="input-group">
                                <span class="input-group-addon">TM </span>
                                <input type="number" class="form-control" id="TM" placeholder="1-2" required="required" />
                               </div>
							 </div>
                        
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Siguiente </button>
                    </div>
                </div>
                </form>
            </div>
        </div>
     
    </div>

<hr>
<div class="container">
	<div class="col-lg-12">
	   <table class="table table-striped">
		 <thead>
            <tr>
              <th class="text-center">  </th>
              <th class="text-center"> Materia Prima 1  </th>
              <th class="text-center"> Materia Prima 2 </th>
              <th class="text-center"> Materia Prima 3 </th>
              <th class="text-center"> Materia Prima 4 </th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td class="text-center"> SiO<sub>2</sub></td>
              <td class="text-center"> <input class="form-control" id="si1" placeholder="123"> </input></td>
              <td class="text-center"> <input class="form-control" id="si2" placeholder="123"> </td>
              <td class="text-center"> <input class="form-control" id="si3" placeholder="123"> </td>
              <td class="text-center"> <input class="form-control" id="si4" placeholder="123"> </td>
            </tr>

            <tr>
              <td class="text-center"> Al<sub>2</sub>O<sub>3</sub> </td>
              <td class="text-center"> <input class="form-control" id="al1" placeholder="123"> </td>
              <td class="text-center"> <input class="form-control" id="al2" placeholder="123"> </td>
              <td class="text-center"> <input class="form-control" id="al3" placeholder="123"> </td>
              <td class="text-center"> <input class="form-control" id="al4" placeholder="123"> </td>
            </tr>

            <tr>
              <td class="text-center"> Fe<sub>2</sub>O<sub>3</sub> </td>
              <td class="text-center"> <input class="form-control" id="fe1" placeholder="123"> </td>
              <td class="text-center"> <input class="form-control" id="fe2" placeholder="123"> </td>
              <td class="text-center"> <input class="form-control" id="fe3" placeholder="123"> </td>
              <td class="text-center"> <input class="form-control" id="fe4" placeholder="123"> </td>
            </tr>

            <tr>
              <td class="text-center"> CaO </td>
              <td class="text-center"> <input class="form-control" id="ca1" placeholder="123"> </td>
              <td class="text-center"> <input class="form-control" id="ca2" placeholder="123"> </td>
              <td class="text-center"> <input class="form-control" id="ca3" placeholder="123"> </td>
              <td class="text-center"> <input class="form-control" id="ca4" placeholder="123"> </td>
            </tr>
            <tr>
              <td class="text-center"> SO<sub>3</sub> </td>
              <td class="text-center"> <input class="form-control" id="so1" placeholder="123"> </td>
              <td class="text-center"> <input class="form-control" id="so2" placeholder="123"> </td>
              <td class="text-center"> <input class="form-control" id="so3" placeholder="123"> </td>
              <td class="text-center"> <input class="form-control" id="so4" placeholder="123"> </td>
            </tr>
            <tr>
              <td class="text-center"> Rojo </td>
              <td class="text-center"> <input class="form-control" id="ro1" placeholder="123"> </td>
              <td class="text-center"> <input class="form-control" id="ro2" placeholder="123"> </td>
              <td class="text-center"> <input class="form-control" id="ro3" placeholder="123"> </td>
              <td class="text-center"> <input class="form-control" id="ro4" placeholder="123"> </td>
            </tr>
            <tr>
              <td class="text-center"> Resto </td>
              <td class="text-center"> <input class="form-control" id="re1" placeholder="123"> </td>
              <td class="text-center"> <input class="form-control" id="re2" placeholder="123"> </td>
              <td class="text-center"> <input class="form-control" id="re3" placeholder="123"> </td>
              <td class="text-center"> <input class="form-control" id="re4" placeholder="123"> </td>
            </tr>
          </tbody>
		</table>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="text-center">
				<h1><button type="button" class="btn btn-primary">Calcular</button></h1>				
			</div>
		</div>
	</div>
</div>
 <div class="container">
 	<div class="row">
 		<div class="col-lg-12">
 			 <table class="table table-striped">
		 <thead>
            <tr>
              <th class="text-center">  </th>
              <th class="text-center"> Materia Prima 1  </th>
              <th class="text-center"> Materia Prima 2 </th>
              <th class="text-center"> Materia Prima 3 </th>
              <th class="text-center"> Materia Prima 4 </th>
              <th class="text-center"> Crudo </th>
              <th class="text-center"> Clinker </th>
            </tr>
          </thead>

          <tbody>
            <tr class="edit" id="detail">
              <td id="no" class="text-center"> Nombre </td>
              <td id="name" class="text-center"> Caliza </td>
              <td id="mobile" class="text-center"> Arcilla </td>
              <td id="mail" class="text-center"> Corrector 1 </td>
              <td id="city" class="text-center"> Corrector 2 </td>
              <td id="mail" class="text-center"> Crudo </td>
              <td id="city" class="text-center"> Clinker </td>
            </tr>

            <tr>
              <td class="text-center"> SiO<sub>2</sub></td>
              <td class="text-center"> <input class="form-control" id="si1" placeholder="123" disabled> </input></td>
              <td class="text-center"> <input class="form-control" id="si2" placeholder="123" disabled> </td>
              <td class="text-center"> <input class="form-control" id="si3" placeholder="123" disabled> </td>
              <td class="text-center"> <input class="form-control" id="si4" placeholder="123" disabled> </td>
			  <td class="text-center"> <input class="form-control" id="si3" placeholder="123" disabled> </td>
              <td class="text-center"> <input class="form-control" id="si4" placeholder="123" disabled> </td>
            </tr>

            <tr>
              <td class="text-center"> Al<sub>2</sub>O<sub>3</sub> </td>
              <td class="text-center"> <input class="form-control" id="al1" placeholder="123" disabled> </td>
              <td class="text-center"> <input class="form-control" id="al2" placeholder="123" disabled> </td>
              <td class="text-center"> <input class="form-control" id="al3" placeholder="123" disabled> </td>
              <td class="text-center"> <input class="form-control" id="al4" placeholder="123" disabled> </td>
			  <td class="text-center"> <input class="form-control" id="si3" placeholder="123" disabled> </td>
              <td class="text-center"> <input class="form-control" id="si4" placeholder="123" disabled> </td>
            </tr>

            <tr>
              <td class="text-center"> Fe<sub>2</sub>O<sub>3</sub> </td>
              <td class="text-center"> <input class="form-control" id="fe1" placeholder="123" disabled> </td>
              <td class="text-center"> <input class="form-control" id="fe2" placeholder="123" disabled> </td>
              <td class="text-center"> <input class="form-control" id="fe3" placeholder="123" disabled> </td>
              <td class="text-center"> <input class="form-control" id="fe4" placeholder="123" disabled> </td>
			  <td class="text-center"> <input class="form-control" id="si3" placeholder="123" disabled> </td>
              <td class="text-center"> <input class="form-control" id="si4" placeholder="123" disabled> </td>
            </tr>

            <tr>
              <td class="text-center"> CaO </td>
              <td class="text-center"> <input class="form-control" id="ca1" placeholder="123" disabled> </td>
              <td class="text-center"> <input class="form-control" id="ca2" placeholder="123" disabled> </td>
              <td class="text-center"> <input class="form-control" id="ca3" placeholder="123" disabled> </td>
              <td class="text-center"> <input class="form-control" id="ca4" placeholder="123" disabled> </td>
			  <td class="text-center"> <input class="form-control" id="si3" placeholder="123" disabled> </td>
              <td class="text-center"> <input class="form-control" id="si4" placeholder="123" disabled> </td>
            </tr>
            <tr>
              <td class="text-center"> SO<sub>3</sub> </td>
              <td class="text-center"> <input class="form-control" id="so1" placeholder="123" disabled> </td>
              <td class="text-center"> <input class="form-control" id="so2" placeholder="123" disabled> </td>
              <td class="text-center"> <input class="form-control" id="so3" placeholder="123" disabled> </td>
              <td class="text-center"> <input class="form-control" id="so4" placeholder="123" disabled> </td>
			  <td class="text-center"> <input class="form-control" id="si3" placeholder="123" disabled> </td>
              <td class="text-center"> <input class="form-control" id="si4" placeholder="123" disabled> </td>
            </tr>
            <tr>
              <td class="text-center"> Rojo </td>
              <td class="text-center"> <input class="form-control" id="ro1" placeholder="123" disabled> </td>
              <td class="text-center"> <input class="form-control" id="ro2" placeholder="123" disabled> </td>
              <td class="text-center"> <input class="form-control" id="ro3" placeholder="123" disabled> </td>
              <td class="text-center"> <input class="form-control" id="ro4" placeholder="123" disabled> </td>
			  <td class="text-center"> <input class="form-control" id="si3" placeholder="123" disabled> </td>
              <td class="text-center"> <input class="form-control" id="si4" placeholder="123" disabled> </td>
            </tr>
            <tr>
              <td class="text-center"> Resto </td>
              <td class="text-center"> <input class="form-control" id="re1" placeholder="123" disabled> </td>
              <td class="text-center"> <input class="form-control" id="re2" placeholder="123" disabled> </td>
              <td class="text-center"> <input class="form-control" id="re3" placeholder="123" disabled> </td>
              <td class="text-center"> <input class="form-control" id="re4" placeholder="123" disabled> </td>
			  <td class="text-center"> <input class="form-control" id="si3" placeholder="123" disabled> </td>
              <td class="text-center"> <input class="form-control" id="si4" placeholder="123" disabled> </td>
            </tr>
          </tbody>
		</table>
 		</div>
 	</div>
 	<div class="row">
		<div class="col-lg-12">
			<div class="text-center">
				<h1><button type="button" class="btn btn-info">Guardar</button></h1>				
			</div>
		</div>
	</div>
 </div>
  <hr>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © Servicios IWI. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>
