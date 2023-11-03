<?php
include "../connect/connect.php"; // 데이터베이스 연결 설정

// 사용자 입력 받기 (예시)
$musicals = [
    [
        "muNameKo" => "오페라의 유령",
        "muNameEn" => "The Phantom of the Opera",
        "muPlace" => "샤롯데씨어터",
        "muDate" => "2023"
    ],
    [
        "muNameKo" => "드라큘라",
        "muNameEn" => "Dracula",
        "muPlace" => "샤롯데씨어터",
        "muDate" => "2023"
    ],
    [
        "muNameKo" => "맥베스",
        "muNameEn" => "MacBeth",
        "muPlace" => "세종문화회관",
        "muDate" => "2023"
    ],
    [
        "muNameKo" => "레미제라블",
        "muNameEn" => "Les Misérables",   
        "muPlace" => "블루스퀘어",
        "muDate" => "2023"
    ],
    [
        "muNameKo" => "레베카",
        "muNameEn" => "Rebecca",
        "muPlace" => "블루스퀘어",
        "muDate" => "2023"
    ],
    [
        "muNameKo" => "일테로네",
        "muNameEn" => "IL TENORE",
        "muPlace" => "예술의전당",
        "muDate" => "2023"
    ],
    [
        "muNameKo" => "몬테크리스토",
        "muNameEn" => "Montecristo",
        "muPlace" => "충무아트센터",
        "muDate" => "2023"
    ],
    [
        "muNameKo" => "신비아파트 〈붉은 눈의 저주〉",
        "muPlace" => "유니버설아트센터",
        "muDate" => "2023"
    ],
    [
        "muNameKo" => "시스터 액트",
        "muNameEn" => "Sister Act",
        "muPlace" => "디큐브 링크아트센터",
        "muDate" => "2023"
    ],
    [
        "muNameKo" => "삼총사",
        "muNameEn" => "The Three Musketeers",
        "muPlace" => "한전아트센터",
        "muDate" => "2023"
    ]
];

// JSON 파일 생성
$jsonData = json_encode($musicals, JSON_PRETTY_PRINT);
$jsonFilePath = "../json/mu_data.json";

if (file_put_contents($jsonFilePath, $jsonData) !== false) {
    echo "JSON 파일이 생성되었습니다.<br>";
} else {
    echo "JSON 파일 생성에 실패했습니다.<br>";
};

// 데이터베이스에 데이터 추가
foreach ($musicals as $musical) {
    $muNameKo = $musical['muNameKo'];
    $muNameEn = isset($musical['muNameEn']) ? $musical['muNameEn'] : '';
    $muPlace = $musical['muPlace'];
    $muDate = $musical['muDate'];

    // 이미지 파일 경로 생성
    $imageFileName = 'ca_mu_img' . (array_search($musical, $musicals) + 1) . '.jpg';
    $imagePath = '../assets/img/musical/' . $imageFileName;

    $sql = "INSERT INTO musical (muNameKo, muNameEn, muPlace, muDate, muImg) VALUES ('$muNameKo', '$muNameEn', '$muPlace', '$muDate', '$imagePath') ON DUPLICATE KEY UPDATE muNameKo = VALUES(muNameKo), muNameEn = VALUES(muNameEn), muPlace = VALUES(muPlace), muDate = VALUES(muDate), muImg = VALUES(muImg);";

    if ($connect->query($sql) === TRUE) {
        echo "데이터가 성공적으로 입력되었습니다.<br>";
    } else {
        echo "오류: " . $sql . "<br>" . $connect->error;
    }
}

$connect->close();
?>
