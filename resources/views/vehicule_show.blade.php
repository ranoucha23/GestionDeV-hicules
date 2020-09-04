
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Véhicules</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>
        #customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
.button1 {background-color: #FA8072;}
.button2 {background-color: #008CBA;}
        </style>
    </head>
    <body>
    <ul>
  
  <li><a href="/">Accieul</a></li>
  <li><a href="vehicule_show">Vehicules</a></li>
  <li><a href="marque_show">Marques</a></li>
  <li><a href="modele_show">Modeles</a></li>
  
</ul>
        <div class="flex-center position-ref full-height">
         <h3><a href="vehicule_create">Ajouter Véhicule</a></h3></br>
          {{session('msg')}}
         </br>
         <table id="customers">
           <tr>
             <td>ID</td>
             <td>Nom</td>
             <td>Marque_id</td>
             <td>Modéle_id</td>
             <td>Action</td>
        
           </tr>
           @foreach($vehiculeArr as $vehicule)
           <tr>
             <td>{{$vehicule->id}}</td>
             <td>{{$vehicule->nom}}</td>
             <td>{{$vehicule->marques_id}}</td>
             <td>{{$vehicule->modeles_id}}</td>
             <td><button  class="button button1"><a href="vehicule_delete/{{$vehicule->id}}">Supprimer</a> <button  class="button button2">  <a href="vehicule_edit/{{$vehicule->id}}">Modifier</a></td>
           </tr>
           @endforeach
         </table>
        </div>



    </body>
</html>
