<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plateforme de création de groupes GEI IT2</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        /* Style focus pour tes futurs inputs si nécessaire */
        input:focus { 
            transform: scale(1.01); 
            transition: all 0.2s; 
        }.glass-header {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(226, 232, 240, 0.8);
        }

        .animate-card {
            animation: slideUp 0.5s ease-out forwards;
            opacity: 0;
        }

        @keyframes slideUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        /* Effet de lueur au survol */
        .group-card:hover {
            box-shadow: 0 20px 25px -5px rgba(180, 83, 9, 0.1), 0 10px 10px -5px rgba(180, 83, 9, 0.04);
            border-color: #d97706;
        }
    </style>
</head>
<body class="bg-[#F8FAFC] min-h-screen">
    <header class="glass-header sticky top-0 z-40 transition-all">
        <nav>
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex justify-between h-20 items-center">
                    <div class="flex items-center gap-4">
                        <div class="bg-gradient-to-br from-amber-600 to-yellow-500 p-2.5 rounded-xl shadow-xs shadow-amber-200">
                            <a href="/siteDeGroupe/home">
                                <i class="ri-team-fill text-white text-2xl"></i>
                            </a>
                        </div>
                        <div>
                            <h2 class="policeTitre font-bold text-slate-800 text-lg leading-tight">GEI IT 2</h2>
                            <p class="text-[10px] text-slate-500 font-bold uppercase tracking-[0.2em]">INSTI Lokossa</p>
                        </div>
                    </div>
                    
                    <a href="/siteDeGroupe/create" class="flex items-center bg-slate-900 hover:bg-amber-700 text-white font-bold py-3 px-6 rounded-2xl shadow-xl transition-all hover:scale-105 active:scale-95 group">
                        <i class="ri-add-circle-fill mr-2 text-xl group-hover:rotate-90 transition-transform"></i> 
                        <span class="hidden sm:inline">Nouveau Groupe</span>
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-12">   
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm flex items-center justify-between group hover:border-amber-500 transition-colors">
                <div class="space-y-1">
                    <p class="text-xs font-black text-slate-400 uppercase tracking-widest">Total Groupes</p>
                    <p id="totalGroupes" class="text-3xl font-black text-slate-800">0</p>
                </div>
                <div class="bg-amber-50 p-4 rounded-2xl text-amber-600 group-hover:bg-amber-600 group-hover:text-white transition-all">
                    <i class="ri-community-line text-2xl"></i>
                </div>
            </div>
        </div>

        <div id="groupContainer" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        </div>
    </main>

    <footer class="py-8 bg-slate-800 text-white text-center border-t-4 border-yellow-600 mt-12">
        <p class="opacity-80">&copy; Copyright 2026 - GEI IT 2 INSTI Lokossa</p>
    </footer>

    <script>
        let groupes = <?= json_encode($lists ?? []) ?>;

        let lesgroupes = [];
        let k = -1;

        groupes.forEach(membre => {
            if(membre.chef == 1 || k === -1){
                k++;
                lesgroupes[k] = [];
            }
            lesgroupes[k].push(membre);
        });

function formaterCarteGroupe(groupe, index) {
    const nbMembres = groupe.length;

    const listeMembres = groupe.map((membre, i) => {
        const leRespo = i === 0;

        return `
            <li class="flex items-center p-3 rounded-2xl hover:bg-slate-50 transition-all border border-transparent hover:border-slate-100 group/item">

                <div class="w-9 h-9 rounded-full ${
                    leRespo 
                        ? 'bg-amber-600 text-white shadow-md' 
                        : 'bg-slate-100 text-slate-500'
                } flex items-center justify-center text-xs font-black mr-4 group-hover/item:scale-110 transition-transform">
                    ${i + 1}
                </div>

                <span class="capitalize text-slate-700 font-semibold text-sm">
                    ${(membre.nom ?? "").toUpperCase()} ${(membre.prenom ?? "").toLowerCase().trim()}
                </span>

                ${
                    leRespo 
                        ? '<span class="ml-auto text-[9px] font-black text-amber-600 uppercase tracking-tighter">Responsable</span>' 
                        : ''
                }

            </li>
        `;
    }).join('');

    return `
        <div class="bg-white rounded-3xl shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-slate-100 overflow-hidden">

            <!-- HEADER -->
            <div class="flex items-center justify-between px-5 py-4 bg-gradient-to-r from-slate-50 to-slate-100 border-b">
                <h2 class="text-sm font-black text-slate-700">
                    Groupe ${index+1}
                </h2>

                <span class="text-xs font-bold text-slate-400">
                    ${nbMembres} membres
                </span>
            </div>

            <!-- MEMBRES -->
            <div class="px-4 py-3 space-y-2">
                ${listeMembres}
            </div>

            <!-- FOOTER -->
            <div class="px-4 py-3 text-center border-t bg-slate-50">
                <span class="text-xs italic text-slate-400">
                    ${nbMembres} étudiants inscrits
                </span>
            </div>

        </div>
    `;
}

        function chargerGroupes() {
            const container = document.getElementById('groupContainer');

            document.getElementById('totalGroupes').innerText = lesgroupes.length;

            if(!container) return;

            container.innerHTML = lesgroupes
                .map((g, i) => formaterCarteGroupe(g, i))
                .join('');
        }

        window.onload = chargerGroupes;
    </script>   
</body>
</html>