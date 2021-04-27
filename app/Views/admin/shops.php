
<div class="col-lg-6">
	<h5 class="card-title">Список магазинов</h5>
    <table class="table table-hover table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Url</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

<?php 
if($shops)
foreach ($shops as $shop) { 
?>
    <tr>
      <th scope="row"> <?=$shop->id; ?> </th>
      <td><?=$shop->url; ?></td>
      <td class="text-center">
        <a href="/admin/shops/show/<?=$shop->id; ?>">Просмотр</a>
      </td>
    </tr>

<?php
}
?>


  </tbody>
</table>
</div>
