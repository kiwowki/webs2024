<?php
include "../connect/connect.php";

$jsonData = '[
    {
        "muNameKo": "오페라의 유령",
        "muNameEn": "The Phantom of the Opera",
        "muPlace": "샤롯데씨어터",
        "muDate": "2023"
    },
    {
        "muNameKo": "드라큘라",
        "muNameEn": "Dracula",
        "muPlace": "샤롯데씨어터",
        "muDate": "2023"
    },
    {
        "muNameKo": "맥베스",
        "muNameEn": "MacBeth",
        "muPlace": "세종문화회관",
        "muDate": "2023"
    },
    {
        "muNameKo": "레미제라블",
        "muNameEn": "Les Misérables",
        "muPlace": "블루스퀘어",
        "muDate": "2023"
    },
    {
        "muNameKo": "레베카",
        "muNameEn": "Rebecca",
        "muPlace": "블루스퀘어",
        "muDate": "2023"
    },
    {
        "muNameKo": "일테로네",
        "muNameEn": "IL TENORE",
        "muPlace": "예술의전당",
        "muDate": "2023"
    },
    {
        "muNameKo": "몬테크리스토",
        "muNameEn": "Montecristo",
        "muPlace": "충무아트센터",
        "muDate": "2023"
    },
    {
        "muNameKo": "신비아파트 〈붉은 눈의 저주〉",
        "muPlace": "유니버설아트센터",
        "muDate": "2023"
    },
    {
        "muNameKo": "시스터 액트",
        "muNameEn": "Sister Act",
        "muPlace": "디큐브 링크아트센터",
        "muDate": "2023"
    },
    {
        "muNameKo": "삼총사",
        "muNameEn": "The Three Musketeers",
        "muPlace": "한전아트센터",
        "muDate": "2023"
    }
]';

$data = json_decode($jsonData, true);

foreach ($data as $item) {
    $muNameKo = $item['muNameKo'];
    $muNameEn = isset($item['muNameEn']) ? $item['muNameEn'] : '';
    $muPlace = $item['muPlace'];
    $muDate = $item['muDate'];

    // 이미지 파일 경로 생성
    $imageFileName = 'ca_mu_img' . (array_search($item, $data) + 1) . '.jpg';

    // 이미지 파일 경로 생성
    $imagePath = '../assets/img/musical/' . $imageFileName;

    // 이미지 파일 경로가 실제로 존재하는지 확인
    if (file_exists($imagePath)) {
        $sql = "INSERT INTO musical (muNameKo, muNameEn, muPlace, muDate, muImg) VALUES ('$muNameKo', '$muNameEn', '$muPlace', '$muDate', '$imagePath') ON DUPLICATE KEY UPDATE muNameKo = VALUES(muNameKo), muNameEn = VALUES(muNameEn), muPlace = VALUES(muPlace), muDate = VALUES(muDate), muImg = VALUES(muImg);";
    } else {
        echo "오류: 이미지 파일이 존재하지 않습니다. 경로를 확인하세요.";
    }

    // $sql = "INSERT INTO musical (muNameKo, muNameEn, muPlace, muDate, muImg) VALUES ('$muNameKo', '$muNameEn', '$muPlace', '$muDate', '$imageFileName') ON DUPLICATE KEY UPDATE muNameKo = VALUES(muNameKo), muNameEn = VALUES(muNameEn), muPlace = VALUES(muPlace), muDate = VALUES(muDate), muImg = VALUES(muImg);";

    if ($connect->query($sql) === TRUE) {
        echo "데이터가 성공적으로 입력되었습니다.<br>";
    } else {
        echo "오류: " . $sql . "<br>" . $connect->error;
    }
}

$connect->close();
