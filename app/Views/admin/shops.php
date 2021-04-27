
<div class="col-lg-6">
    <div class="card">
	<h5 class="card-header">Список магазинов</h5>
    <div class="card-body">
        <label>Поиск по url</label>
        <form method=get>
            <input type=text name="search"><button class="btn btn-primary ">Поиск</button>
        </form>
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
</div>
</div>
