<?php
    use App\Views\Lib\Page\Pages;
    $fg = new Pages();
    $i_truoc = isset($i) ? $i : 0;
    $i_sau = isset($i) ? $i : 1;
?>
<nav aria-label="Page navigation example">
    <ul class="pagination" style="float: right; margin: 10px 20px;">
        {{$fg->trang_truoc($i_truoc,$table,$tieuDe,$title,$duong_dan)}}
        {{$fg->phan_trang($i,$table,$tieuDe,$title,$duong_dan)}}
        {{$fg->trang_sau($i_sau,$table,$tieuDe,$title,$duong_dan)}}
    </ul>
</nav>