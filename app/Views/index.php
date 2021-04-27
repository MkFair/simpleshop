
 <div class="row">
      <div class="col-lg-12 mt-4">
        
        <div class="row" >
        <div class="col-lg-3 ">
                <div class="card">
                  <div class="card-body" >


          <h6 class=""> Категории</h6>
         <a href="/"> Все</a> <br>

            <?php if( $types ):?>
                <?php foreach( $types as $type ):?>
                  <a href="?type=<?=$type["id"]?>"  > <?=$type["name"]?> </a> <br>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        </div>
        </div>


        <div class="col-lg-9">

         <div class="row">
             <?php if( $shop_list ):?>
            <?php foreach( $shop_list as $shop ):?>
                
              <div class="col-sm-6 mb-3">
                <div class="card">
                  <div class="card-body">
                    <p class="card-text"><?=$shop->url?></p>
                    <p class="card-text"><?=$shop->description?></p> 
                    <p><a href="/show/<?=$shop->id?>" class="btn btn-outline-primary">Перейти</a></p>
                  </div>
                </div>
              </div>
             
                <?php endforeach; ?>
            <?php endif; ?>

             
            </div>











        
        </div>
        </div>
          
      </div>
</div>
