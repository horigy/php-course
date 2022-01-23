<?php
const NAMES = ['Petr', 'Sergey', 'James', 'Bob', 'Natasha'];

function create_user()
{
    $user = [
        'name' => NAMES[array_rand(NAMES)],
        'age' => mt_rand(18, 45)
    ];
    return $user;
}
 function count_names($data): array
 {
    $names = [];
    foreach($data as $user) {
        if(isset($names[$user['name']])) {
            $names[$user['name']]++;
        } else {
            $names[$user["name"]] = 1;
        }
    }
    return $names;
}

function calc_age($data)
{
    $total_age = 0;
    foreach($data as $user) {
        $total_age += $user['age'];
    }
    $av_age = $total_age / sizeof($data);
    return $av_age;
}

function task_3_1()
{
    $i = 0;
    $users = array();
    while($i < 50) {
        $users[] = create_user();
        $i++;
    }
    file_put_contents('users.json', json_encode($users));
    $data = file_get_contents('users.json');
    $final_data = json_decode($data, true);
    $names_arr = count_names($final_data);
    $av_age = calc_age($final_data);
    echo 'Имена в массиве:<br>';
    echo '<pre>', print_r($names_arr),'<pre>';
    echo 'Средний возраст:' . $av_age;
}
