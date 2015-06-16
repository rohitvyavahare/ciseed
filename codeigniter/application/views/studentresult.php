


<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url("/assets/CSS/bootstrap.css");?>">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("/assets/JS/saveStudents.js");?>" ></script>
<title>Sokikom></title>
</head>
<body>

<h3>My List</h3>

<table class="table">
      <?php foreach ($data as $item):?>
      <tr>
        <td><?php echo $item->id;?></td>
        <td><?php echo $item->user_name;?></td>
        <td><?php echo $item->password;?></td>       
      </tr>
      <?php endforeach;?>
</table>

<button class="btn btn-default" type="submit" onclick="insertData()">Insert</button>

</body>
</html>
