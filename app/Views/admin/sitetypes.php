<form action="/admin/sitetypes/add" method=post>
    <input type="text" name="newtype">
    <button>Сохранить</button>
</form>

<?php 
if($types){
    foreach($types as $type){
        echo" {$type["name"]} <a href='/admin/sitetypes/delete?id={$type["id"]}'>Удалить</a><br>";
    }
}
?>
