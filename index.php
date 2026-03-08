<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/sortie.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plateforme de création de groupes GEI IT 2</title>
    <style>
        section{
            box-shadow: 0px 0px 8px 8px rgba(0, 0, 0, 0.1);

        }
        td, th{
            line-height: 40px;
        }
        tr:nth-child(even){
            background-color: #fffbdf;
        }
        .policeTitre{

        }
        .policeText{

        }
    </style>
</head>
<body class="bg-white">
    <header class="w-screen min-h-[10vh] md:p-10 flex max-md:p-7 bg-linear-to-r from-yellow-800 from-0% to-yellow-600 to-80%">
        <div class="w-[15%] flex justify-center items-enter">
            <i></i>
        </div>
        <div class="flex w-[85%] justify-center text-white policeTitre items-center font-bold text-4xl">
            <h1>GEI IT 2 INSTI Lokossa</h1>
        </div>
    </header>
    <p class="italic text-center px-2 text-slate-600 text-xl policeText my-5">
        Vous êtes sur la plateforme de constitution de groupes de Projets de la <span class="font-bold policeTitre">GEI IT 2 Lokossa</span>
    </p>
    <main class="px-3 w-screen">
        <section class="p-2 my-12 bg-white rounded-sm">
            <!-- flex flex-col justify-center items-center -->
            <p class="font-semibold text-center text-2xl policeTitre my-2"><i></i> Les <span class="font-bold">Unités d'Enseignement</span> au programme:</p>
            <div class="rounded-xs py-2 bg-amber-50/80">
                <!-- w-3/4 -->
                    <table>
                        <thead class="my-3 border-b border-slate-400">
                            <tr class="bg-white">
                                <th class="w-[50%] policeTitre">UE</th>
                                <th class="w-[50%] policeTitre">Crédit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="w-[50%] policeText text-lg">Anglais Technique</td>
                                <td class="w-[50%] policeText text-lg text-center font-bold">2</td>
                            </tr>
                            <tr>
                                <td class="w-[50%] policeText text-lg" >POO Java</td>
                                <td class="w-[50%] policeText text-lg text-center font-bold">--</td>
                            </tr>
                            <tr>
                                <td class="w-[50%] policeText text-lg">Système d'Exploitation</td>
                                <td class="w-[50%] policeText text-lg text-center font-bold">--</td>
                            </tr>
                            <tr>
                                <td class="w-[50%] policeText text-lg">GPL</td>
                                <td class="w-[50%] policeText text-lg text-center font-bold">--</td>
                            </tr>
                            <tr>
                                <td class="w-[50%] policeText text-lg">Modélisation & UML</td>
                                <td class="w-[50%] policeText text-lg text-center font-bold">--</td>
                            </tr>
                            <tr>
                                <td class="w-[50%] policeText text-lg">ANA</td>
                                <td class="w-[50%] policeText text-lg text-center font-bold">--</td>
                            </tr>
                            <tr>
                                <td class="policeText flex flex-col text-lg" style="line-height: 20px">
                                    <span class="w-full">PHP</span>
                                    <span class="w-full">Client Léger API</span>
                                </td>
                                <td class="w-[50%] policeText text-lg text-center font-bold">6</td>
                            </tr>
                        </tbody>
                    </table>

            </div>
        </section>
        <section class="my-12 p-3 rounded-lg">
            <p class="font-semibold text-center text-2xl policeTitre my-2"><i></i> Les <span class="font-bold">Règles d'or</span> de la plateforme:</p>
            <div class="border-amber-700 border-dashed border-2 rounded-lg p-3 text-xl">
                <ul class="flex flex-col gap-4 text-xl">
                    <li>
                        <div>
                            <h3 class="font-bold policeTitre">Identité et Conformité à la Liste Officielle <span class="text-red-500 text-2xl">*</span></h3>
                            <div class="text-slate-600  text-lg italic policeText">
                                "Le Nom et le Prénom saisis doivent correspondre exactement à ceux utiliser en situation de classe et connue de tous!"
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="font-bold policeTitre">Inscription unique par Matière <span class="text-red-500 text-2xl">*</span></h3>
                            <div class="text-slate-600 text-lg italic policeText">
                                "Un étudiant ne peut appartenir qu'à <b>un seul et unique groupe </b>pour une Unité d'Enseignement ou CE (UE/CE) donnée ; son <b>nom ou prénom</b> ne peut pas figurer dans deux (02) groupes différents ou Deux (02) fois dans le même groupe."
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="font-bold policeTitre">Effectif Strict du Groupe <span class="text-red-500 text-2xl">*</span></h3>
                            <div class="text-slate-600 text-lg italic policeText">
                                "Chaque groupe doit obligatoirement être composé de <b>5 ou 6 membres exactement</b> (ni moins de 5, ni plus de 6)."
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="font-bold policeTitre">Parité minimale <span class="text-red-500 text-2xl">*</span></h3>
                            <div class="text-slate-600 text-lg italic policeText">
                                "Chaque groupe constitué doit obligatoirement comporter <b>au minimum 1 fille</b>."
                            </div>
                        </div>
                    </li>
                </ul>               
            </div>
        </section>
        <button class="uppercase text-2xl cursor-pointer rounded-2xl p-3 text-center hover:bg-amber-700 duration-300 text-white bg-yellow-600 font-bold policeTitre mb-4"><a href="create.php" target="_blank"><i></i> Constituez un groupe</a></button>
        <button class="uppercase text-2xl cursor-pointer rounded-2xl p-3 text-center hover:bg-amber-700 duration-300 text-white bg-yellow-600 font-bold policeTitre mb-2"><a href=""><i></i> Consultez les groupes existants</a></button>
    </main>
    <footer class="pt-7 pb-5 bg-slate-700 text-white text-center">
        <p class="policeText">&copy; Copyright 2026</p>
    </footer>
</body>
</html>