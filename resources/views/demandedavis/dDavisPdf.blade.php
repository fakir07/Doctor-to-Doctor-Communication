<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>d'avis</title>
    <style>
        .ref {
            font-style: normal;
            font-size: 14px;
            color: rgb(128, 128, 128);
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
        }

        .logo {
            width: 80px !important;
            border-radius: 15px !important;
            float: right;
            margin-top: -40px !important;
        }

        .davis {
            margin-left: 30% !important;
            font-weight: 600;
            color: #009ef7 !important;
            font-style: normal;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            margin-top: 50px !important;
        }

        .date_davis {
            margin-left: 40% !important;
            font-style: normal;
            color: rgb(128, 128, 128);
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
        }

        .d_1 {
            font-style: normal;
            font-size: 16px;
            color: rgb(17, 14, 14);
            font-family: sans-serif;
            font-weight: 600;
            margin-top: 30px !important;
        }

        .d_2 {
            font-style: normal;
            font-size: 16px;
            color: rgb(17, 14, 14);
            font-family: sans-serif;
            font-weight: 600;
            margin-left: 500px !important;
            margin-top: -180px !important;
            position: absolute
        }

        .medc1 {
            font-style: normal;
            font-size: 16px;
            color: rgb(128, 128, 128);
            font-family: sans-serif;
            margin-top: -19px !important
        }

        .medc2 {
            font-style: normal;
            font-size: 16px;
            margin-top: 30px !important;
            color: rgb(128, 128, 128);
            font-family: sans-serif;
            margin-left: 500px !important;
            margin-top: -165px !important;
            position: absolute
        }

        .sp {
            color: rgba(0, 0, 0, 0.788);
            padding-right: 5px;
        }
    </style>
</head>

<body>
    <p class="ref">Reference : ref_{{ $dDavis->id }}</p>
    <img src="{{ public_path('assets/media/logos/logo_invoice.png') }}" class="logo" /><br>
    <h1 class="davis">Demande d'avis</h1>
    <p class="date_davis">{{ $dDavis->date_start }}</p>
    <p class="d_1">Doctore</p>
    <div class="medc1">
        <p><span class="sp">Le Nom</span>: {{ $medcine_send->name }} {{ $medcine_send->prenom }}</p>
        <p><span class="sp">Spécialité</span>:{{ $medcine_send->spécialité->specialty_name }}</p>
        <p><span class="sp">E-mail</span>:{{ $medcine_send->email }}</p>
        <p><span class="sp">Adresss</span>:{{ $medcine_send->ville }} {{ $medcine_send->adresse }}</p>
    </div>
    <p class="d_2">Doctore</p>
    <div class="medc2">
        <p><span class="sp">Le Nom</span>:{{ $medcine_to->name }} {{ $medcine_to->prenom }} </p>
        <p><span class="sp">Spécialité</span>:{{ $medcine_to->spécialité->specialty_name }}</p>
        <p><span class="sp">E-mail</span>:{{ $medcine_to->email }}</p>
        <p><span class="sp">Adresss</span>:{{ $medcine_to->ville }} {{ $medcine_to->adresse }}</p>
    </div>
</body>

</html>