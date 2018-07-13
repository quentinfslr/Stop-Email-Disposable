<?php

function EmailJetable($Email) {
    $url = "https://fslrprojet.ch/EmailDisposable/?Email=" . $Email;
    $Data = curl($url);
    return $Data["EmailValide"];
}

function DomainJetable($Domain) {
    $url = "https://fslrprojet.ch/EmailDisposable/?Domain=" . $Domain;
    $Data = curl($url);
    return $Data["DomainValide"];
}

function Curl($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);
    $result = curl_exec($ch);
    curl_close($ch);
    $Data = json_decode($result, true);
    return $Data;
}

?>