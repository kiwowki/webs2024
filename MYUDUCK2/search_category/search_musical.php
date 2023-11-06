<?php
// include "../connect/connect.php";

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// if (isset($_GET['searchKeyword']) && isset($_GET['searchOption'])) {
//     $searchKeyword = $_GET['searchKeyword'];
//     $searchOption = $_GET['searchOption'];
    
//     // 검색어를 모두 소문자로 변환하고 띄어쓰기 제거하기
//     $searchKeyword = strtolower(str_replace(' ', '', $searchKeyword));

//     $sql = "SELECT muNameKo FROM musical WHERE REPLACE(LOWER(muNameKo), ' ', '') LIKE '%$searchKeyword' 
//             OR REPLACE(LOWER(muNameEn), ' ', '') LIKE '%$searchKeyword'";

//     if ($searchOption === 'musical' || $searchOption === 'all') {
//         $sql = "SELECT muNameKo, muNameEn FROM musical WHERE REPLACE(LOWER(muNameKo), ' ', '') LIKE '%$searchKeyword' 
//                 OR REPLACE(LOWER(muNameEn), ' ', '') LIKE '%$searchKeyword'";

//         $result = $connect->query($sql);

//         if ($result) {
//             $results = array();
//             while ($row = $result->fetch_assoc()) {
//                 $results[] = $row;
//             }
//             echo json_encode($results);
//             var_dump($results);
//         } else {
//             echo "검색 결과가 없습니다.";
//         }
//     }
//     $connect->close();
// } else {
//     echo "검색어 또는 검색 옵션을 제공해야 합니다.";
// }
?>