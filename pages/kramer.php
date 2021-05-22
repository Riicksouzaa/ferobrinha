<?php

$base_url = "https://web.ntsw.pl//public/images/outfits/";

$ninjutsu = [
    'naruto' => ['outfit' => '779_0', 'realName' => 'Uzumaki Naruto', 'professions' => [30 => ['uid' => "848_0", 'type' => 'Periodic', 'chakra' => 100], 70 => ['uid' => "848_0", 'type' => 'Periodic', 'chakra' => 100], 110 => ['uid' => "848_0", 'type' => 'Periodic', 'chakra' => 100], 150 => ['uid' => "848_0", 'type' => 'Periodic', 'chakra' => 100], 200 => ['uid' => "848_0", 'type' => 'Periodic', 'chakra' => 100], 250 => ['uid' => "848_0", 'type' => 'Periodic', 'chakra' => 100], 300 => ['uid' => "848_0", 'type' => 'Periodic', 'chakra' => 100], 350 => ['uid' => "848_0", 'type' => 'Periodic', 'chakra' => 100], 400 => ['uid' => "848_0", 'type' => 'Periodic', 'chakra' => 100], 500 => ['uid' => "848_0", 'type' => 'Periodic', 'chakra' => 100]]],
    'hinata' => ['outfit' => '847_0', 'realName' => 'Hinata', 'professions' => [30 => ['uid' => "848_0", 'type' => 'Periodic', 'chakra' => 100]]]
];

$weapons = [
    'sasuke' => ['outfit' => '847_0', 'realName' => 'Hinata', 'professions' => [30 => ['uid' => "848_0", 'type' => 'Periodic', 'chakra' => 100]]]
];

$defense = [
    'bagulho' => ['outfit' => '847_0', 'realName' => 'Hinata', 'professions' => [30 => ['uid' => "848_0", 'type' => 'Periodic', 'chakra' => 100]]]
];

$classes = [
    'ninjutsu' => $ninjutsu,
    'weapons' => $weapons,
    'defense' => $defense
];

$transformation = "";

$main_content .= '<div class="profbox">';
foreach ($classes as $key => $values) {

    $vocations = "";
    foreach ($values as $k => $v) {
        $vocations .= '<a href="#' . $k . '" data-izimodal-open="#modal-' . $k . '"><img src="https://web.ntsw.pl//public/images/outfits/' . $v['outfit'] . '.PNG" width="34" height="34" data-toggle="tooltip" data-placement="top" data-html="true" title="" data-original-title="' . $v['realName'] . '"></a>';
    }

    $main_content .= '
        <div class="profnav--' . $key . '">
            <img src="https://web.ntsw.pl//public/images/roles/' . $key . 'Btn.png">' . $vocations . '
        </div>';
}
$main_content .= '</div>';

foreach ($classes as $vocations) {
    foreach ($vocations as $vocationName => $vocation) {
        $transformation .= '<div id="modal-' . $vocationName . '" data-izimodal-title="' . $vocationName . '" class="iziModal">
    <table class="table">
        <tbody>
            <tr>
                <td>
                    <h3>Transformations: <small>[Kai Chakra]</small></h3>
                    <table class="table table-bordered-proffesion">
                        <thead>
                            <tr>
                                <th>Look</th>
                                <th>Requirements</th>
                                <th>Type</th>
                            </tr>
                        </thead>
                        <tbody>';

        foreach ($vocation['professions'] as $level => $informations) {
            $transformation .= '
                            <tr>
                                <td>
                                    <center><img src="' . $base_url . $informations['uid'] . '.PNG" width="36" height="36"></center>
                                </td>
                                <td>' . $level . ' level<br>' . $informations['chakra'] . ' chakra</td>
                                <td>' . $informations['type'] . '</td>
                            </tr>

                        ';
        }

        $transformation .= '
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</div>';
    }
}


$main_content .= $transformation;
