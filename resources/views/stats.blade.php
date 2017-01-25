<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <!-- Begin page content -->
  <div class="container">
    <div>
      <h1>Stats</h1>
    </div>
   <table class="table table-striped">
     <caption>clicks stats</caption>
     <thead>
       <tr>
         <th>trackind ID</th>
         <th># clicks</th>
       </tr>
     </thead>
     <tbody>
       @foreach ($stats as $link)
       <tr>
         <td>{{$link->tracking_id}}</td>
         <td>{{$link->nb_clicks}}</td>
       </tr>
       @endforeach
     </tbody>
   </table>
  </div>
</body>
</html>