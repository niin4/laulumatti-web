<div class="row" id="content">
    <div class="col" id="content-box">
        
        <?php if($results){ ?>
        <p>Hakusi "<?php echo $keyword; ?>" palautti seuraavat tulokset:</p>
            <?php 
                foreach ($results as $row){ ?>
                    <a href="<?php echo $row['id']; ?>">
                    <table class="table searchTable">
                        <thead>
                            <tr>
                                <th>#<?php echo $row['id']." ".$row['songname']; ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th>
                                <p><?php echo nl2br($row['lyrics']); ?></p>
                            </th>
                            </tr>
                        </tbody>
                    </table>
                    </a>

               <?php } ?>

          <?php } else { ?>
        
        <p><?php echo $error; ?></p>
        
        <?php }; ?>      
        
    </div>
</div>
