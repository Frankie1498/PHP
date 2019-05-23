<?php
    require_once 'connect.php';
    //Tổng số phần tử
    $totalItems         = $database->totalItems("SELECT COUNT(`id`) AS totalItems FROM `user`");
    //Tổng số phần tử trên 1 trang
    $totalItemsPerPage  = 2;
    //Trang hiện tại
    $currentPage        = (isset($_GET['page']))? $_GET['page'] : 1;
    //Tổng số trang
    $totalPages         = ceil($totalItems/$totalItemsPerPage);
    // Số trang hiển thị
    $pageRange			= 3;
    //Vị trí
    $position           = ($currentPage - 1)*$totalItemsPerPage;

    // Pagination
    $start  = '<li>Start</li>';
    $prev   = '<li>Previous</li>';
    if ($currentPage>1){
        $start   = '<li><a href="?page=1">Start</a></li>';
        $prev   = '<li><a href="?page='.($currentPage - 1).'">Previous</a></li>';
    }
    $next  = '<li>Next</li>';
    $end   = '<li>End</li>';
    if ($currentPage < $totalPages){
        $next   = '<li><a href="?page='.($currentPage + 1).'">Next</a></li>';
        $end    = '<li><a href="?page='.$totalPages.'">End</a></li>';
    }
    if ($currentPage == 1){
        $listPages[] = '<li class="active">1</li>';
        $listPages[] = '<li><a href="?page='.($currentPage + 1).'">'.($currentPage+1).'</a></li>';
        $listPages[] = '<li><a href="?page='.($currentPage + 2).'">'.($currentPage+2).'</a></li>';
    }elseif ($currentPage == $totalPages){
        $listPages[] = '<li><a href="?page='.($currentPage - 2).'">'.($currentPage-2).'</a></li>';
        $listPages[] = '<li><a href="?page='.($currentPage - 1).'">'.($currentPage-1).'</a></li>';
        $listPages[] = '<li class="active">'.$currentPage.'</li>';
    }else{
        $listPages[] = '<li><a href="?page='.($currentPage - 1).'">'.($currentPage-1).'</a></li>';
        $listPages[] = '<li class="active">'.$currentPage.'</li>';
        $listPages[] = '<li><a href="?page='.($currentPage + 1).'">'.($currentPage + 1).'</a></li>';
    }
    $listPages = implode(" ",$listPages);
/* Pages 		4 : 2 3 4 5
    if($pageRange >= $totalPages){
        $start = 1;
        $end	= $totalPages;
    }else{
        if($currentPage==1){
            $start 	= 1;
            $end	= $pageRange;
        }else if($currentPage==$totalPages){
            $start 	= $totalPages-$pageRange+1;
            $end	= $totalPages;
        }else{
            $start 	= max(array($currentPage-($pageRange-1)/2, 1));
            $end 	= min(array($currentPage+($pageRange-1)/2, $totalPages));
        }
    }
        $listPage ='';
    for($i = $start; $i <= $end; $i++) {
        if($i == $currentPage){
            $listPage	.= '<li class="active">'.$i.'</li>';
        } else{
            $listPage	.= '<li><a href="?page='.$i.'">'.$i.'</a></li>';
        }
}*/

    $paginationHTML = '<ul class="pagination">'.$start.$prev.$listPages.$next.$end.'</ul>';



    $query  = "SELECT `id`, `username`, CONCAT(`firstname`,' ',`lastname`) AS fullname, `email`, `birthday`, `status`, `ordering`
               FROM `user` LIMIT ".$position.", ".$totalItemsPerPage." ";
    $res    = $database->query($query);
    $list   = $database->listRecord($res);
    /*echo '<pre>';
    print_r($list);
    echo '</pre>';*/

    if (!empty($list)){
        $xhtml = '';
        $i = 0;
        foreach ($list as $key => $item){
            $row = ($i % 2)? 'odd' : 'even';
            $status = ($item['status'] == 1)?'Active' : 'Inactive';
            $xhtml .='<div class="row '.$row.'">
                        <p class="id">'.$item['id'].'</p>
                        <p class="username">'.$item['username'].'</p>
                        <p class="fullname">'.$item['fullname'].'</p>
                        <p class="email">'.$item['email'].'</p>
                        <p class="birthday">'.date("d-m-Y",strtotime($item['birthday'])).'</p>
                        <p class="status">'.$status.'</p>
                        <p class="ordering">'.$item['ordering'].'</p>
                    </div>';
        }

    }else{
        $xhtml = 'Dữ liệu đang cập nhật';
    }


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Manage User</title>
</head>
<body>
	<div id="wrapper">
		<div class="title">Manage User</div>
		<div class="list">
			<div class="row head">
				<p class="id">ID</p>
				<p class="username">UserName</p>
				<p class="fullname">Full Name</p>
				<p class="email">Email</p>
				<p class="birthday">Birthday</p>
				<p class="status">Status</p>
				<p class="ordering">Ordering</p>
			</div>
			<?php echo $xhtml;?>
		</div>
		<div id="pagination">

			<?php echo $paginationHTML;?>
		</div>
	</div>
</body>
</html>
