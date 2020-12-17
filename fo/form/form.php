
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Encuesta</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
</head>
<body>
<div class="bg-danger text-white">
    <h1 align="center">Beca Felipe Berriozábal</h1>
</div>
<br>
<form class="" method ="post" action="a2.php" name="f1">
    <div class="container">
        <!-- Step 1 -->
        <div class="row">
            <div class="mb-3 col-sm-12 col-md-4">
                <label for="validationTextarea">Nombre</label>
                <input type="text" class="form-control is-invalid" id="validationTextarea" name="nom" required />
            </div>
            <div class="mb-3 col-sm-12 col-md-4">
                <label for="validationTextarea">Apellido Paterno</label>
                <input type="text" class="form-control is-invalid" id="validationTextarea" name="apa" required />
            </div>
            <div class="mb-3 col-sm-12 col-md-4">
                <label for="validationTextarea">Apellido Materno</label>
                <input type="text" class="form-control is-invalid" id="validationTextarea" name="ama" required />
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-sm-12 col-md-4">
                <label for="validationBirthday">Fecha de nacimiento</label>
                <input type="date" id="validationBirthday" class="form-control" name="nac" required>
                <div class="invalid-feedback">Tu fecha de nacimiento es necesaria</div>
            </div>
            <div class="mb-3 col-sm-12 col-md-8">
                <label for="validationBirthday">Domicilio</label>
                <input type="text" id="validationBirthday" class="form-control" name="dom" required>
                <div class="invalid-feedback">Tu fecha de nacimiento es necesaria</div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-md-4">
                <label for="validationBirthday">Email</label>
                <input type="email" id="validationBirthday" class="form-control" name="email" required>
                <div class="invalid-feedback">Tu correo es necesario</div>
            </div>
            <div class="mb-3 col-md-4">
                <label for="validationBirthday">Teléfono celular</label>
                <input type="phone" id="validationBirthday" class="form-control" name="tcel" required>
                <div class="invalid-feedback">Numero necesario</div>
            </div>
            <div class="mb-3 col-md-4">
                <label for="validationBirthday">Teléfono de casa</label>
                <input type="phone" id="validationBirthday" class="form-control" name="tcas">
            </div>
        </div>

        <!-- Step 2 -->
        <div class="row">
            <div class="mb-3 col-sm-6">
                <select class="custom-select form-control" name="pais" onchange="cambia_provincia()" required> 
                    <option value="0">Selecciona tu nivel de estudios...</option>
                    <option value="1">Preescolar</option>
                    <option value="2">Primaria</option>
                    <option value="3">Secundaria</option>
                    <option value="4">Bachillerato</option>
                    <option value="5">Licenciatura</option>
                    <option value="6">Maestría</option>
                    <option value="7">Postgrado</option>
                    <option value="8">Idiomas</option>
                    <option value="9">Otros Cursos</option>
                </select>
                <div class="invalid-feedback">Example invalid custom select feedback</div>
            </div>
            
            <div class="mb-3 col-sm-6">
                <select class="custom-select" name="tipoBeca"> 
                    <option value="Selecciona una opción">Selecciona una opción</option>
                </select> 
            </div>
        </div>
        <div class="row" align="center">
            <div class="col-sm-12">
                <input type="submit" class="btn btn-primary" value="Enviar">
            </div>
        </div>
    </div>
</form>
    
      <script>
      var provincias_1=new Array("Preescolar", "Corporativo Universitario México", "Comunidad Hispanoamericano", "Colegio Berriozábal", "Hanzel y Gretel", "Colegio villa de las Flores", "Colegio Benito Juárez", "Záma", "Nobel", "FADU", "Federico Froebel", "Colegio Indonesia", "Grupo Universitario Modelo", "Arcos Tepeyac");
      var provincias_2=new Array("Primaria","Salta", "Comunidad Hispanoamericano", "Corporativo Universitario México", "Colegio Berriozábal", "Colegio Villa de las Flores", "Colegio Benito Juárez", "Záma", "Nobel", "FADU", "Colegio del Bosque", "Colegio Cumbres", "colegio Sor Juana Ines de la Cruz", "Colegio Indonesia", "Grupo Universitario Modelo", "Arcos Tepeyac");
      var provincias_3=new Array("Secundaria", "Universidad Lucerna", "Corporativo Universitario México", "Comunidad Hispanoamericano", "Universidad Europea", "Colegio Villa de las Flores", "CETI", "CIBERNET",  "FADU", "Záma", "Nobel", "Colegio Indonesia", "Grupo Universitario Modelo");
      var provincias_4=new Array("Bachillerato", "Universidad ICEL", "ETAC", "Corporativo Universitario México", "Centro de Estudios Moises Saenz", "Escuela de Tultitlán", "Universidad Ecatepec", "Universidad Lucerna", "Comunidad Hispanoamericano", "Universidad del Valle de Anáhuac", "Universidad Europea", "Latinoamericano Siglo XXI", "CEDCO", "Universidad CNCI", "Nobel", "IMEI", "ZAMA", "Colegio Cervantes Saavedra", "Universidad Tres Culturas", "Grupo Universidad Modelo", "Valladolid", "Epoca", "Centro de Educación Olista", "CITA", "CEUNI", "LYCEU", "UNIVERSO NET", "CIBERNET", "FADU");
      var provincias_5=new Array("Licenciatura", "Universidad ICEL", "UNITEC", "ETAC", "CLAUSTRO MEXICANO", "Corporativo Universitario México", "Escuela de Tultitlán", "Universidad Ecatepec", "Universidad Lucerna", "Universidad del Valle de Anáhuac", "Universidad europea", "Universidad CNCI", "Universidad de las Ciencias Penales", "Vayadolid", "Grupo Universitario Modelo", "IMEI", "Universidad Tres Culturas", "Instituto Mexicano de Educación Integral", "Epoca", "CITA", "CUNI", "Universo NET", "Cibernet", "FADU", "CEDCO");
      var provincias_6=new Array("Maestria", "Universidad Ecatepec", "UNITEC", "ETAC", "Universidad Lucerna", "Universidad Europea", "Universidad CNDI", "Corporativo Universitario México", "Universidad de Ciencias Penales", "CUNI");
      var provincias_7=new Array("PostGrado", "Universidad Ecatepec", "Claustro Mexicano", "Universidad de las Ciencias Panales", "Corporativo Universitario México");
      var provincias_8=new Array("Idiomas", "Harmon Hall", "Alianza Francesa", "Crambriedge Lexicon School", "LYCEUM", "Red Innovacion y Aprendizaje (computacion, empleabilidad, roboticas y emprendimiento)");
      var provincias_9=new Array("Otros Cursos", "Escuela Tecnica de Belleza", "CEDVA Coacalco Grastonomia-Estilismo", "LYCEUM-Capacitacion para el trabajo", "Universo NET-Cursos IES, EXACER-COLBACHy curso COMIPENS","CETI-Especialidad tecnica en contabilidad, administracion, puericultura e informatica","CONAMAT Cursos de Ingreso");
    
      var todasProvincias = [
        [],
        provincias_1,
        provincias_2,
        provincias_3,
        provincias_4,
        provincias_5,
        provincias_6,
		provincias_7,
		provincias_8,
		provincias_9
      ];
    
      function cambia_provincia(){ 
           //tomo el valor del select del pais elegido 
           var pais 
           pais = document.f1.pais[document.f1.pais.selectedIndex].value 
           //miro a ver si el pais está definido 
           if (pais != 0) { 
              //si estaba definido, entonces coloco las opciones de la tipoBeca correspondiente. 
              //selecciono el array de tipoBeca adecuado 
              mis_provincias=todasProvincias[pais]
              //calculo el numero de provincias 
              num_provincias = mis_provincias.length 
              //marco el número de provincias en el select 
              document.f1.tipoBeca.length = num_provincias 
              //para cada tipoBeca del array, la introduzco en el select 
              for(i=0;i<num_provincias;i++){ 
                 document.f1.tipoBeca.options[i].value=mis_provincias[i] 
                 document.f1.tipoBeca.options[i].text=mis_provincias[i] 
              }	
           }else{ 
              //si no había tipoBeca seleccionada, elimino las provincias del select 
              document.f1.tipoBeca.length = 1 
              //coloco un guión en la única opción que he dejado 
              document.f1.tipoBeca.options[0].value = "-" 
              document.f1.tipoBeca.options[0].text = "Selecciona una opción" 
           } 
           //marco como seleccionada la opción primera de tipoBeca 
           document.f1.tipoBeca.options[0].selected = true 
    }
    
      </script>

</body>
</html>