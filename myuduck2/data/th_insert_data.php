<?php
include "../connect/connect.php";

$jsonData = '[
    {
        "thName": "샤롯데씨어터",
        "thAddress": "서울특별시 송파구 올림픽로 240",
        "thCall": "1644-0078",
        "thHomepage": "https://www.charlottetheater.co.kr/",
        "thTransport": "지하철로 오시는 길\n2호선, 8호선 잠실역 3번출구로 나오셔서, 롯데호텔 정문을 지나 5m전방 (도보로 5분소요)\n\n버스로 오시는 길\n잠실역 4번출구/ 잠실 롯데 백화점앞지선버스 2225,3217,3312,3313,3314,3315,3414,3415\n간선버스 301, 360, 632, 730\n공항버스 4,600,606\n\n잠실역 5번출구/ 잠실 5단지 앞 (롯데백화점 맞은편)\n지선버스 2225,3217,3312,3313,3314,3315,3411,3412,3414,3415\n간선버스 301,360,362,730\n공항버스 4,600,606\n\n잠실역 6번출구/ 잠실 5단지 앞지선버스\n2225,2311,2412,3215,3312\n간선버스 302,303\n광역버스 9202,9203,9403\n\n잠실역 7번출구/ 롯데캐슬 앞지선\n버스 2225,2412,2315,2316,3312,3411,3412,3413\n간선버스 302.303.361\n광역버스 9202,9203,9403",
        "thPerform": [
            "뮤지컬1",
            "뮤지컬2",
            "뮤지컬3"
        ]
    },
    {
        "thName": "뚱땅씨어터",
        "thAddress": "서울특별시 송파구 올림픽로 240",
        "thCall": "1644-0078",
        "thHomepage": "https://www.charlottetheater.co.kr/",
        "thTransport": "지하철로 오시는 길\n2호선, 8호선 잠실역 3번출구로 나오셔서, 롯데호텔 정문을 지나 5m전방 (도보로 5분소요)\n\n버스로 오시는 길\n잠실역 4번출구/ 잠실 롯데 백화점앞지선버스 2225,3217,3312,3313,3314,3315,3414,3415\n간선버스 301, 360, 632, 730\n공항버스 4,600,606\n\n잠실역 5번출구/ 잠실 5단지 앞 (롯데백화점 맞은편)\n지선버스 2225,3217,3312,3313,3314,3315,3411,3412,3414,3415\n간선버스 301,360,362,730\n공항버스 4,600,606\n\n잠실역 6번출구/ 잠실 5단지 앞지선버스\n2225,2311,2412,3215,3312\n간선버스 302,303\n광역버스 9202,9203,9403\n\n잠실역 7번출구/ 롯데캐슬 앞지선\n버스 2225,2412,2315,2316,3312,3411,3412,3413\n간선버스 302.303.361\n광역버스 9202,9203,9403", 
        "thPerform": [
            "뮤지컬4",
            "뮤지컬5",
            "뮤지컬6"
        ]
    }
]';

$data = json_decode($jsonData, true);

foreach ($data as $item) {
    $thName = $item['thName'];
    $thAddress = $item['thAddress'];
    $thCall = $item['thCall'];
    $thHomepage = $item['thHomepage'];
    $thTransport = $item['thTransport'];
    $thPerform = implode(", ", $item['thPerform']); // 배열을 쉼표로 구분된 문자열로 변환

    $sql = "INSERT INTO theater (thName, thAddress, thCall, thHomepage, thTransport, thPerform) VALUES ('$thName', '$thAddress', '$thCall', '$thHomepage', '$thTransport', '$thPerform')";

    if ($connect->query($sql) === TRUE) {
        echo "데이터가 성공적으로 입력되었습니다.<br>";
    } else {
        echo "오류: " . $sql . "<br>" . $connect->error;
    }
}

$connect->close();