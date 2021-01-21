<div class="item1">
<?php
    echo '<span class="img">'.CHtml::link(CHtml::image($data->main_photo, $data->title,array('style'=>'max-width:200px;')),array('view', 'id'=>$data->id)).'</span>';
    echo '<span class="title">'.$data->title.'</span>';
?>
</div>