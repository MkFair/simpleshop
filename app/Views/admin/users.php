
<div class="col-lg-6">
	<h5 class="card-title">Список пользователей</h5>
    <table class="table table-hover table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Email</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

<?php 
foreach ($users as $user) { 
?>
    <tr>
      <th scope="row"> <?=$user->id; ?> </th>
      <td><?=$user->email; ?></td>
      <td class="text-center">
        <a href="/admin/users/<?=$profile?>/<?=$user->id; ?>">Просмотр</a>
      </td>
    </tr>

<?php
}
?>


  </tbody>
</table>
</div>
