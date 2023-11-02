<?php
include "../connect/connect.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);
if (isset($_GET['searchKeyword']) && isset($_GET['searchOption'])) {
    $searchKeyword = $_GET['searchKeyword']; // 검색어
    $searchOption = $_GET['searchOption'];   // 검색 옵션 (예: "musical")
    echo "$searchKeyword";

    $sql = "SELECT muNameKo FROM musical WHERE muNameKo LIKE '%$searchKeyword'";

    if ($searchOption === 'musical') {
        $sql = "SELECT muNameKo FROM musical WHERE muNameKo LIKE '%$searchKeyword'";

        $result = $connect->query($sql);

        if ($result) {
            $results = array();
            while ($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
            echo json_encode($results);
            var_dump($results);
        } else {
            echo "검색 결과가 없습니다.";
        }
    }
    $connect->close();
} else {
    echo "검색어 또는 검색 옵션을 제공해야 합니다.";
}
?>