<?php
class left_meny extends CWidget {
	public function run()
	{
    	echo '<h3 class="left_m_title">НАШІ ПОСЛУГИ</h3>';
    		echo '<ul class="left_menu">';
    			foreach(Service::model()->findAll(array('condition'=>'id <>9 AND id<>10 AND id<>11 AND id<>12 AND id<>13 AND id<>14 AND id<>15')) as $m){    				echo '<li>';
    					echo '<a href="/service/'.$m->id.'" style="">'.$m->title.'</a>';
    				echo '</li>';    			}
    			if(!Yii::app()->user->isGuest) echo '<li><a href="/service/create"><font color="green">Додати</font></a></li>';
    		echo '</ul>';
	}

}

