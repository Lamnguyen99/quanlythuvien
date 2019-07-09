<?php
class HocphpController extends Controller {
    public function view($title, $id)
    {
        echo 'Bạn đang xem bài viết '.$title.' có ID là :'.$id;
    }
}