<?php
 if(is_front_page()) {
     dynamic_sidebar('sidebar-home-content');
 } else {
     dynamic_sidebar('sidebar-primary');
 }



