<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plateforme de création de groupes GEI IT 2</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        input:focus { 
            transform: scale(1.01); 
            transition: all 0.2s; 
        }
    </style>
</head>


<!-- Problème problème je dois fais un Required. -->
<body class="bg-slate-50">
<!-- Le header -->
    <header class="w-full py-6 flex items-center justify-between px-6 bg-gradient-to-r from-yellow-800 to-yellow-600 shadow-md">
        <div class="flex items-center gap-3">
            <a href="/siteDeGroupe/home" class="text-white hover:bg-white/20 p-2 rounded-full transition">
                <i class="ri-arrow-left-line text-2xl"></i>
            </a>
            <h1 class="text-white font-bold text-xl md:text-2xl tracking-tight">Configuration du Groupe</h1>
        </div>

        <button onclick="toggleRules()" class="bg-white/10 hover:bg-white/20 text-white border border-white/30 px-4 py-2 rounded-lg flex items-center gap-2 transition-all text-sm font-bold">
            <i class="ri-shield-check-line"></i>
            <span class="hidden md:inline">Voir les règles</span>
        </button>
    </header>
<!-- affiche les statisques -->
    <div class="w-full bg-white border-b border-slate-200 py-3 px-6 flex flex-wrap justify-center gap-6 shadow-sm">
        <div class="flex items-center gap-2 text-slate-600 text-sm font-medium">
            <i class="ri-folders-line text-yellow-600"></i>
            <span>Groupes créés : <b class="text-slate-900">
                <?php
                    if(isset($nbreGroupe)){
                        echo $nbreGroupe;
                    }else{
                        echo "0";
                    }
                ?>
            </b></span>
        </div>
        <div class="h-4 w-px bg-slate-300 hidden md:block"></div>
        <div class="flex items-center gap-2 text-slate-600 text-sm font-medium">
            <i class="ri-user-add-line text-yellow-600"></i>
            <span>Groupes de 6 : <b class="text-slate-900" id="nbrDe3">3</b></span>
        </div>
    </div>


    <main class="max-w-4xl mx-auto px-4 mt-8">
        <form action="/siteDeGroupe/newGroupe" method="POST" class="space-y-8" id="formulaire">
            <!-- Les matières -->
            <section class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100">
                <div class="flex items-center gap-3 mb-6">
                    <i class="ri-book-open-fill text-yellow-600 text-2xl"></i>
                    <h2 class="text-lg font-bold text-slate-800">1. Quelle est la matière concernée ?</h2>
                </div>
                <!-- Liste des matières -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <label class="relative flex items-center p-4 border-2 border-slate-100 rounded-xl cursor-pointer hover:border-yellow-300 has-[:checked]:border-yellow-600 has-[:checked]:bg-yellow-50 transition-all">
                        <input type="radio" name="matiere" value="ang" class="hidden peer" required>
                        <div class="flex flex-col">
                            <span class="font-bold text-slate-700">Anglais Scientifique</span>
                        </div>
                        <i class="ri-checkbox-circle-fill absolute right-4 text-yellow-600 opacity-0 peer-checked:opacity-100 transition-opacity"></i>
                    </label>
                    <label class="relative flex items-center p-4 border-2 border-slate-100 rounded-xl cursor-pointer hover:border-yellow-300 has-[:checked]:border-yellow-600 has-[:checked]:bg-yellow-50 transition-all">
                        <input type="radio" name="matiere" value="uml" class="hidden peer" required>
                        <div class="flex flex-col">
                            <span class="font-bold text-slate-700">Modélisation & UML</span>
                        </div>
                        <i class="ri-checkbox-circle-fill absolute right-4 text-yellow-600 opacity-0 peer-checked:opacity-100 transition-opacity"></i>
                    </label>
                    <label class="relative flex items-center p-4 border-2 border-slate-100 rounded-xl cursor-pointer hover:border-yellow-300 has-[:checked]:border-yellow-600 has-[:checked]:bg-yellow-50 transition-all">
                        <input type="radio" name="matiere" value="ana" class="hidden peer" required>
                        <div class="flex flex-col">
                            <span class="font-bold text-slate-700">ANA</span>
                        </div>
                        <i class="ri-checkbox-circle-fill absolute right-4 text-yellow-600 opacity-0 peer-checked:opacity-100 transition-opacity"></i>
                    </label>
                    <label class="relative flex items-center p-4 border-2 border-slate-100 rounded-xl cursor-pointer hover:border-yellow-300 has-[:checked]:border-yellow-600 has-[:checked]:bg-yellow-50 transition-all">
                        <input type="radio" name="matiere" value="java" class="hidden peer" required>
                        <div class="flex flex-col">
                            <span class="font-bold text-slate-700">POO Java</span>
                        </div>
                        <i class="ri-checkbox-circle-fill absolute right-4 text-yellow-600 opacity-0 peer-checked:opacity-100 transition-opacity"></i>
                    </label>
                    <label class="relative flex items-center p-4 border-2 border-slate-100 rounded-xl cursor-pointer hover:border-yellow-300 has-[:checked]:border-yellow-600 has-[:checked]:bg-yellow-50 transition-all">
                        <input type="radio" name="matiere" value="gpl" class="hidden peer" required>
                        <div class="flex flex-col">
                            <span class="font-bold text-slate-700">GPL</span>
                        </div>
                        <i class="ri-checkbox-circle-fill absolute right-4 text-yellow-600 opacity-0 peer-checked:opacity-100 transition-opacity"></i>
                    </label>
                    <label class="relative flex items-center p-4 border-2 border-slate-100 rounded-xl cursor-pointer hover:border-yellow-300 has-[:checked]:border-yellow-600 has-[:checked]:bg-yellow-50 transition-all">
                        <input type="radio" name="matiere" value="php" class="hidden peer" required>
                        <div class="flex flex-col">
                            <span class="font-bold text-slate-700">PHP</span>
                        </div>
                        <i class="ri-checkbox-circle-fill absolute right-4 text-yellow-600 opacity-0 peer-checked:opacity-100 transition-opacity"></i>
                    </label>
                    <label class="relative flex items-center p-4 border-2 border-slate-100 rounded-xl cursor-pointer hover:border-yellow-300 has-[:checked]:border-yellow-600 has-[:checked]:bg-yellow-50 transition-all">
                        <input type="radio" name="matiere" value="api" class="hidden peer" required>
                        <div class="flex flex-col">
                            <span class="font-bold text-slate-700">Client Léger & API</span>
                        </div>
                        <i class="ri-checkbox-circle-fill absolute right-4 text-yellow-600 opacity-0 peer-checked:opacity-100 transition-opacity"></i>
                    </label>

                </div>
            </section>
<!-- Les membres -->
            <section class="space-y-4">
                <div class="flex items-center justify-between px-2">
                    <div class="flex items-center gap-3">
                        <i class="ri-group-fill text-yellow-600 text-2xl"></i>
                        <h2 class="text-lg font-bold text-slate-800">2. Membres du groupe (5 à 6)</h2>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-4">
<!-- Membre 1 -->                        
                    <div class="bg-white p-4 rounded-xl border border-slate-200 flex flex-wrap md:flex-nowrap gap-4 items-center shadow-sm">
                        <div class="bg-yellow-600 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold shrink-0">1</div>
                        <input type="text" placeholder="NOM Prénom (Ex: KODJO Jean)" name="nomPrenoms[]" class="input-nom flex-1 bg-slate-50 border border-slate-200 p-3 rounded-lg outline-none focus:border-yellow-500" required
                            value="<?= isset($membres) ? $membres[0]["nom"]." ".$membres[0]["prenom"] : "" ?>"
                        >                    
                        <div class="flex items-center bg-slate-100 p-1 rounded-lg">
                            <label class="flex items-center gap-1 px-3 py-1 cursor-pointer has-[:checked]:bg-white has-[:checked]:text-pink-600 has-[:checked]:shadow-sm rounded-md transition-all">
                                <input type="radio" name="sexes[0]" value="F" class="hidden" <?= @$membres[0]["sexe"]=== "F" ? "checked" : "" ?> required>
                                <i class="ri-women-line"></i> <span class="text-sm font-bold">F</span>
                            </label>
                            <label class="flex items-center gap-1 px-3 py-1 cursor-pointer has-[:checked]:bg-white has-[:checked]:text-blue-600 has-[:checked]:shadow-sm rounded-md transition-all">
                                <input type="radio" name="sexes[0]" value="M" class="hidden" <?= @$membres[0]["sexe"]=== "M" ? "checked" : "" ?>>
                                <i class="ri-men-line"></i> <span class="text-sm font-bold">M</span>
                            </label>
                        </div>
                        <span class="text-red-500 text-xs font-bold ml-11 hidden msg-doublon"></span>
                    </div>
<!-- Membre 2 -->
                    <div class="bg-white p-4 rounded-xl border border-slate-200 flex flex-wrap md:flex-nowrap gap-4 items-center shadow-sm">
                        <div class="bg-slate-200 text-slate-600 w-8 h-8 rounded-full flex items-center justify-center font-bold shrink-0">2</div>
                        <input type="text" placeholder="NOM Prénom" name="nomPrenoms[]" class="input-nom flex-1 bg-slate-50 border border-slate-200 p-3 rounded-lg outline-none focus:border-yellow-500" required
                            value="<?= isset($membres) ? $membres[1]["nom"]." ".$membres[1]["prenom"] : "" ?>"
                        >
                        <div class="flex items-center bg-slate-100 p-1 rounded-lg">
                            <label class="flex items-center gap-1 px-3 py-1 cursor-pointer has-[:checked]:bg-white has-[:checked]:text-pink-600 has-[:checked]:shadow-sm rounded-md transition-all">
                                <input type="radio" name="sexes[1]" value="F" class="hidden" required <?= @$membres[1]["sexe"]=== "F" ? "checked" : "" ?>>
                                <i class="ri-women-line"></i> <span class="text-sm font-bold">F</span>
                            </label>
                            <label class="flex items-center gap-1 px-3 py-1 cursor-pointer has-[:checked]:bg-white has-[:checked]:text-blue-600 has-[:checked]:shadow-sm rounded-md transition-all">
                                <input type="radio" name="sexes[1]" value="M" class="hidden" <?= @$membres[1]["sexe"]=== "M" ? "checked" : "" ?>>
                                <i class="ri-men-line"></i> <span class="text-sm font-bold">M</span>
                            </label>
                        </div>
                        <span class="text-red-500 text-xs font-bold ml-11 hidden msg-doublon"></span>
                    </div>
<!-- Membre 3 -->
                    <div class="bg-white p-4 rounded-xl border border-slate-200 flex flex-wrap md:flex-nowrap gap-4 items-center shadow-sm">
                        <div class="bg-slate-200 text-slate-600 w-8 h-8 rounded-full flex items-center justify-center font-bold shrink-0">3</div>
                        <input type="text" placeholder="NOM Prénom" name="nomPrenoms[]" class="input-nom flex-1 bg-slate-50 border border-slate-200 p-3 rounded-lg outline-none focus:border-yellow-500" required
                            value="<?= isset($membres) ? $membres[2]["nom"]." ".$membres[2]["prenom"] : "" ?>"
                        >
                        <div class="flex items-center bg-slate-100 p-1 rounded-lg">
                            <label class="flex items-center gap-1 px-3 py-1 cursor-pointer has-[:checked]:bg-white has-[:checked]:text-pink-600 has-[:checked]:shadow-sm rounded-md transition-all">
                                <input type="radio" name="sexes[2]" value="F" class="hidden" required <?= @$membres[2]["sexe"]=== "F" ? "checked" : "" ?>>
                                <i class="ri-women-line"></i> <span class="text-sm font-bold">F</span>
                            </label>
                            <label class="flex items-center gap-1 px-3 py-1 cursor-pointer has-[:checked]:bg-white has-[:checked]:text-blue-600 has-[:checked]:shadow-sm rounded-md transition-all">
                                <input type="radio" name="sexes[2]" value="M" class="hidden" <?= @$membres[2]["sexe"]=== "M" ? "checked" : "" ?>>
                                <i class="ri-men-line"></i> <span class="text-sm font-bold">M</span>
                            </label>
                        </div>
                        <span class="text-red-500 text-xs font-bold ml-11 hidden msg-doublon"></span>
                    </div>
<!-- Membre 4 -->
                    <div class="bg-white p-4 rounded-xl border border-slate-200 flex flex-wrap md:flex-nowrap gap-4 items-center shadow-sm">
                        <div class="bg-slate-200 text-slate-600 w-8 h-8 rounded-full flex items-center justify-center font-bold shrink-0">4</div>
                        <input type="text" placeholder="NOM Prénom" name="nomPrenoms[]" class="input-nom flex-1 bg-slate-50 border border-slate-200 p-3 rounded-lg outline-none focus:border-yellow-500" required
                            value="<?= isset($membres) ? $membres[3]["nom"]." ".$membres[3]["prenom"] : "" ?>"
                        >
                        <div class="flex items-center bg-slate-100 p-1 rounded-lg">
                            <label class="flex items-center gap-1 px-3 py-1 cursor-pointer has-[:checked]:bg-white has-[:checked]:text-pink-600 has-[:checked]:shadow-sm rounded-md transition-all">
                                <input type="radio" name="sexes[3]" value="F" class="hidden" required  <?= @$membres[3]["sexe"]=== "F" ? "checked" : "" ?>>
                                <i class="ri-women-line"></i> <span class="text-sm font-bold">F</span>
                            </label>
                            <label class="flex items-center gap-1 px-3 py-1 cursor-pointer has-[:checked]:bg-white has-[:checked]:text-blue-600 has-[:checked]:shadow-sm rounded-md transition-all">
                                <input type="radio" name="sexes[3]" value="M" class="hidden"  <?= @$membres[3]["sexe"]=== "M" ? "checked" : "" ?>>
                                <i class="ri-men-line"></i> <span class="text-sm font-bold">M</span>
                            </label>
                        </div>
                        <span class="text-red-500 text-xs font-bold ml-11 hidden msg-doublon"></span>
                    </div>
<!-- Membre 5 -->
                    <div class="bg-white p-4 rounded-xl border border-slate-200 flex flex-wrap md:flex-nowrap gap-4 items-center shadow-sm">
                        <div class="bg-slate-200 text-slate-600 w-8 h-8 rounded-full flex items-center justify-center font-bold shrink-0">5</div>
                        <input type="text" placeholder="NOM Prénom" name="nomPrenoms[]" class="input-nom flex-1 bg-slate-50 border border-slate-200 p-3 rounded-lg outline-none focus:border-yellow-500" required
                            value="<?= isset($membres) ? $membres[4]["nom"]." ".$membres[4]["prenom"] : "" ?>"
                        >
                        <div class="flex items-center bg-slate-100 p-1 rounded-lg">
                            <label class="flex items-center gap-1 px-3 py-1 cursor-pointer has-[:checked]:bg-white has-[:checked]:text-pink-600 has-[:checked]:shadow-sm rounded-md transition-all">
                                <input type="radio" name="sexes[4]" value="F" class="hidden" required  <?= @$membres[4]["sexe"]=== "F" ? "checked" : "" ?>>
                                <i class="ri-women-line"></i> <span class="text-sm font-bold">F</span>
                            </label>
                            <label class="flex items-center gap-1 px-3 py-1 cursor-pointer has-[:checked]:bg-white has-[:checked]:text-blue-600 has-[:checked]:shadow-sm rounded-md transition-all">
                                <input type="radio" name="sexes[4]" value="M" class="hidden"  <?= @$membres[4]["sexe"]=== "M" ? "checked" : "" ?>>
                                <i class="ri-men-line"></i> <span class="text-sm font-bold">M</span>
                            </label>
                        </div>
                        <span class="text-red-500 text-xs font-bold ml-11 hidden msg-doublon"></span>
                    </div>
<!-- J'indique ici que le 6ieme membre n'est pas obligué -->
                    <div class="option flex items-center gap-4 my-6">
                        <div class="h-px bg-slate-200 flex-1"></div>
                        <span class="bg-amber-100 text-amber-700 px-4 py-1 rounded-full text-xs font-bold uppercase tracking-wider">
                            <i class="ri-information-line"></i> 6ème membre facultatif
                        </span>
                        <div class="h-px bg-slate-200 flex-1"></div>
                    </div>
<!-- Membre 6 -->
                    <div class="option bg-slate-50 p-4 rounded-xl border border-dashed border-slate-300 flex flex-wrap md:flex-nowrap gap-4 items-center opacity-80 hover:opacity-100 transition-opacity">
                        <div class="bg-slate-400 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold shrink-0">6</div>
                        
                        <input type="text" placeholder="NOM Prénom (Optionnel)"  name="nomPrenoms[]" class="input-nom flex-1 bg-white border border-slate-200 p-3 rounded-lg outline-none focus:border-yellow-500"
                            value="<?= isset($membres) ? $membres[5]["nom"]." ".$membres[5]["prenom"] : "" ?>"
                        >
                        
                        <div class="flex items-center bg-white p-1 rounded-lg border border-slate-200">
                            <label class="px-3 py-1 cursor-pointer has-[:checked]:bg-pink-50 has-[:checked]:text-pink-600 rounded-md transition-all">
                                <input type="radio" name="sexes[5]" value="F" class="hidden"  <?= @$membres[5]["sexe"]=== "F" ? "checked" : "" ?>>
                                <i class="ri-women-line"></i><span class="text-sm font-bold">F</span>
                            </label>
                            <label class="px-3 py-1 cursor-pointer has-[:checked]:bg-blue-50 has-[:checked]:text-blue-600 rounded-md transition-all">
                                <input type="radio" name="sexes[5]" value="M" class="hidden"  <?= @$membres[5]["sexe"]=== "M" ? "checked" : "" ?>>
                                <i class="ri-men-line"></i> <span class="text-sm font-bold">M</span>
                            </label>
                        </div>
                        <span class="text-red-500 text-xs font-bold ml-11 hidden msg-doublon"></span>
                    </div>
                </div>
            </section>

<!-- Boutton d'envoi -->
            <div class="pt-6">
                <button type="button" onclick="checkInputs()" class="w-full bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-5 rounded-2xl text-xl shadow-lg shadow-yellow-600/20 transition-all flex items-center justify-center gap-3">
                    <i class="ri-send-plane-fill"></i>
                    Enregistrer le groupe
                </button>
            </div>
        </form>
    </main>
    <footer class="py-8 bg-slate-800 text-white text-center border-t-4 border-yellow-600 mt-12">
        <p class="opacity-80">&copy; Copyright 2026 - GEI IT 2 INSTI Lokossa</p>
    </footer>  
    
    <!-- Il s'agit de la partie des règles -->
    <div id="rulesModal" class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-50 hidden flex justify-center items-center p-4">
        <div class="bg-white rounded-2xl p-6 max-w-md w-full shadow-2xl border-t-4 border-yellow-600">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-bold text-slate-800 flex items-center gap-2">
                    <i class="ri-shield-check-line text-yellow-600"></i> Rappel des Règles
                </h2>
                <button onclick="toggleRules()" class="text-slate-400 hover:text-red-500 text-2xl">
                    <i class="ri-close-line"></i>
                </button>
            </div>
            <ul class="space-y-3 text-slate-600 text-sm">
                <li class="flex gap-2"><b>•</b> Effectif : 5 membres obligatoires (6ème facultatif).</li>
                <li class="flex gap-2"><b>•</b> Mixité : Au moins une (01) fille par groupe.</li>
                <li class="flex gap-2"><b>•</b> Unicité : On ne s'inscrit qu'une seule fois.</li>
            </ul>
            <button onclick="toggleRules()" class="w-full mt-6 py-3 bg-yellow-600 text-white rounded-xl font-bold">J'ai compris</button>
        </div>
    </div>  
    
    <!-- il s'agit de l'erreur quand on n'a pas choisir une matière -->
    <div id="errorModal" class="hidden fixed inset-0 bg-black/50 flex justify-center items-center z-50 p-4">        
        <div class="bg-white p-6 h-[35vh] rounded-lg shadow-2xl max-w-md w-full text-center border-t-4 border-red-600">
            <i class="ri-error-warning-fill text-red-500 text-4xl"></i>
            <h3 class="text-red-600 text-xl font-bold mb-2">Action impossible</h3>
            <p class="text-gray-600 mb-6">Veuillez sélectionner une matière avant de constituer un groupe.</p>
            
            <button onclick="closeModal()" 
                class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-6 rounded transition-colors shadow-md">
                D'accord
            </button>
        </div>
    </div>    

    <!-- il s'agit de l'erreur quand on na envoyé les données erronnées. -->
    <div id="refreshModal" class="hidden fixed inset-0 bg-black/50 flex justify-center items-center z-50 p-4">        
        <div class="bg-white p-6 h-[35vh] rounded-lg shadow-2xl max-w-md w-full text-center border-t-4 border-red-600">
            <i class="ri-refresh-line text-red-500 text-4xl"></i>
            
            <h3 class="text-red-600 text-xl font-bold mb-2">Entrés invalides</h3>
            <p class="text-gray-600 mb-6">Vous devez réactualiser la page pour la constitution du groupe.</p>
            
            <button onclick="location.reload()" 
                class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-6 rounded transition-colors shadow-md">
                Réactualiser maintenant
            </button>
        </div>
    </div>

    <!-- Il s'agit du modal qui s'affiche quand le groupe est bien crée -->
    <div id="successModal" class="hidden fixed inset-0 bg-black/50 backdrop-blur-sm flex justify-center items-center z-50 p-4">        
        <div class="bg-white p-6 min-h-[40vh] rounded-2xl shadow-2xl max-w-md w-full text-center border-t-8 border-emerald-600 flex flex-col justify-center items-center animate-in fade-in zoom-in duration-300">
            
            <div class="mb-4 bg-emerald-100 w-20 h-20 rounded-full flex items-center justify-center">
                <i class="ri-checkbox-circle-fill text-emerald-600 text-5xl"></i>
            </div>

            <h3 class="text-emerald-700 text-2xl font-bold mb-2 policeTitre">Groupe Enregistré !</h3>
            <p class="text-slate-600 mb-8 policeText">
                Félicitations, votre groupe a été constitué avec succès.
            </p>
            
            <div class="flex flex-col w-full gap-3">
                <a href="/siteDeGroupe/consult" 
                class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3 px-6 rounded-xl transition-all shadow-md flex items-center justify-center gap-2">
                    <i class="ri-eye-line text-xl"></i> Voir la liste
                </a>
                
                <a href="/siteDeGroupe/home" 
                    class="bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold py-3 px-6 rounded-xl transition-all flex items-center justify-center gap-2">
                    <i class="ri-home-4-line text-xl"></i> Retour à l'accueil
                </a>
            </div>
        </div>
    </div>
    <!-- Ici il y a le modal qui va s'"afficher si un groupe essaie d'envoyer un nom qui n'est pas dans la liste de la classe."-->
    <div id="horsClasse" class="hidden fixed inset-0 bg-black/50 backdrop-blur-sm flex justify-center items-center z-50 p-4">        
        <div class="bg-white p-6 rounded-2xl shadow-2xl max-w-md w-full text-center border-t-4 border-red-600 animate-in fade-in zoom-in duration-200">
            
            <div class="mb-4">
                <i class="ri-user-unfollow-fill text-red-500 text-5xl"></i>
            </div>

            <h3 class="text-red-600 text-xl font-bold mb-2 policeTitre">Étudiant(s) introuvable(s)</h3>
            
            <p class="text-gray-600 text-sm mb-4 policeText">
                Les noms suivants ne figurent pas sur la liste officielle de la classe :
            </p>

            <div id="invalidNamesList" class="bg-red-50 rounded-xl p-4 mb-6 max-h-40 overflow-y-auto border border-red-100">
                <ul>
                    <!-- Ici vous enumérez les noms qui ne sont pas dans la database. -->
                    <?php
                        if(isset($etranger) && !empty($etranger)){
                            foreach($etranger as $nomPrenom){
                                $nom = $nomPrenom["nom"];
                                $prenom = $nomPrenom["prenom"];
                                $sexe = $nomPrenom["sexe"];
                                echo "
                                    <li>
                                        <b>$nom $prenom</b>
                                        $sexe
                                    </li>
                                ";
                            }
                        }
                    ?>
                </ul>
            </div>
            
            <p class="text-xs text-gray-400 mb-6 italic">
                Vérifiez l'orthographe (NOM en majuscules) ou nous demandez simplement quoi écris..
            </p>

            <button onclick="closehorsClasse()" 
                class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-6 rounded-xl transition-all shadow-md active:scale-95">
                Corriger les noms
            </button>
        </div>
    </div> 
    <!-- Ici il y a le modal qui va s'"afficher si un groupe essaie d'envoyer un nom qui  est déjà dans un groupe."-->
    <div id="occupes" class="hidden fixed inset-0 bg-black/50 backdrop-blur-sm flex justify-center items-center z-50 p-4">        
        <div class="bg-white p-6 rounded-2xl shadow-2xl max-w-md w-full text-center border-t-4 border-red-600 animate-in fade-in zoom-in duration-200">
            
            <div class="mb-4">
                <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-red-100">
                    <i class="ri-user-shared-2-fill text-red-600 text-4xl"></i>
                </div>
            </div>

            <h3 class="text-red-600 text-xl font-bold mb-2 policeTitre">Attentative de Double Inscription</h3>
            
            <p class="text-gray-600 text-sm mb-4 policeText">
                Action refusée : certains membres ont déjà été enregistrés dans un autre groupe.
            </p>

            <div id="duplicateStudentsList" class="bg-amber-50 rounded-xl p-4 mb-6 max-h-40 overflow-y-auto border border-amber-100 text-left">
                <ul>
                    <!-- Liste des étudiants doublons.. -->
                    <?php
                        if(isset($existe) && !empty($existe)){
                            foreach($existe as $nomPrenom){
                                $nom = $nomPrenom["nom"];
                                $prenom = $nomPrenom["prenom"];
                                $sexe = $nomPrenom["sexe"];
                                echo "<li>
                                    <b>$nom $prenom</b>
                                    $sexe
                                </li>";
                            }
                        }
                    ?>
                </ul>
            </div>
            
            <p class="text-[10px] text-gray-400 mb-6 italic">
                Note : Un étudiant ne peut figurer que dans un seul groupe pour un projet.
            </p>

            <button onclick="closeoccupes()" 
                class="w-full bg-slate-800 hover:bg-slate-900 text-white font-bold py-3 px-6 rounded-xl transition-all shadow-md active:scale-95">
                Modifier la liste
            </button>
        </div>
    </div>
    <script>
        function toggleRules() {
            const modal = document.getElementById('rulesModal');
            modal.classList.toggle('hidden');
        }   

        //fonction qui se déclenche quand il y a erreur serveur: Le nom envoyé ne se trouve pas dans la base.
        function horsClasse(){
            document.getElementById("horsClasse").classList.remove("hidden");
        }

        //fonction qui ferme le modal de la fonctio si dessus
        function closehorsClasse(){
            document.getElementById("horsClasse").classList.add("hidden");
        }
        //fonction pour le cas où le groupe à bien été crée     
        function successModal(){
            document.getElementById("successModal").classList.remove("hidden");
        }
        let inputs = document.querySelectorAll(".input-nom");  
        //cette fonction va m'aider à vérifier si la personne a au moins sélectionné une matière
        function verifyMatiere(x){
            if(x === "" || x === undefined){
                return false;
            }else{
                return true;
            }
        }

        //cette fonction va fermer le message d'erreur
        function closeModal() {
            document.getElementById('errorModal').classList.add('hidden');
        }
        //cette fonctionne m'affihe le modal d'actualisation
        function showRefreshError() {
            console.log("refresh");
            document.getElementById('refreshModal').classList.remove('hidden');
        }
        
        //fonction qui affiche les noms qui déjà dans un groupe
        function occupes(){
            document.getElementById("occupes").classList.remove("hidden");
        }

        //fonction qui ferme le modal de la fonctio si dessus
        function closeoccupes(){
            document.getElementById("occupes").classList.add("hidden");
        }

        //si on écrit un nom sans sélectionner de matière
        inputs.forEach((input, index)=>{
            input.addEventListener('input', ()=>{
                let matiere = document.querySelector('input[name = "matiere"]:checked')?.value;      
                if(!verifyMatiere(matiere)){
                    document.getElementById("errorModal").classList.remove("hidden");
                }
            })
        });

//Cette fontion verifie et idenntidie les doublons
        function checkText(Texts, elements){
            let err = 0;
            Texts.forEach((nom, index)=>{
                if(Texts.indexOf(nom) !== index){
                    elements[index].classList.add("bg-red-50");
                    elements[index].classList.add("border");
                    elements[index].classList.add("border-red-400");
                    err++;
                }
            })       
            if(err > 0){
                return false;
            }
            if(err === 0){
                return true;
            }    
        }
//Cette fonction confirme le nombre de fille      
        function countSexe(sexes){
            if(sexes > 2 || sexes <= 0){
                return false;
            }
            if(sexes > 0 && sexes<= 2){
                return true;
            }
        }
// Cette fonctin vérifie les champs et envoie..
        function checkInputs(){
            //lesmembres est un tableau des noms qui exstent
            let lesmembres = [];
            let lesnoms = [];
            let lessexes = [];
            let lesfille = 0;            
            inputs.forEach(input => {
                let leMembr = input.closest("div");
                let radios = leMembr.querySelectorAll('input[type="radio"]'); 
                radios.forEach(radio=>{
                    if(radio.checked){
                        lesmembres.push({"nom" : input.value, "sexe" : radio.value});
                        lessexes.push(radio.value);
                        
                        //je recupère le nombre de fille
                    }
                })
                //Je verifie que aucun doublon de nom n'est envoyé
                if(input.value !== ''){
                    lesnoms.push(input.value.replaceAll(' ', '').toLowerCase());
                }
            })
            lessexes.forEach(sexe=>{
                if(sexe === "F"){
                    lesfille++;
                }
            })
            if(checkText(lesnoms, inputs) && countSexe(lesfille)){ 
                console.log("post");
                document.getElementById("formulaire").submit();
            }else{
                console.log("nonpost");
                showRefreshError();
            }
        }
        //si tous c'est bien passé
        <?php
            if( isset($modalSucces) && $modalSucces === true ){
        ?>
                successModal();
        <?php    
            }
        ?>
        //si on a des boublons
        <?php
            if( isset($existe) && !empty($existe)){
        ?>
                occupes();
        <?php
            }
        ?>
        //si on a des hors de la classe
        <?php
            if(isset($etranger) && !empty($etranger)){
        ?>
                horsClasse();
        <?php
            }
        ?>
//cette partie me permet de désactiver automatiquement le 6e champ d'un groupe en même temps.     
        let nbrDe3 = document.getElementById("nbrDe3");
        if(nbrDe3.textContent === "3"){
            let sixs = document.querySelectorAll(".option");
            sixs.forEach(six=>{
                six.classList.add("hidden");
            })
        }

    </script>
</body>
</html>