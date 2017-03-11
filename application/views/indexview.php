<div class="row" id="content">
    <div class="col" id="content-box">
        <h5>Laulattaako? <i class="fa fa-music" aria-hidden="true"> </i> </h5>
        <div class="main">

        <?php if($groups) { 
            foreach($groups as $group) {
                echo $group['name'].'<br>';
                foreach($group['songs'] as $song) { ?>
                <a href="index.php/song/<?php echo $song['id']; ?>"><?php echo $song['id'].' '.$song['songname']; ?></a><br>
               <?php }
            }
            
        }; ?>
            
        </div>
    </div>
</div>
