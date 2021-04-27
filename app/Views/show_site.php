<?=$site->url?>
<?=$site->description?>

<form method=post>
    <input type=number step=1 min=1 value=1 name="count_coupons">
    <input type=hidden name="site_id" value="<?=$site->id?>">
    <button class="btn btn-primary">
        Купить
    </button>
</form>
