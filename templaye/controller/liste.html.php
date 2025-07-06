
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 ">
        <!-- Title -->
        <h1 class="text-3xl font-bold text-white mb-8">Liste des commandes</h1>

        <!-- Filters -->
        <div class="flex flex-wrap gap-4 mb-8">
            <div class="relative">
                <select class="bg-[#21301c] border border-gray-600 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-green-500 appearance-none pr-8">
                    <option>Filtrer par statut</option>
                    <option>Impayé</option>
                    <option>Payé</option>
                    <option>En cours</option>
                    <option>Livré</option>
                </select>
                <div class="absolute right-2 top-1/2 transform -translate-y-1/2 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </div>
            
            <div class="relative">
                <select class="bg-[#21301c] border border-gray-600 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-green-500 appearance-none pr-8">
                    <option>Filtrer par client</option>
                    <option>BAKARY DIASSY</option>
                    <option>ANONYME</option>
                    <option>ALI DIOP</option>
                </select>
                <div class="absolute right-2 top-1/2 transform -translate-y-1/2 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </div>
            
            <div class="relative">
                <select class="bg-[#21301c] border border-gray-600 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-green-500 appearance-none pr-8">
                    <option>Filtrer par État</option>
                    <option>Nouveau</option>
                    <option>En cours</option>
                    <option>Terminé</option>
                </select>
                <div class="absolute right-2 top-1/2 transform -translate-y-1/2 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Table -->
        <div class="bg-[#21301c] rounded-lg overflow-hidden shadow-xl border border-gray-600">
            <table class="w-full">
                <thead class="bg-[#21301c] border-b-2 ">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm font-medium text-gray-300 uppercase tracking-wider">
                            Numéro Commande
                        </th>
                        <th class="px-6 py-4 text-left text-sm font-medium text-gray-300 uppercase tracking-wider">
                            Client
                        </th>
                        <th class="px-6 py-4 text-left text-sm font-medium text-gray-300 uppercase tracking-wider">
                            Status
                        </th>
                        <th class="px-6 py-4 text-left text-sm font-medium text-gray-300 uppercase tracking-wider">
                            Facture
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    <?php foreach($commandes as $c): ?>
                        <tr class="hover:bg-gray-700 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                                
                                <?=htmlspecialchars('#COM_00'.$c[0]) ?>

                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">
                                <?= htmlspecialchars($c['nom']) ?>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 text-xs font-medium bg-[#21301c] border border-gray-600 text-gray-300 rounded-full">
                                    <?= htmlspecialchars($c['statut']) ?>
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <button class="bg-[#54d12b] hover:bg-green-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                                    voir
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-8">
            <nav class="flex items-center space-x-2">
                <button class="p-2 text-gray-400 hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                
                <button class="w-10 h-10 rounded-full bg-[#54d12b] text-white font-medium">
                    1
                </button>
                
                <button class="w-10 h-10 rounded-full bg-gray-700 text-gray-300 font-medium hover:bg-gray-600 transition-colors">
                    2
                </button>
                
                <button class="w-10 h-10 rounded-full bg-gray-700 text-gray-300 font-medium hover:bg-gray-600 transition-colors">
                    3
                </button>
                
                <button class="p-2 text-gray-400 hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </nav>
        </div>
    </main>
























