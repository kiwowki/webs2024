<?php
include "../connect/connect.php";

$jsonData = '[
    {
        "acName": "전동석",
        "acOccupation": "뮤지컬 배우",
        "acPerform": "드라큘라, 브랜든 리 심포니 OST 콘서트, 오페라의 유령"
    },
    {
        "acName": "윤은채",
        "acOccupation": "뮤지컬 배우, 연극 배우",
        "acPerform": "은밀하게 위대하게, 챠이카, 레베카"
    },
    {
        "acName": "전동석",
        "acOccupation": "뮤지컬 배우",
        "acPerform": "드라큘라, 브랜든 리 심포니 OST 콘서트, 오페라의 유령"
    },
    {
        "acName": "전동석",
        "acOccupation": "뮤지컬 배우",
        "acPerform": "드라큘라, 브랜든 리 심포니 OST 콘서트, 오페라의 유령"
    },
    {
        "acName": "전동석",
        "acOccupation": "뮤지컬 배우",
        "acPerform": "드라큘라, 브랜든 리 심포니 OST 콘서트, 오페라의 유령"
    },
    {
        "acName": "전동석",
        "acOccupation": "뮤지컬 배우",
        "acPerform": "드라큘라, 브랜든 리 심포니 OST 콘서트, 오페라의 유령"
    }
]';

$data = json_decode($jsonData, true);

foreach ($data as $item) {
    $acName = $item['acName'];
    $acOccupation = $item['acOccupation'];
    $acPerform = $item['acPerform'];

    $sql = "INSERT INTO actor (acName, acOccupation, acPerform) VALUES ('$acName', '$acOccupation', '$acPerform') ON DUPLICATE KEY UPDATE acName = VALUES(acName), acOccupation = VALUES(acOccupation), acPerform = VALUES(acPerform);";

    if ($connect->query($sql) === TRUE) {
        echo "데이터가 성공적으로 입력되었습니다.<br>";
    } else {
        echo "오류: " . $sql . "<br>" . $connect->error;
    }
}

$connect->close();
?>