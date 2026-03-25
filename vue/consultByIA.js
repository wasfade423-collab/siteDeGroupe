
        const groupesDeTest = [
            { matiere: "PHP", membres: ["Jean Dupont", "Marie Curie", "ALICE WATSON"] },
            { matiere: "POO Java", membres: ["Bob Marley", "Charlie Chaplin"] },
            { matiere: "GPL", membres: ["Prophète Samuel", "Nicolas Tesla", "Ada Lovelace", "Steve Jobs", "Elon Musk", "Grace Hopper"] }
        ];

        function formaterCarteGroupe(groupe, numero) {
            const nbMembres = groupe.membres.length;
            const delay = numero * 90; // Pour l'animation en cascade

            const listeMembres = groupe.membres.map((membre, i) => {
                const leRespo = i === 0;
                return `
                    <li class="flex items-center p-3 rounded-2xl hover:bg-slate-50 transition-all border border-transparent hover:border-slate-100 group/item">
                        <div class="w-9 h-9 rounded-full ${leRespo ? 'bg-amber-600 text-white shadow-md' : 'bg-slate-100 text-slate-500'} flex items-center justify-center text-xs font-black mr-4 group-hover/item:scale-110 transition-transform">
                            ${i + 1}
                        </div>
                        <span class="capitalize text-slate-700 font-semibold text-sm">${membre.toLowerCase().trim()}</span>
                        ${leRespo ? '<span class="ml-auto text-[9px] font-black text-amber-600 uppercase tracking-tighter">Responsable</span>' : ''}
                    </li>`;
            }).join('');

            return `
                <div class="group-card bg-white rounded-[2.5rem] p-2 border border-slate-200 transition-all duration-500 animate-card shadow-sm" style="animation-delay: ${delay}ms">
                    <div class="bg-slate-50 rounded-[2rem] p-6 mb-2">
                        <div class="flex justify-between items-start mb-4">
                            <span class="bg-amber-100 text-amber-700 text-[10px] px-3 py-1 rounded-full font-black uppercase tracking-widest">
                                ${groupe.matiere}
                            </span>
                        </div>
                        <h3 class="policeTitre text-2xl font-bold text-slate-800">Groupe 0${numero}</h3>
                    </div>
                    
                    <div class="px-4 py-2">
                        <ul class="space-y-1">
                            ${listeMembres}
                        </ul>
                    </div>
                    
                    <div class="p-4 mt-2 flex items-center justify-center border-t border-slate-50">
                        <span class="text-xs font-bold text-slate-400 italic">${nbMembres} étudiants inscrits</span>
                    </div>
                </div>
            `;
        }

        function chargerGroupes() {
            const container = document.getElementById('groupContainer');
            document.getElementById('totalGroupes').innerText = groupesDeTest.length;
            container.innerHTML = groupesDeTest.map((g, i) => formaterCarteGroupe(g, i + 1)).join('');
        }

        window.onload = chargerGroupes;