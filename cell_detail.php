<?php
function cell_subject($item, $owner) {
    $cell = '
        <div class="col" style="margin-bottom: 20px; border-radius:3px; border: 2px solid rgba(201, 197, 190, 0.337); padding: 10px; background-color: rgba(116, 83, 7, 0.575);">
            <h3 style="color: rgb(184, 68, 26);">' . $item['subjectName']. '</h3>
            <div class="card shadow-sm">
                <img src="' .$item['image'] .'" alt="" style="width:100%; height:300px">
                <div class="card-body">
                    <h4 style="color: black; margin-top: 8px; text-decoration: none; font-weight: 600;">Mô Tả</h4>
                    <p class="card-text" style="color: black;">' .$item['subjectDescribe'] . '</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">';
    if ($owner) {
        $cell .= '
            <button type="button" class="btn btn-sm" style="background-color: rgb(213, 198, 101); border-radius: 3px;" onclick="delete_btn(\''.$item['subjectCode'].'\')>Xóa</button>
            <button type="button" class="btn btn-sm" style="background-color: rgb(36, 36, 153); border-radius: 3px;" onclick="update_btn(\''.$item['subjectCode'].'\')>Sửa</button>';
    }

    $cell .= '
    <button type="button" class="btn btn-sm" style="background-color: rgb(32, 115, 40); border-radius: 3px;">
    <a href="' . $item['file'] . '">Tải tài liệu</a>
    </button>
    
    </div>
</div>
</div>
</div>';

    return $cell;
}

