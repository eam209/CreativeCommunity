<main>
    <div class="welcome">
    <h1>Welcome</h1><br>

    <?php
      if($posts_tbl){
      foreach ($posts_tbl->result() as $post) { ?>
        
        <div class="post">
          <h2><a href="<?= $post->id_post; ?>"><?= $post->titulo ?></a></h2>
          <p><?= $post->contenido ?></p>
          <div class="post-foot">
            <h4 class="autor"><?= $post->autor ?></h4>
            <span class="date"><?= $post->fecha ?></span>
          </div>

        </div>
    <?php 

      }
      }
      else{
        echo "<h1>Error en la aplicaion</h1>";
      }

    ?>
    </div>
</main>