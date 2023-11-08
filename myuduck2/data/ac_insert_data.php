<?php
include "../connect/connect.php";

$jsonData = '[
    {
        "acNameKo": "조승우",
        "acNameEn": "Cho Seung Woo",
        "acOccupation": "뮤지컬 배우",
        "acDOB": "1980.03.28",
        "acPerform": [
            {
                "acPerformName": "오페라의 유령",
                "acPerformDate": "2023.07.21 ~ 2023.11.19",
                "acPerformPlace": "샤롯데씨어터",
                "acPerformRole": "오페라의 유령 역"
            },
            {
                "acPerformName": "헤드윅",
                "acPerformDate": "2021.07.30 ~ 2021.10.31",
                "acPerformPlace": "충무아트센터",
                "acPerformRole": "헤드윅 역"
            },
            {
                "acPerformName": "맨 오브 라만차",
                "acPerformDate": "2021.02.02 ~ 2021.03.01",
                "acPerformPlace": "샤롯데씨어터",
                "acPerformRole": "세르반테스 / 돈키호테 역"
            }
        ]
    },
    {
        "acNameKo": "최재림",
        "acNameEn": "Choi Jae Rim",
        "acOccupation": "뮤지컬 배우",
        "acDOB": "1985.04.29",
        "acPerform": [
            {
                "acPerformName": "레미제라블",
                "acPerformDate": "2023.11.30 ~ 2024.03.10",
                "acPerformPlace": "블루스퀘어",
                "acPerformRole": "장발장 역"
            },
            {
                "acPerformName": "오페라의 유령",
                "acPerformDate": "2023.10.17 ~ 2023.10.18",
                "acPerformPlace": "샤롯데씨어터",
                "acPerformRole": "오페라의 유령 역"
            },
            {
                "acPerformName": "킹키부츠",
                "acPerformDate": "2022.07.20 ~ 2022.10.23",
                "acPerformPlace": "충무아트센터 대극장",
                "acPerformRole": "롤라 역"
            }
        ]
    },
    {
        "acNameKo": "전동석",
        "acNameEn": "Jeon Dong Suk",
        "acOccupation": "뮤지컬 배우",
        "acDOB": "1988.02.06",
        "acPerform": [
            {
                "acPerformName": "드라큘라",
                "acPerformDate": "2023.12.06 ~ 2023.03.03",
                "acPerformPlace": "샤롯데씨어터",
                "acPerformRole": "드라큘라 역"
            },
            {
                "acPerformName": "오페라의 유령",
                "acPerformDate": "2023.07.21 ~ 2023.11.19",
                "acPerformPlace": "샤롯데씨어터",
                "acPerformRole": "오페라의 유령 역"
            },
            {
                "acPerformName": "지킬 앤 하이드",
                "acPerformDate": "2021.10.19 ~ 2022.05.08",
                "acPerformPlace": "샤롯데씨어터",
                "acPerformRole": "지킬/하이드 역"
            }
        ]
    },
    {
        "acNameKo": "김민아",
        "acNameEn": "Kim Mina",
        "acOccupation": "뮤지컬 배우",
        "acDOB": "1997.11.03",
        "acPerform": [
            {
                "acPerformName": "신비아파트 〈붉은 눈의 저주〉",
                "acPerformDate": "2023.12.23 ~ 2024.01.07",
                "acPerformPlace": "유니버설아트센터",
                "acPerformRole": "구하리 역"
            },
            {
                "acPerformName": "시크릿쥬쥬 별의여신 시즌3 <마지막 콘서트>",
                "acPerformDate": "2022.08.20 ~ 2022.08.28",
                "acPerformPlace": "이화여자대학교 삼성홀",
                "acPerformRole": "신디 역"
            },
            {
                "acPerformName": "아이스크림 왕국의 뽀로로와 친구들",
                "acPerformDate": "2021.10.02 ~ 2021.10.31",
                "acPerformPlace": "유니버설아트센터",
                "acPerformRole": "아이스크림-여왕 역"
            }
        ]
    },
    {
        "acNameKo": "김준수 ",
        "acNameEn": "Kim Junsu",
        "acOccupation": "가수, 뮤지컬배우",
        "acDOB": "1987.01.01",
        "acPerform": [
            {
                "acPerformName": "드라큘라",
                "acPerformDate": "2023.12.06 ~ 2024.03.03",
                "acPerformPlace": "샤롯데씨어터",
                "acPerformRole": "드라큘라 역"
            },
            {
                "acPerformName": "데스노트",
                "acPerformDate": "2023.03.28 ~ 2023.06.18",
                "acPerformPlace": "샤롯데씨어터",
                "acPerformRole": "엘 역"
            },
            {
                "acPerformName": "엑스칼리버",
                "acPerformDate": "2022.01.29 ~ 2022.03.13",
                "acPerformPlace": "세종문화회관 대극장",
                "acPerformRole": "아더 역"
            }
        ]
    },
    {
        "acNameKo": "임혜영",
        "acNameEn": "Lim Hye Young",
        "acOccupation": "뮤지컬 배우",
        "acDOB": "1982.10.28",
        "acPerform": [
            {
                "acPerformName": "드라큘라",
                "acPerformDate": "2023.12.06 ~ 2024.03.03",
                "acPerformPlace": "샤롯데씨어터",
                "acPerformRole": "미나 역"
            },
            {
                "acPerformName": "82년생 김지영",
                "acPerformDate": "2022.09.01 ~ 2022.11.13",
                "acPerformPlace": "백암아트홀",
                "acPerformRole": "김지영 역"
            },
            {
                "acPerformName": "레베카",
                "acPerformDate": "2021.11.16 ~ 2022.02.28",
                "acPerformPlace": "충무아트센터 대극장",
                "acPerformRole": "나 역"
            }
        ]
    }
]';

$data = json_decode($jsonData, true);

foreach ($data as $item) {
    $acNameKo = $item['acNameKo'];
    $acNameEn = $item['acNameEn'];
    $acOccupation = $item['acOccupation'];
    $acDOB = $item['acDOB'];
    $acPerforms = $item['acPerform'];

    // 이미지 파일 경로 설정
    $acImg = "../assets/img/actor/ac_" . ($actorId+1) . ".jpg";
    $acImgDetail = "../assets/img/actor/ac_detail_" . ($actorId+1) . ".jpg";


    // 배우 정보를 데이터베이스에 삽입 또는 업데이트
    $sql = "INSERT INTO actor (acNameKo, acNameEn, acOccupation, acDOB, acImg, acImgDetail) VALUES ('$acNameKo', '$acNameEn', '$acOccupation', '$acDOB', '$acImg', '$acImgDetail') ON DUPLICATE KEY UPDATE acNameKo = VALUES(acNameKo), acNameEn = VALUES(acNameEn), acOccupation = VALUES(acOccupation), acDOB = VALUES(acDOB), acImg = VALUES(acImg), acImgDetail = VALUES(acImgDetail)";

    if ($connect->query($sql) !== TRUE) {
        echo "오류: " . $sql . "<br>" . $connect->error;
    }


    $actorId = mysqli_insert_id($connect); // 삽입된 배우의 ID 가져오기


    // 배우의 연극 정보를 데이터베이스에 저장
    foreach ($acPerforms as $perform) {
        $acPerformName = $perform['acPerformName'];
        $acPerformDate = $perform['acPerformDate'];
        $acPerformPlace = $perform['acPerformPlace'];
        $acPerformRole = $perform['acPerformRole'];

        $sql = "INSERT INTO ac_perform (actorId, acPerformName, acPerformDate, acPerformPlace, acPerformRole) VALUES ($actorId, '$acPerformName', '$acPerformDate', '$acPerformPlace', '$acPerformRole');";

        if ($connect->query($sql) !== TRUE) {
            echo "오류: " . $sql . "<br>" . $connect->error;
        }
    }
}

$connect->close();
