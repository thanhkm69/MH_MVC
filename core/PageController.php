<?php 
class PageController {
    function renderView($view, $data = [], $title = "") {
        extract($data);

        require "./app/Views/layouts/header.php";
        require "./app/Views/" . strtolower($view) . ".php"; // tên file view đồng bộ chữ thường
        require "./app/Views/layouts/footer.php";
    }
}
